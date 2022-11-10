@extends('layouts.frontend')

@section('navbar')
@includeIf('layouts.navbar')
@endsection

@section('page-content')
<div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h2>Testimonials</h2>
            <ul>
                <li><a href="/">Home</a></li>
                <li class="active">Testimonials</li>
            </ul>
        </div>
    </div>
</div>

<div class="testimonials-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>What Our Clients Say</h2>
                    <p>We are excited to see each of our students excel in their training and stay on the right path leading to the top of their career ladder. Are you next?</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-blog">
                    <div class="blog-img">
                        <img src="{{URL::asset('images/testimonials/1.jpeg')}}" alt="">
                    </div> 
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-blog">
                    <div class="blog-img">
                        <img src="{{URL::asset('images/testimonials/2.jpeg')}}" alt="">
                    </div> 
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-blog">
                    <div class="blog-img">
                        <img src="{{URL::asset('images/testimonials/3.jpeg')}}" alt="">
                    </div> 
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-blog">
                    <div class="blog-img">
                        <img src="{{URL::asset('images/testimonials/4.jpeg')}}" alt="">
                    </div> 
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
                    <h2><a class="box-btn signup-btn" href="/service/it_programs">Start learning with us</a></h2>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection