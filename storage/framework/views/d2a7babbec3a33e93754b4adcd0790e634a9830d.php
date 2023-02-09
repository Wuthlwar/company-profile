<?php $__env->startSection('content'); ?>
<div class="content-page">
    <div class="container-fluid add-form-list">
        <div class="col-sm-12">
            <div class="pull-left">
                <h4><?php echo e(__('pickup.edit_pickup')); ?></h4>
            </div>
        </div>

        <?php if(count($errors) > 0): ?>
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
        <div class="row">
            <div class="card-body">
                <?php echo Form::model($pickup, ['id'=>'pickup_form','method' => 'PATCH','route' => ['pickups.update', $pickup->uuid]]); ?>

                <div class="row">
                    <?php echo e(Form::hidden('edit_delivery_status', null, array('id' => 'edit_delivery_status','value' => '1'))); ?>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <?php echo e(__('pickup.pickup_no')); ?> : <strong><?php echo e($pickup->pickup_no); ?></strong>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <?php echo e(__('pickup.status')); ?> :
                            <strong>
                                <?php if($pickup->status == 1): ?>
                                Processing
                                <?php elseif($pickup->status == 2): ?>
                                Unfinish
                                <?php elseif($pickup->status == 3): ?>
                                Finish
                                <?php elseif($pickup->status == 4): ?>
                                Unfinish
                                <?php elseif($pickup->status == 5): ?>
                                Start Delivery
                                <?php endif; ?>
                            </strong>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <?php echo e(__('pickup.invoice_no')); ?> : <strong><?php echo e($pickup->invoice_no); ?></strong>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <?php echo e(__('pickup.picking_no')); ?> : <strong><?php echo e($pickup->picking_no); ?></strong>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <?php echo e(__('pickup.customer_name')); ?> : <strong><?php echo e($pickup->customer_name); ?></strong>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <?php echo e(__('pickup.start_time')); ?> : <strong><?php echo e($pickup->start_time); ?></strong>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <?php echo e(__('pickup.loading_finish_time')); ?> : <strong><?php echo e($pickup->loading_finish_time); ?></strong>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <?php echo e(__('pickup.loading_finish_user')); ?> : <strong><?php echo e($pickup->loading_finish_user ? $pickup->loading_finish_user->name : ''); ?></strong>
                        </div>
                    </div>
                    <?php if($pickup->remark == 1): ?>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <?php echo e(__('pickup.start_delivery_time')); ?> : <strong><?php echo e($pickup->start_delivery_time); ?></strong><br>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('edit-delivery-time')): ?>
                            <div class="row">
                                <div class="col-xs-2 col-sm-2 col-md-2">
                                    <input type="date" class="form-control" name="start_delivery_date" value="<?php echo e($pickup->start_delivery_time ?? old('start_delivery_date')); ?>" required>
                                </div>
                                <div class="col-xs-2 col-sm-2 col-md-2">
                                    <input type="time" class="form-control" name="start_delivery_time" value="<?php echo e($pickup->start_delivery_time ?? old('start_delivery_time')); ?>" required>
                                </div>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <?php echo e(__('pickup.start_delivery_user')); ?> : <strong><?php echo e($pickup->start_delivery_user ? $pickup->start_delivery_user->name : ''); ?></strong>
                        </div>
                    </div>

                    <?php endif; ?>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <?php echo e(__('pickup.end_time')); ?> : <strong><?php echo e($pickup->end_time); ?></strong>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <?php echo e(__('pickup.duration')); ?> : <strong><?php echo e($duration); ?></strong>
                        </div>
                    </div>
                    <?php if($pickup->status == 2 || $check_over == true): ?>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong><?php echo e(__('pickup.remark')); ?>:</strong>
                            <?php echo Form::select('remark', $remarks, $pickup->remark, array('class' => 'form-control')); ?>

                        </div>
                    </div>
                    <?php else: ?>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <?php echo e(__('pickup.remark')); ?> : <strong><?php echo e($remarks); ?></strong>
                        </div>
                    </div>
                    <?php endif; ?>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-left">
                        <?php if($pickup->status == 2 || $check_over == true): ?>
                        <button type="button" id="submit_button" class="btn btn-primary mr-2"><?php echo e(__('button.finish')); ?></button>
                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('edit-delivery-time')): ?>
                        <button type="button" id="edit_delivery_time_button" class="btn btn-secondary mr-2"><?php echo e(__('button.update')); ?></button>
                        <?php endif; ?>
                        <a class="btn btn-light" href="<?php echo e(route('pickups.index')); ?>"><?php echo e(__('button.back')); ?></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<?php echo Form::close(); ?>


<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<script>
    $(document).ready(function() {
        $('#submit_button').on('click', function() {
            $('#pickup_form').submit();
        })
        $('#edit_delivery_time_button').on('click', function() {
            $('#edit_delivery_status').val(2);
            $('#pickup_form').submit();
        })
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/product_pickup_monitoring_system/resources/views/pickups/edit.blade.php ENDPATH**/ ?>