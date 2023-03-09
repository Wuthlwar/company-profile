@extends('admins.app')
@section('content')
<div class="card mb-4">
    <div class="card-header">
        <strong>Activity</strong><span class="small ms-1"></span></div>
    <div class="card-body table-responsive">
        @if ($act->id!=null)
            <form action="{{ route('activities.update',$act->id) }}" method="POST" enctype="multipart/form-data">
                @method('PATCH')
        @else
            <form action="{{ route('activities.store') }}" method="POST" enctype="multipart/form-data">
        @endif
            @csrf
            <div class="row">
                <div class="mb-3 col-6">
                    <label class="form-label" for="activity_type_id">Activity Type</label>
                    <select class="form-select" aria-label="Default select example" name="activity_type_id">
                        <option>Select Activity Type</option>
                        @foreach ($act_types as $type)
                            @if ($type->id==$act->activity_type_id)
                                <option value="{{ $type->id }}" selected>{{ $type->name }}</option>
                            @else
                                <option value="{{ $type->id }}">{{ $type->name }}</option>
                            @endif

                        @endforeach
                      </select>
                </div>
                <div class="mb-3 col-6">
                    <label class="form-label" for="title">Activity Title</label>
                    <input class="form-control" id="title" type="text" placeholder="Enter Activity Title" name="title" value="{{ old('title',$act->title) }}">
                </div>

                <div class="mb-3 col-6">
                    <label class="form-label" for="description">Description</label>
                   <textarea class="form-control" name="description" id="" cols="30" rows="2">{{ $act->description }}</textarea>
                </div>
                <div class="mb-3 col-6">
                    <label class="form-label" for="description_mm">Description (Myanmar)</label>
                   <textarea class="form-control" name="description_mm" id="" cols="30" rows="2">{{ $act->description_mm }}</textarea>
                </div>
                <div class="mb-3 col-6">
                    <label class="form-label" for="location">location</label>
                    <input class="form-control" id="location" type="text" placeholder="" name="location" value="{{ old('location',$act->location) }}">
                </div>
                <div class="row fieldContainer">
                <div class="mb-3 col-6">
                    <label class="form-label" for="date">Date</label>
                    <input class="form-control" id="date" type="date" placeholder="" name="date" value="{{ old('date',$act->date) }}">
                </div>

                <div class="mb-3 col-6">
                    <label class="form-label" for="preview_img">First Image</label>
                    <input class="form-control" id="preview_img" type="file" placeholder="" name="preview_img">
                </div>
                <div class="mb-3 col-6">
                    <label class="form-label" for="preview_img">Other Images</label>
                    <input class="form-control" id="preview_img" type="file" placeholder="" name="file[]">
                    <button class="btn btn-success mt-2" type="button" id="addBtn">Add More</button>
                </div>
                </div>
                <div class="row">
                        @if ($act->preview_img!==null)
                        <div class="card col-4 col-xl-2 m-1">
                            <img src="{{ asset("storage/uploads/activity/$act->preview_img") }}" alt="{{ $act->preview_img }}" class="card-img-top rounded img-fluid mt-3">

                            <div class="card-body">
                                <p>First Image</p>
                            </div>
                        </div>
                        @endif
                        @if (count($act->act_imgs)!=0)
                        <div class="row col-12">
                            @foreach($act->act_imgs as $img)
                            <div class="card col-4 col-xl-2 m-1 border rounded">
                            <div style="height:100px;overflow:hidden;">
                                <img src="{{ asset("storage/uploads/activity_images/$img->file") }}" alt="{{ $img->name }}" class="card-img-top img-fluid mt-3"/>
                            </div>
                            <div class="card-body d-flex justify-content-center">
                                 <button type="button" class="btn btn-danger"  id="btn-delete" data-id="{{ $img->id }}"><i class="fa-solid fa-trash-can"></i></button>
                            </div>
                            </div>
                            @endforeach

                        </div>

                        @endif
                </div>

                <div class="mb-3">
                    <button class="btn btn-success" type="submit">Save</button>
                    <a class="btn btn-warning" href="{{ route('activities.index') }}">Cancel</a>
                </div>
            </div>

        </form>


    </div>
  </div>
@endsection
@section('script')
<script type="text/javascript">
    $(document).ready(function(){
        var maxField = 10;
        console.log(maxField);
        var addBtn = $('#addBtn');
        var wrapper = $('.fieldContainer');
        var fieldHTML = '<div class="mb-3 col-6"><input class="form-control" id="preview_img" type="file" placeholder="" name="file[]"><button class="btn btn-danger mt-2" type="button" id="removeBtn">Remove</button></div>';
        var x=1;
        $(addBtn).click(function () {
            if(x < maxField) {
                x++;
                $(wrapper).append(fieldHTML);
            }
        });
       $(wrapper).on('click','#removeBtn', function (e) {
           e.preventDefault();
           $(this).parent('div').remove();
           x--;
       });
 });

 $(document).on('click','#btn-delete',function(e) {
    e.preventDefault();
    let dataDelete = $(this).data('id');
    // console.log(dataDelete);
    Swal.fire({
    title: 'Are you sure?',
    text: "You won't be able to revert this! ",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
    if (result.isConfirmed) {
    $.ajax({
    type:'DELETE',
    dataType: 'JSON',
    url: `/admins/act_img/${dataDelete}/delete`,
    data:{
    '_token':$('meta[name="csrf-token"]').attr('content'),
    },
    success:function(response){
    Swal.fire(
    'Deleted!',
    'Your file has been deleted.',
    'success'
    )
    location.reload();

    },
    error:function(err){
    console.log(err);
    }
    });
    }
    })
    });




</script>
@endsection
