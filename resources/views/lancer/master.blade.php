<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="modinatheme">
    <!-- ======== Page title ============ -->
    <title>@yield('title',env('APP_NAME'))</title>
    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png')  }}">
    <!-- ===========  All Stylesheet ================= -->
    <!--  Icon css plugins -->
    <link rel="stylesheet" href="{{ asset('assets/csss/icons.css') }}">
    <!--  animate css plugins -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <!--  slick css plugins -->
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <!--  magnific-popup css plugins -->
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <!-- metis menu css file -->
    <link rel="stylesheet" href="{{ asset('assets/css/metismenu.css') }}">
    <!-- select2 css file -->
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select2.css') }}">
    <!--  Bootstrap css plugins -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!--  main style css file -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- template main style css file -->
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    @yield('styles')

</head>

<body class="body-wrapper">
    <!-- preloader -->
    <div id="preloader" class="preloader">
        <div class="animation-preloader">
            <div class="spinner">
            </div>
                <div class="txt-loading">
                    <span data-text-preloader="G" class="letters-loading">
                        G
                    </span>
                    <span data-text-preloader="O" class="letters-loading">
                        O
                    </span>
                    <span data-text-preloader="L" class="letters-loading">
                       L
                    </span>
                    <span data-text-preloader="A" class="letters-loading">
                        A
                    </span>
                    <span data-text-preloader="N" class="letters-loading">
                        N
                    </span>
                    <span data-text-preloader="C" class="letters-loading">
                        C
                    </span>
                    <span data-text-preloader="E" class="letters-loading">
                        E
                    </span>
                    <span data-text-preloader="R" class="letters-loading">
                        R
                    </span>
                </div>
            <p class="text-center">Loading</p>
        </div>
        <div class="loader">
            <div class="row">
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="top-bar-wrapper d-none d-sm-block">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="top-left">
                <a href="tel:987-098-098-09"><i class="fal fa-phone-volume"></i>+970599848228</a>
                <a href="mailto:info@example.com"><i class="fal fa-envelope"></i>info@golancer.io</a>
                <a href="#"><i class="fal fa-map-marker-alt"></i>Sydney, Australia</a>
            </div>
            <div class="top-right d-none d-md-block">
                <div class="social-pages">
                    <a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                    <a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a>
                    <a href="#"><i class="fab fa-youtube" aria-hidden="true"></i></a>
                    <a href="#"><i class="fab fa-skype" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>

    <header class="header-1">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-3 col-sm-5 col-md-4 col-6 pr-lg-5">
                    <div class="logo">
                        <a href="{{ route('home.index') }}">
                            <img style="height: 80px;" src="{{  asset('assets/logo.png')  }}"  alt="quantech">
                        </a>
                    </div>
                </div>
                <div class="col-lg-9 text-end p-lg-0 d-none d-lg-flex justify-content-between align-items-center">
                    <div class="menu-wrap">
                        <div class="main-menu">
                            <ul>
                                <li><a href="#">Home <i class="fas fa-angle-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('home.index') }}">Home 1</a></li>
                                        <li><a href="index-2.html">Home 2</a></li>
                                        <li><a href="index-3.html">Home 3</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ route('about') }}">About</a> </li>
                                <li><a href="services.html">services</a></li>
                                <li><a href="projects.html">projects</a></li>
                                <li><a href="team.html">team</a></li>
                             <!--    <li><a href="#">Pages <i class="fas fa-angle-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="faq.html">faq</a></li>
                                        <li><a href="team.html">team</a></li>
                                        <li><a href="pricing.html">pricing</a></li>
                                        <li><a href="404.html">404</a></li>
                                    </ul>
                                </li>
                                <li><a href="news.html">News</a></li> -->
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="header-right-element">
                        <a href="contact.html" class="theme-btn">Whatsapp</a>
                    </div>
                </div>
                <div class="d-block d-lg-none col-sm-1 col-md-8 col-6">
                    <div class="mobile-nav-wrap">
                        <div id="hamburger"><i class="fal fa-bars"></i></div>
                        <!-- mobile menu - responsive menu  -->
                        <div class="mobile-nav">
                            <button type="button" class="close-nav">
                                <i class="fal fa-times-circle"></i>
                            </button>
                            <nav class="sidebar-nav">
                                <ul class="metismenu" id="mobile-menu">
                                    <li><a class="has-arrow" href="#">Homes</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{ route('home.index') }}">Homepage 1</a></li>
                                            <li><a href="index-2.html">Homepage 2</a></li>
                                            <li><a href="index-3.html">Homepage 3</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ route('about') }}">about</a></li>
                                    <li><a href="services.html">services</a></li>
                                    <li><a href="projects.html">projects</a></li>
                                    <li>
                                        <a class="has-arrow" href="#">Pages</a>
                                        <ul class="sub-menu">
                                            <li><a href="faq.html">faq</a></li>
                                            <li><a href="services-details.html">services details</a></li>
                                            <li><a href="team.html">Team</a></li>
                                            <li><a href="404.html">404</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="news.html">News</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </nav>

                            <div class="action-bar text-white">
                                <div class="single-info-element">
                                    <div class="icon">
                                        <i class="fal fa-map-marked-alt"></i>
                                    </div>
                                    <div class="text">
                                        <h5>visit our location:</h5>
                                        <span>West Jakarta City, UK</span>
                                    </div>
                                </div>
                                <div class="single-info-element">
                                    <div class="icon">
                                        <i class="fal fa-clock"></i>
                                    </div>
                                    <div class="text">
                                        <h5>Opening Hours:</h5>
                                        <span>Mon-Fri 8am-5pm</span>
                                    </div>
                                </div>
                                <div class="single-info-element">
                                    <div class="icon">
                                        <i class="fal fa-envelope"></i>
                                    </div>
                                    <div class="text">
                                        <h5>Send us mail</h5>
                                        <span>info@example.com</span>
                                    </div>
                                </div>
                                <div class="call-us">
                                    <div class="icon text-white">
                                        <i class="fal fa-phone-volume"></i>
                                    </div>
                                    <div class="text">
                                        <h5>Phone Number</h5>
                                        <span>+09 949 858327</span>
                                    </div>
                                </div>
                                <a href="contact.html" class="theme-btn mt-4">Free Consulting</a>
                            </div>
                        </div>
                    </div>
                    <div class="overlay"></div>
                </div>
            </div>
        </div>
    </header>



    @yield('content')



    <footer class="footer-1 footer-wrap">
        <div class="footer-widgets-wrapper text-white bg-cover" style="background-image: url('assets/img/footer-widgets-bg.png') ">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xl-3">
                        <div class="about-quantech pe-md-5 pe-xl-0">
                            <a href="{{ route('home.index') }}">
                                <img src="{{  asset('assets/img/logo-footer.png')  }}" alt="quantech">
                            </a>
                            <p>Quantech is IT Solutions & Technology business, then you should choose QuanTech Theme. Startup, Digital marketing, IT Agency Services, IT Consultant and Tech Business</p>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xl-3">
                        <div class="single-footer-wid ps-xl-5">
                            <div class="wid-title">
                                <h3>Information</h3>
                            </div>
                            <ul>
                                <li><a href="services.html">What We Do</a></li>
                                <li><a href="contact.html">About Us</a></li>
                                <li><a href="services.html">IT Solutions</a></li>
                                <li><a href="team.html">Our Team</a></li>
                                <li><a href="project-details.html">Case Study</a></li>
                                <li><a href="contact.html">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xl-3">
                        <div class="single-footer-wid ps-xl-2">
                            <div class="wid-title">
                                <h3>Our Services</h3>
                            </div>
                            <ul>
                                <li><a href="#">IT Solutions</a></li>
                                <li><a href="#">Technology</a></li>
                                <li><a href="#">WordPress Theme</a></li>
                                <li><a href="#">digital marketing</a></li>
                                <li><a href="#">Tech consultant</a></li>
                                <li><a href="#">web agency</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xl-3">
                        <div class="single-footer-wid site-info-widget">
                            <div class="wid-title">
                                <h3>Get In Touch</h3>
                            </div>
                            <div class="get-in-touch">
                                <div class="single-contact-info">
                                    <div class="icon id1">
                                        <i class="fal fa-map-marker-alt"></i>
                                    </div>
                                    <div class="contact-info">
                                        <span>94 Roa Malaka, West Jakarta City, UK</span>
                                    </div>
                                </div>
                                <div class="single-contact-info">
                                    <div class="icon id2">
                                        <i class="fal fa-phone"></i>
                                    </div>
                                    <div class="contact-info">
                                        <span>+91-768728658</span>
                                    </div>
                                </div>
                                <div class="single-contact-info">
                                    <div class="icon id3">
                                        <i class="fal fa-envelope"></i>
                                    </div>
                                    <div class="contact-info">
                                        <span>info@example.com</span>
                                    </div>
                                </div>
                            </div>

                            <div class="newsletter_widget">
                                <div class="newsletter_box">
                                    <form action="#">
                                        <input type="email" placeholder="Enter email address" required>
                                        <button class="submit-btn" type="submit"><i class="fas fa-envelope-open"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container align-items-center">
                <div class="bottom-content-wrapper">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="copy-rights">
                                <p>&copy;2023 <strong>quantech</strong>, All Rights Reserved</p>
                            </div>
                        </div>
                        <div class="col-md-6 mt-2 mt-md-0 col-12 text-md-end">
                            <div class="social-links">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!--  ALl JS Plugins
    ====================================== -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/modernizr.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.easing.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/imageload.min.js') }}"></script>
    <script src="{{ asset('assets/js/scrollUp.min.js') }}"></script>
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/slick-animation.min.js') }}"></script>
    <script src="{{ asset('assets/js/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/metismenu.js') }}"></script>
    <script src="{{ asset('assets/js/nice-select2.js') }}"></script>
    <script src="{{ asset('assets/js/active.js') }}"></script>
    @yield('scripts')
</body>

</html>
