@extends('admins.app')
@section('content')
<div class="card mb-4">
    <div class="card-header bg-primary text-white">
        <strong>Activity type</strong><span class="small ms-1"></span></div>
    <div class="card-body table-responsive">
            @if ($act_type->id!=null)
                <form action="{{ route('activity_type.update',$act_type->id) }}" method="POST">
                    @method('PATCH')
            @else
                <form action="{{ route('activity_type.store') }}" method="POST">
            @endif

            @csrf
            <div class="row">
                <div class="mb-3 col-12">
                    <label class="form-label" for="name">Activity Type Name</label>
                    <input class="form-control" id="name" type="text" placeholder="Please enter activity type name" name="name" value="{{ old('name',$act_type->name) }}">
                </div>
                <div class="mb-3">
                    <button class="btn btn-success" type="submit">Save</button>
                    <a class="btn btn-warning" href="{{ route('activity_type.index') }}">Cancel</a>
                </div>
            </div>
        </form>


    </div>
  </div>
@endsection
