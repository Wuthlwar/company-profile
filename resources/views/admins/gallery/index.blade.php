@extends('admins.app')
@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="d-flex flex-wrap align-items-center justify-content-between mb-4">
            <div>
                <h4 class="mb-3">Photo Gallery</h4>
            </div>
            {{-- <a href="page-add-return.html" class="btn btn-primary add-list"><i class="las la-plus mr-3"></i>Add</a> --}}
            {{-- <button type="button" class="btn btn-primary mt-2" data-toggle="modal" data-target="#gallery"><i class="las la-plus mr-3"></i>Add</button> --}}

        </div>
    </div>
    @if (Auth()->user()->role=='1' || Auth()->user()->role=='2')
    <div class="col-lg-4 col-md-4">
        <form id="galleryForm" action="{{ route('all_photo_gallery.store') }}" method="post" enctype="multipart/form-data" class="row g-3">
            @csrf
            <div class="modal-body">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between rounded-sm">
                            <div class="header-title">
                                <h6 class="card-title">Add New Photo Gallery</h6>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="name" class="form-label card-title" style="font-size:15px;">
                                        Name <font style="color:red;">*</font>
                                    </label>
                                    <input type="text" class="form-control" id="name" name="name" style="border:1px solid #333;height:40px;font-size:13px" required>
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
                                        တစ်ပုံထက်ပိုတွဲမည်ဆိုပါက ပုံများကို Ctrl ကိုဖိထား၍ မိမိတွဲလိုပုံများကို click နှိပ်ပြီးတွဲနိုင်သည်။<br><br>
                                        <input type="file" id="gallery" name="gallery[]" multiple accept="image/*" class="d-none" onchange="handleFiles(this.files)">
                                    </div>

                                    <div id="error-message" class="text-danger mt-2" style="display: none;">
                                        Please select at least one image.
                                    </div>
                                    <div id="imagePreview" class="mt-3 d-flex flex-wrap"></div>
                                    <hr>
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
                <!-- Multi Columns Form -->
                <form action="{{ route('gallery.search') }}" method="post" class="row g-3 card-title" style="margin: 10px; font-size: 12px;">
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
                        <label for="search" class="form-label" style="color: #fff;">Search</label><br>
                        <button type="submit" class="btn btn-primary" style="border: 1px solid #333; height: 30px; font-size: 13px; padding: 5px;">
                            <i class="bi bi-search"></i>&nbsp;Search
                        </button> &nbsp;|&nbsp;
                        <a href="{{ route('all_photo_gallery.index') }}" class="btn" style="border: 1px solid #333; height: 30px; font-size: 13px; padding: 5px;">
                            <i class="bi bi-x"></i> Reset
                        </a>
                    </div>
                </form>

                  @if (session('success'))
                  <div class="alert alert-success">
                      {{ session('success') }}
                  </div>
              @endif

              <form id="deleteForm" action="{{ route('photoGalleries.deleteMultiple') }}" method="post">
                @csrf
                @method('DELETE')

                <input type="hidden" id="select_all" name="select_all" value="false">

                @foreach($photoNames as $photoName)
                    <div class="card mb-4">
                        <div class="card-header d-flex justify-content-between">
                            <h5>{{ $photoName->name }} <br><br>
                                @if (Auth()->user()->role=='1' || Auth()->user()->role=='2')
                                <a href="{{route('all_photo_gallery.edit',$photoName->id)}}">Edit</a>
                                @endif
                            </h5>
                            <p>
                                @if ($photoName->photoGalleries->isEmpty() && Auth()->user()->role=='1')
                                    <span class="badge" style="font-size: 16px;">
                                        <i class="las la-trash" style="color: rgb(243, 2, 2); font-size: 26px; cursor: pointer;"
                                           onclick="confirmDeleteonly('{{ route('photo_get.delete', $photoName->id) }}')"></i>
                                    </span>
                                @elseif (Auth()->user()->role=='1')
                                    <input type="checkbox" id="select-all-checkbox" onclick="selectAllGalleries(this)">&nbsp;&nbsp;Select All
                                @endif
                            </p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                @foreach($photoName->photoGalleries as $photoGallery)
                                    <div class="col-md-4">
                                        <div class="card mb-3">
                                            <img src="{{ asset('storage/' . $photoGallery->file) }}" class="card-img-top" alt="Gallery Image">
                                            <div class="card-body">
                                                @if (Auth()->user()->role=='1')
                                                <input type="checkbox" class="gallery-checkbox" name="selected_galleries[]" value="{{ $photoGallery->id }}">
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach

                @if (Auth()->user()->role=='1' && (count($photoNames) > 0 && !$photoName->photoGalleries->isEmpty()))
                    <button type="submit" id="delete-selected-button" class="btn btn-danger" disabled onclick="confirmDelete(event)">Delete Selected</button>
                @endif
            </form>
<hr>
        {{$photoNames->links('pagination::bootstrap-4')}}

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
    function confirmDeleteonly(url) {
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

document.getElementById('galleryForm').addEventListener('submit', function(event) {
    if (filesArray.length === 0) {
        event.preventDefault(); // Prevent form submission
        document.getElementById('error-message').style.display = 'block'; // Show error message
    } else {
        document.getElementById('error-message').style.display = 'none'; // Hide error message if files are selected
    }
});
</script>

<script>
    function confirmDelete(event) {
        event.preventDefault(); // Prevent form submission

        const form = event.target.closest('form'); // Get the form

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
                form.submit();
            }
        });
    }

    function updateDeleteButtonState() {
        const checkboxes = document.querySelectorAll('.gallery-checkbox');
        const deleteButton = document.getElementById('delete-selected-button');
        const isAnyChecked = Array.from(checkboxes).some(checkbox => checkbox.checked);
        deleteButton.disabled = !isAnyChecked;
    }

    function selectAllGalleries(selectAllCheckbox) {
        const checkboxes = document.querySelectorAll('.gallery-checkbox');
        const selectAllInput = document.getElementById('select_all');
        checkboxes.forEach(checkbox => checkbox.checked = selectAllCheckbox.checked);
        selectAllInput.value = selectAllCheckbox.checked ? 'true' : 'false';
        updateDeleteButtonState();
    }

    document.querySelectorAll('.gallery-checkbox').forEach(checkbox => {
        checkbox.addEventListener('change', updateDeleteButtonState);
    });
</script>


@endsection
