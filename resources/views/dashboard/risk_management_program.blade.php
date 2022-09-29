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
                    <h1 class="page-title">Risk Management Program</h1>
                </div>
                <div class="ms-auto pageheader-btn">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{route('user.it.programs')}}">IT Programs</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Risk Management Program</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <div class="row">
                <div class="col-12">
                    <div class="card text-center overflow-hidden">
                        <div class="card-body">
                            <h3 class="mb-3">Risk Management Program Course</h3>
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