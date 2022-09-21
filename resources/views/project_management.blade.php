@extends('layouts.frontend')

@section('navbar')
@includeIf('layouts.navbar')
@endsection

@section('page-content')
<div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h2>Service</h2>
            <ul>
                <li><a href="/">Home</a></li>
                <li class="active">Project Management</li>
            </ul>
        </div>
    </div>
</div>
<div class="home-service-area pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <h2>Project Management</h2>
        </div>
        <div class="row">
            <a href="/service/it_trainings/project_management/risk_management_program">
                <div class="col-lg-4 col-sm-6">
                    <div class="single-service">
                        <div class="service-content">
                            <h3>Risk Management Program</h3>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>

@endsection