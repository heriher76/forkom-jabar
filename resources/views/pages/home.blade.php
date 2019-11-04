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
                        <a href="#" class="btn_1">Mulai </a>
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

<!--::review_part start::-->
<section class="testimonial_part">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-xl-5">
                <div class="section_tittle text-center">
                    <p>testimonials</p>
                    <h2>Mitra Kerja Sama Kami</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="textimonial_iner owl-carousel">
                    <div class="testimonial_slider">
                        <div class="row">
                            <div class="col-lg-8 col-xl-4 col-sm-8 align-self-center">
                                <div class="testimonial_slider_text">
                                    <p>Behold place was a multiply creeping creature his domin to thiren open void
                                        hath herb divided divide creepeth living shall i call beginning
                                        third sea itself set</p>
                                    <h4>Michel Hashale</h4>
                                    <h5> Sr. Web designer</h5>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xl-2 col-sm-4">
                                <div class="testimonial_slider_img">
                                    <img src="{{ url('front/img/testimonial_img_1.png') }}" alt="#">
                                </div>
                            </div>
                            <div class="col-xl-4 d-none d-xl-block">
                                <div class="testimonial_slider_text">
                                    <p>Behold place was a multiply creeping creature his domin to thiren open void
                                        hath herb divided divide creepeth living shall i call beginning
                                        third sea itself set</p>
                                    <h4>Michel Hashale</h4>
                                    <h5> Sr. Web designer</h5>
                                </div>
                            </div>
                            <div class="col-xl-2 d-none d-xl-block">
                                <div class="testimonial_slider_img">
                                    <img src="{{ url('front/img/testimonial_img_1.png') }}" alt="#">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial_slider">
                        <div class="row">
                            <div class="col-lg-8 col-xl-4 col-sm-8 align-self-center">
                                <div class="testimonial_slider_text">
                                    <p>Behold place was a multiply creeping creature his domin to thiren open void
                                        hath herb divided divide creepeth living shall i call beginning
                                        third sea itself set</p>
                                    <h4>Michel Hashale</h4>
                                    <h5> Sr. Web designer</h5>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xl-2 col-sm-4">
                                <div class="testimonial_slider_img">
                                    <img src="{{ url('front/img/testimonial_img_2.png') }}" alt="#">
                                </div>
                            </div>
                            <div class="col-xl-4 d-none d-xl-block">
                                <div class="testimonial_slider_text">
                                    <p>Behold place was a multiply creeping creature his domin to thiren open void
                                        hath herb divided divide creepeth living shall i call beginning
                                        third sea itself set</p>
                                    <h4>Michel Hashale</h4>
                                    <h5> Sr. Web designer</h5>
                                </div>
                            </div>
                            <div class="col-xl-2 d-none d-xl-block">
                                <div class="testimonial_slider_img">
                                    <img src="{{ url('front/img/testimonial_img_1.png') }}" alt="#">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial_slider">
                        <div class="row">
                            <div class="col-lg-8 col-xl-4 col-sm-8 align-self-center">
                                <div class="testimonial_slider_text">
                                    <p>Behold place was a multiply creeping creature his domin to thiren open void
                                        hath herb divided divide creepeth living shall i call beginning
                                        third sea itself set</p>
                                    <h4>Michel Hashale</h4>
                                    <h5> Sr. Web designer</h5>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xl-2 col-sm-4">
                                <div class="testimonial_slider_img">
                                    <img src="{{ url('front/img/testimonial_img_3.png') }}" alt="#">
                                </div>
                            </div>
                            <div class="col-xl-4 d-none d-xl-block">
                                <div class="testimonial_slider_text">
                                    <p>Behold place was a multiply creeping creature his domin to thiren open void
                                        hath herb divided divide creepeth living shall i call beginning
                                        third sea itself set</p>
                                    <h4>Michel Hashale</h4>
                                    <h5> Sr. Web designer</h5>
                                </div>
                            </div>
                            <div class="col-xl-2 d-none d-xl-block">
                                <div class="testimonial_slider_img">
                                    <img src="{{ url('front/img/testimonial_img_1.png') }}" alt="#">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection