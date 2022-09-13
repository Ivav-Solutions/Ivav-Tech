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
                <li class="active">Game Development</li>
            </ul>
        </div>
    </div>
</div>

<section class="home-case pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <span>Let's Build an Inspiring, Captivating and Engaging Game for You.</span>
            <h2>Game Development</h2>
            <div class="row">
                <div class="col-12">
                    <p>At {{config('app.name')}}, we bring your ideas and stories to life through the development of well thought out, user-friendly games that engage your audience and keep them coming back. </p>
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
                    <h2>WE ARE A SPECIALIST IN</h2>
                    <p style="font-weight: 700;">Full Cycle Game Development</p>
                    <p>We will professionally take your project through all the stages of game development, from the initial game design to post-release support.</p>
                    <p style="font-weight: 700;">Game Co-development</p>
                    <p>If you need the support of experts on your undertakings, we will supply you with competent hands such as seasoned designers, programmers and prolific 2D and 3D artists.</p>
                    <p style="font-weight: 700;">Game Porting</p>
                    <p>Our service is not limited to design and development. We will help you reach more passionate gamers through porting of mobile, desktop, VR/AR games from one platform to another.</p>
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
                    <h2>WE DEPLOY GAMES FOR THESE PLATFORMS</h2>
                    <p style="font-weight: 700;">Mobile</p>
                    <p>Many gamers love to engage anywhere and anytime. We develop games for iOS and Android or cross-platform development.</p>
                    <p style="font-weight: 700;">PC</p>
                    <p>Whether Windows or Mac, be ready to receive a professionally optimized game.</p>
                    <p style="font-weight: 700;">Console </p>
                    <p>If you want your game functional on Xbox, Play Station and Nintendo, we are up for it.</p>
                    <p style="font-weight: 700;">AR/VR</p>
                    <p>Yes, this is the future and we are already in it. Let's use Augmented Reality and Virtual Reality technologies to create fascinating games for you.</p>
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
                    <h2>WHO WILL WORK ON YOUR PROJECT</h2>
                    <p>Producer</p>
                    <P>Game Designers</P>
                    <P>Game Developers</P>
                    <P>QA Engineers</P>
                    <P>2D/3D Artists</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection