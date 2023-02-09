<?php $__env->startSection('content'); ?>
<div class="card mb-4">
    <div class="card-header bg-primary text-white">
        <strong>Activity</strong><span class="small ms-1"></span></div>
    <div class="card-body table-responsive">
        <?php if($act->id!=null): ?>
            <form action="<?php echo e(route('activities.update',$act->id)); ?>" method="POST" enctype="multipart/form-data">
                <?php echo method_field('PATCH'); ?>
        <?php else: ?>
            <form action="<?php echo e(route('activities.store')); ?>" method="POST" enctype="multipart/form-data">
        <?php endif; ?>
            <?php echo csrf_field(); ?>
            <div class="row">
                <div class="mb-3 col-6">
                    <label class="form-label" for="activity_type_id">Activity Type</label>
                    <select class="form-select" aria-label="Default select example" name="activity_type_id">
                        <option>Select Activity Type</option>
                        <?php $__currentLoopData = $act_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($type->id==$act->activity_type_id): ?>
                                <option value="<?php echo e($type->id); ?>" selected><?php echo e($type->name); ?></option>
                            <?php else: ?>
                                <option value="<?php echo e($type->id); ?>"><?php echo e($type->name); ?></option>
                            <?php endif; ?>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </select>
                </div>
                <div class="mb-3 col-6">
                    <label class="form-label" for="title">Activity Title</label>
                    <input class="form-control" id="title" type="text" placeholder="name@example.com" name="title" value="<?php echo e(old('title',$act->title)); ?>">
                </div>

                <div class="mb-3 col-6">
                    <label class="form-label" for="description">Description</label>
                   <textarea class="form-control" name="description" id="" cols="30" rows="5"><?php echo e($act->description); ?></textarea>
                </div>
                <div class="mb-3 col-6">
                    <label class="form-label" for="location">location</label>
                    <input class="form-control" id="location" type="text" placeholder="" name="location" value="<?php echo e(old('location',$act->location)); ?>">
                </div>
                <div class="row fieldContainer">
                <div class="mb-3 col-6">
                    <label class="form-label" for="date">Date</label>
                    <input class="form-control" id="date" type="date" placeholder="" name="date" value="<?php echo e(old('date',$act->date)); ?>">
                </div>

                <div class="mb-3 col-6">
                    <label class="form-label" for="preview_img">First Image</label>
                    <input class="form-control" id="preview_img" type="file" placeholder="" name="preview_img">
                </div>
                <div class="mb-3 col-6">
                    <label class="form-label" for="preview_img">Other Images</label>
                    <input class="form-control" id="preview_img" type="file" placeholder="" name="file">
                    <button class="btn btn-success mt-2" type="button" id="addBtn">Add More</button>
                </div>
                </div>
                <div class="row">

                        <?php if($act->preview_img!==null): ?>
                        <div class="card col-2 m-1">
                            <img src="<?php echo e(asset("storage/uploads/activity/$act->preview_img")); ?>" alt="<?php echo e($act->preview_img); ?>" class="card-img-top rounded img-fluid mt-3">

                            <div class="card-body">
                                <p>First Image</p>
                            </div>
                        </div>
                        <?php endif; ?>
                        <?php if(count($act->act_imgs)!=0): ?>
                        <div class="card row m-1">
                            <?php $__currentLoopData = $act->act_imgs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class=" col-2 m-1">
                                <img src="<?php echo e(asset("storage/uploads/activity_images/$img->file")); ?>" alt="<?php echo e($img->name); ?>" class="card-img-top rounded img-fluid mt-3"/>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <div class="card-body">
                                <p>Other Images</p>
                            </div>
                        </div>

                        <?php endif; ?>
                </div>

                <div class="mb-3">
                    <button class="btn btn-success" type="submit">Save</button>
                    <a class="btn btn-warning" href="<?php echo e(route('activities.index')); ?>">Cancel</a>
                </div>
            </div>

        </form>


    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script type="text/javascript">
    $(document).ready(function(){
        var maxField = 10;
        console.log(maxField);
        var addBtn = $('#addBtn');
        var wrapper = $('.fieldContainer');
        var fieldHTML = '<div class="mb-3 col-6"><input class="form-control" id="preview_img" type="file" placeholder="" name="file[]"><button class="btn btn-danger mt-2" type="button" id="removeBtn">Remove</button></div>';
        var x=1;
        $(addBtn).click(function () {
            if(x < maxField) {
                x++;
                $(wrapper).append(fieldHTML);
            }
        });
       $(wrapper).on('click','#removeBtn', function (e) {
           e.preventDefault();
           $(this).parent('div').remove();
           x--;
       });
    });

</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admins.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/current_projects/company-profile/resources/views/admins/activities/create-edit.blade.php ENDPATH**/ ?>