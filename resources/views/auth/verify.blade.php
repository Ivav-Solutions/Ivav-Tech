@extends('layouts.frontend')

@section('navbar')
@includeIf('layouts.navbar')
@endsection

@section('page-content')
<div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h2>Email Verification</h2>
            <ul>
                <li><a href="/">Home</a></li>
                <li class="active">Verify Your Email Address</li>
            </ul>
        </div>
    </div>
</div>
<div class="signup-area ptb-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                    <div class="card-body">
                        @if (session('resent'))
                            <div class="alert alert-success" role="alert">
                                {{ __('A fresh verification link has been sent to your email address.') }}
                            </div>
                        @endif

                        {{ __('Before proceeding, please check your email for a verification link.') }}
                        {{ __('If you did not receive the email') }},
                        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                            @csrf
                            <div class="col-12 text-center"><button type="submit" class="box-btn signup-btn mt-3">{{ __('click here to request another') }}</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
