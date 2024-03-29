<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="image/png" href="{{URL::asset('images/favicon.png')}}" />
    <meta charSet="utf-8" />
    <title>{{config('app.name')}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
    <div id='loader'>
        <div class="loader-inner">
            <div class="loading-content"></div>
        </div>
    </div>
    <div>
        <!--SECTION: NavBar -->
        @yield('navbar')

        <!-- SECTION: BANNER -->
        @yield('banner')

        <!-- Page-Content -->
        @yield('page-content')

        <!-- SECTION: FOOTER -->
        @includeIf('layouts.footer')
        <a href="https://wa.me/+447949317523" target="_blank" class="whatsapp-go"><i class="fa fa-whatsapp"></i></a></a>
        <div class="go-top "><i class="fa fa-angle-up"></i></div>
    </div>

    <!-- Meta Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '638377044821633');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=638377044821633&ev=PageView&noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <script src="{{URL::asset('js/jquery.min.js')}}"></script>

    <script src="{{URL::asset('js/meanmenu.min.js')}}"></script>

    <script src="{{URL::asset('js/owl.carousel.min.js')}}"></script>

    <script src="{{URL::asset('js/wow.min.js')}}"></script>

    <script src="{{URL::asset('js/magnific-popup.min.js')}}"></script>

    <script src="{{URL::asset('js/main.js')}}"></script>

    <script>
        $(function() {
            $("form").submit(function() {
                $('#loader').show();
            });
        });
    </script>
</body>

</html>