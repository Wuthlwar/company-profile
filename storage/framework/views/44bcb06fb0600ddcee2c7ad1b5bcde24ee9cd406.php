<div class="iq-top-navbar">
    <div class="iq-navbar-custom">
        <nav class="navbar navbar-expand-lg navbar-light p-0">
            <div class="iq-navbar-logo d-flex align-items-center justify-content-between">
                <i class="ri-menu-5-line wrapper-menu"></i>
                <a href="<?php echo e(route('home')); ?>" class="header-logo">
                    <h5 class="logo-title ml-3">Product Pickup Monitoring System</h5>

                </a>
            </div>
            <div class="iq-search-bar device-search">
              
            </div>
            <div class="d-flex align-items-center" id="notification">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-label="Toggle navigation">
                    <i class="ri-menu-5-line"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-list align-items-center">
                        <li class="nav-item nav-icon dropdown">
                            <a href="#" class="search-toggle dropdown-toggle btn border add-btn" id="dropdownMenuButton02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               <?php $locale = session()->get('locale'); ?>  
                                <?php switch($locale):
                                    case ('en'): ?>
                                        <img src="<?php echo e(asset('images/small/flag-01.png')); ?>" alt="img-flag" class="img-fluid image-flag mr-2">English
                                    <?php break; ?>
                                    <?php case ('mm'): ?>
                                        <img src="<?php echo e(asset('images/small/flag-02.png')); ?>" alt="img-flag" class="img-fluid image-flag mr-2">Myanmar
                                    <?php break; ?>
                                    <?php default: ?>
                                        <img src="<?php echo e(asset('images/small/flag-01.png')); ?>" alt="img-flag" class="img-fluid image-flag mr-2">English
                                <?php endswitch; ?>    
                            </a>
                            <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                <div class="card shadow-none m-0">

                                    <div class="card-body p-3">
                                        <a class="iq-sub-card" href="<?php echo e(route('lang','mm')); ?>"><img src="<?php echo e(asset('images/small/flag-02.png')); ?>" alt="img-flag" class="img-fluid mr-2">Myanmar</a>
                                    </div>
                                    <div class="card-body p-3">
                                        <a class="iq-sub-card" href="<?php echo e(route('lang','en')); ?>"><img src="<?php echo e(asset('images/small/flag-01.png')); ?>" alt="img-flag" class="img-fluid mr-2">English</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        
                        <li class="nav-item nav-icon dropdown caption-content">
                            <a href="#" class="search-toggle dropdown-toggle" id="dropdownMenuButton4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="<?php echo e(asset('images/user/' . Auth::user()->roles->pluck('name')->first() .'.png')); ?>" class="img-fluid rounded" alt="user">
                            </a>
                            <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <div class="card shadow-none m-0">
                                    <div class="card-body p-0 text-center">
                                        <div class="media-body profile-detail text-center">
                                            <img src="<?php echo e(asset('images/PRO-1-Global-Logo.png')); ?>" alt="profile-bg" class="rounded-top img-fluid mb-4">
                                            <img src="<?php echo e(asset('images/user/' . Auth::user()->roles->pluck('name')->first() .'.png')); ?>" alt="profile-img" class="rounded profile-img img-fluid avatar-70">
                                        </div>
                                        <div class="p-3">
                                            <h5 class="mb-1"><?php echo e(Auth::user()->name); ?></h5>
                                            <p class="mb-0"><?php echo e(Auth::user()->roles->pluck('name')->first()); ?></p>
                                            <div class="d-flex align-items-center justify-content-center mt-3">
                                                <a href="<?php echo e(route('user.profile')); ?>" class="btn border mr-2">Profile</a>
                                                <a class="btn border" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Sign Out
                                                </a>


                                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                                    <?php echo csrf_field(); ?>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div><?php /**PATH /var/www/product_pickup_monitoring_system/resources/views/layouts/header.blade.php ENDPATH**/ ?>