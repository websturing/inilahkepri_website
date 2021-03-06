<?php

namespace App\Http\Controllers;

use App\mdBerita;
use App\mdVideos;
use Illuminate\Http\Request;

class appcontrol extends Controller
{
    function index()
    {
        $imgUrl = "http://inilahkepri.id/resources/Artikel_Thumbnail";
        $iklanUrl = "http://inilahkepri.id/public/iklan";
        $headline = mdBerita::with(['kategori'])->orderBy("tgl_publish", "DESC")->where('headline', 'true')->limit(4)->get();
        $videos = mdVideos::where('kategori', 'inilahchannel')->orderBy('created_at', 'DESC')->limit(8)->get();
        $podcast = mdVideos::where('kategori', 'podcast')->orderBy('created_at', 'DESC')->limit(8)->get();
        $berita = mdBerita::orderBy("tgl_publish", "DESC")->orderBy("jam", "DESC")->limit(10)->get();
        $populer = mdBerita::orderBy("dibaca", "DESC")->limit(10)->get();
        $peristiwa = mdBerita::where('id_kategori', '17')->orderBy("tgl_publish", "DESC")->limit(10)->get();
        $serba = mdBerita::where('id_kategori', '9')->orderBy("tgl_publish", "DESC")->orderBy("jam", "DESC")->limit(10)->get();
        $gaya = mdBerita::where('id_kategori', '7')->orderBy("tgl_publish", "DESC")->orderBy("jam", "DESC")->limit(10)->get();
        return view('porto/index', compact('headline', 'imgUrl', 'videos', 'berita', 'populer', 'peristiwa', 'serba', 'gaya', 'iklanUrl', 'podcast'));
    }

    function detail(Request $r, $id)
    {
        $iklanUrl = "http://inilahkepri.id/public/iklan";
        $imgUrl = "http://inilahkepri.id/resources/Artikel_Thumbnail";
        $berita = mdBerita::where("id_berita", $id)->first();
        $related = mdBerita::orderBy("tgl_publish", "DESC")->limit(10)->get();
        return view('porto/berita/detail', compact('berita', 'imgUrl', 'related', 'iklanUrl'));
    }

    function videosDetail($id)
    {
        $iklanUrl = "http://inilahkepri.id/public/iklan";
        $imgUrl = "http://inilahkepri.id/resources/Artikel_Thumbnail";
        $berita = mdVideos::where("video_id", $id)->first();
        $related = mdVideos::orderBy("publishedAt", "DESC")->limit(10)->get();
        return view('porto/berita/videosDetail', compact('berita', 'imgUrl', 'related', 'iklanUrl'));
    }

    function inilahnews()
    {
        $imgUrl = "http://inilahkepri.id/resources/Artikel_Thumbnail";
        $berita = mdBerita::orderBy("tgl_publish", "DESC")->orderBy("jam", "DESC")->limit(300)->get();
        return view('porto/berita/inilahnews', compact('berita', 'imgUrl'));
    }

    function inilahchannel()
    {
        $iklanUrl = "http://inilahkepri.id/public/iklan";
        $imgUrl = "http://inilahkepri.id/resources/Artikel_Thumbnail";
        $related = mdVideos::orderBy("publishedAt", "DESC")->get();
        return view('porto/berita/inilahchannel', compact('berita', 'imgUrl', 'related', 'iklanUrl'));
    }
}
