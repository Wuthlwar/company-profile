@extends('admins.app')
@section('content')
<div class="card mb-4">
    <div class="card-header">
        <strong>Activity</strong><span class="small ms-1"></span>
        <div class="row-reverse float-end">
            <a class="btn btn-info" href="{{ route('activity_type.create') }}">Add</a>
        </div>
    </div>
    <div class="card-body table-responsive">

        <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Activity Type Name</th>
                <th scope="col">Created At</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
             @foreach ($act_types as $type)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $type->name }}</td>
                    <td>{{ $type->created_at }}</td>
                    <td>
                        <form action="{{ route('activity_type.destroy',$type->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a type="button" href="{{ route('activity_type.edit',$type->id) }}" class="btn btn-warning">Edit</a>
                        <button class="btn btn-danger" type="submit">Delete</button>
                        </form>

                    </td>
                </tr>
             @endforeach

            </tbody>
          </table>

    </div>
  </div>
@endsection
