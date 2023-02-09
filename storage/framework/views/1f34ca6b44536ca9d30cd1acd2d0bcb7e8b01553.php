<?php $__env->startSection('content'); ?>

    <div class="stricky-header stricked-menu main-menu">
        <div class="sticky-header__content"></div>
        <!-- /.sticky-header__content -->
    </div>
    <!-- /.stricky-header -->

    <!--Portfolio Details Start-->
    <section class="portfolio-details">
        <div class="container">
            <div class="mb-3"><h5 class="text-primary fw-bold"><?php echo e($act->title); ?></h5> (<?php echo e($act->location); ?>)</div>
            <div class="row col-12">

                <?php $__currentLoopData = $act_imgs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="portfolio-details__img col-md-3 ">
                        <img src="<?php echo e(asset("storage/uploads/activity_images/$img->file")); ?>" alt="<?php echo e($img->name); ?>" >

                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <div class="portfolio-details__content">
                <div class="row">
                    <div><a class="btn btn-primary mb-2" href="<?php echo e(url('/home#ouractivities')); ?>"><< Back</a></div>
                    <div class="col-xl-8 col-lg-8">
                        <div class="portfolio-details__content-left">
                            <div><?php echo e($act->description); ?></div>

                        </div>

                    </div>
                </div>

            </div>
    </section>
    <!--Portfolio Details End-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/current_projects/company-profile/resources/views/act_detail.blade.php ENDPATH**/ ?>