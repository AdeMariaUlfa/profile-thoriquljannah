@extends('layout')
@section('content')
<div id="about" class="about-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-4">
                <img id="previewImg2" src="{{asset('/uploads/'.$data->img)}}" alt="Placeholder" style="height: 500px; width: 100%;">
            </div>
            <div class="col-8">
                <h4> {{$data->judul}}</h4>
            </div>
            <div class="col-8">
                <h6>{{ date('D, d M Y', strtotime($data->created_at)) }}</h6>
            </div>
            <div class="col-8">
                <p>
                    {{$data->konten}}
                </p>
            </div>
        </div>
    </div>
</div>
@endsection