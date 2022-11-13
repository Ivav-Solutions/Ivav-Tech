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
                    <h1 class="page-title">Dashboard</h1>
                </div>
                <div class="ms-auto pageheader-btn">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <!-- ROW-1 -->
            <div class="row">
                <div class="col-lg-6 col-sm-12 col-md-6">
                    <div class="card overflow-hidden">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <p class="text-success fs-28 mb-4">Active</p>
                                    <h3 class="mb-0 fs-80 fw-semibold">Welcome {{Auth::user()->first_name}} {{Auth::user()->last_name}}!</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12 col-md-6">
                    <div class="card overflow-hidden">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h3 class="mb-2 fw-semibold">{{$totalEnrollment->count()}}</h3>
                                    <p class="text-muted fs-80 mb-0">Total Enrollment</p>
                                </div>
                                <div class="col col-auto top-icn dash">
                                    <div class="counter-icon dash ms-auto box-shadow-secondary" style="background-color: #010e1f">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="fill-white" enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                            <path d="M12,8c-2.2091675,0-4,1.7908325-4,4s1.7908325,4,4,4c2.208252-0.0021973,3.9978027-1.791748,4-4C16,9.7908325,14.2091675,8,12,8z M12,15c-1.6568604,0-3-1.3431396-3-3s1.3431396-3,3-3c1.6561279,0.0018311,2.9981689,1.3438721,3,3C15,13.6568604,13.6568604,15,12,15z M21.960022,11.8046875C19.9189453,6.9902344,16.1025391,4,12,4s-7.9189453,2.9902344-9.960022,7.8046875c-0.0537109,0.1246948-0.0537109,0.2659302,0,0.390625C4.0810547,17.0097656,7.8974609,20,12,20s7.9190063-2.9902344,9.960022-7.8046875C22.0137329,12.0706177,22.0137329,11.9293823,21.960022,11.8046875z M12,19c-3.6396484,0-7.0556641-2.6767578-8.9550781-7C4.9443359,7.6767578,8.3603516,5,12,5s7.0556641,2.6767578,8.9550781,7C19.0556641,16.3232422,15.6396484,19,12,19z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ROW-1 END-->

            <!-- ROW-4 -->
            <div class="row">
                <div class="col-12 col-sm-12">
                    <div class="card product-sales-main">
                        <div class="card-header border-bottom">
                            <h3 class="card-title mb-0">Payment History</h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="data-table" class="table text-nowrap mb-0 table-bordered">
                                    <thead class="table-head">
                                        <tr>
                                            <th class="bg-transparent border-bottom-0">Program</th>
                                            <th class="bg-transparent border-bottom-0">Amount</th>
                                            <th class="bg-transparent border-bottom-0">Transaction ID</th>
                                            <th class="bg-transparent border-bottom-0">Paid At</th>
                                        </tr>
                                    </thead>
                                    @foreach($totalPayments as $key => $totalPayment)
                                    <tbody class="table-body">
                                        <tr>
                                            <td class="text-dark fs-14 fw-semibold">{{$totalPayment->description}}</td>
                                            <td class="text-dark fs-13">£{{$totalPayment->amount}}</td>
                                            <td class="text-danger fs-14 fw-semibold">{{$totalPayment->transaction_id}}</td>
                                            <td class="text-success fs-14 fw-semibold">{{$totalPayment->created_at->toDayDateTimeString()}}</td>
                                        </tr>
                                    </tbody>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div><!-- COL END -->
            </div>
            <!-- ROW-4 END -->
        </div>
        <!-- CONTAINER END -->
    </div>
</div>
@endsection