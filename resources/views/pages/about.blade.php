@extends('layouts.app')
@section('content')

<section class="banner">
    <div class="container ">
        <div class="row gy-4 gy-sm-0 align-items-center">
            <div class="col-12 col-sm-6">
                <div class="banner__content">
                    <h1 class="banner__title display-4 wow fadeInLeft" data-wow-duration="0.8s" style="visibility: visible; animation-duration: 0.8s; animation-name: fadeInLeft;">about us</h1> 
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb wow fadeInRight" data-wow-duration="0.8s" style="visibility: visible; animation-duration: 0.8s; animation-name: fadeInRight;">
                            <li class="breadcrumb-item"><a href="{{ url("/") }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">about us</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="col-12 col-sm-6">
                <div class="banner__thumb text-end">
                    {{-- <img src="{{ asset("/assets/page-pana.png") }}" alt="image"> --}}
                </div>
            </div>
        </div>
    </div>
</section>


<section class="choose-us choose-us--secondary">
   
    <div class="container">
        <div class="row gy-5 gy-lg-0 justify-content-between align-items-center section">
            <div class="col-12 col-md-8 col-lg-5 mx-auto mx-lg-0 order-1 order-lg-0">
                <div class="choose-us__thumb unset-xxl-left me-xl-4 me-xxl-0 wow fadeInDown" data-wow-duration="0.8s" style="visibility: visible; animation-duration: 0.8s; animation-name: fadeInDown;">
                    <img src="{{ asset("/assets/page-pana.png") }}" alt="images">
                </div>
            </div>
            <div class="col-12 col-lg-7 col-xxl-6">
                <div class="section__content ms-lg-4 ms-xl-0">
                    <p class="section__content-sub-title headingFour wow fadeInDown" data-wow-duration="0.8s" style="visibility: visible; animation-duration: 0.8s; animation-name: fadeInDown;"> Why Choose Us</p>
                    <h2 class="section__content-title wow fadeInUp" data-wow-duration="0.8s" style="visicomponentsbility: visible; animation-duration: 0.8s; animation-name: fadeInUp;">Empowering Your Financial Future</h2>
                    <p class="section__content-text wow fadeInDown" data-wow-duration="0.8s" style="visibility: visible; animation-duration: 0.8s; animation-name: fadeInDown;">Welcome to Theia Finanz, your trusted financial consulting partner. We understand that each individual has unique financial needs and requirements. Therefore, we provide tailored solutions to help you achieve financial stability and success. Our team of experts collaborates with you to chart a course towards a secure financial future. 
                    </p>

                    <p class="section__content-text wow fadeInDown" data-wow-duration="0.8s" style="visibility: visible; animation-duration: 0.8s; animation-name: fadeInDown;">We work with an independent marketing company that simplifies the process of securing health and financial well-being. We facilitate connections to the right opportunities and relationships, enabling individuals to maximize life's possibilities. 
                    </p>

                    <a href="{{ url("/offerings") }}" class="btn_theme btn_theme_active mt_40 wow fadeInDown" data-wow-duration="0.8s" style="visibility: visible; animation-duration: 0.8s; animation-name: fadeInDown;">Offerings <i class="bi bi-arrow-up-right"></i><span></span></a>
                    <a href="{{ url("/providers") }}" class="btn_theme btn_theme_active mt_40 wow fadeInDown" data-wow-duration="0.8s" style="visibility: visible; animation-duration: 0.8s; animation-name: fadeInDown;">Providers <i class="bi bi-arrow-up-right"></i><span></span></a>
                </div>
            </div>
        </div>
    </div>
</section>

@include('components.contact')

@endsection