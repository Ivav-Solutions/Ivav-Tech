<div class="navbar-area">
    <div class="mobile-nav">
        <a href="/" class="logo">
            <img src="{{URL::asset('images/logo.png')}}" alt="logo"  width="80px" />
        </a>
    </div>
    <div class="main-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a href="/" class="logo mr-5">
                    <img src="{{URL::asset('images/logo.png')}}" alt="logo"  width="80px" />
                </a>
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav text-left">
                        <li class="nav-item"><a class="nav-link {{ (request()->is('/')) ? 'active' : '' }}" href="/">Home</a></li>
                        <li class="nav-item"><a class="nav-link {{ (request()->is('about-us')) ? 'active' : '' }}" href="/about-us">About</a></li>
                        <li class="nav-item"><a class="nav-link dropdown-toggle {{ (request()->is('service*')) ? 'active' : '' }}" href="#">Services</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link {{ (request()->is('service/consultation')) ? 'active' : '' }}" href="/service/consultation">Consultation</a></li>
                                <li class="nav-item"><a class="nav-link {{ (request()->is('service/software_development/web_development')) ? 'active' : '' }}" href="/service/software_development/web_development">Web Development</a></li>
                                <li class="nav-item"><a class="nav-link {{ (request()->is('service/software_development/mobile_development')) ? 'active' : '' }}" href="/service/software_development/mobile_development">Mobile Development</a></li>
                                <li class="nav-item"><a class="nav-link {{ (request()->is('service/software_development/desktop_development')) ? 'active' : '' }}" href="/service/software_development/desktop_development">Desktop Development</a></li>
                                <li class="nav-item"><a class="nav-link {{ (request()->is('service/software_development/game_development')) ? 'active' : '' }}" href="/service/software_development/game_development">Game Development</a></li>
                                <li class="nav-item"><a class="nav-link {{ (request()->is('service/it_training_packages')) ? 'active' : '' }}" href="/service/it_trainings">IT Trainings</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link {{ (request()->is('contact')) ? 'active' : '' }}" href="/contact">Contact Us</a></li>
                        <li class="nav-item"><a class="nav-link {{ (request()->is('faqs')) ? 'active' : '' }}" href="/faqs">FAQs</a></li>
                    </ul>
                </div>
                <div class="nav-btn"><a class="box-btn" href="/book_consultation">Book Appointment</a></div>
            </nav>
        </div>
    </div>
</div>