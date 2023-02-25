@extends('layout')
@section('content')
<div class="slider-area">
        <div class="page-title">
            <div class="single-slider slider-height slider-height-breadcrumb d-flex align-items-center" style="background-image: url({{ asset('template/img/bg/d.png') }});">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider-content slider-content-breadcrumb text-center">
                                <h1 class="white-color f-700">Dokumentasi Kegiatan</h1>
                                <nav class="text-center" aria-label="breadcrumb">
                                    <ol class="breadcrumb justify-content-center">
                                        <li class="breadcrumb-item"><a href="/">Yayasan Thariqul Jannah</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Galeri</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
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
                            <h1 class="primary-color">Galeri Kegiatan Kita</h1>
                        </div>
                        <div class="section-title-para">
                            <p class="gray-color">Berbagai kegiatan dan keseharian oleh siswa/i dan guru/ustadz di dalam Yayasan Thariqul Jannah.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-list">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="team-wrapper mb-30">
                            <div class="team-thumb">
                                <img src="{{ asset('template/img/team/a.png') }}" alt="">
                            </div>
                            <div class="team-teacher-info text-center">
                                <h1>Kegiatan Belajar Al-Quran </h1>
                                <h2>agustus 2022</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="team-wrapper mb-30">
                            <div class="team-thumb">
                                <img src="{{ asset('template/img/team/b.png') }}" alt="">
                            </div>
                            <div class="team-teacher-info text-center">
                                <h1>Kajian Bersama</h1>
                                <h2>juni 2022</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="team-wrapper mb-30">
                            <div class="team-thumb">
                                <img src="{{ asset('template/img/team/c.png') }}" alt="">
                            </div>
                            <div class="team-teacher-info text-center">
                                <h1>Kunjungan Kepala Dinas</h1>
                                <h2>januari 2023</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="team-wrapper mb-30">
                            <div class="team-thumb">
                                <img src="{{ asset('template/img/team/d.png') }}" alt="">
                            </div>
                            <div class="team-teacher-info text-center">
                                <h1>Senam Minggu Bersama</h1>
                                <h2>februari 2023</h2>
                            </div>
                        </div>
                    </div>
                </div>
              <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="team-wrapper mb-30">
                            <div class="team-thumb">
                                <img src="{{ asset('template/img/team/e.png') }}" alt="">
                            </div>
                            <div class="team-teacher-info text-center">
                                <h1>Buka Bersama Bulan Ramadhan</h1>
                                <h2>Ramadhan 2021</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="team-wrapper mb-30">
                            <div class="team-thumb">
                                <img src="{{ asset('template/img/team/f.png') }}" alt="">
                            </div>
                            <div class="team-teacher-info text-center">
                                <h1>Liburan Bersama</h1>
                                <h2>november 2019</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="team-wrapper mb-30">
                            <div class="team-thumb">
                                <img src="{{ asset('template/img/team/g.png') }}" alt="">
                            </div>
                            <div class="team-teacher-info text-center">
                                <h1>Ujian Al-Quran</h1>
                                <h2>agustus 2021</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="team-wrapper mb-30">
                            <div class="team-thumb">
                                <img src="{{ asset('template/img/team/h.png') }}" alt="">
                            </div>
                            <div class="team-teacher-info text-center">
                                <h1>Bakti Sosial</h1>
                                <h2>maret 2022</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection