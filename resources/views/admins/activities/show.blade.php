@extends('admins.app')
@section('content')
<div class="card mb-4">
    <div class="card-header">
        <strong>Activity Detail</strong><span class="small ms-1"></span>
        <div class="row-reverse float-end">
            <a class="btn btn-info" href="{{ route('activity_type.create') }}">Add</a>
        </div>
    </div>
    <div class="card-body table-responsive">

        <table class="table table-hover">
            <thead>
                <tr>Images</tr>
            </thead>
            <tbody>

                <tr>
                    @foreach ($act_imgs as $img)
                    <td>
                        <img src="{{ asset('storage/uploads/activity_images/'.$img->file) }}" alt="{{ $img->name }}" width="100px">
                    </td>
                    @endforeach

                </tr>

            </tbody>
          </table>

    </div>
  </div>
@endsection
