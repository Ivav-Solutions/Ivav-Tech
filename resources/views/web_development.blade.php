@extends('layouts.frontend')

@section('navbar')
@includeIf('layouts.navbar')
@endsection

@section('page-content')
<div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h2>Service</h2>
            <ul>
                <li><a href="/">Home</a></li>
                <li class="active">Web Development</li>
            </ul>
        </div>
    </div>
</div>

<section class="home-case pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <span>We offer professional web development services at affordable rates to help your business attract more visitors and keep them on your site!</span>
            <h2>Web Development</h2>
            <div class="row">
                <div class="col-lg-4">
                    <p style="text-align: justify">Web Development is simply the creation and maintenance of websites. Make no mistake, the process of web development starts from single-page-websites to complex, multi-dimensional web applications.</p>
                </div>
                <div class="col-lg-4">
                    <p style="text-align: justify">Websites can be developed for the Internet (I.e - for general access), or for an Intranet (Internal Access). Whichever it is, the process - however simply defined, is one that requires expertise and experience. Primarily because it is an ever-growing field fueled by the demands of everyday consumers which may be simple, or may be complex.</p>
                </div>
                <div class="col-lg-4">
                    <p style="text-align: justify">Because Websites can and have been used to promote businesses or enhance the ease of doing business. {{config('app.name')}} has created a branch, primarily dedicated to creating simple / complex, easily usable, secure websites and web applications for our clients.</p>
                </div>
            </div>
        </div>
        <div class="case">
            <ul class="all-case">
                <li class="active" data-filter="*"><span>We are proud of our work. Check them out.</span></li>
            </ul>
        </div>
        <div class="row case-list" style="position: relative; height: auto;">
            <div class="col-lg-4 col-sm-6 item">
                <div class="single-case">
                    <div class="case-img">
                        <a href="#">
                            <img src="{{URL::asset('images/products/ivav_tech.jpg')}}" alt="case">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 item">
                <div class="single-case">
                    <div class="case-img">
                        <a href="#">
                            <img src="{{URL::asset('images/products/ivav_travel.jpeg')}}" alt="case">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="case-btn text-center">
            <p><a href="/contact">Contact us today </a></p>
        </div>
    </div>
</section>

<div class="feature-area bg-color ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="contnet">
                    <div class="feature-tittle"><span>Features</span>
                        <h2>industries We Serve</h2>
                    </div>
                    <ul>
                        <li><i class="flaticon-correct"></i>Retail and Ecommerce</li>
                        <li><i class="flaticon-correct"></i>Fintech</li>
                        <li><i class="flaticon-correct"></i>Education and E-Learning</li>
                        <li><i class="flaticon-correct"></i>Health</li>
                        <li><i class="flaticon-correct"></i>Logistics</li>
                        <li><i class="flaticon-correct"></i>Real Estate</li>
                        <li><i class="flaticon-correct"></i>Travel</li>
                        <li><i class="flaticon-correct"></i>Food and Restaurant</li>
                        <li><i class="flaticon-correct"></i>Agriculture</li>
                        <li><i class="flaticon-correct"></i>On-Demand Solution (CRM, ERP)</li>
                    </ul><a class="box-btn" href="/contact">Lets Talk!</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="feature-img"><img src="{{URL::asset('images/feature-img.png')}}" alt="feature" /></div>
            </div>
        </div>
    </div>
</div>
@endsection