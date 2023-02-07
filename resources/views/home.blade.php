@extends('layouts.main')
@section('content')
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
                <div class="image-layer" style="background-image: url({{asset('assets/photos/banner/Banner-1.jpg')}})"></div>
                <!-- /.image-layer -->

                <div class="main-slider-shape-1 float-bob-x">
                    <img src="{{asset('assets/photos/banner/Banner-1.jpg')}}" alt="">
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="main-slider__content">
                                <h2 class="main-slider__title"><span>PRO1 GLOBAL </span><br> HOME CENTER
                                </h2>
                                <p class="main-slider__text"><span class="fw-bold text-dark">{{__('home.slide_word_1')}}<br> {{__('home.slide_word_2')}}</span></p>
                                <div class="main-slider__btn-box">
                                    <a href="https://pro1globalhomecenter.com/home.html?divisionId=1&townshipId=18" class="thm-btn main-slider__btn">"Buy Now"</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="image-layer" style="background-image: url({{asset('assets/photos/banner/Banner-2.jpg')}})"></div>
                <!-- /.image-layer -->

                <div class="main-slider-shape-1 float-bob-x">
                    <img src="{{asset('assets/photos/banner/Banner-2.jpg')}}" alt="">
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="main-slider__content">
                                <h2 class="main-slider__title"><span>PRO1 GLOBAL </span><br> HOME CENTER
                                </h2>
                                <p class="main-slider__text"><span class="fw-bold text-dark">{{__('home.slide_word_1')}}<br> {{__('home.slide_word_2')}}</span></p>
                                <div class="main-slider__btn-box">
                                    <a href="https://pro1globalhomecenter.com/home.html?divisionId=1&townshipId=18" class="thm-btn main-slider__btn">{{__('home.buy_now')}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="image-layer" style="background-image: url({{asset('assets/photos/banner/Banner-3.jpg')}})"></div>
                <!-- /.image-layer -->

                <div class="main-slider-shape-1 float-bob-x">
                    <img src="{{asset('assets/photos/banner/Banner-3.jpg')}}" alt="">
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="main-slider__content">
                                <h2 class="main-slider__title"><span>PRO1 GLOBAL </span><br> HOME CENTER
                                </h2>
                                <p class="main-slider__text"><span class="fw-bold text-dark">{{__('home.slide_word_1')}}<br> {{__('home.slide_word_2')}}</span></p>
                                <div class="main-slider__btn-box">
                                    <a href="https://pro1globalhomecenter.com/home.html?divisionId=1&townshipId=18" class="thm-btn main-slider__btn">{{__('home.buy_now')}}</a>
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
    <div class="we-provide-bg" style="background-image: url({{asset('assets/images/backgrounds/we-provide-bg.jpg')}})">
    </div>
    <div class="container">
        <div class="section-title text-left">
            <div class="section-sub-title-box">
                <p class="section-sub-title">{{__('home.company_vision_mission')}}</p>
                <div class="section-title-shape-1">
                    <img src="{{asset('assets/images/shapes/section-title-shape-1.png')}}" alt="">
                </div>
                <div class="section-title-shape-2">
                    <img src="{{asset('assets/images/shapes/section-title-shape-2.png')}}" alt="">
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
                                <li data-tab="#goals" class="tab-btn active-btn"><span>{{__('home.company_vission')}}</span></li>
                                <li data-tab="#mission" class="tab-btn "><span>{{__('home.company_mission')}}</span>
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
                                            <img src="{{asset('assets/images/shapes/we-provide-shape-1.png')}}" alt="">
                                        </div>
                                        {{-- <div class="we-provide__tab-main-content-left">
                                            <div class="we-provide__tab-main-content-icon">
                                                <span class="icon-mission"></span>
                                            </div>
                                            <h3 class="we-provide__tab-main-content-title">Our Values</h3>
                                            <p class="we-provide__tab-main-content-text">Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt labore dolore magna aliqua enim ad minim veniam quis nostrud.
                                            </p>
                                            <ul class="list-unstyled we-provide__tab-main-content-points">
                                                <li>
                                                    <div class="icon">
                                                        <i class="fa fa-check"></i>
                                                    </div>
                                                    <div class="text">
                                                        <p>Pina & Associates Insurance</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <i class="fa fa-check"></i>
                                                    </div>
                                                    <div class="text">
                                                        <p>Payment at Contingency</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div> --}}
                                        <div class="we-provide__tab-main-content-right">
                                            <div class="we-provide__tab-main-content-right-img">
                                                <img src="{{asset('assets/images/resources/we-provide-tab-main-content-right-img.jpg')}}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--tab-->
                                <div class="tab " id="mission">
                                    <div class="we-provide__tab-main-content-inner">
                                        <div class="we-provide-shape-1">
                                            <img src="{{asset('assets/images/shapes/we-provide-shape-1.png')}}" alt="">
                                        </div>
                                        <div class="we-provide__tab-main-content-left">
                                            <div class="we-provide__tab-main-content-icon">
                                                <span class="icon-mission"></span>
                                            </div>
                                            <h3 class="we-provide__tab-main-content-title">Company Mission</h3>
                                            <p class="we-provide__tab-main-content-text">To be "One place, get all" with competitive price and innovative products to improve people living standard. To do operation excellence and make customer satisfy. To be sustainable growth together with
                                                the stakeholders. To do emphasize to develop PRO 1 Global people capabilities by good organization, working culture and welfare. To apply innovation technology to develop business efficiency. To
                                                operate based on social-responsible and good relationships with the environment.
                                            </p>
                                        </div>
                                        <div class="we-provide__tab-main-content-right">
                                            <div class="we-provide__tab-main-content-right-img">
                                                <img src="{{asset('assets/photos/mission1.png')}}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--tab-->
                                <div class="tab active-tab" id="goals">
                                    <div class="we-provide__tab-main-content-inner">
                                        <div class="we-provide-shape-1">
                                            <img src="{{asset('assets/images/shapes/we-provide-shape-1.png')}}" alt="">
                                        </div>
                                        <div class="we-provide__tab-main-content-left">
                                            <div class="we-provide__tab-main-content-icon">
                                                <span class="icon-mission"></span>
                                            </div>
                                            <h3 class="we-provide__tab-main-content-title">Company Vission</h3>
                                            <p class="we-provide__tab-main-content-text">To be the leader of the construction material and home improvement retail industry in Myanmar.
                                            </p>
                                        </div>
                                        <div class="we-provide__tab-main-content-right">
                                            <div class="we-provide__tab-main-content-right-img">
                                                <img src="{{asset('assets/photos/vision1.png')}}" alt="">
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
                        <img src="{{asset('assets/photos/estab.png')}}" alt="">
                    </div>
                    <div class="feature-two__content">
                        <div class="feature-two__content-inner">
                            <div class="feature-two__icon">

                            </div>
                            <div class="feature-two__text-box">
                                <p class="feature-two__text"><a href="{{route('establish_year')}}">Establish
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
                        <img src="{{asset('assets/photos/milestone-mission.png')}}" alt="">
                    </div>
                    <div class="feature-two__content">
                        <div class="feature-two__content-inner">
                            <div class="feature-two__icon">

                            </div>
                            <div class="feature-two__text-box">
                                <p class="feature-two__text"><a href="{{route('mile_stone')}}">Mile <br>
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
                        <img src="{{asset('assets/photos/joint.png')}}" alt="">
                    </div>
                    <div class="feature-two__content">
                        <div class="feature-two__content-inner">
                            <div class="feature-two__icon">

                            </div>
                            <div class="feature-two__text-box">
                                <p class="feature-two__text"><a href="{{route('joint_venture')}}">Joint<br>
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
                                <img src="{{asset('assets/images/shapes/section-title-shape-1.png')}}" alt="">
                            </div>
                            <div class="section-title-shape-2">
                                <img src="{{asset('assets/images/shapes/section-title-shape-2.png')}}" alt="">
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
                            <img src="{{asset('assets/photos/about.jpg')}}" alt="">
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
                                    <h3 class="count-text" data-speed="4000" data-stop="2500">00</h3>
                                </div>
                                <p class="about-two__counter-text-1">Total Employee</p>
                                <p class="about-two__counter-text-2">We can employ 2500 employees in various PRO 1 company departments.
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
    <div class="services-two-shape-1" style="background-image: url({{asset('assets/images/shapes/services-two-shape-1.png')}})"></div>
    <div class="container">
        <div class="services-two__top">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="services-two__top-left">
                        <div class="section-title text-left">
                            <div class="section-sub-title-box">
                                <p class="section-sub-title">Company Culture</p>
                                <div class="section-title-shape-1">
                                    <img src="{{asset('assets/images/shapes/section-title-shape-5.png')}}" alt="">
                                </div>
                                <div class="section-title-shape-2">
                                    <img src="{{asset('assets/images/shapes/section-title-shape-6.png')}}" alt="">
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
                        <div class="services-two__icon-box">
                            <div class="services-two__icon">
                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 240.608 240.608" style="enable-background:new 0 0 240.608 240.608;" xml:space="preserve" width="50%">
                                    <path style="fill:white" d="M208.789,29.972l31.819,31.82L91.763,210.637L0,118.876l31.819-31.82l59.944,59.942L208.789,29.972z" />
                                </svg>
                            </div>
                        </div>
                        <h3 class="services-two__title"><a href="" onclick="return false;">Accountability</a></h3>

                    </div>
                </div>
                <!--Services Two Single End-->
                <!--Services Two Single Start-->
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="services-two__single">
                        <div class="services-two__icon-box">
                            <div class="services-two__icon">
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512; " xml:space="preserve" width="50%">
                                    <g>
                                        <g>
                                            <path style="fill:white" d="M256,0c-26.193,0-47.504,21.31-47.504,47.504S229.807,95.006,256,95.006s47.504-21.31,47.504-47.504S282.193,0,256,0z" />
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path style="fill:white" d="M333.454,175.947l-20.538-61.615c-2.273-6.817-8.653-11.417-15.839-11.417h-82.155c-7.186,0-13.566,4.599-15.839,11.417
                                                    l-20.538,61.615c-3.603,10.807,4.457,21.975,15.839,21.975h123.231C329.008,197.921,337.053,186.744,333.454,175.947z" />
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path style="fill:white" d="M112.334,314.077c-26.194,0-47.504,21.31-47.504,47.504c0,26.193,21.31,47.504,47.504,47.504s47.505-21.31,47.505-47.504
                                                    C159.839,335.388,138.528,314.077,112.334,314.077z" />
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path style="fill:white" d="M189.789,490.025l-20.539-61.616c-2.273-6.817-8.653-11.416-15.839-11.416H71.258c-7.186,0-13.566,4.599-15.839,11.416
                                                    L34.88,490.024C31.278,500.832,39.337,512,50.719,512h123.232C185.343,512,193.388,500.823,189.789,490.025z" />
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path style="fill:white" d="M399.666,314.077c-26.193,0-47.505,21.31-47.505,47.504c0,26.193,21.311,47.504,47.505,47.504s47.504-21.31,47.504-47.504
                                                    C447.17,335.388,425.859,314.077,399.666,314.077z" />
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path style="fill:white" d="M477.12,490.025l-20.539-61.615c-2.273-6.817-8.653-11.416-15.839-11.416h-82.154c-7.186,0-13.566,4.599-15.839,11.416
                                                    l-20.539,61.615C318.61,500.832,326.669,512,338.05,512h123.232C472.673,512,480.719,500.823,477.12,490.025z" />
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path style="fill:white" d="M314.46,347.453l-41.768-41.767v-59.067c0-9.22-7.475-16.696-16.696-16.696c-9.22,0-16.696,7.475-16.696,16.696v59.067
                                                    l-41.767,41.767c-6.52,6.519-6.52,17.091,0,23.611c6.52,6.519,17.09,6.52,23.611,0l34.853-34.853l34.852,34.853
                                                    c6.518,6.52,17.09,6.52,23.611,0C320.98,364.545,320.98,353.975,314.46,347.453z" />
                                        </g>
                                    </g>
                                </svg>
                            </div>
                        </div>
                        <h3 class="services-two__title"><a href="" onclick="return false;">Collaboration</a></h3>

                    </div>
                </div>
                <!--Services Two Single End-->
                <!--Services Two Single Start-->
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                    <div class="services-two__single">
                        <div class="services-two__icon-box">
                            <div class="services-two__icon">
                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="50%" height="124.245px" viewBox="0 0 124.245 124.245" style="enable-background:new 0 0 124.245 124.245;" xml:space="preserve">
                                    <g>
                                        <g>
                                            <path style="fill: white;" d="M70.266,28.635c-0.097-0.059-0.201-0.093-0.3-0.145c-1.421-0.94-3.015-1.634-4.64-2.032l-3.203,3.224l-3.105-3.26
                                        c-0.011,0.003-0.021,0.003-0.031,0.006c-1.671,0.4-3.309,1.115-4.763,2.09c-0.08,0.043-0.165,0.069-0.242,0.117
                                        c-5.856,3.592-15.622,17.292-15.291,24.982c0.123,2.876,1.545,5.202,3.899,6.379c1.065,0.534,2.229,0.808,3.532,0.808
                                        c3.735,0,8.625-2.249,15.693-7.081c0.112-0.078,0.202-0.175,0.308-0.26c0.105,0.085,0.195,0.182,0.308,0.26
                                        c7.069,4.832,11.958,7.081,15.693,7.081c1.304,0,2.467-0.274,3.532-0.808c2.354-1.178,3.775-3.503,3.898-6.379
                                        C85.887,45.927,76.121,32.227,70.266,28.635z M74.285,49.307c-1.687-0.977-3.539-1.991-6.222-3.824
                                        c-1.863-1.275-4.271-1.094-5.94,0.257c-1.669-1.35-4.077-1.531-5.941-0.257c-2.682,1.833-4.712,3.035-6.221,3.824
                                        c-0.686,0.167-1.536-0.713,1.119-2.09c1.789-1.12,4.115-2.579,4.463-2.816c1.971-1.348,4.652-1.432,6.709-0.261
                                        c0.959-0.546,2.051-0.839,3.159-0.839c1.271,0,2.499,0.381,3.551,1.101c0.576,0.393,2.907,1.87,4.187,2.784
                                        C76.061,48.864,75.381,49.941,74.285,49.307z" />
                                            <circle style="fill:white;" cx="62.123" cy="12.856" r="12.856" />
                                            <path style="fill: white;" d="M48.965,61.894v4.12c0,1.342,0.26,2.594,0.717,3.748c-0.034,0.256-0.059,0.518-0.059,0.784l-0.042,47.795
                                        c-0.003,3.259,2.636,5.901,5.894,5.904c0,0,0.004,0,0.006,0c3.255,0,5.896-2.638,5.898-5.894l0.035-41.024
                                        c0.236,0.011,0.472,0.03,0.709,0.03c0.047,0,0.091-0.006,0.139-0.006l-0.002,40.994c0,3.258,2.64,5.899,5.898,5.899
                                        c3.257,0,5.898-2.642,5.898-5.899l0.001-47.502c0.773-1.432,1.224-3.053,1.224-4.83v-4.189c-3.401-0.803-7.569-2.928-13.029-6.622
                                        C56.642,58.998,52.417,61.141,48.965,61.894z" />
                                        </g>
                                    </g>
                                </svg>
                            </div>
                        </div>
                        <h3 class="services-two__title"><a href="" onclick="return false;">Humility</a></h3>

                    </div>
                </div>
                <!--Services Two Single End-->
                <!--Services Two Single Start-->
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                    <div class="services-two__single">
                        <div class="services-two__icon-box">
                            <div class="services-two__icon">
                                <svg width="50%" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                    <path style="fill: white;" fill="#000" d="M256.3 19.95c-41 0-74.1 32.7-74.1 73.27 0 22.98 8 33.78 16.8 47.78 5.9 9.3 12 20.1 15.5 35.6h83c3.5-15.9 9.6-26.8 15.5-36.2 8.9-14.1 16.8-24.7 16.8-47.18 0-40.57-32.8-73.27-73.5-73.27zm-142.1 7.7L81 35.4l81.2 40.25-48-48zm283.6 0l-48 48L431 35.4l-33.2-7.75zM210.5 79.2l45.5 22.7 45.5-22.7-20.8 83-17.4-4.4 11.2-45-18.5 9.3-18.5-9.3 11.2 45-17.4 4.4-20.8-83zM64 96.03v32.07l96-16.1-96-15.97zm384 0L352 112l96 16V96.03zM334.2 144.3l39.9 63.3 24.1-15.3-64-48zm-156.4.1l-64 48 24.1 15.3 39.9-63.3zM216 191v16h80v-16h-80zm34.4 28.3c-13.7 0-26.9.5-35.7 1-68.2 10.7-82.9 105.4-66.7 191.6h23.6l-1-105.4 18.6-.2c-1.4 63.7 1.6 126.6 5.5 189.7h51.4V390.3h18.7V496h50.4c4.5-65 5.9-131.5 6.5-189.7l18.7.2-1.1 105.4h24.6c18.3-88.5-4.8-178.9-67.1-190.6-9.4-1.4-24.9-2-40.6-2h-5.8z" />
                                </svg>
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
                        <div class="services-two__icon-box">
                            <div class="services-two__icon">
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 32 32" style="enable-background:new 0 0 32 32;" xml:space="preserve" width="60%">
                                    <path style="fill: white;" id="ai--ethics_1_" d="M16,31.36c-0.647,0-1.19-0.454-1.327-1.061c-2.894-0.264-5.588-1.377-7.828-3.235
                                    C6.613,27.249,6.319,27.36,6,27.36c-0.75,0-1.36-0.61-1.36-1.36c0-0.319,0.11-0.613,0.295-0.846
                                    c-1.857-2.24-2.971-4.934-3.235-7.827C1.094,17.19,0.64,16.647,0.64,16s0.454-1.19,1.061-1.327c0.264-2.894,1.377-5.587,3.235-7.828
                                    C4.75,6.613,4.64,6.319,4.64,6c0-0.75,0.61-1.36,1.36-1.36c0.319,0,0.613,0.11,0.846,0.295c2.24-1.857,4.934-2.971,7.828-3.235
                                    C14.81,1.094,15.353,0.64,16,0.64c0.647,0,1.19,0.454,1.327,1.061c2.894,0.264,5.587,1.377,7.827,3.235
                                    C25.387,4.75,25.681,4.64,26,4.64c0.75,0,1.36,0.61,1.36,1.36c0,0.319-0.111,0.613-0.296,0.846c1.858,2.24,2.972,4.934,3.235,7.828
                                    c0.606,0.137,1.061,0.68,1.061,1.327s-0.454,1.19-1.061,1.327c-0.264,2.894-1.378,5.588-3.235,7.827
                                    c0.185,0.232,0.296,0.526,0.296,0.846c0,0.75-0.61,1.36-1.36,1.36c-0.319,0-0.613-0.111-0.846-0.296
                                    c-2.239,1.857-4.934,2.972-7.827,3.235C17.19,30.906,16.647,31.36,16,31.36z M16,29.36c-0.353,0-0.64,0.287-0.64,0.64
                                    s0.287,0.64,0.64,0.64s0.64-0.287,0.64-0.64S16.353,29.36,16,29.36z M7.271,26.482c2.126,1.774,4.685,2.84,7.435,3.098
                                    c0.177-0.545,0.69-0.94,1.293-0.94c0.603,0,1.116,0.396,1.294,0.94c2.75-0.258,5.309-1.323,7.435-3.098
                                    C24.671,26.332,24.64,26.17,24.64,26c0-0.75,0.61-1.36,1.36-1.36c0.17,0,0.332,0.031,0.482,0.089
                                    c1.774-2.126,2.84-4.685,3.098-7.435c-0.545-0.178-0.94-0.691-0.94-1.294s0.396-1.116,0.94-1.293
                                    c-0.258-2.75-1.323-5.309-3.098-7.435C26.332,7.329,26.17,7.36,26,7.36c-0.75,0-1.36-0.61-1.36-1.36
                                    c0-0.169,0.031-0.332,0.089-0.482c-2.126-1.774-4.685-2.84-7.435-3.098C17.116,2.965,16.603,3.36,16,3.36s-1.116-0.395-1.293-0.939
                                    c-2.75,0.258-5.309,1.324-7.435,3.098C7.329,5.668,7.36,5.831,7.36,6c0,0.75-0.61,1.36-1.36,1.36c-0.17,0-0.333-0.031-0.482-0.088
                                    c-1.774,2.126-2.839,4.685-3.097,7.435C2.965,14.884,3.36,15.397,3.36,16c0,0.603-0.395,1.116-0.939,1.294
                                    c0.258,2.75,1.324,5.309,3.098,7.435C5.668,24.671,5.831,24.64,6,24.64c0.75,0,1.36,0.61,1.36,1.36
                                    C7.36,26.17,7.329,26.332,7.271,26.482z M26,25.36c-0.353,0-0.64,0.287-0.64,0.64s0.287,0.64,0.64,0.64s0.64-0.287,0.64-0.64
                                    S26.353,25.36,26,25.36z M6,25.36c-0.353,0-0.64,0.287-0.64,0.64S5.647,26.64,6,26.64S6.64,26.353,6.64,26S6.353,25.36,6,25.36z
                                    M30,15.36c-0.353,0-0.64,0.287-0.64,0.64s0.287,0.64,0.64,0.64s0.64-0.287,0.64-0.64S30.353,15.36,30,15.36z M2,15.36
                                    c-0.353,0-0.64,0.287-0.64,0.64S1.647,16.64,2,16.64S2.64,16.353,2.64,16S2.353,15.36,2,15.36z M26,5.36
                                    c-0.353,0-0.64,0.287-0.64,0.64S25.647,6.64,26,6.64S26.64,6.353,26.64,6S26.353,5.36,26,5.36z M6,5.36
                                    C5.647,5.36,5.36,5.647,5.36,6S5.647,6.64,6,6.64S6.64,6.353,6.64,6S6.353,5.36,6,5.36z M16,1.36c-0.353,0-0.64,0.287-0.64,0.64
                                    S15.647,2.64,16,2.64c0.353,0,0.64-0.287,0.64-0.64S16.353,1.36,16,1.36z M17,25.36c-0.395,0-0.751-0.17-1-0.439
                                    c-0.249,0.27-0.605,0.439-1,0.439c-0.75,0-1.36-0.61-1.36-1.36V13.36H9.583l1.736,3.473c0.026,0.05,0.041,0.107,0.041,0.167
                                    c0,1.302-1.059,2.36-2.36,2.36S6.64,18.302,6.64,17c0-0.061,0.015-0.118,0.041-0.167l1.79-3.58C7.983,13.046,7.64,12.562,7.64,12
                                    c0-0.75,0.61-1.36,1.36-1.36h5.067c-0.275-0.39-0.427-0.87-0.427-1.39c0-1.301,1.059-2.36,2.36-2.36c1.302,0,2.36,1.059,2.36,2.36
                                    c0,0.52-0.152,1-0.427,1.39H23c0.75,0,1.36,0.61,1.36,1.36c0,0.562-0.344,1.046-0.831,1.253l1.789,3.58
                                    c0.026,0.05,0.042,0.107,0.042,0.167c0,1.302-1.059,2.36-2.36,2.36s-2.36-1.059-2.36-2.36c0-0.061,0.016-0.118,0.042-0.167
                                    l1.736-3.473H18.36V24C18.36,24.75,17.75,25.36,17,25.36z M16.36,24c0,0.353,0.287,0.64,0.64,0.64c0.353,0,0.64-0.287,0.64-0.64V13
                                    c0-0.199,0.161-0.36,0.36-0.36h5c0.353,0,0.64-0.287,0.64-0.64s-0.287-0.64-0.64-0.64h-6c-0.165,0-0.308-0.111-0.349-0.271
                                    s0.033-0.327,0.177-0.405c0.509-0.276,0.812-0.812,0.812-1.434c0-0.904-0.735-1.64-1.64-1.64s-1.64,0.736-1.64,1.64
                                    c0,0.621,0.304,1.157,0.812,1.434c0.145,0.079,0.218,0.246,0.177,0.405c-0.041,0.16-0.185,0.271-0.349,0.271H9
                                    c-0.353,0-0.64,0.287-0.64,0.64S8.647,12.64,9,12.64h5c0.199,0,0.36,0.161,0.36,0.36v11c0,0.353,0.287,0.64,0.64,0.64
                                    s0.64-0.287,0.64-0.64v-6h0.72V24z M21.399,17.36c0.165,0.731,0.82,1.279,1.601,1.279s1.436-0.548,1.601-1.279H21.399z M7.4,17.36
                                    c0.164,0.732,0.819,1.28,1.6,1.28s1.436-0.548,1.6-1.279L7.4,17.36L7.4,17.36z M21.582,16.64h2.836L23,13.805L21.582,16.64z
                                    M7.583,16.64h2.835L9,13.805L7.583,16.64z" />
                                    <rect id="_Transparent_Rectangle" style="fill:none;" width="32" height="32" />
                                </svg>
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
                        <div class="services-two__icon-box">
                            <div class="services-two__icon">
                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 942.5 942.5" style="enable-background:new 0 0 942.5 942.5;" xml:space="preserve" width="50%">
                                    <g>
                                        <g>
                                            <path style="fill: white;" d="M612.8,50v49.2l156.7,156.7V50c0-27.6-22.399-50-50-50h-56.7C635.2,0,612.8,22.4,612.8,50z" />
                                            <path style="fill: white;" d="M61.9,469.6h111v422.9c0,27.6,22.4,50,50,50h496.701c27.6,0,50-22.4,50-50V469.6h111C902.9,469.6,914,442.7,898.3,426.9
                                        L769.601,298.3L612.8,141.6L506.601,35.3C496.8,25.5,484,20.7,471.2,20.7c-12.8,0-25.6,4.9-35.4,14.6L44.2,427
                                        C28.5,442.7,39.6,469.6,61.9,469.6z M471.2,428.3C590.3,428.3,686.9,524.9,686.9,644S590.3,859.6,471.2,859.6
                                        c-119.1,0-215.7-96.6-215.7-215.699C255.5,524.8,352.1,428.3,471.2,428.3z" />
                                            <path style="fill: white;" d="M393.799,668.5H446.9v62.1H401c-13.8,0-25,11.2-25,25c0,13.801,11.2,25,25,25h45.9v31.9c0,13.8,11.2,25,25,25
                                        c13.8,0,25-11.2,25-25v-31.9h50.7c13.8,0,25-11.199,25-25V643.5c0-13.8-11.2-25-25-25h-50.7v-62.1h42.5c13.8,0,25-11.2,25-25
                                        c0-13.801-11.2-25-25-25h-42.5v-31.9c0-13.8-11.2-25-25-25c-13.8,0-25,11.2-25,25v31.9h-53.101c-13.8,0-25,11.199-25,25v112.1
                                        C368.799,657.3,380,668.5,393.799,668.5z M496.9,668.5h25.7v62.1h-25.7V668.5z M418.799,556.4H446.9v62.1h-28.101V556.4z" />
                                        </g>
                                    </g>
                                </svg>
                            </div>
                        </div>
                        <h3 class="services-two__title"><a href="" onclick="return false;">Values</a></h3>

                    </div>
                </div>
                <!--Services Two Single End-->
                <!--Services Two Single Start-->
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="700ms">
                    <div class="services-two__single">
                        <div class="services-two__icon-box">
                            <div class="services-two__icon">
                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 491.86 491.86" style="enable-background:new 0 0 491.86 491.86;" xml:space="preserve" width="50%">
                                    <g>
                                        <g>
                                            <polygon style="fill:white;" points="250.354,205.709 0,205.709 0,232.497 21.404,232.497 21.404,476.057 198.398,476.057
                                        198.398,232.497 250.354,232.497 		" />
                                            <path style="fill:white;" d="M379.818,327.33c0.046,0,0.129,0.03,0.183,0.03c32.649,0.951,51.284-8.78,54.174-34.646
                                        l13.244-119.099c2.47-22.19-15.224-39.122-32.9-45.6l-0.143-0.046c0,0-6.303-2.05-12.067-2.836
                                        c-6.008-0.801-11.922,0.282-11.922,0.282c-13.808,1.61-27.448,11.374-27.448,11.374c-25.395,18.087-64.764,21.995-117.099,11.602
                                        c-13.166-2.649-25.965,5.946-28.58,19.107c-2.616,13.164,5.938,25.955,19.106,28.572c21.94,4.375,42.346,6.539,61.17,6.539
                                        c17.107,0,32.475-1.894,46.921-5.497l-0.115,1.68l-8.44,75.909c-44.21,1.597-72.062,10.705-82.979,27.249
                                        c-14.765,22.482-38.754,113.12-45.75,140.925c-3.616,14.363,5.113,28.938,19.478,32.563c2.185,0.549,4.39,0.823,6.561,0.823
                                        c12.004,0,22.952-8.122,26.008-20.285c12.329-48.979,29.363-99.745,37.141-115.817
                                        C302.805,326.181,345.436,325.437,379.818,327.33z" />
                                            <circle style="fill:white;" cx="395.883" cy="67.804" r="54.305" />
                                            <path style="fill:white;" d="M484.646,274.65l7.213-93.507c0.019-0.53-0.18-1.045-0.548-1.427
                                        c-0.369-0.382-0.876-0.598-1.407-0.598h-29.679c-1.054,0-1.918,0.834-1.956,1.888l-6.706,93.575
                                        c-0.883,28.85-9.383,64.332-57.84,64.332c-0.687,0-53.585-0.119-53.585-0.119c-0.001,0-0.001,0-0.001,0
                                        c-0.52,0-1.016,0.206-1.384,0.572c-0.366,0.367-0.573,0.866-0.573,1.385v28.914c0,1.081,0.876,1.957,1.957,1.957l48.645-0.002
                                        v66.461h-15.273c-19.994,0-36.885,17.552-36.885,38.325c0,1.081,0.876,1.956,1.956,1.956h19.266c1.081,0,1.957-0.875,1.957-1.956
                                        c0-7.642,6.272-14.098,13.698-14.098h63.341c7.43,0,13.706,6.456,13.706,14.098c0,1.081,0.877,1.956,1.957,1.956h19.273
                                        c1.08,0,1.956-0.875,1.956-1.956c0-20.773-16.895-38.325-36.893-38.325h-15.259v-70.026
                                        C469.347,366.764,480.43,319.431,484.646,274.65z" />
                                            <path style="fill:white;" d="M203.534,177.154h-91.717L80.775,63.399c-0.219-0.8-1.043-1.273-1.842-1.052l-16.552,4.516
                                        c-0.384,0.105-0.71,0.358-0.907,0.703c-0.198,0.346-0.25,0.755-0.145,1.139L96.12,196.193c0.178,0.652,0.771,1.105,1.447,1.105
                                        h105.968c0.829,0,1.5-0.671,1.5-1.5v-17.145C205.034,177.825,204.363,177.154,203.534,177.154z" />
                                        </g>
                                    </g>
                                </svg>
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
    <div class="about-one-bg wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms" style="background-image: url({{asset('assets/photos/gra.png')}})">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="about-one__left">
                    <div class="about-one__img-box wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                        <div class="about-one__img">
                            <a target="_blank" href="https://pro1globalhomecenter.com/home.html?divisionId=1&townshipId=18">
                                <img src="{{asset('assets/photos/e-commerceads5.png')}}" alt=""></a>
                        </div>
                        <!-- <div class="about-one__img-two">
                            <img src="assets//secbanner5.png" alt="">
                        </div> -->
                        <a target="_blank" href="https://pro1globalhomecenter.com/home.html?divisionId=1&townshipId=18">
                            <div class="about-one__experience">

                                <h2 class="about-one__experience-year">Go TO
                                </h2>
                                <p class="about-one__experience-text">Online Shop<br>E-commerce</p>


                            </div>
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
    <div class="download-bg" style="background-image: url({{asset('assets/images/shapes/services-two-shape-1.png')}})"></div>
    <div class="download-shape-1 float-bob-y">
        <img src="{{asset('assets/images/shapes/download-shape-1.png')}}" alt="">
    </div>
    <div class="download-shape-2 float-bob-x">
        <img src="{{asset('assets/images/shapes/download-shape-2.png')}}" alt="">
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
                        <img src="{{asset('assets/photos/ecommerceapp.png')}}" alt="">
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
                                    <img src="{{asset('assets/images/shapes/section-title-shape-1.png')}}" alt="">
                                </div>
                                <div class="section-title-shape-2">
                                    <img src="{{asset('assets/images/shapes/section-title-shape-2.png')}}" alt="">
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
                        <a href="{{route('product_information')}}">
                            <div class="service-one__img">
                                <img src="{{asset('assets/photos/Only Icon/Product Information.png')}}" alt="">
                            </div>
                        </a>
                        <div class="service-one__content">
                            <h2 class="service-one__title"><a href="{{route('product_information')}}">-See More-</a></h2>
                            <h5>"Product Information"</h5>

                        </div>
                    </div>
                </div>
                <!--Services One Single End-->
                <!--Services One Single Start-->
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <a href="{{route('delivery_service')}}">
                        <div class="services-one__single">
                            <div class="service-one__img">
                                <img src="{{asset('assets/photos/Only Icon/Delivery Service.png')}}" alt="">
                            </div>
                            <div class="service-one__content">

                                <h2 class="service-one__title"><a href="{{route('delivery_service')}}">-See More-</a></h2>
                                <h5>"Delivery Service"</h5>

                            </div>
                        </div>
                    </a>
                </div>
                <!--Services One Single End-->
                <!--Services One Single Start-->
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                    <a href="{{route('special_order')}}">
                        <div class="services-one__single">
                            <div class="service-one__img">
                                <img src="{{asset('assets/photos/Only Icon/Special Order.png')}}" alt="">
                            </div>
                            <div class="service-one__content">

                                <h2 class="service-one__title"><a href="{{route('special_order')}}">-See More-</a></h2>
                                <h5>"Special Order"</h5>
                                </h2>

                            </div>
                        </div>
                </div>
                <!--Services One Single End-->
                <!--Services One Single Start-->
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                    <a href="{{route('product_return')}}">
                        <div class="services-one__single">
                            <div class="service-one__img">
                                <img src="{{asset('assets/photos/Only Icon/Product Return.png')}}" alt="">
                            </div>
                            <div class="service-one__content">

                                <h2 class="service-one__title"><a href="{{route('product_return')}}">-See More-</a></h2>
                                <h5>"Product Return"</h5>
                                </h2>

                            </div>
                        </div>
                </div>
                <!--Services One Single End-->
                <!--Services One Single Start-->
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="500ms">
                    <a href="{{route('consulting_service')}}">
                        <div class="services-one__single">
                            <div class="service-one__img">
                                <img src="{{asset('assets/photos/Only Icon/Consulting Service.png')}}" alt="">
                            </div>
                            <div class="service-one__content">

                                <h2 class="service-one__title"><a href="{{route('consulting_service')}}">-See More-</a></h2>
                                <h5>"Consulting Service"</h5>
                                </h2>

                            </div>
                        </div>
                </div>
                <!--Services One Single End-->
                <!--Services One Single Start-->
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="600ms">
                    <a href="{{route('contractor_information')}}">
                        <div class="services-one__single">
                            <div class="service-one__img">
                                <img src="{{asset('assets/photos/Only Icon/Contractor Information.png')}}" alt="">
                            </div>
                            <div class="service-one__content">

                                <h2 class="service-one__title"><a href="{{route('contractor_information')}}">-See More-</a></h2>
                                <h5>"Contractor Information"</h5>
                                </h2>

                            </div>
                        </div>
                </div>
                <!--Services One Single End-->
                <!--Services One Single Start-->
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="700ms">
                    <a href="{{route('member_service')}}">
                        <div class="services-one__single">
                            <div class="service-one__img">
                                <img src="{{asset('assets/photos/Only Icon/Member Service.png')}}" alt="">
                            </div>
                            <div class="service-one__content">

                                <h2 class="service-one__title"><a href="{{route('member_service')}}">-See More-</a></h2>
                                <h5>"Member Service"</h5>
                                </h2>

                            </div>
                        </div>
                </div>
                <!--Services One Single End-->
                <!--Services One Single Start-->
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="800ms">
                    <a href="{{route('repair_service')}}">
                        <div class="services-one__single">
                            <div class="service-one__img">
                                <img src="{{asset('assets/photos/Only Icon/Power Tools Repair Service_2.png')}}" alt="">
                            </div>
                            <div class="service-one__content">

                                <h2 class="service-one__title"><a href="{{route('repair_service')}}">-See More-</a></h2>
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
    <div class="download-bg" style="background-image: url({{asset('assets/images/shapes/services-two-shape-1.png')}})"></div>
    <div class="download-shape-1 float-bob-y">
        <img src="{{asset('assets/images/shapes/download-shape-1.png')}}" alt="">
    </div>
    <div class="download-shape-2 float-bob-x">
        <img src="{{asset('assets/images/shapes/download-shape-2.png')}}" alt="">
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
                        <img src="{{asset('assets/photos/memberapp.png')}}" alt="">
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
                        <img src="{{asset('assets/images/shapes/section-title-shape-1.png')}}" alt="">
                    </div>
                    <div class="section-title-shape-2">
                        <img src="{{asset('assets/images/shapes/section-title-shape-2.png')}}" alt="">
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
                        <img src="{{asset('assets/photos/lanthit.png')}}" alt="">
                        <div class="portfolio__plus">
                            <a href="{{asset('assets/photos/lanthit.png')}}" class="img-popup"><span class="icon-plus"></span></a>
                        </div>
                        <div class="portfolio__content">
                            <p class="portfolio__sub-title">Lanthit Branch, Yangon</p>
                            <h4 class="portfolio__title"><a href="{{route('lanthit_info')}}">Show Detail</a></h4>
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
                        <img src="{{asset('assets/photos/satsan.png')}}" alt="">
                        <div class="portfolio__plus">
                            <a href="{{asset('assets/photos/satsan.png')}}" class="img-popup"><span class="icon-plus"></span></a>
                        </div>
                        <div class="portfolio__content">
                            <p class="portfolio__sub-title">Satsan Branch, Yangon</p>
                            <h4 class="portfolio__title"><a href="{{route('satsan_info')}}">Show Detail</a></h4>
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
                        <img src="{{asset('assets/photos/eastdagon.png')}}" alt="">
                        <div class="portfolio__plus">
                            <a href="{{asset('assets/photos/eastdagon.png')}}" class="img-popup"><span class="icon-plus"></span></a>
                        </div>
                        <div class="portfolio__content">
                            <p class="portfolio__sub-title">East Dagon Branch, Yangon</p>
                            <h4 class="portfolio__title"><a href="{{route('eastdagon_info')}}">Show Detail</a></h4>
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
                        <img src="{{asset('assets/photos/hlaingtharyar.png')}}" alt="">
                        <div class="portfolio__plus">
                            <a href="{{asset('assets/photos/hlaingtharyar.png')}}" class="img-popup"><span class="icon-plus"></span></a>
                        </div>
                        <div class="portfolio__content">
                            <p class="portfolio__sub-title">HlaingTharYar Branch, Yangon</p>
                            <h4 class="portfolio__title"><a href="{{route('hlaingtharyar_info')}}">Show Detail</a></h4>
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
                        <img src="{{asset('assets/photos/terminal.jpg')}}" alt="">
                        <div class="portfolio__plus">
                            <a href="{{asset('assets/photos/terminal.jpg')}}" class="img-popup"><span class="icon-plus"></span></a>
                        </div>
                        <div class="portfolio__content">
                            <p class="portfolio__sub-title">PRO 1 PLUS Terminal M Branch, Yangon</p>
                            <h4 class="portfolio__title"><a href="{{route('teminalm_info')}}">Show Detail</a></h4>
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
                        <img src="{{asset('assets/photos/southdagon.jpg')}}" alt="">
                        <div class="portfolio__plus">
                            <a href="{{asset('assets/photos/southdagon.jpg')}}" class="img-popup"><span class="icon-plus"></span></a>
                        </div>
                        <div class="portfolio__content">
                            <p class="portfolio__sub-title">South Dagon, Yangon</p>
                            <h4 class="portfolio__title"><a href="{{route('southdagon_info')}}">Show Detail</a></h4>
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
                        <img src="{{asset('assets/photos/shwepyithar.jpg')}}" alt="">
                        <div class="portfolio__plus">
                            <a href="{{asset('assets/photos/shwepyithar.jpg')}}" class="img-popup"><span class="icon-plus"></span></a>
                        </div>
                        <div class="portfolio__content">
                            <p class="portfolio__sub-title">Shwe Pyi Thar Branch, Yangon</p>
                            <h4 class="portfolio__title"><a href="{{route('shwepyithar_info')}}">Show Detail</a></h4>
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
                        <img src="{{asset('assets/photos/theikpan.png')}}" alt="">
                        <div class="portfolio__plus">
                            <a href="{{asset('assets/photos/theikpan.png')}}" class="img-popup"><span class="icon-plus"></span></a>
                        </div>
                        <div class="portfolio__content">
                            <p class="portfolio__sub-title">Theikpan Branch, Mandalay</p>
                            <h4 class="portfolio__title"><a href="{{route('theikpan_info')}}">Show Detail</a></h4>
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
                        <img src="{{asset('assets/photos/tampawady.png')}}" alt="">
                        <div class="portfolio__plus">
                            <a href="{{asset('assets/photos/tampawady.png')}}" class="img-popup"><span class="icon-plus"></span></a>
                        </div>
                        <div class="portfolio__content">
                            <p class="portfolio__sub-title">Tampawady Branch, Mandalay</p>
                            <h4 class="portfolio__title"><a href="{{route('tampawady_info')}}">Show Detail</a></h4>
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
                        <img src="{{asset('assets/photos/bago.jpg')}}" alt="">
                        <div class="portfolio__plus">
                            <a href="{{asset('assets/photos/bago.jpg')}}" class="img-popup"><span class="icon-plus"></span></a>
                        </div>
                        <div class="portfolio__content">
                            <p class="portfolio__sub-title">Bago Branch, Bago</p>
                            <h4 class="portfolio__title"><a href="{{route('bago_info')}}">Show Detail</a></h4>
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
                        <img src="{{asset('assets/photos/mawlamyine.png')}}" alt="">
                        <div class="portfolio__plus">
                            <a href="{{asset('assets/photos/mawlamyine.png')}}" class="img-popup"><span class="icon-plus"></span></a>
                        </div>
                        <div class="portfolio__content">
                            <p class="portfolio__sub-title">Mawlamyine Branch, Mandalay</p>
                            <h4 class="portfolio__title"><a href="{{route('mawlamyine_info')}}">Show Detail</a></h4>
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
                        <img src="{{asset('assets/photos/ayetharyar.png')}}" alt="">
                        <div class="portfolio__plus">
                            <a href="{{asset('assets/photos/ayetharyar.png')}}" class="img-popup"><span class="icon-plus"></span></a>
                        </div>
                        <div class="portfolio__content">
                            <p class="portfolio__sub-title">Aye Tharyar Branch, Mandalay</p>
                            <h4 class="portfolio__title"><a href="{{route('ayetharyar_info')}}">Show Detail</a></h4>
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
                                <p class="section-sub-title">OUR PATANERS</p>
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
                                        <img src="{{asset('assets/images/shapes/testimonial-one-shape-1.png')}}" alt="">
                                    </div>
                                    <div class="partaner mb-5">
                                        <h6>"OPPLE Lighting Company"</h6>
                                    </div>
                                    <div class="testimonial-one__client-info">
                                        <div class=>
                                            <a target="_blank" href="https://pro1globalhomecenter.com/product-list.html?divisionId=1&townshipId=18&sortBy=1&searchText=OPPLE">
                                                <img src="{{asset('assets/photos/brands/B2.png')}}" alt=""></a>
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
                                        <img src="{{asset('assets/images/shapes/testimonial-one-shape-1.png')}}" alt="">
                                    </div>
                                    <div class="partaner mb-5">
                                        <h6>"Mitsubishi Corporation"</h6>
                                    </div>
                                    <div class="testimonial-one__client-info">
                                        <div class=>
                                            <a target="_blank" href="https://pro1globalhomecenter.com/product-list.html?divisionId=1&townshipId=18&brandId=49">
                                                <img src="{{asset('assets/photos/brands/B3.png')}}" alt=""></a>
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
                                        <img src="{{asset('assets/images/shapes/testimonial-one-shape-1.png')}}" alt="">
                                    </div>
                                    <div class="partaner mb-4">
                                        <h6>"Panasonic Holdings Corporation"</h6>
                                    </div>
                                    <div class="testimonial-one__client-info">
                                        <div class=>
                                            <a target="_blank" href="https://pro1globalhomecenter.com/product-list.html?divisionId=1&townshipId=18&brandId=82">
                                                <img src="{{asset('assets/photos/brands/B5.png')}}" alt=""></a>
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
                                        <img src="{{asset('assets/images/shapes/testimonial-one-shape-1.png')}}" alt="">
                                    </div>
                                    <div class="partaner mb-4">
                                        <h6>"Panasonic Holdings Corporation"</h6>
                                    </div>
                                    <div class="testimonial-one__client-info">
                                        <div class=>
                                            <a target="_blank" href="https://pro1globalhomecenter.com/product-list.html?divisionId=1&townshipId=18&brandId=81">
                                                <img src="{{asset('assets/photos/brands/B6.png')}}" alt=""></a>
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
                                        <img src="{{asset('assets/images/shapes/testimonial-one-shape-1.png')}}" alt="">
                                    </div>
                                    <div class="partaner mb-4">
                                        <h6>"Panasonic Holdings Corporation"</h6>
                                    </div>
                                    <div class="testimonial-one__client-info">
                                        <div class=>
                                            <a target="_blank" href="https://pro1globalhomecenter.com/product-list.html?divisionId=1&townshipId=18&brandId=87">
                                                <img src="{{asset('assets/photos/brands/B7.jpg')}}" alt=""></a>
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
                            <img src="{{asset('assets/images/shapes/section-title-shape-1.png')}}" alt="">
                        </div>
                        <div class="section-title-shape-2">
                            <img src="{{asset('assets/images/shapes/section-title-shape-2.png')}}" alt="">
                        </div>
                    </div>
                    <p class="section-title__title">Let's take a look at<br> our company's activities </p>
                </div>
                <ul class="portfolio-filter style1 post-filter has-dynamic-filters-counter list-unstyled">
                    <li data-filter=".filter-item" class="active"><span class="filter-text">All</span></li>
                    <li data-filter=".stra"><span class="filter-text">EMPLOYEE ACTIVITIES</span></li>
                    <li data-filter=".busi"><span class="filter-text">CSR ACTIVITIES</span></li>
                </ul>
            </div>
        </div>

        <div class="row filter-layout masonary-layout">
            <div class="col-xl-4 col-lg-6 col-md-6 filter-item stra custom-img">
                <div class="portfolio__single">
                    <div class="">
                        <img src="{{asset('assets/photos/act1.jpg')}}" alt="" style="object-fit:contain;
                        width:380px;
                        height:420px;
                        border: solid 1px #CCC">
                        <div class="">
                            <a href="{{asset('assets/photos/act1.png')}}" class="img-popup"></a>
                        </div>
                        <div>
                            <ul class="list-unstyled about-one__points">
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Donation for Football Academy (Mandalay)</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>25.1.2023</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Velit esse cillum dolore eu fugiat nulla pariatur.</p>
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
            <!--Portfolio Single End-->
            <div class="col-xl-4 col-lg-6 col-md-6 filter-item stra custom-img">
                <div class="portfolio__single">
                    <div class="">
                        <img src="{{asset('assets/photos/act2.jpg')}}" alt="" style="object-fit:contain;
                        width:380px;
                        height:420px;
                        border: solid 1px #CCC">
                        <div class="">
                            <a href="{{asset('assets/photos/act2.jpg')}}" class="img-popup"></a>
                        </div>                        <div>
                            <ul class="list-unstyled about-one__points">
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Donation for Football Academy (Mandalay)</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>25.1.2023</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Velit esse cillum dolore eu fugiat nulla pariatur.</p>
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
            <div class="col-xl-4 col-lg-6 col-md-6 filter-item stra custom-img">
                <div class="portfolio__single">
                    <div class="">
                        <img src="{{asset('assets/photos/act3.jpg')}}" alt="" style="object-fit:contain;
                        width:380px;
                        height:420px;
                        border: solid 1px #CCC">
                        <div class="">
                            <a href="{{asset('assets/photos/act3.jpg')}}" class="img-popup"></a>
                        </div>                        <div>
                            <ul class="list-unstyled about-one__points">
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Donation for Football Academy (Mandalay)</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>25.1.2023</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Velit esse cillum dolore eu fugiat nulla pariatur.</p>
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
            <div class="col-xl-4 col-lg-6 col-md-6 filter-item stra custom-img">
                <div class="portfolio__single">
                    <div class="">
                        <img src="{{asset('assets/photos/act4.jpg')}}" alt="" style="object-fit:contain;
                        width:380px;
                        height:420px;
                        border: solid 1px #CCC">
                        <div class="">
                            <a href="{{asset('assets/photos/act4.jpg')}}" class="img-popup"></a>
                        </div>                        <div>
                            <ul class="list-unstyled about-one__points">
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Donation for Football Academy (Mandalay)</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>25.1.2023</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Velit esse cillum dolore eu fugiat nulla pariatur.</p>
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
            <div class="col-xl-4 col-lg-6 col-md-6 filter-item stra custom-img">
                <div class="portfolio__single">
                    <div class="">
                        <img src="{{asset('assets/photos/act5.jpg')}}" alt="" style="object-fit:contain;
                        width:380px;
                        height:420px;
                        border: solid 1px #CCC">
                        <div class="">
                            <a href="{{asset('assets/photos/act5.jpg')}}" class="img-popup"></a>
                        </div>                        <div>
                            <ul class="list-unstyled about-one__points">
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Donation for Football Academy (Mandalay)</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>25.1.2023</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Velit esse cillum dolore eu fugiat nulla pariatur.</p>
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
            <div class="col-xl-4 col-lg-6 col-md-6 filter-item stra custom-img">
                <div class="portfolio__single">
                    <div class="">
                        <img src="{{asset('assets/photos/act6.jpg')}}" alt="" style="object-fit:contain;
                        width:380px;
                        height:420px;
                        border: solid 1px #CCC">
                        <div class="">
                            <a href="{{asset('assets/photos/act6.jpg')}}" class="img-popup"></a>
                        </div>                        <div>
                            <ul class="list-unstyled about-one__points">
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Donation for Football Academy (Mandalay)</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>25.1.2023</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Velit esse cillum dolore eu fugiat nulla pariatur.</p>
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
            <div class="col-xl-4 col-lg-6 col-md-6 filter-item busi custom-img">
                <div class="portfolio__single">
                    <div class="">
                        <img src="{{asset('assets/photos/act7.jpg')}}" alt="" style="object-fit:contain;
                        width:380px;
                        height:420px;
                        border: solid 1px #CCC">
                        <div class="">
                            <a href="{{asset('assets/photos/act7.jpg')}}" class="img-popup"></a>
                        </div>                        <div>
                            <ul class="list-unstyled about-one__points">
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Donation for Football Academy (Mandalay)</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>25.1.2023</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Velit esse cillum dolore eu fugiat nulla pariatur.</p>
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
            <div class="col-xl-4 col-lg-6 col-md-6 filter-item busi custom-img">
                <div class="portfolio__single">
                    <div class="">
                        <img src="{{asset('assets/photos/act8.jpg')}}" alt="" style="object-fit:contain;
                        width:380px;
                        height:420px;
                        border: solid 1px #CCC">
                        <div class="">
                            <a href="{{asset('assets/photos/act8.jpg')}}" class="img-popup"></a>
                        </div>                        <div>
                            <ul class="list-unstyled about-one__points">
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Donation for Football Academy (Mandalay)</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>25.1.2023</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Velit esse cillum dolore eu fugiat nulla pariatur.</p>
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
            <div class="col-xl-4 col-lg-6 col-md-6 filter-item busi custom-img">
                <div class="portfolio__single">
                    <div class="">
                        <img src="{{asset('assets/photos/act9.jpg')}}" alt="" style="object-fit:contain;
                        width:380px;
                        height:420px;
                        border: solid 1px #CCC">
                        <div class="">
                            <a href="{{asset('assets/photos/act9.jpg')}}" class="img-popup"></a>
                        </div>                        <div>
                            <ul class="list-unstyled about-one__points">
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Donation for Football Academy (Mandalay)</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>25.1.2023</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Velit esse cillum dolore eu fugiat nulla pariatur.</p>
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

            <!--Portfolio Single Start-->

            <!--Portfolio Single End-->
            <!--Portfolio Single Start-->
            {{-- <div class="col-xl-4 col-lg-6 col-md-6 filter-item busi custom-img">
                <div class="portfolio__single">
                    <div class="">
                        <img src="{{asset('assets/photos/act3.png')}}" alt="">
                        <div class="">
                            <a href="{{asset('assets/photos/act3.png')}}" class="img-popup"><span class=""></span></a>
                        </div>
                        <div>
                            <ul class="list-unstyled about-one__points">
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Donation for Football Academy (Mandalay)</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>25.1.2023</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="portfolio__content">

                            <h4 class="portfolio__title"><a href="#ouractivities">Donation</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <!--Portfolio Single End-->
            <!--Portfolio Single Start-->
            <div class="col-xl-4 col-lg-6 col-md-6 filter-item busi custom-img">
                <div class="portfolio__single">
                    <div class="">
                        <img src="{{asset('assets/photos/act4.png')}}" alt="">
                        <div class="">
                            <a href="{{asset('assets/photos/act4.png')}}" class="img-popup"><span class=""></span></a>
                        </div>
                        <div class="portfolio__content">

                            <h4 class="portfolio__title"><a href="#ouractivities">Donation</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <!--Portfolio Single End-->
            <!--Portfolio Single Start-->
            <div class="col-xl-4 col-lg-6 col-md-6 filter-item busi custom-img">
                <div class="portfolio__single">
                    <div class="">
                        <img src="{{asset('assets/photos/act5.png')}}" alt="">
                        <div class="">
                            <a href="{{asset('assets/photos/act5.png')}}" class="img-popup"><span class=""></span></a>
                        </div>
                        <div class="portfolio__content">

                            <h4 class="portfolio__title"><a href="#ouractivities">Donation</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <!--Portfolio Single End-->
            <!--Portfolio Single Start-->
            <div class="col-xl-4 col-lg-6 col-md-6 filter-item busi custom-img">
                <div class="portfolio__single">
                    <div class="">
                        <img src="{{asset('assets/photos/act26.png')}}" alt="" style="
                        width: 100%;
                        height: 402px;
                    ">
                        <div class="">
                            <a href="{{asset('assets/photos/act26.png')}}" class="img-popup"><span class=""></span></a>
                        </div>
                        <div class="portfolio__content">

                            <h4 class="portfolio__title"><a href="#ouractivities">Donation</a></h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-6 col-md-6 filter-item stra custom-img">
                <div class="portfolio__single">
                    <div class="portfolio__img">
                        <img src="{{asset('assets/photos/training1.pn')}}g" alt="">
                        <div class="">
                            <a href="{{asset('assets/photos/training1.png')}}" class="img-popup"><span class=""></span></a>
                        </div>
                        <div class="portfolio__content">

                            <h4 class="portfolio__title"><a href="#ouractivities">Training</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <!--Portfolio Single End-->
            <!--Portfolio Single Start-->
            <div class="col-xl-4 col-lg-6 col-md-6 filter-item stra custom-img">
                <div class="portfolio__single">
                    <div class="portfolio__img">
                        <img src="{{asset('assets/photos/training2.png')}}" alt="">
                        <div class="">
                            <a href="{{asset('assets/photos/training2.png')}}" class="img-popup"><span class=""></span></a>
                        </div>
                        <div class="portfolio__content">

                            <h4 class="portfolio__title"><a href="#ouractivities">Training</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <!--Portfolio Single End-->
            <!--Portfolio Single Start-->
            <div class="col-xl-4 col-lg-6 col-md-6 filter-item stra custom-img">
                <div class="portfolio__single">
                    <div class="portfolio__img">
                        <img src="{{asset('assets/photos/training3.png')}}" alt="">
                        <div class="">
                            <a href="{{asset('assets/photos/training3.png')}}" class="img-popup"><span class=""></span></a>
                        </div>
                        <div class="portfolio__content">

                            <h4 class="portfolio__title"><a href="#ouractivities">Training</a></h4>
                        </div>
                    </div>
                </div>
            </div>

            <!--Portfolio Single End-->
            <!--Portfolio Single Start-->
            <div class="col-xl-4 col-lg-6 col-md-6 filter-item stra custom-img">
                <div class="portfolio__single">
                    <div class="">
                        <img src="{{asset('assets/photos/act17.png')}}" alt="">
                        <div class="">
                            <a href="{{asset('assets/photos/act17.png')}}" class="img-popup"><span class=""></span></a>
                        </div>
                        <div class="portfolio__content">

                            <h4 class="portfolio__title"><a href="#ouractivities">Team Building</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 filter-item stra custom-img">
                <div class="portfolio__single">
                    <div class="">
                        <img src="{{asset('assets/photos/act10.png')}}" alt="">
                        <div class="">
                            <a href="{{asset('assets/photos/act10.png')}}" class="img-popup"><span class=""></span></a>
                        </div>
                        <div class="portfolio__content">

                            <h4 class="portfolio__title"><a href="#ouractivities">Team Building</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <!--Portfolio Single End-->
            <!--Portfolio Single Start-->
            <div class="col-xl-4 col-lg-6 col-md-6 filter-item stra custom-img">
                <div class="portfolio__single">
                    <div class="">
                        <img src="{{asset('assets/photos/act18.png')}}" alt="">
                        <div class="">
                            <a href="{{asset('assets/photos/act18.png')}}" class="img-popup"><span class=""></span></a>
                        </div>
                        <div class="portfolio__content">

                            <h4 class="portfolio__title"><a href="">Team Building</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <!--Portfolio Single End-->
            <!--Portfolio Single Start-->
            <div class="col-xl-4 col-lg-6 col-md-6 filter-item stra custom-img">
                <div class="portfolio__single">
                    <div class="">
                        <img src="{{asset('assets/photos/act13.png')}}" alt="">
                        <div class="">
                            <a href="{{asset('assets/photos/act13.png')}}" class="img-popup"><span class=""></span></a>
                        </div>
                        <div class="portfolio__content">

                            <h4 class="portfolio__title"><a href="#ouractivities">Team Building</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 filter-item stra custom-img">
                <div class="portfolio__single">
                    <div class="">
                        <img src="{{asset('assets/photos/act12.png')}}" alt="">
                        <div class="">
                            <a href="{{asset('assets/photos/act12.png')}}" class="img-popup"><span class=""></span></a>
                        </div>
                        <div class="portfolio__content">

                            <h4 class="portfolio__title"><a href="#ouractivities">Team Building</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <!--Portfolio Single End-->
            <!--Portfolio Single Start-->
            <div class="col-xl-4 col-lg-6 col-md-6 filter-item stra custom-img">
                <div class="portfolio__single">
                    <div class="">
                        <img src="{{asset('assets/photos/act11.png')}}" alt="">
                        <div class="">
                            <a href="{{asset('assets/photos/act11.png')}}" class="img-popup"><span class=""></span></a>
                        </div>
                        <div class="portfolio__content">

                            <h4 class="portfolio__title"><a href="#ouractivities">Team Building</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <!--Portfolio Single End-->
            <!--Portfolio Single Start-->

            <div class="col-xl-4 col-lg-6 col-md-6 filter-item stra custom-img">
                <div class="portfolio__single">
                    <div class="">
                        <img src="{{asset('assets/photos/act16.png')}}" alt="">
                        <div class="">
                            <a href="{{asset('assets/photos/act16.png')}}" class="img-popup"><span class=""></span></a>
                        </div>
                        <div class="portfolio__content">

                            <h4 class="portfolio__title"><a href="#ouractivities">Team Building</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <!--Portfolio Single End-->
            <!--Portfolio Single Start-->
            <div class="col-xl-4 col-lg-6 col-md-6 filter-item stra custom-img">
                <div class="portfolio__single">
                    <div class="">
                        <img src="{{asset('assets/photos/act14.png')}}" alt="">
                        <div class="">
                            <a href="{{asset('assets/photos/act14.png')}}" class="img-popup"><span class=""></span></a>
                        </div>
                        <div class="portfolio__content">

                            <h4 class="portfolio__title"><a href="#ouractivities">Team Building</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <!--Portfolio Single End-->
            <!--Portfolio Single Start-->
            <div class="col-xl-4 col-lg-6 col-md-6 filter-item stra custom-img">
                <div class="portfolio__single">
                    <div class="">
                        <img src="{{asset('assets/photos/act15.png')}}" alt="">
                        <div class="">
                            <a href="{{asset('assets/photos/act15.png')}}" class="img-popup"><span class=""></span></a>
                        </div>
                        <div class="portfolio__content">

                            <h4 class="portfolio__title"><a href="#ouractivities">Team Building</a></h4>
                        </div>
                    </div>
                </div>
            </div> --}}
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
                            <a href="tel:959428751328">+959428751328</a>
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
                                <img src="{{asset('assets/images/shapes/section-title-shape-1.png')}}" alt="">
                            </div>
                            <div class="section-title-shape-2">
                                <img src="{{asset('assets/images/shapes/section-title-shape-2.png')}}" alt="">
                            </div>
                        </div>
                        <h2 class="section-title__title">Feel free to get in touch</h2>
                    </div>
                    <div class="contact-page__call-email">
                        <div class="contact-page__call-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="contact-page__call-email-content">
                            <h4>
                                <a href="tel:959428751328" class="contact-page__call-number">+959428751328</a>
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
                        <form action="{{asset('assets/inc/sendemail.php')}}" class="comment-one__form contact-form-validated" novalidate="novalidate">
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
@endsection
