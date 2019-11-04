<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Gallery;

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
    public function gallery()
    {
        $galleries = Gallery::orderBy('updated_at', 'desc')->paginate(5);

    	return view('pages.gallery', compact('galleries'));
    }
    public function news()
    {
        $news = News::orderBy('updated_at', 'desc')->where('publish_status', 1)->paginate(5);

    	return view('pages.news', compact('news'));
    }
    public function workProgram()
    {
    	return view('pages.work-program');
    }
    public function service()
    {
    	return view('pages.service');
    }
}