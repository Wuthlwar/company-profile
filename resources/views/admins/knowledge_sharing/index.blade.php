@extends('admins.app')
@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="d-flex flex-wrap align-items-center justify-content-between mb-4">
            <div>
                <h4 class="mb-3">Knowledge Sharing</h4>

            </div>
            {{-- <a href="page-add-return.html" class="btn btn-primary add-list"><i class="las la-plus mr-3"></i>Add</a> --}}
            {{-- <button type="button" class="btn btn-primary mt-2" data-toggle="modal" data-target="#gallery"><i class="las la-plus mr-3"></i>Add</button> --}}

        </div>
    </div>
    @if (Auth()->user()->role=='1' || Auth()->user()->role=='2')
    <div class="col-lg-4">
        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
        <form id="Form" action="{{ route('knowledge_sharing.store') }}" method="post" enctype="multipart/form-data" class="row g-3">
            @csrf
            <div class="modal-body">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between rounded-sm">
                            <div class="header-title">
                                <h4 class="mb-4">Knowledge Sharing List</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="name" class="form-label card-title" style="font-size:15px;">
                                        Name <font style="color:red;">*</font>
                                    </label>
                                    <input type="text" class="form-control" id="name" name="name" style="border:1px solid #333;height:40px;font-size:13px" required>
                                    <br>
                                </div>
                            </div>

                            <div class="row" style="border: #464747;">
                                <div class="col-md-12">
                                    <label for="media" class="form-label">Social Media <font style="color:red;">*</font></label>
                                    <select id="media" class="form-control mb-3" name="media" style="border:1px solid #333;height:40px;font-size:13px" required>
                                        <option value="" selected>Select Your Social Media</option>
                                        <option value="Youtube">Youtube</option>
                                        <option value="Facebook">Facebook</option>
                                        <option value="Instagram">Instagram</option>
                                        <option value="Telegram">Telegram</option>
                                        <option value="TikTok">TikTok</option>
                                        <option value="LinkedIn">LinkedIn</option>
                                        <option value="X">X (formerly Twitter)</option>
                                    </select>
                                    <br>

                                    <label for="link" class="form-label card-title" style="font-size:15px;">
                                        Link <font style="color:red;">*</font>
                                    </label>
                                    <input type="text" class="form-control" id="link" name="link" style="border:1px solid #333;height:40px;font-size:13px" required>
                                    <br>

                                    <label for="file" class="form-label card-title" style="font-size:15px;">
                                        Cover <font style="color:red;">*</font>
                                    </label>
                                    <div>
                                        <label for="file" class="file-label">
                                           Upload Cover Image <i class="la la-file-upload btn btn-primary btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="category thumbnail click the button." style="font-size: 25px;"></i>
                                            <img id="preview-image" src="#" alt="Your image" style="display:none; width:300px; border:1px solid #333; cursor:pointer;">
                                        </label><br>
                                        <button type="button" id="remove-image" class="btn btn-danger" style="display:none; margin-left:10px;">Remove</button>
                                    </div>
                                    <input type="file" class="form-control" id="file" name="file" style="border:1px solid #333;height:40px;display:none;">
                                    <div id="error-message" class="text-danger mt-2" style="display: none;">
                                        Please upload your image.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="reset" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary" id="btn-create">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div>
@endif
@if (Auth()->user()->role=='1' || Auth()->user()->role=='2')
    <div class="col-lg-8 col-md-8">
        @else
        <div class="col-lg-12 col-md-12">
