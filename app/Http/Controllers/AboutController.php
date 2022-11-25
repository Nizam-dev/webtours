<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sosial_media;

class AboutController extends Controller
{
    public function about()
    {
        $sosial_media = sosial_media::first();
        return view('pages.about',compact('sosial_media'));
    }

    public function contact()
    {
        $sosial_media = sosial_media::first();
        return view('pages.contact',compact('sosial_media'));
    }
    public function privacy_policy()
    {
        $sosial_media = sosial_media::first();
        return view('pages.privacy_policy',compact('sosial_media'));
    }
}

