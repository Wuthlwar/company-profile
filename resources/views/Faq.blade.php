@extends('layouts.main')
@section('content')
    <div class="stricky-header stricked-menu main-menu">
        <div class="sticky-header__content"></div>
        <!-- /.sticky-header__content -->
    </div>
    <!-- /.stricky-header -->
    <section class="faq-one">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <img src="{{asset('job_banner/faq.png')}}" class="img-fluid">
                    <br><br>
                </div>

                @foreach($faqs as $faq)
                    <div class="col-xl-12 col-lg-12">
                    <div class="faq_title">
                        <h5>{{$faq->title}}</h5>
                        </div><br>
                        <p>{!! $faq->content!!}</p>
                        <br>
                    </div>

                @if($faq->faqQans)
                @foreach($faq->faqQans as $faqQans)
                <div class="col-xl-12 col-lg-12">
                    <div class="faq-one__single">
                        <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion-1">
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4><span>?</span>{{$faqQans->question}}</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                       {!! $faqQans->answer!!}
                                    </div>
                                    <!-- /.inner -->
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                @endforeach
                @endif
                @endforeach
                {{ $faqs->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </section>
    <!--FAQ One End-->

@endsection
