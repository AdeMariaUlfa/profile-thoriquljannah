@extends('layout')
@section('content')
<br><br><br>
<div class="events-details-form faq-area-form white-bg mb-30 bg-light" style="margin-left:350px; margin-right: 350px;">
                        <form method="post" action="/aksiLogin">
                            @csrf
                            <div class="row">
                                <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1 col-md-10 offset-md-1 col-12">
                                    <div class="events-form-title text-center mb-30">
                                        <h2>Login Admin</h2>
                                        <p>silahkan isi email dan password untuk login! </p>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                <input placeholder="Email :" type="text" name="email">
                                </div>
                                <div class="col-xl-12">
                                <input placeholder="Password :" type="password" name="password">
                                </div>
                                <div class="col-xl-12">
                                    <div class="faq-form-btn events-form-btn text-center">
                                        <button class="btn">LOGIN</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <br><br><br>
@endsection