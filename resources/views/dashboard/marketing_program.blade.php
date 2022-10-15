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
                    <h1 class="page-title">Marketing Program</h1>
                </div>
                <div class="ms-auto pageheader-btn">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{route('user.it.programs')}}">IT Programs</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Marketing Program</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <div class="row">
                <div class="col-md-6 col-sm-12 col-lg-6 col-xl-4">
                    <div class="card text-center overflow-hidden">
                        <div class="card-body">
                            <h3 class="mb-3">Affiliate Marketing Expert Course</h3>
                            <p>Self-Paced Online Course (including online certificates): <br><span class="fs-20 fw-700">Priced at £500</span>.</p>
                            <a href="/service/it_programs/marketing_program" class="btn btn-info">Read More</a>
                            <a href="payment/{{Crypt::encrypt(500)}}/{{Crypt::encrypt('Affiliate Marketing Expert Course')}}" class="btn btn-info">Enroll</a>
                        </div>
                    </div>
                </div><!-- COL-END -->
                <div class="col-md-6 col-sm-12 col-lg-6 col-xl-4">
                    <div class="card text-center overflow-hidden">
                        <div class="card-body">
                            <h3 class="mb-3">Corporate Sales Course</h3>
                            <p>Self-Paced Online Course (including online certificates): <br><span class="fs-20 fw-700">Priced at £200</span>.</p>
                            <a href="/service/it_programs/marketing_program" class="btn btn-info">Read More</a>
                            <a href="payment/{{Crypt::encrypt(200)}}/{{Crypt::encrypt('Corporate Sales Course')}}" class="btn btn-info">Enroll</a>
                        </div>
                    </div>
                </div><!-- COL-END -->
                <div class="col-md-6 col-sm-12 col-lg-6 col-xl-4">
                    <div class="card text-center overflow-hidden">
                        <div class="card-body">
                            <h3 class="mb-3">Corporate Sales Expert Course</h3>
                            <p>Self-Paced Online Course (including online certificates): <br><span class="fs-20 fw-700">Priced at £500</span>.</p>
                            <a href="/service/it_programs/marketing_program" class="btn btn-info">Read More</a>
                            <a href="payment/{{Crypt::encrypt(500)}}/{{Crypt::encrypt('Corporate Sales Expert Course')}}" class="btn btn-info">Enroll</a>
                        </div>
                    </div>
                </div><!-- COL-END -->
                <div class="col-md-6 col-sm-12 col-lg-6 col-xl-4">
                    <div class="card text-center overflow-hidden">
                        <div class="card-body">
                            <h3 class="mb-3">Corporate Sales Professional Course</h3>
                            <p>Self-Paced Online Course (including online certificates): <br><span class="fs-20 fw-700">Priced at £200</span>.</p>
                            <a href="/service/it_programs/marketing_program" class="btn btn-info">Read More</a>
                            <a href="payment/{{Crypt::encrypt(200)}}/{{Crypt::encrypt('Corporate Sales Professional Course')}}" class="btn btn-info">Enroll</a>
                        </div>
                    </div>
                </div><!-- COL-END -->
                <div class="col-md-6 col-sm-12 col-lg-6 col-xl-4">
                    <div class="card text-center overflow-hidden">
                        <div class="card-body">
                            <h3 class="mb-3">Corporate Sales Specialist Course</h3>
                            <p>Self-Paced Online Course (including online certificates): <br><span class="fs-20 fw-700">Priced at £350</span>.</p>
                            <a href="/service/it_programs/marketing_program" class="btn btn-info">Read More</a>
                            <a href="payment/{{Crypt::encrypt(350)}}/{{Crypt::encrypt('Corporate Sales Specialist Course')}}" class="btn btn-info">Enroll</a>
                        </div>
                    </div>
                </div><!-- COL-END -->
                <div class="col-md-6 col-sm-12 col-lg-6 col-xl-4">
                    <div class="card text-center overflow-hidden">
                        <div class="card-body">
                            <h3 class="mb-3">Digital Marketing Associate Course</h3>
                            <p>Self-Paced Online Course (including online certificates): <br><span class="fs-20 fw-700">Priced at £200</span>.</p>
                            <a href="/service/it_programs/marketing_program" class="btn btn-info">Read More</a>
                            <a href="payment/{{Crypt::encrypt(200)}}/{{Crypt::encrypt('Digital Marketing Associate Course')}}" class="btn btn-info">Enroll</a>
                        </div>
                    </div>
                </div><!-- COL-END -->
                <div class="col-md-6 col-sm-12 col-lg-6 col-xl-4">
                    <div class="card text-center overflow-hidden">
                        <div class="card-body">
                            <h3 class="mb-3">Digital Marketing Expert Course</h3>
                            <p>Self-Paced Online Course (including online certificates): <br><span class="fs-20 fw-700">Priced at £500</span>.</p>
                            <a href="/service/it_programs/marketing_program" class="btn btn-info">Read More</a>
                            <a href="payment/{{Crypt::encrypt(500)}}/{{Crypt::encrypt('Digital Marketing Expert Course')}}" class="btn btn-info">Enroll</a>
                        </div>
                    </div>
                </div><!-- COL-END -->
                <div class="col-md-6 col-sm-12 col-lg-6 col-xl-4">
                    <div class="card text-center overflow-hidden">
                        <div class="card-body">
                            <h3 class="mb-3">Digital Marketing Professional Course</h3>
                            <p>Self-Paced Online Course (including online certificates): <br><span class="fs-20 fw-700">Priced at £200</span>.</p>
                            <a href="/service/it_programs/marketing_program" class="btn btn-info">Read More</a>
                            <a href="payment/{{Crypt::encrypt(200)}}/{{Crypt::encrypt('Digital Marketing Professional Course')}}" class="btn btn-info">Enroll</a>
                        </div>
                    </div>
                </div><!-- COL-END -->
                <div class="col-md-6 col-sm-12 col-lg-6 col-xl-4">
                    <div class="card text-center overflow-hidden">
                        <div class="card-body">
                            <h3 class="mb-3">Digital Marketing Specialist Course</h3>
                            <p>Self-Paced Online Course (including online certificates): <br><span class="fs-20 fw-700">Priced at £350</span>.</p>
                            <a href="/service/it_programs/marketing_program" class="btn btn-info">Read More</a>
                            <a href="payment/{{Crypt::encrypt(350)}}/{{Crypt::encrypt('Digital Marketing Specialist Course')}}" class="btn btn-info">Enroll</a>
                        </div>
                    </div>
                </div><!-- COL-END -->
                <div class="col-md-6 col-sm-12 col-lg-6 col-xl-4">
                    <div class="card text-center overflow-hidden">
                        <div class="card-body">
                            <h3 class="mb-3">Email Marketing Professional Course</h3>
                            <p>Self-Paced Online Course (including online certificates): <br><span class="fs-20 fw-700">Priced at £200</span>.</p>
                            <a href="/service/it_programs/marketing_program" class="btn btn-info">Read More</a>
                            <a href="payment/{{Crypt::encrypt(200)}}/{{Crypt::encrypt('Email Marketing Professional Course')}}" class="btn btn-info">Enroll</a>
                        </div>
                    </div>
                </div><!-- COL-END -->
                <div class="col-md-6 col-sm-12 col-lg-6 col-xl-4">
                    <div class="card text-center overflow-hidden">
                        <div class="card-body">
                            <h3 class="mb-3">Marketing Research Associate Course</h3>
                            <p>Self-Paced Online Course (including online certificates): <br><span class="fs-20 fw-700">Priced at £200</span>.</p>
                            <a href="/service/it_programs/marketing_program" class="btn btn-info">Read More</a>
                            <a href="payment/{{Crypt::encrypt(200)}}/{{Crypt::encrypt('Marketing Research Associate Course')}}" class="btn btn-info">Enroll</a>
                        </div>
                    </div>
                </div><!-- COL-END -->
                <div class="col-md-6 col-sm-12 col-lg-6 col-xl-4">
                    <div class="card text-center overflow-hidden">
                        <div class="card-body">
                            <h3 class="mb-3">Marketing Research Professional Course</h3>
                            <p>Self-Paced Online Course (including online certificates): <br><span class="fs-20 fw-700">Priced at £200</span>.</p>
                            <a href="/service/it_programs/marketing_program" class="btn btn-info">Read More</a>
                            <a href="payment/{{Crypt::encrypt(200)}}/{{Crypt::encrypt('Marketing Research Professional Course')}}" class="btn btn-info">Enroll</a>
                        </div>
                    </div>
                </div><!-- COL-END -->
                <div class="col-md-6 col-sm-12 col-lg-6 col-xl-4">
                    <div class="card text-center overflow-hidden">
                        <div class="card-body">
                            <h3 class="mb-3">Marketing Research Specialist Course</h3>
                            <p>Self-Paced Online Course (including online certificates): <br><span class="fs-20 fw-700">Priced at £350</span>.</p>
                            <a href="/service/it_programs/marketing_program" class="btn btn-info">Read More</a>
                            <a href="payment/{{Crypt::encrypt(350)}}/{{Crypt::encrypt('Marketing Research Specialist Course')}}" class="btn btn-info">Enroll</a>
                        </div>
                    </div>
                </div><!-- COL-END -->
                <div class="col-md-6 col-sm-12 col-lg-6 col-xl-4">
                    <div class="card text-center overflow-hidden">
                        <div class="card-body">
                            <h3 class="mb-3">Marketing Strategy Associate Course</h3>
                            <p>Self-Paced Online Course (including online certificates): <br><span class="fs-20 fw-700">Priced at £350</span>.</p>
                            <a href="/service/it_programs/marketing_program" class="btn btn-info">Read More</a>
                            <a href="payment/{{Crypt::encrypt(350)}}/{{Crypt::encrypt('Marketing Strategy Associate Course')}}" class="btn btn-info">Enroll</a>
                        </div>
                    </div>
                </div><!-- COL-END -->
                <div class="col-md-6 col-sm-12 col-lg-6 col-xl-4">
                    <div class="card text-center overflow-hidden">
                        <div class="card-body">
                            <h3 class="mb-3">Marketing Strategy Expert Course</h3>
                            <p>Self-Paced Online Course (including online certificates): <br><span class="fs-20 fw-700">Priced at £500</span>.</p>
                            <a href="/service/it_programs/marketing_program" class="btn btn-info">Read More</a>
                            <a href="payment/{{Crypt::encrypt(500)}}/{{Crypt::encrypt('Marketing Strategy Expert Course')}}" class="btn btn-info">Enroll</a>
                        </div>
                    </div>
                </div><!-- COL-END -->
                <div class="col-md-6 col-sm-12 col-lg-6 col-xl-4">
                    <div class="card text-center overflow-hidden">
                        <div class="card-body">
                            <h3 class="mb-3">Marketing Strategy Professional Course</h3>
                            <p>Self-Paced Online Course (including online certificates): <br><span class="fs-20 fw-700">Priced at £200</span>.</p>
                            <a href="/service/it_programs/marketing_program" class="btn btn-info">Read More</a>
                            <a href="payment/{{Crypt::encrypt(200)}}/{{Crypt::encrypt('Marketing Strategy Professional Course')}}" class="btn btn-info">Enroll</a>
                        </div>
                    </div>
                </div><!-- COL-END -->
                <div class="col-md-6 col-sm-12 col-lg-6 col-xl-4">
                    <div class="card text-center overflow-hidden">
                        <div class="card-body">
                            <h3 class="mb-3">Marketing Strategy Specialist Course</h3>
                            <p>Self-Paced Online Course (including online certificates): <br><span class="fs-20 fw-700">Priced at £350</span>.</p>
                            <a href="/service/it_programs/marketing_program" class="btn btn-info">Read More</a>
                            <a href="payment/{{Crypt::encrypt(350)}}/{{Crypt::encrypt('Marketing Strategy Specialist Course')}}" class="btn btn-info">Enroll</a>
                        </div>
                    </div>
                </div><!-- COL-END -->
                <div class="col-md-6 col-sm-12 col-lg-6 col-xl-4">
                    <div class="card text-center overflow-hidden">
                        <div class="card-body">
                            <h3 class="mb-3">SEO Expert Course</h3>
                            <p>Self-Paced Online Course (including online certificates): <br><span class="fs-20 fw-700">Priced at £500</span>.</p>
                            <a href="/service/it_programs/marketing_program" class="btn btn-info">Read More</a>
                            <a href="payment/{{Crypt::encrypt(500)}}/{{Crypt::encrypt('SEO Expert Course')}}" class="btn btn-info">Enroll</a>
                        </div>
                    </div>
                </div><!-- COL-END -->
                <div class="col-md-6 col-sm-12 col-lg-6 col-xl-4">
                    <div class="card text-center overflow-hidden">
                        <div class="card-body">
                            <h3 class="mb-3">Search Marketing Expert Course</h3>
                            <p>Self-Paced Online Course (including online certificates): <br><span class="fs-20 fw-700">Priced at £500</span>.</p>
                            <a href="/service/it_programs/marketing_program" class="btn btn-info">Read More</a>
                            <a href="payment/{{Crypt::encrypt(500)}}/{{Crypt::encrypt('Search Marketing Expert Course')}}" class="btn btn-info">Enroll</a>
                        </div>
                    </div>
                </div><!-- COL-END -->
                <div class="col-md-6 col-sm-12 col-lg-6 col-xl-4">
                    <div class="card text-center overflow-hidden">
                        <div class="card-body">
                            <h3 class="mb-3">Social Media Marketing Expert Course</h3>
                            <p>Self-Paced Online Course (including online certificates): <br><span class="fs-20 fw-700">Priced at £500</span>.</p>
                            <a href="/service/it_programs/marketing_program" class="btn btn-info">Read More</a>
                            <a href="payment/{{Crypt::encrypt(500)}}/{{Crypt::encrypt('Social Media Marketing Expert Course')}}" class="btn btn-info">Enroll</a>
                        </div>
                    </div>
                </div><!-- COL-END -->
                <div class="col-md-6 col-sm-12 col-lg-6 col-xl-4">
                    <div class="card text-center overflow-hidden">
                        <div class="card-body">
                            <h3 class="mb-3">Web Analytics Expert Course</h3>
                            <p>Self-Paced Online Course (including online certificates): <br><span class="fs-20 fw-700">Priced at £500</span>.</p>
                            <a href="/service/it_programs/marketing_program" class="btn btn-info">Read More</a>
                            <a href="payment/{{Crypt::encrypt(500)}}/{{Crypt::encrypt('Web Analytics Expert Course')}}" class="btn btn-info">Enroll</a>
                        </div>
                    </div>
                </div><!-- COL-END -->
            </div>
        </div>
        <!-- CONTAINER END -->
    </div>
</div>
@endsection