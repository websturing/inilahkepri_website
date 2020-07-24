@extends('porto.index')
@section('navbar_class','navbar-dark')
@section('meta')
<meta property="og:url" content="{{url('/videos')}}/{{$berita->video_id}}/{{$berita->seo}}" />
<meta property="og:type" content="article" />
<meta property="og:title" content="{{$berita->title}}" />
<meta property="og:description" content="{{$berita->description}}" />
<meta property="og:image" content="{{$berita->thumb}}" />
<meta property="og:image:width" content="620" />
<meta property="og:image:height" content="541" />
@endsection
@section('content')
<?php
    $bulan = date('M', strtotime($berita->tgl_publish));
    $hari = date('d', strtotime($berita->tgl_publish));

    $string     = $berita->url;
    $search     = '/youtube\.com\/watch\?v=([a-zA-Z0-9]+)/smi';
    $replace    = "youtube.com/embed/$1";    
    $url = preg_replace($search,$replace,$string);
?>
<div role="main" class="main">


    <div class="slider-with-overlay">

        <div class="slider-container rev_slider_wrapper" style="height: 650px;">
            <div class="container mt-2">
                <div class="row">
                    <div class="col">
                        <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="500">
                            <div class="img-thumbnail border-0 p-0 d-block">
                                <!-- <img class="img-fluid border-radius-0" src="img/projects/project-portfolio-2-3.jpg" alt=""> -->
                                <div class="embed-container"></div>
                                <iframe src="{{$url}}" frameborder='0' allowfullscreen width="100%"
                                    height="590px"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row align-items-center pt-10 mt-5">
                <div class="col-lg-8 text-center text-lg-left">
                    <h2 class="font-weight-bold text-5 line-height-2 appear-animation"
                        data-appear-animation="fadeInRightShorter" data-appear-animation-delay="500"><span
                            class="text-5">{{$berita->title}}</span></h2>
                    <hr>
                    <p>{{$berita->publishedAt}}</p>
                    <p>{{$berita->description }}</p>
                </div>
            </div>
            <hr />
            <div class="row">

                @foreach($related->slice(0,9) as $index => $b)
                <div class="col-lg-4">
                    <a href="{{url('/videos')}}/{{$b->video_id}}/{{$b->seo}}">
                        <img src="{{$b->thumb}}" class="img-fluid rounded mb-2"
                            style="height: 200px; width: 100%; object-fit: cover;" alt="{{$b->title}}">
                        <h5 class="text-color-dark font-weight-bold line-height-3 text-3 mb-1 pb-1"
                            style="min-height: 55px;">
                            <strong class="font-weight-bold">{{$b->title}}</strong></h5>
                        <p class="text-1 line-height-4"><em>{{$b->isiNews}}</em></p>
                    </a>
                </div>

                @endforeach
            </div>
        </div>
    </div>
</div>

</div>
@endsection
