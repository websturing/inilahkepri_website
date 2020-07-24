<?php

namespace App;

use App\mdKategori;
use App\mdsubkategori;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class mdBerita extends Model
{
    protected $table = "berita";
    protected $primaryKey = "id_berta";
    protected $appends = [
        'Folder',
        'seo',
        'LinkTo',
        'folderGambar',
        'beritaIsi',
        'isiNews'
    ];

    function getFolderAttribute()
    {
        $crypt = date("Ymd", strtotime($this->tgl_publish));
        return $crypt;
    }

    function getberitaIsiAttribute()
    {
        // $crypt = Str::substr($this->isi_berita, 0, 250);
        $crypt = str::limit(strip_tags($this->isi_berita), 200, '...');
        return $crypt;
    }
    function getisiNewsAttribute()
    {
        // $crypt = Str::substr($this->isi_berita, 0, 250);
        $crypt = str::limit(strip_tags($this->isi_berita), 150, '.');
        return $crypt;
    }

    function getfolderGambarAttribute()
    {
        $crypt = date("Ymd", strtotime($this->tgl_publish));
        return $crypt . '/' . $this->gambar;
    }

    function getLinkToAttribute()
    {
        $seo = str::slug($this->judul, "-");
        return "/berita/" . $this->id_berita . "/" . $seo;
    }

    function getseoAttribute()
    {
        $crypt = str::slug($this->judul, "-");
        return $crypt;
    }
    function kategori()
    {
        return $this->belongsTo(mdKategori::class, 'id_kategori');
    }
    function subkategori()
    {
        return $this->belongsTo(mdsubkategori::class, "id_subkategori");
    }
}
