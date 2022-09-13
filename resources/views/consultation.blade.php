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
                <li class="active">Consultation</li>
            </ul>
        </div>
    </div>
</div>

<section class="home-case pt-100">
    <div class="container">
        <div class="section-title">
            <h2>Explore our consultation options and select the category that best describes your needs.</h2>
            <div class="row">
                <div class="col-12">
                    <p>Primarily, we have consultations on I.T Career, Business Development and Digital Marketing.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="services-details-area pt-80 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="services-details-text">
                    <h2>I.T Career Consultation</h2>
                    <p>
                        Are you interested in building a career in I.T but you need clarity on the area to focus on or how to get started?  
                    </p>
                    <p>
                        Or are you already into I.T but there seems to be some challenges on your path?
                    </p>
                    <p>
                        If any of the questions above describes your current state, our I.T consultant is ready to offer some clarity. 
                    </p>
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
                    <h2>Business Development Consultation</h2>
                    <p>Getting a new business off the ground or scaling an existing business comes with lots of concerns that require strategic solutions.</p>
                    <p>Whether you need clarity on a business idea or you want to increase your revenue, expand your business or create better relationship with your customers, speak to us now for proven solutions.</p>
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
                    <h2>Digital Marketing Consultation </h2>
                    <p>Do you have a product, service or information that needs to reach your target market?</p>
                    <p>We will guide you through on the development and implementation of the best marketing strategies that are specifically tailored to your business needs.<p>
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
                    <h2><a class="box-btn signup-btn" href="/book_consultation">Schedule a session with one of our experts.</a></h2>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection