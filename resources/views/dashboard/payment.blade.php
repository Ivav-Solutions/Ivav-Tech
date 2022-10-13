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
                    <h1 class="page-title">Payment</h1>
                </div>
                <div class="ms-auto pageheader-btn">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Payment</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <!-- ROW-1 OPEN -->
            <div class="row" id="user-profile">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <form class="form-horizontal" method="POST" action="{{ route('user.proceed.to.payment.mysagepay',  Crypt::encrypt(Auth::user()->id))}}">
                            @csrf
                            <div class="modal-body">
                                <div class="mb-3 text-left">
                                    <div class="mb-4 main-content-label">Enter Your Payment Details</div>
                                    <div class="form-group ">
                                        <div class="row">
                                            <div class="col-6">
                                                <label for="firstName" class="form-label">First Name</label>
                                                <input type="text" class="form-control" id="firstName" placeholder="First Name" name="firstName" value="{{Auth::user()->first_name}}" required>
                                            </div>
                                            <div class="col-6">
                                                <label for="lastName" class="form-label">Last Name</label>
                                                <input type="text" class="form-control" id="lastName" placeholder="Last Name" name="lastName" value="{{Auth::user()->last_name}}"required>
                                            </div>
                                            <div class="col-12">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="email" class="form-control" id="email" placeholder="Email" name="email" value="{{Auth::user()->email}}"required>
                                            </div>
                                            <div class="col-12">
                                                <label for="amount" class="form-label">Amount</label>
                                                <input type="text" class="form-control" id="amount" value="{{$userAmount}}" placeholder="Amount" name="amount" required>
                                            </div>
                                            <div class="col-12">
                                                <label for="description" class="form-label">Description</label>
                                                <textarea type="text" class="form-control" id="description" placeholder="Description" name="description" required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <hr>
                                        <p style="font-weight: 600;">Card</p>
                                        <hr>
                                        <div class="row">
                                            <div class="col-6">
                                                <label for="number" class="form-label">Card Number</label>
                                                <input type="number" class="form-control" id="number" placeholder="Card Number" name="number" required>
                                            </div>
                                            <div class="col-6">
                                                <label for="expiryMonth" class="form-label">Expiry Month</label>
                                                <input type="number" class="form-control" id="expiryMonth" placeholder="Expiry Month" name="expiryMonth" required>
                                            </div>
                                            <div class="col-12">
                                                <label for="expiryYear" class="form-label">Expiry Year</label>
                                                <input type="number" class="form-control" id="expiryYear" placeholder="Expiry Year" name="expiryYear" required>
                                            </div>
                                            <div class="col-12">
                                                <label for="CVV" class="form-label">CVV</label>
                                                <input type="number" class="form-control" id="CVV" placeholder="CVV" name="CVV" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <hr>
                                        <p style="font-weight: 600;">Billing Details</p>
                                        <hr>
                                        <div class="row">
                                            <div class="col-6">
                                                <label for="billingFirstName" class="form-label">Billing First Name</label>
                                                <input type="text" class="form-control" id="billingFirstName" placeholder="Billing First Name" name="billingFirstName" required>
                                            </div>
                                            <div class="col-6">
                                                <label for="billingLastName" class="form-label">Billing Last Name</label>
                                                <input type="text" class="form-control" id="billingLastName" placeholder="Billing Last Name" name="billingLastName" required>
                                            </div>
                                            <div class="col-12">
                                                <label for="billingAddress1" class="form-label">Billing Address</label>
                                                <input type="text" class="form-control" id="billingAddress1" placeholder="Billing Address" name="billingAddress1" required>
                                            </div>
                                            <!-- <div class="col-6">
                                                <label for="shippingState" class="form-label">Billing State</label>
                                                <input type="text" class="form-control" id="shippingState" placeholder="Shipping State" name="shippingState" required>
                                            </div> -->
                                            <div class="col-6">
                                                <label for="billingCity" class="form-label">Billing City</label>
                                                <input type="text" class="form-control" id="billingCity" placeholder="Billing City" name="billingCity" required>
                                            </div>
                                            <div class="col-6">
                                                <label for="billingPostcode" class="form-label">Billing Postcode</label>
                                                <input type="text" class="form-control" id="billingPostcode" placeholder="Billing Postcode" name="billingPostcode" required>
                                            </div>
                                            <div class="col-6">
                                                <label for="billingCountry" class="form-label">Billing Country</label>
                                                <select type="text" class="form-control" id="billingCountry" name="billingCountry" required>
                                                    <option value="">-- Select Billing Country --</option>
                                                    @foreach($countries as $country)
                                                    <option value="{{$country}}">{{$country}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-6">
                                                <label for="billingPhone" class="form-label">Billing Phone Number</label>
                                                <input type="number" class="form-control" id="billingPhone" placeholder="Billing Phone Number" name="billingPhone" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <hr>
                                        <p style="font-weight: 600;">Shipping Details</p>
                                        <hr>
                                        <div class="row">
                                            <div class="col-6">
                                                <label for="shippingFirstName" class="form-label">Shipping First Name</label>
                                                <input type="text" class="form-control" id="shippingFirstName" placeholder="Shipping First Name" name="shippingFirstName" required>
                                            </div>
                                            <div class="col-6">
                                                <label for="shippingLastName" class="form-label">Shipping Last Name</label>
                                                <input type="text" class="form-control" id="shippingLastName" placeholder="Shipping Last Name" name="shippingLastName" required>
                                            </div>
                                            <div class="col-12">
                                                <label for="shippingAddress1" class="form-label">Shipping Address</label>
                                                <input type="text" class="form-control" id="shippingAddress1" placeholder="Shipping Address" name="shippingAddress1" required>
                                            </div>
                                            <div class="col-6">
                                                <label for="shippingState" class="form-label">Shipping State</label>
                                                <input type="text" class="form-control" id="shippingState" placeholder="Shipping State" name="shippingState" required>
                                            </div>
                                            <div class="col-6">
                                                <label for="shippingCity" class="form-label">Shipping City</label>
                                                <input type="text" class="form-control" id="shippingCity" placeholder="Shipping City" name="shippingCity" required>
                                            </div>
                                            <div class="col-lg-4">
                                                <label for="shippingPostcode" class="form-label">Shipping Postcode</label>
                                                <input type="text" class="form-control" id="shippingPostcode" placeholder="Shipping Postcode" name="shippingPostcode" required>
                                            </div>
                                            <div class="col-lg-4">
                                                <label for="shippingCountry" class="form-label">Shipping Country</label>
                                                <select type="text" class="form-control" id="shippingCountry" name="shippingCountry" required>
                                                    <option value="">-- Select Shipping Country --</option>
                                                    @foreach($countries as $country)
                                                    <option value="{{$country}}">{{$country}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-lg-4">
                                                <label for="shippingPhone" class="form-label">Shipping Phone Number</label>
                                                <input type="number" class="form-control" id="shippingPhone" placeholder="Shipping Phone Number" name="shippingPhone" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group float-end">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <button class="btn btn-info my-1" type="submit">Proceed Payment</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </form>
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