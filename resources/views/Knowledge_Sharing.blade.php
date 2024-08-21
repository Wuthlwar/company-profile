@extends('layouts.main')
@section('content')
<section class="news-two">
    <div class="container">
        <div class="section-title text-center">
            <div class="section-sub-title-box">
                <p class="section-sub-title">Knowledge Sharing</p>
                <div class="section-title-shape-1">
                    <img src="assets/images/shapes/section-title-shape-1.png" alt="">
                </div>
                <div class="section-title-shape-2">
                    <img src="assets/images/shapes/section-title-shape-2.png" alt="">
                </div>
            </div>
            {{-- <h2 class="section-title__title">Latest news & articles <br> from the blog</h2> --}}
        </div>
        <div class="row">
            <!--News Two Single Start-->
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                <div class="news-two__single">
                    <div class="news-two__img">
                        <img src="assets/photos/knowledge.jpg" alt="">
                        <div class="news-two__arrow-box">
                            <a target ="blank" href="https://www.youtube.com/watch?v=P88ed7UJA5g" class="news-two__arrow">
                                <span class="icon-right-arrow1"></span>
                            </a>
                        </div>
                    </div>
                    <div class="news-two__content">
                        <h3 class="news-two__title"><a target="_blank" href="https://www.youtube.com/watch?v=P88ed7UJA5g">PRO 1 Online Store
                                Update Version</a></h3>
                        <div class="news-two__client">

                            <div class="news-two__client-content">

                                <h5>21 August, 2024</h5>
                            </div>
                        </div>
                        {{-- <div class="news-two__tag">
                            <p><i class="far fa-folder"></i>BUSINESS</p>
                        </div> --}}
                    </div>
                </div>
            </div>
            <!--News Two Single End-->
            <!--News Two Single Start-->
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                <div class="news-two__single">
                    <div class="news-two__img">
                        <img src="assets/photos/knowledge.jpg" alt="">
                        <div class="news-two__arrow-box">
                            <a target ="blank" href="https://www.youtube.com/watch?v=HsnhiG-YBf4" class="news-two__arrow">
                                <span class="icon-right-arrow1"></span>
                            </a>
                        </div>
                    </div>
                    <div class="news-two__content">
                        <h3 class="news-two__title"><a target="_blank" href="https://www.youtube.com/watch?v=HsnhiG-YBf4">PRO 1 Online Store
                            Buyer Guide</a></h3>
                        <div class="news-two__client">

                            <div class="news-two__client-content">

                                <h5>21 August, 2024</h5>
                            </div>
                        </div>
                        {{-- <div class="news-two__tag">
                            <p><i class="far fa-folder"></i>BUSINESS</p>
                        </div> --}}
                    </div>
                </div>
            </div>
            <!--News Two Single End-->
            <!--News Two Single Start-->
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                <div class="news-two__single">
                    <div class="news-two__img">
                        <img src="assets/photos/knowledge.jpg" alt=""><a target="_blank" href="https://www.youtube.com/watch?v=pGTqttbPy3A"></a>
                        <div class="news-two__arrow-box">
                            <a target ="blank" href="https://www.youtube.com/watch?v=pGTqttbPy3A" class="news-two__arrow">
                                <span class="icon-right-arrow1"></span>
                            </a>
                        </div>
                    </div>
                    <div class="news-two__content">
                        <h3 class="news-two__title"><a target="_blank" href="https://www.youtube.com/watch?v=pGTqttbPy3A">Feedback from
                            PRO 1 Online Store Customers</a></h3>
                        <div class="news-two__client">

                            <div class="news-two__client-content">

                                <h5>21 August, 2024</h5>
                            </div>
                        </div>
                        {{-- <div class="news-two__tag">
                            <p><i class="far fa-folder"></i>BUSINESS</p>
                        </div> --}}
                    </div>
                </div>
            </div>
            <!--News Two Single End-->
        </div>
    </div>
</section>
@endsection
