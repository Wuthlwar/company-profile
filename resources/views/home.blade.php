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
                                    <a target="blank" href="https://pro1globalhomecenter.com/home.html?divisionId=1&townshipId=18" class="thm-btn main-slider__btn">{{__('home.buy_now')}}</a>
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
<section class="feature-two">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                <div class="feature-two__single">
                    <div class="feature-two__img">
                        <img style="height: 290px;" src="{{asset('assets/photos/vb-channel.jpg')}}" alt="">
                    </div>
                    {{-- <div class="feature-two__content">
                        <div class="feature-two__content-inner">
                            <div class="feature-two__icon">

                            </div>
                            <div class="feature-two__text-box">
                                <p class="feature-two__text"><a href="{{route('establish_year')}}">Establish
                                        <br>Year</a>
                                </p>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
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
        </div>
    </div>
</section>
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
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="700ms">
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
                                <p> <span>Available on</span> <br> GooglePlay</p>
                            </a>
                             <center><img src="{{ asset('assets/photos/qrandroide.jpg') }}" alt="" style="padding: 20px; width:180px"></center>
                        </div>
                        <div class="download__app-one download__app-one--two">
                            <a target="_blank" href="https://apps.apple.com/us/app/pro-1-global/id1605570164">
                                <i class="fab fa-apple"></i>
                                <p> <span>get it on</span> <br>AppStore</p>
                            </a>
                             <center><img src="{{ asset('assets/photos/qriose.jpg') }}" alt="" style="padding: 20px; width:180px"></center>
                        </div>
                        <div class="download__app-one download__app-one--two">
                            <a target="_blank" href="https://appgallery.huawei.com/app/C106809947">
                                <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Huawei</title><path d="M3.67 6.14S1.82 7.91 1.72 9.78v.35c.08 1.51 1.22 2.4 1.22 2.4 1.83 1.79 6.26 4.04 7.3 4.55 0 0 .06.03.1-.01l.02-.04v-.04C7.52 10.8 3.67 6.14 3.67 6.14zM9.65 18.6c-.02-.08-.1-.08-.1-.08l-7.38.26c.8 1.43 2.15 2.53 3.56 2.2.96-.25 3.16-1.78 3.88-2.3.06-.05.04-.09.04-.09zm.08-.78C6.49 15.63.21 12.28.21 12.28c-.15.46-.2.9-.21 1.3v.07c0 1.07.4 1.82.4 1.82.8 1.69 2.34 2.2 2.34 2.2.7.3 1.4.31 1.4.31.12.02 4.4 0 5.54 0 .05 0 .08-.05.08-.05v-.06c0-.03-.03-.05-.03-.05zM9.06 3.19a3.42 3.42 0 00-2.57 3.15v.41c.03.6.16 1.05.16 1.05.66 2.9 3.86 7.65 4.55 8.65.05.05.1.03.1.03a.1.1 0 00.06-.1c1.06-10.6-1.11-13.42-1.11-13.42-.32.02-1.19.23-1.19.23zm8.299 2.27s-.49-1.8-2.44-2.28c0 0-.57-.14-1.17-.22 0 0-2.18 2.81-1.12 13.43.01.07.06.08.06.08.07.03.1-.03.1-.03.72-1.03 3.9-5.76 4.55-8.64 0 0 .36-1.4.02-2.34zm-2.92 13.07s-.07 0-.09.05c0 0-.01.07.03.1.7.51 2.85 2 3.88 2.3 0 0 .16.05.43.06h.14c.69-.02 1.9-.37 3-2.26l-7.4-.25zm7.83-8.41c.14-2.06-1.94-3.97-1.94-3.98 0 0-3.85 4.66-6.67 10.8 0 0-.03.08.02.13l.04.01h.06c1.06-.53 5.46-2.77 7.28-4.54 0 0 1.15-.93 1.21-2.42zm1.52 2.14s-6.28 3.37-9.52 5.55c0 0-.05.04-.03.11 0 0 .03.06.07.06 1.16 0 5.56 0 5.67-.02 0 0 .57-.02 1.27-.29 0 0 1.56-.5 2.37-2.27 0 0 .73-1.45.17-3.14z"/></svg>
                                <p><span>get it on</span> <br>AppGallery</p>
                            </a>
                             <center><img src="{{ asset('assets/photos/qrchinae.jpg') }}" alt="" style="padding: 20px; width:180px"></center>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-lg-6">
                <div class="download__right">
                    <div class="download__img wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
                        <img src="{{asset('assets/photos/onlinestore.png')}}" alt="">
                        <div class="download__badge">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
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
                                <p> <span>Available on</span> <br> GooglePlay</p>
                            </a>
                            <center><img src="{{ asset('assets/photos/qrandroidm.jpg') }}" alt="" style="padding: 20px; width:180px"></center>
                        </div>
                        <div class="download__app-one download__app-one--two">
                            <a target="_blank" href="https://apps.apple.com/us/app/pro-1-member/id1528296877">
                                <i class="fab fa-apple"></i>
                                <p> <span>get it on</span> <br>AppStore</p>
                            </a>
                            <center><img src="{{ asset('assets/photos/qriosm.jpg') }}" alt="" style="padding: 20px; width:180px"></center>
                        </div>
                        <div class="download__app-one download__app-one--two">
                            <a target="_blank" href="https://appgallery.huawei.com/app/C106809937">
                                <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Huawei</title><path d="M3.67 6.14S1.82 7.91 1.72 9.78v.35c.08 1.51 1.22 2.4 1.22 2.4 1.83 1.79 6.26 4.04 7.3 4.55 0 0 .06.03.1-.01l.02-.04v-.04C7.52 10.8 3.67 6.14 3.67 6.14zM9.65 18.6c-.02-.08-.1-.08-.1-.08l-7.38.26c.8 1.43 2.15 2.53 3.56 2.2.96-.25 3.16-1.78 3.88-2.3.06-.05.04-.09.04-.09zm.08-.78C6.49 15.63.21 12.28.21 12.28c-.15.46-.2.9-.21 1.3v.07c0 1.07.4 1.82.4 1.82.8 1.69 2.34 2.2 2.34 2.2.7.3 1.4.31 1.4.31.12.02 4.4 0 5.54 0 .05 0 .08-.05.08-.05v-.06c0-.03-.03-.05-.03-.05zM9.06 3.19a3.42 3.42 0 00-2.57 3.15v.41c.03.6.16 1.05.16 1.05.66 2.9 3.86 7.65 4.55 8.65.05.05.1.03.1.03a.1.1 0 00.06-.1c1.06-10.6-1.11-13.42-1.11-13.42-.32.02-1.19.23-1.19.23zm8.299 2.27s-.49-1.8-2.44-2.28c0 0-.57-.14-1.17-.22 0 0-2.18 2.81-1.12 13.43.01.07.06.08.06.08.07.03.1-.03.1-.03.72-1.03 3.9-5.76 4.55-8.64 0 0 .36-1.4.02-2.34zm-2.92 13.07s-.07 0-.09.05c0 0-.01.07.03.1.7.51 2.85 2 3.88 2.3 0 0 .16.05.43.06h.14c.69-.02 1.9-.37 3-2.26l-7.4-.25zm7.83-8.41c.14-2.06-1.94-3.97-1.94-3.98 0 0-3.85 4.66-6.67 10.8 0 0-.03.08.02.13l.04.01h.06c1.06-.53 5.46-2.77 7.28-4.54 0 0 1.15-.93 1.21-2.42zm1.52 2.14s-6.28 3.37-9.52 5.55c0 0-.05.04-.03.11 0 0 .03.06.07.06 1.16 0 5.56 0 5.67-.02 0 0 .57-.02 1.27-.29 0 0 1.56-.5 2.37-2.27 0 0 .73-1.45.17-3.14z"/></svg>
                                <p><span>get it on</span> <br>AppGallery</p>
                            </a>
                            <center><img src="{{ asset('assets/photos/qrchinam.jpg') }}" alt="" style="padding: 20px; width:180px"></center>
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
        {{-- <div class="QR">
            <div class="d-flex justify-content ">
                <div class="col-4 col-sm-2">
                        <img src="{{ asset('assets/photos/android.jpg') }}" alt="">
                    </div>
                    <div class="col-4 col-sm-2">
                    <img src="{{ asset('assets/photos/android.jpg') }}" alt="">
                </div>
                <div class="col-4 col-sm-2">
                    <img src="{{ asset('assets/photos/android.jpg') }}" alt="">
                </div>
            </div>
        </div> --}}
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
            <h3 class="section-sub-title"><i class="fas fa-map-marker-alt p-2"></i>{{__('home.center_title3')}}<i class="fas fa-map-marker-alt px-2"></i></h3>
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
                            <h4 class="portfolio__title"><a href="{{route('bago_info')}}">{{__('home.center_bago2')}}</a></h4>
                        </div>
                        <div>&nbsp;{{__('home.center_bago3')}}</div>
                        <div>&nbsp;<i class="fa-solid fa-location-dot"></i>&nbsp;{{__('home.center_bago4')}}</div>
                        <div>&nbsp;<i class="fa-solid fa-clock"></i>&nbsp;{{__('home.center_bago5')}}</div>
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
            <h3 class="section-sub-title"><i class="fas fa-map-marker-alt p-2"></i>{{__('home.center_title4')}}<i class="fas fa-map-marker-alt px-2"></i></h3>
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
                            <p class="portfolio__sub-title">{{__('home.center_mon1')}}</p>
                            <h4 class="portfolio__title"><a href="{{route('mawlamyine_info')}}">{{__('home.center_mon2')}}</a></h4>
                        </div>
                        <div>&nbsp;{{__('home.center_mon3')}}</div>
                        <div>&nbsp;<i class="fa-solid fa-location-dot"></i>&nbsp;{{__('home.center_mon4')}}</div>
                        <div>&nbsp;<i class="fa-solid fa-clock"></i>&nbsp;{{__('home.center_mon5')}}Open Hour : 08:30 AM ~ 05:30 PM</div>
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
            <h3 class="section-sub-title"><i class="fas fa-map-marker-alt p-2"></i>{{__('home.center_title5')}}<i class="fas fa-map-marker-alt px-2"></i></h3>
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
                            <p class="portfolio__sub-title">{{__('home.center_shan1')}}</p>
                            <h4 class="portfolio__title"><a href="{{route('ayetharyar_info')}}">{{__('home.center_shan2')}}</a></h4>
                        </div>
                        <div>&nbsp;{{__('home.center_shan3')}}</div>
                        <div>&nbsp;<i class="fa-solid fa-location-dot"></i>&nbsp; {{__('home.center_shan4')}} </div>
                        <div>&nbsp;<i class="fa-solid fa-clock"></i>&nbsp;{{__('home.center_shan5')}}</div>
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
                                <p class="section-sub-title">{{__('home.part_title')}}</p>
                                <div class="section-title-shape-1">
                                    <img src="assets/images/shapes/section-title-shape-1.png" alt="">
                                </div>
                                <div class="section-title-shape-2">
                                    <img src="assets/images/shapes/section-title-shape-2.png" alt="">
                                </div>
                            </div>
                            <p class="section-title__title">{{__('home.part_1')}}{{__('home.part_2')}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                </div>
            </div>
        </div>
        <div class="testimonial-one__bottom">
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel owl-theme thm-owl__carousel testimonial-one__carousel owl-loaded owl-drag" data-owl-options='{
                        "loop": true,
                        "autoplay": true,
                        "margin": 40,
                        "nav": true,
                        "dots": true,
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
                                "items": 3
                            },
                            "1200": {
                                "items": 4
                            }
                        }
                    }'>

                    <div class="item ">
                        <div class="card testimonial-one__single p-5">
                            <h5 class="text-center m-3">SCG Co.,Ltd</h5>
                            <div class="card-body">
                                <img class="img-fluid company_logo mx-auto d-block" src="{{asset('companies/scg-logo.jpg')}}" alt="" >
                            </div>
                          </div>

                    </div>

                    <div class="item ">
                        <div class="card testimonial-one__single p-4">
                            <h5 class="text-center m-3">Global House Co.,Ltd</h5>
                            <div class="card-body">
                                <img class="img-fluid company_logo mx-auto d-block" src="{{asset('companies/gbh1.png')}}" alt="" >
                            </div>
                          </div>

                    </div>
                    <div class="item ">
                        <div class="card testimonial-one__single p-3">
                            <h5 class="text-center m-3">COTTO Co.,Ltd</h5>
                            <div class="card-body">
                                <img class="img-fluid company_logo mx-auto d-block" src="{{asset('companies/cotto.jpg')}}" alt="" >
                            </div>
                          </div>

                    </div>
                    

                    <div class="item ">
                        <div class="card testimonial-one__single p-3">
                            <h5 class="text-center m-3">Marcopolo Co.,Ltd</h5>
                            <div class="card-body">
                                <img class="img-fluid company_logo mx-auto d-block" src="{{asset('companies/marcopolo-logo.png')}}" alt="" >
                            </div>
                          </div>

                    </div>
                    <div class="item ">
                        <div class="card testimonial-one__single p-3">
                            <h5 class="text-center m-3">Zhangshi  Co.,Ltd</h5>
                            <div class="card-body">
                                <img class="img-fluid company_logo mx-auto d-block" src="{{asset('companies/Zhangshi-logo.jpg')}}" alt="" >
                            </div>
                          </div>

                    </div>
                    <div class="item ">
                        <div class="card testimonial-one__single p-4">
                            <h5 class="text-center m-3">HAFELE Co.,Ltd</h5>
                            <div class="card-body">
                                <img class="img-fluid company_logo mx-auto d-block" src="{{asset('companies/hafele-logo.jpg')}}" alt="" >
                            </div>
                          </div>

                    </div>
                    <div class="item ">
                        <div class="card testimonial-one__single p-5">
                            <h5 class="text-center m-3">DOS Co.,Ltd</h5>
                            <div class="card-body">
                                <img class="img-fluid company_logo mx-auto d-block" src="{{asset('companies/Logo DOS-01.jpg')}}" alt="" >
                            </div>
                          </div>

                    </div>
                    <div class="item ">
                        <div class="card testimonial-one__single p-4">
                            <h5 class="text-center m-3">OPPLE Co.,Ltd</h5>
                            <div class="card-body">
                                <img class="img-fluid company_logo mx-auto d-block" src="{{asset('companies/opple.png')}}" alt="" >
                            </div>
                          </div>

                    </div>
