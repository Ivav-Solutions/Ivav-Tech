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
                    <h1 class="page-title">Success</h1>
                </div>
                <div class="ms-auto pageheader-btn">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Success</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <!-- ROW-1 OPEN -->
            <div class="row">
                <div class="col-12">
                    <div class="card text-center overflow-hidden">
                        <div class="card-body">
                            <img src="{{URL::asset('dash/assets/images/success.png')}}" width="150px">
                            <h3 class="mb-3">Enrollment Successful</h3>
                            <h4 class="mb-4 fw-700">You have successfully enrolled in {{config('app.name')}} IT Program ({{$courseName}})</h4>
                            <p style="margin-top: 3rem;"><span class="fs-20 fw-700">Your enrollment will be confirmed and an access details will be sent to you within 48hours.</span></p>
                            <p class="fw-500">Thanks.</p>
                        </div>
                    </div>
                </div><!-- COL-END -->
            </div>
            <!-- ROW-1 CLOSED -->
        </div>
        <!-- CONTAINER END -->
    </div>
</div>
@endsection