@extends('layouts.app')
@section('content')



<section class="error-page text-center section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9 col-xxl-8">
                <div class="error-page__thumb wow fadeInDown" data-wow-duration="0.8s" style="visibility: visible; animation-duration: 0.8s; animation-name: fadeInDown;">
                    {{-- <img src="assets/images/error_page.png" alt="images"> --}}
                </div>
            </div>
            <div class="col-12 col-md-8 col-xxl-6">
                <div class="section__content mt-5">
                    <h2 class="section__content-title wow fadeInUp" data-wow-duration="0.8s" style="visibility: visible; animation-duration: 0.8s; animation-name: fadeInUp;">Thank you for your inquiry. 
                    We will review your request promptly and get back to you shortly!! </h2> 
                    <p class="wow fadeInDown" data-wow-duration="0.8s" style="visibility: visible; animation-duration: 0.8s; animation-name: fadeInDown;">You will be redirected to the previous page in 15 seconds, or click the home button to redirect.</p>
                    <a href="{{url('/')}}" class="btn_theme btn_theme_active mt_40  wow fadeInUp" data-wow-duration="0.8s" style="visibility: visible; animation-duration: 0.8s; animation-name: fadeInUp;">Back To Home<i class="bi bi-arrow-up-right"></i><span></span></a>
                </div>
            </div>
        </div>
    </div>
</section>

@php
    echo '<meta http-equiv="refresh" content="15;url='.url()->previous().'">';
@endphp


@endsection