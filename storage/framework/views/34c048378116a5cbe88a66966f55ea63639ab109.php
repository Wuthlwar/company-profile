<div class="data-scrollbar" data-scroll="1">
    <nav class="iq-sidebar-menu">
        <ul id="iq-sidebar-toggle" class="iq-menu">
            <li class="<?php echo e((strpos(Route::currentRouteName(), 'home') === 0) ? 'active' : ''); ?>">
                <a href="<?php echo e(route('home')); ?>" class="svg-icon">
                    <svg class="svg-icon" id="p-dash1" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
                        <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                        <line x1="12" y1="22.08" x2="12" y2="12"></line>
                    </svg>
                    <span class="ml-4"> <?php echo e(__('nav.dashboards')); ?></span>
                </a>
            </li>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('crate-pickup')): ?>
            <li class=" ">
                <a href="<?php echo e(route('pickups.create')); ?>">
                    <i class="las la-minus"></i><span><?php echo e(__('nav.create_pickup')); ?> </span>
                </a>
            </li>
            <?php endif; ?>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('ready-to-loading')): ?>
            <li class=" ">
                <a href="<?php echo e(route('pickups.ready_to_loading_view')); ?>">
                    <i class="las la-minus"></i><span>Ready To Loading </span>
                </a>
            </li>
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('start-delivery')): ?>
            <li class=" ">
                <a href="<?php echo e(route('pickups.start_delivery_view')); ?>">
                    <i class="las la-minus"></i><span>Start Delivery </span>
                </a>
            </li>
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('finish-pickup')): ?>
            <li class=" ">
                <a href="<?php echo e(route('pickups.finish_view')); ?>">
                    <i class="las la-minus"></i><span><?php echo e(__('nav.finish_pickup')); ?> </span>
                </a>
            </li>
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view-pickup')): ?>
            <li class=" ">
                <a href="#pickups" class="collapsed" data-toggle="collapse" aria-expanded="false">
                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" class="svg-icon" id="p-dash2" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" width="20px" height="20px" viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;" xml:space="preserve">
                        <path d="M59,46h-6v-4v-2V16h-6h-2H21v6v2v22H11V7c0-0.553-0.447-1-1-1H7.858C7.411,4.28,5.859,3,4,3C1.794,3,0,4.794,0,7
                    s1.794,4,4,4c1.859,0,3.411-1.28,3.858-3H9v39c0,0.553,0.447,1,1,1h7.031C15.806,48.912,15,50.359,15,52c0,2.757,2.243,5,5,5
                    s5-2.243,5-5c0-1.641-0.806-3.088-2.031-4H27h2h18.031C45.806,48.912,45,50.359,45,52c0,2.757,2.243,5,5,5s5-2.243,5-5
                    c0-1.641-0.806-3.088-2.031-4H53h6c0.553,0,1-0.447,1-1S59.553,46,59,46z M50,55c-1.654,0-3-1.346-3-3s1.346-3,3-3s3,1.346,3,3
                    S51.654,55,50,55z M47,18h4v22h-1v-1c0-0.553-0.447-1-1-1s-1,0.447-1,1v1h-1V24V18z M33,40h-4V24h4V40z M35,24h4v16h-4V24z M41,24h4
                    v16h-4V24z M23,18h22v1h-1c-0.553,0-1,0.447-1,1s0.447,1,1,1h1v1h-4h-8h-4h-6V18z M4,9C2.897,9,2,8.103,2,7s0.897-2,2-2
                    c0.737,0,1.375,0.405,1.722,1H5C4.447,6,4,6.447,4,7s0.447,1,1,1h0.722C5.375,8.595,4.737,9,4,9z M20,55c-1.654,0-3-1.346-3-3
                    s1.346-3,3-3s3,1.346,3,3S21.654,55,20,55z M23,46V24h1v1c0,0.553,0.447,1,1,1s1-0.447,1-1v-1h1v16v6H23z M29,45h1
                    c0.553,0,1-0.447,1-1s-0.447-1-1-1h-1v-1h4h8h4h6v4H29V45z" />
                    </svg>
                    <span class="ml-4"><?php echo e(__('nav.pickups')); ?></span>
                    <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="10 15 15 20 20 15"></polyline>
                        <path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                    </svg>
                </a>
                <ul id="pickups" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view-users')): ?>
                    <li class="">
                        <a href="<?php echo e(route('pickups.all_pickup_view')); ?>" target="_blank">
                            <i class="las la-minus"></i><span><?php echo e(__('nav.all_pickup_view')); ?> </span>
                        </a>
                    </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('open-pickup-view')): ?>
                    <li class="">
                        <a href="<?php echo e(route('pickups.pickup_view')); ?>" target="_blank">
                            <i class="las la-minus"></i><span><?php echo e(__('nav.pickup_view')); ?> </span>
                        </a>
                    </li>
                    <?php endif; ?>
                    <li class="">
                        <a href="<?php echo e(route('pickups.index')); ?>">
                            <i class="las la-minus"></i><span><?php echo e(__('nav.pickup_list')); ?> </span>
                        </a>
                    </li>
                </ul>
            </li>
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view-report')): ?>
            <li class=" ">
                <a href="#report" class="collapsed" data-toggle="collapse" aria-expanded="false">
                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 64.000000 64.000000" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">

                        <g transform="translate(0.000000,64.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none">
                            <path d="M80 320 l0 -310 240 0 240 0 0 243 0 243 -68 67 -68 67 -172 0 -172
                    0 0 -310z m330 225 l0 -65 60 0 60 0 0 -225 0 -225 -210 0 -210 0 0 290 0 290
                    150 0 150 0 0 -65z m70 0 l34 -35 -42 0 c-41 0 -42 1 -42 35 0 19 4 35 8 35 4
                    0 23 -16 42 -35z" />
                            <path d="M309 397 c-25 -23 -69 -50 -97 -61 -29 -10 -52 -22 -52 -27 0 -28
                    101 12 159 63 24 21 49 38 55 38 6 0 28 -11 48 -25 38 -26 58 -31 58 -16 0 12
                    -93 71 -111 71 -8 -1 -35 -20 -60 -43z" />
                            <path d="M360 220 c0 -100 4 -160 10 -160 6 0 10 60 10 160 0 100 -4 160 -10
                    160 -6 0 -10 -60 -10 -160z" />
                            <path d="M460 200 c0 -87 4 -140 10 -140 6 0 10 53 10 140 0 87 -4 140 -10
                    140 -6 0 -10 -53 -10 -140z" />
                            <path d="M260 185 c0 -77 4 -125 10 -125 6 0 10 48 10 125 0 77 -4 125 -10
                    125 -6 0 -10 -48 -10 -125z" />
                            <path d="M160 165 c0 -63 4 -105 10 -105 6 0 10 42 10 105 0 63 -4 105 -10
                    105 -6 0 -10 -42 -10 -105z" />
                        </g>
                    </svg>
                    <span class="ml-4"><?php echo e(__('nav.reports')); ?></span>
                    <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="10 15 15 20 20 15"></polyline>
                        <path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                    </svg>
                </a>
                <ul id="report" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                    <li class="">
                        <a href="<?php echo e(route('report.process_status')); ?>">
                            <i class="las la-minus"></i><span><?php echo e(__('nav.process_status')); ?></span>
                        </a>
                    </li>

                </ul>
            </li>
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view-users')): ?>
            <li class=" ">
                <a href="#member" class="collapsed" data-toggle="collapse" aria-expanded="false">
                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" class="svg-icon" id="p-dash2" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" width="20px" height="20px" viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;" xml:space="preserve">
                        <path d="M55.517,46.55l-9.773-4.233c-0.23-0.115-0.485-0.396-0.704-0.771l6.525-0.005c0.114,0.011,2.804,0.257,4.961-0.67
                            c0.817-0.352,1.425-1.047,1.669-1.907c0.246-0.868,0.09-1.787-0.426-2.523c-1.865-2.654-6.218-9.589-6.354-16.623
                            c-0.003-0.121-0.397-12.083-12.21-12.18c-1.739,0.014-3.347,0.309-4.81,0.853c-0.319-0.813-0.789-1.661-1.488-2.459
                            C30.854,3.688,27.521,2.5,23,2.5s-7.854,1.188-9.908,3.53c-2.368,2.701-2.148,5.976-2.092,6.525v5.319c-0.64,0.729-1,1.662-1,2.625
                            v4c0,1.217,0.553,2.352,1.497,3.109c0.916,3.627,2.833,6.36,3.503,7.237v3.309c0,0.968-0.528,1.856-1.377,2.32l-8.921,4.866
                            C1.801,46.924,0,49.958,0,53.262V57.5h44h2h14v-3.697C60,50.711,58.282,47.933,55.517,46.55z M44,55.5H2v-2.238
                            c0-2.571,1.402-4.934,3.659-6.164l8.921-4.866C16.073,41.417,17,39.854,17,38.155v-4.019l-0.233-0.278
                            c-0.024-0.029-2.475-2.994-3.41-7.065l-0.091-0.396l-0.341-0.22C12.346,25.803,12,25.176,12,24.5v-4c0-0.561,0.238-1.084,0.67-1.475
                            L13,18.728V12.5l-0.009-0.131c-0.003-0.027-0.343-2.799,1.605-5.021C16.253,5.458,19.081,4.5,23,4.5
                            c3.905,0,6.727,0.951,8.386,2.828c0.825,0.932,1.24,1.973,1.447,2.867c0.016,0.07,0.031,0.139,0.045,0.208
                            c0.014,0.071,0.029,0.142,0.04,0.21c0.013,0.078,0.024,0.152,0.035,0.226c0.008,0.053,0.016,0.107,0.022,0.158
                            c0.015,0.124,0.027,0.244,0.035,0.355c0.001,0.009,0.001,0.017,0.001,0.026c0.007,0.108,0.012,0.21,0.015,0.303
                            c0,0.018,0,0.033,0.001,0.051c0.002,0.083,0.002,0.162,0.001,0.231c0,0.01,0,0.02,0,0.03c-0.004,0.235-0.02,0.375-0.02,0.378
                            L33,18.728l0.33,0.298C33.762,19.416,34,19.939,34,20.5v4c0,0.873-0.572,1.637-1.422,1.899l-0.498,0.153l-0.16,0.495
                            c-0.669,2.081-1.622,4.003-2.834,5.713c-0.297,0.421-0.586,0.794-0.837,1.079L28,34.123v4.125c0,0.253,0.025,0.501,0.064,0.745
                            c0.008,0.052,0.022,0.102,0.032,0.154c0.039,0.201,0.091,0.398,0.155,0.59c0.015,0.045,0.031,0.088,0.048,0.133
                            c0.078,0.209,0.169,0.411,0.275,0.605c0.012,0.022,0.023,0.045,0.035,0.067c0.145,0.256,0.312,0.499,0.504,0.723l0.228,0.281h0.039
                            c0.343,0.338,0.737,0.632,1.185,0.856l9.553,4.776C42.513,48.374,44,50.78,44,53.457V55.5z M58,55.5H46v-2.043
                            c0-3.439-1.911-6.53-4.986-8.068l-6.858-3.43c0.169-0.386,0.191-0.828,0.043-1.254c-0.245-0.705-0.885-1.16-1.63-1.16h-2.217
                            c-0.046-0.081-0.076-0.17-0.113-0.256c-0.05-0.115-0.109-0.228-0.142-0.349C30.036,38.718,30,38.486,30,38.248v-3.381
                            c0.229-0.28,0.47-0.599,0.719-0.951c1.239-1.75,2.232-3.698,2.954-5.799C35.084,27.47,36,26.075,36,24.5v-4
                            c0-0.963-0.36-1.896-1-2.625v-5.319c0.026-0.25,0.082-1.069-0.084-2.139c1.288-0.506,2.731-0.767,4.29-0.78
                            c9.841,0.081,10.2,9.811,10.21,10.221c0.147,7.583,4.746,14.927,6.717,17.732c0.169,0.24,0.22,0.542,0.139,0.827
                            c-0.046,0.164-0.178,0.462-0.535,0.615c-1.68,0.723-3.959,0.518-4.076,0.513h-6.883c-0.643,0-1.229,0.327-1.568,0.874
                            c-0.338,0.545-0.37,1.211-0.086,1.783c0.313,0.631,0.866,1.474,1.775,1.927l9.747,4.222C56.715,49.396,58,51.482,58,53.803V55.5z" />
                        <g>
                    </svg>
                    <span class="ml-4"><?php echo e(__('nav.user')); ?></span>
                    <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="10 15 15 20 20 15"></polyline>
                        <path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                    </svg>
                </a>
                <ul id="member" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                    
                    <li class="">
                        <a href="<?php echo e(route('users.create')); ?>">
                            <i class="las la-minus"></i><span><?php echo e(__('nav.create_user')); ?> </span>
                        </a>
                    </li>
                    
                    <li class="">
                        <a href="<?php echo e(route('users.index')); ?>">
                            <i class="las la-minus"></i><span><?php echo e(__('nav.user_list')); ?> </span>
                        </a>
                    </li>
                </ul>
            </li>
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view-roles')): ?>
            <li class=" ">
                <a href="#role" class="collapsed" data-toggle="collapse" aria-expanded="false">
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="svg-icon" id="p-dash2" fill="none" stroke="currentColor" stroke-width="10" stroke-linecap="round" width="20px" height="20px">
                        <defs>
                            <style>
                                .cls-1,
                                .cls-2 {
                                    fill: none;
                                    stroke: "currentColor";
                                    stroke-linecap: round;
                                    stroke-linejoin: round;
                                    stroke-width: 1.5px;
                                }

                                .cls-1 {
                                    fill-rule: evenodd;
                                }
                            </style>
                        </defs>
                        <g id="ic-security-secured-profile">
                            <path class="cls-1" d="M22,8.44c0-1.4-.16-2.64-.21-3.11a1.15,1.15,0,0,0-1.3-1c-.3,0-.95.12-1.68.15a7.35,7.35,0,0,1-2-.16,7.46,7.46,0,0,1-2.19-1.19A14.91,14.91,0,0,1,13,1.81a1.15,1.15,0,0,0-1.57,0A18.08,18.08,0,0,1,9.89,3.1a7.77,7.77,0,0,1-2.2,1.22,8,8,0,0,1-2.28.18,17.22,17.22,0,0,1-1.87-.18,1.14,1.14,0,0,0-1.3,1C2.19,5.8,2.06,7.05,2,8.44a16.94,16.94,0,0,0,.26,4.15,13,13,0,0,0,3.85,5.85,32.09,32.09,0,0,0,4.62,3.62,2.65,2.65,0,0,0,3,0,31.88,31.88,0,0,0,4.36-3.67,13.3,13.3,0,0,0,3.63-5.76A17.34,17.34,0,0,0,22,8.44Z" />
                            <path class="cls-1" d="M17,19.33V18a5,5,0,0,0-5-5h0a5,5,0,0,0-5,5v1.33" />
                            <circle class="cls-2" cx="12" cy="9.5" r="2.5" />
                        </g>
                    </svg>
                    <span class="ml-4"><?php echo e(__('nav.role')); ?></span>
                    <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="10 15 15 20 20 15"></polyline>
                        <path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                    </svg>
                </a>
                <ul id="role" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                    
                    <li class="">
                        <a href="<?php echo e(route('roles.create')); ?>">
                            <i class="las la-minus"></i><span><?php echo e(__('nav.create_role')); ?></span>
                        </a>
                    </li>
                    
                    <li class="">
                        <a href="<?php echo e(route('roles.index')); ?>">
                            <i class="las la-minus"></i><span><?php echo e(__('nav.role_list')); ?></span>
                        </a>
                    </li>
                </ul>
            </li>
            <?php endif; ?>
        </ul>
    </nav>
    <div class="p-3"></div>
</div><?php /**PATH /var/www/product_pickup_monitoring_system/resources/views/layouts/nav.blade.php ENDPATH**/ ?>