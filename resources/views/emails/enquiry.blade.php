@component('mail::message')
# New Enquiry

**Name:** {{ $enquiryDetails['fname'] }} {{ $enquiryDetails['lname'] }} <br>
**Email:** {{ $enquiryDetails['email'] }}<br>
**Phone:** {{ $enquiryDetails['phone'] }}<br>
**Interest:** {{ $enquiryDetails['interest'] }}<br>
@if (isset($enquiryDetails['status']))
    **Status:** {{ $enquiryDetails['status'] }}<br>
@endif

**Message:**
{{ $enquiryDetails['message'] }}<br><br>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
