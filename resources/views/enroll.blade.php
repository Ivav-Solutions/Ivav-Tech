@extends('layouts.frontend')

@section('navbar')
@includeIf('layouts.navbar')
@endsection

@section('page-content')
<div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h2>Enroll</h2>
            <ul>
                <li><a href="/">Home</a></li>
                <li class="active">Enroll</li>
            </ul>
        </div>
    </div>
</div>
<div class="signup-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="signup-form">
                    <div class="section-tittle text-center">
                        <h2>Sign In</h2>
                    </div>
                    <form>
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group"><input type="email" class="form-control" name="email" placeholder="Email" /></div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group"><input type="text" class="form-control" name="password" placeholder="Password" /></div>
                            </div>
                            <div class="col-12 text-center"><button type="submit" class="box-btn signup-btn">Sign In</button></div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="signup-form">
                    <div class="section-tittle text-center">
                        <h2>Sign Up</h2>
                    </div>
                    <form>
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group"><input type="text" class="form-control" name="first_nmae" placeholder="First Name" /></div>
                            </div>
                            <div class="col-md-6 col-sm-12 ">
                                <div class="form-group"><input type="text" class="form-control" name="last_name" placeholder="Last Name" /></div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group"><input type="email" class="form-control" name="email" placeholder="Email" /></div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group"><input type="tel" class="form-control" name="phone_number" placeholder="Phone Number" /></div>
                            </div>
                            <div class="col-md-6 col-sm-12 ">
                                <div class="form-group"><input type="text" class="form-control" name="country" placeholder="Country" /></div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group"><input type="password" class="form-control" name="password" placeholder="Password" /></div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group"><input type="password" class="form-control" name="comfirm-password" placeholder="Confirm Password" /></div>
                            </div>
                            <div class="col-12 text-center"><button type="submit" class="box-btn signup-btn">Sign Up</button></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection