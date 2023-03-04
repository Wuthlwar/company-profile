@extends('layouts.main')
@section('content')

    <div class="stricky-header stricked-menu main-menu">
        <div class="sticky-header__content"></div>
        <!-- /.sticky-header__content -->
    </div>
    <!-- /.stricky-header -->

    <!--Page Header Start-->

    <!--Page Header End-->

    <!--Portfolio Details Start-->
    <section class="portfolio-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="portfolio-details__img">
                        <img src="{{asset('assets/photos/joint1.jpg')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="portfolio-details__content">
                <div class="row">
                    <div class="col-xl-8 col-lg-8">
                        <div class="portfolio-details__content-left">
                            <h3 class="portfolio-details__title">PRO 1 Global Home Center</h3>
                            <p class="portfolio-details__text-1">{{__('joint.joint_detail1')}}
                            </p>

                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="portfolio-details__content-right">
                            <div class="portfolio-details__details-box">

                                <a href=""><img src="{{asset('assets/photos/pro1.png')}}" alt=""></a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="portfolio-details__content">
                <div class="row">
                    <div class="col-xl-8 col-lg-8">
                        <div class="portfolio-details__content-left">
                            <h3 class="portfolio-details__title">Siam Cement Group</h3>
                            <p class="portfolio-details__text-1">
                                {{__('joint.joint_detail2')}}
                            </p>

                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="portfolio-details__content-right">
                            <div class="portfolio-details__details-box">

                                <a href=""><img src="{{asset('assets/photos/scg2.png')}}" alt=""></a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="portfolio-details__content">
                <div class="row">
                    <div class="col-xl-8 col-lg-8">
                        <div class="portfolio-details__content-left">
                            <h3 class="portfolio-details__title">SIAM GLOBAL HOUSE PUBLIC COMPANY LIMITED</h3>
                            <p class="portfolio-details__text-1">{{__('joint.joint_detail3')}}
                            </p>

                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="portfolio-details__content-right">
                            <div class="portfolio-details__details-box">

                                <a href=""><img src="{{asset('assets/photos/gb1.png')}}" alt=""></a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--Portfolio Details End-->

@endsection