@endif

        <form action="{{ route('searchknowledge.search') }}" method="post" class="row g-3 card-title" style="margin: 10px; font-size: 12px;">
            @csrf
            @method('post')

            <div class="col-md-3">
                <label for="fromDate" class="form-label">From Date </label>
                <input type="date" class="form-control" id="fromDate" name="start_date" style="border:1px solid #076b45;height:30px;font-size:13px;" value="{{ session('start_date') ? session('start_date') : date('Y-m-d') }}">
              </div>

              <div class="col-md-3">
                <label for="toDate" class="form-label">To Date</label>
                <input type="date" class="form-control" id="toDate" name="end_date" style="border:1px solid #333;height:30px;font-size:13px" value="{{ session('end_date') ? session('end_date') : date('Y-m-d')}}">
              </div>

              <div class="col-md-3">
                  <label for="cateGory" class="form-label">Name</label>
                  <input type="text" class="form-control" id="cateGory" name="name" value="{{session('name')}}" style="border:1px solid #333;height:30px;font-size:13px">
              </div>

              <div class="col-md-3">
                <label for="media" class="form-label">Social Media <font style="color:red;">*</font></label>
                <select id="mediasear" class="form-control mb-3" name="media" style="border:1px solid #333;height:30px;font-size:13px" required>
                    <option value="" selected>Select Your Social Media</option>
                    <option value="Youtube">Youtube</option>
                    <option value="Facebook">Facebook</option>
                    <option value="Instagram">Instagram</option>
                    <option value="Telegram">Telegram</option>
                    <option value="TikTok">TikTok</option>
                    <option value="LinkedIn">LinkedIn</option>
                    <option value="X">X (formerly Twitter)</option>
                </select>
                </div>

            <div class="col-md-3">
                <label for="search" class="form-label" style="color: #fff;">Search</label><br>
                <button type="submit" class="btn btn-primary" style="border: 1px solid #333; height: 30px; font-size: 13px; padding: 5px;">
                    <i class="bi bi-search"></i>&nbsp;Search
                </button> &nbsp;|&nbsp;
                <a href="{{ route('knowledge_sharing.index') }}" class="btn" style="border: 1px solid #333; height: 30px; font-size: 13px; padding: 5px;">
                    <i class="bi bi-x"></i> Reset
                </a>
            </div>
        </form>
        <div class="table-responsive rounded mb-3">
            <div class="table-responsive rounded mb-3">
                <form id="deleteForm" action="{{ route('knowledge_sharing.bulk_delete') }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <table class="table table-striped" id="statusForm">
                        <thead class="bg-white text-uppercase">
                            <tr class="ligth ligth-data">
                                <tr>
                                @if (Auth()->user()->role=='1' || Auth()->user()->role=='2')
                                @if (count($knowledgeSharings)>0)
                                <th scope="col" class="card-title" style="font-size: 15px;"><input type="checkbox" id="select-all"></th>
                                @endif
                                @endif
                                <th scope="col" class="card-title" style="font-size: 15px;">#</th>
                                @if (Auth()->user()->role=='1' || Auth()->user()->role=='2')
                                <th scope="col" class="card-title" style="font-size: 15px;">Edit</th>
                                @endif
                                <th scope="col" class="card-title" style="font-size: 15px;">Name</th>
                                <th scope="col" class="card-title" style="font-size: 15px;">Social Media</th>
                                <th scope="col" class="card-title" style="font-size: 15px;">Link</th>
                                <th scope="col" class="card-title" style="font-size: 15px;">Cover Image</th>
                                <th scope="col" class="card-title" style="font-size: 15px;">Created Date</th>
                            </tr>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($knowledgeSharings as $index => $sharing)
                                <tr id="font-s">
                                    @if (Auth()->user()->role=='1' || Auth()->user()->role=='2')
                                    <th scope="row">
                                    <input type="checkbox" name="ids[]" value="{{ $sharing->id }}" class="select-item">
                                    </th>
                                    @endif
                                    <th>{{ $index + 1 }}</th>
                                    @if (Auth()->user()->role=='1' || Auth()->user()->role=='2')
                                    <th><a href="{{route('knowledge_sharing.edit',$sharing->id)}}">Edit</a></th>
                                    @endif
                                    <th>{{ $sharing->name }}</th>
                                    <th>{{ $sharing->media }}</th>
                                    <th><a href="{{ $sharing->link }}" target="_blank">{{ Str::limit($sharing->link,30,'...') }}</a></th>
                                    <th>
                                        @if($sharing->file)
                                        <a href="" style="font-size: 25px;color:#312eec;" data-toggle="modal" data-target="#jobupdateModal{{$sharing->id}}">
                                            <img src="{{ asset('storage/uploads/knowledge/' . $sharing->file) }}" alt="Cover Image" class="img-thumbnail" style="width: 100px;"></a>
                                        @else
                                            No Image
                                        @endif
                                    </th>
                                    <th>{{$sharing->created_at->format('d-m-y')}}<br> {{$sharing->created_at->diffForHumans()}}</th>
                                </tr>

                                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"  aria-hidden="true" id='jobupdateModal{{$sharing->id}}'>
                                    <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                            @csrf
                                            @method('PUT')
                                        <div class="modal-body">
                                                <div class="col-sm-12">
                                                    <div class="card">
                                                        @if($sharing->file)
                                                            <img src="{{ asset('storage/uploads/knowledge/' . $sharing->file) }}" alt="Cover Image" class="img-thumbnail"></a>
                                                            @else
                                                            No Image
                                                        @endif
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            @endforeach
                            <th colspan="3">
                                @if (Auth()->user()->role=='1' && count($knowledgeSharings)>0)
                                <button type="submit" class="btn btn-danger mt-3" style="font-size: 13px;">Delete Selected</button>
                                @endif
                            </th>

                            <th colspan="5"></th>
                            </tr>
                        </form>
                        </tbody>
                    </table>
                    {{$knowledgeSharings->links('pagination::bootstrap-4')}}
            </div>

        </div>

    </div>
