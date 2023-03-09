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
                        <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d122197.65222231353!2d96.15219260851347!3d16.842390728264792!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x30c1935f305b4b99%3A0x7a2e7fe696d37d18!2sNo.523%2C%20Pin%20Lone%20Road%20Corner%20of%20Mingalar%20Thiri%20street%20%26%20Industrial%20Zone%20street%2023%20Ward%2C%20Near%20of%20South%20Dagon%20(Ka.Nya.Na%2C%203%20Industrial%20Zone%20Rd%2C%20Yangon%2011431!3m2!1d16.8424026!2d96.2222331!5e0!3m2!1sen!2smm!4v1675657644916!5m2!1sen!2smm" width="1200" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
            <div class="portfolio-details__content">
                <div class="row">
                    <div class="col-xl-8 col-lg-8">
                        <div class="portfolio-details__content-left">
                            <div>&nbsp;{{__('home.center_sdg3')}}</div>
                            <div>&nbsp;<i class="fa-solid fa-location-dot"></i>&nbsp;{{__('home.center_sdg4')}}</div>
                            <div>&nbsp;<i class="fa-solid fa-clock"></i>&nbsp;{{__('home.center_sdg5')}}</div>
                            <div>&nbsp;<i class="fa-solid fa-phone-flip"></i>&nbsp;01-201849, 01-201850, 09-777000849</div>

                        </div>

                    </div>
                </div>

            </div>
    </section>
    <!--Portfolio Details End-->
@endsection
