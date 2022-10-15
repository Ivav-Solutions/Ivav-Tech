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
                    <h1 class="page-title">Prince2 Program</h1>
                </div>
                <div class="ms-auto pageheader-btn">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{route('user.it.programs')}}">IT Programs</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Prince2 Program</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <div class="row">
                <div class="col-md-6 col-sm-12 col-lg-6">
                    <div class="card text-center overflow-hidden">
                        <div class="card-body">
                            <h3 class="mb-3">PRINCE2<sup>®</sup> Foundation Course</h3>
                            <p>Self-Paced Online Course (including online certificates): <br><span class="fs-20 fw-700">Priced at £</span>.</p>
                            <a href="/service/it_programs/prince2_program" class="btn btn-info">Read More</a>
                            <a href="payment/{{Crypt::encrypt()}}/{{Crypt::encrypt('PRINCE2 Foundation Course')}}" class="btn btn-info">Enroll</a>
                        </div>
                    </div>
                </div><!-- COL-END -->
                <div class="col-md-6 col-sm-12 col-lg-6">
                    <div class="card text-center overflow-hidden">
                        <div class="card-body">
                            <h3 class="mb-3">PRINCE2<sup>®</sup> Practitioner Course</h3>
                            <p>Self-Paced Online Course (including online certificates): <br><span class="fs-20 fw-700">Priced at £</span>.</p>
                            <a href="/service/it_programs/prince2_program" class="btn btn-info">Read More</a>
                            <a href="payment/{{Crypt::encrypt()}}/{{Crypt::encrypt('PRINCE2 Practitioner Course')}}" class="btn btn-info">Enroll</a>
                        </div>
                    </div>
                </div><!-- COL-END -->
                <div class="col-md-6 col-sm-12 col-lg-6">
                    <div class="card text-center overflow-hidden">
                        <div class="card-body">
                            <h3 class="mb-3">PRINCE2<sup>®</sup> Combined Foundation & Practitioner Course</h3>
                            <p>Self-Paced Online Course (including online certificates): <br><span class="fs-20 fw-700">Priced at £</span>.</p>
                            <a href="/service/it_programs/prince2_program" class="btn btn-info">Read More</a>
                            <a href="payment/{{Crypt::encrypt()}}/{{Crypt::encrypt('PRINCE2 Combined Foundation & Practitioner Course')}}" class="btn btn-info">Enroll</a>
                        </div>
                    </div>
                </div><!-- COL-END -->
            </div>
        </div>
        <!-- CONTAINER END -->
    </div>
</div>

<!-- <div class="modal fade" id="view" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="sendmessageLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="composemodalTitle">Terms of Bank Transfer</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">
                    <div class="mb-3 text-center">
                        <p>Kindly make payment to </p>
                        <h4 class="mb-3">
                            <p>Local Transaction For Those Sending Within UK</p>
                            <p class="fw-700">REAPIVAV SOLUTIONS LTD</p>
                            <p class="fw-700">Account number: 19067303</p>
                            <p class="fw-700">Sort code: 04-06-05</b></p>
                        </h4>
                        <h4 class="mt-5 mb-3">
                            <p>Additional Details If Paying From A Non-UK Account</p>
                            <p class="fw-700">REAPIVAV SOLUTIONS LTD</p>
                            <p class="fw-700">IBAN: GB02CLRB04060519067303</p>
                            <p class="fw-700">BIC/SWIFT: CLRBGB22</b></p>
                        </h4>
                        <p class="fw-500">Please, attach tour payment receipt here and forward it to contact@ivavtech.com with your name as the subject, 
                            followed by your enrollment course(program) as the body.</p>
                        <p class="fw-500">Your enrollment will be confirmed upon receipt of payment.</p>
                        <p class="fw-500">Thanks.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
    </div>
</div> -->
@endsection