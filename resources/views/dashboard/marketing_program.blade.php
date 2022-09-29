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
                            <a href="#" class="btn btn-info">Read More</a>
                            <a href="#" class="btn btn-info">Enroll</a>
                        </div>
                    </div>
                </div><!-- COL-END -->
                <div class="col-md-6 col-sm-12 col-lg-6 col-xl-4">
                    <div class="card text-center overflow-hidden">
                        <div class="card-body">
                            <h3 class="mb-3">Corporate Sales Course</h3>
                            <a href="#" class="btn btn-info">Read More</a>
                            <a href="#" class="btn btn-info">Enroll</a>
                        </div>
                    </div>
                </div><!-- COL-END -->
                <div class="col-md-6 col-sm-12 col-lg-6 col-xl-4">
                    <div class="card text-center overflow-hidden">
                        <div class="card-body">
                            <h3 class="mb-3"> Corporate Sales Expert Course</h3>
                            <a href="#" class="btn btn-info">Read More</a>
                            <a href="#" class="btn btn-info">Enroll</a>
                        </div>
                    </div>
                </div><!-- COL-END -->
                <div class="col-md-6 col-sm-12 col-lg-6 col-xl-4">
                    <div class="card text-center overflow-hidden">
                        <div class="card-body">
                            <h3 class="mb-3">Corporate Sales Professional Course</h3>
                            <a href="#" class="btn btn-info">Read More</a>
                            <a href="#" class="btn btn-info">Enroll</a>
                        </div>
                    </div>
                </div><!-- COL-END -->
                <div class="col-md-6 col-sm-12 col-lg-6 col-xl-4">
                    <div class="card text-center overflow-hidden">
                        <div class="card-body">
                            <h3 class="mb-3">Corporate Sales Specialist Course</h3>
                            <a href="#" class="btn btn-info">Read More</a>
                            <a href="#" class="btn btn-info">Enroll</a>
                        </div>
                    </div>
                </div><!-- COL-END -->
                <div class="col-md-6 col-sm-12 col-lg-6 col-xl-4">
                    <div class="card text-center overflow-hidden">
                        <div class="card-body">
                            <h3 class="mb-3">Digital Marketing Associate Course</h3>
                            <a href="#" class="btn btn-info">Read More</a>
                            <a href="#" class="btn btn-info">Enroll</a>
                        </div>
                    </div>
                </div><!-- COL-END -->
                <div class="col-md-6 col-sm-12 col-lg-6 col-xl-4">
                    <div class="card text-center overflow-hidden">
                        <div class="card-body">
                            <h3 class="mb-3">Digital Marketing Expert Course</h3>
                            <a href="#" class="btn btn-info">Read More</a>
                            <a href="#" class="btn btn-info">Enroll</a>
                        </div>
                    </div>
                </div><!-- COL-END -->
                <div class="col-md-6 col-sm-12 col-lg-6 col-xl-4">
                    <div class="card text-center overflow-hidden">
                        <div class="card-body">
                            <h3 class="mb-3">Digital Marketing Professional Course</h3>
                            <a href="#" class="btn btn-info">Read More</a>
                            <a href="#" class="btn btn-info">Enroll</a>
                        </div>
                    </div>
                </div><!-- COL-END -->
                <div class="col-md-6 col-sm-12 col-lg-6 col-xl-4">
                    <div class="card text-center overflow-hidden">
                        <div class="card-body">
                            <h3 class="mb-3">Digital Marketing Specialist Course</h3>
                            <a href="#" class="btn btn-info">Read More</a>
                            <a href="#" class="btn btn-info">Enroll</a>
                        </div>
                    </div>
                </div><!-- COL-END -->
                <div class="col-md-6 col-sm-12 col-lg-6 col-xl-4">
                    <div class="card text-center overflow-hidden">
                        <div class="card-body">
                            <h3 class="mb-3">Expert Master</h3>
                            <a href="#" class="btn btn-info">Read More</a>
                            <a href="#" class="btn btn-info">Enroll</a>
                        </div>
                    </div>
                </div><!-- COL-END -->
                <div class="col-md-6 col-sm-12 col-lg-6 col-xl-4">
                    <div class="card text-center overflow-hidden">
                        <div class="card-body">
                            <h3 class="mb-3">Agile Master</h3>
                            <a href="#" class="btn btn-info">Read More</a>
                            <a href="#" class="btn btn-info">Enroll</a>
                        </div>
                    </div>
                </div><!-- COL-END -->
                <div class="col-md-6 col-sm-12 col-lg-6 col-xl-4">
                    <div class="card text-center overflow-hidden">
                        <div class="card-body">
                            <h3 class="mb-3">Sealer-Scrum Master</h3>
                            <a href="#" class="btn btn-info">Read More</a>
                            <a href="#" class="btn btn-info">Enroll</a>
                        </div>
                    </div>
                </div><!-- COL-END -->
                <div class="col-md-6 col-sm-12 col-lg-6 col-xl-4">
                    <div class="card text-center overflow-hidden">
                        <div class="card-body">
                            <h3 class="mb-3">Scrum Developer</h3>
                            <a href="#" class="btn btn-info">Read More</a>
                            <a href="#" class="btn btn-info">Enroll</a>
                        </div>
                    </div>
                </div><!-- COL-END -->
                <div class="col-md-6 col-sm-12 col-lg-6 col-xl-4">
                    <div class="card text-center overflow-hidden">
                        <div class="card-body">
                            <h3 class="mb-3">Scrum Master</h3>
                            <a href="#" class="btn btn-info">Read More</a>
                            <a href="#" class="btn btn-info">Enroll</a>
                        </div>
                    </div>
                </div><!-- COL-END -->
                <div class="col-md-6 col-sm-12 col-lg-6 col-xl-4">
                    <div class="card text-center overflow-hidden">
                        <div class="card-body">
                            <h3 class="mb-3">Product Owner</h3>
                            <a href="#" class="btn btn-info">Read More</a>
                            <a href="#" class="btn btn-info">Enroll</a>
                        </div>
                    </div>
                </div><!-- COL-END -->
                <div class="col-md-6 col-sm-12 col-lg-6 col-xl-4">
                    <div class="card text-center overflow-hidden">
                        <div class="card-body">
                            <h3 class="mb-3">Expert Master</h3>
                            <a href="#" class="btn btn-info">Read More</a>
                            <a href="#" class="btn btn-info">Enroll</a>
                        </div>
                    </div>
                </div><!-- COL-END -->
                <div class="col-md-6 col-sm-12 col-lg-6 col-xl-4">
                    <div class="card text-center overflow-hidden">
                        <div class="card-body">
                            <h3 class="mb-3">Agile Master</h3>
                            <a href="#" class="btn btn-info">Read More</a>
                            <a href="#" class="btn btn-info">Enroll</a>
                        </div>
                    </div>
                </div><!-- COL-END -->
                <div class="col-md-6 col-sm-12 col-lg-6 col-xl-4">
                    <div class="card text-center overflow-hidden">
                        <div class="card-body">
                            <h3 class="mb-3">Sealer-Scrum Master</h3>
                            <a href="#" class="btn btn-info">Read More</a>
                            <a href="#" class="btn btn-info">Enroll</a>
                        </div>
                    </div>
                </div><!-- COL-END -->
                <div class="col-md-6 col-sm-12 col-lg-6 col-xl-4">
                    <div class="card text-center overflow-hidden">
                        <div class="card-body">
                            <h3 class="mb-3">Scrum Developer</h3>
                            <a href="#" class="btn btn-info">Read More</a>
                            <a href="#" class="btn btn-info">Enroll</a>
                        </div>
                    </div>
                </div><!-- COL-END -->
                <div class="col-md-6 col-sm-12 col-lg-6 col-xl-4">
                    <div class="card text-center overflow-hidden">
                        <div class="card-body">
                            <h3 class="mb-3">Scrum Master</h3>
                            <a href="#" class="btn btn-info">Read More</a>
                            <a href="#" class="btn btn-info">Enroll</a>
                        </div>
                    </div>
                </div><!-- COL-END -->
                <div class="col-md-6 col-sm-12 col-lg-6 col-xl-4">
                    <div class="card text-center overflow-hidden">
                        <div class="card-body">
                            <h3 class="mb-3">Product Owner</h3>
                            <a href="#" class="btn btn-info">Read More</a>
                            <a href="#" class="btn btn-info">Enroll</a>
                        </div>
                    </div>
                </div><!-- COL-END -->
                <div class="col-md-6 col-sm-12 col-lg-6 col-xl-4">
                    <div class="card text-center overflow-hidden">
                        <div class="card-body">
                            <h3 class="mb-3">Expert Master</h3>
                            <a href="#" class="btn btn-info">Read More</a>
                            <a href="#" class="btn btn-info">Enroll</a>
                        </div>
                    </div>
                </div><!-- COL-END -->
                <div class="col-md-6 col-sm-12 col-lg-6 col-xl-4">
                    <div class="card text-center overflow-hidden">
                        <div class="card-body">
                            <h3 class="mb-3">Agile Master</h3>
                            <a href="#" class="btn btn-info">Read More</a>
                            <a href="#" class="btn btn-info">Enroll</a>
                        </div>
                    </div>
                </div><!-- COL-END -->
                <div class="col-md-6 col-sm-12 col-lg-6 col-xl-4">
                    <div class="card text-center overflow-hidden">
                        <div class="card-body">
                            <h3 class="mb-3">Sealer-Scrum Master</h3>
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