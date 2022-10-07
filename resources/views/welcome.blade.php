@extends('layouts.frontend')

@section('navbar')
@includeIf('layouts.navbar')
@endsection

@section('banner')
@includeIf('layouts.banner')
@endsection

@section('page-content')
    <div class="home-service-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <h2>Our Services</h2>
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-6">
                    <div class="single-service">
                        <div class="service-img"><img src="images/services/service1.png" alt="service" /></div>
                        <div class="service-content">
                            <h3>Consultation</h3>
                            <p>Professional Advice and Guidance for various tech related professions. From Business Development and Career Kickstarting in IT.</p><a class="line-bnt" href="/service/consultation">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <div class="single-service">
                        <div class="service-img"><img src="images/services/service3.png" alt="service" /></div>
                        <div class="service-content">
                            <h3>IT Programs</h3>
                            <p>Carefully curated and standardized educational courses designed to train and equip you within the shortest span of time possible to a level of expertise.</p><a class="line-bnt" href="/service/it_programs">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <div class="single-service">
                        <div class="service-img"><img src="images/services/service2.png" alt="service" /></div>
                        <div class="service-content">
                            <h3>Web Development</h3>
                            <p>From one-page, simple websites to complex web applications, We have professionals capable of giving you quality solutions at affordable rates.</p><a class="line-bnt" href="/service/software_development/web_development">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <div class="single-service">
                        <div class="service-img"><img src="images/services/service2.png" alt="service" /></div>
                        <div class="service-content">
                            <h3>Moble Development</h3>
                            <p>From simple to complex Mobile Apps, whether it is for your business, or a personal affair, we have what it Takes. Rest Assured. Your Mobile Applications will work on as many devices and Mobile Apps as possible.</p><a class="line-bnt" href="/service/software_development/mobile_development">Read More</a>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-lg-4 col-sm-6">
                    <div class="single-service">
                        <div class="service-img"><img src="images/services/service2.png" alt="service" /></div>
                        <div class="service-content">
                            <h3>Desktop Development</h3>
                            <p>Games are often a tricky field of software development. We have a dedicated team of Game Developers who can handle your request to the letter. And our prices are affordable.</p><a class="line-bnt" href="/service/software_development/desktop_development">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-service">
                        <div class="service-img"><img src="images/services/service2.png" alt="service" /></div>
                        <div class="service-content">
                            <h3>Game Development</h3>
                            <p>Games are often a tricky field of software development. We have a dedicated team of Game Developers who can handle your request to the letter. And our prices are affordable.</p><a class="line-bnt" href="/service/software_development/game_development">Read More</a>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <div class="home-company-area bg-color">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-12">
                    <div class="company-content">
                        <div class="company-tittle"><span>About Us</span>
                            <h2>We Develop Solutions, Careers and Businesses</h2>
                            <p>{{config('app.name')}} is an IT-inclined organization focused on building customized solutions for its clients, educating them to be builders, as well as providing consulting services for those in need of assistance. Our Core Values include;</p>
                            <ul>
                                <li>1. CONSISTENCY
                                    <p>We strive to maintain consistency in whatever service we deliver to you. You can rest assured that when you call, we will answer, when you need a solution, we will help you find one, if your skill is part of what we offer - SIGN UP - you will always find it. No Compromises, No Undercuts. Pure Consistency.</p>
                                </li>
                                <br>
                                <li>2. IMPROVEMENT
                                    <p>At {{config('app.name')}}, we do not rest on our laurels. Whatever service you received from us today is primed to be better than what you would have received yesterday, or the day before. We value your feedback and you can always count on us to take your concerns seriously.</p>
                                </li>
                            </ul>
                        </div><a class="box-btn" href="/about-us">Know More</a>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12">
                    <div class="company-img"><img src="images/company-img.jpg" alt="company" /></div>
                </div>
            </div>
        </div>
    </div>
    <div class="choose-area ptb-100">
        <div class="container">
            <div class="section-title"><span>Why Choose Us</span>
                <h2>We Achieved People’s Trust by Our Great Service</h2>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="choose-img"><img src="images/choose-img.png" alt="choose" /></div>
                </div>
                <div class="col-lg-6">
                    <div class="choose-content">
                        <div class="faq-accordion">
                            <div data-accordion-component="Accordion" class="accordion">
                                <div data-accordion-component="AccordionItem" class="accordion__item">
                                    <div data-accordion-component="AccordionItemHeading" role="heading" class="accordion__heading" aria-level="3">
                                        <div class="accordion__button" id="accordion__heading-raa-0" aria-disabled="false" aria-expanded="false" aria-controls="accordion__panel-raa-0" role="button" tabindex="0" data-accordion-component="AccordionItemButton">Consistency</div>
                                    </div>
                                </div>
                                <div data-accordion-component="AccordionItem" class="accordion__item">
                                    <div data-accordion-component="AccordionItemHeading" role="heading" class="accordion__heading" aria-level="3">
                                        <div class="accordion__button" id="accordion__heading-raa-2" aria-disabled="false" aria-expanded="false" aria-controls="accordion__panel-raa-2" role="button" tabindex="0" data-accordion-component="AccordionItemButton">Experienced Team</div>
                                    </div>
                                </div>
                                <div data-accordion-component="AccordionItem" class="accordion__item">
                                    <div data-accordion-component="AccordionItemHeading" role="heading" class="accordion__heading" aria-level="3">
                                        <div class="accordion__button" id="accordion__heading-raa-3" aria-disabled="false" aria-expanded="false" aria-controls="accordion__panel-raa-3" role="button" tabindex="0" data-accordion-component="AccordionItemButton">Best Quality Service</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="home-case ptb-100">
        <div class="container">
            <div class="section-title"><span>Our Works</span>
                <h2>Have a Look Our Work Showcase</h2>
            </div>
            <div class="row case-list">
                <div class="col-lg-4 col-sm-6">
                    <div class="single-case">
                        <div class="case-img"><a href="#"><img src="{{URL::asset('images/products/ivav_tech.jpg')}}" alt="case" /></a></div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-case">
                        <div class="case-img"><a href="#"><img src="{{URL::asset('images/products/ivav_travel.jpeg')}}" alt="case" /></a></div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-case">
                        <div class="case-img"><a href="#"><img src="{{URL::asset('images/products/ivav_solutions.jpg')}}" alt="case" /></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="feature-area bg-color ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="contnet">
                        <div class="feature-tittle"><span>Features</span>
                            <h2>We Have Also Some Features That Provided by {{config('app.name')}}</h2>
                        </div>
                        <ul>
                            <li><i class="flaticon-correct"></i>Freelancing Training Course</li>
                            <li><i class="flaticon-correct"></i>Technological Consultation</li>
                            <li><i class="flaticon-correct"></i>Monthly Paid Workspace</li>
                            <li><i class="flaticon-correct"></i>IT Learning Institute</li>
                            <li><i class="flaticon-correct"></i>Digital Marketing</li>
                            <li><i class="flaticon-correct"></i>Professional/Personal</li>
                        </ul><a class="box-btn" href="/contact">Lets Talk!</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="feature-img"><img src="images/feature-img.png" alt="feature" /></div>
                </div>
            </div>
        </div>
    </div>
@endsection