@extends('layout')
@section('content')
<div class="slider-area">
        <div class="page-title">
            <div class="single-slider slider-height slider-height-breadcrumb d-flex align-items-center" style="background-image: url({{ asset('template/img/bg/c.png') }});">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider-content slider-content-breadcrumb text-center">
                                <h1 class="white-color f-700">Kabar Terkini</h1>
                                <nav class="text-center" aria-label="breadcrumb">
                                    <ol class="breadcrumb justify-content-center">
                                        <li class="breadcrumb-item"><a href="/">Yayasan Thariqul Jannah</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Berita</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<div class="blog-grid-area gray-bg pt-100 pb-70">
        <div class="container">
            <div class="blog-grid-list">
                <div class="row">
                    @foreach($data as $berita)
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="blog-wrapper mb-30">
                            <div class="blog-thumb mb-25">
                                <a href="news_details.html"><img  src="{{asset('/uploads/'.$berita->img)}}" alt=""></a>
                                <span class="blog-category">news</span>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <span>{{ date('M d, Y', strtotime($berita->created_at)) }}</span>
                                </div>
                                <h5><a href="/detail/{{$berita->id}}">{{$berita->judul}}</a></h5>
                                <p>{{ substr($berita->konten, 0, 70) . '...' }}</p>
                                <div class="read-more-btn">
                                    <a href="/detail/{{$berita->id}}">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="row">
                    <div class="col-xl-12 text-center">
                        <div class="single-events-btn mt-15 mb-30">
                            <nav class="course-pagination mb-30" aria-label="Page navigation example">
                            {!! $data->links() !!}
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection