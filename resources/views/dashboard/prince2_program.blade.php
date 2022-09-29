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
                            <a href="#" class="btn btn-info">Read More</a>
                            <a href="#" class="btn btn-info">Enroll</a>
                        </div>
                    </div>
                </div><!-- COL-END -->
                <div class="col-md-6 col-sm-12 col-lg-6">
                    <div class="card text-center overflow-hidden">
                        <div class="card-body">
                            <h3 class="mb-3">PRINCE2<sup>®</sup> Practitioner Course</h3>
                            <a href="#" class="btn btn-info">Read More</a>
                            <a href="#" class="btn btn-info">Enroll</a>
                        </div>
                    </div>
                </div><!-- COL-END -->
                <div class="col-md-6 col-sm-12 col-lg-6">
                    <div class="card text-center overflow-hidden">
                        <div class="card-body">
                            <h3 class="mb-3">PRINCE2<sup>®</sup> Combined Foundation & Practitioner Course</h3>
                            <a href="#" class="btn btn-info">Read More</a>
                            <a href="#" class="btn btn-info">Enroll</a>
                        </div>
                    </div>
                </div><!-- COL-END -->
            </div>
        </div>
        <!-- CONTAINER END -->
    </div>
</div>
@endsection