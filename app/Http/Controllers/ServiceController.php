<?php

namespace App\Http\Controllers;


use App\Models\Artist;
use App\Models\Page;

class ServiceController extends Controller
{

    public function contact()
    {
        $page = Page::where('URL','contact')->first();
        return view('services.contact',compact('page'));
    }

    public function about_us()
    {
        $page = Page::where('URL','about-us')->first();
        return view('services.about-us',compact('page'));
    }
    public function privacy_policy()
    {
        $page = Page::where('URL','privacy-policy')->first();
        return view('services.privacy-policy',compact('page'));
    }
    public function terms_and_conditions()
    {
        $page = Page::where('URL','terms-and-conditions')->first();
        return view('services.terms-and-conditions',compact('page'));
    }
}
