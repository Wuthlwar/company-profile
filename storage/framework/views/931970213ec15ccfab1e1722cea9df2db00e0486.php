<?php $__env->startSection('content'); ?>
<div class="card mb-4">
    <div class="card-header">
        <strong>Feedbacks</strong><span class="small ms-1"></span>
        
    </div>
    <div class="card-body table-responsive">

        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Mail</th>
                    <th scope="col">Phone No</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Description</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $feedbacks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feedback): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td scope="col">#</td>
                    <td scope="col"><?php echo e($feedback->name); ?></td>
                    <td scope="col"><?php echo e($feedback->email); ?></td>
                    <td scope="col"><?php echo e($feedback->ph_no); ?></td>
                    <td scope="col"><?php echo e($feedback->subject); ?></td>
                    <td scope="col"><?php echo e($feedback->description); ?></td>

                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>

    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admins.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/current_projects/company-profile/resources/views/admins/feedbacks/index.blade.php ENDPATH**/ ?>