@extends('layouts.frontend')

@section('navbar')
@includeIf('layouts.navbar')
@endsection

@section('page-content')
<div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h2>About</h2>
            <ul>
                <li><a href="/">Home</a></li>
                <li class="active">About</li>
            </ul>
        </div>
    </div>
</div>
<div class="home-company-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="company-content">
                    <div class="company-tittle"><span>About Us</span>
                        <h2>We Develop Solutions, Careers and Businesses</h2>
                        <p>{{config('app.name')}} is an IT-inclined organization focused on building customized solutions for its clients, educating them to be builders, as well as providing consulting services for those in need of assistance. Our Core Values include;</li>
                        <ul>
                            <li>1. CONSISTENCY
                                <p>We strive to maintain consistency in whatever service we deliver to you. You can rest assured that when you call, we will answer, when you need a solution, we will help you find one, if your skill is part of what we offer - SIGN UP - you will always find it. No Compromises, No Undercuts. Pure Consistency.</p>
                            </li>
                            <br>
                            <li>2. IMPROVEMENT
                                <p>At {{config('app.name')}}, we do not rest on our laurels. Whatever service you received from us today is primed to be better than what you would have received yesterday, or the day before. We value your feedback and you can always count on us to take your concerns seriously.</p>
                            </li>
                            <br>
                            <li>3. TRANSPARENCY
                                <p>Open and honest communication are at the centre of our core values. At each stage of every project, we convey the right information to you so that you can follow the progress of your investment closely.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="company-img"><img src="images/about-img-2.jpg" alt="company" /></div>
            </div>
        </div>
    </div>
</div>
<div class="client-area ptb-100 bg-color">
    <div class="container">
        <div class="section-title"><span>Testimonials</span>
            <h2>What Our Client’s Say</h2>
            <p>If our claims are not convincing enough, please hear it from our clients.</p>
        </div>
        <div class="client-wrap owl-carousel owl-theme">
            <div class="single-client">
                <p>I've worked with the division for about 2 full years, and I can say this - they're customer service is satisfactory, the solutions they sell to are simple, straightforward and free of ambiguity. Their prices are also largely affordable.</p>
                <p>It's simple here. You get what you paid for, and even more.</p>
                <h3>Ms. Busola Adeoye</h3>
            </div>
            <div class="single-client">
                <p>They have a fine team of developers take their time to understand the user problem and prepare solutions in real-time. They even have a dashboard where you can monitor your project progress, and in some cases, make changes as you go. The experience is great.
                <p>I'd recommend them everyday and twice on Sundays.</p>
                <h3>Engr. Garcia Anthony</h3>
            </div>
            <div class="single-client">
                <p>Since I starting working with {{config('app.name')}}, my business has seen a 200% growth in revenue, 45% growth in profit, and 65% less staff turnover. This level of stability is unprecedented. I did not believe it was possible. I recommend {{config('app.name')}} 100%. Anyday. Anytime.</p>
                <h3>Dr. Chidiogo O. P.</h3>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="testimonials">Read More</a>
        </div>
    </div>
</div>
@endsection