<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sosial_media;

class MediaSosialController extends Controller
{
    public function index()
    {
        $sosial_media = sosial_media::first();
        return view('admin.mediasosial.index',compact('sosial_media'));
    }

    public function store(Request $request)
    {
        sosial_media::first()->update($request->all());
        return redirect()->back()->with('success',"Sosial media berhasil di perbarui");
    }
}
