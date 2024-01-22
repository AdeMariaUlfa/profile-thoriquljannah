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
    <!-- header-end -->
    <!-- slider-start -->
    <div class="slider-area pos-relative">
        <div class="slider-active">
            <div class="single-slider slider-height d-flex align-items-center justify-content-center" style="background-image: url({{ asset('template/img/d.jpg') }});">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-9 col-md-12">
                            <div class="slider-content slider-content-2">
                                <h1 class="white-color f-700" data-animation="fadeInUp" data-delay=".2s"><span>YAYASAN THARIQUL JANNAH</h1>
                                <p data-animation="fadeInUp" data-delay=".4s">generasi yang berfikir & berperilaku qur'ani <br>ahlul qur'an</p>
                                <!-- <button class="theme-btn" data-animation="fadeInUp" data-delay=".6s"><span class="btn-text">admit now</span></button> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider slider-height d-flex align-items-center justify-content-center" style="background-image: url({{ asset('template/img/a.jpg') }});">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-md-12 offset-xl-2">
                            <div class="slider-content slider-content-2 text-center">
                                <h1 class="white-color f-700" data-animation="fadeInUp" data-delay=".2s"><span>BERADAB & BERAKHLAQ</h1>
                                <p data-animation="fadeInUp" data-delay=".4s">mental-spiritual, bekal utama di era digial</p>
                                <!-- <button class="theme-btn" data-animation="fadeInUp" data-delay=".6s"><span class="btn-text">admit now</span></button> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider slider-height d-flex align-items-center justify-content-center" style="background-image: url({{ asset('template/img/c.jpg') }});">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-9 col-md-12">
                            <div class="slider-content slider-content-2">
                                <h1 class="white-color f-700" data-animation="fadeInUp" data-delay=".2s"><span>PINTAR & INOVATIF</h1>
                                <p data-animation="fadeInUp" data-delay=".4s">aktif dalam pergaulan masyarakat sekitar</p>
                                <!-- <button class="theme-btn" data-animation="fadeInUp" data-delay=".6s"><span class="btn-text">admit now</span></button> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider-end -->
    <!-- about start -->
    <div id="about" class="about-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-7">
                    <div class="about-title-section mb-30">
                        <h1>Selamat Datang di Thariqul Jannah</h1>
                        <p>Yayasan “Thariqul Jannah" didirikan pada 02 Januari 2018 dalam menyediakan fasilitas tempat tinggal dan pendidikan bagi anak yatim piatu dan dhuafa (fakir miskin dan anak-anak terlantar) yang berada di wilayah Kota Sumedang. Menampung, mengasuh dan membimbing serta menyantuni mereka baik didalam maupun diluar panti.</p>
                        <p>Dan untuk dididik menjadi Pribadi Muslim yang beriman dan bertaqwa, cerdas, terampil, dan berbudi pekerti luhur (berakhlaqul karimah).</p>
                        <button class="theme-btn blue-bg-border mt-20"><span class="btn-text"><a href="/profil">Lihat Selengkapnya</a></span></button>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5">
                    <div class="about-right-img mb-30">
                        <img src="{{ asset('template/img/berdiri.png') }}" alt="">
                    </div>
                </div>
            </div>
            <!-- <div class="row pt-65">
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="feature-wrapper mb-30">
                        <div class="feature-title-heading">
                            <h3>Scholarship Facility</h3>
                            <span>01</span>
                        </div>
                        <div class="feature-text">
                            <p>Sorem ipsum dolor sitcon sectet adipis icing elit sed do eiusmod tems. incididune.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="feature-wrapper mb-30">
                        <div class="feature-title-heading">
                            <h3>Advance Advisor</h3>
                            <span>02</span>
                        </div>
                        <div class="feature-text">
                            <p>Sorem ipsum dolor sitcon sectet adipis icing elit sed do eiusmod tems. incididune.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="feature-wrapper mb-30">
                        <div class="feature-title-heading">
                            <h3>Sports & Gaming</h3>
                            <span>03</span>
                        </div>
                        <div class="feature-text">
                            <p>Sorem ipsum dolor sitcon sectet adipis icing elit sed do eiusmod tems. incididune.</p>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
    <!-- about end -->
    <!-- courses start -->
    <div id="courses" class="courses-area courses-bg-height pt-100 pb-70" style="background-image: url({{ asset('template/img/courses/courses_bg.png') }});">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                    <div class="section-title mb-50 text-center">
                        <div class="section-title-heading mb-20">
                            <h1 class="white-color">Unit Garapan</h1>
                        </div>
                        <div class="section-title-para">
                            <p class="white-color">Berikut merupakan beberapa unit garapan dari Yayasan Thariqul Jannah.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="courses-list">
                <div class="row courses-active">
                    <div class="col-xl-12">
                        <div class="courses-wrapper course-radius-none mb-30">
                            <div class="courses-thumb">
                                <a><img src="{{ asset('template/img/courses/1.png') }}" alt=""></a>
                            </div>
                            <div class="course-main-content clearfix">
                                <div class="courses-content">
                                    <div class="courses-category-name">
                                        <span>
                                            <a>1</a>
                                        </span>
                                    </div>
                                    <div class="courses-heading">
                                        <h1><a href="course_details.html">Yayasan</a></h1>
                                    </div>
                                    <div class="courses-para">
                                        <p>Yayasan Thariqul Jannah sendiri yang menaungi dan mengatur jalannya sekolah PAUD dan TPA anak-anak sehingga kegiatan dapat berjalan dengan lancar.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="courses-wrapper-bottom clearfix">
                                <div class="courses-button f-right">
                                    <a href="/unit">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="courses-wrapper course-radius-none mb-30">
                            <div class="courses-thumb">
                                <a><img src="{{ asset('template/img/courses/2.png') }}" alt=""></a>
                            </div>
                            <div class="course-main-content clearfix">
                                <div class="courses-content">
                                    <div class="courses-category-name">
                                        <span>
                                            <a>2</a>
                                        </span>
                                    </div>
                                    <div class="courses-heading">
                                        <h1><a href="course_details.html">PAUD</a></h1>
                                    </div>
                                    <div class="courses-para">
                                        <p>Pendidikan Anak Usia Dini (PAUD) adalah pembinaan anak sebagai bantuan perkembangan rohani dan jasmani agar anak siap memasuki pendidikan lebih lanjut.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="courses-wrapper-bottom clearfix">
                                <div class="courses-button f-right">
                                    <a href="/unit">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="courses-wrapper course-radius-none mb-30">
                            <div class="courses-thumb">
                                <a><img src="{{ asset('template/img/courses/3.png') }}" alt=""></a>
                            </div>
                            <div class="course-main-content clearfix">
                                <div class="courses-content">
                                    <div class="courses-category-name">
                                        <span>
                                            <a>3</a>
                                        </span>
                                    </div>
                                    <div class="courses-heading">
                                        <h1><a href="course_details.html">TPA</a></h1>
                                    </div>
                                    <div class="courses-para">
                                        <p>Taman Pendidikan Al-Qur'an (disingkat TPA atau TPQ) bertujuan untuk memberikan pengajaran membaca Al-Qur'an sejak usia dini.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="courses-wrapper-bottom clearfix">
                                <div class="courses-button f-right">
                                    <a href="/unit">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="counter-area">
        <div class="container pt-90 pb-65">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-3">
                    <div class="couter-wrapper mb-30 text-center">
                        <img src="https://thoriquljannah.000webhostapp.com/template/img/counter/counter_icon1.png" alt="">
                        <span class="counter">90</span>
                        <h3>Jumlah Santri</h3>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3">
                    <div class="couter-wrapper mb-30 text-center">
                        <img src="https://thoriquljannah.000webhostapp.com/template/img/counter/counter_icon2.png" alt="">
                        <span class="counter">3</span>
                        <h3>Unit Garapan</h3>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3">
                    <div class="couter-wrapper mb-30 text-center">
                        <img src="https://thoriquljannah.000webhostapp.com/template/img/counter/counter_icon4.png" alt="">
                        <span class="counter">7</span>
                        <h3>Guru / Ustadz</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- counter end -->
    <!-- latest_news start -->
    <div id="blog" class="latest_news-area gray-bg pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-md-8 offset-md-2">
                    <div class="section-title mb-50 text-center">
                        <div class="section-title-heading mb-20">
                            <h1 class="primary-color">Berita Terbaru</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($data as $b)
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="blog-wrapper mb-30">
                        <div class="blog-thumb mb-25">
                            <a href="news_details.html"><img src="{{ asset('uploads/'.$b->img) }}" alt=""></a>
                            <span class="blog-category">news</span>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <span>{{ date('M d, Y', strtotime($b->created_at)) }}</span>
                            </div>
                            <h5><a href="/detail/{{$b->id}}">{{$b->judul}}</a></h5>
                            <p>{{ substr($b->konten, 0, 70) . '...' }}</p>
                            <div class="read-more-btn">
                                <a href="/detail/{{$b->id}}">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>

    <!-- footer start -->
    <footer id="Contact">
        <div class="footer-area primary-bg pt-150">
            <div class="container">
                <div class="footer-top pb-35">
                    <div class="row">
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="footer-widget mb-30">

                                <div class="footer-socila-icon">
                                    <span>Follow Us</span>
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
                                    <h1>Quick Links</h1>
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
                                    <h1>Contact Us</h1>
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


    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/assets/css/chat.min.css">
    <script>
        var botmanWidget = {
            chatServer: "/botman",
            title: 'Chat Bot Thoriqul Jannah',
            headerTextColor: '#fff',
            aboutText: 'ssdsd',
            introMessage: "Selamat Datang Di Thoriqul Jannah ada yang mau ditanyakan",
            bubbleBackground: "#408591",

        };
    </script>

    <script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>
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