@extends('layouts.app')

@section('header')
	@include('partials._header')
@endsection

@section('banner')
<section class="breadcrumb breadcrumb_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner text-center">
                    <div class="breadcrumb_iner_item">
                        <h2>Program Kerja</h2>
                        <p>Beranda<span>/</span>Program Kerja</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('content')
<!-- learning part start-->
<section class="learning_part" style="padding-bottom: 50px; padding-top: 50px;">
    <div class="container">
        <div class="row align-items-sm-center align-items-lg-stretch">
            <div class="col-md-7 col-lg-7">
                <div class="learning_img">
                    <img src="{{ url('front/img/learning_img.png') }}" alt="">
                </div>
            </div>
            <div class="col-md-5 col-lg-5">
                <div class="learning_member_text">
                    <h5>Program Kerja</h5>
                    <h2>Forum Komunikasi Puspa Jawa Barat</h2>
                    <ul>
                        <li><span class="ti-pencil-alt"></span>Him lights given i heaven second yielding seas
                            gathered wear</li>
                        <li><span class="ti-ruler-pencil"></span>Fly female them whales fly them day deep given
                            night.</li>
                        <li><span class="ti-ruler-pencil"></span>Fly female them whales fly them day deep given
                        night.</li>
                        <li><span class="ti-ruler-pencil"></span>Fly female them whales fly them day deep given
                        night.</li>
                        <li><span class="ti-ruler-pencil"></span>Fly female them whales fly them day deep given
                        night.</li>
                        <li><span class="ti-ruler-pencil"></span>Fly female them whales fly them day deep given
                            night.</li>
                        <li><span class="ti-ruler-pencil"></span>Fly female them whales fly them day deep given
                        night.</li>

                    </ul>
                    <!-- <a href="#" class="btn_1">Read More</a> -->
                </div>
            </div>
        </div>
    </div>
</section>
<!--::review_part start::-->
<section class="testimonial_part">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-xl-5">
                <div class="section_tittle text-center">
                    <p></p>
                    <h2>Mitra Kerja Sama Kami</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="textimonial_iner owl-carousel">
                    <div class="testimonial_slider">
                        <div class="row">
                            
                            <div class="col-lg-6 col-xl-4 col-sm-8 align-self-center">
                                <div class="testimonial_slider_text">
                                    <h4>Bank Indonesia</h4>
                                    <h5>20 November 1999</h5>
                                    <p style="font-family: 'Calibri';">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis, aut quos explicabo ipsum molestias ratione. Quod dignissimos doloremque et odio eius nemo, obcaecati laboriosam voluptate. Nostrum provident, necessitatibus quasi maxime.</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-4 col-sm-4">
                                <div class="testimonial_slider_img">
                                    <img src="{{ url('/mitra/gallery_item_71.png') }}" alt="#">
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="testimonial_slider">
                        <div class="row">
                            
                            <div class="col-lg-6 col-xl-4 col-sm-8 align-self-center">
                                <div class="testimonial_slider_text">
                                    <h4>Bank Muamalah</h4>
                                    <h5>20 November 1999</h5>
                                    <p style="font-family: 'Calibri';">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis, aut quos explicabo ipsum molestias ratione. Quod dignissimos doloremque et odio eius nemo, obcaecati laboriosam voluptate. Nostrum provident, necessitatibus quasi maxime.</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-4 col-sm-4">
                                <div class="testimonial_slider_img">
                                    <img src="{{ url('/mitra/Deposito-Syariah-Bank-Muamalat.png') }}" alt="#">
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="testimonial_slider">
                        <div class="row">
                            
                            <div class="col-lg-6 col-xl-4 col-sm-8 align-self-center">
                                <div class="testimonial_slider_text">
                                    <h4>Bank Indonesia</h4>
                                    <h5>20 November 1999</h5>
                                    <p style="font-family: 'Calibri';">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis, aut quos explicabo ipsum molestias ratione. Quod dignissimos doloremque et odio eius nemo, obcaecati laboriosam voluptate. Nostrum provident, necessitatibus quasi maxime.</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-4 col-sm-4">
                                <div class="testimonial_slider_img">
                                    <img src="{{ url('/mitra/jncpmca7gh5gu9cteq2t.png') }}" alt="#">
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