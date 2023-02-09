<?php $__env->startSection('content'); ?>
<div class="stricky-header stricked-menu main-menu">
    <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
</div><!-- /.stricky-header -->

<!--Main Slider Start-->
<section class="main-slider clearfix">
    <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
            "effect": "fade",
            "pagination": {
            "el": "#main-slider-pagination",
            "type": "bullets",
            "clickable": true
            },
            "navigation": {
            "nextEl": "#main-slider__swiper-button-next",
            "prevEl": "#main-slider__swiper-button-prev"
            },
            "autoplay": {
            "delay": 5000
            }}'>
        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <div class="image-layer" style="background-image: url(<?php echo e(asset('assets/photos/banner/Banner-1.jpg')); ?>)"></div>
                <!-- /.image-layer -->

                <div class="main-slider-shape-1 float-bob-x">
                    <img src="<?php echo e(asset('assets/photos/banner/Banner-1.jpg')); ?>" alt="">
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="main-slider__content">
                                <h2 class="main-slider__title"><span>PRO1 GLOBAL </span><br> HOME CENTER
                                </h2>
                                <p class="main-slider__text"><span class="fw-bold text-dark"><?php echo e(__('home.slide_word_1')); ?><br> <?php echo e(__('home.slide_word_2')); ?></span></p>
                                <div class="main-slider__btn-box">
                                    <a href="https://pro1globalhomecenter.com/home.html?divisionId=1&townshipId=18" class="thm-btn main-slider__btn">"Buy Now"</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="image-layer" style="background-image: url(<?php echo e(asset('assets/photos/banner/Banner-2.jpg')); ?>)"></div>
                <!-- /.image-layer -->

                <div class="main-slider-shape-1 float-bob-x">
                    <img src="<?php echo e(asset('assets/photos/banner/Banner-2.jpg')); ?>" alt="">
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="main-slider__content">
                                <h2 class="main-slider__title"><span>PRO1 GLOBAL </span><br> HOME CENTER
                                </h2>
                                <p class="main-slider__text"><span class="fw-bold text-dark"><?php echo e(__('home.slide_word_1')); ?><br> <?php echo e(__('home.slide_word_2')); ?></span></p>
                                <div class="main-slider__btn-box">
                                    <a target="blank" href="https://pro1globalhomecenter.com/home.html?divisionId=1&townshipId=18" class="thm-btn main-slider__btn"><?php echo e(__('home.buy_now')); ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="image-layer" style="background-image: url(<?php echo e(asset('assets/photos/banner/Banner-3.jpg')); ?>)"></div>
                <!-- /.image-layer -->

                <div class="main-slider-shape-1 float-bob-x">
                    <img src="<?php echo e(asset('assets/photos/banner/Banner-3.jpg')); ?>" alt="">
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="main-slider__content">
                                <h2 class="main-slider__title"><span>PRO1 GLOBAL </span><br> HOME CENTER
                                </h2>
                                <p class="main-slider__text"><span class="fw-bold text-dark"><?php echo e(__('home.slide_word_1')); ?><br> <?php echo e(__('home.slide_word_2')); ?></span></p>
                                <div class="main-slider__btn-box">
                                    <a target="blank" href="https://pro1globalhomecenter.com/home.html?divisionId=1&townshipId=18" class="thm-btn main-slider__btn"><?php echo e(__('home.buy_now')); ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- If we need navigation buttons -->
        <div class="main-slider__nav">
            <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                <i class="icon-right-arrow"></i>
            </div>
            <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                <i class="icon-right-arrow1"></i>
            </div>
        </div>

    </div>
</section>
<!--Main Slider End-->
<!--Company Vision & Mission Start-->
<section class="we-provide">
    <div class="we-provide-bg" style="background-image: url(<?php echo e(asset('assets/images/backgrounds/we-provide-bg.jpg')); ?>)">
    </div>
    <div class="container">
        <div class="section-title text-left">
            <div class="section-sub-title-box">
                <p class="section-sub-title"><?php echo e(__('home.company_vision_mission')); ?></p>
                <div class="section-title-shape-1">
                    <img src="<?php echo e(asset('assets/images/shapes/section-title-shape-1.png')); ?>" alt="">
                </div>
                <div class="section-title-shape-2">
                    <img src="<?php echo e(asset('assets/images/shapes/section-title-shape-2.png')); ?>" alt="">
                </div>
            </div>
            <!-- <h2 class="section-title__title">Take a look at the Super Services of PRO 1 Global Home Center</h2> -->
        </div>
        <div class="we-provide__tab">
            <div class="we-provide__tab-box tabs-box">
                <div class="row">
                    <div class="col-xl-3 col-lg-3">
                        <div class="we-provide__tab-btn-box">
                            <ul class="tab-buttons clearfix list-unstyled">
                                <li data-tab="#goals" class="tab-btn active-btn"><span><?php echo e(__('home.company_vission')); ?></span></li>
                                <li data-tab="#mission" class="tab-btn "><span><?php echo e(__('home.company_mission')); ?></span>
                                </li>


                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9">
                        <div class="we-provide__tab-main-content">
                            <div class="tabs-content">
                                <!--tab-->
                                <div class="tab" id="values">
                                    <div class="we-provide__tab-main-content-inner">
                                        <div class="we-provide-shape-1">
                                            <img src="<?php echo e(asset('assets/images/shapes/we-provide-shape-1.png')); ?>" alt="">
                                        </div>
                                        
                                        <div class="we-provide__tab-main-content-right">
                                            <div class="we-provide__tab-main-content-right-img">
                                                <img src="<?php echo e(asset('assets/images/resources/we-provide-tab-main-content-right-img.jpg')); ?>" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--tab-->
                                <div class="tab " id="mission">
                                    <div class="we-provide__tab-main-content-inner">
                                        <div class="we-provide-shape-1">
                                            <img src="<?php echo e(asset('assets/images/shapes/we-provide-shape-1.png')); ?>" alt="">
                                        </div>
                                        <div class="we-provide__tab-main-content-left">
                                            
                                            <h3 class="we-provide__tab-main-content-title">Company Mission</h3>
                                            <p class="we-provide__tab-main-content-text">To be "One place, get all" with competitive price and innovative products to improve people living standard. To do operation excellence and make customer satisfy. To be sustainable growth together with
                                                the stakeholders. To do emphasize to develop PRO 1 Global people capabilities by good organization, working culture and welfare. To apply innovation technology to develop business efficiency. To
                                                operate based on social-responsible and good relationships with the environment.
                                            </p>
                                        </div>
                                        <div class="we-provide__tab-main-content-right">
                                            <div class="we-provide__tab-main-content-right-img mt-20">
                                                <img src="<?php echo e(asset('assets/photos/mission1.png')); ?>" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--tab-->
                                <div class="tab active-tab" id="goals">
                                    <div class="we-provide__tab-main-content-inner">
                                        <div class="we-provide-shape-1">
                                            <img src="<?php echo e(asset('assets/images/shapes/we-provide-shape-1.png')); ?>" alt="">
                                        </div>
                                        <div class="we-provide__tab-main-content-left">
                                            
                                            <h3 class="we-provide__tab-main-content-title">Company Vission</h3>
                                            <p class="we-provide__tab-main-content-text">To be the leader of the construction material and home improvement retail industry in Myanmar.
                                            </p>
                                        </div>
                                        <div class="we-provide__tab-main-content-right">
                                            <div class="we-provide__tab-main-content-right-img">
                                                <img src="<?php echo e(asset('assets/photos/vision1.png')); ?>" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--tab-->

                                <!--tab-->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Company Vision & Mission End-->
