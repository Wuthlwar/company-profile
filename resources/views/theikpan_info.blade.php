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
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7401.1469908526915!2d96.11062!3d21.950942!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe0a703f18eb6217c!2sPRO%201%20Global%20Home%20Center%20-%20Theikpan%20Branch!5e0!3m2!1sen!2sus!4v1657337432249!5m2!1sen!2sus"
                            width="1200" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
            <div class="portfolio-details__content">
                <div class="row">
                    <div class="col-xl-8 col-lg-8">
                        <div class="portfolio-details__content-left">
                            <div>&nbsp;{{__('home.center_Tp3')}}</div>
                            <div>&nbsp;<i class="fa-solid fa-location-dot"></i>&nbsp;{{__('home.center_Tp4')}}</div>
                            <div>&nbsp;<i class="fa-solid fa-clock"></i>&nbsp;{{__('home.center_Tp5')}}</div>
                            <div>&nbsp;<i class="fa-solid fa-phone-flip"></i>&nbsp;09-777000942, 09-777000943</div>

                        </div>

                    </div>
                </div>

            </div>
    </section>
    <!--Portfolio Details End-->
@endsection
