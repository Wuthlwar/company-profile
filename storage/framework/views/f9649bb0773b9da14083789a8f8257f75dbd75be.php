<?php $__env->startSection('content'); ?>
<div class="content-page">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="d-flex flex-wrap flex-wrap align-items-center justify-content-between mb-4">
          <div>
            <h4 class="mb-3"><?php echo e(__('pickup.pickup_lists')); ?></h4>
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
          <label><?php echo e(__('pickup.pickup_date')); ?> </label>
          <input type="date" class="form-control" id="pickup_date_box" value="<?php echo e($old_pickup_date_box); ?>">
        </div>
        <div class="form-row col-md-2">
          <label><?php echo e(__('pickup.invoice_no')); ?> </label>
          <input type="input" class="form-control" id="invoice_no_box" value="<?php echo e($old_invoice_no); ?>">
        </div>
        <!-- <div class="form-row col-md-2">
          <label><?php echo e(__('pickup.pickup_no')); ?> </label>
          <input type="number" min="0" step="1" class="form-control" id="pickup_no_box" value="<?php echo e($old_pickup_no_box); ?>">
        </div> -->
        <div class="form-row col-md-2">
          <label><?php echo e(__('pickup.picking_no')); ?> </label>
          <input type="input" class="form-control" id="picking_no" value="<?php echo e($old_picking_no); ?>">
        </div>
        <div class="form-row col-md-2">
          <label><?php echo e(__('pickup.status')); ?> </label>
          <select class="form-control" id="pickup_status">
            <option value="">Select Status</option>
            <option value="1" <?php echo e($old_pickup_status == 1 ? 'selected' : ''); ?>>Processing</option>
            <option value="4" <?php echo e($old_pickup_status == 4 ? 'selected' : ''); ?>>Unfinish</option>
            <option value="2" <?php echo e($old_pickup_status == 2 ? 'selected' : ''); ?>>Ready to Loading</option>
            <option value="3" <?php echo e($old_pickup_status == 3 ? 'selected' : ''); ?>>Finish</option>
          </select>
        </div>


        <button id="search" class="btn btn-primary main_button mr-2"><?php echo e(__('button.search')); ?></button>
        
        <button class="btn btn-secondary main_button" onclick=location.href="<?php echo e(route('pickups.create')); ?>"><?php echo e(__('button.add_new')); ?></button>
        
      </div>
    </div>
  </div>
  <div class="col-lg-12">
    <div class="table-responsive rounded mb-3">
      <table class="table mb-0 tbl-server-info" id="pickup_list">
        <thead class="bg-white text-uppercase">
          <tr class="ligth ligth-data">
            <th><?php echo e(__('pickup.pickup_no')); ?></th>
            <th><?php echo e(__('pickup.pickup_date')); ?></th>
            <th><?php echo e(__('pickup.invoice_no')); ?></th>
            <th><?php echo e(__('pickup.picking_no')); ?></th>
            <th><?php echo e(__('pickup.customer_name')); ?></th>
            <th><?php echo e(__('pickup.load_qty')); ?></th>
            <th><?php echo e(__('pickup.start_time')); ?></th>
            <th><?php echo e(__('pickup.loading_finish_time')); ?></th>
            <th><?php echo e(__('pickup.end_time')); ?></th>
            <th><?php echo e(__('pickup.status')); ?></th>
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

    table = $('#pickup_list').DataTable({
      "processing": true,
      "serverSide": true,
      "searching": false,
      "lengthChange": false,
      "autoWidth": true,
      "responsive": true,
      "ordering": false,
      'ajax': {
        'url': "/pickups",
        'type': 'GET',
        'data': function(d) {
          d.pickup_date_box = $('#pickup_date_box').val();
          d.picking_no = $('#picking_no').val();
          d.invoice_no_box = $('#invoice_no_box').val();
          d.pickup_no_box = $('#pickup_no_box').val();
          d.pickup_status = $('#pickup_status').val();
        }
      },
      columns: [{
          data: 'pickup_no',
          name: 'pickup_no',
          render: function(data, type, row) {
            return `<div class="black">
                        <a class="" title="Detail"
                            href="/pickups/${row.uuid}/edit">
                            <span class="">${data}</span>
                            </a>
                    </div>`
          }
        },
        {
          data: 'pickup_date',
          name: 'pickup_date',
          render: function(data, type, row) {
            return `<div class="black">
                        <a class="" title="Detail"
                            href="/pickups/${row.uuid}/edit">
                            <span class="">${data}</span>
                            </a>
                    </div>`
          }
        },
        {
          data: 'invoice_no',
          name: 'invoice_no',
          render: function(data, type, row) {
            return `<div class="black">
                        <a class="" title="Detail"
                            href="/pickups/${row.uuid}/edit">
                            <span class="">${data}</span>
                            </a>
                    </div>`
          }
        },
        {
          data: 'picking_no',
          name: 'picking_no',
          render: function(data, type, row) {
            return `<div class="black">
                        <a class="" title="Detail"
                            href="/pickups/${row.uuid}/edit">
                            <span class="">${data}</span>
                            </a>
                    </div>`
          }
        },
        {
          data: 'customer_name',
          name: 'customer_name',
          render: function(data, type, row) {
            return `<div class="black">
                        <a class="" title="Detail"
                            href="/pickups/${row.uuid}/edit">
                            <span class="">${data}</span>
                            </a>
                    </div>`
          }
        },
        {
          data: 'load_qty',
          name: 'load_qty',
          render: function(data, type, row) {
            return `<div class="black">
                        <a class="" title="Detail"
                            href="/pickups/${row.uuid}/edit">
                            <span class="">${data}</span>
                            </a>
                    </div>`
          }
        },
        {
          data: 'start_time',
          name: 'start_time',
          render: function(data, type, row) {
            return `<div class="black">
                        <a class="" title="Start Time"
                            href="/pickups/${row.uuid}/edit">
                            <span class="">${data}</span>
                            </a>
                    </div>`
          }
        },
        {
          data: 'loading_finish_time',
          name: 'loading_finish_time',
          render: function(data, type, row) {
            if (data == null) {
              return '';
            }
            return `<div class="black">
                        <a class="" title="Loading Finish Time"
                            href="/pickups/${row.uuid}/edit">
                            <span class="">${data}</span>
                            </a>
                    </div>`
          }
        },
        {
          data: 'end_time',
          name: 'end_time',
          render: function(data, type, row) {
            if (data == null) {
              return '';
            }
            return `<div class="black">
                        <a class="" title="End Time"
                            href="/pickups/${row.uuid}/edit">
                            <span class="">${data}</span>
                            </a>
                    </div>`;
          }
        },
        {
          data: 'status',
          name: 'status',
          render: function(data, type, row) {
            if (data == 'onprogress') {
              return `<span class="onprogress status_design">Processing</span>`;
            }
            if (data == 'over') {
              return `<span class="over status_design">Unfinish</span>`;
            }
            if (data == 'ready_to_loading') {
              return `<span class="ready_to_loading status_design">RTLoading</span>`;
            }
            if (data == 'finish') {
              return `<span class="finish status_design">Finish</span>`;
            }
          }
        },
        {
          data: 'action',
          name: 'action',
          render: function(data, type, row) {
            return `<div class="d-flex align-items-center list-action">
                        <a class="badge bg-primary mr-2" title="Detail"
                            href="/pickups/${row.uuid}/edit"><i class="ri-edit-line mr-0"></i></a>
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

    $('#search').on('click', function(e) {
      $('#pickup_list').DataTable().draw(true);
    })

    table.on('click', '#delete', function(e) {
      e.preventDefault();
      Swal.fire({
        icon: 'warning',
        title: "<?php echo e(__('message.warning')); ?>",
        text: "<?php echo e(__('message.delete')); ?>",
        showCancelButton: true,
        cancelButtonText: "<?php echo e(__('message.cancel')); ?>",
        confirmButtonText: "<?php echo e(__('message.ok')); ?>"
      }).then((result) => {
        if (result.isConfirmed) {
          var user_uuid = $(this).data('user_uuid');
          var token = $("meta[name='csrf-token']").attr("content");
          $.ajax({
            url: '/questions/' + user_uuid,
            type: 'Delete',

            data: {
              "_token": token,
              "user_uuid": user_uuid,
            },
            beforeSend: function() {
              jQuery("#load").fadeOut();
              jQuery("#loading").show();
            },
            complete: function() {
              jQuery("#loading").hide();
            },
            success: function(response) {
              if (response.error) {
                Swal.fire(`<?php echo e(__('message.validation_error')); ?>`, '', 'info').then(function() {
                  $('#question_list').DataTable().draw(true);
                })
              }
              if (response.success) {
                Swal.fire(`<?php echo e(__('message.deleted')); ?>`, '', 'info').then(function() {
                  $('#question_list').DataTable().draw(true);
                })
              }

            }
          });
        }
      });
    });
  });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/product_pickup_monitoring_system/resources/views/pickups/index.blade.php ENDPATH**/ ?>