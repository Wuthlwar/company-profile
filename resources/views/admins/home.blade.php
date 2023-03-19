@extends('admins.app')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="d-flex flex-wrap align-items-center justify-content-between mb-4">
            <div>
                <h4 class="mb-3">FeedBack List</h4>

            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="table-responsive rounded mb-3">
        <table class="table table-striped">
            <thead class="bg-white text-uppercase">
                <tr class="ligth ligth-data">
                    <th scope="col" class="font-weight-bold" style="text-align: left;">#</th>
                    <th scope="col" class="font-weight-bold" style="text-align: left;">Name</th>
                    <th scope="col" class="font-weight-bold" style="text-align: left;">Mail</th>
                    <th scope="col" class="font-weight-bold" style="text-align: left;">Phone No</th>
                    <th scope="col" class="font-weight-bold" style="text-align: left;">Subject</th>
                    <th scope="col" class="font-weight-bold" style="text-align: left;">Description</th>
                    <th scope="col" class="font-weight-bold" style="text-align: left;">Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($feedbacks as $feedback)
                <tr>
                    <td scope="col">{{ $loop->iteration }}</td>
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
</div>

@endsection

