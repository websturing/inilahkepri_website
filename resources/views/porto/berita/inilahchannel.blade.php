@extends('porto.index')
@section('navbar_class','navbar-dark')

@section('content')
<div role="main" class="main">

    <section class="page-header page-header-modern bg-color-light-scale-1 page-header-md">
        <div class="container">
            <div class="row">

                <div class="col-md-12 align-self-center p-static order-2 text-center">

                    <h1 class="text-dark font-weight-bold text-8">INILAH CHANNEL</h1>
                </div>

                <div class="col-md-12 align-self-center order-1">

                    <ul class="breadcrumb d-block text-center">
                        <li><a href="{{url('/')}}">Beranda</a></li>
                        <li class="{{url('/inilahchannel')}}">INILAH CHANNEL</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section>

        <div id="videoBox" class="box out" style="color:white">
            <span class="font-weight-bold closeMini">X</span>
            <iframe width="100%" class="height" src="https://www.youtube.com/embed/nn2Z_YQImBg" frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        </div>
    </section>
    <section class="section border-0 m-0">
        <div class="container container-lg">

            <div class="row">

                @foreach($related->slice(0,9) as $index => $b)
                <div class="col-lg-3">
                    <a href="{{url('/videos')}}/{{$b->video_id}}/{{$b->seo}}">
                        <img src="{{$b->thumb}}" class="img-fluid rounded mb-2"
                            style="height: 200px; width: 100%; object-fit: cover;" alt="{{$b->title}}">
                        <h5 class="text-color-dark font-weight-bold line-height-3 text-3 mb-1 pb-1"
                            style="min-height: 55px;">
                            <strong class="font-weight-bold">{{$b->title}}</strong></h5>
                        <p class="text-1 line-height-4">{{$b->publishedAt}}</p>
                        <p class="text-1 line-height-4"><em>{{$b->isiNews}}</em></p>
                    </a>
                </div>

                @endforeach
            </div>
        </div>
    </section>

</div>
@endsection
