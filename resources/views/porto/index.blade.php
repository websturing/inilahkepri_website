<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("title","Inilahkepri.id - Disini Kami Berbagi")</title>
    <meta name="keywords" content="inilahkepri, berita, disini, kami, berbagi" />
    <meta name="description" content="inilahkepri.id -  Disini kami Berbagi">
    <meta name="author" content="inilahkepri.id">
    @yield("meta")

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{url('public/porto/img/fav.png')}}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{url('public/porto/img/fav.png')}}">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light"
        rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{url('public/porto/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('public/porto/vendor/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{url('public/porto/vendor/animate/animate.min.css')}}">
    <link rel="stylesheet" href="{{url('public/porto/vendor/simple-line-icons/css/simple-line-icons.min.css')}}">
    <link rel="stylesheet" href="{{url('public/porto/vendor/owl.carousel/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{url('public/porto/vendor/owl.carousel/assets/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{url('public/porto/vendor/magnific-popup/magnific-popup.min.css')}}">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{url('public/porto/css/theme.css')}}">
    <link rel="stylesheet" href="{{url('public/porto/css/theme-elements.css')}}">
    <link rel="stylesheet" href="{{url('public/porto/css/theme-blog.css')}}">
    <link rel="stylesheet" href="{{url('public/porto/css/theme-shop.css')}}">

    <!-- Demo CSS -->

    <link rel="stylesheet" href="{{url('public/porto/vendor/rs-plugin/css/settings.css')}}">
    <link rel="stylesheet" href="{{url('public/porto/vendor/rs-plugin/css/layers.css')}}">
    <link rel="stylesheet" href="{{url('public/porto/vendor/rs-plugin/css/navigation.css')}}">

    <!-- Skin CSS -->
    <link rel="stylesheet" href="{{url('public/porto/css/skins/default.css')}}">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{url('public/porto/css/custom.css')}}">

    <!-- Head Libs -->
    <script src="{{url('public/porto/vendor/modernizr/modernizr.min.js')}}"></script>
    <script src="//code.jquery.com/jquery-3.2.0.slim.min.js"></script>
    <style>
        #videoBox.out {
            position: fixed;
            bottom: 0;
            right: 0;
            width: 570px;
            z-index: 999;
            animation: an 0.5s;
        }

        #videoBox.in {
            animation: ac 1s;
        }

        .closeMini {
            background-color: red;
            text-align: center;
            width: 30px;
            padding: 5px;
            position: absolute;
            top: -10px;
            left: -10px;
            cursor: pointer;
        }

    </style>
</head>

