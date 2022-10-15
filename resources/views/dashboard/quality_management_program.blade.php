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
                    <h1 class="page-title">Quality Management Program</h1>
                </div>
                <div class="ms-auto pageheader-btn">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{route('user.it.programs')}}">IT Programs</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Quality Management Program</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <div class="row">
                <div class="col-md-6 col-sm-12 col-lg-6 col-xl-4">
                    <div class="card text-center overflow-hidden">
                        <div class="card-body">
                            <h3 class="mb-3">Six Sigma Black Belt Course</h3>
                            <p>Self-Paced Online Course (including online certificates): <br><span class="fs-20 fw-700">Priced at £300</span>.</p>
                            <a href="/service/it_programs/quality_management_program" class="btn btn-info">Read More</a>
                            <a href="payment/{{Crypt::encrypt(300)}}/{{Crypt::encrypt('Six Sigma Black Belt Course')}}" class="btn btn-info">Enroll</a>
                        </div>
                    </div>
                </div><!-- COL-END -->
                <div class="col-md-6 col-sm-12 col-lg-6 col-xl-4">
                    <div class="card text-center overflow-hidden">
                        <div class="card-body">
                            <h3 class="mb-3">Six Sigma Green Belt Course</h3>
                            <p>Self-Paced Online Course (including online certificates): <br><span class="fs-20 fw-700">Priced at £150</span>.</p>
                            <a href="/service/it_programs/quality_management_program" class="btn btn-info">Read More</a>
                            <a href="payment/{{Crypt::encrypt(150)}}/{{Crypt::encrypt('Six Sigma Green Belt Course')}}" class="btn btn-info">Enroll</a>
                        </div>
                    </div>
                </div><!-- COL-END -->
                <div class="col-md-6 col-sm-12 col-lg-6 col-xl-4">
                    <div class="card text-center overflow-hidden">
                        <div class="card-body">
                            <h3 class="mb-3">Six Sigma Yellow Belt Course</h3>
                            <p>Self-Paced Online Course (including online certificates): <br><span class="fs-20 fw-700">Priced at £250</span>.</p>
                            <a href="/service/it_programs/quality_management_program" class="btn btn-info">Read More</a>
                            <a href="payment/{{Crypt::encrypt(250)}}/{{Crypt::encrypt('Six Sigma Yellow Belt Course')}}" class="btn btn-info">Enroll</a>
                        </div>
                    </div>
                </div><!-- COL-END -->
                <div class="col-md-6 col-sm-12 col-lg-6 col-xl-4">
                    <div class="card text-center overflow-hidden">
                        <div class="card-body">
                            <h3 class="mb-3">Lean Six Sigma Black Belt Course</h3>
                            <p>Self-Paced Online Course (including online certificates): <br><span class="fs-20 fw-700">Priced at £450</span>.</p>
                            <a href="/service/it_programs/quality_management_program" class="btn btn-info">Read More</a>
                            <a href="payment/{{Crypt::encrypt(450)}}/{{Crypt::encrypt('Lean Six Sigma Black Belt Course')}}" class="btn btn-info">Enroll</a>
                        </div>
                    </div>
                </div><!-- COL-END -->
            </div>
        </div>
        <!-- CONTAINER END -->
    </div>
</div>
@endsection