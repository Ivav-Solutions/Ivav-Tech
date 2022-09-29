@extends('layouts.frontend')

@section('navbar')
@includeIf('layouts.navbar')
@endsection

@section('page-content')
<div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h2>Login</h2>
            <ul>
                <li><a href="/">Home</a></li>
                <li class="active">Login</li>
            </ul>
        </div>
    </div>
</div>
<div class="signup-area ptb-100">
    <div class="container">
        <div class="signup-form">
            <div class="section-tittle text-center">
                <h2>Sign In</h2>
            </div>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="form-group">
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" />
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <div class="form-group">
                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" />
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <div class="form-group">
                            <input class="form-check-input" style="margin-left: 0.1rem;" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" style="margin-left: 1.5rem;" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                    <div class="col-12 text-center">
                        <button type="submit" class="box-btn signup-btn">Sign In</button>
                        <br>
                        @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                        @endif
                    </div>
                </div>
            </form>
            <p style="text-align: center; margin-top: 30px;">Dont have an account ? <a href="{{ route('register') }}">Sign Up</a> </p>
        </div>
    </div>
</div>
@endsection