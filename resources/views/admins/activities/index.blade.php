@extends('admins.app')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="d-flex flex-wrap align-items-center justify-content-between mb-4">
            <div>
                <h4 class="mb-3">Activity List</h4>

            </div>
            {{-- <a href="page-add-return.html" class="btn btn-primary add-list"><i class="las la-plus mr-3"></i>Add</a> --}}
            <button type="button" class="btn btn-primary mt-2" data-toggle="modal" data-target="#actModal" id="openModal" data-action="{{ route('activities.store') }}"><i class="las la-plus mr-3"></i>Add</button>

        </div>
    </div>
    <div class="col-lg-12">
        <div class="table-responsive rounded mb-3">
        <table class="table table-striped">
            <thead class="bg-white text-uppercase">
                <tr class="ligth ligth-data">
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Activity Title</th>
                    <th scope="col">Location</th>
                    <th scope="col">Image</th>
                    <th scope="col">Date</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody id="tbody" >

            </tbody>
        </table>
        </div>
    </div>
</div>

{{-- Create Modal  --}}
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"  aria-hidden="true" id='actModal'>
    <div class="modal-dialog modal-lg">
       <div class="modal-content">
          <div class="modal-header">
             <h5 class="modal-title"> Activity</h5>
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
             </button>
          </div>
          <form method="POST" enctype="multipart/form-data" id="formData">
            @csrf
          <div class="modal-body">

                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between bg-info rounded-sm">
                            <div class="header-title ">
                                <h6 class="card-title">Add Activity</h6>
                            </div>
                        </div>
                        <div class="card-body">

                                <div class="row fieldContainer">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>Activity Type</label>
                                            <select class="form-control mb-3" name="activity_type_id">
                                                @foreach ($act_types as $type)
                                                    <option value="{{ $type->id }}" selected>{{ $type->name }}</option>

                                                @endforeach

                                            </select>
                                         </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input class="form-control" id="title" type="text" placeholder="Enter Activity Title" name="title" value="">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>Title(MM)</label>
                                            <input class="form-control" id="title" type="text" placeholder="Enter Activity Title" name="title_mm" value="">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="form-control custom-textarea" name="description" id="" cols="30" rows="5" required></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>Description (MM)</label>
                                            <textarea class="form-control custom-textarea" name="description_mm" id="" cols="30" rows="5"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="location">Location</label>
                                            <input class="form-control" id="location" type="text" placeholder="" name="location" value="" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="location">Location (MM)</label>
                                            <input class="form-control" id="location" type="text" placeholder="" name="location_mm" value="" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="date">Date</label>
                                            <input class="form-control" id="date" type="date" placeholder="" name="date" value="" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="preview_img">First Image</label>
                                            <input class="form-control" id="preview_img" type="file" placeholder="" name="preview_img" set-to="showOldImage" onchange="readURL(this)">
                                            <div class="help-block with-errors"></div>
                                            <div class="row" >
                                                <img src="" alt="" height="80px" id="showOldImage" class="rounded mt-2">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="preview_img">Other Images</label>
                                            <input class="form-control" id="preview_img" type="file" placeholder="" name="file[]">
                                            <button class="btn btn-success mt-2" type="button" id="addBtn">Add More</button>
                                        </div>
                                        <div class="row " id="old_act_imgs">

                                        </div>
                                    </div>

                                </div>
                        </div>
                    </div>
                </div>
          </div>
          <div class="modal-footer">
             <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
             <button type="submit" class="btn btn-primary" id   ="btn-create">Save changes</button>
          </div>
        </form>
       </div>
    </div>
 </div>
@endsection
@section('script')
<script type="text/javascript">





</script>
<script src="{{ asset('/js/activity_crud.js') }}"></script>
@endsection
