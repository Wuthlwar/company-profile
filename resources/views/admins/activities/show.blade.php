@extends('admins.app')
@section('content')
<div class="card mb-4">
    <div class="card-header">
        <strong>Activity Detail</strong><span class="small ms-1"></span>
        <div class="row-reverse float-end">
            <a class="btn btn-info" href="{{ route('activities.index') }}"><< Back</a>
        </div>
    </div>
    <div class="card-body table-responsive">
        <div class="row col-12">
            <table class="table table-borderless">
                <thead>
                    <tr>
                        <th class="col-3">Activity Type</th>
                        <td class="col-9">{{ $activity->act_types->name }}</td>
                    </tr>
                    <tr>
                        <th class="col-3">Name</th>
                        <td class="col-9">{{ $activity->title }}</td>
                    </tr>
                    <tr>
                        <th class="col-3">Description</th>
                        <td class="col-9">{{ $activity->description }}</td>
                    </tr>
                    <tr>
                        <th class="col-3">Description Myanmar</th>
                        <td class="col-9">{{ $activity->description_mm }}</td>
                    </tr>
                    <tr>
                        <th class="col-3">First Image</th>
                        <td class="col-9">
                            <div class="col-6 col-sm-2 border rounded" style="overflow: hidden; height:100px;">
                                <img src="{{ asset("storage/uploads/activity/$activity->preview_img") }}" alt="" class="rounded img-fluid"/>
                            </div>
                        </td>
                    </tr>
                    <tr class="align-middle">
                        <th class="col-3">Other Images</th>
                        <td class="col-9">
                            <div class="row col-12">
                                    @foreach ($act_imgs as $img)
                                    <div class="col-6 col-sm-2 border rounded m-1">
                                        <form method="post">
                                            @csrf
                                            <div class="card" >
                                                <div  style="overflow: hidden; height:70px;">
                                                    <img src="{{ asset("storage/uploads/activity_images/$img->file") }}" alt="" class="rounded card-img-top"/>
                                                </div>

                                                <div class="card-body text-center">
                                                    <button class="badge btn-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"
                                                id="img-btn-delete" data-id="{{$img->id}}" data-action="{{route('del_imgs',$img->id)}}"><i class="ri-delete-bin-line mr-0"></i></button>
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                    @endforeach
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th class="col-3">Location</th>
                        <td class="col-9">{{ $activity->location }}</td>
                    </tr>
                    <tr>
                        <th class="col-3">Date</th>
                        <td class="col-9">{{ $activity->date }}</td>
                    </tr>

                </thead>
                <tbody></tbody>
            </table>
            <div class="">

            </div>
        </div>

    </div>
  </div>
@endsection
@section('script')
  <script src="{{asset('js/activity_crud.js')}}"></script>
@endsection
