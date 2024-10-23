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
<section class="news-details">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-7">
                <div class="news-details__left">
                    <div class="news-details__img">
                        @if ($vacants_first)
                        @if ($vacants_first->category->category_banner == null)
                            <img src="{{ asset('job_banner/banner2.png') }}" alt="">
                        @else
                            <img src="{{ asset('storage/uploads/jobvacants/' . $vacants_first->category->category_banner) }}" alt="">
                        @endif
                    @else
                        <p>No job vacancies available in this category.</p>
                    @endif

                    </div>
                    <div class="news-details__content">
                        <h5>
                            <span class="badge rounded-pill bg-primary">
                                <i class="fa fa-check-circle" style="font-size:20px;color:rgb(234, 233, 236);"></i>
                                &nbsp;{{ count($vacant_count) }}
                            </span>

                            @if ($vacants_first)
                                {{ $vacants_first->category->category_name }}
                            @endif
                        </h5>
                        <br><br>

                        @foreach ($vacants_categories as $vacant)
                        <div class="col-xl-12 col-lg-12">
                            <div class="news-details">
                                <div class="comment-one">
                                    <div class="comment-one__single">
                                        <div class="news-three__client-img" style="width:70px;">
                                            @if ($vacant->vacant_image == null)

                                            <a href="{{route('our_opportunities_detail',$vacant->id)}}">
                                                <img src="{{asset('job_banner/title.png')}}" alt="" style="width:70px;">
                                            </a>

                                            @else
                                            <a href="{{route('our_opportunities_detail',$vacant->id)}}"><img src="{{asset('storage/uploads/jobvacants/' . $vacant->vacant_image)}}" alt="" style="width:70px;"></a>
                                            @endif

                                        </div>
                                        <a href="{{route('our_opportunities_detail',$vacant->id)}}" style="color:rgb(2, 36, 128);">
                                        <div class="comment-one__content" style="color:#000;">
                                            <h3>{{$vacant->vacant_name}}</h3>
                                            <p>
                                                {!! html_entity_decode(Str::limit($vacant->vacant_description, 600, '. . .')) !!}
                                            </p>
                                            <p style="color:blue;">
                                                <i class="far fa-calendar"></i>&nbsp;&nbsp; Posted on {{ $vacant->created_at->format('d F Y') }}
                                            </p>
                                            <p style="font-size: 13px;">{{ $vacant->created_at->diffForHumans() }}</p>
                                            <font style="color: #172ec7;font-size:14px;"><i class="far fa-eye"></i> {{ $vacant->view_count}} Views</font>
                                            <form method="POST">
                                                @csrf
                                                <input type="hidden" name="vacant_id" value="{{ $vacant->id }}">
                                                <button type="submit" formaction="{{ route('view_counts', $vacant->id) }}" class="thm-btn comment-one__btn">View Detail</button>
                                            </form>
                                        </div>
                                    </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                         {{ $vacants_categories->links('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-5">
                <div class="sidebar">
                    <div class="sidebar__single sidebar__comments">
                        <h3 class="sidebar__title">Job By Categories</h3>
                        <ul class="sidebar__comments-list list-unstyled">
                            @foreach($get_cate as $category)
                                @if($category->status=='online')

                                <li>
                                    <div class="sidebar__comments-icon" style="width:30px;height:30px;">
                                        <i class="fas fa-list" style="font-size: 17px;"></i>
                                    </div>
                                    <div class="sidebar__comments-text-box">
                                        <p style="color:#000;"><a href="{{route('our_opportunities_categories_jobs',$category->id)}}">{{$category->category_name}}</a></p>
                                    </div>
                                </li>

                                @endif
                            @endforeach

                        </ul>
                        <br><br>
                        {{-- {{ $get_cate->links('pagination::bootstrap-4') }} --}}
                        <a href="{{route('our_all_categories_job')}}" style="color:#2b49f3">See More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


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
