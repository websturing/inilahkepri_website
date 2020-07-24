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
    ];

    function gettitleLowerAttribute()
    {
        $lower = Str::ucfirst(str::lower($this->title));

        return $lower;
    }
}
