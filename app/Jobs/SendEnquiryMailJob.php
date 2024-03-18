<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

use App\Mail\EnquiryMail;
use Illuminate\Support\Facades\Mail;



class SendEnquiryMailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

      public $enquiryData;

    public function __construct($enquiryData)
    {
        $this->enquiryData = $enquiryData;
    }

    public function handle()
    {
        // Send email to saravanan sir
        Mail::to('letstalk@theiafinanz.com')->send(new EnquiryMail($this->enquiryData));
    }
}
