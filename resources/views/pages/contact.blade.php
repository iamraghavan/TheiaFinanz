@extends('layouts.app')
@section('content')

<section class="banner">
    <div class="container ">
        <div class="row gy-4 gy-sm-0 align-items-center">
            <div class="col-12 col-sm-6">
                <div class="banner__content">
                    <h1 class="banner__title display-4 wow fadeInLeft" data-wow-duration="0.8s" style="visibility: visible; animation-duration: 0.8s; animation-name: fadeInLeft;">Contact us</h1> 
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb wow fadeInRight" data-wow-duration="0.8s" style="visibility: visible; animation-duration: 0.8s; animation-name: fadeInRight;">
                            <li class="breadcrumb-item"><a href="{{ url("/") }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact us</li>
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

@include('components.contact')

@endsection