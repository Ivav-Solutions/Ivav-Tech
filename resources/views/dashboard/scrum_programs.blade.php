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
                            <h3 class="mb-3">Scrum Developer</h3>
                            <p>Self-Paced Online Course (including online certificates): <br><span class="fs-20 fw-700">Priced at £150</span>.</p>
                            <a href="/service/it_programs/scrum_program" class="btn btn-info">Read More</a>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#view" class="btn btn-info">Enroll</a>
                        </div>
                    </div>
                </div><!-- COL-END -->
                <div class="col-md-6 col-sm-12 col-lg-6 col-xl-4">
                    <div class="card text-center overflow-hidden">
                        <div class="card-body">
                            <h3 class="mb-3">Scrum Master</h3>
                            <p>Self-Paced Online Course (including online certificates): <br><span class="fs-20 fw-700">Priced at £350</span>.</p>
                            <a href="/service/it_programs/scrum_program" class="btn btn-info">Read More</a>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#view" class="btn btn-info">Enroll</a>
                        </div>
                    </div>
                </div><!-- COL-END -->
                <div class="col-md-6 col-sm-12 col-lg-6 col-xl-4">
                    <div class="card text-center overflow-hidden">
                        <div class="card-body">
                            <h3 class="mb-3">Product Owner</h3>
                            <p>Self-Paced Online Course (including online certificates): <br><span class="fs-20 fw-700">Priced at £450</span>.</p>
                            <a href="/service/it_programs/scrum_program" class="btn btn-info">Read More</a>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#view" class="btn btn-info">Enroll</a>
                        </div>
                    </div>
                </div><!-- COL-END -->
                <div class="col-md-6 col-sm-12 col-lg-6 col-xl-4">
                    <div class="card text-center overflow-hidden">
                        <div class="card-body">
                            <h3 class="mb-3">Expert Master</h3>
                            <p>Self-Paced Online Course (including online certificates): <br><span class="fs-20 fw-700">Priced at £650</span>.</p>
                            <a href="/service/it_programs/scrum_program" class="btn btn-info">Read More</a>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#view" class="btn btn-info">Enroll</a>
                        </div>
                    </div>
                </div><!-- COL-END -->
                <div class="col-md-6 col-sm-12 col-lg-6 col-xl-4">
                    <div class="card text-center overflow-hidden">
                        <div class="card-body">
                            <h3 class="mb-3">Agile Master</h3>
                            <p>Self-Paced Online Course (including online certificates): <br><span class="fs-20 fw-700">Priced at £450</span>.</p>
                            <a href="/service/it_programs/scrum_program" class="btn btn-info">Read More</a>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#view" class="btn btn-info">Enroll</a>
                        </div>
                    </div>
                </div><!-- COL-END -->
                <div class="col-md-6 col-sm-12 col-lg-6 col-xl-4">
                    <div class="card text-center overflow-hidden">
                        <div class="card-body">
                            <h3 class="mb-3">Sealer-Scrum Master</h3>
                            <a href="/service/it_programs/scrum_program" class="btn btn-info">Read More</a>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#view" class="btn btn-info">Enroll</a>
                        </div>
                    </div>
                </div><!-- COL-END -->
            </div>
        </div>
        <!-- CONTAINER END -->
    </div>
</div>

<div class="modal fade" id="view" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="sendmessageLabel" aria-hidden="true">
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
</div>
@endsection