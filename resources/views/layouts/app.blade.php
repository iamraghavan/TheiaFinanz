<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <!-- required meta -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- #favicon -->
    <link rel="shortcut icon" href="{{ asset("/") }}" type="image/x-icon">
    <!-- #title -->
    <title>{{$title}}</title>

        <meta name="keywords" content="{{$keywords}}">
        <meta name="description" content="{{$description}}">
        <link rel="canonical" href="{{url()->current()}}"/>

    <!--  css dependencies start  -->
    <!-- bootstrap five css -->
    <link rel="stylesheet" href="{{ asset("/assets/vendor/bootstrap/css/bootstrap.min.css") }}">
    <!-- bootstrap-icons css -->
    <link rel="stylesheet" href="{{ asset("/npm/bootstrap-icons%401.10.5/font/bootstrap-icons.css") }}">
    <!-- nice select css -->
    {{-- <link rel="stylesheet" href="{{ asset("/assets/vendor/nice-select/css/nice-select.css") }}">
    <!-- magnific popup css -->
    <link rel="stylesheet" href="{{ asset("/assets/vendor/magnific-popup/css/magnific-popup.css") }}">
    <!-- slick css -->
    <link rel="stylesheet" href="{{ asset("/assets/vendor/slick/css/slick.css") }}">
    <!-- odometer css -->
    <link rel="stylesheet" href="{{ asset("/assets/vendor/odometer/css/odometer.css") }}">
    <!-- animate css -->
    <link rel="stylesheet" href="{{ asset("/assets/vendor/animate/animate.css") }}"> --}}
    <!-- css dependencies end  -->

    <!-- main css -->
    <link rel="stylesheet" href="{{ asset("/assets/css/style.css") }}">

    <style>
        .country-info {
            display: inline-block;
            margin-left: 10px; /* Adjust the margin as needed */
        }

        .flag {
            width: auto; /* Adjust the width of the flag as needed */
            height: 1.2rem; /* Maintain the aspect ratio */
            margin-left: 5px; /* Adjust the margin as needed */
        }

        /* Default style for the logo */
.logo {
    max-width: 100%; /* Ensure the logo doesn't exceed its container */
    height: auto; /* Maintain the aspect ratio */
}

/* Media query for mobile devices */
@media (max-width: 768px) {
    .logo {
        width: 12rem !important;
        max-width: 80%; /* Adjust the width for smaller screens */
    }
}

    </style>



</head>

@php
$countryCode = '';


$countriesResponse = Http::withoutVerifying()->get('https://restcountries.com/v3.1/all');
$countriesData = $countriesResponse->json();

foreach ($countriesData as $data) {
    if ($data['name']['common'] == $country) {
        $countryCode = strtolower($data['cca2']); // Get the country code
        break;
    }
}
@endphp


<body>

    <header class="header-section index ">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-xl nav-shadow" id="#navbar">
                        <a class="navbar-brand" href="{{ url("/") }}"><img style="width: 15rem; margin-top: 1rem;" src="{{ asset("/assets/tfinanz.png") }}" class="logo" alt="logo"></a>
                        <a class="navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                            <i class="bi bi-list"></i>
                        </a>

                        <div class="collapse navbar-collapse ms-auto " id="navbar-content">
                            <div class="main-menu index-page">
                                <ul class="navbar-nav mb-lg-0 mx-auto">

                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ url("/") }}">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ url("/about-us") }}">About Us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ url("/offerings") }}">offerings</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ url("/providers") }}">providers</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ url("/contact-us") }}">Contact us</a>
                                    </li>
                                </ul>
                                <div class="nav-right d-none d-xl-block">
                                    <div class="nav-right__search">

                                       <span class="text-uppercase country-info">   <b>  {{ Config::get('app.locale') }} </b> |

                                            @if(isset($country))
                                            @if($countryCode)
                                            <img  class="flag" src="https://flagcdn.com/{{ $countryCode }}.svg" alt="{{ $country }} Flag">
                                        @endif
                                            <b>{{ $country }}</b>


                                        @else


    @endif

                                        </span>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>




    <!-- Offcanvas More info-->
    <div class="offcanvas offcanvas-end " tabindex="-1" id="offcanvasRight">
        <div class="offcanvas-body custom-nevbar">
            <div class="row">
                <div class="col-md-7 col-xl-8">
                    <div class="custom-nevbar__left">
                        <button type="button" class="close-icon d-md-none ms-auto" data-bs-dismiss="offcanvas" aria-label="Close"><i class="bi bi-x"></i></button>
                        <ul class="custom-nevbar__nav mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url("/") }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url("/about-us") }}">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url("/offerings") }}">offerings</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ url("/providers") }}">providers</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ url("/contact-us") }}">Contact us</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-5 col-xl-4">
                    <div class="custom-nevbar__right">
                        <div class="custom-nevbar__top d-none d-md-block">
                            <button type="button" class="close-icon ms-auto" data-bs-dismiss="offcanvas" aria-label="Close"><i class="bi bi-x"></i></button>
                            <div class="custom-nevbar__right-thumb mb-auto">
                                <img src="assets/images/logo.png" alt="logo">
                            </div>
                        </div>
                        <ul class="custom-nevbar__right-location">
                            <li>
                                <p class="mb-2">Phone: </p>
                                <a href="tel:+1(720)250-6687" class="fs-4 contact">+1 (720) 250-6687</a>
                            </li>
                            <li class="location">
                                <p class="mb-2">Email: </p>
                                <a href="" class="fs-4 contact">contact@theiafinanz.com</a>
                            </li>
                            <li class="location">
                                <p class="mb-2">Location: </p>
                                <p class="fs-4 contact">8952 Snowball way, Parker, Colorado – 80134</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header-section end -->
