<?php

namespace App\Http\Controllers;

use App\Jobs\SendEnquiryMailJob;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\EnquiryMail;
use Illuminate\Support\Facades\Queue;
use Illuminate\Validation\Rule;
use RyanChandler\LaravelCloudflareTurnstile\Rules\Turnstile;
use Illuminate\Support\Facades\Session;

class EnquiryController extends Controller
{
    public function submitEnquiry(Request $request, Turnstile $turnstile)
    {
        // Validate Turnstile response
        $request->validate([
            'cf-turnstile-response' => ['required', $turnstile],
        ]);

        // Validate other form fields
        $request->validate([
            'fname' => 'required|string',
            'lname' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'interest' => 'required|string',
            'status' => 'nullable|string',
            'message' => 'nullable|string',
        ]);

        // If validation fails, redirect back with error messages
        if ($request->fails()) {
            return redirect()->back()->withErrors($request->errors())->withInput();
        }

        // Dispatch SendEnquiryMailJob to send email asynchronously
        SendEnquiryMailJob::dispatch($request->all())->onQueue('emails');

        // Redirect to thanks route with success message
        return redirect()->route('thanks')->with('success', 'Your enquiry has been submitted successfully!');
    }
}
