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
                    <img src="{{ asset('job_banner/faq.png') }}" class="img-fluid">
                    <br><br>
                </div>

                @foreach($faqs as $faq)
                @php
                $localetitle = session()->get('locale');
                @endphp

                @if($localetitle=='en')
                    <div class="col-xl-12 col-lg-12">
                        <div class="faq_title">
                            <h5>{{ $faq->title_en }}</h5>
                        </div>
                        <br>
                        <p>{!! $faq->content_en !!}</p>
                        <br>
                    </div>
                    @elseif ($localetitle=='mm')
                    <div class="col-xl-12 col-lg-12">
                        <div class="faq_title">
                            <h5>{{ $faq->title_my }}</h5>
                        </div>
                        <br>
                        <p>{!! $faq->content_my !!}</p>
                        <br>
                    </div>
                @endif



                    @if($faq->faqQans)
                        @foreach($faq->faqQans as $faqQans)
                            @php
                                $locale = session()->get('locale');
                            @endphp
                            {{-- @dd($locale); --}}
                            @if($locale=='en' && $faqQans->language == 'en')
                                <div class="col-xl-12 col-lg-12">
                                    <div class="faq-one__single">
                                        <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion-1">
                                            <div class="accrodion">
                                                <div class="accrodion-title">
                                                    <h4><span>?</span>{{ $faqQans->question }}</h4>
                                                </div>
                                                <div class="accrodion-content">
                                                    <div class="inner">
                                                        {!! $faqQans->answer !!}
                                                    </div>
                                                    <!-- /.inner -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @elseif($locale=='mm' && $faqQans->language == 'my')
                                <div class="col-xl-12 col-lg-12">
                                    <div class="faq-one__single">
                                        <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion-1">
                                            <div class="accrodion">
                                                <div class="accrodion-title">
                                                    <h4><span>?</span>{{ $faqQans->question }}</h4>
                                                </div>
                                                <div class="accrodion-content">
                                                    <div class="inner">
                                                        {!! $faqQans->answer !!}
                                                    </div>
                                                    <!-- /.inner -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    @endif
                @endforeach

                {{ $faqs->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </section>
    <!--FAQ One End-->
@endsection
