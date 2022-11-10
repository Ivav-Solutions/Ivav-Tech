@extends('layouts.dashboard_frontend')

@section('page-content')
<!--APP-CONTENT OPEN-->
<div class="app-content main-content mt-0">
    <div class="side-app">
        <!-- CONTAINER -->
        <div class="main-container container-fluid">
            <!-- PAGE-HEADER -->
            <div class="page-header">
                <div>
                    <h1 class="page-title">Scrum Program</h1>
                </div>
                <div class="ms-auto pageheader-btn">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{route('user.it.programs')}}">IT Programs</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Scrum Program</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <div class="row">
                <div class="col-md-6 col-sm-12 col-lg-6 col-xl-4">
                    <div class="card text-center overflow-hidden">
                        <div class="card-body">
                            <h3 class="mb-3">Scrum Fundamentals</h3>
                            <p>Self-Paced Online Course (including online certificates): <br><span class="fs-20 fw-700">Free</span>.</p>
                            <a href="/service/it_programs/scrum_program/Scrum Fundamentals Certified (SFC™)" class="btn btn-info">Read More</a>
                            <a href="{{route('user.free', Crypt::encrypt('Scrum Fundamentals'))}}" class="btn btn-info">Enroll</a>
                        </div>
                    </div>
                </div>
                <!-- COL-END -->
                <div class="col-md-6 col-sm-12 col-lg-6 col-xl-4">
                    <div class="card text-center overflow-hidden">
                        <div class="card-body">
                            <h3 class="mb-3">Scrum Developer</h3>
                            <p>Self-Paced Online Course (including online certificates): <br><span class="fs-20 fw-700">Priced at £150</span>.</p>
                            <a href="/service/it_programs/scrum_program/Scrum Developer Certified (SDC™)" class="btn btn-info">Read More</a>
                            <a href="payment/{{Crypt::encrypt(150)}}/{{Crypt::encrypt('Scrum Developer')}}" class="btn btn-info">Enroll</a>
                        </div>
                    </div>
                </div>
                <!-- COL-END -->
                <div class="col-md-6 col-sm-12 col-lg-6 col-xl-4">
                    <div class="card text-center overflow-hidden">
                        <div class="card-body">
                            <h3 class="mb-3">Scrum Master</h3>
                            <p>Self-Paced Online Course (including online certificates): <br><span class="fs-20 fw-700">Priced at £350</span>.</p>
                            <a href="/service/it_programs/scrum_program/Scrum Master Certified (SMC™)" class="btn btn-info">Read More</a>
                            <a href="payment/{{Crypt::encrypt(350)}}/{{Crypt::encrypt('Scrum Master - Self-Paced')}}" class="btn btn-info">Enroll</a>
                        </div>
                    </div>
                </div><!-- COL-END -->
                <div class="col-md-6 col-sm-12 col-lg-6 col-xl-4">
                    <div class="card text-center overflow-hidden">
                        <div class="card-body">
                            <h3 class="mb-3">Scrum Master</h3>
                            <p>Two(2) Days Live Training Via Zoom: <br><span class="fs-20 fw-700">Priced at £499</span>.</p>
                            <a href="/service/it_programs/scrum_program/Scrum Master Certified (SMC™)" class="btn btn-info">Read More</a>
                            <a href="payment/{{Crypt::encrypt(499)}}/{{Crypt::encrypt('Scrum Master - Two(2) Days Live Training Via Zoom')}}" class="btn btn-info">Enroll</a>
                        </div>
                    </div>
                </div><!-- COL-END -->
                <div class="col-md-6 col-sm-12 col-lg-6 col-xl-4">
                    <div class="card text-center overflow-hidden">
                        <div class="card-body">
                            <h3 class="mb-3">Scrum Master</h3>
                            <p>Four(4) Weeks Live Training Via Zoom: <br><span class="fs-20 fw-700">Priced at £1,499</span>.</p>
                            <a href="/service/it_programs/scrum_program/Scrum Master Certified (SMC™)" class="btn btn-info">Read More</a>
                            <a href="payment/{{Crypt::encrypt(1499)}}/{{Crypt::encrypt('Scrum Master - Four(4) Weeks Live Training Via Zoom')}}" class="btn btn-info">Enroll</a>
                        </div>
                    </div>
                </div><!-- COL-END -->
                <div class="col-md-6 col-sm-12 col-lg-6 col-xl-4">
                    <div class="card text-center overflow-hidden">
                        <div class="card-body">
                            <h3 class="mb-3">Product Owner</h3>
                            <p>Self-Paced Online Course (including online certificates): <br><span class="fs-20 fw-700">Priced at £450</span>.</p>
                            <a href="/service/it_programs/scrum_program/Scrum Product Owner Certified (SPOC™)" class="btn btn-info">Read More</a>
                            <a href="payment/{{Crypt::encrypt(450)}}/{{Crypt::encrypt('Product Owner')}}" class="btn btn-info">Enroll</a>
                        </div>
                    </div>
                </div><!-- COL-END -->
                <div class="col-md-6 col-sm-12 col-lg-6 col-xl-4">
                    <div class="card text-center overflow-hidden">
                        <div class="card-body">
                            <h3 class="mb-3">Expert Master</h3>
                            <p>Self-Paced Online Course (including online certificates): <br><span class="fs-20 fw-700">Priced at £650</span>.</p>
                            <a href="/service/it_programs/scrum_program/Expert Scrum Master (ESM™)" class="btn btn-info">Read More</a>
                            <a href="payment/{{Crypt::encrypt(650)}}/{{Crypt::encrypt('Expert Developer')}}" class="btn btn-info">Enroll</a>
                        </div>
                    </div>
                </div><!-- COL-END -->
                <div class="col-md-6 col-sm-12 col-lg-6 col-xl-4">
                    <div class="card text-center overflow-hidden">
                        <div class="card-body">
                            <h3 class="mb-3">Agile Master</h3>
                            <p>Self-Paced Online Course (including online certificates): <br><span class="fs-20 fw-700">Priced at £450</span>.</p>
                            <a href="/service/it_programs/scrum_program/SCRUMstudy Agile Master Certified (SAMC™)" class="btn btn-info">Read More</a>
                            <a href="payment/{{Crypt::encrypt(450)}}/{{Crypt::encrypt('Agile Master')}}" class="btn btn-info">Enroll</a>
                        </div>
                    </div>
                </div><!-- COL-END -->
                <!-- <div class="col-md-6 col-sm-12 col-lg-6 col-xl-4">
                    <div class="card text-center overflow-hidden">
                        <div class="card-body">
                            <h3 class="mb-3">Sealer-Scrum Master</h3>
                            <a href="/service/it_programs/scrum_program" class="btn btn-info">Read More</a>
                            <a href="#" class="btn btn-info">Enroll</a>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
        <!-- CONTAINER END -->
    </div>
</div>
@endsection