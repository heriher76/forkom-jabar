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
                        <h2>Berita</h2>
                        <p>Home<span>/</span>Berita</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('content')
<section class="blog_area" style="padding-top: 50px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="blog_left_sidebar">

                    @foreach($news as $berita)
                    <article class="blog_item">
                        <div class="blog_item_img">
                            <img class="card-img rounded-0" src="img/blog/single_blog_1.png" alt="">
                            <a href="#" class="blog_item_date">
                                <!-- <h3>15</h3> -->
                                <p>{{ $berita->updated_at->formatLocalized('%A %d %B %Y') }}</p>
                            </a>
                        </div>

                        <div class="blog_details">
                            <a class="d-inline-block" href="single-blog.html">
                                <h2>{{ $berita->title }}</h2>
                            </a>
                            <p>{!! str_limit(strip_tags($berita->description), $limit = 90, $end = '...') !!}</p>
                            <ul class="blog-info-link">
                                <li><a href="#"><i class="far fa-user"></i>{{ $berita->user->name }}</a></li>
                                <li><a href="#"><i class="far fa-comments"></i> 03 Comments</a></li>
                            </ul>
                        </div>
                    </article>
                    @endforeach

                    {{ $news->links() }}
                    
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog_right_sidebar">
                    <aside class="single_sidebar_widget search_widget">
                        <form action="#">
                           <div class="form-group">
                              <div class="input-group mb-3">
                                 <input type="text" class="form-control" placeholder='Search Keyword'
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Keyword'">
                                 <div class="input-group-append">
                                    <button class="btn" type="button"><i class="ti-search"></i></button>
                                 </div>
                              </div>
                           </div>
                           <button class="button rounded-0 primary-bg text-white w-100 btn_1" type="submit">Search</button>
                        </form>
                     </aside>
                    
                    <aside class="single_sidebar_widget popular_post_widget">
                        <h3 class="widget_title">Recent Post</h3>
                        <div class="media post_item">
                            <img src="img/post/post_1.png" alt="post">
                            <div class="media-body">
                                <a href="single-blog.html">
                                    <h3>From life was you fish...</h3>
                                </a>
                                <p>January 12, 2019</p>
                            </div>
                        </div>
                        <div class="media post_item">
                            <img src="img/post/post_2.png" alt="post">
                            <div class="media-body">
                                <a href="single-blog.html">
                                    <h3>The Amazing Hubble</h3>
                                </a>
                                <p>02 Hours ago</p>
                            </div>
                        </div>
                        <div class="media post_item">
                            <img src="img/post/post_3.png" alt="post">
                            <div class="media-body">
                                <a href="single-blog.html">
                                    <h3>Astronomy Or Astrology</h3>
                                </a>
                                <p>03 Hours ago</p>
                            </div>
                        </div>
                        <div class="media post_item">
                            <img src="img/post/post_4.png" alt="post">
                            <div class="media-body">
                                <a href="single-blog.html">
                                    <h3>Asteroids telescope</h3>
                                </a>
                                <p>01 Hours ago</p>
                            </div>
                        </div>
                    </aside>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection