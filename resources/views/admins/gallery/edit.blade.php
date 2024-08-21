@extends('admins.app')
@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="d-flex flex-wrap align-items-center justify-content-between mb-4">
            <div>
                <h4 class="mb-3">Photo Gallery Edit Form</h4>

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
        <form id="galleryForm" action="{{ route('all_photo_gallery.update',$photoNames->id) }}" method="post" enctype="multipart/form-data" class="row g-3">
            @csrf
            @method('PUT')
            <div class="modal-body">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between rounded-sm">
                            <div class="header-title">
                                <h6 class="card-title">Edit Photo Gallery</h6>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="name" class="form-label card-title" style="font-size:15px;">
                                        Name <font style="color:red;">*</font>
                                    </label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{$photoNames->name}}" style="border:1px solid #333;height:40px;font-size:13px" required>
                                    <hr>
                                </div>
                            </div>

                            <div class="row" style="border: #464747;">
                                <div class="col-md-12">
                                    <label for="gallery" class="form-label card-title" style="font-size:15px;">
                                        Gallery <font style="color:red;">*</font>
                                    </label>
                                    <div id="drop-area" class="border border-dashed border-secondary p-3 text-center" onclick="document.getElementById('gallery').click();">
                                        <p>Drag and drop files here, or click to select files</p>
                                        တစ်ပုံထက်ပိုတွဲမည်ဆိုပါ Ctrl ကိုဖိထား၍ မိမိတွဲလိုပုံများကို click နှိပ်ပြီးတွဲနိုင်သည်။<br><br>
                                        <input type="file" id="gallery" name="gallery[]" multiple accept="image/*" class="d-none" onchange="handleFiles(this.files)">
                                    </div>
                                    <div id="imagePreview" class="mt-3 d-flex flex-wrap"></div>
                                    <hr>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> --}}
                            <button type="submit" class="btn btn-primary" id="btn-create">Save Changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <div class="col-lg-8">
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between">
                <h5>{{ $photoNames->name }}</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    @foreach (getGallery($photoNames->id) as $getG)
                        <div class="col-md-4">
                            <div class="card mb-3">
                                <img src="{{ asset('storage/' . $getG->file) }}" class="card-img-top" alt="Gallery Image">
                                <div class="card-body">
                                    {{-- <p class="card-text">Image {{ $loop->iteration }}</p> --}}
                                    <span class="badge" style="font-size: 16px;">
                                        <i class="las la-trash" style="color: rgb(243, 2, 2); font-size: 26px; cursor: pointer;"
                                        onclick="confirmDelete('{{ route('gallery_get.delete', $getG->id) }}')"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
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

let dropArea = document.getElementById('drop-area');
let galleryInput = document.getElementById('gallery');
let filesArray = [];

['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
    dropArea.addEventListener(eventName, preventDefaults, false);
});

['dragenter', 'dragover'].forEach(eventName => {
    dropArea.addEventListener(eventName, () => dropArea.classList.add('highlight'), false);
});

['dragleave', 'drop'].forEach(eventName => {
    dropArea.addEventListener(eventName, () => dropArea.classList.remove('highlight'), false);
});

dropArea.addEventListener('drop', handleDrop, false);

function preventDefaults(e) {
    e.preventDefault();
    e.stopPropagation();
}

function handleDrop(e) {
    let dt = e.dataTransfer;
    let files = dt.files;
    handleFiles(files);
}

function handleFiles(files) {
    files = Array.from(files);
    files.forEach(file => {
        filesArray.push(file);
        previewFile(file);
    });
    updateGalleryInput();
}

function previewFile(file) {
    let preview = document.getElementById('imagePreview');
    let reader = new FileReader();
    reader.onload = function(event) {
        let previewContainer = document.createElement('div');
        previewContainer.className = 'preview-container';

        let img = document.createElement('img');
        img.src = event.target.result;

        let removeButton = document.createElement('button');
        removeButton.className = 'remove-btn';
        removeButton.innerHTML = '&times;';
        removeButton.onclick = function() {
            removeImage(previewContainer, file);
        };

        previewContainer.appendChild(img);
        previewContainer.appendChild(removeButton);
        preview.appendChild(previewContainer);
    };
    reader.readAsDataURL(file);
}

function removeImage(previewContainer, file) {
    filesArray = filesArray.filter(f => f !== file);
    previewContainer.remove();
    updateGalleryInput();
}

function updateGalleryInput() {
    let dataTransfer = new DataTransfer();
    filesArray.forEach(file => {
        dataTransfer.items.add(file);
    });
    galleryInput.files = dataTransfer.files;
}

</script>

<script>
function selectAllGalleries(selectAllCheckbox) {
    const checkboxes = document.querySelectorAll('.gallery-checkbox');
    const selectAllInput = document.getElementById('select_all');
    checkboxes.forEach(checkbox => checkbox.checked = selectAllCheckbox.checked);
    selectAllInput.value = selectAllCheckbox.checked ? 'true' : 'false';
}
</script>

@endsection
