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
                        <p class="testimonial-two__text">Pellentesque habitant morbi tristique senectus netus et
                            malesuada fames ac turp egestas. Aliquam viverra arcu. Donec aliquet blandit enim
                            feugiat mattis.</p>
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
                                            <h5 class="testimonial-two__client-name">Accountability</h5>
                                            <p class="testimonial-two__text-2">Accountability is a willingness to accept responsibility for our own actions and understand that what is our assignment and what we should and shouldn't do even nobody assign to do. Don't only attendee the working time then go back home.PRO1, 1Team.</p>
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
                                            <h5 class="testimonial-two__client-name">Collaboration </h5>
                                            <p class="testimonial-two__text-2">Collaboration is the action of working and supporting to other person and department to complete the organization goal with team work and understanding each other.</p>
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
                                            <h5 class="testimonial-two__client-name">
                                                Humility</h5>
                                            <p class="testimonial-two__text-2">Humility is the kind of good attitude and action that being humble and respect when interacting with other people including customers, suppliers, senior colleagues and junior colleagues.</p>
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
                                            <h5 class="testimonial-two__client-name">Innovation</h5>
                                            <p class="testimonial-two__text-2">Innovation is opening to learn the new thing and challenge to improve an idea, working process and efficiency to complete business goal. In example of change familiar working process by paper to software for paperless, reduce the working time and human error.</p>
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
                                            <h5 class="testimonial-two__client-name">Ethics</h5>
                                            <p class="testimonial-two__text-2">Ethics is a system of moral principles which affect how people make decisions and also how they lead their lives. Ethics is described as moral philosophy that refers to what is good for both individuals and the society.

                                               </p>
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
                                            <h5 class="testimonial-two__client-name">Values</h5>
                                            <p class="testimonial-two__text-2">Values (Corporate Value/Cooperation Values /
                                                Teamwork Values / Service Values)
                                                All position and career has their own important role to support company to achieve the goal even security, housemaid and other position.</p>
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
                                                Energy</h5>
                                            <p class="testimonial-two__text-2">Values (Corporate Value/Cooperation Values /
                                                Teamwork Values / Service Values)
                                                All position and career has their own important role to support company to achieve the goal even security, housemaid and other position.</p>
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