<!--History Note Start-->
<section class="feature-two">
    <div class="container">
        <div class="row">
            <!--Feature Two Single Start-->
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                <div class="feature-two__single">
                    <div class="feature-two__img">
                        <img src="<?php echo e(asset('assets/photos/estab.jpg')); ?>" alt="">
                    </div>
                    <div class="feature-two__content">
                        <div class="feature-two__content-inner">
                            <div class="feature-two__icon">

                            </div>
                            <div class="feature-two__text-box">
                                <p class="feature-two__text"><a href="<?php echo e(route('establish_year')); ?>">Establish
                                        <br>Year</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Feature Two Single End-->
            <!--Feature Two Single Start-->
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                <div class="feature-two__single">
                    <div class="feature-two__img">
                        <img src="<?php echo e(asset('assets/photos/milestone-mission.jpg')); ?>" alt="">
                    </div>
                    <div class="feature-two__content">
                        <div class="feature-two__content-inner">
                            <div class="feature-two__icon">

                            </div>
                            <div class="feature-two__text-box">
                                <p class="feature-two__text"><a href="<?php echo e(route('mile_stone')); ?>">Mile <br>
                                        Stone</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Feature Two Single End-->
            <!--Feature Two Single Start-->
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                <div class="feature-two__single">
                    <div class="feature-two__img">
                        <img src="<?php echo e(asset('assets/photos/joint.jpg')); ?>" alt="">
                    </div>
                    <div class="feature-two__content">
                        <div class="feature-two__content-inner">
                            <div class="feature-two__icon">

                            </div>
                            <div class="feature-two__text-box">
                                <p class="feature-two__text"><a href="<?php echo e(route('joint_venture')); ?>">Joint<br>
                                        Venture</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Feature Two Single End-->
        </div>
    </div>
</section>
<!--History Note End-->
<!--About Company Start-->
<section class="about-two">
    <div class="container">
        <div class="row">
            <div class="col-xl-5">
                <div class="about-two__left">
                    <div class="section-title text-left">
                        <div class="section-sub-title-box">
                            <p class="section-sub-title">About company</p>
                            <div class="section-title-shape-1">
                                <img src="<?php echo e(asset('assets/images/shapes/section-title-shape-1.png')); ?>" alt="">
                            </div>
                            <div class="section-title-shape-2">
                                <img src="<?php echo e(asset('assets/images/shapes/section-title-shape-2.png')); ?>" alt="">
                            </div>
                        </div>

                    </div>
                    <p class="about-two__text">PRO 1 Global Home Center is the leading of home building & home living product shopping center in Myanmar. PRO 1 Global Home Center is dedicated to provide the right product with good services in reasonable price to develop
                        Myanmar people living standard by get everything's in one place like PRO 1 Global Home Center motto “One Place, Get All”. Nowadays, we have 14 product categories to cover from the construction to decoration in one place.
                        We are aiming to improve continuously in our service standard & product variety for make our Country more successful in the future.</p>
                    <div class="about-two__awards-box">
                        <div class="about-two__awards-inner">
                            <p class="about-two__awards-content">The Biggest Building Materials & Home Living Product Shopping Center In Myanmar</p>
                        </div>
                    </div>


                </div>
            </div>
            <div class="col-xl-5">
                <div class="about-two__middle">
                    <div class="about-two__img-box">
                        <div class="about-two__img">
                            <img src="<?php echo e(asset('assets/photos/about3.jpg')); ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2">
                <div class="about-two__counter">
                    <ul class="list-unstyled about-two__counter-list">
                        <li>
                            <div class="about-two__counter-single">
                                <div class="about-two__counter-count count-box">
                                    <h3 class="count-text" data-speed="4000" data-stop="3000">3000</h3>
                                </div>
                                <p class="about-two__counter-text-1">Total Employee</p>
                                <p class="about-two__counter-text-2">We can employ 3000 employees in various PRO 1 company departments.
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="about-two__counter-single">
                                <div class="about-two__counter-count count-box">
                                    <h3 class="count-text" data-speed="4000" data-stop="12">00</h3>
                                </div>
                                <p class="about-two__counter-text-1">Current Branch</p>
                                <p class="about-two__counter-text-2">Our PRO1 Company has been able to open 12 branches in various regions.
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="about-two__counter-single">
                                <div class="about-two__counter-count count-box">
                                    <h3 class="count-text" data-speed="4000" data-stop="5">00</h3>
                                    <!-- <span class="about-two__counter-percent">%</span> -->
                                </div>
                                <p class="about-two__counter-text-1">Division or Region</p>
                                <p class="about-two__counter-text-2">We have been able to open branches in 5 divisions and regions of Myanmar.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--About Company End-->
<!-- Company Culture Start-->
<section class="services-two">
    <div class="services-two-shape-1" style="background-image: url(<?php echo e(asset('assets/images/shapes/services-two-shape-1.png')); ?>)"></div>
    <div class="container">
        <div class="services-two__top">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="services-two__top-left">
                        <div class="section-title text-left">
                            <div class="section-sub-title-box">
                                <p class="section-sub-title">Company Culture</p>
                                <div class="section-title-shape-1">
                                    <img src="<?php echo e(asset('assets/images/shapes/section-title-shape-5.png')); ?>" alt="">
                                </div>
                                <div class="section-title-shape-2">
                                    <img src="<?php echo e(asset('assets/images/shapes/section-title-shape-6.png')); ?>" alt="">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">

                </div>
            </div>
        </div>
        <div class="services-two__bottom">
            <div class="row">
                <!--Services Two Single Start-->
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="services-two__single">
                        <div class="">
                            <div class="services-two__icon">
                                
                                <img src="<?php echo e(asset('assets/photos/a.png')); ?>">
                            </div>
                        </div>
                        <h3 class="services-two__title"><a href="" onclick="return false;">Accountability</a></h3>

                    </div>
                </div>
                <!--Services Two Single End-->
                <!--Services Two Single Start-->
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="services-two__single">
                        <div class="">
                            <div class="services-two__icon">
                                
                                <img src="<?php echo e(asset('assets/photos/c.png')); ?>">
                            </div>
                        </div>
                        <h3 class="services-two__title"><a href="" onclick="return false;">Collaboration</a></h3>

                    </div>
                </div>


                <!--Services Two Single End-->
                <!--Services Two Single Start-->
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                    <div class="services-two__single">
                        <div class="">
                            <div class="services-two__icon">
                               
                                <img src="<?php echo e(asset('assets/photos/h.png')); ?>">
                            </div>
                        </div>
                        <h3 class="services-two__title"><a href="" onclick="return false;">Humility</a></h3>

                    </div>
                </div>
                <!--Services Two Single End-->
                <!--Services Two Single Start-->
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                    <div class="services-two__single">
                        <div class="">
                            <div class="services-two__icon">
                                
                                <img src="<?php echo e(asset('assets/photos/innovation.png')); ?>">
                            </div>
                        </div>
                        <h3 class="services-two__title"><a href="" onclick="return false;">Innovation</a>
                        </h3>

                    </div>
                </div>
                <!--Services Two Single End-->
                <!--Services Two Single Start-->
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="500ms">
                    <div class="services-two__single">
                        <div class="">
                            <div class="services-two__icon">
                                
                                <img src="<?php echo e(asset('assets/photos/ethics.png')); ?>">
                            </div>
                        </div>
                        <h3 class="services-two__title"><a href="" onclick="return false;">Ethics</a>
                        </h3>

                    </div>
                </div>
                <!--Services Two Single End-->
                <!--Services Two Single Start-->
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="600ms">
                    <div class="services-two__single">
                        <div class="">
                            <div class="services-two__icon">
                                
                                <img src="<?php echo e(asset('assets/photos/value.png')); ?>">
                            </div>
                        </div>
                        <h3 class="services-two__title"><a href="" onclick="return false;">Values</a></h3>

                    </div>
                </div>
                <!--Services Two Single End-->
                <!--Services Two Single Start-->
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="700ms">
                    <div class="services-two__single">
                        <div class="">
                            <div class="services-two__icon">
                                
                                <img src="<?php echo e(asset('assets/photos/en.png')); ?>">
                            </div>
                        </div>
                        <h3 class="services-two__title"><a href="" onclick="return false;">Energy</a>
                        </h3>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Company Culture End-->
