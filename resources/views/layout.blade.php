<!doctype html>
<html class="no-js" lang="zxx">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>YAYASAN THARIQUL JANNAH</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.html">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('template/img/icon.png') }}">
    <!-- Place favicon.ico in the root directory-->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('template/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/meanmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/responsive.css') }}">
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- Add your site or application content here -->
    <!-- header-start -->
    <header id="home">
        <div class="header-area">
            <!-- header-top -->
            <div class="header-top primary-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                            <div class="header-contact-info d-flex">
                                <div class="header-contact header-contact-phone">
                                    <span class="ti-mobile"></span>
                                    <p class="phone-number">08112347187</p>
                                </div>
                                <div class="header-contact header-contact-email">
                                    <span class="ti-email"></span>
                                    <p class="email-name">nengratnaaari1810@gmail.com</p>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="header-social-icon-list">
                                <ul>
                                    <li><a href="#"><span class="ti-facebook"></span></a></li>
                                    <li><a href="#"><span class="ti-twitter-alt"></span></a></li>
                                    <li><a href="#"><span class="ti-dribbble"></span></a></li>
                                    <li><a href="#"><span class="ti-google"></span></a></li>
                                    <li><a href="#"><span class="ti-pinterest"></span></a></li>
                                </ul>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
            <!-- /end header-top -->
            <!-- header-bottom -->
            <div class="header-bottom-area header-sticky" style="transition: .6s;">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-2 col-lg-2 col-md-6 col-6">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="{{ asset('template/img/logo4.png') }}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-6 col-6">
                            <div class="header-bottom-icon f-right">
                                <ul>
                                    @if(Auth::user())
                                    <li class="toggle-search-icon"><a href="/login">{{Auth::user()->name}}</a>
                                    </li>
                                    @else
                                    <li class="toggle-search-icon"><a href="/login">LOGIN</a>
                                    </li>
                                    @endif

                                </ul>
                            </div>
                            <div class="main-menu f-right">
                                <nav id="mobile-menu" style="display: block;">
                                    <ul>
                                        <!-- <li>
                                            <a href="#home">Home</a>
                                            <ul class="submenu">
                                                <li>
                                                    <a href="index.html">Home style 1</a>
                                                </li>
                                                <li>
                                                    <a href="index_2.html">Home style 2</a>
                                                </li>
                                                <li>
                                                    <a href="index_3.html">Home style 3</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#about">PAGES</a>
                                            <ul class="submenu">
                                                <li>
                                                    <a href="about_us.html">About Us</a>
                                                </li>
                                                <li>
                                                    <a href="advisors.html">Advisors</a>
                                                </li>
                                                <li>
                                                    <a href="advisors_details.html">Advisors Details</a>
                                                </li>
                                                <li>
                                                    <a href="faq.html">FAQ</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#about">ELEMENTS</a>
                                            <ul class="submenu">
                                                <li>
                                                    <a href="events_01.html">Events 01</a>
                                                </li>
                                                <li>
                                                    <a href="events_02.html">Events 02</a>
                                                </li>
                                                <li>
                                                    <a href="event_details.html">Events Details</a>
                                                </li>
                                                <li>
                                                    <a href="shop_pages.html">Shop</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="course_01.html">Courses</a>
                                            <ul class="submenu">
                                                <li>
                                                    <a href="course_01.html">Courses 01</a>
                                                </li>
                                                <li>
                                                    <a href="course_02.html">Courses 02</a>
                                                </li>
                                                <li>
                                                    <a href="course_03.html">Courses 03</a>
                                                </li>
                                                <li>
                                                    <a href="course_details.html">Course Details</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="events_01.html">NEWS</a>
                                            <ul class="submenu">
                                                <li>
                                                    <a href="grid_news.html">Blog 3 Column</a>
                                                </li>
                                                <li>
                                                    <a href="standard_blog.html">Blog Sidebar</a>
                                                </li>
                                                <li>
                                                    <a href="news_details.html">Blog Details</a>
                                                </li>
                                            </ul>
                                        </li> -->
                                        <li>
                                            <a href="/">BERANDA</a>
                                        </li>
                                        <li>
                                            <a href="/profil">PROFIL</a>
                                        </li>
                                        <li>
                                            <a href="/unit">UNIT GARAPAN</a>
                                        </li>
                                        <li>
                                            <a href="/berita">BERITA</a>
                                        </li>
                                        <li>
                                            <a href="/galeri">GALERI</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile-menu"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /end header-bottom -->
        </div>
    </header>
    @yield('content')
    <!-- footer start -->
    <footer id="Contact">
        <div class="footer-area primary-bg pt-150">
            <div class="container">
                <div class="footer-top pb-35">
                    <div class="row">
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="footer-widget mb-30">

                                <div class="footer-socila-icon">
                                    <span>Ikuti Kami</span>
                                    <div class="footer-social-icon-list">
                                        <ul>
                                            <li><a href="#"><span class="ti-facebook"></span></a></li>
                                            <li><a href="#"><span class="ti-google"></span></a></li>
                                            <li><a href="#"><span class="ti-instagram"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="footer-widget mb-30">
                                <div class="footer-heading">
                                    <h1>Link Cepat</h1>
                                </div>
                                <div class="footer-menu clearfix">
                                    <ul>
                                        <li><a href="/">Beranda</a></li>
                                        <li><a href="/profil">Profil</a></li>
                                        <li><a href="/unit">Unit Garapan</a></li>
                                        <li><a href="/berita">Berita</a></li>
                                        <li><a href="/galeri">Galeri</a></li>
                                        <li><a href="/login">Login</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-4  col-md-6">
                            <div class="footer-widget mb-30">
                                <div class="footer-heading">
                                    <h1>Hubungi Kami</h1>
                                </div>
                                <div class="footer-contact-list">
                                    <div class="single-footer-contact-info">
                                        <span class="ti-mobile"></span>
                                        <span class="footer-contact-list-text">08112347187</span>
                                    </div>
                                    <div class="single-footer-contact-info">
                                        <span class="ti-email "></span>
                                        <span class="footer-contact-list-text">nengratnaaari1810@gmail.com</span>
                                    </div>
                                    <div class="single-footer-contact-info">
                                        <span class="ti-location-pin"></span>
                                        <span class="footer-contact-list-text">Dusun Babakan Desa Pamulihan, RT 2, RW 8, Kode Pos 45365, Sumedang, Jawa Barat</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer end -->


    <!-- JS here -->
    <script src="{{ asset('template/js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <script src="{{ asset('template/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('template/js/popper.min.js') }}"></script>
    <script src="{{ asset('template/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('template/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('template/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('template/js/one-page-nav-min.js') }}"></script>
    <script src="{{ asset('template/js/slick.min.js') }}"></script>
    <script src="{{ asset('template/js/ajax-form.js') }}"></script>
    <script src="{{ asset('template/js/wow.min.js') }}"></script>
    <script src="{{ asset('template/js/jquery.meanmenu.min.js') }}"></script>
    <script src="{{ asset('template/js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('template/js/jquery.barfiller.js') }}"></script>
    <script src="{{ asset('template/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('template/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('template/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('template/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('template/js/plugins.js') }}"></script>
    <script src="{{ asset('template/js/main.js') }}"></script>
</body>


</html>