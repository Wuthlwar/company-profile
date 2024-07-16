@extends('layouts.main')
@section('content')

<section class="why-choose-one">
    <div class="why-choose-one-shape-1"
        style="background-image: url(assets/images/shapes/why-choose-one-shape-1.png);"></div>
    <div class="why-choose-one-shape-2 float-bob-y">
        <img src="assets/images/shapes/why-choose-one-shape-2.png" alt="">
    </div>
    <div class="why-choose-one-shape-3 float-bob-x">
        <img src="assets/images/shapes/why-choose-one-shape-3.png" alt="">
    </div>
    <div class="why-choose-one-shape-4 float-bob-y">
        <img src="assets/images/shapes/why-choose-one-shape-4.png" alt="">
    </div>
    <div class="why-choose-one-shape-5 float-bob-y">
        <img src="assets/images/shapes/why-choose-one-shape-5.png" alt="">
    </div>
    <div class="why-choose-one-shape-6 float-bob-x">
        <img src="assets/images/shapes/why-choose-one-shape-6.png" alt="">
    </div>
    <div class="why-choose-one-img wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
        <img src="{{ asset('assets/photos/DSA.jpg') }}" alt="Image 2" width="930px" height="800">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-7">
                <div class="why-choose-one__left">
                    <div class="section-title text-left">
                        <div class="section-sub-title-box">
                            <p class="section-sub-title">Delivery Service Areas</p>
                            <div class="section-title-shape-1">
                                <img src="assets/images/shapes/section-title-shape-3.png" alt="">
                            </div>
                            <div class="section-title-shape-2">
                                <img src="assets/images/shapes/section-title-shape-4.png" alt="">
                            </div>
                        </div>
                        <h1 class="section-title__title">PRO 1 Global မှ သတ်မှတ်ထားသော Delivery ဧရိယာများ</h1>
                    </div>
                    <p class="why-choose-one__text">500,000 ကျပ်ဖိုးဝယ်ယူပါက သတ်မှတ်ထားတဲ့ ဧရိယာအတွင်းသို့ ပို့ဆောင်ခ (အခမဲ့)ဖြစ်ပါသည်။ 500,000 ကျပ်ဖိုးအောက်ဝယ်ယူမှုဖြစ်ပါက Delivery Fee 5,000 ကျပ်ဖြင့် သတ်မှတ်ထားတဲ့ ဧရိယာအတွင်းသို့ ပို့ဆောင်ပေးပါသည်။  နယ် Customer များအတွက် ကားဂိတ်အရောက်ပို့ဆောင်ပေးပါသည်။</p>
                    <div class="why-choose-one__list-box">
                        <ul class="list-unstyled why-choose-one__list">
                            <li>
                                <div class="why-choose-one__single">
                                    <div class="why-choose-one__list-icon">
                                        <span class="icon-easy-to-use"></span>
                                    </div>
                                    <div class="why-choose-one__list-title-box">
                                        <div class="why-choose-one__list-title-inner">
                                            <h3 class="why-choose-one__list-title">Fast & easy process</h3>
                                        </div>
                                        <div class="why-choose-one__list-text-box">
                                            <p class="why-choose-one__list-text">Lorem ipsum dolor sit amet,
                                                sectetur adipiscing elit.</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="why-choose-one__single">
                                    <div class="why-choose-one__list-icon">
                                        <span class="icon-contract"></span>
                                    </div>
                                    <div class="why-choose-one__list-title-box">
                                        <div class="why-choose-one__list-title-inner">
                                            <h3 class="why-choose-one__list-title">Easy and comfortable</h3>
                                        </div>
                                        <div class="why-choose-one__list-text-box">
                                            <p class="why-choose-one__list-text">Lorem ipsum dolor sit amet,
                                                sectetur adipiscing elit.</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="why-choose-one__single">
                                    <div class="why-choose-one__list-icon">
                                        <span class="icon-policy"></span>
                                    </div>
                                    <div class="why-choose-one__list-title-box">
                                        <div class="why-choose-one__list-title-inner">
                                            <h3 class="why-choose-one__list-title">Our Policy</h3>
                                        </div>
                                        <div class="why-choose-one__list-text-box">
                                            <p class="why-choose-one__list-text">Lorem ipsum dolor sit amet,
                                                sectetur adipiscing elit.</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="why-choose-one__single">
                                    <div class="why-choose-one__list-icon">
                                        <span class="icon-fund"></span>
                                    </div>
                                    <div class="why-choose-one__list-title-box">
                                        <div class="why-choose-one__list-title-inner">
                                            <h3 class="why-choose-one__list-title">Save your money</h3>
                                        </div>
                                        <div class="why-choose-one__list-text-box">
                                            <p class="why-choose-one__list-text">Lorem ipsum dolor sit amet,
                                                sectetur adipiscing elit.</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
