
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
                                <iframe src="<?php echo e($url); ?>" frameborder='0' allowfullscreen width="100%"
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
                            class="text-5"><?php echo e($berita->title); ?></span></h2>
                    <p><?php echo e($berita->publishedAt); ?></p>
                    <p><?php echo e($berita->description); ?></p>
                </div>
            </div>
            <div class="row">

                <?php $__currentLoopData = $related->slice(0,9); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-4">
                    <a href="<?php echo e(url('/videos')); ?>/<?php echo e($b->video_id); ?>/<?php echo e($b->seo); ?>">
                        <img src="<?php echo e($b->thumb); ?>" class="img-fluid rounded mb-2"
                            style="height: 200px; width: 100%; object-fit: cover;" alt="<?php echo e($b->title); ?>">
                        <h5 class="text-color-dark font-weight-bold line-height-3 text-3 mb-1 pb-1"
                            style="min-height: 55px;">
                            <strong class="font-weight-bold"><?php echo e($b->title); ?></strong></h5>
                        <p class="text-1 line-height-4"><em><?php echo e($b->isiNews); ?></em></p>
                    </a>
                </div>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</div>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('porto.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\inilahkepri_website\resources\views/porto/berita/videosDetail.blade.php ENDPATH**/ ?>