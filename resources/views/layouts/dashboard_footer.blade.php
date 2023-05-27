<footer class="footer">
    <div class="container">
        <div class="row align-items-center flex-row-reverse text-white">
            <div class="col-md-12 col-sm-12 text-center text-white">
                Copyright © <script>
                    document.write(new Date().getFullYear())
                </script> <a href="/" style="color: #fff;">{{config('app.name')}}</a>. All rights reserved
            </div>
        </div>
    </div>
</footer>

<!-- Alerts  Start-->
<div style="position: fixed; top: 15px; right: 10px; z-index: 100000; width: auto;">
    @include('layouts.alert')
</div>
<!-- Alerts End -->