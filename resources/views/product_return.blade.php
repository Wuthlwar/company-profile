@extends('layouts.main')
@section('content')

    <div class="stricky-header stricked-menu main-menu">
        <div class="sticky-header__content"></div>
        <!-- /.sticky-header__content -->
    </div>
    <!-- /.stricky-header -->

    <!--About Four Start-->
    <section class="about-four">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="about-four__left">
                        <div class="about-four__img-box wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                            <div class="about-four__img">
                                <img src="{{asset('/assets/photos/services/pr1.png')}}" alt="">
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="about-four__right">
                        <div class="section-title text-left">
                            <div class="section-sub-title-box">
                                <p class="section-sub-title">Product Return</p>
                                <div class="section-title-shape-1">
                                    <img src="{{asset('/assets/images/shapes/section-title-shape-1.png')}}" alt="">
                                </div>
                                <div class="section-title-shape-2">
                                    <img src="{{asset('/assets/images/shapes/section-title-shape-2.png')}}" alt="">
                                </div>
                            </div>

                        </div>
                        <p class="about-four__text-1">
                            At PRO1 Global Home Center, we also provide the service of exchanging products that you bought incorrectly for your convenience.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About Four End-->

    <!--Brand One Start-->
    <section class="brand-one">
        <div class="container">
            <div class="row">
                <div class="col-xl-3">
                    <div class="brand-one__title">
                        <h2>Take a look at the Super services of PRO 1 Global Home Center</h2>
                    </div>
                </div>
                <div class="col-xl-9">
                    <div class="brand-one__main-content">
                        <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 100, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
                    "0": {
                        "spaceBetween": 30,
                        "slidesPerView": 2
                    },
                    "375": {
                        "spaceBetween": 30,
                        "slidesPerView": 2
                    },
                    "575": {
                        "spaceBetween": 30,
                        "slidesPerView": 3
                    },
                    "767": {
                        "spaceBetween": 50,
                        "slidesPerView": 4
                    },
                    "991": {
                        "spaceBetween": 50,
                        "slidesPerView": 5
                    },
                    "1199": {
                        "spaceBetween": 100,
                        "slidesPerView": 5
                    }
                }}'>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <a  href="{{route('product_information')}}"><img src="{{asset('/assets/photos/Service Photo/Product Information.jpg')}}" alt=""></a>
                                </div>
                                <div class="swiper-slide">
                                    <a  href="{{route('delivery_service')}}"> <img src="{{asset('/assets/photos/Service Photo/Delivery Service.jpg')}}" alt=""></a>
                                </div>
                                <div class="swiper-slide">
                                    <a  href="{{route('special_order')}}"><img src="{{asset('/assets/photos/Service Photo/Special Order.jpg')}}" alt=""></a>
                                </div>
                                <div class="swiper-slide">
                                    <a  href="{{route('product_return')}}"><img src="{{asset('/assets/photos/Service Photo/Product Return.jpg')}}" alt=""></a>
                                </div>
                                <div class="swiper-slide">
                                    <a  href="{{route('consulting_service')}}"><img src="{{asset('/assets/photos/Service Photo/Consulting Service.jpg')}}" alt=""></a>
                                </div>
                                <div class="swiper-slide">
                                    <a  href="{{route('contractor_information')}}"><img src="{{asset('/assets/photos/Service Photo/Contractor Information.jpg')}}" alt=""></a>
                                </div>
                                <div class="swiper-slide">
                                    <a  href="{{route('member_service')}}"><img src="{{asset('/assets/photos/Service Photo/Member Service.jpg')}}" alt=""></a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="repair_service"><img src="{{asset('/assets/photos/Service Photo/Power Tools Repair Service.jpg')}}" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Brand One End-->
@endsection
