@extends('admins.app')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="d-flex flex-wrap align-items-center justify-content-between mb-4">
            <div>
                <h4 class="mb-3">User Account Lists</h4>

            </div>
            {{-- <a href="page-add-return.html" class="btn btn-primary add-list"><i class="las la-plus mr-3"></i>Add</a> --}}
            @if (Auth()->user()->role=='1' || Auth()->user()->role=='2')
            <button type="button" class="btn btn-primary mt-2" data-toggle="modal" data-target="#jobModal"><i class="las la-plus mr-3"></i>Add</button>
            @endif
        </div>
    </div>
    <div class="col-lg-12">
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                @if (Auth()->user()->role=='1' || Auth()->user()->role=='2')
                <!-- Multi Columns Form -->
                <form action="{{route('user.search')}}" method="post" class="row g-3 card-title" style="margin: 10px;font-size:12px;">
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
                        <label for="cateGory" class="form-label">Name</label>
                        <input type="text" class="form-control" id="cateGory" name="name" value="{{session('name')}}" style="border:1px solid #333;height:30px;font-size:13px">
                    </div>

                    <div class="col-md-2">
                        <label for="cateGory" class="form-label">Email</label>
                        <input type="text" class="form-control" id="cateGory" name="email" value="{{session('email')}}" style="border:1px solid #333;height:30px;font-size:13px">
                    </div>

                    <div class="col-md-2">
                        <label for="cateGory" class="form-label">Role</label>
                        <select id="inputState" class="form-control mb-3" name="role" style="border:1px solid #333;height:30px;font-size:13px">
                            <option value="1" {{session('role')=='1' ?'selected':''}}>Super Admin</option>
                            <option value="2" {{session('role')=='2' ?'selected':''}}>Admin</option>
                            <option value="3" {{session('role')=='3' ?'selected':''}}>User</option>
                          </select>
                    </div>
