
<?php $__env->startSection('navbar_class','navbar-dark'); ?>

<?php $__env->startSection('content'); ?>
<div role="main" class="main">

    <section class="page-header page-header-modern bg-color-light-scale-1 page-header-md">
        <div class="container">
            <div class="row">

                <div class="col-md-12 align-self-center p-static order-2 text-center">

                    <h1 class="text-dark font-weight-bold text-8">INILAHNEWS</h1>
                </div>

                <div class="col-md-12 align-self-center order-1">

                    <ul class="breadcrumb d-block text-center">
                        <li><a href="<?php echo e(url('/')); ?>">Beranda</a></li>
                        <li class="<?php echo e(url('/inilahnews')); ?>">inilahnews</li>
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
                <div class="col-md-12">
                    <h5 class="text-color-primary font-weight-normal line-height-2 text-4">
                        <strong class="font-weight-extra-bold">BERITA TERKINI</strong></h5>
                </div>
                <?php $__currentLoopData = $berita; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-3 col-md-auto">
                    <a href="<?php echo e(url('/berita/')); ?>/<?php echo e($b->id_berita); ?>/<?php echo e($b->seo); ?>" target="_blank">
                        <img src="<?php echo e($imgUrl); ?>/<?php echo e($b->folderGambar); ?>" class="img-fluid rounded mb-2"
                            style="height: 200px; width: 100%; object-fit: cover;" alt="<?php echo e($b->judul); ?>">
                        <h5 class="text-color-dark font-weight-bold line-height-3 text-3 mb-1 pb-1"
                            style="min-height: 55px;">
                            <strong class="font-weight-bold"><?php echo e($b->judul); ?></strong></h5>
                        <p class="text-1 line-height-4"><?php echo e($b->publishTgl); ?></p>
                        <p class="text-1 line-height-4"><em><?php echo e($b->isiNews); ?></em></p>
                    </a>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('porto.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\inilahkepri_website\resources\views/porto/berita/inilahnews.blade.php ENDPATH**/ ?>