<body>
    <div class="body">
        <header id="header" class="@yield('navbar_class','header-effect-shrink header-transparent')"
            data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
            <div class="header-body border-top-0 bg-dark box-shadow-none">
                <div class="header-container container-fluid px-lg-4">
                    <div class="header-row">
                        <div class="header-column header-column-border-right flex-grow-0">
                            <div class="header-row pr-4">
                                <div class="header-logo">
                                    <a href="index.html">
                                        <img alt="Porto" width="100" height="48" data-sticky-width="82"
                                            data-sticky-height="40" src="{{url('public/porto/img/logo1.png')}}">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="header-column">
                            <div class="header-row">
                                <div class="header-nav header-nav-links justify-content-center header-nav-light-text">
                                    <div
                                        class="header-nav-main header-nav-main-square header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                        <nav class="collapse header-mobile-border-top">
                                            <ul class="nav nav-pills" id="mainNav">
                                                <li class="dropdown">
                                                    <a class="dropdown-item" href="{{url('/')}}">
                                                        BERANDA
                                                    </a>
                                                </li>
                                                <li class="dropdown">
                                                    <a class="dropdown-item" href="{{url('/inilahnews')}}">
                                                        INILAH NEWS
                                                    </a>
                                                </li>
                                                <li class="dropdown">
                                                    <a class="dropdown-item" href="{{url('/inilahchannel')}}">
                                                        INILAH CHANNEL
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="header-column header-column-border-left flex-grow-0 justify-content-center header-nav-light-text">
                            <div class="header-row pl-4 justify-content-end">
                                <ul class="header-social-icons social-icons d-none d-sm-block social-icons-clean m-0">
                                    <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank"
                                            title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                    <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank"
                                            title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                    <li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank"
                                            title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                                <button class="btn header-btn-collapse-nav ml-0 ml-sm-3" data-toggle="collapse"
                                    data-target=".header-nav-main nav">
                                    <i class="fas fa-bars"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        @hasSection('content')
        @yield("content")
        @else
        <div role="main" class="main">
            <section class="section section-no-border section-dark pt-5 m-0" id="section-concept"
                style=" background-size: cover; background-position: center;">
                <div class="container pt-5 mt-5">
                    <div class="owl-carousel owl-theme nav-style-1 mb-0"
                        data-plugin-options="{'items' : 1,'margin': 25, 'loop': true, 'nav': false, 'dots': false, 'autoplay': true, 'autoplayTimeout': 3000}">
                        @foreach($headline as $index => $h)
                        <div class="row align-items-center pt-3">
                            <div class="col-lg-5 mb-5">
                                <h5 class="text-primary font-weight-bold mb-1 appear-animation"
                                    data-appear-animation="fadeInUpShorter">
                                    {{$h->kategori->nama_kategori}}</h5>
                                <a href="{{url('berita')}}/{{$h->id_berita}}/{{$h->seo}}">
                                    <h5 class="font-weight-bold text-5 line-height-2 mb-3 appear-animation"
                                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400"
                                        data-appear-animation-duration="750">{{$h->judul}}<span class="appear-animation"
                                            data-appear-animation="fadeInRightShorter" data-appear-animation-delay="600"
                                            data-appear-animation-duration="800"></span>
                                    </h5>
                                </a>
                                <p class="custom-font-size-1 appear-animation" data-appear-animation="fadeInUpShorter"
                                    data-appear-animation-delay="900" data-appear-animation-duration="750">
                                    {{$h->beritaIsi}} <a href="{{url('berita')}}/{{$h->id_berita}}/{{$h->seo}}"
                                        data-hash data-hash-offset="120"
                                        class="text-color-light font-weight-semibold text-1 d-block">Selanjutnya <i
                                            class="fa fa-long-arrow-alt-right ml-1"></i></a></p>


                                <div id="popup-content-1"
                                    class="dialog dialog-lg zoom-anim-dialog rounded p-3 mfp-hide mfp-close-out">
                                    <div class="embed-responsive embed-responsive-4by3">
                                        <video width="100%" height="100%" autoplay muted loop controls>
                                            <source src="video/presentation.mp4" type="video/mp4">
                                        </video>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 offset-lg-1 mb-5 appear-animation" data-appear-animation="fadeIn"
                                data-appear-animation-delay="1200" data-appear-animation-duration="750">
                                <div class="border-width-10 border-color-light clearfix border border-radius">
                                    <img src="{{$imgUrl}}/{{$h->folderGambar}}" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>

                        @endforeach
                    </div>
                </div>
            </section>
            <section>

                <div id="videoBox" class="box out" style="color:white">
                    <span class="font-weight-bold closeMini">X</span>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/nn2Z_YQImBg" frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </section>
            <section class="section border-0 m-0">
                <div class="container container-lg">
                    <div class="row">
                        <div class="col-md-12">
                            <h5 class="text-color-primary font-weight-normal line-height-2 text-4">
                                <strong class="font-weight-extra-bold">BERITA TERKINI</strong></h5>
                        </div>
                        @foreach($berita->slice(0,8) as $index => $b)
                        <div class="col-lg-3 col-md-auto">
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
            </section>
            <section class="section-dark section-with-divider pt-5 m-0" id="section-concept"
                style="background-image: url('{{url('public/images/podcast.jpg')}}'); background-size: cover; background-position: center;">
                <div class="container container-lg">

                    <div class="row align-items-center">

                        <div class="col-lg-6 mb-5">
                            @foreach($videos->slice(0,1) as $index => $h)
                            <h5 class="text-light font-weight-bold mb-10 text-10 appear-animation mb-4"
                                data-appear-animation="fadeInUpShorter">
                                INILAH CHANNEL</h5>
                            <div class="border-width-10 border-color-light clearfix border border-radius">
                                <img src="{{$h->thumbnails}}" class="img-fluid" alt="" width="100%">
                            </div>
                            <a href="{{url('videos')}}/{{$h->video_id}}/{{$h->seo}}">
                                <h5 class="font-weight-bold text-5 line-height-2 mb-3 mt-5 appear-animation"
                                    data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400"
                                    data-appear-animation-duration="750">{{$h->title}}<span class="appear-animation"
                                        data-appear-animation="fadeInRightShorter" data-appear-animation-delay="600"
                                        data-appear-animation-duration="800"></span>
                                </h5>
                            </a>
                            <p class="custom-font-size-1 appear-animation" data-appear-animation="fadeInUpShorter"
                                data-appear-animation-delay="900" data-appear-animation-duration="750">
                                {{$h->description}} <a href="{{url('videos')}}/{{$h->video_id}}/{{$h->seo}}" data-hash
                                    data-hash-offset="120"
                                    class="text-color-light font-weight-semibold text-1 d-block">Selanjutnya <i
                                        class="fa fa-long-arrow-alt-right ml-1"></i></a></p>


                            @endforeach
                        </div>
                        <div class="col-lg-6">
                            <div class="row">
                                @foreach($videos->slice(1,4) as $index => $h)
                                <div class="col-lg-6  mb-5 appear-animation" data-appear-animation="fadeIn"
                                    data-appear-animation-duration="750">
                                    <div class="border-width-10 border-color-light clearfix border border-radius">
                                        <img src="{{$h->thumbnails}}" class="img-fluid" alt="">
                                    </div>
                                    <a href="{{url('videos')}}/{{$h->video_id}}/{{$h->seo}}">
                                        <h6 class="font-weight-bold text-3 line-height-3 pt-2 appear-animation"
                                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400"
                                            data-appear-animation-duration="750">{{$h->title}}<span
                                                class="appear-animation" data-appear-animation="fadeInRightShorter"
                                                data-appear-animation-delay="600"
                                                data-appear-animation-duration="800"></span>
                                        </h6>
                                    </a>
                                </div>
                                @endforeach

                            </div>
                        </div>
                    </div>


                </div>
            </section>
            <div class=" container container-lg" style="margin-top: 100px;">
                <div class="row">
                    <div class="col-lg-3 order-lg-3">
                        <aside class="sidebar pb-4" data-plugin-sticky
                            data-plugin-options="{'minWidth': 991, 'containerSelector': '.container', 'padding': {'top': 110}}">
                            <img src="{{$iklanUrl}}/bpbatam1.jpg" class="img-fluid">
                            <img src="{{$iklanUrl}}/bpbatam2.jpg" class="img-fluid">
                        </aside>
                    </div>
                    <div class="col-lg-8 order-lg-2">

                        <div class="heading heading-border heading-middle-border">
                            <h3 class="text-4"><strong
                                    class="font-weight-bold text-5 px-3 text-light py-2 bg-primary">PODCAST</strong>
                            </h3>
                        </div>

                        <div class="row pb-1">

                            <div class="col-lg-6">
                                @foreach($podcast->slice(1,3) as $index => $p)

                                <article
                                    class="thumb-info thumb-info-side-image thumb-info-no-zoom bg-transparent border-radius-0 pb-4 mb-2">
                                    <div class="row align-items-center pb-1">
                                        <div class="col-sm-4">
                                            <a href="{{url('/videos/')}}/{{$p->video_id}}/{{$p->seo}}">
                                                <img src="{{$p->thumbnails}}" class="img-fluid border-radius-0"
                                                    alt="{{$p->title}}">
                                            </a>
                                        </div>
                                        <div class="col-sm-8 pl-sm-0">
                                            <div class="thumb-info-caption-text">
                                                <div class="d-inline-block text-default text-1 float-none">
                                                    <a href="{{url('/videos/')}}/{{$p->video_id}}/{{$p->seo}}"
                                                        class="text-decoration-none text-color-default">{{$p->publishedAt}}
                                                        {{$p->jam}}</a>
                                                </div>
                                                <h4
                                                    class="d-block pb-2 line-height-2 text-3 text-dark font-weight-bold mb-0">
                                                    <a href="{{url('/videos/')}}/{{$p->video_id}}/{{$p->seo}}"
                                                        class="text-decoration-none text-color-dark">{{$p->title}}</a>
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                @endforeach
                            </div>

                            <div class="col-lg-6 mb-4 pb-1">
                                @foreach($podcast->slice(0,1) as $index => $p)
                                <article
                                    class="thumb-info thumb-info-side-image thumb-info-no-zoom bg-transparent border-radius-0 pb-2 mb-2">
                                    <div class="row">
                                        <div class="col">
                                            <a href="{{url('/videos/')}}/{{$p->video_id}}/{{$p->seo}}">
                                                <img src="{{$p->thumbnails}}" class="img-fluid border-radius-0"
                                                    alt="{{$p->title}}">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="thumb-info-caption-text">
                                                <div class="d-inline-block text-default text-1 mt-2 float-none">
                                                    <a href="{{url('/vidoes/')}}/{{$p->video_id}}/{{$p->seo}}"
                                                        class="text-decoration-none text-color-default">{{$p->publishedAt}}</a>
                                                </div>
                                                <h4
                                                    class="d-block line-height-2 text-4 text-dark font-weight-bold mb-0">
                                                    <a href="{{url('/videos/')}}/{{$p->video_id}}/{{$p->seo}}"
                                                        class="text-decoration-none text-color-dark">{{$p->title}}</a>
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                @endforeach
                            </div>
                        </div>

                        <div class="heading heading-border heading-middle-border">
                            <h3 class="text-4"><strong
                                    class="font-weight-bold text-1 px-3 text-light py-2 bg-secondary">PERISTIWA</strong>
                            </h3>
                        </div>

                        <div class="row pb-1">

                            <div class="col-lg-6 mb-4 pb-1">
                                @foreach($peristiwa->slice(0,1) as $index => $p)
                                <article
                                    class="thumb-info thumb-info-side-image thumb-info-no-zoom bg-transparent border-radius-0 pb-2 mb-2">
                                    <div class="row">
                                        <div class="col">
                                            <a href="{{url('/berita/')}}/{{$p->id_berita}}/{{$p->seo}}">
                                                <img src="{{$imgUrl}}/{{$p->folderGambar}}"
                                                    class="img-fluid border-radius-0" alt="{{$p->judul}}">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="thumb-info-caption-text">
                                                <div class="d-inline-block text-default text-1 mt-2 float-none">
                                                    <a href="{{url('/berita/')}}/{{$p->id_berita}}/{{$p->seo}}"
                                                        class="text-decoration-none text-color-default">{{$p->tgl_publish}}</a>
                                                </div>
                                                <h4
                                                    class="d-block line-height-2 text-4 text-dark font-weight-bold mb-0">
                                                    <a href="{{url('/berita/')}}/{{$p->id_berita}}/{{$p->seo}}"
                                                        class="text-decoration-none text-color-dark">{{$p->judul}}</a>
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                @endforeach
                            </div>
                            <div class="col-lg-6">
                                @foreach($peristiwa->slice(1,3) as $index => $p)

                                <article
                                    class="thumb-info thumb-info-side-image thumb-info-no-zoom bg-transparent border-radius-0 pb-4 mb-2">
                                    <div class="row align-items-center pb-1">
                                        <div class="col-sm-4">
                                            <a href="{{url('/berita/')}}/{{$p->id_berita}}/{{$p->seo}}">
                                                <img src="{{$imgUrl}}/{{$p->folderGambar}}"
                                                    class="img-fluid border-radius-0" alt="{{$p->judul}}">
                                            </a>
                                        </div>
                                        <div class="col-sm-8 pl-sm-0">
                                            <div class="thumb-info-caption-text">
                                                <div class="d-inline-block text-default text-1 float-none">
                                                    <a href="{{url('/berita/')}}/{{$p->id_berita}}/{{$p->seo}}"
                                                        class="text-decoration-none text-color-default">{{$p->tgl_publish}}
                                                        {{$p->jam}}</a>
                                                </div>
                                                <h4
                                                    class="d-block pb-2 line-height-2 text-3 text-dark font-weight-bold mb-0">
                                                    <a href="{{url('/berita/')}}/{{$p->id_berita}}/{{$p->seo}}"
                                                        class="text-decoration-none text-color-dark">{{$p->judul}}</a>
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                @endforeach
                            </div>
                        </div>

                        <!-- SERBA SERBI -->
                        <div class="heading heading-border heading-middle-border">
                            <h3 class="text-4"><strong
                                    class="font-weight-bold text-1 px-3 text-light py-2 bg-primary">SERBA
                                    SERBI</strong>
                            </h3>
                        </div>

                        <div class="row pb-1">

                            <div class="col-lg-6 mb-4 pb-1">
                                @foreach($serba->slice(0,1) as $index => $p)
                                <article
                                    class="thumb-info thumb-info-side-image thumb-info-no-zoom bg-transparent border-radius-0 pb-2 mb-2">
                                    <div class="row">
                                        <div class="col">
                                            <a href="{{url('/berita/')}}/{{$p->id_berita}}/{{$p->seo}}">
                                                <img src="{{$imgUrl}}/{{$p->folderGambar}}"
                                                    class="img-fluid border-radius-0" alt="{{$p->judul}}">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="thumb-info-caption-text">
                                                <div class="d-inline-block text-default text-1 mt-2 float-none">
                                                    <a href="{{url('/berita/')}}/{{$p->id_berita}}/{{$p->seo}}"
                                                        class="text-decoration-none text-color-default">{{$p->tgl_publish}}</a>
                                                </div>
                                                <h4
                                                    class="d-block line-height-2 text-4 text-dark font-weight-bold mb-0">
                                                    <a href="{{url('/berita/')}}/{{$p->id_berita}}/{{$p->seo}}"
                                                        class="text-decoration-none text-color-dark">{{$p->judul}}</a>
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                @endforeach
                            </div>
                            <div class="col-lg-6">
                                @foreach($serba->slice(1,3) as $index => $p)

                                <article
                                    class="thumb-info thumb-info-side-image thumb-info-no-zoom bg-transparent border-radius-0 pb-4 mb-2">
                                    <div class="row align-items-center pb-1">
                                        <div class="col-sm-4">
                                            <a href="{{url('/berita/')}}/{{$p->id_berita}}/{{$p->seo}}">
                                                <img src="{{$imgUrl}}/{{$p->folderGambar}}"
                                                    class="img-fluid border-radius-0" alt="{{$p->judul}}">
                                            </a>
                                        </div>
                                        <div class="col-sm-8 pl-sm-0">
                                            <div class="thumb-info-caption-text">
                                                <div class="d-inline-block text-default text-1 float-none">
                                                    <a href="{{url('/berita/')}}/{{$p->id_berita}}/{{$p->seo}}"
                                                        class="text-decoration-none text-color-default">{{$p->tgl_publish}}
                                                        {{$p->jam}}</a>
                                                </div>
                                                <h4
                                                    class="d-block pb-2 line-height-2 text-3 text-dark font-weight-bold mb-0">
                                                    <a href="{{url('/berita/')}}/{{$p->id_berita}}/{{$p->seo}}"
                                                        class="text-decoration-none text-color-dark">{{$p->judul}}</a>
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                @endforeach
                            </div>
                        </div>

                        <!-- SERBA SERBI -->
                        <div class="heading heading-border heading-middle-border">
                            <h3 class="text-4"><strong
                                    class="font-weight-bold text-1 px-3 text-light py-2 bg-success">GAYA
                                    HIDUP</strong>
                            </h3>
                        </div>

                        <div class="row pb-1">

                            <div class="col-lg-6 mb-4 pb-1">
                                @foreach($gaya->slice(0,1) as $index => $p)
                                <article
                                    class="thumb-info thumb-info-side-image thumb-info-no-zoom bg-transparent border-radius-0 pb-2 mb-2">
                                    <div class="row">
                                        <div class="col">
                                            <a href="{{url('/berita/')}}/{{$p->id_berita}}/{{$p->seo}}">
                                                <img src="{{$imgUrl}}/{{$p->folderGambar}}"
                                                    class="img-fluid border-radius-0" alt="{{$p->judul}}">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="thumb-info-caption-text">
                                                <div class="d-inline-block text-default text-1 mt-2 float-none">
                                                    <a href="{{url('/berita/')}}/{{$p->id_berita}}/{{$p->seo}}"
                                                        class="text-decoration-none text-color-default">{{$p->tgl_publish}}</a>
                                                </div>
                                                <h4
                                                    class="d-block line-height-2 text-4 text-dark font-weight-bold mb-0">
                                                    <a href="{{url('/berita/')}}/{{$p->id_berita}}/{{$p->seo}}"
                                                        class="text-decoration-none text-color-dark">{{$p->judul}}</a>
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                @endforeach
                            </div>
                            <div class="col-lg-6">
                                @foreach($gaya->slice(1,3) as $index => $p)

                                <article
                                    class="thumb-info thumb-info-side-image thumb-info-no-zoom bg-transparent border-radius-0 pb-4 mb-2">
                                    <div class="row align-items-center pb-1">
                                        <div class="col-sm-4">
                                            <a href="{{url('/berita/')}}/{{$p->id_berita}}/{{$p->seo}}">
                                                <img src="{{$imgUrl}}/{{$p->folderGambar}}"
                                                    class="img-fluid border-radius-0" alt="{{$p->judul}}">
                                            </a>
                                        </div>
                                        <div class="col-sm-8 pl-sm-0">
                                            <div class="thumb-info-caption-text">
                                                <div class="d-inline-block text-default text-1 float-none">
                                                    <a href="{{url('/berita/')}}/{{$p->id_berita}}/{{$p->seo}}"
                                                        class="text-decoration-none text-color-default">{{$p->tgl_publish}}
                                                        {{$p->jam}}</a>
                                                </div>
                                                <h4
                                                    class="d-block pb-2 line-height-2 text-3 text-dark font-weight-bold mb-0">
                                                    <a href="{{url('/berita/')}}/{{$p->id_berita}}/{{$p->seo}}"
                                                        class="text-decoration-none text-color-dark">{{$p->judul}}</a>
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                @endforeach
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        @endif


        <footer id="footer">
            <div class="container container-lg">
                <div class="row py-5">
                    <div class="col text-center">
                        <ul
                            class="footer-social-icons social-icons social-icons-clean social-icons-big social-icons-opacity-light social-icons-icon-light mt-1">
                            <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank"
                                    title="Facebook"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank"
                                    title="Twitter"><i class="fab fa-twitter"></i></a></li>
                            <li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank"
                                    title="Linkedin"><i class="fab fa-linkedin-in"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright footer-copyright-style-2">
                <div class="container container-lg py-2">
                    <div class="row py-4">
                        <div class="col-lg-8 text-center text-lg-left mb-2 mb-lg-0">
                            <p>
                                <span class="pr-0 pr-md-3 d-block d-md-inline-block"><i
                                        class="far fa-dot-circle text-color-primary top-1 p-relative"></i><span
                                        class="text-color-light opacity-7 pl-1">1234 Street Name, City
                                        Name</span></span>
                                <span class="pr-0 pr-md-3 d-block d-md-inline-block"><i
                                        class="fab fa-whatsapp text-color-primary top-1 p-relative"></i><a
                                        href="tel:1234567890" class="text-color-light opacity-7 pl-1">(800)
                                        123-4567</a></span>
                                <span class="pr-0 pr-md-3 d-block d-md-inline-block"><i
                                        class="far fa-envelope text-color-primary top-1 p-relative"></i><a
                                        href="mailto:mail@example.com"
                                        class="text-color-light opacity-7 pl-1">mail@example.com</a></span>
                            </p>
                        </div>
                        <div
                            class="col-lg-4 d-flex align-items-center justify-content-center justify-content-lg-end mb-4 mb-lg-0 pt-4 pt-lg-0">
                            <p>© Copyright 2019. All Rights Reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    </div>


    <script src="{{url('public/porto/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{url('public/porto/vendor/jquery.appear/jquery.appear.min.js')}}"></script>
    <script src="{{url('public/porto/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
    <script src="{{url('public/porto/vendor/jquery.cookie/jquery.cookie.min.js')}}"></script>
    <script src="{{url('public/porto/vendor/popper/umd/popper.min.js')}}"></script>
    <script src="{{url('public/porto/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{url('public/porto/vendor/common/common.min.js')}}"></script>
    <script src="{{url('public/porto/vendor/jquery.validation/jquery.validate.min.js')}}"></script>
    <script src="{{url('public/porto/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js')}}"></script>
    <script src="{{url('public/porto/vendor/jquery.gmap/jquery.gmap.min.js')}}"></script>
    <script src="{{url('public/porto/vendor/jquery.lazyload/jquery.lazyload.min.js')}}"></script>
    <script src="{{url('public/porto/vendor/isotope/jquery.isotope.min.js')}}"></script>
    <script src="{{url('public/porto/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
    <script src="{{url('public/porto/vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{url('public/porto/vendor/vide/jquery.vide.min.js')}}"></script>
    <script src="{{url('public/porto/vendor/vivus/vivus.min.js')}}"></script>

    <!-- Theme Base, Components and Settings -->
    <script src="{{url('public/porto/js/theme.js')}}"></script>

    <!-- Current Page Vendor and Views -->
    <script src="{{url('public/porto/vendor/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
    <script src="{{url('public/porto/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>

    <!-- Theme Custom -->
    <script src="{{url('public/porto/js/custom.js')}}"></script>

    <!-- Theme Initialization Files -->
    <script src="{{url('public/porto/js/theme.init.js')}}"></script>
    <script type="text/javascript">
        $(function () {
            $(document).on("click", ".closeMini", function () {

                $("#videoBox").hide();

            })
        })

    </script>
</body>

</html>
