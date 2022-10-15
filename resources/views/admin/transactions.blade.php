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
                    <h1 class="page-title">All Transactions</h1>
                </div>
                <div class="ms-auto pageheader-btn">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Transactions</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <!-- Row -->
            <div class="row row-sm">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header border-bottom">
                            <h3 class="card-title">All Transactions</h3>
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
                                            <th class="border-bottom-0">Transaction ID</th>
                                            <th class="border-bottom-0">Ref ID</th>
                                            <th class="border-bottom-0">Paid At</th>
                                            <th class="border-bottom-0">Channel</th>
                                            <th class="border-bottom-0">IP Address</th>
                                            <th class="border-bottom-0">Status</th>
                                        </tr>
                                    </thead>
                                    @foreach($transactions as $key => $transaction)
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$transaction->name}}</td>
                                        <td class="text-black">{{$transaction->email}}</td>
                                        <td class="text-black">{{$transaction->amount}}</td>
                                        <td>{{$transaction->transaction_id}}</td>
                                        <td class="text-black">{{$transaction->ref_id}}</td>
                                        <td>{{$transaction->paid_at}}</td>
                                        <td class="text-black">{{$transaction->channel}}</td>
                                        <td class="text-black">{{$transaction->ip_address}}</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                @if($transaction->status == 'success')
                                                <a class="btn btn-rounded btn-success mr-auto text-nowrap" href="#">{{$transaction->status}}</a>
                                                @else
                                                <a class="btn btn-rounded btn-danger mr-auto text-nowrap" href="#">{{$transaction->status}}</a>
                                                @endif
                                            </div>
                                        </td>
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