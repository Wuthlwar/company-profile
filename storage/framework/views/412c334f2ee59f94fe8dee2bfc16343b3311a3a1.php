<?php $__env->startSection('content'); ?>
<div class="content-page">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="d-flex flex-wrap flex-wrap align-items-center justify-content-between mb-4">
          <div>
            <h4 class="mb-3"><?php echo e(__('pickup.process_status')); ?></h4>
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
          <label><?php echo e(__('pickup.branch')); ?> </label>
          <select class="form-control" id="pickup_branch">
            <option value="">Select Branch</option>
            <?php $__currentLoopData = $branches; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $branch): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($branch->branch_id); ?>" <?php echo e($old_pickup_branch == $branch->branch_id ? 'selected' : ''); ?>><?php echo e($branch->branch_name_eng); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </select>
        </div>
        <div class="form-row col-md-2">
          <label><?php echo e(__('pickup.start_date')); ?> </label>
          <input type="date" class="form-control" id="pickup_start_date" value="<?php echo e($old_pickup_start_date); ?>">
        </div>
        <div class="form-row col-md-2">
          <label><?php echo e(__('pickup.end_date')); ?> </label>
          <input type="date" class="form-control" id="pickup_end_date" value="<?php echo e($old_pickup_end_date); ?>">
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
      </div>
      <div class="col-lg-12 d-flex mb-4">
        <div class="form-row col-md-2">
          <label><?php echo e(__('pickup.status')); ?> </label>
          <select class="form-control" id="pickup_status">
            <option value="">Select Status</option>
            <option value="1" <?php echo e($old_pickup_remark == 1 ? 'selected' : ''); ?>>Processing</option>
            <option value="4" <?php echo e($old_pickup_remark == 4 ? 'selected' : ''); ?>>Unfinish</option>
            <option value="2" <?php echo e($old_pickup_remark == 2 ? 'selected' : ''); ?>>Ready to Loading</option>
            <option value="3" <?php echo e($old_pickup_remark == 3 ? 'selected' : ''); ?>>Finish</option>

          </select>
        </div>
        <div class="form-row col-md-2">
          <label><?php echo e(__('pickup.remark')); ?> </label>
          <select class="form-control" id="pickup_remark">
            <option value="">Select Remark</option>
            <?php $__currentLoopData = $remarks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $remark): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($remark->id); ?>" <?php echo e($old_pickup_remark == $remark->id ? 'selected' : ''); ?>><?php echo e($remark->remark); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </select>
        </div>

        <div class="form-row col-md-2" id="dashboard_remark_div">
          <label><?php echo e(__('pickup.dashboard_remark')); ?> </label>
          <select class="form-control" id="dashboard_remark">
            <option value="">Select Dashboard Remark</option>
            <option value="100" <?php echo e($old_pickup_remark == 100 ? 'selected' : ''); ?>>Finished in 10 minutes</option>
            <option value="150" <?php echo e($old_pickup_remark == 150 ? 'selected' : ''); ?>>Finished in 10 to 15 minutes</option>
            <option value="151" <?php echo e($old_pickup_remark == 151 ? 'selected' : ''); ?>>Finished in over 15 minutes</option>
            <option value="200" <?php echo e($old_pickup_remark == 200 ? 'selected' : ''); ?>>Finished in 10 minutes to RL</option>
            <option value="250" <?php echo e($old_pickup_remark == 250 ? 'selected' : ''); ?>>Finished in 10 to 15 minutes to RL</option>
            <option value="251" <?php echo e($old_pickup_remark == 251 ? 'selected' : ''); ?>>Finished in over 15 minutes to RL</option>
          </select>
        </div>

        <button id="search" class="btn btn-primary main_button mr-2"><?php echo e(__('button.search')); ?></button>
        
        <button class="btn btn-success main_button" onclick=location.href="<?php echo e(route('pickups.excel_export')); ?>"><?php echo e(__('button.export')); ?></button>
        
      </div>

    </div>
  </div>
  <div class="col-lg-12">
    <div class="table-responsive rounded mb-3">
      <table class="table mb-0 tbl-server-info" id="pickup_list">
        <thead class="bg-white text-uppercase">
          <tr class="ligth ligth-data">
            <th><?php echo e(__('pickup.branch')); ?></th>
            <th><?php echo e(__('pickup.pickup_date')); ?></th>
            <th><?php echo e(__('pickup.invoice_no')); ?></th>
            <th><?php echo e(__('pickup.picking_no')); ?></th>
            <th><?php echo e(__('pickup.customer_name')); ?></th>
            <th><?php echo e(__('pickup.load_qty')); ?></th>
            <th><?php echo e(__('pickup.start_time')); ?></th>
            <th><?php echo e(__('pickup.loading_finish_time')); ?></th>
            <th><?php echo e(__('pickup.rl_duration')); ?> (H:M)</th>
            <th><?php echo e(__('pickup.end_time')); ?></th>
            <th><?php echo e(__('pickup.duration')); ?> (H:M)</th>
            <th><?php echo e(__('pickup.remark')); ?></th>
            <th><?php echo e(__('pickup.status')); ?></th>
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
    $('#dashboard_remark_div').hide();

    $('#pickup_status').on('change', function() {
      if (this.value == 3) {
        $('#dashboard_remark_div').show();
      } else {
        $('#dashboard_remark_div').hide();
      };
    })


    table = $('#pickup_list').DataTable({
      "processing": true,
      "serverSide": true,
      "searching": false,
      "lengthChange": false,
      "autoWidth": true,
      "responsive": true,
      "ordering": false,
      'ajax': {
        'url': "/process_status",
        'type': 'GET',
        'data': function(d) {
          d.pickup_branch = $('#pickup_branch').val();
          d.pickup_start_date = $('#pickup_start_date').val();
          d.pickup_end_date = $('#pickup_end_date').val();
          d.picking_no = $('#picking_no').val();
          d.invoice_no_box = $('#invoice_no_box').val();
          d.pickup_no_box = $('#pickup_no_box').val();
          d.pickup_status = $('#pickup_status').val();
          d.pickup_remark = $('#pickup_remark').val();
          d.dashboard_remark = $('#dashboard_remark').val();
        }
      },
      columns: [{
          data: 'branch_id',
          name: 'branch_id',
          render: function(data, type, row) {
            return `<div class="black">${data}</div>`
          }
        },
        {
          data: 'pickup_date',
          name: 'pickup_date',
          render: function(data, type, row) {
            return `<div class="black">${data}</div>`
          }
        },
        {
          data: 'invoice_no',
          name: 'invoice_no',
          render: function(data, type, row) {
            return `<div class="black">${data}</div>`
          }
        },
        {
          data: 'picking_no',
          name: 'picking_no',
          render: function(data, type, row) {
            return `<div class="black">${data}</div>`
          }
        },
        {
          data: 'customer_name',
          name: 'customer_name',
          render: function(data, type, row) {
            return `<div class="black">${data}</div>`
          }
        },
        {
          data: 'load_qty',
          name: 'load_qty',
          render: function(data, type, row) {
            return `<div class="black">${data}</div>`
          }
        },
        {
          data: 'start_time',
          name: 'start_time',
          render: function(data, type, row) {
            return `<div class="black">${data}</div>`
          }
        },
        {
          data: 'loading_finish_time',
          name: 'loading_finish_time',
          render: function(data, type, row) {
            if (data == null) {
              return '';
            }
            return `<div class="black">${data}</div>`;
          }
        },
        {
          data: 'rl_duration',
          name: 'rl_duration',
          render: function(data, type, row) {
            if (data == null) {
              return '';
            }
            return `<div class="black">${data}</div>`;
          }
        },
        {
          data: 'end_time',
          name: 'end_time',
          render: function(data, type, row) {
            if (data == null) {
              return '';
            }
            return `<div class="black">${data}</div>`
          }
        },
        {
          data: 'duration',
          name: 'duration',
          render: function(data, type, row) {
            return `<div class="black">${data}</div>`
          }
        },

        {
          data: 'manual_remark',
          name: 'manual_remark',
          render: function(data, type, row) {
            return `<div class="black">${data}</div>`
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

  });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/product_pickup_monitoring_system/resources/views/reports/index.blade.php ENDPATH**/ ?>