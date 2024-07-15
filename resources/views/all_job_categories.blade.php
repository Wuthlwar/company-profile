@extends('layouts.main')
@section('content')

{{-- <section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <img src="{{asset('job_banner/banner2.png')}}" class="img-fluid">
                <br><br>
            </div>
        </div>
    </div>
</section> --}}

        <!--News Three Start-->
        <section class="news-three">
            <div class="container">
                <div class="section-title text-center">
                    <div class="section-sub-title-box">
                        {{-- <p class="section-sub-title">recent news feed</p> --}}
                        <h4 class="section-title__title" style="font-size:25px;">Job By Categories</h4>
                        <div class="section-title-shape-1">
                            <img src="assets/images/shapes/section-title-shape-1.png" alt="">
                        </div>
                        <div class="section-title-shape-2">
                            <img src="assets/images/shapes/section-title-shape-2.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!--News Three Single Start-->
                    @foreach ($categories as $category)
                        @if($category->status=='online')
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <div class="news-three__single">
                            <div class="news-three-bg" style="background-image: url({{asset('storage/uploads/jobvacants/' . $category->category_image)}});">
                            </div>
                            <div class="news-three__client-info">
                                <div class="news-three__client-img">
                                    <a href="{{route('our_opportunities_categories_jobs',$category->id)}}"><img src="{{ $category->category_image ? asset('storage/uploads/jobvacants/' . $category->category_image) : asset('job_banner/title.png') }}" style="width:56px;height:56px;" alt=""></a>
                                </div>
                                <div class="news-three__client-content">
                                    <a href="{{route('our_opportunities_categories_jobs',$category->id)}}">
                                    <p style="font-size: 16px;"><i class="fa fa-briefcase" aria-hidden="true"></i>{{ $vacants_count[$category->id]['total'] ?? 0 }}</p>
                                    </a>
                                </div>
                            </div>
                            <div class="news-three__content">
                                <div class="news-three__client-content">
                                    <a href="{{route('our_opportunities_categories_jobs',$category->id)}}">
                                    <p style="font-size: 16px;line-height:2;">{{$category->category_name}}<br>
                                    Posted on  {{ $category->created_at->format('d F Y') }}<br></p>
                                    <p style="font-size: 13px;">{{ $category->created_at->diffForHumans() }}</p>
                                    </a>
                                </div>
                                <div class="news-three__arrow">
                                    <a href="{{route('our_opportunities_categories_jobs',$category->id)}}"><span class="icon-right-arrow1"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                    <br><br>
                    {{ $categories->links('pagination::bootstrap-4') }}

                    <!--News Three Single End-->
                </div>
            </div>
        </section>
        <!--News Three End-->

@endsection
@section('script')
    <script>
        $(document).ready(function () {

             var lang1 = $('#langSwitch2').val();

            $("#langSwitch2").on('change', function() {
                window.location.href="{{ route('lang','en') }}"
            });
            $("#langSwitch1").on('change', function() {
                window.location.href="{{ route('lang','mm') }}"
            });
        });
        function addActClass($type_id)
        {

            // $('#activitiesDiv').hide();
            var url='/getActByType/'+$type_id;
            $.ajax({
                type: "GET",
                url: url,
                success: function (response)
                {
                    // console.log(response)
                    $('#activitiesDiv').html('');
                    $.each(response, function (index, value) {

                        var actDiv =`<div class="col-xl-4 col-md-6 custom-img" >
                                        <div class="portfolio__single ">
                                            <div class="">
                                                <a href="{{ url("act_detail/`+value.id+`") }}">
                                                <img src="/storage/uploads/activity/`+value.preview_img+`" alt="" style="object-fit:contain;
                                                width:380px;
                                                height:420px;
                                                border: solid 1px #CCC" class="rounded">
                                                <div>
                                                    <ul class="list-unstyled about-one__points">
                                                        <li>
                                                            <div class="icon">
                                                                <i class="fa fa-check"></i>
                                                            </div>
                                                            <div class="text">
                                                                @if (session()->get('locale')=='en')
                                                                    <p>`+value.title.substring(0,20)+`(`+value.location.substring(0,50)+`)</p>
                                                                @else
                                                                <p> <p>`+value.title_mm.substring(0,20)+`(`+value.location_mm.substring(0,50)+`)</p></p>
                                                                @endif
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <i class="fa fa-check"></i>
                                                            </div>
                                                            <div class="text">
                                                                <p>`+value.date+`</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <i class="fa fa-check"></i>
                                                            </div>
                                                            <div class="text">
                                                                @if (session()->get('locale')=='en')
                                                                    <p>`+value.description.substring(0,70)+`</p>
                                                                @else
                                                                <p>`+value.description_mm.substring(0,70)+`</p>
                                                                @endif
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </a>

                                            </div>
                                        </div>
                                    </div>`;

                                    $('#activitiesDiv').append(actDiv)
                        console.log(value)
                    });
                }
            });



        }
    </script>
    <script>
        var btns = document.getElementsByClassName("dropdown");
        for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function() {
        var current = document.getElementsByClassName("active");

        if (current.length > 0) {
            current[0].className = current[0].className.replace(" current", "");
        }
        console.log(this.className)

        this.className += "current";
        });
        }
    </script>
@endsection
