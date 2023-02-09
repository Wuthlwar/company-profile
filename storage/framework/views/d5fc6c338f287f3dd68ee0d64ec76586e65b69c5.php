<?php $__env->startSection('content'); ?>
<div class="card mb-4">
    <div class="card-header">
        <strong>Activity</strong><span class="small ms-1"></span>
        <div class="row-reverse float-end">
            <a class="btn btn-info" href="<?php echo e(route('activity_type.create')); ?>">Add</a>
        </div>
    </div>
    <div class="card-body table-responsive">

        <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Activity Type Name</th>
                <th scope="col">Created At</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
             <?php $__currentLoopData = $act_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <th scope="row"><?php echo e($loop->iteration); ?></th>
                    <td><?php echo e($type->name); ?></td>
                    <td><?php echo e($type->created_at); ?></td>
                    <td>
                        <form action="<?php echo e(route('activity_type.destroy',$type->id)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <a type="button" href="<?php echo e(route('activity_type.edit',$type->id)); ?>" class="btn btn-warning">Edit</a>
                        <button class="btn btn-danger" type="submit">Delete</button>
                        </form>

                    </td>
                </tr>
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </tbody>
          </table>

    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admins.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/current_projects/company-profile/resources/views/admins/activity_types/index.blade.php ENDPATH**/ ?>