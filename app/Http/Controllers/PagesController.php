<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Gallery;
use App\VisiMisi;

class PagesController extends Controller
{
    public function home()
    {
    	return view('pages.home');
    }
    public function profile()
    {
    	return view('pages.profile');
    }
    public function galleryPhoto()
    {
        $galleries = Gallery::where('type', 'image')->orderBy('updated_at', 'desc')->paginate(5);

    	return view('pages.gallery-photo', compact('galleries'));
    }
    public function galleryVideo()
    {
        $galleries = Gallery::where('type', 'video')->orderBy('updated_at', 'desc')->paginate(5);

        return view('pages.gallery-video', compact('galleries'));
    }
    public function news()
    {
        $news = News::orderBy('updated_at', 'desc')->where('publish_status', 1)->paginate(5);

        $oldNews = News::orderBy('updated_at', 'asc')->where('publish_status', 1)->limit(5)->get(); 

    	return view('pages.news', compact('news', 'oldNews'));
    }
    public function workProgram()
    {
    	return view('pages.work-program');
    }
    public function service()
    {
    	return view('pages.service');
    }
<<<<<<< HEAD
    public function visiMisi() 
    {
        $visiMisi = VisiMisi::first();

        return view('pages.profile.visi-misi', compact('visiMisi'));
    }
=======
>>>>>>> c33a5f0c0d90fcd4d918b8f21e54369aa7c424eb
}