@if ($errors->has('cf-turnstile-response'))
<div class="alert alert-danger">
    {{ $errors->first('cf-turnstile-response') }}
</div>
@endif

@if ($errors->any() && !$errors->has('cf-turnstile-response'))
<div class="alert alert-danger">
    {{ $errors->first() }}
</div>
@endif
    @yield('content')


    <footer class="footer footer-secondary">
        <div class="container">
            <div class="row section">
                <div class="col-12">
                    <div class="footer-secondary__content">
                        <div class="footer__logo">
                            <a href="{{ url("/") }}">
                                <img style="width: 10rem" src="{{ asset("/assets/tfinanz.png") }}" alt="Logo">
                            </a>
                        </div>
                        <div class="quick-link order-1 order-lg-0">
                            <ul class="quick-link__list">

                                <li><a href="{{ url("/policy/privacy") }}">Privacy policy</a></li>
                                <li><a href="{{ url("/policy/terms-and-conditions") }}">Terms & Conditions</a></li>
                                <li><a href="{{ url("/contact-us") }}">Contact us</a></li>

                            </ul>
                        </div>
                        <div class="social">

                            <a href="https://www.instagram.com/theia_finanz" target="_blank" class="btn_theme social_box"><i class="bi bi-instagram"></i><span></span></a>
                            <a href="mailto:letstalk@theiafinanz.com" class="btn_theme social_box"><i class="bi bi-envelope"></i><span></span></a>
                            <a href="https://api.whatsapp.com/send/?phone=1720250-6687&text=Hi!&type=phone_number&app_absent=0" class="btn_theme social_box"><i class="bi bi-whatsapp"></i><span></span></a>
                            <a href="javascript:void(0);" class="btn_theme social_box"><i class="bi bi-facebook"></i><span></span></a>



                        </div>
                    </div>
                </div>
            </div>
            @php
    $currentYear = date('Y');
@endphp
            <div class="row">
                <div class="col-12">
                    <div class="footer__copyright">
                        <p class="copyright text-center">Copyright © {{$currentYear}}  <a href="{{ url("#") }}" class="secondary_color">Vaibhaav LLC</a> - Designed By <a href="{{ url("#") }}" class="secondary_color">Bumble Bees</a> | <a style="color: green;
                            font-weight: 700;
                            text-transform: uppercase;" href="{{ url("/health") }}">Server Status</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>




    <a href="{{ url("#") }}" class="scrollToTop"><i class="bi bi-chevron-double-up"></i></a>





    <script src="{{ asset("/assets/vendor/bootstrap/js/bootstrap.bundle.min.js") }}"></script>
    <!-- nice select js -->
    {{-- <script src="{{ asset("/assets/vendor/nice-select/js/jquery.nice-select.min.js") }}"></script>
    <!-- magnific popup js -->
    <script src="{{ asset("/assets/vendor/magnific-popup/js/jquery.magnific-popup.min.js") }}"></script>
    <!-- circular-progress-bar -->
    <script src="{{ asset("/../../gh/tomik23/circular-progress-bar%40latest/docs/circularProgressBar.min.js") }}"></script>
    <!-- slick js -->
    <script src="{{ asset("/assets/vendor/slick/js/slick.min.js") }}"></script>
    <!-- odometer js -->
    <script src="{{ asset("/assets/vendor/odometer/js/odometer.min.js") }}"></script>
    <!-- viewport js -->
    <script src="{{ asset("/assets/vendor/viewport/viewport.jquery.js") }}"></script> --}}
    <!-- jquery ui js -->
    <script src="{{ asset("/assets/vendor/jquery-ui/jquery-ui.min.js") }}"></script>
    <!-- wow js -->
    {{-- <script src="{{ asset("/assets/vendor/wow/wow.min.js") }}"></script> --}}

    <script src="{{ asset("/assets/vendor/jquery-validate/jquery.validate.min.js") }}"></script>

    <!--  / js dependencies end  -->

    <!-- plugins js -->
    <script src="{{ asset("/assets/js/plugins.js") }}"></script>
    <!-- main js -->
    <script src="{{ asset("/assets/js/main.js") }}"></script>
    @turnstileScripts()

</body>
</html>
