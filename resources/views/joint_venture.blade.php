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
                            <p class="portfolio-details__text-1">PRO 1 Global Home Center is the biggest building materials and home living product shopping center In myanmar, has an experience of home building and living store center 10 years, which offers construction material, home
                                decorative products, tools and equipment used in construction, home improvement, and household and gardening decoration in modern trade warehouse style. Currently, PRO 1 Global Home Center has totally 11 branches and
                                trying to expansion branches to cover all Myanmar region and become the leader of one stop service home living product center.
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
                            <p class="portfolio-details__text-1">SCG, a leading business conglomerate in the ASEAN region, has committed itself to conducting business in line with good corporate governance and sustainable development principles throughout 100 years. The Group's longstanding
                                tradition of learning, adjustment and development in all areas has enabled SCG to survive the wave of crises and challenges and earn widespread recognition as a role model for other businesses, both locally and internationally.
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
                            <p class="portfolio-details__text-1">GBH, has an experience of home building & living store center 20 years, which offers construction material, home decorative products, tools and equipment used in construction, home improvement, and household and gardening
                                decoration in modern trade warehouse style. In addition, GBH have the biggest distribution center along with automatic system to make an operation excellence and customer feel convenience.
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
