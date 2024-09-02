@extends('admins.app')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="d-flex flex-wrap align-items-center justify-content-between mb-4">
            <div>
                <h4 class="mb-3">Job Categories List</h4>

            </div>
            {{-- <a href="page-add-return.html" class="btn btn-primary add-list"><i class="las la-plus mr-3"></i>Add</a> --}}
            <button type="button" class="btn btn-primary mt-2" data-toggle="modal" data-target="#jobModal"><i class="las la-plus mr-3"></i>Add</button>

        </div>
    </div>
    <div class="col-lg-12 col-md-12">
                <!-- Multi Columns Form -->
                <form action="{{route('category.search')}}" method="post" class="row g-3 card-title" style="margin: 10px;font-size:12px;">
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
                        <input type="text" class="form-control" id="cateGory" name="category_name" value="{{session('category_name')}}" style="border:1px solid #333;height:30px;font-size:13px">
                    </div>

                    <div class="col-md-2">
                        <label for="cateGory" class="form-label">Status</label>
                        <select id="inputState" class="form-control mb-3" name="status" style="border:1px solid #333;height:30px;font-size:13px">
                            <option value="online" {{session('status')=='online' ?'selected':''}}>Online</option>
                            <option value="offline" {{session('status')=='offline' ?'selected':''}}>Offline</option>
                          </select>
                    </div>
