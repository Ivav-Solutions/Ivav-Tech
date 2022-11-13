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
                        <li class="breadcrumb-item"><a href="{{route('user.it.programs')}}">IT Programs</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Payment</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <!-- ROW-1 OPEN -->
            <div class="row ">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header border-bottom">
                            <div class="card-title">
                                Enter Your Payment Details
                            </div>
                        </div>
                        <div class="card-body">
                            <form class="form-horizontal" method="POST" action="{{ route('user.proceed.to.payment.mysagepay',  [Crypt::encrypt(Auth::user()->id), Crypt::encrypt($userAmount)])}}">
                                @csrf
                                <div id="smartwizard-3">
                                    <ul>
                                        <li><a href="#step-10">Personal Information</a></li>
                                        <li><a href="#step-11">Billing Information</a></li>
                                        <li><a href="#step-12">Shipping Information</a></li>
                                        <li><a href="#step-13">Payment Details</a></li>
                                    </ul>
                                    <div>
                                        <div id="step-10">
                                            <div class="row ">
                                                <div class="col-md-6 mb-4">
                                                    <label class="form-control-label" for="firstName">First Name: <span class="tx-danger">*</span></label>
                                                    <input type="text" class="form-control" id="firstName" placeholder="First Name" name="firstName" value="{{Auth::user()->first_name}}" readonly required>
                                                </div>
                                                <div class="col-md-6 mb-4">
                                                    <label for="lastName" class="form-control-label">Last Name: <span class="tx-danger">*</span></label>
                                                    <input type="text" class="form-control" id="lastName" placeholder="Last Name" name="lastName" value="{{Auth::user()->last_name}}" readonly required>
                                                </div>
                                                <div class="col-md-6 mb-4">
                                                    <label for="email" class="form-control-label">Email: <span class="tx-danger">*</span></label>
                                                    <input type="email" class="form-control" id="email" placeholder="Email" name="email" value="{{Auth::user()->email}}" readonly required>
                                                </div>
                                                <div class="col-md-6 mb-4">
                                                    <label for="amount" class="form-control-label">Amount: <span class="tx-danger">*</span></label>
                                                    <input type="text" class="form-control" id="amount" value="{{$userAmount}}" placeholder="Amount" name="amount" required readonly>
                                                </div>
                                                <div class="col-12 mb-4">
                                                    <label for="description" class="form-control-label">Description: <span class="tx-danger">*</span></label>
                                                    <textarea type="text" class="form-control" id="description" placeholder="Description" name="description" value="{{$programDescription}}" readonly required>{{$programDescription}}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="step-11">
                                            <div class="row">
                                                <div class="col-md-6 mb-4">
                                                    <label for="billingFirstName" class="form-control-label">Billing First Name</label>
                                                    <input type="text" class="form-control" id="billingFirstName" placeholder="Billing First Name" name="billingFirstName" required>
                                                </div>
                                                <div class="col-md-6 mb-4">
                                                    <label for="billingLastName" class="form-control-label">Billing Last Name</label>
                                                    <input type="text" class="form-control" id="billingLastName" placeholder="Billing Last Name" name="billingLastName" required>
                                                </div>
                                                <div class="col-12 mb-4">
                                                    <label for="billingAddress1" class="form-control-label">Billing Address</label>
                                                    <input type="text" class="form-control" id="billingAddress1" placeholder="Billing Address" name="billingAddress1" required>
                                                </div>
                                                <!-- <div class="col-md-6 mb-4">
                                                <label for="shippingState" class="form-control-label">Billing State</label>
                                                <input type="text" class="form-control" id="shippingState" placeholder="Shipping State" name="shippingState" required>
                                            </div> -->
                                                <div class="col-md-6 mb-4">
                                                    <label for="billingCity" class="form-control-label">Billing City</label>
                                                    <input type="text" class="form-control" id="billingCity" placeholder="Billing City" name="billingCity" required>
                                                </div>
                                                <div class="col-md-6 mb-4">
                                                    <label for="billingPostcode" class="form-control-label">Billing Postcode</label>
                                                    <input type="text" class="form-control" id="billingPostcode" placeholder="Billing Postcode" name="billingPostcode" required>
                                                </div>
                                                <div class="col-md-6 mb-4">
                                                    <label for="billingCountry" class="form-control-label">Billing Country</label>
                                                    <select type="text" class="form-control" id="billingCountry" name="billingCountry" required>
                                                        <option value="">-- Select Billing Country --</option>
                                                        @foreach ($countries as $key => $country)
                                                            <option value="{{$country->code}}">{{ $country->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-md-6 mb-4">
                                                    <label for="billingPhone" class="form-control-label">Billing Phone Number</label>
                                                    <input type="number" class="form-control" id="billingPhone" placeholder="Billing Phone Number" name="billingPhone" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="step-12">
                                            <div class="row">
                                                <div class="col-md-6 mb-4">
                                                    <label for="shippingFirstName" class="form-control-label">Shipping First Name</label>
                                                    <input type="text" class="form-control" id="shippingFirstName" placeholder="Shipping First Name" name="shippingFirstName" required>
                                                </div>
                                                <div class="col-md-6 mb-4">
                                                    <label for="shippingLastName" class="form-control-label">Shipping Last Name</label>
                                                    <input type="text" class="form-control" id="shippingLastName" placeholder="Shipping Last Name" name="shippingLastName" required>
                                                </div>
                                                <div class="col-12 mb-4">
                                                    <label for="shippingAddress1" class="form-control-label">Shipping Address</label>
                                                    <input type="text" class="form-control" id="shippingAddress1" placeholder="Shipping Address" name="shippingAddress1" required>
                                                </div>
                                                <div class="col-12 mb-4">
                                                    <label for="shippingState" class="form-control-label">Shipping State</label>
                                                    <input type="text" class="form-control" id="shippingState" placeholder="Shipping State" name="shippingState" max="2" required>
                                                    <span class="text-danger">Note: Two letter abbreviation of the state is required only</span>
                                                </div>
                                                <div class="col-md-6 mb-4">
                                                    <label for="shippingCity" class="form-control-label">Shipping City</label>
                                                    <input type="text" class="form-control" id="shippingCity" placeholder="Shipping City" name="shippingCity" required>
                                                </div>
                                                <div class="col-md-6 mb-4">
                                                    <label for="shippingPostcode" class="form-control-label">Shipping Postcode</label>
                                                    <input type="text" class="form-control" id="shippingPostcode" placeholder="Shipping Postcode" name="shippingPostcode" required>
                                                </div>
                                                <div class="col-md-6 mb-4">
                                                    <label for="shippingCountry" class="form-control-label">Shipping Country</label>
                                                    <select type="text" class="form-control" id="shippingCountry" name="shippingCountry" required>
                                                        <option value="">-- Select Shipping Country --</option>
                                                        @foreach ($countries as $key => $country)
                                                            <option value="{{$country->code}}">{{ $country->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-md-6 mb-4">
                                                    <label for="shippingPhone" class="form-control-label">Shipping Phone Number</label>
                                                    <input type="number" class="form-control" id="shippingPhone" placeholder="Shipping Phone Number" name="shippingPhone" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="step-13">
                                            <div class="form-group">
                                                <label class="form-label" for="cardno2">Card number</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="cardno2" name="number" placeholder="Card Number" required>
                                                    <span class="input-group-text btn btn-info text-white shadow-none">
                                                        <i class="fa fa-cc-visa"></i> &nbsp; <i class="fa fa-cc-amex"></i> &nbsp;
                                                        <i class="fa fa-cc-mastercard"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-8">
                                                    <div class="form-group">
                                                        <label class="form-label" for="expdate3">Expiration</label>
                                                        <div class="input-group">
                                                            <input type="number" class="form-control" id="expdate3" placeholder="MM" name="expiryMonth" required>
                                                            <input type="number" class="form-control" id="expdate31" placeholder="YYYY" name="expiryYear" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 ">
                                                    <div class="form-group mb-0">
                                                        <label class="form-label" for="cvv2">CVV <i class="fa fa-question-circle"></i></label>
                                                        <input type="number" class="form-control" id="cvv2" name="CVV" required>
                                                    </div>
                                                </div>
                                                <div class="col-12" style="border: 1px solid #1d42d9; padding: 2rem;">
                                                    <label class="form-label" for="discountCode">Discount Code <i class="fa fa-question-circle"></i></label>
                                                    <input type="text" class="form-control" id="discountCode" placeholder="Discount Code" name="discountCode">
                                                    <p>Apply code to get <span class="text-danger">10% discount off.</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ROW-1 CLOSED -->
        </div>
        <!-- CONTAINER END -->
    </div>
</div>
@endsection