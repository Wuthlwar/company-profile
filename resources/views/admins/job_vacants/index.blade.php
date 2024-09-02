@extends('admins.app')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="d-flex flex-wrap align-items-center justify-content-between mb-4">
            <div>
                <h4 class="mb-3">Job Vacant Lists</h4>
            </div>
            {{-- <a href="page-add-return.html" class="btn btn-primary add-list"><i class="las la-plus mr-3"></i>Add</a> --}}
            <a href="{{route('Job_vacant_lists.create')}}" style="color: #fff;"><button type="button" class="btn btn-primary mt-2"><i class="las la-plus mr-3"></i>
                Add
            </button></a>
        </div>
    </div>
    <div class="col-lg-12 col-md-12">
                <!-- Multi Columns Form -->
                <form action="{{route('job_vacant.search')}}" method="post" class="row g-3 card-title" style="margin: 10px;font-size:12px;">
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
                        <select class="form-control" id="jobcategoryname" name="category_id">
                            @foreach($categories as $category)
                                @if($category->status=="online")
                                <option value="{{$category->id}}" >{{$category->category_name}}</option>
                            @endif
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-2">
                        <label for="cateGory" class="form-label">Vacant Name</label>
                        <input type="text" class="form-control" id="cateGory" name="vacant_name" value="{{session('vacant_name')}}" style="border:1px solid #333;height:30px;font-size:13px">
                    </div>

                    <div class="col-md-2">
                        <label for="cateGory" class="form-label">Status</label>
                        <select id="inputState" class="form-control mb-3" name="status" style="border:1px solid #333;height:30px;font-size:13px">
                            <option value="online" {{session('status')=='online' ?'selected':''}}>Online</option>
                            <option value="offline" {{session('status')=='offline' ?'selected':''}}>Offline</option>
                          </select>
                    </div>

                    <div class="col-md-2">
                        <label for="inputZip" class="form-label" style="color: #fff;">Search</label><br>
                        <button type="submit" class="btn btn-primary" style="border:1px solid #333;height:30px;font-size:13px;padding:5px;">
                            <i class="bi bi-search"></i>&nbsp;Search</button> &nbsp;|&nbsp;
                            <button type="button" class="btn" style="border:1px solid #333;height:30px;font-size:13px;padding:5px;">
                            <font  style="font-size: 13px;"><a href="{{route('Job_vacant_lists.index')}}"><i class="bi bi-x"></i> Reset</a></font>
                            </button>
                    </div>
                  </form>
                  @if (session('success'))
                  <div class="alert alert-success">
                      {{ session('success') }}
                  </div>
              @endif

        <div class="table-responsive rounded mb-3">

        <table class="table table-striped" id="statusForm" style="font-size: 13px;">
            <thead class="bg-white">
                <tr class="ligth ligth-data">
                    <tr>
                        <th scope="col" class="card-title" style="font-size: 13px;">No</th>
                        <th scope="col" class="card-title" style="font-size: 13px;">
                            @if (Auth()->user()->role=='1')
                        <input type="checkbox" id="select-all" class="form-check-input" style="border:1px solid #313eec;"> Bulk actions
                        @else
                        Bulk actions
                        @endif
                        </th>
                        <th scope="col" class="card-title" style="font-size: 13px;">Banner</th>
                        <th scope="col" class="card-title" style="font-size: 13px;">Tumbnail</th>
                        <th scope="col" class="card-title" style="font-size: 13px;">Views</th>
                        <th scope="col" class="card-title" style="font-size: 13px;">Apps</th>
                        <th scope="col" class="card-title" style="font-size: 13px;">Job Vacant Name</th>
                        <th scope="col" class="card-title" style="font-size: 13px;">Categories</th>
                        <th scope="col" class="card-title" style="font-size: 13px;">Status</th>
                        <th scope="col" class="card-title" style="font-size: 13px;">Job App Status</th>
                        <th scope="col" class="card-title" style="font-size: 13px;">Location</th>
                        <th scope="col" class="card-title" style="font-size: 13px;">Branch</th>

                        <th scope="col" class="card-title" style="font-size: 13px;">Created</th>
                        <th scope="col" class="card-title" style="font-size: 13px;">Updated</th>
                        <th scope="col" class="card-title" style="font-size: 13px;">Option</th>
                      </tr>
                </tr>
            </thead>
            <tbody>
                @foreach ($vacants as $vacant)
                <tr id="font-s">
                    <th scope="row">{{($vacants->currentPage()-1)*$vacants->perPage()+$loop->index+1}}.</th>
                    <th scope="row">
                        <span class="d-flex align-items-center">
                        @if (Auth()->user()->role=='1')
                        <input type="checkbox" name="selected_items[]" value="{{ $vacant->id }}" class="item-checkbox form-check-input" style="border:1px solid #312eec;">
                        &nbsp;&nbsp;&nbsp;
                        <a href="{{route('Job_vacant_lists.edit',$vacant->id)}}"><i class="la la-eye" style="font-size: 25px;color:#312eec;"></i></a>
                        @else
                        <a href="{{route('Job_vacant_lists.edit',$vacant->id)}}"><i class="la la-eye" style="font-size: 25px;color:#312eec;"></i></a>
                        @endif
                    </span>
                    </th>

                    <td>
                        <img src="{{ $vacant->vacant_banner ? asset('storage/uploads/jobvacants/' . $vacant->vacant_banner) : asset('assets/img/notfound.jpg') }}" class="img-fluid" style="width:100px;height:50px;">
                    </td>

                    <td>
                        <img src="{{ $vacant->vacant_image ? asset('storage/uploads/jobvacants/' . $vacant->vacant_image) : asset('assets/img/notfound.jpg') }}" class="img-fluid" style="width:100px;height:50px;">
                    </td>
                    <td>{{ $vacant->view_count }}</td>
                    <td><a href="{{ route('Job_Application_form.index', ['jobvacant_id' => $vacant->id]) }}" style="color:#8383f1;">{{ $apply_counts[$vacant->id] ?? '0' }} CVs</a></td>
                    <td>
                        {{ $vacant->vacant_name }}
                        <span class="badge badge-danger">
                            <a href="{{ route('Job_Application_form.index', ['jobvacant_id' => $vacant->id]) }}" style="color:#efeff7;">
                               <u>{{ $apply_counts[$vacant->id] ?? '0' }}</u>
                            </a>
                        </span>
                    </td>
                    <td>{{ $vacant->category->category_name ?? 'N/A' }}</td>

                    <td>
                        <div class="form-check form-switch">
                            @method('POST')
                                <div class="form-check form-switch" id="noti">
                                    @if (Auth()->user()->role=='1' || Auth()->user()->role=='2')
                                    <input class="form-check-input" type="checkbox" name="status" value="{{$vacant->status=='online' ? 'offline' : 'online'}}" {{$vacant->status=='online' ? 'checked' : 0}} id="status{{$vacant->id}}" data-vacant-id="{{$vacant->id}}">
                                    {{$vacant->status=='online' ? 'online' : 'offline'}}
                                    @else
                                    {{$vacant->status=='online' ? 'online' : 'offline'}}
                                    @endif
                                </div>
                        </div>
                    </td>
                    <td>{{$vacant->status1}}</td>
                    <td>{{$vacant->region}} | {{$vacant->township}}</td>
                    <td>
                        {{-- {{$vacant->vacant_branches}} --}}
                        @foreach ( $vacant->vacant_branches as $bran)
                        {{ $bran->branches->branch_name }},
                         @endforeach
                    </td>

                    <td>{{$vacant->date}}</td>
                    <td>{{$vacant->updated_at}}</td>
                    <td>
                        <i class="las la-ellipsis-v" style="font-size:27px;" data-toggle="modal" data-target="#deactive{{$vacant->id}}"></i>

                        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" id='deactive{{$vacant->id}}'>
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="col-sm-12">
                                            <div class="card" style="padding: 40px;">

                                                <form action="{{ route('job-vacants.update-status1', $vacant->id) }}" method="POST">
                                                    @csrf
                                                    @method('POST')
                                                    <p>{{ $vacant->vacant_name }}</p>
                                                    <label for="inputState" class="form-label card-title" style="font-size:15px;">Choose Status</label><br>
                                                    <select id="inputState" class="form-control mb-3" name="status1" style="border:1px solid #333;" required>
                                                        <option value="Deactive" {{$vacant->status1=='Deactive'? 'selected':''}}>Deactive</option>
                                                        <option value="Get Employee" {{$vacant->status1=='Get Employee'? 'selected':''}}>Get Employee</option>
                                                        <option value="Other" {{$vacant->status1=='Other'? 'selected':''}}>Other</option>
                                                    </select>
                                                    <hr>
                                                    <label for="remark" class="form-label card-title" style="font-size:15px;">Remark</label><br>
                                                    <textarea id="remark" class="form-control" name="remark" style="border:1px solid #333;" rows="5" required>
                                                        {{$vacant->remark}}
                                                    </textarea>
                                                    <hr>
                                                    <button type="submit" class="btn btn-success" style="width: 160px;">Save</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>

                    </td>
                  </tr>
                  <!------------------------------------Update----------------------------------------------->

                @endforeach
                <tr>
                    <td></td>
                    <td colspan="7">
                        @if (Auth()->user()->role=='1' && count($vacants)>0)
                        <button type="button" class="btn btn-danger rounded-pill" id="delete-button" style="height:30px;width:80px;font-size:13px;padding:5px;">Delete</button>
                        @endif
                    </td>
                </tr>
            </tbody>
        </table>
        {{$vacants->links('pagination::bootstrap-4')}}
        </div>
    </div>
