@extends('layouts.main')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <section class="testimonial-two">
        <div class="testimonial-two-shape-1"
            style="background-image: url(assets/images/shapes/testimonial-two-shape-1.png);"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="testimonial-two__left">
                        <div class="section-title text-left">
                            <div class="section-sub-title-box">
                                <p class="section-sub-title">Coporate Culture</p>
                                <div class="section-title-shape-1">
                                    <img src="assets/images/shapes/section-title-shape-1.png" alt="">
                                </div>
                                <div class="section-title-shape-2">
                                    <img src="assets/images/shapes/section-title-shape-2.png" alt="">
                                </div>
                            </div>
                            {{-- <h2 class="section-title__title">What our happy customers are talking about our
                                insurance company</h2> --}}
                        </div>
                        <p class="testimonial-two__text">{{__('coporate.coporate_15')}}</p>
                            <div class="about-one__img">
                                <a target="_blank" href="">
                                    <img src="{{asset('assets/photos/coporate-culture.jpg')}}" alt=""></a>
                            </div>
                        {{-- <div class="testimonial-two__point-box">
                            <ul class="list-unstyled testimonial-two__point">
                                <li>
                                    <div class="icon">
                                        <span class="icon-tick"></span>
                                    </div>
                                    <div class="text">
                                        <p>We promise to respect <br> your time</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-tick"></span>
                                    </div>
                                    <div class="text">
                                        <p>We promise to provide <br> upfront pricing</p>
                                    </div>
                                </li>
                            </ul>
                            <ul class="list-unstyled testimonial-two__point testimonial-two__point-two">
                                <li>
                                    <div class="icon">
                                        <span class="icon-tick"></span>
                                    </div>
                                    <div class="text">
                                        <p>We hire professionals <br> you can trust</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-tick"></span>
                                    </div>
                                    <div class="text">
                                        <p>We’re quick and reliable <br> insurance</p>
                                    </div>
                                </li>
                            </ul>
                        </div> --}}
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="testimonial-two__right">
                        <div class="owl-carousel owl-theme thm-owl__carousel testimonial-two__carousel"
                            data-owl-options='{
                            "loop": true,
                            "autoplay": true,
                            "margin": 0,
                            "nav": false,
                            "dots": true,
                            "smartSpeed": 500,
                            "autoplayTimeout": 10000,
                            "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                            "responsive": {
                                "0": {
                                    "items": 1
                                },
                                "768": {
                                    "items": 1
                                },
                                "992": {
                                    "items":1
                                },
                                "1200": {
                                    "items": 1
                                }
                            }
                        }'>
                            <div class="testimonial-two__wrap">
                                <div class="testimonial-two__single">
                                    <div class="testimonial-two__single-inner">
                                        <div class="testimonial-two-shape-2">
                                            <img src="assets/images/shapes/testimonial-two-shape-2.png" alt="">
                                        </div>
                                        <div class="testimonial-two__content-box">
                                            <h5 class="testimonial-two__client-name">{{__('coporate.coporate_1')}}</h5>
                                            <p class="testimonial-two__text-2">{{__('coporate.coporate_2')}}</p>
                                        </div>
                                        <div class="testimonial-two__client-review">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="testimonial-two__founder-box">
                                        <div class="testimonial-two__founder">
                                            <p class="testimonial-two__founder-text">Coporate Culture</p>
                                            <div class="testimonial-two__founder-shape">
                                                <img src="assets/images/shapes/testimonial-two-founder-shape.png"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="testimonial-two__client-img-box">
                                            <div class="testimonial-two__client-img">
                                                <img src="{{asset('assets/photos/accountability.png')}}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-two__single">
                                    <div class="testimonial-two__single-inner">
                                        <div class="testimonial-two-shape-2">
                                            <img src="assets/images/shapes/testimonial-two-shape-2.png" alt="">
                                        </div>
                                        <div class="testimonial-two__content-box">
                                            <h5 class="testimonial-two__client-name"> {{__('coporate.coporate_3')}}</h5>
                                            <p class="testimonial-two__text-2">{{__('coporate.coporate_4')}}</p>
                                        </div>
                                        <div class="testimonial-two__client-review">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="testimonial-two__founder-box">
                                        <div class="testimonial-two__founder">
                                            <p class="testimonial-two__founder-text">Coporate Culture</p>
                                            <div class="testimonial-two__founder-shape">
                                                <img src="assets/images/shapes/testimonial-two-founder-shape.png"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="testimonial-two__client-img-box">
                                            <div class="testimonial-two__client-img">
                                                <img src="{{ asset('assets/photos/collabration.png') }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-two__wrap">
                                <div class="testimonial-two__single">
                                    <div class="testimonial-two__single-inner">
                                        <div class="testimonial-two-shape-2">
                                            <img src="assets/images/shapes/testimonial-two-shape-2.png" alt="">
                                        </div>
                                        <div class="testimonial-two__content-box">
                                            <h5 class="testimonial-two__client-name">{{__('coporate.coporate_5')}}</h5>
                                            <p class="testimonial-two__text-2">{{__('coporate.coporate_6')}}</p>
                                        </div>
                                        <div class="testimonial-two__client-review">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="testimonial-two__founder-box">
                                        <div class="testimonial-two__founder">
                                            <p class="testimonial-two__founder-text">Coporate Culture</p>
                                            <div class="testimonial-two__founder-shape">
                                                <img src="assets/images/shapes/testimonial-two-founder-shape.png"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="testimonial-two__client-img-box">
                                            <div class="testimonial-two__client-img">
                                                <img src="{{ asset('assets/photos/humility.png') }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-two__single">
                                    <div class="testimonial-two__single-inner">
                                        <div class="testimonial-two-shape-2">
                                            <img src="assets/images/shapes/testimonial-two-shape-2.png" alt="">
                                        </div>
                                        <div class="testimonial-two__content-box">
                                            <h5 class="testimonial-two__client-name">{{__('coporate.coporate_7')}}</h5>
                                            <p class="testimonial-two__text-2">{{__('coporate.coporate_8')}}</p>
                                        </div>
                                        <div class="testimonial-two__client-review">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="testimonial-two__founder-box">
                                        <div class="testimonial-two__founder">
                                            <p class="testimonial-two__founder-text">CEO & Co founder</p>
                                            <div class="testimonial-two__founder-shape">
                                                <img src="assets/images/shapes/testimonial-two-founder-shape.png"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="testimonial-two__client-img-box">
                                            <div class="testimonial-two__client-img">
                                                <img src="{{ asset('assets/photos/innovation.png') }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-two__wrap">
                                <div class="testimonial-two__single">
                                    <div class="testimonial-two__single-inner">
                                        <div class="testimonial-two-shape-2">
                                            <img src="assets/images/shapes/testimonial-two-shape-2.png" alt="">
                                        </div>
                                        <div class="testimonial-two__content-box">
                                            <h5 class="testimonial-two__client-name">{{__('coporate.coporate_9')}}</h5>
                                            <p class="testimonial-two__text-2">{{__('coporate.coporate_10')}}</p>
                                        </div>
                                        <div class="testimonial-two__client-review">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="testimonial-two__founder-box">
                                        <div class="testimonial-two__founder">
                                            <p class="testimonial-two__founder-text">CEO & Co founder</p>
                                            <div class="testimonial-two__founder-shape">
                                                <img src="assets/images/shapes/testimonial-two-founder-shape.png"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="testimonial-two__client-img-box">
                                            <div class="testimonial-two__client-img">
                                                <img src="{{ asset('assets/photos/ethic.png') }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-two__single">
                                    <div class="testimonial-two__single-inner">
                                        <div class="testimonial-two-shape-2">
                                            <img src="assets/images/shapes/testimonial-two-shape-2.png" alt="">
                                        </div>
                                        <div class="testimonial-two__content-box">
                                            <h5 class="testimonial-two__client-name">{{__('coporate.coporate_11')}}</h5>
                                            <p class="testimonial-two__text-2">{{__('coporate.coporate_12')}}</p>
                                        </div>
                                        <div class="testimonial-two__client-review">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="testimonial-two__founder-box">
                                        <div class="testimonial-two__founder">
                                            <p class="testimonial-two__founder-text">Coporate Culture</p>
                                            <div class="testimonial-two__founder-shape">
                                                <img src="assets/images/shapes/testimonial-two-founder-shape.png"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="testimonial-two__client-img-box">
                                            <div class="testimonial-two__client-img">
                                                <img src="{{ asset('assets/photos/value.png') }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-two__single">
                                    <div class="testimonial-two__single-inner">
                                        <div class="testimonial-two-shape-2">
                                            <img src="assets/images/shapes/testimonial-two-shape-2.png" alt="">
                                        </div>
                                        <div class="testimonial-two__content-box">
                                            <h5 class="testimonial-two__client-name">
                                                {{__('coporate.coporate_13')}}</h5>
                                            <p class="testimonial-two__text-2">{{__('coporate.coporate_14')}}/p>
                                        </div>
                                        <div class="testimonial-two__client-review">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="testimonial-two__founder-box">
                                        <div class="testimonial-two__founder">
                                            <p class="testimonial-two__founder-text">Coporate Culture</p>
                                            <div class="testimonial-two__founder-shape">
                                                <img src="assets/images/shapes/testimonial-two-founder-shape.png"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="testimonial-two__client-img-box">
                                            <div class="testimonial-two__client-img">
                                                <img src="{{ asset('assets/photos/energy.png') }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>


</section>
@endsection
