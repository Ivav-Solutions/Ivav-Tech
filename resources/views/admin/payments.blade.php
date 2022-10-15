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
                    <h1 class="page-title">All Program Payments</h1>
                </div>
                <div class="ms-auto pageheader-btn">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Payments</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <!-- Row -->
            <div class="row row-sm">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header border-bottom">
                            <h3 class="card-title">All Payments</h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="data-table" class="table table-bordered text-nowrap border-bottom">
                                    <thead>
                                        <tr> 
                                            <th class="border-bottom-0">S/N</th>
                                            <th class="border-bottom-0">Name</th>
                                            <th class="border-bottom-0">Email</th>
                                            <th class="border-bottom-0">Amount</th>
                                            <th class="border-bottom-0">Description</th>
                                            <th class="border-bottom-0">Transaction ID</th>
                                            <th class="border-bottom-0">Paid At</th>
                                        </tr>
                                    </thead>
                                    @foreach($payments as $key => $payment)
                                    <tbody>
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>
                                                {{$payment->first_name}} {{$payment->last_name}}
                                            </td>
                                            <td>
                                                {{$payment->email}}
                                            </td>
                                            <td>£{{$payment->amount}}</td>
                                            <td>{{$payment->description}}</td>
                                            <td>
                                                {{$payment->transaction_id}}
                                            </td>
                                            <td>
                                                {{$payment->created_at->toDayDateTimeString()}}
                                            </td>
                                        </tr>
                                    </tbody>
                                    @endforeach
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