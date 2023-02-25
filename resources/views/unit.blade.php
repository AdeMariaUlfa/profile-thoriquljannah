@extends('layout')
@section('content')
<div class="slider-area">
        <div class="page-title">
            <div class="single-slider slider-height slider-height-breadcrumb d-flex align-items-center" style="background-image: url({{ asset('template/img/bg/b.png') }});">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider-content slider-content-breadcrumb text-center">
                                <h1 class="white-color f-700">Unit Garapan</h1>
                                <nav class="text-center" aria-label="breadcrumb">
                                    <ol class="breadcrumb justify-content-center">
                                        <li class="breadcrumb-item"><a href="/">Yayasan Thariqul Jannah</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Unit</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    <div class="adivisors-details-area pt-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 mb-30">
                    <div class="advisor-img mb-35">
                        <img src="{{ asset('template/img/courses/1.png') }}" alt="">
                    </div>
                </div>
                <div class="col-xl-7 col-lg-8">
                    <div class="adivisor-text-2 white-bg">
                        <div class="adivisor-text-heading d-flex mb-10">
                            <div class="adivisor-text-title adivisor-text-title-2">
                                <h4>1. Yayasan</h4>
                            </div>
                        </div>
                        <div class="adivisor-para adivisor-para-2">
                            <p>Yayasan Thariqul Jannah sendiri yang menaungi dan mengatur jalannya sekolah PAUD dan TPA anak-anak sehingga kegiatan dapat berjalan dengan lancar.</p>
                        </div>
                        <div id="skill-area" class="about-sklls-area mt-35 pr-40">
                            <div class="single-skills mb-35">
                                <div class="bar-content">
                                    <span class="skills-heading">Pengelolaan Sistem Yayasan</span>
                                </div>
                                <div id="bar1" class="barfiller">
                                    <span class="tip" style="left: 479.75px; transition: left 1s ease-in-out 0s;">100%</span>
                                    <span class="fill" data-percentage="100" style="background: rgb(253, 200, 0); width: 505.75px; transition: width 1s ease-in-out 0s;"></span>
                                </div>
                            </div>
                            <div class="single-skills mb-35">
                                <div class="bar-content">
                                    <span class="skills-heading">Pengadaan Kegiatan</span>
                                </div>
                                <div id="bar1" class="barfiller">
                                    <span class="tip" style="left: 479.75px; transition: left 1s ease-in-out 0s;">80%</span>
                                    <span class="fill" data-percentage="80" style="background: rgb(253, 200, 0); width: 505.75px; transition: width 1s ease-in-out 0s;"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="adivisors-details-area pt-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 mb-30">
                    <div class="advisor-img mb-35">
                        <img src="{{ asset('template/img/courses/2.png') }}" alt="">
                    </div>
                </div>
                <div class="col-xl-7 col-lg-8">
                    <div class="adivisor-text-2 white-bg">
                        <div class="adivisor-text-heading d-flex mb-10">
                            <div class="adivisor-text-title adivisor-text-title-2">
                                <h4>2. PAUD</h4>
                            </div>
                        </div>
                        <div class="adivisor-para adivisor-para-2">
                            <p>Pendidikan Anak Usia Dini (PAUD) adalah pembinaan anak sebagai bantuan perkembangan rohani dan jasmani agar anak siap memasuki pendidikan lebih lanjut.</p>
                        </div>
                        <div id="skill-area" class="about-sklls-area mt-35 pr-40">
                            <div class="single-skills mb-35">
                                <div class="bar-content">
                                    <span class="skills-heading">Pembelajaran Akademik</span>
                                </div>
                                <div id="bar1" class="barfiller">
                                    <span class="tip" style="left: 479.75px; transition: left 1s ease-in-out 0s;">80%</span>
                                    <span class="fill" data-percentage="80" style="background: rgb(253, 200, 0); width: 505.75px; transition: width 1s ease-in-out 0s;"></span>
                                </div>
                            </div>
                            <div class="single-skills mb-35">
                                <div class="bar-content">
                                    <span class="skills-heading">Pembelajaran Diniah</span>
                                </div>
                                <div id="bar1" class="barfiller">
                                    <span class="tip" style="left: 479.75px; transition: left 1s ease-in-out 0s;">20%</span>
                                    <span class="fill" data-percentage="20" style="background: rgb(253, 200, 0); width: 505.75px; transition: width 1s ease-in-out 0s;"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="adivisors-details-area pt-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 mb-30">
                    <div class="advisor-img mb-35">
                        <img src="{{ asset('template/img/courses/3.png') }}" alt="">
                    </div>
                </div>
                <div class="col-xl-7 col-lg-8">
                    <div class="adivisor-text-2 white-bg">
                        <div class="adivisor-text-heading d-flex mb-10">
                            <div class="adivisor-text-title adivisor-text-title-2">
                                <h4>3. TPA</h4>
                            </div>
                        </div>
                        <div class="adivisor-para adivisor-para-2">
                            <p>Taman Pendidikan Al-Qur'an (disingkat TPA atau TPQ) bertujuan untuk memberikan pengajaran membaca Al-Qur'an sejak usia dini.</p>
                        </div>
                        <div id="skill-area" class="about-sklls-area mt-35 pr-40">
                            <div class="single-skills mb-35">
                                <div class="bar-content">
                                    <span class="skills-heading">Pembelajaran Al-Quran</span>
                                </div>
                                <div id="bar1" class="barfiller">
                                    <span class="tip" style="left: 479.75px; transition: left 1s ease-in-out 0s;">100%</span>
                                    <span class="fill" data-percentage="100" style="background: rgb(253, 200, 0); width: 505.75px; transition: width 1s ease-in-out 0s;"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection