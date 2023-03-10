@extends('admins.app')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="d-flex flex-wrap align-items-center justify-content-between mb-4">
            <div>
                <h4 class="mb-3">Activity Type List</h4>

            </div>
            {{-- <a href="page-add-return.html" class="btn btn-primary add-list"><i class="las la-plus mr-3"></i>Add</a> --}}
            <button type="button" class="btn btn-primary mt-2" data-toggle="modal" data-target="#actTypeModal" id="openModal" data-action="{{ route('activity_type.store') }}"><i class="las la-plus mr-3"></i>Add</button>

        </div>
    </div>
    <div class="col-lg-12">
        <div class="table-responsive rounded mb-3">
        <table class="table table-striped">
            <thead class="bg-white text-uppercase">
                <tr class="ligth ligth-data">
                    <th scope="col">#</th>
                    <th scope="col">Type Name</th>
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
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"  aria-hidden="true" id='actTypeModal'>
    <div class="modal-dialog modal-lg">
       <div class="modal-content">
          <div class="modal-header">
             <h5 class="modal-title"> Activity Type</h5>
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
                                <h6 class="card-title">Add Activity Type</h6>
                            </div>
                        </div>
                        <div class="card-body">

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input class="form-control" id="name" type="text" placeholder="Enter Activity Type" name="name" value="">
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
<script src="{{ asset('/js/activity_type_crud.js') }}"></script>
@endsection
