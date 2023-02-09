<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title><?php echo e(config('app.name', 'Laravel')); ?></title>
      
      <!-- Favicon -->
      <link rel="shortcut icon" href="<?php echo e(asset('images/logo.png')); ?>" />
      <link rel="stylesheet" href="<?php echo e(asset('css/backend-plugin.min.css')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset('css/backend.css?v=1.0.0')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset('vendor/@fortawesome/fontawesome-free/css/all.min.css')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset('vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset('vendor/remixicon/fonts/remixicon.css')); ?>">  </head>
  <body class=" ">
    <!-- loader Start -->
    <div id="loading">
          <div id="loading-center">
          </div>
    </div>
    <!-- loader END -->

      <div class="wrapper">
      <section class="login-content">
         <div class="container">
            <div class="row align-items-center justify-content-center height-self-center">
               <div class="col-lg-8">
               <a onclick="openCloseFullscreen();" class="mr-2"><i class="ri-fullscreen-line"></i></a>
                  <div class="card auth-card">
                     <div class="card-body p-0">
                        <div class="d-flex align-items-center auth-content">
                           <div class="col-lg-7 align-self-center">
                              <div class="p-3">
                                 <h2 class="mb-2">Sign In</h2>
                                 <p>Login to stay connected.</p>
                                 <form action="<?php echo e(route('login')); ?>" method="POST">
                                    <?php echo e(csrf_field()); ?>

                                    <div class="row">
                                       <div class="col-lg-12">
                                          <div class="floating-label form-group">
                                                <input class="floating-input form-control"  name="login_value" value="<?php echo e(old('login_value')); ?>" placeholder="" autofocus required>
                                                <label>Employee ID</label>
                                                 <?php if($errors->has('login_value')): ?>
                                                <div class="invalid-feedback  d-block">
                                                    <strong><?php echo e($errors->first('login_value')); ?></strong>
                                                </div>
                                                <?php endif; ?>
                                          </div>
                                                
                                       </div>
                                    
                                       <div class="col-lg-12">
                                            <div class="floating-label form-group">
                                                <input class="floating-input form-control" name="password" type="password" placeholder="" required>
                                                <label>Password</label>
                                                <?php if($errors->has('password')): ?>
                                                    <div class="invalid-feedback">
                                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                       </div>
                                     
                                       <div class="col-lg-6">
                                          <div class="custom-control custom-checkbox mb-3">
                                             <input type="checkbox" name="remember_me" class="custom-control-input" id="remember_me">
                                             <label class="custom-control-label control-label-1" for="remember_me">Remember Me</label>
                                          </div>
                                       </div>
                                       <div class="col-lg-6">
                                          <a href="<?php echo e(route('password.request')); ?>" class="text-primary float-right">Forgot Password?</a>
                                       </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Sign In</button>
                        
                                 </form>
                              </div>
                           </div>
                           <div class="col-lg-5 content-right">
                              <img src="<?php echo e(asset('images/login/login-image.png')); ?>" class="img-fluid image-right" alt="">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      </div>
    
    <!-- Backend Bundle JavaScript -->
    <script src="<?php echo e(asset('js/backend-bundle.min.js')); ?>"></script>
    
    <!-- Table Treeview JavaScript -->
    <script src="<?php echo e(asset('js/table-treeview.js')); ?>"></script>
    
    <!-- Chart Custom JavaScript -->
    <script src="<?php echo e(asset('js/customizer.js')); ?>"></script>
    
    <!-- Chart Custom JavaScript -->
    <script async src="<?php echo e(asset('js/chart-custom.js')); ?>"></script>
    
    <!-- app JavaScript -->
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>

    <script>
        function forceFullscreen()
        {
            top.resizeTo(window.screen.abailwidth, window.screen.availHeight);
            top.moveTo(0,0);
        }
        function openCloseFullscreen() {
            var isInFullScreen = (document.fullscreenElement && document.fullscreenElement !== null) ||
                (document.webkitFullscreenElement && document.webkitFullscreenElement !== null) ||
                (document.mozFullScreenElement && document.mozFullScreenElement !== null) ||
                (document.msFullscreenElement && document.msFullscreenElement !== null);

            var docElm = document.documentElement;
            if (!isInFullScreen) {
                if (docElm.requestFullscreen) {
                    docElm.requestFullscreen();
                } else if (docElm.mozRequestFullScreen) {
                    docElm.mozRequestFullScreen();
                } else if (docElm.webkitRequestFullScreen) {
                    docElm.webkitRequestFullScreen();
                } else if (docElm.msRequestFullscreen) {
                    docElm.msRequestFullscreen();
                }
            } else {
                if (document.exitFullscreen) {
                    document.exitFullscreen();
                } else if (document.webkitExitFullscreen) {
                    document.webkitExitFullscreen();
                } else if (document.mozCancelFullScreen) {
                    document.mozCancelFullScreen();
                } else if (document.msExitFullscreen) {
                    document.msExitFullscreen();
                }
            }
        }
    </script>
  </body>
</html><?php /**PATH /var/www/product_pickup_monitoring_system/resources/views/auth/login.blade.php ENDPATH**/ ?>