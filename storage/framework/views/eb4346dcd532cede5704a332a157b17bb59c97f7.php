<?php $__env->startSection('content'); ?>
<div class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4">
                <div class="card card-transparent card-block card-stretch card-height border-none">
                    <div class="card-body p-0 mt-lg-2 mt-0">
                        <h3 class="mb-3">Hello , <?php echo e(Auth::user()->name); ?></h3>
                        <p class="mb-3"><strong>

                            </strong></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card card-block card-stretch card-height">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Available Branches</h4>
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="d-flex flex-wrap align-items-center mt-2">
                            <a href="<?php echo e(route('pickups.lanthit_pickup_view')); ?>" target="_blank">
                                <div class="d-flex align-items-center mr-1 mt-1" style="border: 5px solid #00b294; border-radius: 5px; padding: 10px;">

                                    <div class="progress-value ml-3 pr-5">
                                        <h5 style="color:#00b294;"> Lanthit </h5>
                                    </div>
                                </div>
                            </a>
                            <a href="<?php echo e(route('pickups.satsan_pickup_view')); ?>" target="_blank">
                                <div class="d-flex align-items-center mr-1 mt-1" style="border: 5px solid #e81123; border-radius: 5px; padding: 10px;">

                                    <div class="progress-value ml-3 pr-5">
                                        <h5 style="color:#e81123;"> Satsan </h5>
                                    </div>
                                </div>
                            </a>
                            <a href="<?php echo e(route('pickups.edg_pickup_view')); ?>" target="_blank">
                                <div class="d-flex align-items-center mr-1 mt-1" style="border: 5px solid #ec008c; border-radius: 5px; padding: 10px;">

                                    <div class="progress-value ml-3 pr-5">
                                        <h5 style="color:#ec008c;"> East Dagon </h5>
                                    </div>
                                </div>
                            </a>
                            <!-- <a href="<?php echo e(route('pickups.hty_pickup_view')); ?>" target="_blank">
                                <div class="d-flex align-items-center mr-1 mt-1" style="border: 5px solid #00bcf2; border-radius: 5px; padding: 10px;">

                                    <div class="progress-value ml-3 pr-5">
                                        <h5 style="color:#00bcf2;"> Hlaing Tharyar </h5>
                                    </div>
                                </div>
                            </a> -->
                            <a href="<?php echo e(route('pickups.tpwd_pickup_view')); ?>" target="_blank">
                                <div class="d-flex align-items-center mr-1 mt-1" style="border: 5px solid #00188f; border-radius: 5px; padding: 10px;">

                                    <div class="progress-value ml-3 pr-5">
                                        <h5 style="color:#00188f;"> Tampawady </h5>
                                    </div>
                                </div>
                            </a>
                            <a href="<?php echo e(route('pickups.mlm_pickup_view')); ?>" target="_blank">
                                <div class="d-flex align-items-center mr-1 mt-1" style="border: 5px solid #68217a; border-radius: 5px; padding: 10px;">

                                    <div class="progress-value ml-3 pr-5">
                                        <h5 style="color:#68217a;"> Mawlamyine </h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- Page end  -->
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<script>
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/product_pickup_monitoring_system/resources/views/pickups/all_pickup_view.blade.php ENDPATH**/ ?>