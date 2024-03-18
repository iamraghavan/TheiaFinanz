@extends('layouts.app')
@section('content')

<style>


ul.custom-list {
    list-style-type: none; /* Remove default list styling */
}

ul.custom-list li:nth-child(1) {

    margin-top: 3rem;

}

ul.custom-list li {
    font-style: italic; 
    color: #bd8a60 !important;
    margin: 10px 0; 
    padding-left: 20px; 
    position: relative;
    text-align: left; /* Justify text to the left */
}

ul.custom-list li::before {
    content: "\2192"; /* Unicode character for a right arrow */
    position: absolute;
    left: 0;
    top: 50%;
    transform: translateY(-50%);
    margin-right: 10px; /* Adjust the spacing between the arrow and text */
    font-family: Arial, sans-serif; /* Specify a font family for the arrow */
}

.custom_paragraph {
    font-style: italic;
    color: #bd8a60 !important;
    margin: 10px 0;
    line-height: 1.9rem;
    font-weight: 600;
    position: relative;
    text-align: justify;
    text-transform: uppercase;
}

</style>


<section class="banner">
    <div class="container ">
        <div class="row gy-4 gy-sm-0 align-items-center">
            <div class="col-12 col-sm-6">
                <div class="banner__content">
                    <h1 class="banner__title display-4 wow fadeInLeft" data-wow-duration="0.8s" style="visibility: visible; animation-duration: 0.8s; animation-name: fadeInLeft;">Offerings</h1> 
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb wow fadeInRight" data-wow-duration="0.8s" style="visibility: visible; animation-duration: 0.8s; animation-name: fadeInRight;">
                            <li class="breadcrumb-item"><a href="{{ url("/") }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Offerings</li>
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


