<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class mdVideos extends Model
{
    protected $table = "videos";
    protected $primaryKey = "video_id";

    protected $appends = [
        'titleLower',
        'seo',
        'LinkTo',
        'folderGambar',
        'thumb'
    ];
    protected $casts = [
        'publishedAt' => 'datetime:d-m-Y',
    ];

    function gettitleLowerAttribute()
    {
        $lower = Str::ucfirst(str::lower($this->title));

        return $lower;
    }
    function getthumbAttribute()
    {
        if ($this->kategori == 'inilahchannel') {
            return "http://inilahkepri.id/resources/podcast/" . $this->thumbnails;
        } else {
            return "http://inilahkepri.id/resources/podcast/" . $this->thumbnails;
        }
    }
    function getseoAttribute()
    {
        $crypt = str::slug($this->title, "-");
        return $crypt;
    }
}
