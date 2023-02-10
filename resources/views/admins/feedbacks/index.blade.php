@extends('admins.app')
@section('content')
<div class="card mb-4">
    <div class="card-header">
        <strong>Feedbacks</strong><span class="small ms-1"></span>
        {{-- <div class="row-reverse float-end">
            <a class="btn btn-info" href="{{ route('activities.create') }}">Add</a>
        </div> --}}
    </div>
    <div class="card-body table-responsive">

        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Mail</th>
                    <th scope="col">Phone No</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Description</th>
                    <th scope="col">Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($feedbacks as $feedback)
                <tr>
                    <td scope="col">#</td>
                    <td scope="col">{{ $feedback->name }}</td>
                    <td scope="col">{{  $feedback->email }}</td>
                    <td scope="col">{{  $feedback->ph_no }}</td>
                    <td scope="col">{{  $feedback->subject }}</td>
                    <td scope="col">{{  $feedback->description }}</td>
                    <td scope="col">{{  $feedback->created_at }}</td>

                </tr>
            @endforeach
            </tbody>
          </table>

    </div>
  </div>
@endsection
