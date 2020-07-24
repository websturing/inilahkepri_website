@extends('porto.index')
@section('navbar_class','navbar-dark')
@section('meta')
<meta property="og:url" content="{{url('/berita')}}/{{$berita->id_berita}}/{{$berita->seo}}" />
<meta property="og:type" content="article" />
<meta property="og:title" content="{{$berita->judul}}" />
<meta property="og:description" content="{{$berita->beritaIsi}}" />
<meta property="og:image" content="{{$imgUrl}}/{{$berita->folderGambar}}" />
<meta property="og:image:width" content="620" />
<meta property="og:image:height" content="541" />
@endsection
@section('content')
<?php
    $bulan = date('M', strtotime($berita->tgl_publish));
    $hari = date('d', strtotime($berita->tgl_publish));
?>
<div role="main" class="main">

    <section class="page-header page-header-modern bg-color-light-scale-1 page-header-md">
        <div class="container">
            <div class="row">

                <div class="col-md-12 align-self-center p-static order-2 text-center">

                    <h1 class="text-dark font-weight-bold text-8">{{$berita->judul}}</h1>
                    <span class="sub-title text-dark">{{$berita->kategori->nama_kategori}}</span>
                </div>

                <div class="col-md-12 align-self-center order-1">

                    <ul class="breadcrumb d-block text-center">
                        <li><a href="{{url('/')}}">Beranda</a></li>
                        <li class="{{url('/berita/data')}}">Berita</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container py-4">

        <div class="row">
            <div class="col-lg-9">
                <div class="blog-posts single-post">

                    <article class="post post-large blog-single-post border-0 m-0 p-0">
                        <div class="post-image ml-0">
                            <a href="blog-post.html">
                                <img src="{{$imgUrl}}/{{$berita->folderGambar}}"
                                    class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
                            </a>
                        </div>

                        <h6 class="text-1"><em>{{$berita->ket_gambar}}</em></h6>

                        <div class="post-date ml-0">
                            <span class="day">{{$hari}}</span>
                            <span class="month">{{$bulan}}</span>
                        </div>
                        <div class="post-content ml-0">


                            {!! $berita->isi_berita !!}


                            <div class="post-block mt-5 post-share">
                                <h4 class="mb-3">Share this Post</h4>

                                <!-- AddThis Button BEGIN -->
                                <div class="addthis_toolbox addthis_default_style ">
                                    <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
                                    <a class="addthis_button_tweet"></a>
                                    <a class="addthis_button_pinterest_pinit"></a>
                                    <a class="addthis_counter addthis_pill_style"></a>
                                </div>
                                <script type="text/javascript"
                                    src="//s7.addthis.com/js/300/addthis_widget.js#pubid=xa-50faf75173aadc53"></script>
                                <!-- AddThis Button END -->

                            </div>


                        </div>
                    </article>

                </div>

                <div class="row">
                    <div class="col-md-12">
                        <h5 class="text-color-primary font-weight-normal line-height-2 text-4">
                            <strong class="font-weight-extra-bold">BERITA TERKAIT</strong></h5>
                    </div>
                    @foreach($related->slice(0,8) as $index => $b)
                    <div class="col-lg-6 col-md-auto">
                        <a href="{{url('/berita/')}}/{{$b->id_berita}}/{{$b->seo}}">
                            <img src="{{$imgUrl}}/{{$b->folderGambar}}" class="img-fluid rounded mb-2"
                                style="height: 200px; width: 100%; object-fit: cover;" alt="{{$b->judul}}">
                            <h5 class="text-color-dark font-weight-bold line-height-3 text-3 mb-1 pb-1"
                                style="min-height: 55px;">
                                <strong class="font-weight-bold">{{$b->judul}}</strong></h5>
                            <p class="text-1 line-height-4"><em>{{$b->isiNews}}</em></p>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="col-lg-3">
                <aside class="sidebar" data-plugin-sticky
                    data-plugin-options="{'minWidth': 991, 'containerSelector': '.container', 'padding': {'top': 110}}">
                    <form action="page-search-results.html" method="get">
                        <div class="input-group mb-3 pb-1">
                            <input class="form-control text-1" placeholder="Search..." name="s" id="s" type="text">
                            <span class="input-group-append">
                                <button type="submit" class="btn btn-dark text-1 p-2"><i
                                        class="fas fa-search m-2"></i></button>
                            </span>
                        </div>
                    </form>
                    <h5 class="font-weight-bold pt-4">Categories</h5>
                    <ul class="nav nav-list flex-column mb-5">
                        <li class="nav-item"><a class="nav-link" href="#">Design (2)</a></li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Photos (4)</a>
                            <ul>
                                <li class="nav-item"><a class="nav-link" href="#">Animals</a></li>
                                <li class="nav-item"><a class="nav-link active" href="#">Business</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Sports</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">People</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#">Videos (3)</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Lifestyle (2)</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Technology (1)</a></li>
                    </ul>
                    <div class="tabs tabs-dark mb-4 pb-2">
                        <ul class="nav nav-tabs">
                            <li class="nav-item active"><a
                                    class="nav-link show active text-1 font-weight-bold text-uppercase"
                                    href="#popularPosts" data-toggle="tab">Popular</a></li>
                            <li class="nav-item"><a class="nav-link text-1 font-weight-bold text-uppercase"
                                    href="#recentPosts" data-toggle="tab">Recent</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="popularPosts">
                                <ul class="simple-post-list">
                                    <li>
                                        <div class="post-image">
                                            <div class="img-thumbnail img-thumbnail-no-borders d-block">
                                                <a href="blog-post.html">
                                                    <img src="img/blog/square/blog-11.jpg" width="50" height="50"
                                                        alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="post-info">
                                            <a href="blog-post.html">Nullam Vitae Nibh Un Odiosters</a>
                                            <div class="post-meta">
                                                Nov 10, 2018
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="post-image">
                                            <div class="img-thumbnail img-thumbnail-no-borders d-block">
                                                <a href="blog-post.html">
                                                    <img src="img/blog/square/blog-24.jpg" width="50" height="50"
                                                        alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="post-info">
                                            <a href="blog-post.html">Vitae Nibh Un Odiosters</a>
                                            <div class="post-meta">
                                                Nov 10, 2018
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="post-image">
                                            <div class="img-thumbnail img-thumbnail-no-borders d-block">
                                                <a href="blog-post.html">
                                                    <img src="img/blog/square/blog-42.jpg" width="50" height="50"
                                                        alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="post-info">
                                            <a href="blog-post.html">Odiosters Nullam Vitae</a>
                                            <div class="post-meta">
                                                Nov 10, 2018
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane" id="recentPosts">
                                <ul class="simple-post-list">
                                    <li>
                                        <div class="post-image">
                                            <div class="img-thumbnail img-thumbnail-no-borders d-block">
                                                <a href="blog-post.html">
                                                    <img src="img/blog/square/blog-24.jpg" width="50" height="50"
                                                        alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="post-info">
                                            <a href="blog-post.html">Vitae Nibh Un Odiosters</a>
                                            <div class="post-meta">
                                                Nov 10, 2018
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="post-image">
                                            <div class="img-thumbnail img-thumbnail-no-borders d-block">
                                                <a href="blog-post.html">
                                                    <img src="img/blog/square/blog-42.jpg" width="50" height="50"
                                                        alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="post-info">
                                            <a href="blog-post.html">Odiosters Nullam Vitae</a>
                                            <div class="post-meta">
                                                Nov 10, 2018
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="post-image">
                                            <div class="img-thumbnail img-thumbnail-no-borders d-block">
                                                <a href="blog-post.html">
                                                    <img src="img/blog/square/blog-11.jpg" width="50" height="50"
                                                        alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="post-info">
                                            <a href="blog-post.html">Nullam Vitae Nibh Un Odiosters</a>
                                            <div class="post-meta">
                                                Nov 10, 2018
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <h5 class="font-weight-bold pt-4">About Us</h5>
                    <p>Nulla nunc dui, tristique in semper vel, congue sed ligula. Nam dolor ligula, faucibus id sodales
                        in, auctor fringilla libero. Nulla nunc dui, tristique in semper vel. Nam dolor ligula, faucibus
                        id sodales in, auctor fringilla libero. </p>
                    <h5 class="font-weight-bold pt-4">Latest from Twitter</h5>
                    <div id="tweet" class="twitter mb-4" data-plugin-tweets
                        data-plugin-options="{'username': 'oklerthemes', 'count': 2}">
                        <p>Please wait...</p>
                    </div>
                    <h5 class="font-weight-bold pt-4">Photos from Instagram</h5>
                    <div id="instafeedNoMargins" class="mb-4 pb-1"></div>
                    <h5 class="font-weight-bold pt-4 mb-2">Tags</h5>
                    <div class="mb-3 pb-1">
                        <a href="#"><span
                                class="badge badge-dark badge-sm badge-pill text-uppercase px-2 py-1 mr-1">design</span></a>
                        <a href="#"><span
                                class="badge badge-dark badge-sm badge-pill text-uppercase px-2 py-1 mr-1">brands</span></a>
                        <a href="#"><span
                                class="badge badge-dark badge-sm badge-pill text-uppercase px-2 py-1 mr-1">video</span></a>
                        <a href="#"><span
                                class="badge badge-dark badge-sm badge-pill text-uppercase px-2 py-1 mr-1">business</span></a>
                        <a href="#"><span
                                class="badge badge-dark badge-sm badge-pill text-uppercase px-2 py-1 mr-1">travel</span></a>
                    </div>
                    <h5 class="font-weight-bold pt-4">Find us on Facebook</h5>
                    <div class="fb-page" data-href="https://www.facebook.com/OklerThemes/" data-small-header="true"
                        data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true">
                        <blockquote cite="https://www.facebook.com/OklerThemes/" class="fb-xfbml-parse-ignore"><a
                                href="https://www.facebook.com/OklerThemes/">Okler Themes</a></blockquote>
                    </div>
                </aside>
            </div>
        </div>

    </div>

</div>
@endsection
