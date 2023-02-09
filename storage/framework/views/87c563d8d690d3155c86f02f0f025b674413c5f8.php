<?php $__env->startSection('content'); ?>
<div class="content-page">
    <div class="container-fluid add-form-list">
        <div class="row">
            <div class="col-sm-12">
                <div class="pull-left">
                    <h4><?php echo e(__('user.edit_new_user')); ?></h4>
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
                <?php echo Form::model($user, ['method' => 'PATCH','route' => ['users.update', $user->id]]); ?>

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong><?php echo e(__('user.name')); ?>:</strong>
                            <?php echo Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')); ?>

                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong><?php echo e(__('user.emp_id')); ?>:</strong>
                            <?php echo Form::text('employee_id', null, array('placeholder' => 'Employee ID','class' => 'form-control')); ?>

                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong><?php echo e(__('user.branch')); ?>:</strong>
                            <select class="form-control" id="branch_name" name="branch_id[]" multiple required focus>
                                <?php $__currentLoopData = $branches; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $branch): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($branch->branch_id); ?>" <?php echo e(in_array($branch->branch_id,$userBranches) ? 'selected': ''); ?>> <?php echo e($branch->branch_name_eng); ?> </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong><?php echo e(__('user.phone')); ?>:</strong>
                            <?php echo Form::text('ph_no', null, array('placeholder' => 'Phone No','class' => 'form-control')); ?>

                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong><?php echo e(__('user.email')); ?>:</strong>
                            <?php echo Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')); ?>

                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong><?php echo e(__('user.password')); ?>:</strong>
                            <?php echo Form::password('password', array('placeholder' => 'Password','class' => 'form-control')); ?>

                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong><?php echo e(__('user.confirm_password')); ?>:</strong>
                            <?php echo Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')); ?>

                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong><?php echo e(__('user.role')); ?>:</strong>
                            <?php echo Form::select('roles[]', $roles,$userRole, array('class' => 'form-control')); ?>

                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-left">
                        <button type="submit" class="btn btn-primary mr-2"><?php echo e(__('button.update')); ?></button>
                        <a class="btn btn-light" href="<?php echo e(route('users.index')); ?>"><?php echo e(__('button.back')); ?></a>
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
    $('#branch_name').select2({
        width: '100%',
        allowClear: true,
    });
    $(document).ready(function() {
        var url = window.location.origin;
        $('#branch_name').click(function() {
            var id = $(this).val();
            $('#dept_id').find('option').remove();
            $.ajax({
                // url: url + '/dept/'+id,
                url: url + '/users/branch/' + id,
                type: 'get',
                dataType: 'json',
                success: function(response) {
                    var len = 0;
                    if (response.data != null) {
                        len = response.data.length;
                    }
                    if (len > 0) {
                        for (var i = 0; i < len; i++) {
                            var id = response.data[i].id;
                            var name = response.data[i].name;
                            var option = "<option value='" + id + "'>" + name + "</option>";
                            $("#dept_id").append(option);
                        }
                    }
                }
            })
        });
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/product_pickup_monitoring_system/resources/views/users/edit.blade.php ENDPATH**/ ?>