</div>

@endsection
@section('script')
{{-- <script src="{{ asset('/js/activity_type_crud.js') }}"></script> --}}

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
                    text: 'Please select at least one job vacant to delete!',
                });
                return;
            }

            // Use SweetAlert for confirmation
            Swal.fire({
                title: 'Are you sure?',
                text: 'Do you want to delete selected job vacant?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {

                    $.ajax({
                        url: "{{ route('destroyVacant.delete') }}",
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

<script>
function showNotification(message, type) {
    var notification = $('<div class="alert alert-' + type + ' bg-success text-light border-0 alert-dismissible fade show" role="alert" style="position: fixed; top: 20px; right: 20px; z-index: 9999; display: none; font-family: "Poppins", sans-serif ">'+

    ''+
        message +
        '</div>');

    $('#noti').append(notification);
    notification.fadeIn('slow').delay(3000).fadeOut('slow', function () {
        $(this).remove();
    });
}

$(document).ready(function () {
    $('input[type="checkbox"]').on('change', function () {
        var status = $(this).prop('checked') ? 'online' : 'offline';
        var vacantId = $(this).data('vacant-id');
        $.ajax({
            url: "/admins/Job_vacants_status/" + vacantId,
            type: "POST",
            data: {
                _token: "{{ csrf_token() }}",
                _method: "PUT",
                status: status
            },
            success: function (response) {
                console.log(response);
                showNotification(response.message, 'success');
            },
            error: function (error) {
                console.log(error);
                // showNotification('An error occurred', 'danger');
            }
        });
    });
});
</script>


<script>
document.addEventListener('DOMContentLoaded', function() {
document.getElementById('my_file').addEventListener('change', function() {
  var fileInput = this;
  var imagePreview = document.getElementById("image_preview");

  if (fileInput.files && fileInput.files[0]) {
    var reader = new FileReader();
    reader.onload = function(e) {
      imagePreview.innerHTML = '<img src="' + e.target.result + '" style="max-width: 100%; max-height: 100%;">';
    };
    reader.readAsDataURL(fileInput.files[0]);
  } else {
    imagePreview.innerHTML = '';
  }
});

document.getElementById('my_file1').addEventListener('change', function() {
  var fileInput = this;
  var imagePreview = document.getElementById("image_preview_tumb");

  if (fileInput.files && fileInput.files[0]) {
    var reader = new FileReader();
    reader.onload = function(e) {
      imagePreview.innerHTML = '<img src="' + e.target.result + '" style="max-width: 100%; max-height: 100%;">';
    };
    reader.readAsDataURL(fileInput.files[0]);
  } else {
    imagePreview.innerHTML = '';
  }
});


document.getElementById('my_file').addEventListener('click', function() {
  var imagePreview = document.getElementById("image_preview");
  imagePreview.innerHTML = '';
});

document.getElementById('my_file1').addEventListener('click', function() {
  var imagePreview = document.getElementById("image_preview_tumb");
  imagePreview.innerHTML = '';
});
});
</script>
<script>

document.addEventListener('DOMContentLoaded', function() {
    function previewImage(fileInputId, imagePreviewId) {
        var fileInput = document.getElementById(fileInputId);
        var imagePreview = document.getElementById(imagePreviewId);

        imagePreview.innerHTML = '';

        if (fileInput.files && fileInput.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                imagePreview.innerHTML = '<img src="' + e.target.result + '" style="max-width: 100%; max-height: 100%;">';
            };
            reader.readAsDataURL(fileInput.files[0]);
        }
    }

    @foreach($categories as $category)
        document.getElementById('my_file{{$category->id}}').addEventListener('change', function() {
            previewImage('my_file{{$category->id}}', 'image_previewUp{{$category->id}}');
        });

        document.getElementById('my_file1{{$category->id}}').addEventListener('change', function() {
            previewImage('my_file1{{$category->id}}', 'image_preview_tumbUp{{$category->id}}');
        });

        document.getElementById('my_file{{$category->id}}').addEventListener('click', function() {
            document.getElementById('image_previewUp{{$category->id}}').innerHTML = '';
        });

        document.getElementById('my_file1{{$category->id}}').addEventListener('click', function() {
            document.getElementById('image_preview_tumbUp{{$category->id}}').innerHTML = '';
        });
    @endforeach
});
</script>
<!-- Select2 JS -->
<script>
$(document).ready(function() {
    $('#jobcategoryname').select2({
        theme: 'bootstrap4',
        placeholder: 'Choose Your Category',
        width: '100%'
    });

    $('#jobcategorynameadd').select2({
        theme: 'bootstrap4',
        placeholder: 'Choose Your Category',
        width: '100%',
        dropdownParent: $('#jobModal')
    });

    $('#branches').select2({
        theme: 'bootstrap4',
        placeholder: 'Choose Your branch',
        width: '100%',
        dropdownParent: $('#jobModal')
    });

    $('#qual').select2({
        theme: 'bootstrap4',
        placeholder: 'Choose Your Qualification',
        width: '100%',
        dropdownParent: $('#jobModal')
    });
});


</script>

<script>

$(document).ready(function() {
    const quill = new Quill('#deseditor', {
        theme: 'snow'
    });

    quill.on('text-change', function() {
        $('#jobrequired').val(quill.root.innerHTML);
    });

    $('#jobForm').on('submit', function(e) {
        if ($('#jobrequired').val().trim() === '') {
            e.preventDefault();
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Job description is required',
            });
        }
    });
});
</script>
@endsection
