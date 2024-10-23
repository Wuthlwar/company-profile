@extends('admins.app')
@section('content')
<div class="row">
    <div class="col-md-3"></div>

    <div class="col-md-6">
        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
        <form action="{{ route('Job_categories.update', $category->id) }}" method="post" enctype="multipart/form-data" class="row g-3">
            @csrf
            @method('PUT')

                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between rounded-sm">
                            <div class="header-title">
                                <h6 class="card-title">Update Job Category</h6>
                            </div>
                        </div>
                        <div class="card-body">

                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="categoryname" class="form-label card-title" style="font-size:15px;">Category Name <font style="color:red;">*</font></label>
                                        <input type="text" class="form-control" id="categoryname" name="category_name" style="border:1px solid #333;height:40px;font-size:13px" value="{{$category->category_name}}" required>
                                        <hr>
                                    </div>
                                    <div class="col-md-12">
                                        <img src="{{ $category->category_banner ? asset('storage/uploads/jobvacants/' . $category->category_banner) : asset('assets/img/notfound.jpg') }}" class="img-fluid" style="width:200px;height:100px;">
                                        <hr>
                                        <label for="categorybanner" class="form-label card-title" style="font-size:15px;">Category Banner image</label>&nbsp;&nbsp;
                                        <label for="my_file">
                                            <i class="la la-file-upload btn btn-primary btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="category banner click the button." style="font-size: 25px;"></i>
                                        </label>
                                        <input type="file" id="my_file" style="display: none;" name="category_banner"/>
                                        <input type="hidden" value="{{ $category->category_banner }}" name="banner_old"/>
                                    </div>

                                    <div class="col-md-12">
                                        <div id="image_preview"></div>
                                        <font style="color:#8d8c8c;" id="font-s">Recommend width:1500px height:300px<br>
                                            File type accept JPG,PNG,JPEG,GIF.
                                        </font>
                                        <hr style="background-color: red;">
                                    </div>

                                    <div class="col-md-12">
                                        <img src="{{ $category->category_image ? asset('storage/uploads/jobvacants/' . $category->category_image) : asset('assets/img/notfound.jpg') }}" class="img-fluid" style="width:200px;height:100px;"><r>
                                        <label for="inputName5" class="form-label card-title" style="font-size:15px;">Category Thumbnail image</label>&nbsp;&nbsp;
                                        <label for="my_file1">
                                            <i class="la la-file-upload btn btn-primary btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="category thumbnail click the button." style="font-size: 25px;"></i>
                                        </label>
                                        <input type="file" id="my_file1" style="display: none;" name="category_image"/>
                                        <input type="hidden" value="{{ $category->category_image }}" name="tumb_old"/>
                                    </div>

                                    <div class="col-md-12">
                                        <div id="image_preview_tumb"></div>
                                        <font style="color:#8d8c8c;" id="font-s">Recommend width:250px height:300px<br>
                                            File type accept JPG,PNG,JPEG,GIF.
                                        </font>
                                        <hr>
                                    </div>

                                    <div class="col-md-12">
                                        <label for="status" class="form-label card-title" style="font-size:15px;">Status</label>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" name="status" value="online" {{ $category->status == 'online' ? 'checked' : '' }}>
                                            <label for="{{$category->status=='online' ? 'online' : 'offline'}}">  {{$category->status=='online' ? 'online' : 'offline'}}</label>
                                            <br>
                                        </div>
                                        <hr>
                                    </div>
                                    @if (Auth()->user()->role=='1' || Auth()->user()->role=='2')
                                    <div class="col-md-12">
                                        <label for="fromDate" class="form-label" id="font-f">Add New Job Roles</label>

                                        <div id="showquestion"></div>
                                        <br>
                                        <i class="btn btn-success addbtn" id="addbtn" data-count="0">Add Job Role</i>
                                        <hr>
                                    </div>
                                    @endif
                                    <div class="col-md-12">
                                        @foreach ( getJobrole($category->id) as $job_role)
                                        <span class="badge bg-primary" style="font-size: 16px;">
                                        @if (Auth()->user()->role=='1' || Auth()->user()->role=='2')
                                        <i class="las la-trash" style="color: rgb(243, 2, 2); font-size: 16px; cursor: pointer;"
                                        onclick="confirmDelete('{{ route('job_roles.delete', $job_role->id) }}')"></i>
                                        @endif
                                        {{ $job_role->job_role }}
                                        </span>
                                         @endforeach
                                    </div>

                                </div>
                        </div>
                        <div class="modal-footer">
                            @if (Auth()->user()->role=='1' || Auth()->user()->role=='2')
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" id   ="btn-create">Save changes</button>
                            @endif
                        </div>
                    </div>
                </div>

        </form>
    </div>
    <div class="col-md-3"></div>
</div>
@endsection

@section('script')
<script>
    $(document).ready(function (){
        var max_fields = 5;
        var x = 0;

        $('#addbtn').on('click',function(){
            if(x<max_fields){
                x++;
                console.log(x);
                var wrapperquestion =`
                        <div class="row">
                                <div class="col-md-10">
                                <h5 class="card-title" style="font-size:15px;">Job Role Name</h5>
                            <input type="text" class="form-control" id="job_role" name="job_role[]" style="border:1px solid #333;height:40px;font-size:13px" required></div>
                            <div class="col-md-2">
                                <br>
                            <i class="las la-minus-circle removebtn" style="color:red;font-size:27px;"></i>
                            </div>
                            <div class="col-md-12">
                                <hr>
                            </div>
                        </div>
                `;
                $('#showquestion').append(wrapperquestion);
            }else{
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Maximum fields limit reached!',
                });
            }
        });

        $('#showquestion').on('click','.removebtn', function(){
            $(this).closest('.row').remove();
            x--;
        });
    });

</script>
<script>
    function confirmDelete(url) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = url;
            }
        })
    }
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
@endsection