</div>

{{-- Create Modal  --}}

<style>

#drop-area {
    border: 2px dashed #ccc;
    border-radius: 10px;
    padding: 20px;
    cursor: pointer;
}

#drop-area.highlight {
    border-color: #333;
}

#imagePreview img {
    height: 100px;
    margin-right: 10px;
    margin-bottom: 10px;
    border: 1px solid #333;
    padding: 5px;
    position: relative;
}

.preview-container {
    position: relative;
    margin-bottom: 10px;
}

.remove-btn {
    position: absolute;
    top: 5px;
    right: 5px;
    background-color: #ff0000;
    color: #fff;
    border: none;
    border-radius: 50%;
    /* width: 20px;
    height: 20px; */
    cursor: pointer;
    font-size: 12px;
    line-height: 10px;
    text-align: center;
}

</style>

@endsection
@section('script')
<script>
$(document).ready(function() {
    $('#media').select2({
        theme: 'bootstrap4',
        placeholder: 'Choose Your Social Media',
        width: '100%'
    });

    $('#mediasear').select2({
        theme: 'bootstrap4',
        placeholder: 'Choose Your Social Media',
        width: '100%'
    });

    });
</script>
<script>
    // Select/Deselect all checkboxes
    document.getElementById('select-all').addEventListener('click', function(event) {
        let checkboxes = document.querySelectorAll('.select-item');
        checkboxes.forEach(checkbox => {
            checkbox.checked = event.target.checked;
        });
    });
</script>


<script>
// Trigger file input when the preview image or upload icon is clicked
document.querySelector('.file-label').addEventListener('click', function() {
    document.getElementById('file').click();
});

// Handle image preview, show the remove button, and clear the error message
document.getElementById('file').addEventListener('change', function(event) {
    var fileInput = event.target;
    var reader = new FileReader();

    reader.onload = function() {
        var output = document.getElementById('preview-image');
        output.src = reader.result;
        output.style.display = 'block';
        document.getElementById('remove-image').style.display = 'inline-block';
        document.getElementById('error-message').style.display = 'none'; // Hide error message
        fileInput.setCustomValidity('');
    };

    if (fileInput.files[0]) {
        reader.readAsDataURL(fileInput.files[0]);
    } else {
        fileInput.setCustomValidity('Please select an image file.');
    }
});

// Remove the preview image, reset the file input, and show the error message
document.getElementById('remove-image').addEventListener('click', function() {
    var fileInput = document.getElementById('file');
    document.getElementById('preview-image').src = '#';
    document.getElementById('preview-image').style.display = 'none';
    fileInput.value = '';
    document.getElementById('remove-image').style.display = 'none';
    document.getElementById('error-message').style.display = 'block'; // Show error message
    fileInput.setCustomValidity('Please select an image file.');
});

// Validate on form submission to ensure an image is selected
document.getElementById('Form').addEventListener('submit', function(event) {
    var fileInput = document.getElementById('file');

    if (!fileInput.files.length) {
        event.preventDefault(); // Prevent form submission
        document.getElementById('error-message').style.display = 'block'; // Show error message
        fileInput.setCustomValidity('Please select an image file.'); // Set custom validity
    } else {
        document.getElementById('error-message').style.display = 'none'; // Hide error message
        fileInput.setCustomValidity(''); // Clear custom validity
    }
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


@endsection
