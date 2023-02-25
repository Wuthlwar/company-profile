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
            <div class="mb-3"><h5 class="text-primary fw-bold">{{ $act->title }}</h5> ({{ $act->location }})</div>
            <div class="row col-12">

                @foreach ($act_imgs as $img)
                    <div class="portfolio-details__img col-md-3 ">
                        <img src="{{ asset("storage/uploads/activity_images/$img->file") }}" alt="{{ $img->name }}" >

                    </div>
                @endforeach
                </div>
            <div class="portfolio-details__content">
                <div class="row">
                    <div><a class="btn btn-primary mb-2" href="{{ url('/home#ouractivities') }}"><< Back</a></div>
                    <div class="col-xl-8 col-lg-8">
                        <div class="portfolio-details__content-left">
                            <div>{{ $act->description }}</div>

                        </div>

                    </div>
                </div>

            </div>
    </section>
    <!--Portfolio Details End-->
@endsection
