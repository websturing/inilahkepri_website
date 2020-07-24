
<?php $__env->startSection('navbar_class','navbar-dark'); ?>
<?php $__env->startSection('meta'); ?>
<meta property="og:url" content="<?php echo e(url('/berita')); ?>/<?php echo e($berita->id_berita); ?>/<?php echo e($berita->seo); ?>" />
<meta property="og:type" content="article" />
<meta property="og:title" content="<?php echo e($berita->judul); ?>" />
<meta property="og:description" content="<?php echo e($berita->beritaIsi); ?>" />
<meta property="og:image" content="<?php echo e($imgUrl); ?>/<?php echo e($berita->folderGambar); ?>" />
<meta property="og:image:width" content="620" />
<meta property="og:image:height" content="541" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<?php
    $bulan = date('M', strtotime($berita->tgl_publish));
    $hari = date('d', strtotime($berita->tgl_publish));
?>
<div role="main" class="main">

    <section class="page-header page-header-modern bg-color-light-scale-1 page-header-md">
        <div class="container">
            <div class="row">

                <div class="col-md-12 align-self-center p-static order-2 text-center">

                    <h1 class="text-dark font-weight-bold text-8"><?php echo e($berita->judul); ?></h1>
                    <span class="sub-title text-dark"><?php echo e($berita->kategori->nama_kategori); ?></span>
                </div>

                <div class="col-md-12 align-self-center order-1">

                    <ul class="breadcrumb d-block text-center">
                        <li><a href="<?php echo e(url('/')); ?>">Beranda</a></li>
                        <li class="<?php echo e(url('/berita/data')); ?>">Berita</li>
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
                                <img src="<?php echo e($imgUrl); ?>/<?php echo e($berita->folderGambar); ?>"
                                    class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
                            </a>
                        </div>

                        <h6 class="text-1"><em><?php echo e($berita->ket_gambar); ?></em></h6>

                        <div class="post-date ml-0">
                            <span class="day"><?php echo e($hari); ?></span>
                            <span class="month"><?php echo e($bulan); ?></span>
                        </div>
                        <div class="post-content ml-0">


                            <?php echo $berita->isi_berita; ?>



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
                    <?php $__currentLoopData = $related->slice(0,8); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-6 col-md-auto">
                        <a href="<?php echo e(url('/berita/')); ?>/<?php echo e($b->id_berita); ?>/<?php echo e($b->seo); ?>">
                            <img src="<?php echo e($imgUrl); ?>/<?php echo e($b->folderGambar); ?>" class="img-fluid rounded mb-2"
                                style="height: 200px; width: 100%; object-fit: cover;" alt="<?php echo e($b->judul); ?>">
                            <h5 class="text-color-dark font-weight-bold line-height-3 text-3 mb-1 pb-1"
                                style="min-height: 55px;">
                                <strong class="font-weight-bold"><?php echo e($b->judul); ?></strong></h5>
                            <p class="text-1 line-height-4"><em><?php echo e($b->isiNews); ?></em></p>
                        </a>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>

            <div class="col-lg-3">
                <aside class="sidebar" data-plugin-sticky
                    data-plugin-options="{'minWidth': 991, 'containerSelector': '.container', 'padding': {'top': 110}}">
                    <img src="<?php echo e($iklanUrl); ?>/bpbatam1.jpg" class="img-fluid">
                    <img src="<?php echo e($iklanUrl); ?>/bpbatam2.jpg" class="img-fluid">
                </aside>
            </div>
        </div>

    </div>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('porto.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\inilahkepri_website\resources\views/porto/berita/detail.blade.php ENDPATH**/ ?>