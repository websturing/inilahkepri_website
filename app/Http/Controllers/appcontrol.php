<?php

namespace App\Http\Controllers;

use App\mdBerita;
use App\mdVideos;
use Illuminate\Http\Request;

class appcontrol extends Controller
{
    function index()
    {
        $imgUrl = "http://localhost/Resources";
        $headline = mdBerita::with(['kategori'])->orderBy("tgl_publish", "DESC")->where('headline', 'true')->limit(4)->get();
        $videos = mdVideos::orderBy('created_at', 'DESC')->limit(8)->get();
        $berita = mdBerita::orderBy("tgl_publish", "DESC")->limit(10)->get();
        $populer = mdBerita::orderBy("dibaca", "DESC")->limit(10)->get();
        $peristiwa = mdBerita::where('id_kategori', '17')->orderBy("tgl_publish", "DESC")->limit(10)->get();
        $serba = mdBerita::where('id_kategori', '9')->orderBy("tgl_publish", "DESC")->limit(10)->get();
        $gaya = mdBerita::where('id_kategori', '7')->orderBy("tgl_publish", "DESC")->limit(10)->get();
        return view('porto/index', compact('headline', 'imgUrl', 'videos', 'berita', 'populer', 'peristiwa', 'serba', 'gaya'));
    }

    function detail(Request $r, $id)
    {
        $imgUrl = "http://localhost/Resources";
        $berita = mdBerita::where("id_berita", $id)->first();
        $related = mdBerita::orderBy("tgl_publish", "DESC")->limit(10)->get();
        return view('porto/berita/detail', compact('berita', 'imgUrl', 'related'));
    }
}
