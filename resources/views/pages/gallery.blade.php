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
                        <h2>Galeri</h2>
                        <p>Beranda<span>/</span>Galeri</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('content')
<section class="special_cource" style="padding-top: 50px;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-5">
                <div class="section_tittle text-center">
                    <!-- <p>popular courses</p> -->
                    <h2>Kumpulan Dokumentasi</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($galleries as $gallery)
                @if($gallery->type == 'image')
                    <div class="col-sm-6 col-lg-4">
                        <div class="single_special_cource">
                            <img src="{{ url('galeri/'.$gallery->name) }}" class="special_img" alt="">
                            <div class="special_cource_text">
                                <a href="course-details.html">
                                    <h3>Web Development</h3>
                                </a>
                                <p>Which whose darkness saying were life unto fish wherein all fish of together called</p>
                                
                            </div>

                        </div>
                    </div>
                @else
                <iframe width="640" height="360" src="{{ url('https://www.youtube.com/embed/'.$gallery->name) }}" frameborder="0" allowfullscreen></iframe>
                @endif
            @endforeach
        </div>
    </div>
</section>
@endsection