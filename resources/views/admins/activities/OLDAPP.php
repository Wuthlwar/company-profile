@extends('admins.app')
@section('content')
<div class="card mb-4">
    <div class="card-header">
        <div class="d-flex justify-content-between align-middle">
            <strong class="my-auto">Activity</strong>
            <a class="btn custom-bg-info" href="{{ route('activities.create') }}">Add</a>
        </div>
    </div>
    <div class="card-body table-responsive">
        <table class="table table-hover">
            <thead >
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Activity Title</th>
                    <th scope="col">Location</th>
                    <th scope="col">Image</th>
                    <th scope="col">Date</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($acts as $act)
                <tr>
                    <td scope="col">#</td>
                    <td scope="col">{{ $act->title }}</td>
                    <td scope="col">{{ $act->description }}</td>
                    <td scope="col">{{ $act->act_types->name }}</td>
                    <td scope="col">{{ $act->location }}</td>
                    <td scope="col">

                        <img src="{{ asset("storage/uploads/activity/$act->preview_img") }}" alt="{{ $act->preview_img }}" height="100px">
                    </td>
                    <td scope="col">{{ $act->date }}</td>
                    <td>
                        <form action="{{ route('activities.destroy',$act->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a type="button" href="{{ route('activities.edit',$act->id) }}" class="btn btn-warning">Edit</a>
                            <a type="button" href="{{ route('activities.show',$act->id) }}" class="btn btn-dark">Detail</a>
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
