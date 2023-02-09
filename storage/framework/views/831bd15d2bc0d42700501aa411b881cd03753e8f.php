<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?php echo e(config('app.name', 'Laravel')); ?></title>

  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
  <!-- Favicon -->
  <link rel="shortcut icon" href="<?php echo e(asset('pickup/img/logos/favicon.png')); ?>" />
  <link rel="stylesheet" href="<?php echo e(asset('css/backend-plugin.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('css/backend.css?v=1.0.0')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('css/select2.css')); ?>" />
  <link rel="stylesheet" href="<?php echo e(asset('css/select2.min.css')); ?>" />
  <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
  <!-- <link rel="stylesheet" href="<?php echo e(asset('css/rowReorder.dataTables.min.css')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset('css/responsive.dataTables.min.css')); ?>"> -->
  <link rel="stylesheet" href="<?php echo e(asset('vendor/@fortawesome/fontawesome-free/css/all.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('vendor/remixicon/fonts/remixicon.css')); ?>">
  <?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body class="  ">
  <!-- loader Start -->
  <div id="loading">
    <div id="loading-center">
    </div>
  </div>
  <!-- loader END -->
  <!-- Wrapper Start -->
  <div class="wrapper">

    <div class="iq-sidebar  sidebar-default ">
      <div class="iq-sidebar-logo d-flex align-items-center justify-content-between">
        <a href="<?php echo e(route('home')); ?>" class="header-logo">
          <img src="<?php echo e(asset('pickup/img/logos/logo.png')); ?>" class="img-fluid rounded-normal light-logo" alt="logo">
          <h5 class="logo-title light-logo ml-3">Loading Status</h5>
        </a>
        <div class="iq-menu-bt-sidebar ml-0">
          <i class="las la-bars wrapper-menu"></i>
        </div>
      </div>

      <?php if ($__env->exists('layouts.nav')) echo $__env->make('layouts.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <!-- header -->
    <?php if ($__env->exists('layouts.header')) echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- header -->
    <?php echo $__env->yieldContent('content'); ?>

  </div>

  <!-- Backend Bundle JavaScript -->
  <script src="<?php echo e(asset('js/backend-bundle.min.js')); ?>"></script>

  <!-- Table Treeview JavaScript -->
  <script src="<?php echo e(asset('js/table-treeview.js')); ?>"></script>

  <!-- Chart Custom JavaScript -->
  <script src="<?php echo e(asset('js/customizer.js')); ?>"></script>

  <!-- select 2 -->
  <script src="<?php echo e(asset('js/select2.min.js')); ?>"></script>

  <!-- Chart Custom JavaScript -->
  <script async src="<?php echo e(asset('js/chart-custom.js')); ?>"></script>

  <!-- app JavaScript -->
  <script src="<?php echo e(asset('js/app.js')); ?>"></script>
  <script src="<?php echo e(asset('js/progress-bar.js')); ?>"></script>
  <!-- <script src="<?php echo e(asset('js/dataTables.responsive.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/dataTables.rowReorder.min.js')); ?>"></script> -->

  <?php echo $__env->yieldContent('js'); ?>
</body>

</html><?php /**PATH /var/www/product_pickup_monitoring_system/resources/views/layouts/app.blade.php ENDPATH**/ ?>