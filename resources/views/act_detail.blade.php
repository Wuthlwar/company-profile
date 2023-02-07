@extends('layouts.main')
@section('content')

    <div class="stricky-header stricked-menu main-menu">
        <div class="sticky-header__content"></div>
        <!-- /.sticky-header__content -->
    </div>
    <!-- /.stricky-header -->

    <!--Portfolio Details Start-->
    <section class="portfolio-details">
        <div class="container">
            <div class="row col-12">

                    <div class="portfolio-details__img col-md-3 ">
                        <img src="{{asset('assets/photos/act1.jpg')}}" alt="" >

                    </div>
                    <div class="portfolio-details__img col-md-3 ">
                        <img src="{{asset('assets/photos/act1.jpg')}}" alt="" >

                    </div>
                    <div class="portfolio-details__img col-md-3 ">
                        <img src="{{asset('assets/photos/act1.jpg')}}" alt="" >

                    </div>
                    <div class="portfolio-details__img col-md-3 ">
                        <img src="{{asset('assets/photos/act1.jpg')}}" alt="" >

                    </div>
                    <div class="portfolio-details__img col-md-3 my-4">
                        <img src="{{asset('assets/photos/act1.jpg')}}" alt="" >
                    </div>
                </div>
            <div class="portfolio-details__content">
                <div class="row">
                    <div class="col-xl-8 col-lg-8">
                        <div class="portfolio-details__content-left">
                            <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus laborum officiis molestiae voluptatibus fuga quis sapiente. Cumque, sint dolorum enim ratione consequatur repellendus doloribus praesentium dicta! Adipisci ad atque quod!</div>

                        </div>

                    </div>
                </div>

            </div>
    </section>
    <!--Portfolio Details End-->
@endsection
