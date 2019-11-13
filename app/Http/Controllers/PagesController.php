<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Gallery;
use App\VisiMisi;
use App\Service;
use App\Cooperation;
use App\WorkProgram;

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
        $cooperations = Cooperation::all();
        $workPrograms = WorkProgram::all();

    	return view('pages.work-program', compact('cooperations', 'workPrograms'));
    }
    public function service()
    {
        $services = Service::all();

    	return view('pages.service', compact('services'));
    }
    public function visiMisi() 
    {
        $visiMisi = VisiMisi::first();

        return view('pages.profile.visi-misi', compact('visiMisi'));
    }
    public function structureOrganization($value='')
    {
        return view('pages.profile.structure-organization');
    }
}
