<?php $__env->startSection('content'); ?>
<div class="card mb-4">
    <div class="card-header">
        <strong>Activity</strong><span class="small ms-1"></span>
        <div class="row-reverse float-end">
            <a class="btn btn-info" href="<?php echo e(route('activities.create')); ?>">Add</a>
        </div>
    </div>
    <div class="card-body table-responsive">

        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Activity Title</th>
                    <th scope="col">Location</th>
                    <th scope="col">Image</th>
                    <th scope="col">Date</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $acts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $act): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td scope="col">#</td>
                    <td scope="col"><?php echo e($act->title); ?></td>
                    <td scope="col"><?php echo e($act->description); ?></td>
                    <td scope="col"><?php echo e($act->act_types->name); ?></td>
                    <td scope="col"><?php echo e($act->location); ?></td>
                    <td scope="col">
                        <img src="<?php echo e(asset('storage/uploads/activity/'.$act->preview_img)); ?>" alt="<?php echo e($act->preview_img); ?>" width="100px">
                    </td>
                    <td scope="col"><?php echo e($act->date); ?></td>
                    <td>
                        <form action="<?php echo e(route('activities.destroy',$act->id)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <a type="button" href="<?php echo e(route('activities.edit',$act->id)); ?>" class="btn btn-warning">Edit</a>
                            <a type="button" href="<?php echo e(route('activities.show',$act->id)); ?>" class="btn btn-dark">Detail</a>
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

<?php echo $__env->make('admins.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/current_projects/company-profile/resources/views/admins/activities/index.blade.php ENDPATH**/ ?>