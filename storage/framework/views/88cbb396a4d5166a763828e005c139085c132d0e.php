<?php $__env->startSection('content'); ?>
<div class="content-page">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="d-flex flex-wrap flex-wrap align-items-center justify-content-between mb-4">
          <div>
            <h4 class="mb-3"><?php echo e(__('user.users')); ?></h4>
          </div>
        </div>
      </div>
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
      <div class="col-lg-12 d-flex mb-4">
        <div class="form-row col-md-2">
          <label><?php echo e(__('user.name')); ?> </label>
          <input type="input" class="form-control" id="user_name" value="">
        </div>
        <div class="form-row col-md-1">
          <label><?php echo e(__('user.user_phone_no')); ?> </label>
          <input type="input" class="form-control" id="user_phone_no" value="">
        </div>
        <div class="form-row col-md-2">
          <label><?php echo e(__('user.email')); ?></label>
          <input type="input" class="form-control" id="user_email" value="">
        </div>
            <button id="user_search" class="btn btn-primary main_button mr-2"><?php echo e(__('button.search')); ?></button>
            <button id="user_add" class="btn btn-secondary main_button" onclick=location.href="<?php echo e(route('users.create')); ?>"><?php echo e(__('button.add_new')); ?></button>
   
        <!-- <button id="user_syn" class="btn btn-success document_search mr-2">Syn Member</button> -->
        </div>
    </div>
  </div>
  <div class="col-lg-12">
    <div class="table-responsive rounded mb-3">
      <table class="table mb-0 tbl-server-info" id="user_list">
        <thead class="bg-white text-uppercase">
          <tr class="ligth ligth-data">
            <th><?php echo e(__('user.name')); ?></th>
            <th><?php echo e(__('user.phone')); ?></th>
            <th><?php echo e(__('user.email')); ?></th>
            <th><?php echo e(__('user.role')); ?></th>
            <th><?php echo e(__('user.action')); ?></th>
          </tr>
        </thead>
        <tbody class="ligth-body">
        </tbody>
      </table>
    </div>
  </div>
</div>
</div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<script>
  $(document).ready(function() {

    $('#user_list').DataTable({
      "processing": true,
      "serverSide": true,
      "searching": false,
      "lengthChange": false,
      "autoWidth": true,
      "responsive": true,
      "order": [
        [1, 'des']
      ],
      'ajax': {
        'url': "/users",
        'type': 'GET',
        'data': function(d) {
          d.user_name = $('#user_name').val();
          d.user_phone_no = $('#user_phone_no').val();
          d.user_email = $('#user_email').val();
        }
      },
      columns: [
        {
          data: 'name',
          name: 'name',
          orderable: true
        },
        {
          data: 'phone_no',
          name: 'phone_no',
          orderable: true
        },
        {
          data: 'email',
          name: 'email',
          orderable: true
        },
        {
          data: 'role',
          name: 'role',
          orderable: true,
          render: function(data, type, row) {
            return data; 
          }
        },
        {
          data: 'action',
          name: 'action',
          orderable: false,
          render: function(data, type, row) {
            return `<div class="d-flex align-items-center list-action">
                        <a class="badge bg-success mr-2" data-toggle="tooltip" data-placement="top" title="Detail" data-original-title="Detail"
                            href="/users/${row.id}"><i class="ri-eye-line mr-0"></i></a>
                        <a class="badge bg-primary mr-2" data-toggle="tooltip" data-placement="top" title="Detail" data-original-title="Detail"
                            href="/users/${row.id}/edit"><i class="ri-edit-line mr-0"></i></a> 
                    </div>`
          }
        }
      ],
      "columnDefs": [{
        "searchable": false,
        "orderable": false,
        "targets": 0,
      }],
    })

    $('#user_search').on('click', function(e) {
      $('#user_list').DataTable().draw(true);
    })
  });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/product_pickup_monitoring_system/resources/views/users/index.blade.php ENDPATH**/ ?>