<!-- Ecommerce Start-->
<section class="about-one">
    <div class="about-one-bg wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms" style="background-image: url(<?php echo e(asset('assets/photos/gra.png')); ?>)">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="about-one__left">
                    <div class="about-one__img-box wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                        <div class="about-one__img">
                            <a target="_blank" href="https://pro1globalhomecenter.com/home.html?divisionId=1&townshipId=18">
                                <img src="<?php echo e(asset('assets/photos/e-commerceads5.jpg')); ?>" alt=""></a>
                        </div>
                        <!-- <div class="about-one__img-two">
                            <img src="assets//secbanner5.png" alt="">
                        </div> -->
                        <a target="_blank" href="https://pro1globalhomecenter.com/home.html?divisionId=1&townshipId=18">
                            
                        </a>
                        <!-- <div class="about-one__shape-1">
                            <img src="assets/photos/secbanner5.png" alt="">
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="about-one__right">
                    <div class="section-title text-left">
                        <div class="section-sub-title-box">
                            <p class="section-sub-title"></p>

                        </div>
                        <h2 class="section-title__title"> E-commerce website</h2>
                    </div>
                    <p class="about-one__text-1">
                        Benefit of our e-commerce website:</p>
                    <ul class="list-unstyled about-one__points">
                        <li>
                            <div class="icon">
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="text">
                                <p>Can find the product from anywhere.</p>
                            </div>

                        </li>
                    </ul>
                    <ul class="list-unstyled about-one__points">
                        <li>
                            <div class="icon">
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="text">
                                <p>Can check the promotion and special offer.</p>
                            </div>

                        </li>
                    </ul>
                    <ul class="list-unstyled about-one__points">
                        <li>
                            <div class="icon">
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="text">
                                <p>Can check product information and service information.</p>
                            </div>

                        </li>
                    </ul>
                    <ul class="list-unstyled about-one__points">
                        <li>
                            <div class="icon">
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="text">
                                <p>Can place the order from anywhere.</p>
                            </div>

                        </li>
                    </ul>
                    <ul class="list-unstyled about-one__points">
                        <li>
                            <div class="icon">
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="text">
                                <p>Delivery from all branches on Current Ecommerce Website.</p>
                            </div>

                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Ecommerce End-->
<!-- Ecommerce Download Start-->
<section class="download">
    <div class="download-bg" style="background-image: url(<?php echo e(asset('assets/images/shapes/services-two-shape-1.png')); ?>)"></div>
    <div class="download-shape-1 float-bob-y">
        <img src="<?php echo e(asset('assets/images/shapes/download-shape-1.png')); ?>" alt="">
    </div>
    <div class="download-shape-2 float-bob-x">
        <img src="<?php echo e(asset('assets/images/shapes/download-shape-2.png')); ?>" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-7 col-lg-6">
                <div class="download__left">
                    <p class="download__sub-title">Get our Shop application free now!</p>
                    <h1 class="download__title">Download our application</h1>
                    <div class="download__apps">
                        <div class="download__app-one">
                            <a target="_blank" href="https://play.google.com/store/apps/details?id=com.pro1.ecommerce">
                                <i class="fa fa-play"></i>
                                <p> <span>Available on</span> <br> Google Play</p>
                            </a>
                        </div>
                        <div class="download__app-one download__app-one--two">
                            <a target="_blank" href="https://apps.apple.com/us/app/pro-1-global/id1605570164">
                                <i class="fab fa-apple"></i>
                                <p> <span>get it on</span> <br> Play Store</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-lg-6">
                <div class="download__right">
                    <div class="download__img wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
                        <img src="<?php echo e(asset('assets/photos/ecommerceapp.png')); ?>" alt="">
                        <div class="download__badge">
                            <!-- <img src="assets/images/shapes/download-dadge.png" alt=""> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Ecommerce Download End-->
<!-- Service Start -->
<section class="services-one" id="ourServices">
    <div class="services-one__top">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6">
                    <div class="services-one__top-left">
                        <div class="section-title text-left">
                            <div class="section-sub-title-box">
                                <p class="section-sub-title">Our services</p>
                                <div class="section-title-shape-1">
                                    <img src="<?php echo e(asset('assets/images/shapes/section-title-shape-1.png')); ?>" alt="">
                                </div>
                                <div class="section-title-shape-2">
                                    <img src="<?php echo e(asset('assets/images/shapes/section-title-shape-2.png')); ?>" alt="">
                                </div>
                            </div>
                            <h2 class="section-title__title">Take a look at the Super Services of PRO1 Global Home Center</h2>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6">
                    <div class="services-one__top-right">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="services-one__bottom">
        <div class="services-one__container">
            <div class="row">
                <!--Services One Single Start-->
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="services-one__single">
                        <a href="<?php echo e(route('product_information')); ?>">
                            <div class="service-one__img">
                                <img src="<?php echo e(asset('assets/photos/Only Icon/Product Information.png')); ?>" alt="">
                            </div>
                        </a>
                        <div class="service-one__content">
                            <h2 class="service-one__title"><a href="<?php echo e(route('product_information')); ?>">-See More-</a></h2>
                            <h5>"Product Information"</h5>

                        </div>
                    </div>
                </div>
                <!--Services One Single End-->
                <!--Services One Single Start-->
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <a href="<?php echo e(route('delivery_service')); ?>">
                        <div class="services-one__single">
                            <div class="service-one__img">
                                <img src="<?php echo e(asset('assets/csr_photos/delivery.png')); ?>" alt="">
                            </div>
                            <div class="service-one__content">

                                <h2 class="service-one__title"><a href="<?php echo e(route('delivery_service')); ?>">-See More-</a></h2>
                                <h5>"Delivery Service"</h5>

                            </div>
                        </div>
                    </a>
                </div>
                <!--Services One Single End-->
                <!--Services One Single Start-->
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                    <a href="<?php echo e(route('special_order')); ?>">
                        <div class="services-one__single">
                            <div class="service-one__img">
                                <img src="<?php echo e(asset('assets/photos/Only Icon/Special Order.png')); ?>" alt="">
                            </div>
                            <div class="service-one__content">

                                <h2 class="service-one__title"><a href="<?php echo e(route('special_order')); ?>">-See More-</a></h2>
                                <h5>"Special Order"</h5>
                                </h2>

                            </div>
                        </div>
                </div>
                <!--Services One Single End-->
                <!--Services One Single Start-->
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                    <a href="<?php echo e(route('product_return')); ?>">
                        <div class="services-one__single">
                            <div class="service-one__img">
                                <img src="<?php echo e(asset('assets/photos/Only Icon/Product Return.png')); ?>" alt="">
                            </div>
                            <div class="service-one__content">

                                <h2 class="service-one__title"><a href="<?php echo e(route('product_return')); ?>">-See More-</a></h2>
                                <h5>"Product Return"</h5>
                                </h2>

                            </div>
                        </div>
                </div>
                <!--Services One Single End-->
                <!--Services One Single Start-->
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="500ms">
                    <a href="<?php echo e(route('consulting_service')); ?>">
                        <div class="services-one__single">
                            <div class="service-one__img">
                                <img src="<?php echo e(asset('assets/photos/Only Icon/Consulting Service.png')); ?>" alt="">
                            </div>
                            <div class="service-one__content">

                                <h2 class="service-one__title"><a href="<?php echo e(route('consulting_service')); ?>">-See More-</a></h2>
                                <h5>"Consulting Service"</h5>
                                </h2>

                            </div>
                        </div>
                </div>
                <!--Services One Single End-->
                <!--Services One Single Start-->
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="600ms">
                    <a href="<?php echo e(route('contractor_information')); ?>">
                        <div class="services-one__single">
                            <div class="service-one__img">
                                <img src="<?php echo e(asset('assets/photos/Only Icon/Contractor Information.png')); ?>" alt="">
                            </div>
                            <div class="service-one__content">

                                <h2 class="service-one__title"><a href="<?php echo e(route('contractor_information')); ?>">-See More-</a></h2>
                                <h5>"Contractor Information"</h5>
                                </h2>

                            </div>
                        </div>
                </div>
                <!--Services One Single End-->
                <!--Services One Single Start-->
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="700ms">
                    <a href="<?php echo e(route('member_service')); ?>">
                        <div class="services-one__single">
                            <div class="service-one__img">
                                <img src="<?php echo e(asset('assets/photos/Only Icon/Member Service.png')); ?>" alt="">
                            </div>
                            <div class="service-one__content">

                                <h2 class="service-one__title"><a href="<?php echo e(route('member_service')); ?>">-See More-</a></h2>
                                <h5>"Member Service"</h5>
                                </h2>

                            </div>
                        </div>
                </div>
                <!--Services One Single End-->
                <!--Services One Single Start-->
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="800ms">
                    <a href="<?php echo e(route('repair_service')); ?>">
                        <div class="services-one__single">
                            <div class="service-one__img">
                                <img src="<?php echo e(asset('assets/csr_photos/service.png')); ?>" alt="">
                            </div>
                            <div class="service-one__content">

                                <h2 class="service-one__title"><a href="<?php echo e(route('repair_service')); ?>">-See More-</a></h2>
                                <h5>"Repair & Installation"</h5>
                                </h2>

                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Service End -->
<!-- Member Download Start-->
<section class="download">
    <div class="download-bg" style="background-image: url(<?php echo e(asset('assets/images/shapes/services-two-shape-1.png')); ?>)"></div>
    <div class="download-shape-1 float-bob-y">
        <img src="<?php echo e(asset('assets/images/shapes/download-shape-1.png')); ?>" alt="">
    </div>
    <div class="download-shape-2 float-bob-x">
        <img src="<?php echo e(asset('assets/images/shapes/download-shape-2.png')); ?>" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-7 col-lg-6">
                <div class="download__left">
                    <p class="download__sub-title">Get member application free now!</p>
                    <h1 class="download__title">Download our application</h1>
                    <div class="download__apps">
                        <div class="download__app-one">
                            <a target="_blank" href="https://play.google.com/store/apps/details?id=com.pro1.rewards">
                                <i class="fa fa-play"></i>
                                <p> <span>Available on</span> <br> Google Play</p>
                            </a>
                        </div>
                        <div class="download__app-one download__app-one--two">
                            <a target="_blank" href="https://apps.apple.com/us/app/pro-1-member/id1528296877">
                                <i class="fab fa-apple"></i>
                                <p> <span>get it on</span> <br> Play Store</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-lg-6">
                <div class="download__right">
                    <div class="download__img wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
                        <img src="<?php echo e(asset('assets/photos/memberapp.png')); ?>" alt="">
                        <div class="download__badge">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Member Download End-->

