<?php $__env->startSection('content'); ?>
<div class="card mb-4">
    <div class="card-header bg-primary text-white">
        <strong>Activity type</strong><span class="small ms-1"></span></div>
    <div class="card-body table-responsive">
            <?php if($act_type->id!=null): ?>
                <form action="<?php echo e(route('activity_type.update',$act_type->id)); ?>" method="POST">
                    <?php echo method_field('PATCH'); ?>
            <?php else: ?>
                <form action="<?php echo e(route('activity_type.store')); ?>" method="POST">
            <?php endif; ?>

            <?php echo csrf_field(); ?>
            <div class="row">
                <div class="mb-3 col-12">
                    <label class="form-label" for="name">Activity Type Name</label>
                    <input class="form-control" id="name" type="text" placeholder="Please enter activity type name" name="name" value="<?php echo e(old('name',$act_type->name)); ?>">
                </div>
                <div class="mb-3">
                    <button class="btn btn-success" type="submit">Save</button>
                    <a class="btn btn-warning" href="<?php echo e(route('activity_type.index')); ?>">Cancel</a>
                </div>
            </div>
        </form>


    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admins.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/current_projects/company-profile/resources/views/admins/activity_types/create-edit.blade.php ENDPATH**/ ?>