<?php $__env->startSection('content'); ?>
<div class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-transparent card-block card-stretch card-height border-none">
                    <div class="card-body p-0 mt-lg-2 mt-0">
                        <h3 class="mb-3">Hello , <?php echo e(Auth::user()->name); ?></h3>
                        <p class="mb-3"><strong>

                            </strong></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card card-block card-stretch card-height">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Loading Finish Summary</h4>
                            <h6 id="current_date_time" class="time_lable" style="margin-top: 10px;"><?php echo e(date('d M Y h:i:s A')); ?></h6>
                        </div>
                        <div class="card-header-toolbar d-flex align-items-center">
                            <div class="dropdown">
                                <span class="dropdown-toggle dropdown-bg btn" id="dropdownMenuButton005" data-toggle="dropdown">
                                    <?php echo e(session()->get('type_word') ?? 'Today'); ?> <i class="ri-arrow-down-s-line ml-1"></i>
                                </span>
                                <div class="dropdown-menu dropdown-menu-right shadow-none" aria-labelledby="dropdownMenuButton005">
                                    <a class="dropdown-item" href="<?php echo e(route('dashboard','today')); ?>">Today</a>
                                    <a class="dropdown-item" href="<?php echo e(route('dashboard','this_month')); ?>">This Month</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex flex-wrap align-items-center mt-2">
                            <div class="d-flex align-items-center" style="border: 5px solid green; border-radius: 5px; background:green; color:white;width: 300px;">
                                <input type="hidden" id="ten_minutes_percentage" value="<?php echo e(session()-> get('ten_minutes_percentage') ?? 0); ?>">
                                <div class="10_minutes_count demo"></div>
                                <div class="progress-value ml-3">
                                    <h5 style="font-size:35px"> <?php echo e(session()->get('10_minutes_count') ?? 0); ?> </h5>
                                    <p class=" mb-0">10 minutes</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center ml-3 " style="border: 5px solid orange; border-radius: 5px; background:orange; color:black;width: 300px;">
                                <input type="hidden" id="ten_fifteen_minutes_percentage" value="<?php echo e(session()-> get('ten_fifteen_minutes_percentage') ?? 0); ?>">
                                <div class="10_15_minutes_count demo"></div>
                                <div class="progress-value ml-3">
                                    <h5 style="font-size:35px"><?php echo e(session()->get('10_15_minutes_count') ?? 0); ?></h5>
                                    <p class="mb-0">10 to 15 minutes</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center ml-3" style="border: 5px solid red; border-radius: 5px; background:red; color:white;width: 300px;">
                                <input type="hidden" id="over_fifteen_minutes_percentage" value="<?php echo e(session()-> get('over_fifteen_minutes_percentage') ?? 0); ?>">
                                <div class="over_15_minutes_count demo"></div>
                                <div class="progress-value ml-3">
                                    <h5 style="font-size:35px"><?php echo e(session()->get('over_15_minutes_count') ?? 0); ?></h5>
                                    <p class="mb-0">over 15 minutes</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Prepare Finish Summary</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex flex-wrap align-items-center mt-2">
                            <div class="d-flex align-items-center" style="border: 5px solid green; border-radius: 5px; background:green; color:white;width:300px;">
                                <input type="hidden" id="ten_minutes_to_RL_percentage" value="<?php echo e(session()-> get('ten_minutes_to_RL_percentage') ?? 0); ?>">
                                <div class="10_minutes_count_to_RL demo"></div>
                                <div class="progress-value ml-3 pr-5">
                                    <h5 style="font-size:35px"> <?php echo e(session()->get('10_minutes_count_to_RL') ?? 0); ?></h5>
                                    <p class="mb-0">10 minutes</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center ml-3 " style="border: 5px solid orange; border-radius: 5px; background:orange; color:black;width:300px;">
                                <input type="hidden" id="ten_fifteen_minutes_to_RL_percentage" value="<?php echo e(session()-> get('ten_fifteen_minutes_to_RL_percentage') ?? 0); ?>">
                                <div class="10_15_minutes_count_to_RL demo"></div>
                                <div class="progress-value ml-3  pr-5">
                                    <h5 style="font-size:35px"><?php echo e(session()->get('10_15_minutes_count_to_RL') ?? 0); ?></h5>
                                    <p class="mb-0">10 to 15 minutes</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center ml-3" style="border: 5px solid red; border-radius: 5px;background:red; color:white;width:300px;">
                                <input type="hidden" id="over_fifteen_minutes_to_RL_percentage" value="<?php echo e(session()-> get('over_fifteen_minutes_to_RL_percentage') ?? 0); ?>">
                                <div class="over_15_minutes_count_to_RL demo"></div>
                                <div class="progress-value ml-3 pr-5">
                                    <h5 style="font-size:35px"><?php echo e(session()->get('over_15_minutes_count_to_RL') ?? 0); ?></h5>
                                    <p class="mb-0">over 15 minutes</p>
                                </div>
                            </div>
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
    $(document).ready(function() {
        var ten_minutes_percentage = $('#ten_minutes_percentage').val();
        var ten_fifteen_minutes_percentage = $('#ten_fifteen_minutes_percentage').val();
        var over_fifteen_minutes_percentage = $('#over_fifteen_minutes_percentage').val();


        var ten_minutes_to_RL_percentage = $('#ten_minutes_to_RL_percentage').val();
        var ten_fifteen_minutes_to_RL_percentage = $('#ten_fifteen_minutes_to_RL_percentage').val();
        var over_fifteen_minutes_to_RL_percentage = $('#over_fifteen_minutes_to_RL_percentage').val();

        window.onload = function() {
            win.loopFun($('.10_minutes_count')[0], ten_minutes_percentage, '#ccc', '#fff', '#fff', '20px', 20, 60, 1000, 'back-out');
            win.loopFun($('.10_15_minutes_count')[0], ten_fifteen_minutes_percentage, '#ccc', '#fff', '#000', '20px', 20, 60, 1000, 'back-out');
            win.loopFun($('.over_15_minutes_count')[0], over_fifteen_minutes_percentage, '#ccc', '#fff', '#fff', '20px', 20, 60, 1000, 'back-out');

            win.loopFun($('.10_minutes_count_to_RL')[0], ten_minutes_to_RL_percentage, '#ccc', '#fff', '#fff', '20px', 20, 60, 1000, 'back-out');
            win.loopFun($('.10_15_minutes_count_to_RL')[0], ten_fifteen_minutes_to_RL_percentage, '#ccc', '#fff', '#000', '20px', 20, 60, 1000, 'back-out');
            win.loopFun($('.over_15_minutes_count_to_RL')[0], over_fifteen_minutes_to_RL_percentage, '#ccc', '#fff', '#fff', '20px', 20, 60, 1000, 'back-out');
        }
    })
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/product_pickup_monitoring_system/resources/views/home.blade.php ENDPATH**/ ?>