<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Product Pickup Monitoring System</title>
    <meta name="description" content="Cloudhub is a modern, responsive and easy to customize HTML template, perfectly suited for hosting and technology companies.">
    <meta name="keywords" content="html template, responsive, retina, cloud hosting, technology, startup">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Icons -->
    <link rel="apple-touch-icon-precomposed" href="img/icons/apple-touch-icon.png">
    <link rel="icon" href="<?php echo e(asset('pickup/img/logos/favicon.png')); ?>">
    <!-- Stylesheets -->
    <link rel="stylesheet" href="<?php echo e(asset('pickup/css/fontawesome.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('pickup/css/main.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('pickup/css/style.css')); ?>">

</head>

<!-- start loader -->
<div id="loaderIcon">
    <img src="<?php echo e(asset('pickup/img/logos/logo.gif')); ?>" width="100px" height="100px">
</div>
<div id="shader" style="display:none">
</div>

<!-- end loader -->
<!-- Content -->
<section id="content">
    <!-- Content Row -->
    <section class="content-row content-row-color content-row-clouds content-row-full-height">
        <div class="content-slider animate-container-slide" data-nav="true" data-rotation="10">
            <div class="slide" data-title="Page 1" href="#">
                <div class="container text-align-center">
                    <table class="table-layout-domain table_title">
                        <tr>
                            <td>
                                <img src="<?php echo e(asset('pickup/img/logos/PRO-1-Global-Logo.png')); ?>" alt="" onclick=location.href="<?php echo e(route('login')); ?>">

                            </td>
                            <td>
                                <div class="text-align-center" onclick="openCloseFullscreen();">
                                    <h2><strong>Loading Status</strong></h2>
                                </div>
                            </td>
                            <td>
                                <div class="text-align-center" style="width: 215px;margin: 0px 0px 0px 190px;">
                                    <h4 id="current_date_time" class="time_lable"><strong><?php echo e(date('d M Y h:i:s A')); ?></strong></h4>
                                </div>
                            </td>
                        </tr>
                    </table>
                    <table class="packing_table" id="pickup_view_list" style="border-radius: 0px 0px 10px 10px !important;">
                        <thead class="">
                            <tr>
                                <td style="width: 0px;">
                                    <h5><strong>No.</strong></h5>
                                    <div class="">
                                        <h6>စဉ်</h6>
                                    </div>
                                </td>

                                <td style="width: 350px;">
                                    <h5><strong>Picking No.</strong></h5>
                                    <div class="">
                                        <h6>ပစ္စည်းထုတ်ယူမည့်နံပါတ်</h6>
                                    </div>
                                </td>
                                <td style="width: 400px;">
                                    <h5><strong>Invoice No.</strong></h5>
                                    <div class="">
                                        <h6>ဘောင်ချာနံပါတ်</h6>
                                    </div>
                                </td>
                                <td style="width: 400px;" class="text_center">
                                    <h5><strong>Customer Name</strong></h5>
                                    <div class="">
                                        <h6>ဝယ်သူအမည်</h6>
                                    </div>
                                </td>
                                <td style="width: 200px;">
                                    <h5><strong>Load Qty.</strong></h5>
                                    <div class="">
                                        <h6>အရေအတွက်</h6>
                                    </div>
                                </td>
                                <td style="width: 100px;">
                                    <h5><strong>Start</strong></h5>
                                    <div class="">
                                        <h6>စချိန်</h6>
                                    </div>
                                </td>
                                <td style="width: 100px;">
                                    <h5><strong>Finish</strong></h5>
                                    <div class="">
                                        <h6>ပြီးဆုံးချိန်</h6>
                                    </div>
                                </td>
                            </tr>
                        </thead>
                    </table>
                    <table style="background: transparent;margin-top: 5px;">
                        <tr>
                            <td class="onprogress box">
                                <h3><strong>Processing : <span id="onprogress_count_2"></span></strong></h3>
                            </td>
                            <td class="box-empty">
                            </td>
                            <td class="ready_to_loading box">
                                <h3><strong>Ready For Loading : <span id="ready_to_loading_count_2"></span></strong></h3>
                            </td>
                            <td class="box-empty">

                            </td>
                            <td class="over box">
                                <h3><strong>Unfinish : <span id="over_count_2"></span></strong></h3>
                            </td>
                            <td class="box-empty">

                            </td>
                            <td class="finish box">
                                <h3><strong>Finish : <span id="finish_count_2"></span></strong></h3>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="slide" data-title="Page 1" href="#">
                <div class="container text-align-center">
                    <table class="table-layout-domain table_title">
                        <tr>
                            <td>
                                <img src="<?php echo e(asset('pickup/img/logos/PRO-1-Global-Logo.png')); ?>" alt="" onclick=location.href="<?php echo e(route('login')); ?>">

                            </td>
                            <td>
                                <div class="text-align-center" onclick="openCloseFullscreen();">
                                    <h2><strong>Loading Status</strong></h2>
                                </div>
                            </td>
                            <td>
                                <div class="text-align-center" style="width: 215px;margin: 0px 0px 0px 190px;">
                                    <h4 id="current_date_time_2" class="time_lable"><strong><?php echo e(date('d M Y h:i:s A')); ?></strong></h4>
                                </div>
                            </td>
                        </tr>
                    </table>
                    <table class="packing_table" id="pickup_view_list_2" style="border-radius: 0px 0px 10px 10px !important;">
                        <thead class="">
                            <tr>
                                <td style="width: 0px;">
                                    <h5><strong>No.</strong></h5>
                                    <div class="">
                                        <h6>စဉ်</h6>
                                    </div>
                                </td>

                                <td style="width: 350px;">
                                    <h5><strong>Picking No.</strong></h5>
                                    <div class="">
                                        <h6>ပစ္စည်းထုတ်ယူမည့်နံပါတ်</h6>
                                    </div>
                                </td>
                                <td style="width: 400px;">
                                    <h5><strong>Invoice No.</strong></h5>
                                    <div class="">
                                        <h6>ဘောင်ချာနံပါတ်</h6>
                                    </div>
                                </td>
                                <td style="width: 400px;" class="text_center">
                                    <h5><strong>Customer Name</strong></h5>
                                    <div class="">
                                        <h6>ဝယ်သူအမည်</h6>
                                    </div>
                                </td>
                                <td style="width: 200px;">
                                    <h5><strong>Load Qty.</strong></h5>
                                    <div class="">
                                        <h6>အရေအတွက်</h6>
                                    </div>
                                </td>
                                <td style="width: 100px;">
                                    <h5><strong>Start</strong></h5>
                                    <div class="">
                                        <h6>စချိန်</h6>
                                    </div>
                                </td>
                                <td style="width: 100px;">
                                    <h5><strong>Finish</strong></h5>
                                    <div class="">
                                        <h6>ပြီးဆုံးချိန်</h6>
                                    </div>
                                </td>
                            </tr>
                        </thead>
                    </table>
                    <table style="background: transparent;margin-top: 5px;">
                        <tr>
                            <td class="onprogress box">
                                <h3><strong>Processing : <span id="onprogress_count"></span></strong></h3>
                            </td>
                            <td class="box-empty">
                            </td>
                            <td class="ready_to_loading box">
                                <h3><strong>Ready For Loading : <span id="ready_to_loading_count"></span></strong></h3>
                            </td>
                            <td class="box-empty">

                            </td>
                            <td class="over box">
                                <h3><strong>Unfinish : <span id="over_count"></span></strong></h3>
                            </td>
                            <td class="box-empty">

                            </td>
                            <td class="finish box">
                                <h3><strong>Finish : <span id="finish_count"></span></strong></h3>
                            </td>
                        </tr>
                    </table>
                </div>
            </d>
        </div>
        <div class="content-background content-background-light">
            <img src="<?php echo e(asset('pickup/img/clouds-light.png')); ?>" alt="">
        </div>
    </section>
    <!-- Content Row -->

    <!-- Footer -->



    <!-- Scripts -->
    <script src="<?php echo e(asset('pickup/js/jquery.min.js')); ?>"></script>
    <!-- Backend Bundle JavaScript -->
    <script src="<?php echo e(asset('js/backend-bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('pickup/js/headroom.min.js')); ?>"></script>
    <script src="<?php echo e(asset('pickup/js/js.cookie.min.js')); ?>"></script>
    <script src="<?php echo e(asset('pickup/js/imagesloaded.min.js')); ?>"></script>
    <script src="<?php echo e(asset('pickup/js/bricks.min.js')); ?>"></script>
    <script src="<?php echo e(asset('pickup/js/main.min.js')); ?>"></script>
    <script src="<?php echo e(asset('pickup/js/script.js')); ?>"></script>

    <script>
        window.onload = function() {
            $('#loaderIcon').show();
            $('#shader').show();
            setTimeout(function() {
                $('#loaderIcon').hide();
                $('#shader').hide();
            }, 1000);
        };
        $(document).ready(function() {
            function getCurrentTime() {
                var now = new Date();
                months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
                var time = new Date().toLocaleTimeString();
                var formattedDate = now.getDate() + "-" + months[now.getMonth()] + "-" + now.getFullYear() + " " + time;
                $('#current_date_time').html(`<strong>${formattedDate}</strong>`);
                $('#current_date_time_2').html(`<strong>${formattedDate}</strong>`);
                setTimeout(function() {
                    getCurrentTime(); //this will send request again and again in every 1s;
                }, 1000);
            }

            function getCurrentData() {
                $.ajax({
                    url: "/get_current_data/9",
                    success: function(result) {
                        setTimeout(function() {
                            getCurrentData(); //this will send request again and again in every 1m;
                        }, 60000);
                    }
                });
            }

            function getCurrentTotalData() {
                $.ajax({
                    url: "/get_current_total_data/9",
                    success: function(result) {
                        $('#finish_count').html(`${result.finish_count}`);
                        $('#onprogress_count').html(`${result.onprogress_count}`);
                        $('#ready_to_loading_count').html(`${result.ready_to_loading_count}`);
                        $('#over_count').html(`${result.over_count}`);

                        $('#finish_count_2').html(`${result.finish_count}`);
                        $('#ready_to_loading_count_2').html(`${result.ready_to_loading_count}`);
                        $('#onprogress_count_2').html(`${result.onprogress_count}`);
                        $('#over_count_2').html(`${result.over_count}`);
                        setTimeout(function() {
                            table.draw(true);
                            table_2.draw(true);
                            getCurrentTotalData(); //this will send request again and again in every 1m;
                        }, 1000);
                    }
                });

            }

            getCurrentTime();
            getCurrentData();
            getCurrentTotalData();

            table = $('#pickup_view_list').DataTable({
                "processing": true,
                "serverSide": true,
                "searching": false,
                "lengthChange": false,
                "autoWidth": true,
                "responsive": true,
                "bInfo": false,
                paging: false,
                searching: false,
                "createdRow": function(row, data, index) {
                    if (data.status == 'onprogress') {
                        $(row).addClass('onprogress');
                    }
                    if (data.status == 'ready_to_loading') {
                        $(row).addClass('ready_to_loading');
                    }
                    if (data.status == 'over') {
                        $(row).addClass('over');
                    }
                    if (data.status == 'finish') {
                        $(row).addClass('finish');
                    }
                },
                columnDefs: [{
                    targets: 3,
                    className: 'text_left'
                }],
                "oLanguage": {
                    "sProcessing": ""
                },
                'ajax': {
                    'url': "/edg_pickup_view",
                    'type': 'GET',
                },
                columns: [{
                        data: 'pickup_no',
                        name: 'pickup_no',
                    },

                    {
                        data: 'picking_no',
                        name: 'picking_no',
                    },
                    {
                        data: 'invoice_no',
                        name: 'invoice_no',
                    },
                    {
                        data: 'customer_name',
                        name: 'customer_name',
                    },
                    {
                        data: 'load_qty',
                        name: 'load_qty',
                    },
                    {
                        data: 'start_time',
                        name: 'start_time',
                    },
                    {
                        data: 'end_time',
                        name: 'end_time',
                    },
                ],
            });

            table_2 = $('#pickup_view_list_2').DataTable({
                "processing": true,
                "serverSide": true,
                "searching": false,
                "lengthChange": false,
                "autoWidth": true,
                "responsive": true,
                "bInfo": false,
                paging: false,
                searching: false,
                "createdRow": function(row, data, index) {
                    if (data.status == 'onprogress') {
                        $(row).addClass('onprogress');
                    }
                    if (data.status == 'ready_to_loading') {
                        $(row).addClass('ready_to_loading');
                    }
                    if (data.status == 'over') {
                        $(row).addClass('over');
                    }
                    if (data.status == 'finish') {
                        $(row).addClass('finish');
                    }
                },
                columnDefs: [{
                    targets: 3,
                    className: 'text_left'
                }],
                "oLanguage": {
                    "sProcessing": ""
                },
                'ajax': {
                    'url': "/edg_pickup_view_2",
                    'type': 'GET',
                },
                columns: [{
                        data: 'pickup_no',
                        name: 'pickup_no',
                    },

                    {
                        data: 'picking_no',
                        name: 'picking_no',
                    },
                    {
                        data: 'invoice_no',
                        name: 'invoice_no',
                    },
                    {
                        data: 'customer_name',
                        name: 'customer_name',
                    },
                    {
                        data: 'load_qty',
                        name: 'load_qty',
                    },
                    {
                        data: 'start_time',
                        name: 'start_time',
                    },
                    {
                        data: 'end_time',
                        name: 'end_time',
                    },
                ],
            });

        })
    </script>
    <script>
        function forceFullscreen() {
            top.resizeTo(window.screen.abailwidth, window.screen.availHeight);
            top.moveTo(0, 0);
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

</html><?php /**PATH /var/www/product_pickup_monitoring_system/resources/views/pickups/edg_listing.blade.php ENDPATH**/ ?>