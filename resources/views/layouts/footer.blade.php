<footer class="footer-area pt-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="content">
                    <div class="logo"><a href="/"><img src="{{URL::asset('images/logo.png')}}" alt="logo" width="100px" /></a></div>
                    <p>
                        {{config('app.name')}} is an Arm of IVAV Solutions dedicated to the provision of Tech inclined services to its' clients. Such services include but are not limited to Software Development (Web, Mobile, Desktop), 
                        IT Training, and Career and Business Consulting.
                    </p>
                    <ul class="social">
                        <li><a href="https://m.facebook.com/ivavtech/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://instagram.com/ivav_tech?igshid=YmMyMTA2M2Y=" target="_blank"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="https://www.linkedin.com/company/ivav-solutions/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="content ml-15">
                    <h3>Our Services</h3>
                    <ul class="footer-list">
                        <li><a href="/service/consultation">Consultation</a></li>
                        <li><a href="/service/software_development/web_development">Web Development</a></li>
                        <li><a href="/service/software_development/mobile_development">Mobile Development</a></li>
                        <!-- <li><a href="/service/software_development/desktop_development">Desktop Development</a></li>
                        <li><a href="/service/software_development/game_development">Game Development</a></li> -->
                        <li><a href="/service/it_programs">IT Programs</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-6">
                <div class="content">
                    <h3>Quick Links</h3>
                    <ul class="footer-list">
                        <li><a href="/">Home</a></li>
                        <li><a href="/about-us">About Us</a></li>
                        <li><a href="/faqs">FAQs</a></li>
                        <li><a href="/contact">Contact</a></li>
                        <li><a href="/book_consultation">Book Consultation</a></li>
                        <li><a href="/login">Login</a></li>
                        <li><a href="/register">Register</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="content contacts">
                    <h3 class="ml-40">Contact</h3>
                    <ul class="footer-list foot-social">
                        <li><a href="tel:+447949317523"><i class="fa fa-phone"></i>+447949317523</a></li>
                        <li><a href="mailto:info@ivavtech.com"><i class="fa fa-envelope"></i> <span class="__cf_email__" data-cfemail="ea828f868685aa90858185c4898587">info@ivavtech.com</span></a></li>
                        <li><a href="mailto:contact@ivavtech.com "><i class="fa fa-envelope"></i> <span class="__cf_email__" data-cfemail="42313732322d303602382d292d6c212d2f">contact@ivavtech.com</span></a></li>
                        <li><i class="fa fa-map"></i> Shelton, London <br> Lagos, Nigeria.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="copy-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="menu">
                        <li><a href="/">Home</a></li>
                        <li><a href="/about-us">About</a></li>
                        <li><a href="/contact">Contact</a></li>
                        <li><a href="/faqs">FAQs</a></li>
                        <li><a href="/book_consultation">Book Appointment</a></li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <p class="right">Copyright @
                        <!-- -->{{ date('Y') }}
                        <!-- --> {{config('app.name')}} A Subsidiary of <a href="https://ivavsolutions.com/" target="_blank">Ivav Solutions</a>.
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>