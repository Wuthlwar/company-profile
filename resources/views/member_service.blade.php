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
                                <img src="{{asset('/assets/photos/services/ms1.png')}}" alt="">
                            </div>

                        </div>
                    </div>
                    <div class="memberservice">
                        <img src="{{ asset('assets/photos/Member1.jpg') }}" alt="Image 1" width="600" height="810">
                        <img src="{{ asset('assets/photos/Member2.jpg') }}" alt="Image 2" width="600" height="700">
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="about-four__right">
                        <div class="section-title text-left">
                            <div class="section-sub-title-box">
                                <p class="section-sub-title">Member Service</p>
                                <div class="section-title-shape-1">
                                    <img src="{{asset('/assets/images/shapes/section-title-shape-1.png')}}" alt="">
                                </div>
                                <div class="section-title-shape-2">
                                    <img src="{{asset('/assets/images/shapes/section-title-shape-2.png')}}" alt="">
                                </div>
                            </div>

                        </div>
                        <p class="">
                            {{__('memberservice.mem_info1')}}
                        </p>
                        <h4>{{__('memberservice.mem_info2')}}</h4>
                        <p>{{__('memberservice.mem_info3')}}</p>
                        <p>{{__('memberservice.mem_info4')}}</p>

                        <h4>{{__('memberservice.mem_info5')}}</h4>
                        <p>{{__('memberservice.mem_info6')}}</p>

                        <h4>{{__('memberservice.mem_info7')}}</h4>
                        <p>{{__('memberservice.mem_info8')}}</p>
                        <p>{{__('memberservice.mem_info9')}}</p>
                        <p>{{__('memberservice.mem_info10')}}</p>
                        <p>{{__('memberservice.mem_info11')}}</p>

                        <h4>{{__('memberservice.mem_info12')}}</h4>
                        <p>{{__('memberservice.mem_info13')}}</p>
                        <p>{{__('memberservice.mem_info14')}}</p>
                        <p>{{__('memberservice.mem_info15')}}</p>
                        <p>{{__('memberservice.mem_info16')}}</p>
                        <p>{{__('memberservice.mem_info17')}}</p>
                        <p>{{__('memberservice.mem_info18')}}</p>
                        <p>{{__('memberservice.mem_info19')}}</p>

                        <h4>{{__('memberservice.mem_info12')}}</h4>
                        <p>{{__('memberservice.mem_info20')}}</p>
                        <p>{{__('memberservice.mem_info21')}}</p>
                        <p>{{__('memberservice.mem_info22')}}</p>
                        <p>{{__('memberservice.mem_info23')}}</p>
                        <p>{{__('memberservice.mem_info24')}}</p>
                        <p>{{__('memberservice.mem_info25')}}</p>
                        <p>{{__('memberservice.mem_info26')}}</p>
                        <p>{{__('memberservice.mem_info27')}}</p>

                        <h4>{{__('memberservice.mem_info28')}}</h4>
                        <p>{{__('memberservice.mem_info29')}}</p>
                        <p>{{__('memberservice.mem_info30')}}</p>
                        <p>{{__('memberservice.mem_info31')}}</p>
                        <p>{{__('memberservice.mem_info32')}}</p>
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
                        <h2>{{__('memberservice.mem_look')}}</h2>
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
                                    <a  href="{{route('product_information')}}"><img src="{{asset('/assets/photos/Service Photo/Product Information.png')}}" alt=""></a>
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
