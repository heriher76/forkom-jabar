@extends('layouts.app')

@section('header')
	@include('partials._header-home')
@endsection

@section('banner')
<section class="banner_part">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-xl-6">
                <div class="banner_text">
                    <div class="banner_text_iner">
                        <!-- <h5>Every child yearns to learn</h5> -->
                        <h1>Persiapkan Yang Terbaik Untuk Anak</h1>
                        <p>“Mencintai anak tidaklah cukup, yang terpenting adalah
                            anak-anak menyadari bahwa mereka dicintai
                            orangtuanya.” – St. John Bosco
                        </p>
                        <!-- <a href="#" class="btn_1">Mulai </a> -->
                        <!-- <a href="#" class="btn_2">Get Started </a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('content')
<section class="advance_feature learning_part" style="padding-top: 50px; padding-bottom: 80px;">
    <div class="container">
        <div class="row align-items-sm-center align-items-xl-stretch">
            <div class="col-md-6 col-lg-6">
                <div class="learning_member_text">
                    <h5>Persiapan</h5>
                    <h2>Bagaimana Kita Merencanakan?</h2>
                    <div class="row" style="margin-top: -80px;">
                        <div class="col-sm-6 col-md-12 col-lg-6">
                            <div class="learning_member_text_iner">
                                <span class="ti-pencil-alt"></span>
                                <h4>Learn Anywhere</h4>
                                <p>There earth face earth behold she star so made void two given and also our</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-12 col-lg-6">
                            <div class="learning_member_text_iner">
                                <span class="ti-stamp"></span>
                                <h4>Expert Teacher</h4>
                                <p>There earth face earth behold she star so made void two given and also our</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-12 col-lg-6" style="margin-top: -40px;">
                            <div class="learning_member_text_iner">
                                <span class="ti-stamp"></span>
                                <h4>Expert Teacher</h4>
                                <p>There earth face earth behold she star so made void two given and also our</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="learning_img">
                    <img src="{{ url('front/img/advance_feature_img.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- learning part end-->
@endsection