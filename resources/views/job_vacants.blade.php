@extends('layouts.main')
@section('content')

<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <img src="{{asset('job_banner/banner2.png')}}" class="img-fluid">
            </div>
        </div>
    </div>
</section>

        <!--News Details Start-->
        <section class="news-details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12" style="background-color: #172ec7; padding-top:20px;">
                        <form method="GET" action="{{ route('job.search') }}">
                            <div class="input-group mb-3" style="border-radius:30px;">
                                <select class="form-control" id="jobcategoryname" name="cat_id">
                                    <option value="">Select Category</option>
                                    @foreach($categories as $category)
                                        @if($category->status == "online")
                                            <option value="{{ $category->id }}" {{ request('cat_id') == $category->id ? 'selected' : '' }}>{{ $category->category_name }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                <input type="text" class="form-control" name="position" placeholder="Enter Position" aria-label="Enter Position" aria-describedby="button-addon2" value="{{ request('position') }}">
                                <button class="btn btn-outline-secondary" type="submit" id="button-addon2" style="color: #fdf8f8;">Search</button>
                            </div>
                        </form>
                    </div>

                    <hr><hr>

                    @foreach ($vacants as $vacant)
                    <div class="col-xl-12 col-lg-12">
                        <div class="news-details">
                            <div class="comment-one">
                                <div class="comment-one__single">
                                    <div class="news-three__client-img" style="width:70px;">
                                        @if ($vacant->vacant_image == null)

                                        <a href="{{route('our_opportunities_detail',$vacant->id)}}"><img src="{{asset('job_banner/title.png')}}" alt="" style="width:70px;"></a>

                                        @else
                                        <a href="{{route('our_opportunities_detail',$vacant->id)}}"><img src="{{asset('storage/uploads/jobvacants/' . $vacant->vacant_image)}}" alt="" style="width:70px;"></a>
                                        @endif

                                    </div>
                                    <div class="comment-one__content" style="color:#000;">
                                        <h3><a href="{{route('our_opportunities_detail',$vacant->id)}}" style="color:rgb(2, 36, 128);">{{$vacant->vacant_name}}</a></h3>
                                        <p>
                                            {!!html_entity_decode($vacant->vacant_shortxt)!!}
                                        </p>
                                        <p style="color:blue;">
                                            <i class="far fa-calendar"></i>&nbsp;&nbsp; Posted on {{ $vacant->created_at->format('d F Y') }}
                                        </p>
                                        <p style="font-size: 13px;">{{ $vacant->created_at->diffForHumans() }}</p>

                                        <a href="{{route('our_opportunities_detail',$vacant->id)}}" class="thm-btn comment-one__btn">View Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    {{ $vacants->links('pagination::bootstrap-4') }}
                </div>


            </div>
        </section>
        <!--News Details End-->
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
                    {{-- {{ $categories->links('pagination::bootstrap-4') }} --}}
                    <a href="{{route('our_all_categories_job')}}" style="color:#2b49f3">See More</a>
                    <!--News Three Single End-->
                </div>
            </div>
        </section>
        <!--News Three End-->

@endsection
@section('script')

<script>
    $(document).ready(function() {
    $('#jobcategoryname').select2({
        theme: 'bootstrap4',
        placeholder: 'Choose Your Category',
        width: '100%'
    });

});
</script>
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