`
                    <div class="col-md-2">
                        <label for="inputZip" class="form-label" style="color: #fff;">Search</label><br>
                        <button type="submit" class="btn btn-primary" style="border:1px solid #333;height:30px;font-size:13px;padding:5px;">
                            <i class="bi bi-search"></i>&nbsp;Search</button> &nbsp;|&nbsp;
                            <button type="button" class="btn" style="border:1px solid #333;height:30px;font-size:13px;padding:5px;">
                            <font  style="font-size: 13px;"><a href="{{route('User_accounts_management.index')}}"><i class="bi bi-x"></i> Reset</a></font>
                            </button>
                    </div>
                  </form>
                  @endif

        <div class="table-responsive rounded mb-3">

        <table class="table table-striped" id="statusForm">
            <thead class="bg-white text-uppercase">
                <tr class="ligth ligth-data">
                    <tr>
                        <th scope="col" class="card-title" style="font-size: 15px;">No</th>

                        <th scope="col" class="card-title" style="font-size: 15px;">
                            @if (Auth()->user()->role=='1')
                            <input type="checkbox" id="select-all" class="form-check-input" style="border:1px solid #312eec;">
                            Bulk actions
                            @else
                            Bulk actions
                            @endif
                        </th>

                        <th scope="col" class="card-title" style="font-size: 15px;">Name</th>
                        <th scope="col" class="card-title" style="font-size: 15px;">Email / Username</th>
                        <th scope="col" class="card-title" style="font-size: 15px;">Role</th>
                        <th scope="col" class="card-title" style="font-size: 15px;">Created Date</th>
                        <th scope="col" class="card-title" style="font-size: 15px;">Updated Date</th>
                      </tr>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr id="font-s">
                    <th scope="row">{{($users->currentPage()-1)*$users->perPage()+$loop->index+1}}.</th>

                    <th scope="row">
                        @if (Auth()->user()->role=='1')
                        <span class="d-flex align-items-center">
                        <input type="checkbox" name="selected_items[]" value="{{ $user->id }}" class="item-checkbox form-check-input" style="border:1px solid #312eec;">
                        &nbsp;&nbsp;&nbsp;
                        <i class="la la-eye" style="font-size: 25px;color:#312eec;" data-toggle="modal" data-target="#jobupdateModal{{$user->id}}"></i>
                        </span>
                        @else
                        <i class="la la-eye" style="font-size: 25px;color:#312eec;" data-toggle="modal" data-target="#jobupdateModal{{$user->id}}"></i>
                        @endif
                    </th>

                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        @if($user->role=='1')
                        Super Admin
                        @elseif ($user->role=='2')
                        Admin
                        @elseif ($user->role=='3')
                        User
                        @endif
                    </td>
                    <td>{{$user->date}}</td>
                    <td>{{$user->updated_at}}</td>
                  </tr>
                  <!------------------------------------Update----------------------------------------------->
                        {{-- Create Modal  --}}
                        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"  aria-hidden="true" id='jobupdateModal{{$user->id}}'>
                            <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <form action="{{ route('User_accounts_management.update', $user->id) }}" method="post" enctype="multipart/form-data" class="row g-3">
                                    @csrf
                                    @method('PUT')
                                    <div class="modal-body">
                                        <div class="col-sm-12">
                                            <div class="card">
                                                <div class="card-header d-flex justify-content-between rounded-sm">
                                                    <div class="header-title">
                                                        <h6 class="card-title">Update User</h6>
                                                    </div>
                                                </div>
                                                <div class="card-body">

                                                    @if($errors->any())
                                                        <div class="alert alert-danger">
                                                            <ul>
                                                                @foreach ($errors->all() as $error)
                                                                    <li>{{ $error }}</li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    @endif

                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <label for="name" class="form-label card-title" style="font-size:15px;">Name <font style="color:red;">*</font></label>
                                                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" style="border:1px solid #333;height:40px;font-size:13px" value="{{ old('name', $user->name) }}" required>
                                                            @error('name')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                            <hr>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <label for="email" class="form-label card-title" style="font-size:15px;">Email / Username <font style="color:red;">*</font></label>
                                                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" style="border:1px solid #333;height:40px;font-size:13px" value="{{ old('email', $user->email) }}" required>
                                                            @error('email')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                            <hr>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <label for="status" class="form-label card-title" style="font-size:15px;">Role <font style="color:red;">*</font></label>
                                                            <select id="status" class="form-control mb-3 @error('role') is-invalid @enderror" name="role" style="border:1px solid #333;height:30px;font-size:13px" required>
                                                                @if (auth()->user()->role=='1' || auth()->user()->role=='2')
                                                                <option value="1" {{ old('role', $user->role) == '1' ? 'selected' : '' }}>Super Admin</option>
                                                                <option value="2" {{ old('role', $user->role) == '2' ? 'selected' : '' }}>Admin</option>
                                                                <option value="3" {{ old('role', $user->role) == '3' ? 'selected' : '' }}>User</option>
                                                                @else
                                                                <option value="3" {{ old('role', $user->role) == '3' ? 'selected' : '' }}>User</option>
                                                                @endif
                                                            </select>
                                                            @error('role')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                            <hr>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <label for="password" class="form-label card-title" style="font-size:15px;">Password</label>
                                                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" style="border:1px solid #333;height:40px;font-size:13px">
                                                            @error('password')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                            <small class="text-muted">Leave blank if you don't want to change the password</small>
                                                            <hr>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <label for="password_confirmation" class="form-label card-title" style="font-size:15px;">Confirm Password</label>
                                                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" style="border:1px solid #333;height:40px;font-size:13px">
                                                            <hr>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary" id="btn-update">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                            </div>
                            </div>
                        </div>
                  <!----------------------------------------------------------------------------------->
                @endforeach
                <tr>
                    <td></td>
                    <td colspan="7">
                        @if (Auth()->user()->role=='1')
                        <button type="button" class="btn btn-danger rounded-pill" id="delete-button" style="height:30px;width:80px;font-size:13px;padding:5px;">Delete</button>
                        @endif
                    </td>
                </tr>
            </tbody>
        </table>
        {{$users->links()}}
        </div>
    </div>
</div>

{{-- Create Modal  --}}
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"  aria-hidden="true" id='jobModal'>
    <div class="modal-dialog modal-lg">
       <div class="modal-content">
        <form action="{{ route('User_accounts_management.store') }}" method="post" enctype="multipart/form-data" class="row g-3">
            @csrf
            <div class="modal-body">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between rounded-sm">
                            <div class="header-title">
                                <h6 class="card-title">Add New User</h6>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="name" class="form-label card-title" style="font-size:15px;">Name <font style="color:red;">*</font></label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" style="border:1px solid #333;height:40px;font-size:13px" value="{{ old('name') }}" required>
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    <hr>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <label for="email" class="form-label card-title" style="font-size:15px;">Email / Username <font style="color:red;">*</font></label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" style="border:1px solid #333;height:40px;font-size:13px" value="{{ old('email') }}" required>
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    <hr>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <label for="status" class="form-label card-title" style="font-size:15px;">Role <font style="color:red;">*</font></label>
                                    <select id="status" class="form-control mb-3 @error('role') is-invalid @enderror" name="role" style="border:1px solid #333;height:30px;font-size:13px" required>
                                        <option value="1" {{ old('role') == 1 ? 'selected' : '' }}>Super Admin</option>
                                        <option value="2" {{ old('role') == 2 ? 'selected' : '' }}>Admin</option>
                                        <option value="3" {{ old('role') == 3 ? 'selected' : '' }}>User</option>
                                    </select>
                                    @error('status')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    <hr>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <label for="password" class="form-label card-title" style="font-size:15px;">Password <font style="color:red;">*</font></label>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" style="border:1px solid #333;height:40px;font-size:13px" required>
                                    @error('password')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    <hr>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <label for="password_confirmation" class="form-label card-title" style="font-size:15px;">Confirm Password <font style="color:red;">*</font></label>
                                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" style="border:1px solid #333;height:40px;font-size:13px" required>
                                    <hr>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" id="btn-create">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

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
                    text: 'Please select at least one user to delete!',
                });
                return;
            }

            // Use SweetAlert for confirmation
            Swal.fire({
                title: 'Are you sure?',
                text: 'Do you want to delete selected users?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {

                    $.ajax({
                        url: "{{ route('destroyUsers.delete') }}",
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

{{-- <script>
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
        var categoryId = $(this).data('category-id');
        $.ajax({
            url: "/admins/Job_categories_status/" + categoryId,
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
</script> --}}
@endsection
