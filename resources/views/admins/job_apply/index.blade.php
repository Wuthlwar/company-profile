@extends('admins.app')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="d-flex flex-wrap align-items-center justify-content-between mb-4">
            <div>
                <h4 class="mb-3">Job Vacant Apply Lists</h4>

            </div>
            {{-- <a href="page-add-return.html" class="btn btn-primary add-list"><i class="las la-plus mr-3"></i>Add</a> --}}
            {{-- <button type="button" class="btn btn-primary mt-2" data-toggle="modal" data-target="#jobModal"><i class="las la-plus mr-3"></i>Add</button> --}}

        </div>
    </div>
    <div class="col-lg-12 col-md-12">
                <!-- Multi Columns Form -->
                <form action="{{route('job_vacant_apply.search')}}" method="post" class="row g-3 card-title" style="margin: 10px;font-size:12px;">
                    @csrf
                    @method('post')
                    <div class="col-md-2">
                      <label for="fromDate" class="form-label">From Date </label>
                      <input type="date" class="form-control" id="fromDate" name="start_date" style="border:1px solid #076b45;height:30px;font-size:13px;" value="{{ session('start_date') ? session('start_date') : date('Y-m-d') }}">
                    </div>

                    <div class="col-md-2">
                      <label for="toDate" class="form-label">To Date</label>
                      <input type="date" class="form-control" id="toDate" name="end_date" style="border:1px solid #333;height:30px;font-size:13px" value="{{ session('end_date') ? session('end_date') : date('Y-m-d')}}">
                    </div>

                    <div class="col-md-2">
                        <label for="cateGory" class="form-label">Category</label>
                        <select class="form-control" id="jobcategoryname" name="cat_id">
                            @foreach($categories as $category)
                                @if($category->status=="online")
                                <option value="{{$category->id}}" {{session('cat_id')==$category->id? 'selected':''}}>{{$category->category_name}}</option>
                            @endif
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-2">
                        <label for="cateGory" class="form-label">Position</label>
                        <input type="text" class="form-control" id="position" name="position" value="{{session('position')}}" style="border:1px solid #333;height:30px;font-size:13px">
                    </div>

                    <div class="col-md-2">
                        <label for="cateGory" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="surname" value="{{session('surname')}}" style="border:1px solid #333;height:30px;font-size:13px">
                    </div>

                    <div class="col-md-2">
                        <label for="cateGory" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" name="email" value="{{session('email')}}" style="border:1px solid #333;height:30px;font-size:13px">
                    </div>

