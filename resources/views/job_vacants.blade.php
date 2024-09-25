@extends('layouts.main')
@section('content')
<style>
    .select2-container {
        border: 1px solid #000;
        background-color: #fff;
        color: #0f0e0e;
        height: 50px;
        padding: 5px;
    }

    .select2-search__field  {
        border: 1px solid #000;
        background-color: #fff;
        color: #0f0e0e;
        height: px;
    }

    .select2-selection--single .select2-selection__placeholder {
    color: #0e0d0d !important;


}

 .select2-selection--multiple .select2-selection__placeholder {
    color: #0c0b0b !important;

}


</style>
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
                    <div class="col-xl-12 col-lg-12 col-md-12" style="background-color: #2466eb; padding-top:20px;">
                        <form method="GET" action="{{ route('job.search') }}">
                                    <div class="input-group mb-3" style="border-radius:30px;">
                                        <input type="text" class="form-control" name="position" placeholder="All Position, Job Description, Keywords"
                                        aria-label="Job Function" aria-describedby="button-addon2" value="{{ request('position') }}" list="position">
                                    <datalist id="position">
                                        @foreach ($vacants as $vacant)
                                            <option value="{{ $vacant->vacant_name }}"></option>
                                        @endforeach
                                    </datalist>

                                    <select class="form-control" id="multiple-select-field-cat" name="cat_id" data-placeholder="Choose your Job Function">
                                        <option value="">Select Your Job Function</option>
                                        @foreach($categories as $category)
                                            @if($category->status == "online")
                                                <option value="{{ $category->id }}" {{ request('cat_id') == $category->id ? 'selected' : '' }}>
                                                    {{ $category->category_name }}
                                                </option>
                                            @endif
                                        @endforeach
                                    </select>

                                    <select class="form-control" id="region" name="region" data-placeholder="Choose your Region">
                                        <option value="">Select Your Region</option>
                                        {{-- <option value="1">Yangon</option>
                                        <option value="2">Mandalay</option>
                                        <option value="3">Mawlamyine</option>
                                        <option value="4">Taunggyi</option>
                                        <option value="5">Bago</option> --}}
                                        
                                        @foreach ($regions as $region)
                                            <option value="{{ $region->id }}" {{ request('region') == $region->id ? 'selected' : '' }}>{{ $region->name }}</option>
                                        @endforeach
                                    </select>

                                    <select class="form-control" id="multiple-select-field" data-placeholder="Choose your branch location"  name="branch_id[]"  multiple>
                                        <option value="">Select Your Branch Location</option>
                                        @foreach($branches as $branch)
                                            <option value="{{ $branch->id }}" {{ in_array($branch->id, request('branch_id', [])) ? 'selected' : '' }}>
                                                {{ $branch->branch_name }}  {{ $branch->branch_address }}
                                            </option>
                                        @endforeach
                                    </select>



                                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2" style="color: #fdf8f8;">
                                        Search
                                    </button>

                            </div>

                        </form>
                    </div>

                    @if(isset($message))
                    <div class="alert alert-info" style="width:200px;margin-top:5px;">{{ $message }}</div>
                    @endif
                    <hr>

                    @foreach ($vacants as $vacant)
                    <div class="col-xl-12 col-lg-12">
                        <div class="news-details">
                            <div class="comment-one">
                                <div class="comment-one__single d-flex">
                                    <div class="news-three__client-img" style="width:70px;">
                                        @if ($vacant->vacant_image == null)
                                            <a href="{{route('our_opportunities_detail',$vacant->id)}}">
                                                <img src="{{asset('job_banner/title.png')}}" alt="" style="width:70px;">
                                            </a>
                                        @else
                                            <a href="{{route('our_opportunities_detail',$vacant->id)}}">
                                                <img src="{{asset('storage/uploads/jobvacants/' . $vacant->vacant_image)}}" alt="" style="width:70px;">
                                            </a>
                                        @endif
                                    </div>
                    
                                    <div class="d-flex flex-column w-100">
                                        <!-- Main Content Section -->
                                        <div class="comment-one__content flex-grow-1">
                                            <h3>{{$vacant->vacant_name}}</h3>
                                            <p>{!! html_entity_decode(Str::limit($vacant->vacant_description, 600, '. . .')) !!}</p>
                                        </div>
                                        
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <p style="color:blue;">
                                                    <i class="far fa-calendar"></i>&nbsp;&nbsp; Posted on {{ $vacant->created_at->format('d F Y') }}
                                                </p>
                                                <p style="font-size: 13px;">{{ $vacant->created_at->diffForHumans() }}</p>
                                                <font style="color: #172ec7; font-size:14px;">
                                                    <i class="far fa-eye"></i> {{ $vacant->view_count}} Views
                                                </font>
                                            </div>
                    
                                            <!-- Button Section (Aligned Right) -->
                                            <form method="POST" class="ml-auto">
                                                @csrf
                                                <input type="hidden" name="vacant_id" value="{{ $vacant->id }}">
                                                <button type="submit" formaction="{{ route('view_counts', $vacant->id) }}" class="thm-btn comment-one__btn">View Detail</button>
                                            </form>
                                        </div>
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
                        <h4 class="section-title__title" style="font-size:25px;">Job Functions</h4>
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
                    <form>

                    <a href="{{route('our_all_categories_job')}}" style="color:#2b49f3" formaction="">See More</a>
                    </form>
                    <!--News Three Single End-->
                </div>
            </div>
        </section>
        <!--News Three End-->

@endsection
@section('script')
<!-- Select2 CSS -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

<!-- Select2 JS -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
$( '#multiple-select-field-cat' ).select2( {

    placeholder: $( this ).data( 'placeholder' ),
    closeOnSelect: false,
} );

$( '#region' ).select2( {

    placeholder: $( this ).data( 'placeholder' ),
    closeOnSelect: false,
} );

$( '#multiple-select-field' ).select2( {
    placeholder: $( this ).data( 'placeholder' ),
    closeOnSelect: false,
} );
</script>
    <script>
        $(document).ready(function () {

            // $('#region').change(function() {
            //     var selectedRegion = $(this).val(); // Get the selected region

            //     // Show or hide branch options based on selected region
            //     $('#multiple-select-field option').each(function() {
            //         var branchRegion = $(this).data('region'); // Get the region ID from the option

            //         if (selectedRegion === "" || branchRegion == selectedRegion) {
            //             $(this).show();  // Show branches of the selected region
            //         } else {
            //             $(this).hide();  // Hide branches not in the selected region
            //         }
            //     });

            //     $('#multiple-select-field').val([]); // Reset selected branches when region changes
            // });

            // // Trigger change on page load in case a region is already selected
            // $('#region').trigger('change');




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