<<<<<<< HEAD

=======
>>>>>>> b6d21de188bb6033a2bfa8397794f6efc77837ae
                    <div class="item ">
                        <div class="card testimonial-one__single p-3">
                            <h5 class="text-center m-3">UPG Co.,Ltd</h5>
                            <div class="card-body">
                                <img class="img-fluid company_logo mx-auto d-block" src="{{asset('companies/upg.jpg')}}" alt="" >
                            </div>
                          </div>

                    </div>

                        <div class="item ">
                            <div class="card testimonial-one__single p-1">
                                <h5 class="text-center m-3">Farmer Lighting Co.,Ltd</h5>
                                <div class="card-body">
                                    <img class="img-fluid company_logo mx-auto d-block" src="{{asset('assets/photos/Farmer Lighting Company Limited.png')}}" alt="" >
                                </div>
                              </div>

                        </div>
                        <div class="item ">
                            <div class="card testimonial-one__single p-2">
                                <h5 class="text-center m-3">Zinhtet Trading Co.,Ltd</h5>
                                <div class="card-body">
                                    <img class="img-fluid company_logo mx-auto d-block" src="{{asset('assets/photos/Zinhtet Trading Company Limited.jpg')}}" alt="" >
                                </div>
                              </div>

                        </div>
                        <!-- <div class="item ">
                            <div class="card testimonial-one__single p-2">
                                <h5 class="text-center m-3">UPG PAINT & CONATING Co.,Ltd</h5>
                                <div class="card-body">
                                    <img class="img-fluid company_logo mx-auto d-block" src="{{asset('companies/upg.jpg')}}" alt="" >
                                </div>
                              </div>

                        </div> -->
                        <div class="item ">
                            <div class="card testimonial-one__single p-2">
                                <h5 class="text-center m-3">Sweety Home Industry Co.,Ltd</h5>
                                <div class="card-body">
                                    <img class="img-fluid company_logo mx-auto d-block" src="{{asset('companies/sweety_home.jpg')}}" alt="" >
                                </div>
                              </div>
                        </div>
                        <div class="item ">
                            <div class="card testimonial-one__single p-2" style="height: 260px">
                                <h5 class="text-center m-3">Benhur Trading Co.,Ltd</h5>
                                <div class="card-body">
                                    <img class="img-fluid company_logo mx-auto d-block" src="{{asset('companies/benhur_trading.jpg')}}" alt="" >
                                </div>
                              </div>
                        </div>
                        <div class="item ">
                            <div class="card testimonial-one__single p-2" style="height: 260px">
                                <h5 class="text-center m-3">I.E.M Co.,Ltd</h5>
                                <div class="card-body" style="margin-top: 50px">
                                    <img class="img-fluid company_logo mx-auto d-block" src="{{asset('companies/iem.png')}}" alt="" >
                                </div>
                              </div>
                        </div>
                        <div class="item ">
                            <div class="card testimonial-one__single p-2">
                                <h5 class="text-center m-3">JEWELLERY LUCK Co.,Ltd</h5>
                                <div class="card-body">
                                    <img class="img-fluid company_logo mx-auto d-block" src="{{asset('companies/jewellery_luck.png')}}" alt="" >
                                </div>
                              </div>
                        </div>
                        <div class="item ">
                            <div class="card testimonial-one__single p-2">
                                <h5 class="text-center m-3">TMW Enterprise Limited</h5>
                                <div class="card-body" style="margin-top: 10px">
                                    <img class="img-fluid company_logo mx-auto d-block" src="{{asset('companies/tmw.jpg')}}" alt="" >
                                </div>
                              </div>
                        </div>
                        <div class="item ">
                            <div class="card testimonial-one__single p-2" style="height: 260px">
                                <h5 class="text-center m-3">JOTUN MYANMAR SERVICES Co.,Ltd</h5>
                                <div class="card-body" style="margin-top: 40px">
                                    <img class="img-fluid company_logo mx-auto d-block" src="{{asset('companies/jotun.png')}}" alt="" >
                                </div>
                              </div>
                        </div>
                        <div class="item ">
                            <div class="card testimonial-one__single p-2">
                                <h5 class="text-center m-3">TOA PAINT (MYANMAR) Co.,Ltd</h5>
                                <div class="card-body">
                                    <img class="img-fluid company_logo mx-auto d-block" src="{{asset('companies/toa.jpg')}}" alt="" >
                                </div>
                              </div>
                        </div>
                        <div class="item ">
                            <div class="card testimonial-one__single p-2">
                                <h5 class="text-center m-3">Myo Thein Electronics Co.,Ltd</h5>
                                <div class="card-body">
                                    <img class="img-fluid company_logo mx-auto d-block" src="{{asset('companies/myothein_electric.jpg')}}" alt="" >
                                </div>
                              </div>
                        </div>
                        <div class="item ">
                            <div class="card testimonial-one__single p-2">
                                <h5 class="text-center m-3">SIKA MYANMAR LIMITED</h5>
                                <div class="card-body">
                                    <img class="img-fluid company_logo mx-auto d-block" src="{{asset('companies/sika_myamar.jpg')}}" alt="" >
                                </div>
                              </div>
                        </div>
                        <div class="item ">
                            <div class="card testimonial-one__single p-2" style="height: 260px">
                                <h5 class="text-center m-3">Peace Myanmar Electric Co.,Ltd</h5>
                                <div class="card-body" style="margin-top: 50px">
                                    <img class="img-fluid company_logo mx-auto d-block" src="{{asset('companies/pme.png')}}" alt="">
                                </div>
                              </div>
                        </div>
                        <div class="item ">
                            <div class="card testimonial-one__single p-2">
                                <h5 class="text-center m-3">MOTTAMA TRADING Co.,Ltd</h5>
                                <div class="card-body">
                                    <img class="img-fluid company_logo mx-auto d-block" src="{{asset('companies/mottama.jpg')}}" alt="" >
                                </div>
                              </div>
                        </div>
                        <div class="item ">
                            <div class="card testimonial-one__single p-2" style="height: 260px">
                                <h5 class="text-center m-3">TWJS Co.,Ltd</h5>
                                <div class="card-body" style="margin-top: 40px">
                                    <img class="img-fluid company_logo mx-auto d-block" src="{{asset('companies/twjs.png')}}" alt="" >
                                </div>
                              </div>
                        </div>
                        <div class="item ">
                            <div class="card testimonial-one__single p-2" style="height: 260px">
                                <h5 class="text-center m-3">Good Brothers Co.,Ltd</h5>
                                <div class="card-body" style="margin-top: 50px">
                                    <img class="img-fluid company_logo mx-auto d-block" src="{{asset('companies/gbs.png')}}" alt="" >
                                </div>
                              </div>
                        </div>
                        <div class="item ">
                            <div class="card testimonial-one__single p-2">
                                <h5 class="text-center m-3">DKSH (Myanmar) Co.,Ltd</h5>
                                <div class="card-body">
                                    <img class="img-fluid company_logo mx-auto d-block" src="{{asset('companies/dksh.jpg')}}" alt="" >
                                </div>
                              </div>
                        </div>

                        {{-- <div class="item ">
                            <div class="testimonial-one__single">
                                <div class="testimonial-one__single-inner">
                                    <div class="partaner mb-5 ">
                                        <h5>Zinhtet Trading Company Limited</h4>
                                    </div>
                                    <div class="testimonial-one__client-info">
                                        <div class>
                                                <img src="{{asset('assets/photos/Zinhtet Trading Company Limited.jpg')}}" alt="">
                                        </div>
                                        <div class="testimonial-one__client-content">
                                            <div class="testimonial-one__client-details">
                                                <p class="testimonial-one__client-sub-title"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item ">
                            <div class="testimonial-one__single">
                                <div class="testimonial-one__single-inner">
                                    <div class="partaner mb-5 ">
                                        <h5>Zinhtet Trading Company Limited</h4>
                                    </div>
                                    <div class="testimonial-one__client-info">
                                        <div>
                                                <img src="{{asset('assets/photos/Zinhtet Trading Company Limited.jpg')}}" alt="">
                                        </div>
                                        <div class="testimonial-one__client-content">
                                            <div class="testimonial-one__client-details">
                                                <p class="testimonial-one__client-sub-title"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
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
                    <li class="active"><button class="btn bg-transparent"><span onclick="addActClass('0')">All({{count($acts)}}) </span></button></li>
                    @foreach ($act_types as $type)
                        <li><button class="btn bg-transparent"><span onclick="addActClass('{{ $type->id }}')">{{ $type->name }}({{ count($type->activities) }})</span></button>
                        </li >
                    @endforeach
                    {{-- <li data-filter=".stra"><span class="filter-text">EMPLOYEE ACTIVITIES</span></li>
                    <li data-filter=".busi"><span class="filter-text">CSR ACTIVITIES</span></li> --}}
                </ul>
            </div>
        </div>

        <div class="row" id="activitiesDiv">
                @foreach ($acts as $act)
                <div class="col-xl-4 col-md-6 custom-img rounded-lg" >
                    <div class="portfolio__single">
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

                                            @if (session()->get('locale')=='en')
                                                <p>{{ Str::limit($act->title,20) }} ({{ Str::limit($act->location,50) }})</p>
                                            @else
                                            <p style="font-size: 18px">{{ Str::limit($act->title_mm,100) }} ({{ Str::limit($act->location_mm,50) }})</p>
                                            @endif

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
                                            @if (session()->get('locale')=='en')
                                            <p>{{ Str::limit($act->description,70) }}</p>
                                            @else
                                            <p>{{ Str::limit($act->description_mm,70) }}</p>
                                            @endif
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </a>

                        </div>
                    </div>
                </div>
                @endforeach


        </div>
    </div>
</section>
<!-- Our Activities End -->

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
                                        <input type="text" placeholder="{{__('home.contact_name')}}" name="name">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="comment-form__input-box">
                                        <input type="email" placeholder="{{__('home.contact_mail')}}" name="email">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="comment-form__input-box">
                                        <input type="text" placeholder="{{__('home.contact_ph')}}" name="ph_no">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="comment-form__input-box">
                                        <input type="text" placeholder="{{__('home.contact_sub')}}" name="subject">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="comment-form__input-box text-message-box">
                                        <textarea name="description" placeholder="{{__('home.contact_message')}}"></textarea>
                                    </div>
                                    <div class="comment-form__btn-box">
                                        <button type="submit" class="thm-btn comment-form__btn">{{__('home.contact_send')}}</button>
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

             var lang1 = $('#langSwitch2').val();

            $("#langSwitch2").on('change', function() {
                window.location.href="{{ route('lang','en') }}"
            });
            $("#langSwitch1").on('change', function() {
                window.location.href="{{ route('lang','mm') }}"
            });
        });
        function addActClass($type_id)
        {

            // $('#activitiesDiv').hide();
            var url='/getActByType/'+$type_id;
            $.ajax({
                type: "GET",
                url: url,
                success: function (response)
                {
                    // console.log(response)
                    $('#activitiesDiv').html('');
                    $.each(response, function (index, value) {

                        var actDiv =`<div class="col-xl-4 col-md-6 custom-img" >
                                        <div class="portfolio__single ">
                                            <div class="">
                                                <a href="{{ url("act_detail/`+value.id+`") }}">
                                                <img src="/storage/uploads/activity/`+value.preview_img+`" alt="" style="object-fit:contain;
                                                width:380px;
                                                height:420px;
                                                border: solid 1px #CCC" class="rounded">
                                                <div>
                                                    <ul class="list-unstyled about-one__points">
                                                        <li>
                                                            <div class="icon">
                                                                <i class="fa fa-check"></i>
                                                            </div>
                                                            <div class="text">
                                                                @if (session()->get('locale')=='en')
                                                                    <p>`+value.title.substring(0,20)+`(`+value.location.substring(0,50)+`)</p>
                                                                @else
                                                                <p> <p>`+value.title_mm.substring(0,20)+`(`+value.location_mm.substring(0,50)+`)</p></p>
                                                                @endif
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <i class="fa fa-check"></i>
                                                            </div>
                                                            <div class="text">
                                                                <p>`+value.date+`</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <i class="fa fa-check"></i>
                                                            </div>
                                                            <div class="text">
                                                                @if (session()->get('locale')=='en')
                                                                    <p>`+value.description.substring(0,70)+`</p>
                                                                @else
                                                                <p>`+value.description_mm.substring(0,70)+`</p>
                                                                @endif
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </a>

                                            </div>
                                        </div>
                                    </div>`;

                                    $('#activitiesDiv').append(actDiv)
                        console.log(value)
                    });
                }
            });



        }
    </script>
    <script>
        var btns = document.getElementsByClassName("dropdown");
        for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function() {
        var current = document.getElementsByClassName("active");

        if (current.length > 0) {
            current[0].className = current[0].className.replace(" current", "");
        }
        console.log(this.className)

        this.className += "current";
        });
        }
    </script>
@endsection
