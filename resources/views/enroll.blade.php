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
        <div class="signup-form">
            <div class="section-tittle text-center">
                <h2>Sign Up</h2>
            </div>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                            <input type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" placeholder="First Name" />
                            @error('first_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 ">
                        <div class="form-group">
                            <input type="text" class="form-control @error('first_nmae') is-invalid @enderror" name="last_name" placeholder="Last Name" />
                            @error('last_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <div class="form-group">
                            <input type="email" class="form-control @error('first_nmae') is-invalid @enderror" name="email" placeholder="Email" />
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                            <input type="tel" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" placeholder="Phone Number" />
                            @error('phone_number')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                            <select class="form-control @error('gender') is-invalid @enderror" name="gender">
                                <option value="">Select Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>                                
                            </select>
                            @error('gender')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 ">
                        <div class="form-group">
                            <input type="text" class="form-control @error('country') is-invalid @enderror" name="country" placeholder="Country" />
                            @error('country')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <div class="form-group">
                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" />
                            @error('country')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <div class="form-group">
                            <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" />
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="form-group">
                            {!! app('captcha')->display() !!}
                        </div>
                    </div>
                    <div class="col-12 text-center"><button type="submit" class="box-btn signup-btn">Sign Up</button></div>
                </div>
            </form>
            <p style="text-align: center;margin-top: 30px;">Already have an account ?  <a href="{{ route('login') }}">Login</a> </p>
        </div>
    </div>
</div>
@endsection