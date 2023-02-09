<?php $__env->startSection('content'); ?>
<div class="content-page">
    <div class="container-fluid add-form-list">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="pull-left">
                            <h4><?php echo e(__('pickup.start_delivery')); ?></h4>
                        </div>
                    </div>
                    <?php if($errors->any()): ?>
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                    <?php endif; ?>
                    <?php if($message = Session::get('error')): ?>
                    <div class="alert alert-danger">
                        <p><?php echo e($message); ?></p>
                    </div>
                    <?php endif; ?>
                    <?php if($message = Session::get('success')): ?>
                    <div class="alert alert-success">
                        <p><?php echo e($message); ?></p>
                    </div>
                    <?php endif; ?>
                    <div class="card-body">
                        <?php echo Form::open(array('route' => 'pickups.start_delivery','method'=>'POST')); ?>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong><?php echo e(__('pickup.scan_picking_no')); ?>:</strong>
                                <?php echo Form::text('picking_no', null, array('placeholder' => '','class' => 'form-control')); ?>

                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12 text-left">
                            <button type="submit" class="btn btn-success mr-2"><?php echo e(__('button.start_delivery')); ?></button>
                            <a class="btn btn-light" href="<?php echo e(route('pickups.index')); ?>"> <?php echo e(__('button.back')); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php echo Form::close(); ?>

    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('js'); ?>
    <script type="text/javascript">
    </script>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/product_pickup_monitoring_system/resources/views/pickups/start_delivery.blade.php ENDPATH**/ ?>