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
    <div class="col-lg-4">
        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
        <form id="Form" action="{{ route('knowledge_sharing.update',$knowledge->id) }}" method="post" enctype="multipart/form-data" class="row g-3">
            @csrf
            @method('PUT')
            <div class="modal-body">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between rounded-sm">
                            <div class="header-title">
                                <h6 class="card-title">Add New Knowledge Sharing</h6>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="name" class="form-label card-title" style="font-size:15px;">
                                        Name <font style="color:red;">*</font>
                                    </label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{$knowledge->name}}"  style="border:1px solid #333;height:40px;font-size:13px" required>
                                    <br>
                                </div>
                            </div>

                            <div class="row" style="border: #464747;">
                                <div class="col-md-12">
                                    <label for="media" class="form-label">Social Media <font style="color:red;">*</font></label>
                                    <select id="media" class="form-control mb-3" name="media" style="border:1px solid #333;height:40px;font-size:13px" required>
                                        <option value="Youtube" {{$knowledge->media=='Youtube' ? 'selected' : ''}}>Youtube</option>
                                        <option value="Facebook" {{$knowledge->media=='Facebook' ? 'selected' : ''}}>Facebook</option>
                                        <option value="Instagram" {{$knowledge->media=='Instagram' ? 'selected' : ''}}>Instagram</option>
                                        <option value="Telegram" {{$knowledge->media=='Telegram' ? 'selected' : ''}}>Telegram</option>
                                        <option value="TikTok" {{$knowledge->media=='TikTok' ? 'selected' : ''}}>TikTok</option>
                                        <option value="LinkedIn" {{$knowledge->media=='LinkedIn' ? 'selected' : ''}}>LinkedIn</option>
                                        <option value="X" {{$knowledge->media=='X' ? 'selected' : ''}}>X (formerly Twitter)</option>
                                    </select>
                                    <br>
                                    <label for="link" class="form-label card-title" style="font-size:15px;">
                                        Link <font style="color:red;">*</font>
                                    </label>
                                    <input type="text" class="form-control" id="link" name="link" value="{{$knowledge->link}}" style="border:1px solid #333;height:40px;font-size:13px" required>
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
                                    {{-- <div id="error-message" class="text-danger mt-2" style="display: none;">
                                        Please upload your image.
                                    </div> --}}
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" id="btn-create">Save Changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div>

    <div class="col-lg-6">
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between">
                <h5>{{ $knowledge->name }}</h5>
            </div>
            <div class="card-body">
                <div class="row">

                        <div class="col-md-12">
                            <div class="card mb-3">
                                <img src="{{ asset('storage/uploads/knowledge/' . $knowledge->file) }}" class="card-img-top" alt="Gallery Image">
                                <div class="card-body">
                                    <a href="{{ $knowledge->link }}" target="_blank">{{ $knowledge->link }}</a>
                                </div>
                            </div>
                        </div>

                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-2"></div>
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
// document.getElementById('Form').addEventListener('submit', function(event) {
//     var fileInput = document.getElementById('file');

//     if (!fileInput.files.length) {
//         event.preventDefault(); // Prevent form submission
//         document.getElementById('error-message').style.display = 'block'; // Show error message
//         fileInput.setCustomValidity('Please select an image file.'); // Set custom validity
//     } else {
//         document.getElementById('error-message').style.display = 'none'; // Hide error message
//         fileInput.setCustomValidity(''); // Clear custom validity
//     }
// });

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
