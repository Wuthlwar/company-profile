<?php $__env->startSection('content'); ?>
<div class="card mb-4">
    <div class="card-header">
        <strong>Activity Detail</strong><span class="small ms-1"></span>
        <div class="row-reverse float-end">
            <a class="btn btn-info" href="<?php echo e(route('activity_type.create')); ?>">Add</a>
        </div>
    </div>
    <div class="card-body table-responsive">

        <table class="table table-hover">
            <thead>
                <tr>Images</tr>
            </thead>
            <tbody>

                <tr>
                    <?php $__currentLoopData = $act_imgs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <td><?php echo e($img->file); ?>

                        <img src="<?php echo e(Storage::url("uploads/activity_images/$img->file")); ?>" alt="<?php echo e($img->name); ?>" />
                        
                        
                    </td>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </tr>

            </tbody>
          </table>

    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admins.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/current_projects/company-profile/resources/views/admins/activities/show.blade.php ENDPATH**/ ?>