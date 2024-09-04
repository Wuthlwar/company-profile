@extends('layouts.main')
@section('content')
<section class="feature-four">
    <div class="container">
        <div class="feature-four__bottom">
            <div class="row">
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
                </div>

                <div class="col-xl-12 col-lg-12 col-md-12">
                    <a href="{{ route('Faq') }}"><button type="button"  class="btn btn-primary" style="float: right;width:150px;"><img src="assets/images/shapes/section-title-shape-1.png" alt="">  FAQ</button></a>
                </div>

                @foreach ($knowledgeSharings as $knowledge)
                <div class="col-xl-4 col-lg-4 col-md-4">
                    <div class="feature-four__single" style="margin-top:20px;padding:30px;height:500px;position:relative;">
                        <div class="feature-four__single-top ratio ratio-4x3">
                            @if($knowledge->media=='Youtube')
                            <iframe width="350" height="250" src="{{$knowledge->link}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            @else
                            <a href="{{$knowledge->link}}" target="_blank" style="color: #5160e9">
                            <img src="{{ asset('storage/uploads/knowledge/' . $knowledge->file) }}" alt="Cover Image" class="img-thumbnail" width="450" height="350">
                            </a>
                            @endif
                        </div>

                        <p class="feature-four__text">
                            <h5>
                                <a href="{{$knowledge->link}}" target="_blank" style="color: #5160e9">
                                {{$knowledge->name}}
                            </a></h5><br>
                            <font style="font-size:13px;">
                            <i class="far fa-calendar"></i>&nbsp;&nbsp; Posted : {{$knowledge->created_at->format('d F Y')}}<br>
                            {{$knowledge->created_at->diffForHumans()}}</font>
                        </p>
                        @if($knowledge->media=='Youtube')
                        <i class="fab fa-youtube" style="font-size: 15px;float:right;"></i>
                        @elseif($knowledge->media=='Facebook')
                        <i class="fab fa-facebook-f" style="font-size: 15px;float:right;"></i>&nbsp;&nbsp;
                        @elseif($knowledge->media=='TikTok')
                        <i class="fab fa-tiktok" style="font-size: 15px;float:right;"></i>&nbsp;&nbsp;
                        @elseif($knowledge->media=='Instagram')
                        <i class="fab fa-instagram" style="font-size: 15px;float:right;"></i>&nbsp;&nbsp;
                        @elseif($knowledge->media=='Telegram')
                        <i class="fab fa-telegram" style="font-size: 15px;float:right;"></i>&nbsp;&nbsp;
                        @elseif($knowledge->media=='LinkedIn')
                        <i class="fab fa-linkedin" style="font-size: 15px;float:right;"></i>&nbsp;&nbsp;
                        @elseif($knowledge->media=='X')
                        <i class="fab fa-twitter" style="font-size: 15px;float:right;"></i>&nbsp;&nbsp;
                        @endif
                    </div>
                </div>
                @endforeach

                {{ $knowledgeSharings->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>
</section>
<style>

</style>
@endsection
