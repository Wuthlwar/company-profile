<?php $__env->startSection('content'); ?>
<div class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
               <div class="card car-transparent">
                  <div class="card-body p-0">
                     <div class="profile-image position-relative" style="display: flex; justify-content: center;">
                        <img src="<?php echo e(asset('images/PRO-1-Global-Logo.png')); ?>" class="img-fluid center rounded w-50" alt="profile-image">
                     </div>
                  </div>
               </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                    <div class="card card-block card-stretch card-height">
                        <div class="card-body">
                            <div style="display: flex; justify-content: center;">
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <p class="text-danger"><?php echo e($error); ?></p>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div> 
                            <div class="d-flex align-items-center mb-3" style="display: flex; justify-content: center;">
                             
                                <div class="profile-img position-relative">
                                    <img src="<?php echo e(asset('images/user/' . Auth::user()->roles->pluck('name')->first() .'.png')); ?>" class="img-fluid rounded avatar-110" alt="profile-image">
                                </div>
                                <div class="ml-3">
                                    <h4 class="mb-1"><?php echo e(Auth::user()->name); ?></h4>
                                    <p class="mb-2">Role : <?php echo e(Auth::user()->roles->pluck('name')->first()); ?></p>
                                    <p class="mb-2">Emoplyee ID : <?php echo e(Auth::user()->employee_id); ?></p>
                                </div>
                                <div class="ml-3">
                                    <button id="show_change_password_form" class="btn btn-primary">Change Password</button>
                                </div>
                                <div class="ml-3 col-lg-4" id="change_password_form">
                                    <form action="<?php echo e(route('user.update_profile')); ?>"  method="POST" onsubmit="return validateForm()">
                                    <?php echo csrf_field(); ?>
                                        <div class="form-group">
                                            <label for="cpass">Current Password:</label>
                                            <input type="Password" class="form-control" name="cpass" id="cpass" value="" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="npass">New Password:</label>
                                            <input type="Password" class="form-control" name="npass" id="npass" value="" required minlength="6">
                                        </div>
                                        <div class="form-group">
                                            <label for="vpass">Verify Password:</label>
                                            <input type="Password" class="form-control" name="vpass" id="vpass" value="" required minlength="6">
                                        </div>
                                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                        <button type="buttom" class="btn iq-bg-danger" id="hide_change_password_form">Back</button>
                                    </form>
                                </div>
                            </div>
                            
                        </div>
                    <div>
            </div>
        </div>
        
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <script>
        $(document).ready(function () {
            $('#change_password_form').hide();
            $('#show_change_password_form').on('click', function(e) {
                $('#change_password_form').show();
                $('#show_change_password_form').hide();
            })
            $('#hide_change_password_form').on('click', function(e) {
                $('#change_password_form').hide();
                $('#show_change_password_form').show();
                event.preventDefault();
            })
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/product_pickup_monitoring_system/resources/views/users/profile.blade.php ENDPATH**/ ?>