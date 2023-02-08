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
                    <!-- <div class="portfolio-details__img">
                        <h3 class="portfolio-details__title">Crafting the idea to reality...(2013)</h3>
                        <img src="assets/Photos/crafting.png" alt="">
                    </div> -->
                    <div class="portfolio-details__img">
                        <h3 class="portfolio-details__title">Our Milestone</h3>
                        <img src="{{asset('assets/photos/milestone.jpg')}}" alt="">
                        <img src="{{asset('assets/photos/currentbranch.jpg')}}" alt="">
                    </div>
                </div>
            </div>


        </div>
    </section>
    <!--Portfolio Details End-->
@endsection
