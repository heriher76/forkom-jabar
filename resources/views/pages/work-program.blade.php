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
                    <a href="#" class="btn_1">Read More</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection