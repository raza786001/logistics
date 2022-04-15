<header>
    <!-- Header Start -->
    <div class="header-area">
        <div class="main-header ">
            <div class="header-top d-none d-lg-block">
                <div class="container">
                    <div class="col-xl-12">
                        <div class="row d-flex justify-content-between align-items-center">
                            <div class="header-info-left">
                                <ul>
                                    <li>Phone: +99 (0) 101 0000 888</li>
                                    <li>Email: info@mwclients.com</li>
                                </ul>
                            </div>
                            <div class="col-md-3 top-bar-drop">
                                <div class="dropdown topbar-dropdown ">
                                    <button class="btn dropdown-toggle" type="button" data-toggle="dropdown"><img src="{{  asset('assets/frontend/img/logo/global.png')}}">English
                                    <span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                      <li style="text-align: end;"><a href="#">عربى </a></li>
                                    </ul>
                                  </div>
                            </div>
                            <div class="header-info-right">
                                <ul class="header-social">
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li> <a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom  header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo">
                                <a href="#"><img src="{{  asset('assets/frontend/img/logo/logo.png')}}" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10">
                            <div class="menu-wrapper  d-flex align-items-center justify-content-end">
                                <!-- Main-menu -->
                                <div class="main-menu d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="{{ url('/') }}">Home</a></li>
                                            <li><a href="{{ url('/about-us') }}">About</a></li>
                                            <li><a href="{{ url('/services') }}">Services</a></li>
                                            <li><a href="{{ url('/shipping-calculator') }}">Shipping Calculator</a></li>
                                            <!-- <li><a href="#">Blog</a>
                                                <ul class="submenu">
                                                    <li><a href="#">Blog</a></li>
                                                    <li><a href="#">Blog Details</a></li>
                                                    <li><a href="#">Element</a></li>
                                                </ul>
                                            </li> -->
                                            <li><a href="{{ url('/testimonial') }}">Testimonial</a></li>
                                            <li><a href="{{ url('/contact-us') }}">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <!-- Header-btn -->
                                <div class="header-right-btn d-none d-lg-block ml-20">
                                    <a href="#" class="btn header-btn">Get A Qoue</a>
                                </div>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>