`
                    <div class="col-md-2">
                        <label for="inputZip" class="form-label" style="color: #fff;">Search</label><br>
                        <button type="submit" class="btn btn-primary" style="border:1px solid #333;height:30px;font-size:13px;padding:5px;">
                            <i class="bi bi-search"></i>&nbsp;Search</button> &nbsp;|&nbsp;
                            <button type="button" class="btn" style="border:1px solid #333;height:30px;font-size:13px;padding:5px;">
                            <foint  style="font-size: 13px;"><a href="{{route('Job_Application_form.index')}}"><i class="bi bi-x"></i> Reset</a></foint>
                            </button>
                    </div>
                  </form>
                  @if (session('success'))
                  <div class="alert alert-success">
                      {{ session('success') }}
                  </div>
              @endif

        <div class="table-responsive rounded mb-3">

        <table class="table table-striped" id="statusForm">
            <thead class="bg-white">
                <tr class="ligth ligth-data" style="font-size: 13px;">
                    <tr>
                        <th scope="col" class="card-title" style="font-size: 13px;">No</th>
                        <th scope="col" class="card-title" style="font-size: 13px;">
                            @if (Auth()->user()->role=='1')
                            <input type="checkbox" id="select-all" class="form-check-input" style="border:1px solid #312eec;"> Bulk actions
                            @else
                            Bulk actions
                            @endif
                        </th>
                        <th scope="col" class="card-title" style="font-size: 13px;">Categories</th>
                        <th scope="col" class="card-title" style="font-size: 13px;">Job Vacant/Position</th>
                        <th scope="col" class="card-title" style="font-size: 13px;">Name</th>
                        <th scope="col" class="card-title" style="font-size: 13px;">Phone</th>
                        <th scope="col" class="card-title" style="font-size: 13px;">Email</th>
                        <th scope="col" class="card-title" style="font-size: 13px;">Branch Locations</th>
                        <th scope="col" class="card-title" style="font-size: 13px;">Resume</th>
                        {{-- <th scope="col" class="card-title" style="font-size: 13px;">Status</th> --}}
                        <th scope="col" class="card-title" style="font-size: 13px;">Apply Date</th>
                      </tr>
                </tr>
            </thead>
            <tbody>
                @foreach ($apply_vacants as $vacant)
                <tr id="font-s" style="font-size:13px;">
                    <th scope="row">{{($apply_vacants->currentPage()-1)*$apply_vacants->perPage()+$loop->index+1}}.</th>
                    <th scope="row">
                        <span class="d-flex align-items-center">
                            @if (Auth()->user()->role=='1')
                        <input type="checkbox" name="selected_items[]" value="{{ $vacant->id }}" class="item-checkbox form-check-input" style="border:1px solid #312eec;">
                        &nbsp;&nbsp;&nbsp;
                        <i class="la la-eye" style="font-size: 25px;color:#312eec;" data-toggle="modal" data-target="#jobapplyModal{{$vacant->id}}"></i>
                            @else
                            <i class="la la-eye" style="font-size: 25px;color:#312eec;" data-toggle="modal" data-target="#jobapplyModal{{$vacant->id}}"></i>
                            @endif
                    </span>
                    </th>

                    <td>
                        {{ $vacant->category->category_name ?? 'N/A' }}
                    </td>
                    <td>
                       {{$vacant->position}}
                    </td>
                    <td>
                        {{$vacant->surname}}
                    </td>
                    <td> {{$vacant->phone}}</td>
                    <td> {{$vacant->email}}</td>
                    <td>
                        @foreach ($getbranches as $getbranch)
                        <span class="badge bg-primary" style="font-size: 13px;">
                            {{$getbranch->branch_name}}
                        </span>
                        @endforeach</td>
                    <td><i class="fa fa-file" aria-hidden="true" style="color:#312eec;font-size:20px;" data-toggle="modal" data-target="#jobapplyresume{{$vacant->id}}"></i>
                      &nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;<a href="{{ asset('storage/uploads/jobvacants/'.$vacant->resume)}}" download><i class="fa fa-download" style="color:#312eec;font-size:20px;" aria-hidden="true"></i></a>
                    </td>
                    {{-- <td></td> --}}
                    <td>{{$vacant->date}}</td>
                  </tr>
                  <!------------------------------------Update----------------------------------------------->
                  <div class="modal fade bd-example-modal-lg" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog"  aria-hidden="true" id='jobapplyModal{{$vacant->id}}'>
                    <div class="modal-dialog modal-xl">
                       <div class="modal-content">
                          <div class="modal-body">
                                <div class="header-title">
                                    <h6 class="card-title">User Application Detail</h6>
                                </div>
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label for="vacantname" class="form-label card-title" style="font-size:15px;">Job Category</label>
                                                  </div>
                                                  <div class="col-md-9">
                                                    <label for="vacantname" class="form-label card-title" style="font-size:15px;">
                                                        {{ $vacant->category->category_name ?? 'N/A' }}
                                                    </label>
                                                  </div>
                                            </div>
                                            <hr>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <label for="vacantname" class="form-label card-title" style="font-size:15px;">Job Vacant / Position</label>
                                                      </div>
                                                      <div class="col-md-9">
                                                        <label for="vacantname" class="form-label card-title" style="font-size:15px;">
                                                           {{$vacant->position}}
                                                        </label>
                                                      </div>
                                                </div>

                                                <hr>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <label for="vacantname" class="form-label card-title" style="font-size:15px;">Name</label>
                                                      </div>
                                                      <div class="col-md-9">
                                                        <label for="vacantname" class="form-label card-title" style="font-size:15px;">
                                                            {{$vacant->title}} {{$vacant->surname}}
                                                        </label>
                                                      </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <label for="vacantname" class="form-label card-title" style="font-size:15px;">Phone Number</label>
                                                      </div>
                                                      <div class="col-md-9">
                                                        <label for="vacantname" class="form-label card-title" style="font-size:15px;">
                                                           {{$vacant->phone}}
                                                        </label>
                                                      </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <label for="vacantname" class="form-label card-title" style="font-size:15px;">Email</label>
                                                      </div>
                                                      <div class="col-md-9">
                                                        <label for="vacantname" class="form-label card-title" style="font-size:15px;">
                                                           {{$vacant->email}}
                                                        </label>
                                                      </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <label for="vacantname" class="form-label card-title" style="font-size:15px;">Current Address</label>
                                                      </div>
                                                      <div class="col-md-9">
                                                        <label for="vacantname" class="form-label card-title" style="font-size:15px;">
                                                           {{$vacant->current_address}}
                                                        </label>
                                                      </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <label for="vacantname" class="form-label card-title" style="font-size:15px;">Permanent/Emergency Address</label>
                                                      </div>
                                                      <div class="col-md-9">
                                                        <label for="vacantname" class="form-label card-title" style="font-size:15px;">
                                                           {{$vacant->emergency_address}}
                                                        </label>
                                                      </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <label for="vacantname" class="form-label card-title" style="font-size:15px;">Career Summary</label>
                                                      </div>
                                                      <div class="col-md-9">
                                                        <label for="vacantname" class="form-label card-title" style="font-size:15px;">
                                                          {{$vacant->career_summary}}
                                                        </label>
                                                      </div>
                                                </div>

                                                <hr>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <label for="vacantname" class="form-label card-title" style="font-size:15px;">Resume</label>
                                                      </div>
                                                      <div class="col-md-9">
                                                        <label for="vacantname" class="form-label card-title" style="font-size:15px;">
                                                            <a href="{{asset('storage/uploads/jobvacants/' . $vacant->resume)}}" target="_blank"> {{$vacant->resume}}</a>
                                                        </label>
                                                      </div>
                                                </div>
                                                <hr>

                                                @if($vacant->q1!=null)
                                                <div class="row" style="color: #000;">
                                                    <div class="col-md-12">
                                                        <label for="vacantname" class="form-label card-title" style="font-size:15px;">Question 1</label><br>
                                                        <p style="text-align: justify;">{{$vacant->q1}}<br>
                                                        Ans : {{$vacant->ans1}}</p>
                                                      </div>
                                                </div>
                                                <hr>
                                                @endif

                                                @if($vacant->q2!=null)

                                                <div class="row" style="color: #000;">
                                                    <div class="col-md-12">
                                                        <label for="vacantname" class="form-label card-title" style="font-size:15px;">Question 2</label><br>
                                                        <p style="text-align: justify;">{{$vacant->q2}}<br>
                                                        Ans : {{$vacant->ans2}}</p>
                                                      </div>
                                                </div>
                                                <hr>
                                                @endif
                                                @if($vacant->q3!=null)
                                                <div class="row" style="color: #000;">
                                                    <div class="col-md-12">
                                                        <label for="vacantname" class="form-label card-title" style="font-size:15px;">Question 3</label><br>
                                                        <p style="text-align: justify;">{{$vacant->q3}}<br>
                                                        Ans : {{$vacant->ans3}}</p>
                                                      </div>
                                                </div>
                                                <hr>
                                                @endif


                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <label for="vacantname" class="form-label card-title" style="font-size:15px;">Terms & Conditions</label>
                                                      </div>
                                                      <div class="col-md-9">
                                                        <label for="vacantname" class="form-label card-title" style="font-size:15px;">
                                                            <i class="fa fa-check-circle" aria-hidden="true" style="color:green;"></i>
                                                            @if($vacant->agree=='agree')
                                                            Agree
                                                            @endif
                                                        </label>
                                                      </div>
                                                </div>

                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          </div>
                        </form>
                       </div>
                    </div>
                 </div>
                 <!-----------------------------------------------------------------------------end of details-------------------------->

                 <div class="modal fade bd-example-modal-xl" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog"  aria-hidden="true" id='jobapplyresume{{$vacant->id}}'>
                    <div class="modal-dialog modal-xl">
                       <div class="modal-content">
                          <div class="modal-body">

                                <div class="header-title">
                                    <h6 class="card-title">User Application Resume</h6>
                                </div>

                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="card-body">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <center>
                                                        @if (Str::endsWith($vacant->resume, ['.pdf', '.PDF']))
                                                        <div class="embed-responsive embed-responsive-16by9">
                                                            <iframe class="embed-responsive-item" src="{{ asset('storage/uploads/jobvacants/'.$vacant->resume)}}" allowfullscreen></iframe>
                                                        </div>
                                                        @elseif (Str::endsWith($vacant->resume, ['.jpg', '.jpeg', '.png', '.gif']))
                                                        <img src="{{ asset('storage/uploads/jobvacants/'.$vacant->resume) }}" alt="{{$vacant->resume}}" title="{{$vacant->resume}}" class="img-fluid">
                                                        @elseif (Str::endsWith($vacant->resume, ['.docx', '.DOCX']))
                                                        <a href="{{asset('storage/uploads/jobvacants/' . $vacant->resume)}}" target="_blank"> {{$vacant->resume}}</a>
                                                        @endif
                                                    </center>
                                                    <br>
                                                    <a href="{{asset('storage/uploads/jobvacants/' . $vacant->resume)}}" target="_blank"> {{$vacant->resume}}</a>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          </div>
                       </div>
                    </div>
                 </div>

                @endforeach
                <tr>
                    <td></td>
                    <td colspan="8">
                        @if (Auth()->user()->role=='1' && count($apply_vacants)>0)
                        <button type="button" class="btn btn-danger rounded-pill" id="delete-button" style="height:30px;width:80px;font-size:13px;padding:5px;">Delete</button>
                        @endif
                    </td>
                </tr>
            </tbody>
        </table>
        {{$apply_vacants->links('pagination::bootstrap-4')}}
        </div>
    </div>
</div>

{{-- Create Modal  --}}
@endsection
@section('script')
{{-- <script src="{{ asset('/js/activity_type_crud.js') }}"></script> --}}
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
      function showNotification(message, type) {
        var notification = $('<div class="alert alert-' + type + ' bg-success text-light border-0 alert-dismissible fade show" role="alert" style="position: fixed; top: 20px; right: 20px; z-index: 9999; display: none; font-family: "Poppins", sans-serif ">'+
            '<button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>'+
            message +
            '</div>');

        $('#notide').append(notification);
        notification.fadeIn('slow').delay(3000).fadeOut('slow', function () {
            $(this).remove();
        });
    }

    $(document).ready(function () {
        $('#select-all').click(function () {
            $('.item-checkbox').prop('checked', this.checked);
        });

        $('#delete-button').click(function (e) {
            e.preventDefault();

            var selectedItems = $('.item-checkbox:checked').map(function() {
                return this.value;
            }).get();

            if (selectedItems.length === 0) {
                Swal.fire({
                    icon: 'warning',
                    title: 'Oops...',
                    text: 'Please select at least one job apply to delete!',
                });
                return;
            }

            // Use SweetAlert for confirmation
            Swal.fire({
                title: 'Are you sure?',
                text: 'Do you want to delete selected job apply?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {

                    $.ajax({
                        url: "{{ route('destroyVacantapply.delete') }}",
                        type: 'DELETE',
                        data: {
                            _token: '{{ csrf_token() }}',
                            selected_items: selectedItems
                        },
                        success: function(response) {
                            console.log(response);
                            showNotification(response.message, 'success');
                            setTimeout(function() {
                                location.reload();
                            }, 1500); // Reload after 2 seconds
                        },
                        error: function(xhr) {
                            console.error(xhr.responseText);
                        }
                    });
                }
            });
        });
    });
</script>

@endsection
