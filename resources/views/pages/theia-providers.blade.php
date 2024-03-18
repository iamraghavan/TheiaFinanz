@extends('layouts.app')
@section('content')



<section class="banner">
    <div class="container ">
        <div class="row gy-4 gy-sm-0 align-items-center">
            <div class="col-12 col-sm-6">
                <div class="banner__content">
                    <h1 class="banner__title display-4 wow fadeInLeft" data-wow-duration="0.8s" style="visibility: visible; animation-duration: 0.8s; animation-name: fadeInLeft;">Providers</h1> 
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb wow fadeInRight" data-wow-duration="0.8s" style="visibility: visible; animation-duration: 0.8s; animation-name: fadeInRight;">
                            <li class="breadcrumb-item"><a href="{{ url("/") }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Providers</li>
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

<div class="container">
  <h2>Licensed Life - USA</h2>
   <section class="customer-logos slider">
      <div class="slide"><img src="{{url('/assets/logoshow/1.webp')}}" class="img-fluid" alt="Logo 1"></div>
      <div class="slide"><img src="{{url('/assets/logoshow/2.webp')}}" class="img-fluid" alt="Logo 1"></div>
      <div class="slide"><img src="{{url('/assets/logoshow/3.webp')}}" class="img-fluid" alt="Logo 1"></div>
      <div class="slide"><img src="{{url('/assets/logoshow/4.webp')}}" class="img-fluid" alt="Logo 1"></div>
      <div class="slide"><img src="{{url('/assets/logoshow/5.webp')}}" class="img-fluid" alt="Logo 1"></div>
      <div class="slide"><img src="{{url('/assets/logoshow/6.webp')}}" class="img-fluid" alt="Logo 1"></div>
      <div class="slide"><img src="{{url('/assets/logoshow/7.webp')}}" class="img-fluid" alt="Logo 1"></div>
      <div class="slide"><img src="{{url('/assets/logoshow/8.webp')}}" class="img-fluid" alt="Logo 1"></div>
      <div class="slide"><img src="{{url('/assets/logoshow/9.webp')}}" class="img-fluid" alt="Logo 1"></div>
      <div class="slide"><img src="{{url('/assets/logoshow/10.webp')}}" class="img-fluid" alt="Logo 1"></div>
   </section>
</div>

<div class="container" style="margin-top: 1.3rem">
  <h2>Referral - USA</h2>
   <section class="customer-logos slider" style="
   text-align: -webkit-center;
">
      <div class="slide"><img src="{{url('/assets/logoshow/11.webp')}}" class="img-fluid" alt="Logo 1"></div>
      <div class="slide"><img src="{{url('/assets/logoshow/12.webp')}}" class="img-fluid" alt="Logo 1"></div>
      <div class="slide"><img src="{{url('/assets/logoshow/13.webp')}}" class="img-fluid" alt="Logo 1"></div>
      <div class="slide"><img src="{{url('/assets/logoshow/14.webp')}}" class="img-fluid" alt="Logo 1"></div>
   
   </section>
</div>


<div class="container" style="margin-bottom: 1.3rem; margin-top:2rem">
  <h2 style="">Licensed Health - USA</h2>
   <section class="customer-logos slider" style="
   text-align: -webkit-center;
">
      <div class="slide"><img src="{{url('/assets/logoshow/21.webp')}}" class="img-fluid" alt="Logo 1"></div>
      <div class="slide"><img src="{{url('/assets/logoshow/22.webp')}}" class="img-fluid" alt="Logo 1"></div>
     
   </section>
</div>
 



  <style>
.container > h2{
  text-align: center;
    margin-bottom: 4rem
}
/* Slider */

.slick-slide {
  justify-content: center;
  align-items: center;

    margin: 0px 20px;
}

.slick-slide img {
    width: 100%;
}

.slick-slider
{
    position: relative;
    display: block;
    box-sizing: border-box;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
            user-select: none;
    -webkit-touch-callout: none;
    -khtml-user-select: none;
    -ms-touch-action: pan-y;
        touch-action: pan-y;
    -webkit-tap-highlight-color: transparent;
}

.slick-list
{
    position: relative;
    display: block;
    overflow: hidden;
    margin: 0;
    padding: 0;
}
.slick-list:focus
{
    outline: none;
}
.slick-list.dragging
{
    cursor: pointer;
    cursor: hand;
}

.slick-slider .slick-track,
.slick-slider .slick-list
{
    -webkit-transform: translate3d(0, 0, 0);
       -moz-transform: translate3d(0, 0, 0);
        -ms-transform: translate3d(0, 0, 0);
         -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
}

.slick-track
{
    position: relative;
    top: 0;
    left: 0;
    display: block;
}
.slick-track:before,
.slick-track:after
{
    display: table;
    content: '';
}
.slick-track:after
{
    clear: both;
}
.slick-loading .slick-track
{
    visibility: hidden;
}

.slick-slide
{
    display: none;
    float: left;
    height: 100%;
    min-height: 1px;
}
[dir='rtl'] .slick-slide
{
    float: right;
}
.slick-slide img
{
    display: block;
}
.slick-slide.slick-loading img
{
    display: none;
}
.slick-slide.dragging img
{
    pointer-events: none;
}
.slick-initialized .slick-slide
{
    display: block;
}
.slick-loading .slick-slide
{
    visibility: hidden;
}
.slick-vertical .slick-slide
{
    display: block;
    height: auto;
    border: 1px solid transparent;
}
.slick-arrow.slick-hidden {
    display: none;
}
  </style>
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>

  <script>

$(document).ready(function(){
    $('.customer-logos').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 3
            }
        }]
    });
});
  </script>

@endsection