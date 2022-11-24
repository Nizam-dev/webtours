<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;

class LandingPageController extends Controller
{
    protected $settings = [
        "nama_web"=>"Supir Bali",
    ];

    public function index()
    {
        $postingan = post::orderBy('id','DESC')->get();
        return view('pages.index',compact('postingan'));
    }

    public function show($judul,$id)
    {
        $post = post::find($id);
        $lainnya = post::oldest()
                    ->where('id','!=',$id)
                    ->limit(10)
                    ->get();
        return view('pages.details',compact('post','lainnya'));
    }
}