<!-- Our Centers Start-->
<section class="ourcenter mt-5" id="ourCenter">
    <div class="container">
        <div class="row">
            <div class="section-title text-left">
                <div class="section-sub-title-box">
                    <p class="section-sub-title">Our Centers</p>
                    <div class="section-title-shape-1">
                        <img src="<?php echo e(asset('assets/images/shapes/section-title-shape-1.png')); ?>" alt="">
                    </div>
                    <div class="section-title-shape-2">
                        <img src="<?php echo e(asset('assets/images/shapes/section-title-shape-2.png')); ?>" alt="">
                    </div>
                </div>
                <h2 class="section-title__title">Information of our currently opened centers</h2>
            </div>
        </div>
        <div class="section-sub-title-box">
            <h3 class="section-sub-title"><i class="fas fa-map-marker-alt p-2"></i>Yangon Region<i class="fas fa-map-marker-alt px-2"></i></h3>
            <!-- <div class="section-title-shape-1">
                <img src="assets/images/shapes/section-title-shape-1.png" alt="">
            </div>
            <div class="section-title-shape-2">
                <img src="assets/images/shapes/section-title-shape-2.png" alt="">
            </div> -->
        </div>
        <div class="row filter-layout masonary-layout mt-3">
            <div class="col-xl-4 col-lg-6 col-md-6 filter-item stra busi insur">
                <div class="portfolio__single">
                    <div class="portfolio__img">
                        <img src="<?php echo e(asset('assets/photos/lanthit.png')); ?>" alt="">
                        <div class="portfolio__plus">
                            <a href="<?php echo e(asset('assets/photos/lanthit.png')); ?>" class="img-popup"><span class="icon-plus"></span></a>
                        </div>
                        <div class="portfolio__content">
                            <p class="portfolio__sub-title">Lanthit Branch, Yangon</p>
                            <h4 class="portfolio__title"><a href="<?php echo e(route('lanthit_info')); ?>">Show Detail</a></h4>
                        </div>
                        <div>&nbsp;PRO 1 Global Home Center (Lanthit Branch )</div>
                        <div>&nbsp;<i class="fa-solid fa-location-dot"></i>&nbsp;No.(Ma-8/6), Theik Pan Road, Between 62 st & 63 st, Chanmyatharsi Township, Mandalay.</div>
                        <div>&nbsp;<i class="fa-solid fa-clock"></i>&nbsp;Open Hour : 08:30 AM ~ 05:30 PM</div>
                        <div>&nbsp;<i class="fa-solid fa-phone-flip"></i>&nbsp;09-777000942, 09-777000943</div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 filter-item stra busi insur">
                <div class="portfolio__single">
                    <div class="portfolio__img">
                        <img src="<?php echo e(asset('assets/photos/satsan.png')); ?>" alt="">
                        <div class="portfolio__plus">
                            <a href="<?php echo e(asset('assets/photos/satsan.png')); ?>" class="img-popup"><span class="icon-plus"></span></a>
                        </div>
                        <div class="portfolio__content">
                            <p class="portfolio__sub-title">Satsan Branch, Yangon</p>
                            <h4 class="portfolio__title"><a href="<?php echo e(route('satsan_info')); ?>">Show Detail</a></h4>
                        </div>
                        <div>&nbsp;PRO 1 Global Home Center (Satsan Branch)</div>
                        <div>&nbsp;<i class="fa-solid fa-location-dot"></i>&nbsp;No . 05, Upper Pazundaung Road, 9th Street Bus Stop, Mingalar Taung Nyunt Township, Yangon.</div>
                        <div>&nbsp;<i class="fa-solid fa-clock"></i>&nbsp;Open Hour : 08:30 AM ~ 05:00 PM</div>
                        <div>&nbsp;<i class="fa-solid fa-phone-flip"></i>&nbsp;01-201849, 01-201850, 09-777000849</div>
                    </div>
                </div>
            </div>
            <!--Portfolio Single End-->
            <!--Portfolio Single Start-->
            <div class="col-xl-4 col-lg-6 col-md-6 filter-item stra busi poli">
                <div class="portfolio__single">
                    <div class="portfolio__img">
                        <img src="<?php echo e(asset('assets/photos/eastdagon.png')); ?>" alt="">
                        <div class="portfolio__plus">
                            <a href="<?php echo e(asset('assets/photos/eastdagon.png')); ?>" class="img-popup"><span class="icon-plus"></span></a>
                        </div>
                        <div class="portfolio__content">
                            <p class="portfolio__sub-title">East Dagon Branch, Yangon</p>
                            <h4 class="portfolio__title"><a href="<?php echo e(route('eastdagon_info')); ?>">Show Detail</a></h4>
                        </div>
                        <div>&nbsp;PRO 1 Global Home Center (East Dagon Branch )</div>
                        <div>&nbsp;<i class="fa-solid fa-location-dot"></i>&nbsp;No.(1/ka), No(2) Main Road, Near School of Nursing and Midwifery,East Dagon , Yangon</div>
                        <div>&nbsp;<i class="fa-solid fa-clock"></i>&nbsp;Open Hour : 08:30 AM ~ 06:00 PM</div>
                        <div>&nbsp;<i class="fa-solid fa-phone-flip"></i>&nbsp; 01-2585158, 01-2585159, 09-777000867</div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-6 col-md-6 filter-item stra busi poli">
                <div class="portfolio__single">
                    <div class="portfolio__img">
                        <img src="<?php echo e(asset('assets/photos/hlaingtharyar.png')); ?>" alt="">
                        <div class="portfolio__plus">
                            <a href="<?php echo e(asset('assets/photos/hlaingtharyar.png')); ?>" class="img-popup"><span class="icon-plus"></span></a>
                        </div>
                        <div class="portfolio__content">
                            <p class="portfolio__sub-title">HlaingTharYar Branch, Yangon</p>
                            <h4 class="portfolio__title"><a href="<?php echo e(route('hlaingtharyar_info')); ?>">Show Detail</a></h4>
                        </div>
                        <div>&nbsp;PRO 1 Global Home Center(HlaingTharYar Branch)</div>
                        <div>&nbsp;<i class="fa-solid fa-location-dot"></i>&nbsp;No (4/5),Corner of Yangon-Pathein & Yangon-TwanTay Road, HlaingTharYar Township,Yangon</div>
                        <div>&nbsp;<i class="fa-solid fa-clock"></i>&nbsp;Open Hour : 09:00 AM ~ 05:00 PM</div>
                        <div>&nbsp;<i class="fa-solid fa-phone-flip"></i>&nbsp;09-777002840 , 09-777002850</div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-6 col-md-6 filter-item stra busi poli">
                <div class="portfolio__single">
                    <div class="portfolio__img">
                        <img src="<?php echo e(asset('assets/photos/terminal.jpg')); ?>" alt="">
                        <div class="portfolio__plus">
                            <a href="<?php echo e(asset('assets/photos/terminal.jpg')); ?>" class="img-popup"><span class="icon-plus"></span></a>
                        </div>
                        <div class="portfolio__content">
                            <p class="portfolio__sub-title">PRO 1 PLUS Terminal M Branch, Yangon</p>
                            <h4 class="portfolio__title"><a href="<?php echo e(route('teminalm_info')); ?>">Show Detail</a></h4>
                        </div>
                        <div>&nbsp;PRO 1 Global Home Center(Terminal M Branch)</div>
                        <div>&nbsp;<i class="fa-solid fa-location-dot"></i>&nbsp;No.196, 1st Floor, Terminal M Shopping Mall, Mingalardon Township, Yangon.</div>
                        <div>&nbsp;<i class="fa-solid fa-clock"></i>&nbsp;Open Hour : 09:00 AM ~ 05:00 PM</div>
                        <div>&nbsp;<i class="fa-solid fa-phone-flip"></i>&nbsp;09777047310</div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 filter-item stra busi poli">
                <div class="portfolio__single">
                    <div class="portfolio__img">
                        <img src="<?php echo e(asset('assets/photos/southdagon.jpg')); ?>" alt="">
                        <div class="portfolio__plus">
                            <a href="<?php echo e(asset('assets/photos/southdagon.jpg')); ?>" class="img-popup"><span class="icon-plus"></span></a>
                        </div>
                        <div class="portfolio__content">
                            <p class="portfolio__sub-title">South Dagon, Yangon</p>
                            <h4 class="portfolio__title"><a href="<?php echo e(route('southdagon_info')); ?>">Show Detail</a></h4>
                        </div>
                        <div>&nbsp;PRO 1 Global Home Center(South Dagon Branch)</div>
                        <div>&nbsp;<i class="fa-solid fa-location-dot"></i>&nbsp;No.196, 1st Floor, Terminal M Shopping Mall, Mingalardon Township, Yangon.</div>
                        <div>&nbsp;<i class="fa-solid fa-clock"></i>&nbsp;Open Hour : 09:00 AM ~ 05:00 PM</div>
                        <div>&nbsp;<i class="fa-solid fa-phone-flip"></i>&nbsp;09777047310</div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-6 col-md-6 filter-item stra busi poli">
                <div class="portfolio__single">
                    <div class="portfolio__img">
                        <img src="<?php echo e(asset('assets/photos/shwepyithar.jpg')); ?>" alt="">
                        <div class="portfolio__plus">
                            <a href="<?php echo e(asset('assets/photos/shwepyithar.jpg')); ?>" class="img-popup"><span class="icon-plus"></span></a>
                        </div>
                        <div class="portfolio__content">
                            <p class="portfolio__sub-title">Shwe Pyi Thar Branch, Yangon</p>
                            <h4 class="portfolio__title"><a href="<?php echo e(route('shwepyithar_info')); ?>">Show Detail</a></h4>
                        </div>
                        <div>&nbsp;PRO 1 Global Home Center(Shwe Pyi Thar Branch)</div>
                        <div>&nbsp;<i class="fa-solid fa-location-dot"></i>&nbsp;No.196, 1st Floor, Terminal M Shopping MallYangon Industrial Zone, Mingalardon Township, Yangon.</div>
                        <div>&nbsp;<i class="fa-solid fa-clock"></i>&nbsp;Open Hour : 09:00 AM ~ 05:00 PM</div>
                        <div>&nbsp;<i class="fa-solid fa-phone-flip"></i>&nbsp;09777047310</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ourcenter mt-5" id="ourCenter">
    <div class="container">
        <div class="section-sub-title-box">
            <h3 class="section-sub-title"><i class="fas fa-map-marker-alt p-2"></i>Mandalay Region<i class="fas fa-map-marker-alt px-2"></i></h3>
        </div>
        <div class="row filter-layout masonary-layout mt-3">
            <div class="col-xl-4 col-lg-6 col-md-6 filter-item stra busi insur">
                <div class="portfolio__single">
                    <div class="portfolio__img">
                        <img src="<?php echo e(asset('assets/photos/theikpan.png')); ?>" alt="">
                        <div class="portfolio__plus">
                            <a href="<?php echo e(asset('assets/photos/theikpan.png')); ?>" class="img-popup"><span class="icon-plus"></span></a>
                        </div>
                        <div class="portfolio__content">
                            <p class="portfolio__sub-title">Theikpan Branch, Mandalay</p>
                            <h4 class="portfolio__title"><a href="<?php echo e(route('theikpan_info')); ?>">Show Detail</a></h4>
                        </div>
                        <div>&nbsp;PRO 1 Global Home Center (Theikpan Branch )</div>
                        <div>&nbsp;<i class="fa-solid fa-location-dot"></i>&nbsp;No.(Ma-8/6), Theik Pan Road, Chanmyatharsi Township,Mandalay</div>
                        <div>&nbsp;<i class="fa-solid fa-clock"></i>&nbsp; Open Hour : 08:30 AM ~ 05:30 PM</div>
                        <div>&nbsp;<i class="fa-solid fa-phone-flip"></i>&nbsp;09-777000942, 09-777000943, 09-777000944</div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-6 col-md-6 filter-item stra busi insur">
                <div class="portfolio__single">
                    <div class="portfolio__img">
                        <img src="<?php echo e(asset('assets/photos/tampawady.png')); ?>" alt="">
                        <div class="portfolio__plus">
                            <a href="<?php echo e(asset('assets/photos/tampawady.png')); ?>" class="img-popup"><span class="icon-plus"></span></a>
                        </div>
                        <div class="portfolio__content">
                            <p class="portfolio__sub-title">Tampawady Branch, Mandalay</p>
                            <h4 class="portfolio__title"><a href="<?php echo e(route('tampawady_info')); ?>">Show Detail</a></h4>
                        </div>
                        <div>&nbsp;PRO 1 Global Home Center (Tampawady Branch )</div>
                        <div>&nbsp;<i class="fa-solid fa-location-dot"></i>&nbsp;No. (489/490), Corner of LanthitStreet & ShweSanKaing Pagoda,Chanmyatharsi, Mandalay.</div>
                        <div>&nbsp;<i class="fa-solid fa-clock"></i>&nbsp; Open Hour : 08:30 AM ~ 05:30 PM</div>
                        <div>&nbsp;<i class="fa-solid fa-phone-flip"></i>&nbsp; 09-777000925 , 09-777000929</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ourcenter mt-5" id="ourCenter">
    <div class="container">
        <div class="section-sub-title-box">
            <h3 class="section-sub-title"><i class="fas fa-map-marker-alt p-2"></i>Bago Region<i class="fas fa-map-marker-alt px-2"></i></h3>
        </div>
        <div class="row filter-layout masonary-layout mt-3">
            <div class="col-xl-4 col-lg-6 col-md-6 filter-item stra busi insur">
                <div class="portfolio__single">
                    <div class="portfolio__img">
                        <img src="<?php echo e(asset('assets/photos/bago.jpg')); ?>" alt="">
                        <div class="portfolio__plus">
                            <a href="<?php echo e(asset('assets/photos/bago.jpg')); ?>" class="img-popup"><span class="icon-plus"></span></a>
                        </div>
                        <div class="portfolio__content">
                            <p class="portfolio__sub-title">Bago Branch, Bago</p>
                            <h4 class="portfolio__title"><a href="<?php echo e(route('bago_info')); ?>">Show Detail</a></h4>
                        </div>
                        <div>&nbsp;PRO 1 Global Home Center (Bago Branch)</div>
                        <div>&nbsp;<i class="fa-solid fa-location-dot"></i>&nbsp;Ward.8, Oakthar Myo Thit, Bago Township, Bago, Myanmar</div>
                        <div>&nbsp;<i class="fa-solid fa-clock"></i>&nbsp;Open Hour : 08:30 AM ~ 05:30 PM</div>
                        <div>&nbsp;<i class="fa-solid fa-phone-flip"></i>&nbsp;09-799695755</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ourcenter mt-5" id="ourCenter">
    <div class="container">
        <div class="section-sub-title-box">
            <h3 class="section-sub-title"><i class="fas fa-map-marker-alt p-2"></i>Mon Region<i class="fas fa-map-marker-alt px-2"></i></h3>
        </div>
        <div class="row filter-layout masonary-layout mt-3">
            <div class="col-xl-4 col-lg-6 col-md-6 filter-item stra busi insur">
                <div class="portfolio__single">
                    <div class="portfolio__img">
                        <img src="<?php echo e(asset('assets/photos/mawlamyine.png')); ?>" alt="">
                        <div class="portfolio__plus">
                            <a href="<?php echo e(asset('assets/photos/mawlamyine.png')); ?>" class="img-popup"><span class="icon-plus"></span></a>
                        </div>
                        <div class="portfolio__content">
                            <p class="portfolio__sub-title">Mawlamyine Branch, Mandalay</p>
                            <h4 class="portfolio__title"><a href="<?php echo e(route('mawlamyine_info')); ?>">Show Detail</a></h4>
                        </div>
                        <div>&nbsp;PRO 1 Global Home Center (Mawlamyine Branch )</div>
                        <div>&nbsp;<i class="fa-solid fa-location-dot"></i>&nbsp;No.(70), Corner of Upper Main Road & A Lal Tan Street, Maung Ngan Quarter, Mawlamyine</div>
                        <div>&nbsp;<i class="fa-solid fa-clock"></i>&nbsp;Open Hour : 08:30 AM ~ 05:30 PM</div>
                        <div>&nbsp;<i class="fa-solid fa-phone-flip"></i>&nbsp;09-777000942, 09-777000943</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ourcenter mt-5" id="ourCenter">
    <div class="container">
        <div class="section-sub-title-box">
            <h3 class="section-sub-title"><i class="fas fa-map-marker-alt p-2"></i>Shan Region<i class="fas fa-map-marker-alt px-2"></i></h3>
        </div>
        <div class="row filter-layout masonary-layout mt-3">
            <div class="col-xl-4 col-lg-6 col-md-6 filter-item stra busi insur">
                <div class="portfolio__single">
                    <div class="portfolio__img">
                        <img src="<?php echo e(asset('assets/photos/ayetharyar.png')); ?>" alt="">
                        <div class="portfolio__plus">
                            <a href="<?php echo e(asset('assets/photos/ayetharyar.png')); ?>" class="img-popup"><span class="icon-plus"></span></a>
                        </div>
                        <div class="portfolio__content">
                            <p class="portfolio__sub-title">Aye Tharyar Branch, Mandalay</p>
                            <h4 class="portfolio__title"><a href="<?php echo e(route('ayetharyar_info')); ?>">Show Detail</a></h4>
                        </div>
                        <div>&nbsp;PRO 1 Global Home Center (Aye Tharyar Branch )</div>
                        <div>&nbsp;<i class="fa-solid fa-location-dot"></i>&nbsp;  No. (6 to 17), Pyi Htaung Su Road, 5-Quarter, Aye Tharyar, Taunggyi Township,Shan State</div>
                        <div>&nbsp;<i class="fa-solid fa-clock"></i>&nbsp;Open Hour : 08:30 AM ~ 05:30 PM</div>
                        <div>&nbsp;<i class="fa-solid fa-phone-flip"></i>&nbsp;09-777003701, 09-777003702,09-777003703</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Our Center End -->
