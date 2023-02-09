<style>
    td,
    th {
        border: 1px solid #000;
    }

    .title {
        word-wrap: break-word;
        text-align: center;
        margin: auto;
    }
</style>

<table class="table table-striped table-hover table-bordered bg-white ">

    <tr height="15">
        <td colspan="11" style="font-family:'Times New Roman'; font-size:14; font-weight: bold; color:black; word-wrap: break-word; text-align:center; margin:auto;">Process Status Report</td>
    </tr>
    <tr>
        <th style="font-weight: bold; width:100px">Branch</th>
        <th style="font-weight: bold; width:100px">Pickup Date</th>
        <th style="font-weight: bold; width:200px">Invoice No</th>
        <th style="font-weight: bold; width:200px">Picking List No</th>
        <th style="font-weight: bold; width:200px">Customer Name</th>
        <th style="font-weight: bold; width:60px">Load Qty</th>
        <th style="font-weight: bold; width:120px">Start Time</th>
        <th style="font-weight: bold; width:120px">RL Date</th>
        <th style="font-weight: bold; width:120px">RL Time</th>
        <th style="font-weight: bold; width:120px">RL Duration(H:M)</th>
        <th style="font-weight: bold; width:120px">End Date</th>
        <th style="font-weight: bold; width:120px">End Time</th>
        <th style="font-weight: bold; width:120px">Duration(H:M)</th>
        <th style="font-weight: bold; width:120px">Remark</th>
    </tr>
    <?php $i=1 ?>
    <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <?php
        if(isset($r->branch)){
        $branch = $r->branch->branch_name_eng;
        }else{
        $branch = 'Not Choosed';
        }
        ?>
        <th>
            <?php echo e($branch); ?>

        </th>
        <?php
        $pickup_date = date('d/m/Y', strtotime($r->ship_doc_datenow))
        ?>
        <th>
            <?php echo e($pickup_date); ?>

        </th>
        <th>
            <?php echo e($r->invoice_no); ?>

        </th>
        <th>
            <?php echo e($r->picking_no); ?>

        </th>
        <th>
            <?php echo e($r->customer_name); ?>

        </th>
        <th>
            <?php echo e($r->load_qty); ?>

        </th>

        <?php
        $start_time = date('h:i:s A', strtotime($r->start_time))
        ?>
        <th>
            <?php echo e($start_time); ?>

        </th>

        <?php if($r->loading_finish_time): ?>
        <th><?php echo e(date('d/m/Y', strtotime($r->loading_finish_time))); ?></th>
        <?php else: ?>
        <th>
        </th>
        <?php endif; ?>

        <?php if($r->loading_finish_time): ?>
        <th><?php echo e(date('h:i:s A', strtotime($r->loading_finish_time))); ?></th>
        <?php else: ?>
        <th>
        </th>
        <?php endif; ?>
        <?php
        $startTime = Carbon\Carbon::parse($r->start_time);
        $rl_finish_time = Carbon\Carbon::parse($r->loading_finish_time);

        $rl_duration = $rl_finish_time->diffInSeconds($startTime);

        $rl_duration = gmdate('H:i', $rl_duration);
        if ($r->loading_finish_time == null) {
        $rl_duration = '';
        }
        ?>
        <th>
            <?php echo e($rl_duration); ?>

        </th>
        <?php if($r->end_time): ?>
        <th><?php echo e(date('d/m/Y', strtotime($r->end_time))); ?></th>
        <?php else: ?>
        <th>
        </th>
        <?php endif; ?>

        <?php if($r->end_time): ?>
        <th><?php echo e(date('h:i:s A', strtotime($r->end_time))); ?></th>
        <?php else: ?>
        <th>
        </th>
        <?php endif; ?>

        <?php
        $startTime = Carbon\Carbon::parse($r->start_time);
        $endTime = Carbon\Carbon::parse($r->end_time);

        $duration = $endTime->diffInSeconds($startTime);

        $duration = gmdate('H:i', $duration);
        if ($r->end_time == null) {
        $duration = '';
        }
        ?>
        <th>
            <?php echo e($duration); ?>

        </th>
        <?php
        if (isset($r->manual_remark))
        $remark = $r->manual_remark->remark;
        else
        $remark = '-';
        ?>
        <th>
            <?php echo e($remark); ?>

        </th>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</table>
<?php /**PATH /var/www/product_pickup_monitoring_system/resources/views/reports/excel_process_form.blade.php ENDPATH**/ ?>