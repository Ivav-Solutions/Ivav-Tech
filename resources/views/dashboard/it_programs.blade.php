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
                    <h1 class="page-title">IT Programs</h1>
                </div>
                <div class="ms-auto pageheader-btn">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">IT Programs</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 ">
                    <a href="{{route('user.scrum.program')}}" style="color: #000;" >
                        <div class="card service">
                            <div class="card-body">
                                <div class="item-box text-center">
                                    <div class=" text-center  mb-4 text-primary"><i class="icon icon-people"></i></div>
                                    <div class="item-box-wrap">
                                        <h5 class="mb-2">Scrum Program</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                    <a href="{{route('user.prince2.program')}}" style="color: #000;">
                        <div class="card service">
                            <div class="card-body">
                                <div class="item-box text-center">
                                    <div class=" text-center text-secondary mb-4"><i class="icon icon-clock"></i></div>
                                    <div class="item-box-wrap">
                                        <h5 class="mb-2">Prince2 Program</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div> -->
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <a href="{{route('user.marketing.program')}}" style="color: #000;">
                        <div class="card service">
                            <div class="card-body">
                                <div class="item-box text-center">
                                    <div class=" text-center text-info mb-4"><i class="icon icon-clock"></i></div>
                                    <div class="item-box-wrap">
                                        <h5 class="mb-2">Marketing Program</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <a href="{{route('user.risk.management.program')}}" style="color: #000;">
                        <div class="card service">
                            <div class="card-body">
                                <div class="item-box text-center">
                                    <div class="text-center text-warning mb-4"><i class="icon icon-action-redo"></i></div>
                                    <div class="item-box-wrap">
                                        <h5 class="mb-2">Risk Management Program</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <a href="{{route('user.quality.management.program')}}" style="color: #000;">
                        <div class="card service">
                            <div class="card-body">
                                <div class="item-box text-center">
                                    <div class="text-center text-warning mb-4"><i class="icon icon-action-redo"></i></div>
                                    <div class="item-box-wrap">
                                        <h5 class="mb-2">Quality Management Program</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                    <a href="{{route('user.itil.program')}}" style="color: #000;">
                        <div class="card service">
                            <div class="card-body">
                                <div class="item-box text-center">
                                    <div class="text-center text-warning mb-4"><i class="icon icon-action-redo"></i></div>
                                    <div class="item-box-wrap">
                                        <h5 class="mb-2">ITIL (IT Services) Program</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div> -->
            </div>
        </div>
        <!-- CONTAINER END -->
    </div>
</div>
@endsection