<!-- Our Partner Start -->
<section class="testimonial-one" id="ourPatner">
    <div class="testimonial-one-shape-2 float-bob-y">
        <img src="assets/images/shapes/testimonial-one-shape-2.png" alt="">
    </div>
    <div class="testimonial-one-shape-3 float-bob-y">
        <img src="assets/images/shapes/testimonial-one-shape-3.png" alt="">
    </div>
    <div class="container">
        <div class="testimonial-one__top">
            <div class="row">
                <div class="col-xl-6">
                    <div class="testimonial-one__top-left">
                        <div class="section-title text-left">
                            <div class="section-sub-title-box">
                                <p class="section-sub-title">OUR PARTNERS</p>
                                <div class="section-title-shape-1">
                                    <img src="assets/images/shapes/section-title-shape-1.png" alt="">
                                </div>
                                <div class="section-title-shape-2">
                                    <img src="assets/images/shapes/section-title-shape-2.png" alt="">
                                </div>
                            </div>
                            <p class="section-title__title">Let's take a look at the pataner companies<br>we work with</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="testimonial-one__top-right">
                        <p class="testimonial-one__top-text">Just click on the brands below and you can order those brand products on our E-commerce website.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="testimonial-one__bottom">
            <div class="row">
                <div class="col-xl-12">
                    <div class="owl-carousel owl-theme thm-owl__carousel testimonial-one__carousel owl-loaded owl-drag" data-owl-options='{
                        "loop": true,
                        "autoplay": true,
                        "margin": 30,
                        "nav": false,
                        "dots": false,
                        "smartSpeed": 500,
                        "autoplayTimeout": 10000,
                        "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                        "responsive": {
                            "0": {
                                "items": 1
                            },
                            "768": {
                                "items": 3
                            },
                            "992": {
                                "items": 4
                            },
                            "1200": {
                                "items": 4
                            }
                        }
                    }'>
                        <div class="item">
                            <div class="testimonial-one__single">
                                <div class="testimonial-one__single-inner">
                                    <div class="testimonial-one__shape-1">
                                        <img src="<?php echo e(asset('assets/images/shapes/testimonial-one-shape-1.png')); ?>" alt="">
                                    </div>
                                    <div class="partaner mb-5">
                                        <h6>"OPPLE Lighting Company"</h6>
                                    </div>
                                    <div class="testimonial-one__client-info">
                                        <div class=>
                                            <a target="_blank" href="https://pro1globalhomecenter.com/product-list.html?divisionId=1&townshipId=18&sortBy=1&searchText=OPPLE">
                                                <img src="<?php echo e(asset('assets/photos/brands/B2.png')); ?>" alt=""></a>
                                            <!-- <div class="testimonial-one__quote">
                                                        <img src="assets/images/testimonial/testimonial-1-quote.png" alt="">
                                                    </div> -->
                                        </div>
                                        <div class="testimonial-one__client-content">

                                            <div class="testimonial-one__client-details">
                                                <!-- <h3 class="testimonial-one__client-name">OPPLE</h3> -->
                                                <p class="testimonial-one__client-sub-title"></p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <p class="testimonial-one__text">Pellentesque habitant morbi tristique senectus netus et malesuada fames ac turp egestas. Aliquam viverra arcu. Donec aliquet blandit enim feugiat mattis.</p> -->
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-one__single">
                                <div class="testimonial-one__single-inner">
                                    <div class="testimonial-one__shape-1">
                                        <img src="<?php echo e(asset('assets/images/shapes/testimonial-one-shape-1.png')); ?>" alt="">
                                    </div>
                                    <div class="partaner mb-5">
                                        <h6>"Mitsubishi Corporation"</h6>
                                    </div>
                                    <div class="testimonial-one__client-info">
                                        <div class=>
                                            <a target="_blank" href="https://pro1globalhomecenter.com/product-list.html?divisionId=1&townshipId=18&brandId=49">
                                                <img src="<?php echo e(asset('assets/photos/brands/B3.png')); ?>" alt=""></a>
                                            <!-- <div class="testimonial-one__quote">
                                                        <img src="assets/images/testimonial/testimonial-1-quote.png" alt="">
                                                    </div> -->
                                        </div>
                                        <div class="testimonial-one__client-content">

                                            <div class="testimonial-one__client-details">
                                                <!-- <h3 class="testimonial-one__client-name">MITSUBISHI</h3> -->
                                                <p class="testimonial-one__client-sub-title"></p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <p class="testimonial-one__text">Pellentesque habitant morbi tristique senectus netus et malesuada fames ac turp egestas. Aliquam viverra arcu. Donec aliquet blandit enim feugiat mattis.</p> -->
                                </div>
                            </div>
                        </div>
                        <!-- <div class="item">
                                    <div class="testimonial-one__single">
                                        <div class="testimonial-one__single-inner">
                                            <div class="testimonial-one__shape-1">
                                                <img src="assets/images/shapes/testimonial-one-shape-1.png" alt="">
                                            </div>
                                            <div class="testimonial-one__client-info">
                                                <div class="testimonial-one__client-img-box">
                                                    <img src="assets/photos/Brands/B8.png" alt="">
                                                    <div class="testimonial-one__quote">
                                                        <img src="assets/images/testimonial/testimonial-1-quote.png" alt="">
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div> -->
                        <div class="item">
                            <div class="testimonial-one__single">
                                <div class="testimonial-one__single-inner">
                                    <div class="testimonial-one__shape-1">
                                        <img src="<?php echo e(asset('assets/images/shapes/testimonial-one-shape-1.png')); ?>" alt="">
                                    </div>
                                    <div class="partaner mb-4">
                                        <h6>"Panasonic Holdings Corporation"</h6>
                                    </div>
                                    <div class="testimonial-one__client-info">
                                        <div class=>
                                            <a target="_blank" href="https://pro1globalhomecenter.com/product-list.html?divisionId=1&townshipId=18&brandId=82">
                                                <img src="<?php echo e(asset('assets/photos/brands/B5.png')); ?>" alt=""></a>
                                            <!-- <div class="testimonial-one__quote">
                                                        <img src="assets/images/testimonial/testimonial-1-quote.png" alt="">
                                                    </div> -->
                                        </div>
                                        <div class="testimonial-one__client-content">

                                            <div class="testimonial-one__client-details">
                                                <!-- <h3 class="testimonial-one__client-name">PANASONIC</h3> -->
                                                <p class="testimonial-one__client-sub-title"></p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <p class="testimonial-one__text">Pellentesque habitant morbi tristique senectus netus et malesuada fames ac turp egestas. Aliquam viverra arcu. Donec aliquet blandit enim feugiat mattis.</p> -->
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-one__single">
                                <div class="testimonial-one__single-inner">
                                    <div class="testimonial-one__shape-1">
                                        <img src="<?php echo e(asset('assets/images/shapes/testimonial-one-shape-1.png')); ?>" alt="">
                                    </div>
                                    <div class="partaner mb-4">
                                        <h6>"Panasonic Holdings Corporation"</h6>
                                    </div>
                                    <div class="testimonial-one__client-info">
                                        <div class=>
                                            <a target="_blank" href="https://pro1globalhomecenter.com/product-list.html?divisionId=1&townshipId=18&brandId=81">
                                                <img src="<?php echo e(asset('assets/photos/brands/B6.png')); ?>" alt=""></a>
                                            <!-- <div class="testimonial-one__quote">
                                                        <img src="assets/images/testimonial/testimonial-1-quote.png" alt="">
                                                    </div> -->
                                        </div>
                                        <div class="testimonial-one__client-content">

                                            <div class="testimonial-one__client-details">
                                                <!-- <h3 class="testimonial-one__client-name">LEGRAND</h3> -->
                                                <p class="testimonial-one__client-sub-title"></p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <p class="testimonial-one__text">Pellentesque habitant morbi tristique senectus netus et malesuada fames ac turp egestas. Aliquam viverra arcu. Donec aliquet blandit enim feugiat mattis.</p> -->
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-one__single">
                                <div class="testimonial-one__single-inner">
                                    <div class="testimonial-one__shape-1">
                                        <img src="<?php echo e(asset('assets/images/shapes/testimonial-one-shape-1.png')); ?>" alt="">
                                    </div>
                                    <div class="partaner mb-4">
                                        <h6>"Panasonic Holdings Corporation"</h6>
                                    </div>
                                    <div class="testimonial-one__client-info">
                                        <div class=>
                                            <a target="_blank" href="https://pro1globalhomecenter.com/product-list.html?divisionId=1&townshipId=18&brandId=87">
                                                <img src="<?php echo e(asset('assets/photos/brands/B7.jpg')); ?>" alt=""></a>
                                        </div>
                                        <div class="testimonial-one__client-content">

                                            <div class="testimonial-one__client-details">
                                                <!-- <h3 class="testimonial-one__client-name">TOTO</h3> -->
                                                <p class="testimonial-one__client-sub-title"></p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <p class="testimonial-one__text">Pellentesque habitant morbi tristique senectus netus et malesuada fames ac turp egestas. Aliquam viverra arcu. Donec aliquet blandit enim feugiat mattis.</p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Our Partner End -->
