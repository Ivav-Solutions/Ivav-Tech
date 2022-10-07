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
                    <h1 class="page-title">Access Details</h1>
                </div>
                <div class="ms-auto pageheader-btn">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Access Details</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <!-- Row -->
            <div class="row row-sm">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header border-bottom">
                            <h3 class="card-title">All Access Details</h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="data-table" class="table table-bordered text-nowrap border-bottom">
                                    <thead>
                                        <tr> 
                                            <th class="border-bottom-0">S/N</th>
                                            <th class="border-bottom-0">Site URL</th>
                                            <th class="border-bottom-0">Program Name</th>
                                            <th class="border-bottom-0">Email</th>
                                            <th class="border-bottom-0">Password</th>
                                            <th class="border-bottom-0">Created At</th>
                                        </tr>
                                    </thead>
                                    <!-- @if($access->isEmpty())
                                    <tbody>
                                        <tr>
                                            <td class="align-enter text-dark font-15" colspan="4">No A.</td>
                                        </tr>
                                    </tbody>
                                    @else -->
                                    @foreach($access as $key => $row)
                                    <tbody>
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$row->url}}</td>
                                            <td>{{$row->program}}</td>
                                            <td>{{$row->email}}</td>
                                            <td>{{$row->password}}</td>
                                            <td>{{$row->created_at->toDayDateTimeString()}}</td>
                                        </tr>
                                    </tbody>
                                    @endforeach
                                    <!-- @endif -->
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Row -->
        </div>
        <!-- CONTAINER END -->
    </div>
</div>
@endsection