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
            <div class="col-lg-4 col-sm-6">
                <a href="/service/it_trainings/project_management/scrum_program">
                <div class="single-service">
                    <div class="service-content">
                        <h3>Scrum Program</h3>
                    </div>
                </div>
                </a>
            </div>
            
            <div class="col-lg-4 col-sm-6">
                <a href="/service/it_trainings/project_management/quality_management_program">
                    <div class="single-service">
                        <div class="service-content">
                            <h3>Quality Management Program</h3>
                        </div>
                    </div>
                </a>
            </div>
            
            <div class="col-lg-4 col-sm-6">
                <a href="/service/it_trainings/project_management/risk_management_program">
                    <div class="single-service">
                        <div class="service-content">
                            <h3>Risk Management Program</h3>
                        </div>
                    </div>
                </a>
            </div>
            
            <div class="col-lg-4 col-sm-6">
                <a href="/service/it_trainings/project_management/prince2_program">
                    <div class="single-service">
                        <div class="service-content">
                            <h3>Prince2 Program</h3>
                        </div>
                    </div>
                </a>
            </div>
            
            <div class="col-lg-4 col-sm-6">
                <a href="/service/it_trainings/project_management/marketing_program">
                    <div class="single-service">
                        <div class="service-content">
                            <h3>Marketing Program</h3>
                        </div>
                    </div>
                </a>
            </div>
            
            <div class="col-lg-4 col-sm-6">
                <a href="/service/it_trainings/project_management/itil">
                    <div class="single-service">
                        <div class="service-content">
                            <h3>ITIL (IT services) Program</h3>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

@endsection