<!-- Our Activities Start -->
<section class="portfolio" id="ouractivities">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="section-title text-left">
                    <div class="section-sub-title-box">
                        <p class="section-sub-title">Our Activities</p>
                        <div class="section-title-shape-1">
                            <img src="<?php echo e(asset('assets/images/shapes/section-title-shape-1.png')); ?>" alt="">
                        </div>
                        <div class="section-title-shape-2">
                            <img src="<?php echo e(asset('assets/images/shapes/section-title-shape-2.png')); ?>" alt="">
                        </div>
                    </div>
                    <p class="section-title__title">Let's take a look at<br> our company's activities </p>
                </div>
                <ul class="portfolio-filter style1 post-filter has-dynamic-filters-counter list-unstyled">
                    <li data-filter=".filter-item" class="active"><span class="filter-text">All</span></li>
                    <?php $__currentLoopData = $act_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li data-filter=".stra"><span class="filter-text "><?php echo e($type->name); ?></span></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                </ul>
            </div>
        </div>

        <div class="row filter-layout masonary-layout">
            <?php $__currentLoopData = $acts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $act): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-xl-4 col-lg-6 col-md-6 filter-item stra custom-img">
                <div class="portfolio__single">
                    <div class="">
                        <img src="<?php echo e(asset("storage/uploads/activity/$act->preview_img")); ?>" alt="" style="object-fit:contain;
                        width:380px;
                        height:420px;
                        border: solid 1px #CCC">
                        <div class="">
                            <a href="<?php echo e(asset('assets/photos/act1.png')); ?>" class="img-popup"></a>
                        </div>
                        <div>
                            <ul class="list-unstyled about-one__points">
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p><?php echo e($act->title); ?> (<?php echo e($act->location); ?>)</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p><?php echo e($act->date); ?></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p><?php echo e($act->description); ?></p>
                                    </div>


                                </li>
                            </ul>
                        </div>
                        <div class="portfolio__content">
                            <p class="portfolio__sub-title"></p>
                            <h4 class="portfolio__title"><a href="#ouractivities">Donation</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <!--Portfolio Single End-->
            

            <!--Portfolio Single Start-->

            <!--Portfolio Single End-->
            <!--Portfolio Single Start-->
            
            <!--Portfolio Single End-->
        </div>
    </div>
