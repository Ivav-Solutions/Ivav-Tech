<!DOCTYPE html>
<html lang="zxx">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <link rel="icon" type="image/png" href="{{URL::asset('images/favicon.png')}}" />
    <meta charSet="utf-8" />
    <title>{{config('app.name')}} - Administrator</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="next-head-count" content="7" />
    <link rel="stylesheet" href="{{URL::asset('css/meanmenu.min.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('css/95ec97780f5a3d3d899e.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('css/boxicons.min.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('css/animate.min.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('css/owl.carousel.min.css')}}" />

    {!! NoCaptcha::renderJs() !!}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>
    <div>
        <div class="signup-area ptb-100">
            <div class="container">
                <div class="signup-form" style="width: 440px;">
                    <div class="section-tittle text-center">
                        <a href="/"><img src="{{URL::asset('images/favicon.png')}}" class="mb-4" alt="logo" style="width: 60px; height: 50px;"></a>
                        <h2>Admin Sign In</h2>
                    </div>
                    <form method="POST" action="{{ route('login.admin') }}">
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
                </div>
            </div>
        </div>
        <div class="go-top "><i class="fa fa-angle-up"></i></div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <script src="{{URL::asset('js/jquery.min.js')}}"></script>

    <script src="{{URL::asset('js/meanmenu.min.js')}}"></script>

    <script src="{{URL::asset('js/owl.carousel.min.js')}}"></script>

    <script src="{{URL::asset('js/wow.min.js')}}"></script>

    <script src="{{URL::asset('js/magnific-popup.min.js')}}"></script>

    <script src="{{URL::asset('js/main.js')}}"></script>
</body>

</html>