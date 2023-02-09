<?php $__env->startSection('content'); ?>
<div class="content-page">
    <div class="container-fluid add-form-list">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="pull-left">
                            <h4><?php echo e(__('role.add_new_role')); ?></h4>
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
                    <div class="card-body">
                        <form action="<?php echo e(route('roles.store')); ?>" method="POST" enctype="multipart/form-data" >
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <strong><?php echo e(__('role.name')); ?>:</strong>
                                        <input type="text" name="name" id="name" placeholder="Name" class="form-control">
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <strong><?php echo e(__('role.profile_image')); ?> :</strong>
                                        <input type="file" name="profile_image" class="form-control image-file" accept="png">
                                    </div>
                                </div>
                              
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                    <strong><?php echo e(__('role.user_permission')); ?>:</strong>
                                        <br />
                                        <table class="table">
                                            <?php $__currentLoopData = $user_permission->chunk(5); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permissions): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <td>
                                                            <input type="checkbox" name="permission[]" class="checkbox-input" value="<?php echo e($permission->id); ?>">
                                                            <strong><?php echo e($permission->name); ?></strong>
                                                        </td>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                    <strong><?php echo e(__('role.user_permission')); ?>:</strong>
                                        <br />
                                        <table class="table">
                                            <?php $__currentLoopData = $role_permission->chunk(4); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permissions): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <td>
                                                            <input type="checkbox" name="permission[]" class="checkbox-input" value="<?php echo e($permission->id); ?>">
                                                            <strong><?php echo e($permission->name); ?></strong>
                                                        </td>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                    <strong><?php echo e(__('role.pickup_permission')); ?> :</strong>
                                        <br />
                                        <table class="table">
                                            <?php $__currentLoopData = $pickup_permission->chunk(4); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permissions): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <td>
                                                            <input type="checkbox" name="permission[]" class="checkbox-input" value="<?php echo e($permission->id); ?>">
                                                            <strong><?php echo e($permission->name); ?></strong>
                                                        </td>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                    <strong><?php echo e(__('role.report_permission')); ?> :</strong>
                                        <br />
                                        <table class="table">
                                            <?php $__currentLoopData = $report_permission->chunk(4); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permissions): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <td>
                                                            <input type="checkbox" name="permission[]" class="checkbox-input" value="<?php echo e($permission->id); ?>">
                                                            <strong><?php echo e($permission->name); ?></strong>
                                                        </td>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </table>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 text-left">
                                <button type="submit" class="btn btn-primary mr-2"><?php echo e(__('button.submit')); ?></button>
                                <a class="btn btn-light" href="<?php echo e(url()->previous()); ?>"><?php echo e(__('button.back')); ?></a>
                            </div>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/product_pickup_monitoring_system/resources/views/roles/create.blade.php ENDPATH**/ ?>