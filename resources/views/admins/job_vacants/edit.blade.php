@extends('admins.app')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="d-flex flex-wrap align-items-center justify-content-between mb-4">
            <div>
                <h4 class="mb-3">Job Vacant Detail</h4>

            </div>
            {{-- <a href="page-add-return.html" class="btn btn-primary add-list"><i class="las la-plus mr-3"></i>Add</a> --}}
            {{-- <button type="button" class="btn btn-primary mt-2" data-toggle="modal" data-target="#jobModal"><i class="las la-plus mr-3"></i>Add</button> --}}

        </div>
    </div>
    <div class="col-lg-3"></div>
        <div class="col-lg-6">
            @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="card">
            <div class="card-header d-flex justify-content-between rounded-sm">
                <div class="header-title">
                    <h6 class="card-title">Add New Job Vacant</h6>

                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('Job_vacant_lists.update', $vacant_detail->id) }}" method="post" enctype="multipart/form-data" class="row g-3">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-12">
                            <label for="categoryname" class="form-label card-title" style="font-size:15px;">Category Name <font style="color:red;">*</font></label>
                            <select class="form-control" id="jobcategoryname" name="category_id" required>
                                @foreach($categories as $category)
                                    @if($category->status=="online")
                                    <option value="{{$category->id}}" {{ $category->id==$vacant_detail->category_id?'selected' : '' }} >{{$category->category_name}}</option>
                                @endif
                                @endforeach
                            </select>
                            <hr>
                          </div>

                          <div class="col-md-12">
                            <label for="vacantname" class="form-label card-title" style="font-size:15px;">Job Vacant Name <font style="color:red;">*</font></label>
                            <input type="text" class="form-control" id="vacantname" value="{{$vacant_detail->vacant_name}}" name="vacant_name" style="border:1px solid #333;height:40px;font-size:13px" required>
                            <hr>
                          </div>

                          <div class="col-md-12">
                            <label for="fromDate" class="form-label" id="font-f">Job Short text <font style="color:red;">*</font></label><br>
                              <textarea name="vacant_shortxt" class="form-control" rows="4" cols="10" style="border:1px solid #333;" required>{{$vacant_detail->vacant_shortxt}}</textarea>
                              <hr>
                            </div>

                            <div class="col-md-12">
                                <label for="fromDate" class="form-label" id="font-f">Job Description <font style="color:red;">*</font></label><br>
                                <div id="deseditor" style="height: 500px;">{!!$vacant_detail->vacant_description!!}</div>

                                <input type="hidden" name="vacant_description" value="{{$vacant_detail->vacant_description}}" id="jobrequired" required>
                                <hr>
                            </div>

                          <div class="col-md-12">
                            <img src="{{ $vacant_detail->vacant_banner ? asset('storage/uploads/jobvacants/' . $vacant_detail->vacant_banner) : asset('assets/img/notfound.jpg') }}" class="img-fluid" style="width:200px;height:100px;">
                            <hr>
                              <label for="categorybanner" class="form-label card-title" style="font-size:15px;">Vacant Banner image
                                 </label>&nbsp;&nbsp;
                              <label for="my_file">
                                <i class="la la-file-upload btn btn-primary btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="category banner click the button." style="font-size: 25px;"></i>
                              </label>
                              <input type="file" id="my_file" style="display: none;" name="vacant_banner"/>
                              <input type="hidden" value="{{ $vacant_detail->vacant_banner }}" name="banner_old"/>
                          </div>

                          <div class="col-md-12">
                              <div id="image_preview"></div>
                              <font style="color:#8d8c8c;" id="font-s">Recommend width:1500px height:300px<br>
                              File type accept JPG,PNG,JPEG,GIF.
                              </font>
                              <hr style="background-color: red;">
                          </div>

                          <div class="col-md-12">
                            <img src="{{ $vacant_detail->vacant_image ? asset('storage/uploads/jobvacants/' . $vacant_detail->vacant_image) : asset('assets/img/notfound.jpg') }}" class="img-fluid" style="width:200px;height:100px;"><hr>
                              <label for="inputName5" class="form-label card-title" style="font-size:15px;">Vacant tumbnail image</label>
                              &nbsp;&nbsp;<label for="my_file1">
                                <i class="la la-file-upload btn btn-primary btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="category tumbnail click the button." style="font-size: 25px;"></i>
                              </label>
                              <input type="file" id="my_file1" style="display: none;" name="vacant_image"/>
                              <input type="hidden" value="{{ $vacant_detail->vacant_image }}" name="tumb_old"/>
                          </div>

                          <div class="col-md-12">
                              <div id="image_preview_tumb"></div>
                              <font style="color:#8d8c8c;" id="font-s">Recommend width:250px height:300px<br>
                                  File type accept JPG,PNG,JPEG,GIF.
                              </font>
                              <hr>
                          </div>

                          <div class="col-md-12">
                          <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" name="status" value="online" {{ $vacant_detail->status == 'online' ? 'checked' : '' }}>
                            <label for=" {{$vacant_detail->status=='online' ? 'online' : 'offline'}}">  {{$vacant_detail->status=='online' ? 'online' : 'offline'}}</label>
                            <br>
                          </div>
                          </div>
                    </div>
            </div>
            <div class="modal-footer">
                @if (Auth()->user()->role=='1')
                <button type="submit" class="btn btn-primary" id   ="btn-create">Save changes</button>
                @endif

             </div>
        </div>
    </form>
    </div>
    <div class="col-lg-3"></div>
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
                    text: 'Please select at least one category to delete!',
                });
                return;
            }

            // Use SweetAlert for confirmation
            Swal.fire({
                title: 'Are you sure?',
                text: 'Do you want to delete selected categories?',
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
