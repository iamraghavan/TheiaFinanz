{{-- {{ Config::get('app.locale') }} --}}

@extends('layouts.app')
@section('content')
<!-- Hero Section Start -->
<section class="hero">
    {{-- <div class="hero__animation">
        <img src="assets/images/hero_vector_dollar.png" alt="Image">
        <img src="assets/images/hero_vector_message.png" alt="Image">
        <img src="assets/images/hero_vector_dollar.png" alt="Image">
        <img src="assets/images/hero_vector_setting.png" alt="Image">
        <img src="assets/images/hero_vector_arrow.png" alt="Image">
    </div> --}}
    <div class="container">
        <div class="row gy-5 gy-lg-0 align-items-center justify-content-between">
            <div class="col-12 col-lg-6">
                <div class="section__content">
                    <span class="section__content-sub-title headingFour wow fadeInDown" data-wow-duration="0.8s"> Unlocking Financial Freedom</span>
                    <h1 class="section__content-title display-3 wow fadeInUp" data-wow-duration="0.8s">Through
                        <span class="word d-inline-flex">
                            <span data-wow-duration="0.6s" class="letter wow fadeInDown">S</span>
                            <span data-wow-duration="0.6s" data-wow-delay="0.1s" class="letter wow fadeInDown">t</span>
                            <span data-wow-duration="0.6s" data-wow-delay="0.2s" class="letter wow fadeInDown">r</span>
                            <span data-wow-duration="0.6s" data-wow-delay="0.3s" class="letter wow fadeInDown">a</span>
                            <span data-wow-duration="0.6s" data-wow-delay="0.4s" class="letter wow fadeInDown">t</span>
                            <span data-wow-duration="0.6s" data-wow-delay="0.5s" class="letter wow fadeInDown">e</span>
                            <span data-wow-duration="0.6s" data-wow-delay="0.6s" class="letter wow fadeInDown">g</span>
                            <span data-wow-duration="0.6s" data-wow-delay="0.6s" class="letter wow fadeInDown">i</span>
                            <span data-wow-duration="0.6s" data-wow-delay="0.6s" class="letter wow fadeInDown">c</span>
                        </span>
                        Planning
                    </h1>
                    <p class="section__content-text wow fadeInDown" data-wow-duration="0.8s">Empower your financial journey with Theia Finanz - unlocking financial freedom through strategic planning</p>
                    <div class="btn-group mt_40 wow fadeInUp" data-wow-duration="0.8s">
                        <a href="{{url('/contact-us')}}" class="btn_theme btn_theme_active">Contact us<i class="bi bi-arrow-up-right"></i><span></span></a>
                        <a href="{{url('/about-us')}}" class="btn_theme ">About us<i class="bi bi-arrow-up-right"></i><span></span></a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xxl-5">
                <div class="" data-wow-duration="0.8s">
                    <img src="{{asset('assets/images/money-cuate.svg')}}" alt="Image">
                </div>
            </div>
        </div>
    </div>
</section>
<!--Hero Section End -->





<section class="working-process section ">
    <div class="container mobile-session">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-6 col-xxl-5">
                <div class="section__header">

                    <h2 class="section__header-title wow fadeInUp" data-wow-duration="0.8s" style="visibility: visible; animation-duration: 0.8s; animation-name: fadeInUp;">Why Choose Theia Finanz</h2>

                </div>
            </div>
        </div>
        <div class="row g-2 g-md-4  wow fadeInUp" data-wow-duration="0.8s" style="visibility: visible; animation-duration: 0.8s; animation-name: fadeInUp;">
            <div class="col-12 col-sm-6 col-xxl-4">
                <div class="card card--custom1">

                    <div class="card__content">
                        <h4 class="card__title1"><a href="{{ url("/") }}" tabindex="-1">Personalized Financial Planning</a></h4>
                        <p class="fs-small"> Theia Finanz values tailoring financial plans to your individual needs and goals. We focus on understanding your unique situation to create personalized strategies for your success.</p>

                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-xxl-4">
                <div class="card card--custom1">

                    <div class="card__content">
                        <h4 class="card__title1"><a href="{{ url("/") }}" tabindex="-1">Cutting-Edge Financial Solutions</a></h4>
                        <p class="fs-small">We embrace the latest financial technology to provide innovative solutions. Rest assured, you'll always receive cutting-edge services that meet your evolving needs.</p>

                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-xxl-4">
                <div class="card card--custom1">

                    <div class="card__content">
                        <h4 class="card__title1"><a href="{{ url("/") }}" tabindex="-1">Expert Financial Advice</a></h4>
                        <p class="fs-small">Rely on our experienced advisors for expert financial advice. Our dedicated team with years of industry knowledge is committed to helping you make well-informed decisions about your finances.</p>

                    </div>
                </div>
            </div>

        </div>

        <div class="row gy-5 mt-6 gy-lg-0 align-items-center justify-content-between">
            <div class="col-12 col-lg-12 text-center">
                <div class="section__content">

                    <h1 class="section__content-title display-5 wow fadeInUp mt-3 text-uppercase" data-wow-duration="0.8s">learn how to be an entrepreneur in financial services</h1>

                </div>
            </div>

        </div>
    </div>

    <div class="container">

    </div>
</section>

<style>
    @media only screen
    and (min-width : 320px) {
    .mobile-session{
        margin-top: 3rem;
    }
.section__content{
    margin-top: 3rem;
}
    }

    @media only screen
    and (min-width : 1600px) {
    .section__content{
    margin-top: 6rem;
    }
    }
</style>
@endsection