`
                    <div class="col-md-2">
                        <label for="inputZip" class="form-label" style="color: #fff;">Search</label><br>
                        <button type="submit" class="btn btn-primary" style="border:1px solid #333;height:30px;font-size:13px;padding:5px;">
                            <i class="bi bi-search"></i>&nbsp;Search</button> &nbsp;|&nbsp;
                            <button type="button" class="btn" style="border:1px solid #333;height:30px;font-size:13px;padding:5px;">
                            <font  style="font-size: 13px;"><a href="{{route('Job_categories.index')}}"><i class="bi bi-x"></i> Reset</a></font>
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
            <thead class="bg-white text-uppercase">
                <tr class="ligth ligth-data">
                    <tr>
                        <th scope="col" class="card-title" style="font-size: 15px;">No</th>
                        <th scope="col" class="card-title" style="font-size: 15px;">
                        @if (Auth()->user()->role=='1')
                        <input type="checkbox" id="select-all" class="form-check-input" style="border:1px solid #312eec;"> Bulk actions
                        @else
                        Bulk actions
                        @endif
                        </th>
                        <th scope="col" class="card-title" style="font-size: 15px;">Category Banner</th>
                        <th scope="col" class="card-title" style="font-size: 15px;">Category tumbnail</th>
                        <th scope="col" class="card-title" style="font-size: 15px;">Category</th>
                        <th scope="col" class="card-title" style="font-size: 15px;">Status</th>
                        <th scope="col" class="card-title" style="font-size: 15px;">Job roles</th>
                        <th scope="col" class="card-title" style="font-size: 15px;">Created Date</th>
                        <th scope="col" class="card-title" style="font-size: 15px;">Updated Date</th>
                      </tr>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                <tr id="font-s">
                    <th scope="row">{{($categories->currentPage()-1)*$categories->perPage()+$loop->index+1}}.</th>
                    <th scope="row">
                        <span class="d-flex align-items-center">
                        @if (Auth()->user()->role=='1')
                        <input type="checkbox" name="selected_items[]" value="{{ $category->id }}" class="item-checkbox form-check-input" style="border:1px solid #312eec;">
                        &nbsp;&nbsp;&nbsp;
                        <a href="{{route('Job_categories.edit',$category->id)}}"><i class="la la-eye" style="font-size: 25px;color:#312eec;"></i></a>
                        @elseif(Auth()->user()->role=='2' || Auth()->user()->role=='3')
                        <i class="la la-eye" style="font-size: 25px;color:#312eec;" data-toggle="modal" data-target="#jobupdateModal{{$category->id}}"></i>
                        @endif
                        </span>
                    </th>

                    <td>
                        <img src="{{ $category->category_banner ? asset('storage/uploads/jobvacants/' . $category->category_banner) : asset('assets/img/notfound.jpg') }}" class="img-fluid" style="width:100px;height:50px;">
                    </td>
                    <td>
                        <img src="{{ $category->category_image ? asset('storage/uploads/jobvacants/' . $category->category_image) : asset('assets/img/notfound.jpg') }}" class="img-fluid" style="width:100px;height:50px;">
                    </td>
                    <td>{{$category->category_name}}</td>
                    <td>
                        <div class="form-check form-switch">
                            @method('POST')
                                <div class="form-check form-switch" id="noti">
                                    @if (Auth()->user()->role=='1' || Auth()->user()->role=='2')
                                    <input class="form-check-input" type="checkbox" name="status" value="{{$category->status=='online' ? 'offline' : 'online'}}" {{$category->status=='online' ? 'checked' : ''}} id="status{{$category->id}}" data-category-id="{{$category->id}}">
                                    @endif
                                    {{$category->status=='online' ? 'online' : 'offline'}}
                                </div>
                        </div>
                    </td>

                    <td>
                        @foreach ( getJobrole($category->id) as $job_role)
                        {{ $job_role->job_role }},
                         @endforeach
                    </td>
                    <td>{{$category->date}}</td>
                    <td>{{$category->updated_at}}</td>
                  </tr>
                  <!------------------------------------Update----------------------------------------------->
                        {{-- Create Modal  --}}
                        {{-- <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"  aria-hidden="true" id='jobupdateModal{{$category->id}}'>
                            <div class="modal-dialog modal-lg">
                            <div class="modal-content">

                                <form action="{{ route('Job_categories.update', $category->id) }}" method="post" enctype="multipart/form-data" class="row g-3">
                                    @csrf
                                    @method('PUT')
                                <div class="modal-body">
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
                                                                <label for="my_file{{$category->id}}">
                                                                    <i class="la la-file-upload btn btn-primary btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="category banner click the button." style="font-size: 25px;"></i>
                                                                </label>
                                                                <input type="file" id="my_file{{$category->id}}" style="display: none;" name="category_banner"/>
                                                                <input type="hidden" value="{{ $category->category_banner }}" name="banner_old"/>
                                                            </div>

                                                            <div class="col-md-12">
                                                                <div id="image_previewUp{{$category->id}}"></div>
                                                                <font style="color:#8d8c8c;" id="font-s">Recommend width:1500px height:300px<br>
                                                                    File type accept JPG,PNG,JPEG,GIF.
                                                                </font>
                                                                <hr style="background-color: red;">
                                                            </div>

                                                            <div class="col-md-12">
                                                                <img src="{{ $category->category_image ? asset('storage/uploads/jobvacants/' . $category->category_image) : asset('assets/img/notfound.jpg') }}" class="img-fluid" style="width:200px;height:100px;"><r>
                                                                <label for="inputName5" class="form-label card-title" style="font-size:15px;">Category Thumbnail image</label>&nbsp;&nbsp;
                                                                <label for="my_file1{{$category->id}}">
                                                                    <i class="la la-file-upload btn btn-primary btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="category thumbnail click the button." style="font-size: 25px;"></i>
                                                                </label>
                                                                <input type="file" id="my_file1{{$category->id}}" style="display: none;" name="category_image"/>
                                                                <input type="hidden" value="{{ $category->category_image }}" name="tumb_old"/>
                                                            </div>

                                                            <div class="col-md-12">
                                                                <div id="image_preview_tumbUp{{$category->id}}"></div>
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

                                                            <div class="col-md-12">
                                                                @foreach ( getJobrole($category->id) as $job_role)
                                                                <span class="badge bg-primary" style="font-size: 16px;">
                                                                <i class="las la-trash" style="color: rgb(243, 2, 2); font-size: 16px; cursor: pointer;"
                                                                onclick="confirmDelete('{{ route('job_roles.delete', $job_role->id) }}')"></i>{{ $job_role->job_role }}
                                                                </span>
                                                                 @endforeach
                                                            </div>

                                                            <div class="col-md-12">
                                                                <label for="fromDate" class="form-label" id="font-f">Add New Job Roles</label>
                                                                <h5 class="card-title" style="font-size:15px;">Job Role Name</h5>
                                                                <input type="text" class="form-control" name="job_role1[]" style="border:1px solid #333;height:40px;font-size:13px" required>

                                                                <br>
                                                                <div id="showquestionedit{{$category->id}}"></div>
                                                                <br>
                                                                <i class="btn btn-success addbtnedit" id="addbtnedit{{$category->id}}" data-count="0">Add Job Role</i>
                                                                <hr>
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
                                </div>
                                </form>
                            </div>
                            </div>
                        </div> --}}
                  <!----------------------------------------------------------------------------------->
                @endforeach
                <tr>
                    <td></td>
                    <td colspan="7">
                        @if (Auth()->user()->role=='1' && count($categories)>0)
                        <button type="button" class="btn btn-danger rounded-pill" id="delete-button" style="height:30px;width:80px;font-size:13px;padding:5px;">Delete</button>
                        @endif
                    </td>
                </tr>
            </tbody>
        </table>
        {{$categories->links('pagination::bootstrap-4')}}
        </div>
    </div>
</div>

{{-- Create Modal  --}}
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"  aria-hidden="true" id='jobModal'>
    <div class="modal-dialog modal-lg">
       <div class="modal-content">

          <form action="{{route('Job_categories.store')}}" method="post" enctype="multipart/form-data" class="row g-3">
            @csrf
          <div class="modal-body">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between rounded-sm">
                            <div class="header-title">
                                <h6 class="card-title">Add New Job Category</h6>
                            </div>
                        </div>
                        <div class="card-body">

                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="categoryname" class="form-label card-title" style="font-size:15px;">Category Name <font style="color:red;">*</font></label>
                                        <input type="text" class="form-control" id="categoryname" name="category_name" style="border:1px solid #333;height:40px;font-size:13px" required>
                                        <hr>
                                      </div>

                                      <div class="col-md-12">
                                          <label for="categorybanner" class="form-label card-title" style="font-size:15px;">Category Banner image
                                             </label>&nbsp;&nbsp;
                                          <label for="my_file">
                                            <i class="la la-file-upload btn btn-primary btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="category banner click the button." style="font-size: 25px;"></i>
                                          </label>
                                          <input type="file" id="my_file" style="display: none;" name="banner"/>
                                      </div>

                                      <div class="col-md-12">
                                          <div id="image_preview"></div>
                                          <font style="color:#8d8c8c;" id="font-s">Recommend width:1500px height:300px<br>
                                          File type accept JPG,PNG,JPEG,GIF.
                                          </font>
                                          <hr>
                                      </div>

                                      <div class="col-md-12">
                                          <label for="inputName5" class="form-label card-title" style="font-size:15px;">Category tumbnail image</label>
                                          &nbsp;&nbsp;<label for="my_file1">
                                            <i class="la la-file-upload btn btn-primary btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="category tumbnail click the button." style="font-size: 25px;"></i>
                                          </label>
                                          <input type="file" id="my_file1" style="display: none;" name="tumb"/>
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
                                         <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" name="status" value="online">Online
                                      </div>
                                      <hr>
                                      </div>

                                      <div class="col-md-12">
                                        <label for="fromDate" class="form-label" id="font-f">Add New Job Roles</label>
                                        <h5 class="card-title" style="font-size:15px;">Job Role Name</h5>
                                        <input type="text" class="form-control" id="job_role" name="job_role[]" style="border:1px solid #333;height:40px;font-size:13px" required>

                                        <br>
                                            <div  id="showquestion">
                                            </div>
                                            <br>
                                             <i class="btn btn-success" id="addbtn"> Add Job Role</i>
                                        <hr>
                                    </div>


                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" id   ="btn-create">Save changes</button>
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

{{-- <script>
$(document).ready(function () {
    var max_fields = 5;

    $('.addbtnedit').on('click', function(){
        var x = $(this).data('count') || 0;
        if (x < max_fields) {
            x++;
            $(this).data('count', x);

            var wrapperquestion = `
                <div class="row">
                    <div class="col-md-10">
                        <h5 class="card-title" style="font-size:15px;">Job Role Name</h5>
                        <input type="text" class="form-control" name="job_role1[]" style="border:1px solid #333;height:40px;font-size:13px" required>
                    </div>
                    <div class="col-md-2">
                        <br>
                        <i class="las la-minus-circle removebtnedit" style="color:red;font-size:27px; cursor:pointer;"></i>
                    </div>
                    <div class="col-md-12">
                        <hr>
                    </div>
                </div>
            `;

            $(this).siblings(`#showquestionedit${$(this).attr('id').replace('addbtnedit', '')}`).append(wrapperquestion);
        } else {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Maximum fields limit reached!',
            });
        }
    });

    $(document).on('click', '.removebtnedit', function(){
        var addBtn = $(this).closest('.modal-content').find('.addbtnedit');
        var x = addBtn.data('count') || 0;
        $(this).closest('.row').remove();
        addBtn.data('count', --x);
    });
});
</script> --}}

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
                        url: "{{ route('destroyCategory.delete') }}",
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
</script>
@endsection
