@extends('layouts.frontend')

@section('navbar')
@includeIf('layouts.navbar')
@endsection

@section('page-content')
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2>Contact Us</h2>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li class="active">Contact Us</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="contact-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="single-contact">
                        <div class="icon"><i class="fa fa-clock-o "></i></div>
                        <div class="content">
                            <h3>Opening Hours</h3>
                            <p>Mon - Sat : 10:00 AM - 06:00 PM</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-contact">
                        <div class="icon"><i class="fa fa-map-marker"></i></div>
                        <div class="content">
                            <h3>Address</h3>
                            <p>Shelton, London <br> Lagos, Nigeria</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="single-contact">
                        <div class="icon"><i class="fa fa-phone-square"></i></div>
                        <div class="content">
                            <h3>Phone</h3>
                            <p>+447949317523</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="home-contact-area home-2-contact pb-100">
        <div class="container">
            <div class="section-title"><span>Contact Us</span>
                <h2>We would really love to hear from you.</h2>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="content">
                        @includeIf('layouts.error_template')
                        <form action="/contact-us" method="post"> 
                            @csrf
                            <div class="row">
                                <div class="col-lg-12 col-sm-12">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" required="" placeholder="Your Name" />
                                    </div>
                                </div>
                                <div class="col-lg-12 col-sm-12">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" required="" placeholder="Your Email" />
                                    </div>
                                </div>
                                <div class="col-lg-12 col-sm-12">
                                    <div class="form-group">
                                        <input type="tel" name="phone" required="" class="form-control" placeholder="Your Phone" />
                                    </div>
                                </div>
                                <div class="col-lg-12 col-sm-12">
                                    <div class="form-group">
                                        <input type="text" name="subject" class="form-control" required="" placeholder="Subject" />
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" rows="5" required="" placeholder="Your Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        {!! app('captcha')->display() !!}
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <button type="submit" class="default-btn page-btn box-btn">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="contact-img contact-img-2"><img src="{{URL::asset('images/contact-img2.jpg')}}" alt="contact" /></div>
                </div>
            </div>
        </div>
    </div>
@endsection