</section>
<!-- Our Activities End -->
<!-- Call Head Office Start -->
<section class="cta-one cta-three">
    <div class="container">
        <div class="cta-one__content">
            <div class="cta-one__inner">
                <div class="cta-one__left">
                    <h3 class="cta-one__title">Call to Our Head Office</h3>
                </div>
                <div class="cta-one__right">
                    <div class="cta-one__call">
                        <div class="cta-one__call-icon">
                            <a href="tel:959428751328"><i class="fas fa-phone"></a></i>
                        </div>
                        <div class="cta-one__call-number">
                            <a href="tel:+959777048315 , +959777048316">+959777048315 , +959777048316</a>
                            <p>Call to Our Phone</p>
                        </div>
                    </div>
                    <div class="cta-one__btn-box">
                        <a href="tel:959428751328" class="thm-btn cta-one__btn">Call</a>
                    </div>
                </div>
                <div class="cta-one__img">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Call Head Office End -->
<!-- Contact Us Start -->
<section class="contact-page" id="contactus">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-5">
                <div class="contact-page__left">
                    <div class="section-title text-left">
                        <div class="section-sub-title-box">
                            <p class="section-sub-title">Contact us</p>
                            <div class="section-title-shape-1">
                                <img src="<?php echo e(asset('assets/images/shapes/section-title-shape-1.png')); ?>" alt="">
                            </div>
                            <div class="section-title-shape-2">
                                <img src="<?php echo e(asset('assets/images/shapes/section-title-shape-2.png')); ?>" alt="">
                            </div>
                        </div>
                        <h2 class="section-title__title">To contact our Head Office</h2>
                    </div>
                    <div class="contact-page__call-email">
                        <div class="contact-page__call-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="contact-page__call-email-content">
                            <h4>
                                <a href="tel:+959777048315, +959777048316" class="contact-page__call-number">+959777048315 , +959777048316</a>
                                <a href="mailto:info@pro1globalhomecenter.com">info@pro1globalhomecenter.com</a>
                            </h4>
                        </div>
                    </div>
                    <p class="contact-page__location-text">Near Arlain Ngar Sint Pagoda,<br> Lanthit, Insein</p>
                </div>
            </div>
            <div class="col-xl-8 col-lg-7">
                <div class="contact-page__right">
                    <div class="contact-page__form">
                        <form action="<?php echo e(asset('assets/inc/sendemail.php')); ?>" class="comment-one__form contact-form-validated" novalidate="novalidate">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="comment-form__input-box">
                                        <input type="text" placeholder="Your name" name="name">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="comment-form__input-box">
                                        <input type="email" placeholder="Email address" name="email">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="comment-form__input-box">
                                        <input type="text" placeholder="Phone number" name="phone">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="comment-form__input-box">
                                        <input type="text" placeholder="Subject" name="subject">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="comment-form__input-box text-message-box">
                                        <textarea name="message" placeholder="Write a message"></textarea>
                                    </div>
                                    <div class="comment-form__btn-box">
                                        <button type="submit" class="thm-btn comment-form__btn">Send a
                                            Message</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Us End -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/current_projects/company-profile/resources/views/home.blade.php ENDPATH**/ ?>