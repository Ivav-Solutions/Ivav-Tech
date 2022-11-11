@extends('layouts.admin_frontend')

@section('page-content')
<!--APP-CONTENT OPEN-->
<div class="app-content main-content mt-0">
    <div class="side-app">
        <!-- CONTAINER -->
        <div class="main-container container-fluid">
            <!-- PAGE-HEADER -->
            <div class="page-header">
                <div>
                    <h1 class="page-title">Consultations</h1>
                </div>
                <div class="ms-auto pageheader-btn">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Consultations</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <!-- Row -->
            <div class="row row-sm">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header border-bottom">
                            <h3 class="card-title">All Consultations</h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="data-table" class="table table-bordered text-nowrap border-bottom">
                                    <thead>
                                        <tr> 
                                            <th class="border-bottom-0">S/N</th>
                                            <th class="border-bottom-0">Name</th>
                                            <th class="border-bottom-0">Email</th>
                                            <th class="border-bottom-0">Phone Number</th>
                                            <th class="border-bottom-0">Sex</th>
                                            <th class="border-bottom-0">Service</th>
                                            <th class="border-bottom-0">Platform</th>
                                            <th class="border-bottom-0">Date</th>
                                            <th class="border-bottom-0">Time</th>
                                            <th class="border-bottom-0">Amount</th>
                                            <th class="border-bottom-0">Payment Status</th>
                                        </tr>
                                    </thead>
                                    <!-- @if($consultations->isEmpty())
                                    <tbody>
                                        <tr>
                                            <td class="align-enter text-dark font-15" colspan="12">No Consultations.</td>
                                        </tr>
                                    </tbody>
                                    @else -->
                                    @foreach($consultations as $key => $consultation)
                                    <tbody>
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>
                                                {{$consultation->name}}
                                            </td>
                                            <td>
                                                {{$consultation->email}}
                                            </td>
                                            <td>{{$consultation->phone_number}}</td>
                                            <td>{{$consultation->sex}}</td>
                                            <td>{{$consultation->service}}</td>
                                            <td>
                                                {{$consultation->platform}}
                                            </td>
                                            <td>
                                                {{$consultation->date}}
                                            </td>
                                            <td>{{$consultation->time}}</td>
                                            <td>₦{{ number_format($consultation->amount, 2)}}</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    @if($consultation->payment_status == 'Success')
                                                    <a class="btn btn-rounded btn-success mr-auto text-nowrap" href="#">{{$consultation->payment_status}}</a>
                                                    @else
                                                    <a class="btn btn-rounded btn-danger mr-auto text-nowrap" href="#">{{$consultation->payment_status}}</a>
                                                    @endif
                                                </div>
                                            </td>
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