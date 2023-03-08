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
            @foreach ($act_imgs as $img)
            <div class="col-6 col-sm-2">
                <img src="{{ asset("storage/uploads/activity_images/$img->file") }}" alt="" class="rounded img-fluid"/>
            </div>
            @endforeach
        </div>

    </div>
  </div>
@endsection
