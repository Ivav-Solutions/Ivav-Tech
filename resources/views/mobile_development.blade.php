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
                <li class="active">Mobile Development</li>
            </ul>
        </div>
    </div>
</div>

<section class="home-case pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <span>Launch Your Mobile App With Confidence and Provide Outstanding Value to Users.</span>
            <h2>Mobile Development</h2>
            <div class="row">
                <div class="col-12">
                    <p>Together with our vast experience in mobile technology, we factor in the peculiarities of your users to develop a mobile app that is all-inclusive of all required features. </p>
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
                    <h2>WE BUILD APPS FOR </h2>
                    <p style="font-weight: 700;">Android </p>
                    <p>Our Android app developers will design, develop and enhance custom apps for all supported Android OS versions.</p>
                    <p style="font-weight: 700;">Apple's iOS</p>
                    <p>We create flawless applications that run seamlessly on iOS enabled mobile devices.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="home-process-area pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <span>Working Process</span>
            <h2>We are popular because of our way of working</h2>
            <p>As much as we build games for our clients, we also run independent projects which makes us a reputable outfit in the gaming industry.</p>
        </div>
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="single-process">
                    <div class="icon">
                        <img src="{{URL::asset('images/process/process1.png')}}" alt="process" /><span><img src="{{URL::asset('images/process/next.png')}}" alt="shape" /></span>
                    </div>
                    <div class="content">
                        <h3>Plan</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-process">
                    <div class="icon">
                        <img src="{{URL::asset('images/process/process2.png')}}" alt="process" /><span class="pro-span"><img src="{{URL::asset('images/process/next.png')}}" alt="shape" /></span>
                    </div>
                    <div class="content">
                        <h3>Design</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-process">
                    <div class="icon">
                        <img src="{{URL::asset('images/process/process3.png')}}" alt="process" /><span><img src="{{URL::asset('images/process/next.png')}}" alt="shape" /></span>
                    </div>
                    <div class="content">
                        <h3>Develop</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-process">
                    <div class="icon">
                        <img src="{{URL::asset('images/process/process4.png')}}" alt="process" />
                    </div>
                    <div class="content">
                        <h3>Test/Deploy</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="services-details-area pb-100" style="padding-top: 5rem;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="services-details-text">
                    <h2>SCOPE OF OUR SERVICE </h2>
                    <p style="font-weight: 700;">Build</p>
                    <p>Before huge resources is invested, we will reveal a visual guide that depicts how your mobile app will work. 
                            Next, the flow and structure of the app will be designed, developed and tested for optimal functioning.</p>
                    <p style="font-weight: 700;">Deployment and Launch</p>
                    <p>After the building phase, your app is ready to be made public to end users. We will work with you in the process of perfecting the installing, configuring and releasing your mobile app on app stores.</p>
                    <p style="font-weight: 700;">Grow</p>
                    <p>Let's collaborate to welcome feedbacks from the market and add variety of features to enhance the mobile app functions, optimize the experience of users and achieve your desired goals.</p>
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
                    <h2><a class="box-btn signup-btn" href="/contact">Now is the time to get your project underway. Let's discuss.</a></h2>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection