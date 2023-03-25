@extends('layout')
@section('content')
<div class="slider-area">
        <div class="page-title">
            <div class="single-slider slider-height slider-height-breadcrumb d-flex align-items-center" style="background-image: url({{ asset('template/img/bg/a.png') }});">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider-content slider-content-breadcrumb text-center">
                                <h1 class="white-color f-700">Tentang Kami</h1>
                                <nav class="text-center" aria-label="breadcrumb">
                                    <ol class="breadcrumb justify-content-center">
                                        <li class="breadcrumb-item"><a href="/">Yayasan Thariqul Jannah</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Profil</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="about" class="about-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-7">
                    <div class="about-img mb-55">
                        <img src="{{ asset('template/img/about/a.png') }}" alt="">
                    </div>
                    <div class="about-title-section about-title-section-2 mb-30">
                        <h1>Apa Itu Yayasan Thariqul Jannah?</h1>
                        <p>Yayasan Lembaga Pendidikan Keagamaan Quran “Thariqul Jannah", didirikan pada 02 Januari 2018,<br> oleh : Ustadz Adang Rukmana, <br>lokasi : Dusun Babakan Desa Pamulihan, RT 2, RW 8, Kec. Pamulihan, Sumedang, Jawa Barat. <br>
                        Yayasan ini didirikan bertujuan untuk memfasilitasi tempat tinggal dan pendidikan kepada anak-anak yang membutuhkan, sebagaimana diharapkan anak-anak dapat mendapatkan kehidupan yang layak dan ilmu yang berkah untuk bekal selanjutnya.</p>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5">
                    <div class="about-img mb-55">
                        <img src="{{ asset('template/img/about/b.png') }}" alt="">
                    </div>
                    <div class="about-title-section about-title-section-2 mb-30">
                        <h1>Visi Misi Kita</h1>
                        <p>Untuk mencetak generasi islami yang Rahmatan Lil'alamiin, mendidik generasi untuk dapat mengenal Tuhan-Nya, mendidik generasi agar terbiasa melaksanakan kewajiban-Nya sesuai syariat, menyiapkan kader-kader islami sejak remaja, dan membiasakan generasi agar dapat memiliki adab berakhlakul karimah.</p>
                    </div>
                </div>
            </div>
            <!-- <div class="row mt-60">
                <div class="col-xl-12">
                    <div class="university-banner mb-30">
                        <img src="{{ asset('template/img/about/university.jpg') }}" alt="">
                    </div>
                </div>
            </div> -->
        </div>
    </div>
    <div class="counter-area primary-bg">
        <div class="container pt-90 pb-65">
            <div class="row">
               
                <div class="col-xl-3 col-lg-3 col-md-3">
                    <div class="couter-wrapper couter-wrapper-2 mb-30 text-center">
                        <img src="{{ asset('template/img/counter/counter_icon1.png') }}" alt="">
                        <span class="counter">90</span>
                        <h3>Jumlah Santri</h3>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3">
                    <div class="couter-wrapper couter-wrapper-2 mb-30 text-center">
                        <img src="{{ asset('template/img/counter/counter_icon2.png') }}" alt="">
                        <span class="counter">3</span>
                        <h3>Unit Garapan</h3>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3">
                    <div class="couter-wrapper couter-wrapper-2 mb-30 text-center">
                        <img src="{{ asset('template/img/counter/counter_icon4.png') }}" alt="">
                        <span class="counter">7</span>
                        <h3>Guru / Ustadz</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="team-area pt-95 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                    <div class="section-title mb-50 text-center">
                        <div class="section-title-heading mb-20">
                            <h1 class="primary-color">Guru & Ustadz Kita</h1>
                        </div>
                        <div class="section-title-para">
                            <p class="gray-color">Belis nisl adipiscing sapien sed malesu diame lacus eget erat Cras mollis scelerisqu Nullam arcu liquam here was consequat.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-list">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="team-wrapper mb-30">
                            <div class="team-thumb">
                                <img src="{{ asset('template/img/team/2.jpg') }}" alt="">
                            </div>
                            <div class="team-teacher-info text-center">
                                <h1>TINA ELIAWATI</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="team-wrapper mb-30">
                            <div class="team-thumb">
                                <img src="{{ asset('template/img/team/2.jpg') }}" alt="">
                            </div>
                            <div class="team-teacher-info text-center">
                                <h1>WAWAT SETIAWATI</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="team-wrapper mb-30">
                            <div class="team-thumb">
                                <img src="{{ asset('template/img/team/2.jpg') }}" alt="">
                            </div>
                            <div class="team-teacher-info text-center">
                                <h1>AI SADIAH</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="team-wrapper mb-30">
                            <div class="team-thumb">
                                <img src="{{ asset('template/img/team/2.jpg') }}" alt="">
                            </div>
                            <div class="team-teacher-info text-center">
                                <h1>NENG RATNASARI</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="team-wrapper mb-30">
                            <div class="team-thumb">
                                <img src="{{ asset('template/img/team/2.jpg') }}" alt="">
                            </div>
                            <div class="team-teacher-info text-center">
                                <h1>LASMI WARTINI </h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="team-wrapper mb-30">
                            <div class="team-thumb">
                                <img src="{{ asset('template/img/team/2.jpg') }}" alt="">
                            </div>
                            <div class="team-teacher-info text-center">
                                <h1>RINI NURAIN</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="team-wrapper mb-30">
                            <div class="team-thumb">
                                <img src="{{ asset('template/img/team/1.png') }}" alt="">
                            </div>
                            <div class="team-teacher-info text-center">
                                <h1>DIDIN SARIPUDIN</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection