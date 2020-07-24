<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("title","Inilahkepri.id - Disini Kami Berbagi")</title>
    <meta name="keywords" content="inilahkepri, berita, disini, kami, berbagi" />
    <meta name="description" content="inilahkepri.id -  Disini kami Berbagi">
    <meta name="author" content="inilahkepri.id">

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


    <!-- Skin CSS -->
    <link rel="stylesheet" href="{{url('public/porto/css/skins/default.css')}}">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{url('public/porto/css/custom.css')}}">

    <!-- Head Libs -->
    <script src="{{url('public/porto/vendor/modernizr/modernizr.min.js')}}"></script>
</head>

<body>
    <div class="body">
        <header id="header" class="header-effect-shrink"
            data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
            <div class="header-body border-top-0">
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
                                <div class="header-nav header-nav-links justify-content-center">
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
                                                <li class="dropdown">
                                                    <a class="dropdown-item" href="{{url('/inilahparlemen')}}">
                                                        INILAH PARLEMEN
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="header-column header-column-border-left flex-grow-0 justify-content-center">
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

        <div role="main" class="main">
            <!-- <div class="container container-lg">
                <div class="row">
                    <div class="col-lg-6 pt-5">
                        <h2 class="font-weight-bold text-10 line-height-2 appear-animation"
                            data-appear-animation="fadeInRightShorter" data-appear-animation-delay="500"><span
                                class="text-5">Hello, I’m John Doe. I’m a Digital Designer From New York City.</span>
                        </h2>
                        <h4 class="text-6 line-height-6 font-weight-normal appear-animation"
                            data-appear-animation="fadeInRightShorter" data-appear-animation-delay="800"><span
                                class="opacity-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit phasellus
                                blandit massa enim adipiscing elit phasellus.</span></h4>
                        <a class="btn btn-primary btn-with-arrow mb-2 ml-0 pl-0 appear-animation"
                            data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1100"
                            href="#">Contact Us <span><i class="fas fa-chevron-right"></i></span></a>
                    </div>
                </div>
            </div> -->

            <div class="container container-lg">
                <div class="row">
                    <div class="col">

                        <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="500">

                            <ul class="nav nav-pills sort-source sort-source-style-3" data-sort-id="portfolio"
                                data-option-key="filter" data-plugin-options="{'layoutMode': 'packery', 'filter': '*'}">
                                <li class="nav-item active" data-option-value="*"><a
                                        class="nav-link text-1 text-uppercase active" href="#">Show All</a></li>

                            </ul>

                            <div class="sort-destination-loader sort-destination-loader-showing mt-4 pt-2">
                                <div class="row portfolio-list sort-destination" data-sort-id="portfolio">


                                    <div class="col-sm-6 col-lg-6 isotope-item websites">
                                        <div class="portfolio-item">
                                            <a href="portfolio-single-wide-slider.html">
                                                <span
                                                    class="thumb-info thumb-info-no-borders thumb-info-lighten thumb-info-bottom-info thumb-info-bottom-info-dark thumb-info-bottom-info-show-more thumb-info-no-zoom border-radius-0">
                                                    <span class="thumb-info-wrapper">
                                                        <img src="{{$imgUrl}}/{{$headline[0]->folderGambar}}"
                                                            class="img-fluid" alt="">
                                                        <span class="thumb-info-title bg-transparent p-4">
                                                            <span
                                                                class="thumb-info-inner line-height-1 text-4 font-weight-bold">{{$headline[0]->judul}}</span>
                                                            <span
                                                                class="thumb-info-type opacity-6">{{$headline[0]->kategori->nama_kategori}}</span>
                                                        </span>
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-6 isotope-item medias">
                                        <div class="portfolio-item">
                                            <a href="portfolio-single-wide-slider.html">
                                                <span
                                                    class="thumb-info thumb-info-no-borders thumb-info-lighten thumb-info-bottom-info thumb-info-bottom-info-dark thumb-info-bottom-info-show-more thumb-info-no-zoom border-radius-0">
                                                    <span class="thumb-info-wrapper">
                                                        <img src="{{$imgUrl}}/{{$headline[1]->folderGambar}}"
                                                            style="height: 210px !important; object-fit: cover;"
                                                            class="img-fluid" alt="">
                                                        <span class="thumb-info-title bg-transparent p-4">
                                                            <span
                                                                class="thumb-info-inner line-height-1 text-4 font-weight-bold">{{$headline[1]->judul}}</span>
                                                            <span
                                                                class="thumb-info-type opacity-6">{{$headline[1]->kategori->nama_kategori}}</span>
                                                        </span>
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-3 isotope-item brands">
                                        <div class="portfolio-item">
                                            <a href="portfolio-single-wide-slider.html">
                                                <span
                                                    class="thumb-info thumb-info-no-borders thumb-info-lighten thumb-info-bottom-info thumb-info-bottom-info-dark thumb-info-bottom-info-show-more thumb-info-no-zoom border-radius-0">
                                                    <span class="thumb-info-wrapper">
                                                        <img src="{{$imgUrl}}/{{$headline[2]->folderGambar}}"
                                                            class="img-fluid" alt="">
                                                        <span class="thumb-info-title bg-transparent p-4">
                                                            <span
                                                                class="thumb-info-inner line-height-1 text-1 font-weight-bold">{{$headline[2]->judul}}</span>
                                                            <span
                                                                class="thumb-info-type opacity-6">{{$headline[2]->kategori->nama_kategori}}</span>
                                                        </span>
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-lg-3 isotope-item logos">
                                        <div class="portfolio-item">
                                            <a href="portfolio-single-wide-slider.html">
                                                <span
                                                    class="thumb-info thumb-info-no-borders thumb-info-lighten thumb-info-bottom-info thumb-info-bottom-info-dark thumb-info-bottom-info-show-more thumb-info-no-zoom border-radius-0">
                                                    <span class="thumb-info-wrapper">
                                                        <img src="{{$imgUrl}}/{{$headline[3]->folderGambar}}"
                                                            class="img-fluid" alt="">
                                                        <span class="thumb-info-title bg-transparent p-4">
                                                            <span
                                                                class="thumb-info-inner line-height-1 text-1 font-weight-bold ">{{$headline[3]->judul}}</span>
                                                            <span
                                                                class="thumb-info-type opacity-6 ">{{$headline[3]->kategori->nama_kategori}}</span>
                                                        </span>
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section class="call-to-action call-to-action-strong-grey call-to-action-in-footer">
                <div class="container container-lg">
                    <div class="row ">
                        <div class="col-md-12">
                            <h1 class="font-weight-extra-boldph">INILAH CHANNEL</h1>
                        </div>
                        <div class="col-md-12 order-2 order-md-1 text-center text-md-left appear-animation mt-2 pt-1"
                            style="margin-top: -568 !important;" data-appear-animation="fadeInRightShorter">
                            <div class="owl-carousel owl-theme nav-style-1 mb-0"
                                data-plugin-options="{'items' : 5,'margin': 25, 'loop': true, 'nav': false, 'dots': false, 'autoplay': true, 'autoplayTimeout': 3000}">
                                @foreach($videos as $index => $v)
                                <?php
                                $string     = $v->url;
                                $search     = '/youtube\.com\/watch\?v=([a-zA-Z0-9]+)/smi';
                                $replace    = "youtube.com/embed/$1";    
                                $url = preg_replace($search,$replace,$string);
                                ?>
                                <div>
                                    <div class="embed-container">
                                        <iframe src="{{$url}}" frameborder='0' allowfullscreen width="100%"></iframe>
                                    </div>
                                    <span class="text-color-dark text-4 mb-0">{{$v->titleLower}}</span>
                                </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div class="container container-lg" style="margin-top: 100px;">

                <div class="row">
                    <div class="col-lg-4 order-lg-3">
                        <aside class="sidebar">
                            <form action="page-search-results.html" method="get">
                                <div class="input-group mb-3 pb-1">
                                    <input class="form-control text-1" placeholder="Search..." name="s" id="s"
                                        type="text">
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
                                                            <img src="img/blog/square/blog-11.jpg" width="50"
                                                                height="50" alt="">
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
                                                            <img src="img/blog/square/blog-24.jpg" width="50"
                                                                height="50" alt="">
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
                                                            <img src="img/blog/square/blog-42.jpg" width="50"
                                                                height="50" alt="">
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
                                                            <img src="img/blog/square/blog-24.jpg" width="50"
                                                                height="50" alt="">
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
                                                            <img src="img/blog/square/blog-42.jpg" width="50"
                                                                height="50" alt="">
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
                                                            <img src="img/blog/square/blog-11.jpg" width="50"
                                                                height="50" alt="">
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
                            <p>Nulla nunc dui, tristique in semper vel, congue sed ligula. Nam dolor ligula, faucibus id
                                sodales in, auctor fringilla libero. Nulla nunc dui, tristique in semper vel. Nam dolor
                                ligula, faucibus id sodales in, auctor fringilla libero. </p>
                        </aside>
                    </div>
                    <div class="col-lg-8 order-lg-2">
                        <div class="blog-posts">
                            @foreach($berita as $index => $b)
                            <div class="col-lg-12">
                                <span class="thumb-info thumb-info-side-image thumb-info-no-zoom py-0">
                                    <span class="thumb-info-side-image-wrapper">
                                        <img src="{{$imgUrl}}/{{$b->folderGambar}}" class="img-fluid" alt=""
                                            style="width: 300px; height: 200px;">
                                    </span>
                                    <span class="thumb-info-caption">
                                        <span class="thumb-info-caption-text" style="margin-top: -20px !important;">
                                            <h4
                                                class="font-weight-semibold text-6 line-height-4 mb-1 text-lowercase text-capitalize">
                                                <a
                                                    href="{{url('/berita')}}/{{$b->seo}}/{{$b->id_berita}}">{{$b->judul}}</a>
                                            </h4>

                                            <div class="post-meta">
                                                <span
                                                    class="font-weight-semibold">{{$b->kategori->nama_kategori}}</span>
                                            </div>
                                            <p>{!! $b->beritaIsi !!}
                                            </p>

                                        </span>
                                    </span>


                            </div>
                            <hr />
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <section class="section section-no-border section-angled bg-color-light-scale-1 m-0">
            <div class="section-angled-layer-top section-angled-layer-increase-angle"
                style="padding: 5rem 0; background-color: #0169fe;"></div>
            <div class="container py-5 my-5">
                <div class="row align-items-center text-center my-5">
                    <div class="col-md-6">
                        <h2 class="font-weight-bold text-9 mb-0 appear-animation"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200"
                            data-appear-animation-duration="750">INILAH CHANNEL</h2>
                        <p class="font-weight-semibold text-primary text-4 fonts-weight-semibold positive-ls-2 mb-3 appear-animation"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600"
                            data-appear-animation-duration="750">DISINI KAMI BERBAGI</p>
                        <p class="pb-2 mb-4 appear-animation" data-appear-animation="fadeInUpShorter"
                            data-appear-animation-delay="800" data-appear-animation-duration="750">{{$videos[0]->title}}
                        </p>
                    </div>
                    <div class="col-md-6 py-5">
                        <?php
                                $string     = $videos[0]->url;
                                $search     = '/youtube\.com\/watch\?v=([a-zA-Z0-9]+)/smi';
                                $replace    = "youtube.com/embed/$1";    
                                $url = preg_replace($search,$replace,$string);
                                ?>
                        <img class="porto-lz" src="{{url('public/porto/img/landing/porto_dots2.png')}}" alt=""
                            width="149" height="142" style="position: absolute; top: -60px; right: -8%;">
                        <div class="appear-animation" data-appear-animation="fadeInLeftShorter"
                            data-appear-animation-delay="0" data-appear-animation-duration="750">
                            <div class="strong-shadow rounded strong-shadow-top-right">
                                <div
                                    class="embed-container img-fluid border border-width-10 border-color-light rounded box-shadow-3">
                                    <iframe src="{{$url}}" frameborder='0' allowfullscreen width="400px"
                                        height="300px"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <footer id="footer">
            <div class="container container-lg">
                <div class="row py-5">
                    <div class="col text-center">
                        <ul
                            class="footer-social-icons social-icons social-icons-clean social-icons-big social-icons-opacity-light social-icons-icon-light mt-1">
                            <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank"
                                    title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank"
                                    title="Twitter"><i class="fab fa-twitter"></i></a></li>
                            <li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank"
                                    title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
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
</body>

</html>