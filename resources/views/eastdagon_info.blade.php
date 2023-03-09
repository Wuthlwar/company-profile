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
            <div class="row">
                <div class="col-xl-12">
                    <div class="portfolio-details__img">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15271.940521662576!2d96.22843!3d16.8766301!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4cfb727e88674f5!2sPRO%201%20Global%20Home%20Center%20-%20Eastdagon%20Branch!5e0!3m2!1sen!2smm!4v1659080530345!5m2!1sen!2smm"
                            width="1200" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
            <div class="portfolio-details__content">
                <div class="row">
                    <div class="col-xl-8 col-lg-8">
                        <div class="portfolio-details__content-left">
                            <div>&nbsp;{{__('home.center_ed3')}}</div>
                            <div>&nbsp;<i class="fa-solid fa-location-dot"></i>&nbsp;{{__('home.center_ed4')}}</div>
                            <div>&nbsp;<i class="fa-solid fa-clock"></i>&nbsp;{{__('home.center_ed5')}}</div>
                            <div>&nbsp;<i class="fa-solid fa-phone-flip"></i>&nbsp; 01-2585158, 01-2585159, 09-777000867</div>

                        </div>

                    </div>
                </div>

            </div>
    </section>
    <!--Portfolio Details End-->
@endsection