<section class="feature feature--tertiary section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-12 col-xxl-12">
                <div class="section__header">
                   
                    <h2 class="section__header-title wow fadeInUp" data-wow-duration="0.8s" style="visibility: visible; animation-duration: 0.8s; animation-name: fadeInUp;">Diversified Products & Services from Industry Leaders</h2>
                 
                </div>
            </div>
        </div>
        <div class="row g-3 g-sm-2 g-md-3 g-xxl-4">
            <div class="col-12 col-sm-6 col-xxl-4">
                <div class="card card--custom">
                    <div class="card__content">
                        <h4 class="card__title"><a href="{{ url("/") }}" tabindex="-1">Annuities</a></h4>
                        <p class="fs-small custom_paragraph">Annuities are financial products that guarantee a steady stream of retirement income.</p>
                        <ul class="custom-list">
                            <li>Tax-deferred growth</li>
                            <li>Accumulation potential</li>
                            <li>Level of protection</li>
                            <li>Retirement income</li>
                            <li>Income after you retire – in some cases, income for life</li>
                        </ul>
                        
                    </div>
                </div>
            </div>
           
            <div class="col-12 col-sm-6 col-xxl-4">
                <div class="card card--custom">
                    <div class="card__content">
                        <h4 class="card__title"><a href="{{ url("/") }}" tabindex="-1">Retirement Planning</a></h4>
                        <p class="fs-small custom_paragraph ">Planning for retirement is a way to help you maintain the same quality of life in the future. You might not want to work forever or be able to fully rely on Social Security.</p>
                        <ul class="custom-list">
                            <li>When to start</li>
                            <li>Calculating how much money you’ll need</li>
                            <li>Setting priorities</li>
                            <li>Retirement income</li>
                            <li>Choosing investments</li>
                        </ul>
                        
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-xxl-4">
                <div class="card card--custom">
                    <div class="card__content">
                        <h4 class="card__title"><a href="{{ url("/") }}" tabindex="-1">Tax Free Investment</a></h4>
                        <p class="fs-small custom_paragraph">Investing is a powerful way to grow your savings over time. However, one of the downsides is that you generally have to pay taxes on your investment gains. And of course, the more you pay in taxes, the less of your returns you get to keep. But with the right strategy, it’s possible to minimize the amount of taxes you’ll pay on your investments. </p>
                        <p class="fs-small custom_paragraph">If you have questions about any of these tax-efficient investments work with Theia Finanz.</p>
                        
                        {{-- <ul class="custom-list">
                            <li>Tax-deferred growth</li>
                            <li>Accumulation potential</li>
                            <li>Level of protection</li>
                            <li>Retirement income</li>
                            <li>Income after you retire – in some cases, income for life</li>
                        </ul> --}}
                        
                    </div>
                </div>
            </div>
        </div>

        {{-- Second Path --}}
        

        <div class="row justify-content-center" style='margin-top:3rem;'>
            <div class="col-12 col-lg-12 col-xxl-12">
                <div class="section__header">
                   
                    <h2 class="section__header-title wow fadeInUp" data-wow-duration="0.8s" style="visibility: visible; animation-duration: 0.8s; animation-name: fadeInUp;">What type of financial services is right for you ?</h2>
                 
                </div>
            </div>
        </div>
        <div class="row g-3 g-sm-2 g-md-3 g-xxl-4">
            <div class="col-12 col-sm-6 col-xxl-4">
                <div class="card card--custom">
                    <div class="card__content">
                        <h4 class="card__title"><a href="{{ url("/") }}" tabindex="-1">Term Life Insurance</a></h4>
                        <p class="fs-small custom_paragraph">Term life insurance is typically the most affordable option to protect your family in the event that something happens to you. It’s a policy that covers you for a specific amount of time, or term </p>
                        <ul class="custom-list">
                            <li>Term: 10, 20, 20, 35 Yr</li>
                            <li>Determine how much you need</li>
                            <li>Living Benefits</li>
                            <li>Retirement income</li>
                            <li>Replace lost income</li>
                        </ul>
                        
                    </div>
                </div>
            </div>
           
            <div class="col-12 col-sm-6 col-xxl-4">
                <div class="card card--custom">
                    <div class="card__content">
                        <h4 class="card__title"><a href="{{ url("/") }}" tabindex="-1">Permanent Life Insurance</a></h4>
                        <p class="fs-small custom_paragraph ">Permanent insurance offers lifelong protection and an opportunity to build cash value over time.</p>
                        <ul class="custom-list">
                            <li>Lifetime coverage</li>
                            <li>Calculating how much money you’ll need</li>
                            <li>Tax-deferred cash value</li>
                            <li>Retirement income</li>
                            <li>Potential to borrow against cash value</li>
                        </ul>
                        
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-xxl-4">
                <div class="card card--custom">
                    <div class="card__content">
                        <h4 class="card__title"><a href="{{ url("/") }}" tabindex="-1">Indexed Universal Life (IUL)</a></h4>
                        <p class="fs-small custom_paragraph">IUL policy with more flexibility to address concerns throughout your life</p>
                        <ul class="custom-list">
                            <li>Leave a death benefit to loved ones</li>
                            <li>Build a financial  resource – without market risk</li>
                            {{-- <li>Have access to funds for future needs – it’s supplementing retirement income, paying for college, or covering an unexpected expense or major purchase</li> --}}
                            
                        </ul>
                        
                    </div>
                </div>
            </div>
        </div>


        <div class="row justify-content-center" style='margin-top:3rem;'>
            <div class="col-12 col-lg-12 col-xxl-12">
                <div class="section__header">
                   
                    <h2 class="section__header-title wow fadeInUp" data-wow-duration="0.8s" 
                    style="visibility: visible; animation-duration: 0.8s; animation-name: fadeInUp;">
                    
                    We work with top companies to provide products that help meet our customers' diverse needs.
                
                </h2>
                 
                </div>
            </div>
        </div>
        <div class="row g-3 g-sm-2 g-md-3 g-xxl-4">
            <div class="col-12 col-sm-6 col-xxl-4">
                <div class="card card--custom">
                    <div class="card__content">
                        <h4 class="card__title"><a href="{{ url("/") }}" tabindex="-1">Wealth Management</a></h4>
                        
                        
                        <ul class="custom-list">
                            <li>Financial Needs Analysis (FNA)</li>
                            <li>D.I.M.E. + Analysis</li>
                            <li>Advisory Services</li>
                            <li>Investment Banking</li>
                            <li>Principal Investments</li>
                            <li>Real Estate Solutions</li>
                            <li>Retail Solutions</li>
                            <li>Wealth Management</li>
                            <li>Venture Capital</li>
                            <li>Whole Sale & Industrial Solutions</li>
                        </ul>
                        
                        
                    </div>
                </div>
            </div>
           
            <div class="col-12 col-sm-6 col-xxl-4">
                <div class="card card--custom">
                    <div class="card__content">
                        <h4 class="card__title"><a href="{{ url("/") }}" tabindex="-1">Will & Trust</a></h4>
                        
                        
                        <ul class="custom-list">
                            <li>Grow your estate planning practice by working with a national leader.</li>
                            <li>Comprehensive and efficient estate planning process.</li>
                            <li>Qualified attorneys.</li>
                            <li>Fixed-fee pricing.</li>
                            <li>Nationwide access.</li>
                            <li>Protect the legacy you worked hard to build.</li>
                        </ul>
                        
                        
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-xxl-4">
                <div class="card card--custom">
                    <div class="card__content">
                        <h4 class="card__title"><a href="{{ url("/") }}" tabindex="-1">Payment Platform</a></h4>
                        <p class="fs-small custom_paragraph">Helps you supercharge your business with best-in-class payment processing options</p>
                        <ul class="custom-list">
                            <li>Payment systems for every business</li>
                            <li>Payments on the go</li>
                            <li>Transform Your eCommerce Journey</li>
                            <li>Pricing programs to fit your business</li>
                            <li>API &amp; Integrations</li>
                            <li>Accept payments globally</li>
                        </ul>
                        
                        
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

@include('components.contact')

@endsection