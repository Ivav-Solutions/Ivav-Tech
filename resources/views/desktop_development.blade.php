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
                <li class="active">Desktop Development</li>
            </ul>
        </div>
    </div>
</div>

<section class="home-case pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <span>Let's Help You Develop a User-focused Software for Windows and Mac</span>
            <h2>Desktop Development</h2>
            <div class="row">
                <div class="col-12">
                    <p>We have a team of desktop developers that professionally take cognizance of the experience of users and your profitability.</p>
                </div>
            </div>
        </div>
        <div class="case">
            <ul class="all-case">
                <li class="active" data-filter="*"><span>We are proud of our work. Check them out.</span></li>
            </ul>
        </div>
        <!-- <div class="row case-list" style="position: relative; height: auto;">
            <div class="col-lg-4 col-sm-6 item">
                <div class="single-case">
                    <div class="case-img">
                        <a href="#">
                            <img src="{{URL::asset('images/case/c1.jpg')}}" alt="case">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 item">
                <div class="single-case">
                    <div class="case-img">
                        <a href="#">
                            <img src="{{URL::asset('images/case/c2.jpg')}}" alt="case">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 item">
                <div class="single-case">
                    <div class="case-img">
                        <a href="#">
                            <img src="{{URL::asset('images/case/c3.jpg')}}" alt="case">
                        </a>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="case-btn text-center">
            <p><a href="/contact">Contact us today </a></p>
        </div>
    </div>
</section>

<div class="services-details-area pt-80 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="services-details-text">
                    <h2>Our Desktop Development Service</h2>
                    <p>At {{config('app.name')}}, we do not jump steps irrespective of the platforms we are dealing with. We ensure the full-cycle of a desktop development project is completed for best experience.</p>
                    <p style="font-weight: 700;">Microsoft Windows</p>
                    <p>A vast majority of people around the world use Windows to complete different tasks. 
                        So, it doesn't matter whether your project is simple or complex, our expert developers dive all in to design solutions for variety of problems.</p>
                    <p style="font-weight: 700;">Apple Mac </p>
                    <p>Mac OS possesses its own peculiarities making its desktop app development a bit daunting. However, our experts understand the specific operating principles of building a responsive app. We will take care of the architecture, interface and web services integration.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="services-details-area pt-80 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="services-details-text">
                    <h2><a class="box-btn signup-btn" href="/contact">Let's have a conversation about your specific needs and get down to business immediately.</a></h2>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection