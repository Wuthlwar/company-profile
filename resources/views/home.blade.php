@extends('layouts.main')
@section('content')
<div class="stricky-header stricked-menu main-menu">
    <div class="sticky-header__content"></div>
</div>
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
                                    <a target="blank" href="https://pro1globalhomecenter.com/home.html?divisionId=1&townshipId=18" class="thm-btn main-slider__btn">{{__('home.buy_now')}}</a>
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
                                    <a target="blank" href="https://pro1globalhomecenter.com/home.html?divisionId=1&townshipId=18" class="thm-btn main-slider__btn">{{__('home.buy_now')}}</a>
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
                                            {{-- <div class="we-provide__tab-main-content-icon">
                                                <span class="icon-mission"></span>
                                            </div> --}}
                                            <h3 class="we-provide__tab-main-content-title">{{__('home.mission_title')}}</h3>
                                            <p class="we-provide__tab-main-content-text">{{__('home.mission_detail')}}
                                            </p>
                                        </div>
                                        <div class="we-provide__tab-main-content-right">
                                            <div class="we-provide__tab-main-content-right-img mt-20">
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
                                            {{-- <div class="we-provide__tab-main-content-icon">
                                                <span class="icon-mission"></span>
                                            </div> --}}
                                            <h3 class="we-provide__tab-main-content-title">{{__('home.vission_title')}}</h3>
                                            <p class="we-provide__tab-main-content-text">{{__('home.vission_detail')}}
                                            </p>
                                        </div>
                                        <div class="we-provide__tab-main-content-right">
                                            <div class="we-provide__tab-main-content-right-img">
                                                <img src="{{asset('assets/photos/vision1.png')}}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>

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
                        <img src="{{asset('assets/photos/estab.jpg')}}" alt="">
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
                        <img src="{{asset('assets/photos/milestone-mission.jpg')}}" alt="">
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
                        <img src="{{asset('assets/photos/joint.jpg')}}" alt="">
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
                            <p class="section-sub-title">{{__('home.about_title')}}</p>
                            <div class="section-title-shape-1">
                                <img src="{{asset('assets/images/shapes/section-title-shape-1.png')}}" alt="">
                            </div>
                            <div class="section-title-shape-2">
                                <img src="{{asset('assets/images/shapes/section-title-shape-2.png')}}" alt="">
                            </div>
                        </div>

                    </div>
                    <p class="about-two__text">{{__('home.about_detail1')}}</p>
                    <div class="about-two__awards-box">
                        <div class="about-two__awards-inner">
                            <p class="about-two__awards-content">{{__('home.about_detail2')}}</p>
                        </div>
                    </div>


                </div>
            </div>
            <div class="col-xl-5">
                <div class="about-two__middle">
                    <div class="about-two__img-box">
                        <div class="about-two__img">
                            <img src="{{asset('assets/photos/about3.png')}}" alt="">
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
                                <p class="about-two__counter-text-1">{{__('home.about_emptitle')}}</p>
                                <p class="about-two__counter-text-2">{{__('home.about_empdetail')}}
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="about-two__counter-single">
                                <div class="about-two__counter-count count-box">
                                    <h3 class="count-text" data-speed="4000" data-stop="12">00</h3>
                                </div>
                                <p class="about-two__counter-text-1">{{__('home.about_curbranch1')}}</p>
                                <p class="about-two__counter-text-2">{{__('home.about_curbranch2')}}
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="about-two__counter-single">
                                <div class="about-two__counter-count count-box">
                                    <h3 class="count-text" data-speed="4000" data-stop="5">00</h3>
                                    <!-- <span class="about-two__counter-percent">%</span> -->
                                </div>
                                <p class="about-two__counter-text-1">{{__('home.about_division1')}}</p>
                                <p class="about-two__counter-text-2">{{__('home.about_division2')}}
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
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="services-two__single">
                        <div class="">
                            <div class="services-two__icon">
                                <img src="{{asset('assets/photos/a.png')}}">
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
                                <img src="{{asset('assets/photos/collabration.png')}}">
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
                                <img src="{{asset('assets/photos/h.png')}}">
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
                                <img src="{{asset('assets/photos/innovation.png')}}">
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
                                <img src="{{asset('assets/photos/ethics.png')}}">
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
                                <img src="{{asset('assets/photos/value.png')}}">
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
                                <img src="{{asset('assets/photos/en.png')}}">
                            </div>
                        </div>
                        <h3 class="services-two__title"><a href="" onclick="return false;">Energy</a>
                        </h3>

                    </div>
                </div>
                <div>
                    <div class="section-sub-title-box">
                        <p class="section-sub-title"><a href="{{ route('coporate') }}" class="thm-btn main-slider__btn">See More</a></p>
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
    </div>
</section>
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
                                <img src="{{asset('assets/photos/e-commerceads5.jpg')}}" alt=""></a>
                        </div>
                        <a target="_blank" href="https://pro1globalhomecenter.com/home.html?divisionId=1&townshipId=18">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="about-one__right">
                    <div class="section-title text-left">
                        <div class="section-sub-title-box">
                            <p class="section-sub-title"></p>

                        </div>
                        <h2 class="section-title__title">{{__('home.e_com1')}}</h2>
                    </div>
                    <p class="about-one__text-1">
                    {{__('home.e_com2')}}</p>
                    <ul class="list-unstyled about-one__points">
                        <li>
                            <div class="icon">
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="text">
                                <p>{{__('home.e_com3')}}</p>
                            </div>

                        </li>
                    </ul>
                    <ul class="list-unstyled about-one__points">
                        <li>
                            <div class="icon">
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="text">
                                <p>{{__('home.e_com4')}}</p>
                            </div>

                        </li>
                    </ul>
                    <ul class="list-unstyled about-one__points">
                        <li>
                            <div class="icon">
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="text">
                                <p>{{__('home.e_com5')}}</p>
                            </div>

                        </li>
                    </ul>
                    <ul class="list-unstyled about-one__points">
                        <li>
                            <div class="icon">
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="text">
                                <p>{{__('home.e_com6')}}</p>
                            </div>

                        </li>
                    </ul>
                    <ul class="list-unstyled about-one__points">
                        <li>
                            <div class="icon">
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="text">
                                <p>{{__('home.e_com7')}}</p>
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
                    <p class="download__sub-title">{{__('home.ecom_ads')}}</p>
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
                                <p class="section-sub-title">{{__('ourservices.our_services')}}</p>
                                <div class="section-title-shape-1">
                                    <img src="{{asset('assets/images/shapes/section-title-shape-1.png')}}" alt="">
                                </div>
                                <div class="section-title-shape-2">
                                    <img src="{{asset('assets/images/shapes/section-title-shape-2.png')}}" alt="">
                                </div>
                            </div>
                            <h2 class="section-title__title">{{__('ourservices.our_services_title')}}</h2>
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
                            <h2 class="service-one__title"><a href="{{route('product_information')}}">{{__('ourservices.see_more')}}</a></h2>
                            <h5>{{__('ourservices.pro_info')}}</h5>

                        </div>
                    </div>
                </div>
                <!--Services One Single End-->
                <!--Services One Single Start-->
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <a href="{{route('delivery_service')}}">
                        <div class="services-one__single">
                            <div class="service-one__img">
                                <img src="{{asset('assets/csr_photos/delivery.png')}}" alt="">
                            </div>
                            <div class="service-one__content">

                                <h2 class="service-one__title"><a href="{{route('delivery_service')}}">{{__('ourservices.see_more')}}</a></h2>
                                <h5>{{__('ourservices.deli_info')}}</h5>

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

                                <h2 class="service-one__title"><a href="{{route('special_order')}}">{{__('ourservices.see_more')}}</a></h2>
                                <h5>{{__('ourservices.spec_or')}}</h5>
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

                                <h2 class="service-one__title"><a href="{{route('product_return')}}">{{__('ourservices.see_more')}}</a></h2>
                                <h5>{{__('ourservices.Pro_retu')}}</h5>
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

                                <h2 class="service-one__title"><a href="{{route('consulting_service')}}">{{__('ourservices.see_more')}}</a></h2>
                                <h5>{{__('ourservices.con_ser')}}</h5>
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

                                <h2 class="service-one__title"><a href="{{route('contractor_information')}}">{{__('ourservices.see_more')}}</a></h2>
                                <h5>{{__('ourservices.con_info')}}</h5>
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

                                <h2 class="service-one__title"><a href="{{route('member_service')}}">{{__('ourservices.see_more')}}</a></h2>
                                <h5>{{__('ourservices.our_ser')}}</h5>
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
                                <img src="{{asset('assets/csr_photos/service.png')}}" alt="">
                            </div>
                            <div class="service-one__content">

                                <h2 class="service-one__title"><a href="{{route('repair_service')}}">{{__('ourservices.see_more')}}</a></h2>
                                <h5>{{__('ourservices.repair_install')}}</h5>
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
                    <p class="download__sub-title">{{__('home.member_ads')}}</p>
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
                    <p class="section-sub-title">{{__('home.center_header')}}</p>
                    <div class="section-title-shape-1">
                        <img src="{{asset('assets/images/shapes/section-title-shape-1.png')}}" alt="">
                    </div>
                    <div class="section-title-shape-2">
                        <img src="{{asset('assets/images/shapes/section-title-shape-2.png')}}" alt="">
                    </div>
                </div>
                <h2 class="section-title__title">{{__('home.center_title')}}</h2>
            </div>
        </div>
        <div class="section-sub-title-box">
            <h3 class="section-sub-title"><i class="fas fa-map-marker-alt p-2"></i>{{__('home.center_yangon')}}<i class="fas fa-map-marker-alt px-2"></i></h3>
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
                            <p class="portfolio__sub-title">{{__('home.center_lanthit1')}}</p>
                            <h4 class="portfolio__title"><a href="{{route('lanthit_info')}}">{{__('home.center_lanthit2')}}</a></h4>
                        </div>
                        <div>&nbsp;{{__('home.center_lanthit3')}}</div>
                        <div>&nbsp;<i class="fa-solid fa-location-dot"></i>&nbsp;{{__('home.center_lanthit4')}}</div>
                        <div>&nbsp;<i class="fa-solid fa-clock"></i>&nbsp;{{__('home.center_lanthit5')}}</div>
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
                            <p class="portfolio__sub-title">{{__('home.center_satsan1')}}</p>
                            <h4 class="portfolio__title"><a href="{{route('satsan_info')}}">{{__('home.center_satsan2')}}</a></h4>
                        </div>
                        <div>&nbsp;{{__('home.center_satsan3')}}</div>
                        <div>&nbsp;<i class="fa-solid fa-location-dot"></i>&nbsp;{{__('home.center_satsan4')}}</div>
                        <div>&nbsp;<i class="fa-solid fa-clock"></i>&nbsp;{{__('home.center_satsan5')}}</div>
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
                            <p class="portfolio__sub-title">{{__('home.center_ed1')}}</p>
                            <h4 class="portfolio__title"><a href="{{route('eastdagon_info')}}">{{__('home.center_ed2')}}</a></h4>
                        </div>
                        <div>&nbsp;{{__('home.center_ed3')}}</div>
                        <div>&nbsp;<i class="fa-solid fa-location-dot"></i>&nbsp;{{__('home.center_ed4')}}</div>
                        <div>&nbsp;<i class="fa-solid fa-clock"></i>&nbsp;{{__('home.center_ed5')}}</div>
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
                            <p class="portfolio__sub-title">{{__('home.center_hty1')}}</p>
                            <h4 class="portfolio__title"><a href="{{route('hlaingtharyar_info')}}">{{__('home.center_hty2')}}</a></h4>
                        </div>
                        <div>&nbsp;{{__('home.center_hty3')}}</div>
                        <div>&nbsp;<i class="fa-solid fa-location-dot"></i>&nbsp;{{__('home.center_hty4')}}</div>
                        <div>&nbsp;<i class="fa-solid fa-clock"></i>&nbsp;{{__('home.center_hty5')}}</div>
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
                            <p class="portfolio__sub-title">{{__('home.center_Tm1')}}</p>
                            <h4 class="portfolio__title"><a href="{{route('teminalm_info')}}">{{__('home.center_Tm2')}}</a></h4>
                        </div>
                        <div>&nbsp;{{__('home.center_Tm3')}}</div>
                        <div>&nbsp;<i class="fa-solid fa-location-dot"></i>&nbsp;{{__('home.center_Tm4')}}</div>
                        <div>&nbsp;<i class="fa-solid fa-clock"></i>&nbsp;{{__('home.center_Tm5')}}</div>
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
                            <p class="portfolio__sub-title">{{__('home.center_sdg1')}}</p>
                            <h4 class="portfolio__title"><a href="{{route('southdagon_info')}}">{{__('home.center_sdg2')}}</a></h4>
                        </div>
                        <div>&nbsp;{{__('home.center_sdg3')}}</div>
                        <div>&nbsp;<i class="fa-solid fa-location-dot"></i>&nbsp;{{__('home.center_sdg4')}}</div>
                        <div>&nbsp;<i class="fa-solid fa-clock"></i>&nbsp;{{__('home.center_sdg5')}}</div>
                        <div>&nbsp;<i class="fa-solid fa-phone-flip"></i>&nbsp;09 777047282, 09 777047283</div>
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
                            <p class="portfolio__sub-title">{{__('home.center_spt1')}}</p>
                            <h4 class="portfolio__title"><a href="{{route('shwepyithar_info')}}">{{__('home.center_spt2')}}</a></h4>
                        </div>
                        <div>&nbsp;{{__('home.center_spt3')}}</div>
                        <div>&nbsp;<i class="fa-solid fa-location-dot"></i>&nbsp;{{__('home.center_spt4')}}</div>
                        <div>&nbsp;<i class="fa-solid fa-clock"></i>&nbsp;{{__('home.center_spt5')}}</div>
                        <div>&nbsp;<i class="fa-solid fa-phone-flip"></i>&nbsp;09-777047384, 09-777047385</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ourcenter mt-5" id="ourCenter">
    <div class="container">
        <div class="section-sub-title-box">
            <h3 class="section-sub-title"><i class="fas fa-map-marker-alt p-2"></i>{{__('home.center_title2')}}<i class="fas fa-map-marker-alt px-2"></i></h3>
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
                            <p class="portfolio__sub-title">{{__('home.center_Tp1')}}</p>
                            <h4 class="portfolio__title"><a href="{{route('theikpan_info')}}">{{__('home.center_Tp2')}}</a></h4>
                        </div>
                        <div>&nbsp;{{__('home.center_Tp3')}}</div>
                        <div>&nbsp;<i class="fa-solid fa-location-dot"></i>&nbsp;{{__('home.center_Tp4')}}</div>
                        <div>&nbsp;<i class="fa-solid fa-clock"></i>&nbsp; {{__('home.center_Tp5')}}</div>
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
                            <p class="portfolio__sub-title">{{__('home.center_Tpw1')}}</p>
                            <h4 class="portfolio__title"><a href="{{route('tampawady_info')}}">{{__('home.center_Tpw2')}}</a></h4>
                        </div>
                        <div>&nbsp;{{__('home.center_Tpw3')}}</div>
                        <div>&nbsp;<i class="fa-solid fa-location-dot"></i>&nbsp;{{__('home.center_Tpw4')}}</div>
                        <div>&nbsp;<i class="fa-solid fa-clock"></i>&nbsp;{{__('home.center_Tpw5')}}</div>
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
            <h3 class="section-sub-title"><i class="fas fa-map-marker-alt p-2"></i>Bago Region{{__('home.center_title3')}}<i class="fas fa-map-marker-alt px-2"></i></h3>
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
                            <p class="portfolio__sub-title">{{__('home.center_bago1')}}</p>
                            <h4 class="portfolio__title"><a href="{{route('bago_info')}}">Show Detail{{__('home.center_bago2')}}</a></h4>
                        </div>
                        <div>&nbsp;{{__('home.center_bago3')}}</div>
                        <div>&nbsp;<i class="fa-solid fa-location-dot"></i>&nbsp;Ward.8, Oakthar Myo Thit, Bago Township, Bago, Myanmar{{__('home.center_bago4')}}</div>
                        <div>&nbsp;<i class="fa-solid fa-clock"></i>&nbsp;Open Hour : 08:30 AM ~ 05:30 PM{{__('home.center_bago5')}}</div>
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
                                <p class="section-sub-title">OUR PARTNERS</p>
                                <div class="section-title-shape-1">
                                    <img src="assets/images/shapes/section-title-shape-1.png" alt="">
                                </div>
                                <div class="section-title-shape-2">
                                    <img src="assets/images/shapes/section-title-shape-2.png" alt="">
                                </div>
                            </div>
                            <p class="section-title__title">{{__('home.part_1')}}<br>{{__('home.part_2')}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    {{-- <div class="testimonial-one__top-right">
                        <p class="testimonial-one__top-text">Just click on the brands below and you can order those brand products on our E-commerce website.</p>
                    </div> --}}
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
                                "items": 2
                            },
                            "1200": {
                                "items": 2
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
                                        <h6>"Farmer Lighting Company Limited"</h6>
                                    </div>
                                    <div class="testimonial-one__client-info">
                                        <div class=>
                                           <img src="{{asset('assets/photos/Farmer Lighting Company Limited.png')}}" alt="">
                                        </div>
                                        <div class="testimonial-one__client-content">

                                            <div class="testimonial-one__client-details">
                                                <!-- <h3 class="testimonial-one__client-name">OPPLE</h3> -->
                                                <p class="testimonial-one__client-sub-title"></p>
                                            </div>
                                        </div>
                                    </div>
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
                                        <h6>"Zinhtet Trading Company Limited"</h6>
                                    </div>
                                    <div class="testimonial-one__client-info">
                                        <div class=>

                                                <img src="{{asset('assets/photos/Zinhtet Trading Company Limited.jpg')}}" alt="">
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
                        <p class="section-sub-title">{{__('home.activities_title')}}</p>
                        <div class="section-title-shape-1">
                            <img src="{{asset('assets/images/shapes/section-title-shape-1.png')}}" alt="">
                        </div>
                        <div class="section-title-shape-2">
                            <img src="{{asset('assets/images/shapes/section-title-shape-2.png')}}" alt="">
                        </div>
                    </div>
                    <p class="section-title__title">{{__('home.activities_title1')}}<br> {{__('home.activities_title2')}} </p>
                </div>
                <ul class="portfolio-filter style1 post-filter has-dynamic-filters-counter list-unstyled ">
                    <li data-filter=".filter-item " class="active"><span class="filter-text">All</span></li>
                    @foreach ($act_types as $type)
                        <li data-filter=".stra"><button class="btn bg-transparent" data-id="filter{{ $type->name }}" id="act_type"><span class="filter-text ">{{ $type->name }}</span></button></li>
                    @endforeach
                    {{-- <li data-filter=".stra"><span class="filter-text">EMPLOYEE ACTIVITIES</span></li>
                    <li data-filter=".busi"><span class="filter-text">CSR ACTIVITIES</span></li> --}}
                </ul>
            </div>
        </div>

        <div class="row filter-layout masonary-layout">
            @foreach ($acts as $act)
            <div class="col-xl-4 col-lg-6 col-md-6 filter-item stra custom-img">
                <div class="portfolio__single ">
                    <div class="">
                        <a href="{{route('act_detail',$act->id)}}">
                        <img src="{{ asset("storage/uploads/activity/$act->preview_img") }}" alt="" style="object-fit:contain;
                        width:380px;
                        height:420px;
                        border: solid 1px #CCC" class="rounded">
                        {{-- <div class="">
                            <a href="{{route('act_detail',$act->id)}}">{{ $act->title }}</a>
                        </div> --}}
                        <div>
                            <ul class="list-unstyled about-one__points">
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>{{ $act->title }} ({{ $act->location }})</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>{{ $act->date }}</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>{{ $act->description }}</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </a>
                        {{-- <div class="portfolio__content">
                            <p class="portfolio__sub-title"></p>
                            <h4 class="portfolio__title"><a href="#ouractivities">{{}}</a></h4>
                        </div> --}}
                    </div>
                </div>
            </div>
            @endforeach

            <!--Portfolio Single End-->
            {{-- <div class="col-xl-4 col-lg-6 col-md-6 filter-item stra custom-img">
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
            </div> --}}

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
{{-- <section class="cta-one cta-three">
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
</section> --}}
<!-- Call Head Office End -->
<!-- Contact Us Start -->
<section class="contact-page" id="contactus">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-5">
                <div class="contact-page__left">
                    <div class="section-title text-left">
                        <div class="section-sub-title-box">
                            <p class="section-sub-title">{{__('home.contact_us1')}}</p>
                            <div class="section-title-shape-1">
                                <img src="{{asset('assets/images/shapes/section-title-shape-1.png')}}" alt="">
                            </div>
                            <div class="section-title-shape-2">
                                <img src="{{asset('assets/images/shapes/section-title-shape-2.png')}}" alt="">
                            </div>
                        </div>
                        <h2 class="section-title__title">{{__('home.contact_us2')}}</h2>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-lg-7">
                <div class="contact-page__right">
                    <div class="contact-page__form">
                        @if(Session::has('fails'))
                            <div class="mt-2" role="alert">
                                <div class="text-sm font-bold bg-danger border-l-4 border-danger text-danger p-2 w-50">{{ Session::get('fails') }}</div>
                                @php
                                Session::forget('success');
                                @endphp
                            </div>
                        @elseif(Session::has('success'))
                            <div class="mt-2" role="alert">
                                <div class="text-sm font-bold bg-success border-l-4 border-success text-white p-2 w-50">{{ Session::get('success') }}</div>
                                @php
                                Session::forget('success');
                                @endphp
                            </div>
                        @endif
                        <form action="{{route('feedbacks.store')}}" class="" novalidate="novalidate" method="POST">
                            @csrf
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
                                        <input type="text" placeholder="Phone number" name="ph_no">
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
                                        <textarea name="description" placeholder="Write a message"></textarea>
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
@section('script')
    <script>
         $(document).ready(function () {
        $("body").on("click","#act_type",function(e){
        if(!confirm("Do you really want to do this?")) {
            return false;
            }
        e.preventDefault();
        var id = $(this).data("id");
        console.log(id);
        // var deleteField = '<input type="hidden" name="delete" value="'+id+'" />';
        // $('#myForm').append(deleteField);
        // $('#myForm').submit();
        });
        });
    </script>
@endsection
