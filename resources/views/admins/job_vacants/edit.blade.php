@extends('admins.app')
@section('content')
<style>
      .select2-container--bootstrap4 .select2-selection--multiple .select2-selection__rendered {
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    list-style: none;
    margin: 0;
    padding: 0 5px;
    width: 100%;
    height: 80px;
    }
</style>
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
    <div class="col-lg-2"></div>
        <div class="col-lg-8">
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
                    <div class="col-md-12">
                        <label for="vacantname" class="form-label card-title" style="font-size:15px;">Job Title <font style="color:red;">*</font></label>
                        <input type="text" class="form-control" id="vacantname" name="vacant_name" style="border:1px solid #333;height:40px;font-size:13px" value="{{$vacant_detail->vacant_name}}"required>
                        <hr>
                      </div>


                      <div class="col-md-6">
                        <label for="branch" class="form-label card-title" style="font-size:15px;">
                            Industry<font style="color:red;">*</font>
                        </label>
                        <select class="form-control" id="industry" name="industry" style="border:1px solid #333;" required>
                                <option value="Retail & Wholesale" selected> Retail & Wholesale</option>
                        </select>
                        <hr>
                    </div>

                      <div class="col-md-6">
                        <label for="branch" class="form-label card-title" style="font-size:15px;">
                            Employee Types<font style="color:red;">*</font>
                        </label>
                        <select class="form-control" id="emptypes" name="emptype" style="border:1px solid #333;" required>
                                <option value="Full-Time" {{$vacant_detail->emptype=='Full-Time' ? 'selected' : ''}}>Full-Time</option>
                                <option value="Part-Time" {{$vacant_detail->emptype=='Part-Time' ? 'selected' : ''}}>Part-time</option>
                                <option value="Temporary" {{$vacant_detail->emptype=='Temporary' ? 'selected' : ''}}>Temporary</option>
                                <option value="Contract" {{$vacant_detail->emptype=='Contract' ? 'selected' : ''}}>Contract</option>
                                <option value="Internship" {{$vacant_detail->emptype=='Internship' ? 'selected' : ''}}>Internship</option>
                                <option value="Remote" {{$vacant_detail->emptype=='Remote' ? 'selected' : ''}}>Remote</option>
                        </select>
                        <hr>
                    </div>

                    <div class="col-md-3">
                        <label for="male" class="form-label card-title" style="font-size:15px;">
                            Number Of Vacancies<font style="color:red;">*</font>
                        </label>
                        <input type="number" class="form-control" id="vacant_num" name="no_vacant" style="border:1px solid #333;height:40px;font-size:13px" value="{{$vacant_detail->no_vacant}}" required>
                        <hr>
                    </div>

                    <div class="col-md-9">
                        <label for="branch" class="form-label card-title" style="font-size:15px;">
                           Qualification<font style="color:red;">*</font>
                        </label>
                        <?php
                        $array = json_decode($vacant_detail->qualification, true);
                        if (!is_array($array)) {
                            $array = [];
                        }
                        ?>

                        <select class="form-control" id="qual" name="qualification[]" style="border:1px solid #333;height:300px;" multiple required>
                            <option value="Unspecified" <?php echo in_array('Unspecified', $array) ? 'selected' : ''; ?>>Unspecified</option>
                            <option value="Certificate" <?php echo in_array('Certificate', $array) ? 'selected' : ''; ?>>Certificate</option>
                            <option value="Middle School" <?php echo in_array('Middle School', $array) ? 'selected' : ''; ?>>Middle School</option>
                            <option value="High School" <?php echo in_array('High School', $array) ? 'selected' : ''; ?>>High School</option>
                            <option value="Postgraduate" <?php echo in_array('Postgraduate', $array) ? 'selected' : ''; ?>>Postgraduate</option>
                            <option value="Diploma" <?php echo in_array('Diploma', $array) ? 'selected' : ''; ?>>Diploma</option>
                            <option value="Bachelor" <?php echo in_array('Bachelor', $array) ? 'selected' : ''; ?>>Bachelor</option>
                            <option value="Master" <?php echo in_array('Master', $array) ? 'selected' : ''; ?>>Master</option>
                            <option value="PHD" <?php echo in_array('PHD', $array) ? 'selected' : ''; ?>>PHD</option>
                            <option value="Others" <?php echo in_array('Others', $array) ? 'selected' : ''; ?>>Others</option>
                        </select>

                        <hr>
                    </div>

                    <div class="col-md-6">
                        <label for="branch" class="form-label card-title" style="font-size:15px;">
                           Experience<font style="color:red;">*</font>
                        </label>
                        <select class="form-control" id="exper" name="experience" style="border:1px solid #333;" required>
                                <option value="No Experience, Less Than 1 year" {{$vacant_detail->experience=='No Experience, Less Than 1 year' ? 'select' : ''}}>No Experience, Less Than 1 year</option>
                                <option value="1 Year"  {{$vacant_detail->experience=='1 Year' ? 'selected' : ''}}>1 Year</option>
                                <option value="2 Years" {{$vacant_detail->experience=='2 Years' ? 'selected' : ''}}>2 Years</option>
                                <option value="3 Years" {{$vacant_detail->experience=='3 Years' ? 'selected' : ''}}>3 Years</option>
                                <option value="4 Years" {{$vacant_detail->experience=='4 Years' ? 'selected' : ''}}>4 Years</option>
                                <option value="5 Years" {{$vacant_detail->experience=='5 Years' ? 'selected' : ''}}>5 Years</option>
                                <option value="6 Years" {{$vacant_detail->experience=='6 Years' ? 'selected' : ''}}>6 Years</option>
                                <option value="7 Years" {{$vacant_detail->experience=='7 Years' ? 'selected' : ''}}>7 Years</option>
                                <option value="8 Years" {{$vacant_detail->experience=='8 Years' ? 'selected' : ''}}>8 Years</option>
                                <option value="9 Years" {{$vacant_detail->experience=='9 Years' ? 'selected' : ''}}>9 Years</option>
                                <option value="10 Years" {{$vacant_detail->experience=='10 Years' ? 'selected' : ''}}>10 Years</option>
                                <option value="11 Years" {{$vacant_detail->experience=='11 Years' ? 'selected' : ''}}>11 Year</option>
                                <option value="12 Years" {{$vacant_detail->experience=='12 Years' ? 'selected' : ''}}>12 Years</option>
                                <option value="13 Years" {{$vacant_detail->experience=='13 Years' ? 'selected' : ''}}>13 Years</option>
                                <option value="14 Years" {{$vacant_detail->experience=='14 Years' ? 'selected' : ''}}>14 Years</option>
                                <option value="15 Years" {{$vacant_detail->experience=='15 Years' ? 'selected' : ''}}>15 Years</option>
                                <option value="16 Years" {{$vacant_detail->experience=='16 Years' ? 'selected' : ''}}>16 Years</option>
                                <option value="17 Years" {{$vacant_detail->experience=='17 Years' ? 'selected' : ''}}>17 Years</option>
                                <option value="18 Years" {{$vacant_detail->experience=='18 Years' ? 'selected' : ''}}>18 Years</option>
                                <option value="19 Years" {{$vacant_detail->experience=='19 Years' ? 'selected' : ''}}>19 Years</option>
                                <option value="20 Years" {{$vacant_detail->experience=='20 Years' ? 'selected' : ''}}>20 Years</option>
                                <option value="More Than 20 Years" {{$vacant_detail->experience=='More Than 20 Years' ? 'selected' : ''}}>More Than 20 Years</option>
                                <option value="More Than 30 Years" {{$vacant_detail->experience=='More Than 30 Years' ? 'selected' : ''}}>More Than 30 Years</option>
                                <option value="Others">Others</option>
                        </select>
                        <hr>
                    </div>

                    <div class="col-md-6">
                        <label for="male" class="form-label card-title" style="font-size:15px;">Gender<font style="color:red;">*</font></label><br>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="gender" value="Male" {{$vacant_detail->gender=='Male' ? 'checked' : ''}}>Male
                            </label>
                          </div>
                          <div class="form-check-inline">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="gender" value="Female"  {{$vacant_detail->gender=='Female' ? 'checked' : ''}}>Female
                            </label>
                          </div>
                          <div class="form-check-inline">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="gender" value="Both"  {{$vacant_detail->gender=='Both' ? 'checked' : ''}}>Both
                            </label>
                          </div>
                        <hr>
                    </div>

                      <div class="col-md-6">
                        <label for="jobcategorynameadd" class="form-label card-title" style="font-size:15px;">
                            Category Name <font style="color:red;">*</font>
                        </label>
                        <select class="form-control" id="jobcategorynameadd" name="category_name" required>
                            <option value="">Select Category</option>
                            @foreach($categories as $category)
                                @if($category->status == "online")
                                    <option value="{{ $category->id }}" {{ $vacant_detail->category_id==$category->id ? 'selected':''}}>{{ $category->category_name }}</option>
                                @endif
                            @endforeach
                        </select>
                        <hr>
                    </div>

                    <div class="col-md-6">
                        <label for="jobrole" class="form-label card-title" style="font-size:15px;">
                            Job Role <font style="color:red;">*</font>
                        </label>
                        {{-- @dd($vacant_detail->job_roleget); --}}
                        <select class="form-control" id="jobrole" name="job_role" required>
                            @foreach ($vacants as $vacant)
                            <option value="{{$vacant->id}}">{{$vacant->job_role}}</option>

                            @endforeach
                            {{-- <option value="{{ $vacant_detail->job_role==$vacant_detail->job_roleget->id }}" {{ $vacant_detail->job_role==$vacant_detail->job_roleget->id ? 'selected':''}}>{{ $vacant_detail->job_roleget }}</option> --}}
                        </select>
                        <hr>
                    </div>

                        <div class="col-md-12">
                            <label for="fromDate" class="form-label" id="font-f">Job Description <font style="color:red;">*</font></label><br>
                            <div id="deseditor" style="height: 400px;">{!!$vacant_detail->vacant_description!!}</div>
                            <!-- Hidden input to store Quill content -->
                            <input type="hidden" name="vacant_description" value="{{$vacant_detail->vacant_description}}" id="jobrequired" required>
                            <hr>
                        </div>

                        <div class="col-md-12">
                            <label for="fromDate" class="form-label" id="font-f">Job Specification (Job Requirements) <font style="color:red;">*</font></label><br>
                            <div id="jobspec" style="height: 400px;">{!!$vacant_detail->vacant_spec!!}</div>
                            <!-- Hidden input to store Quill content -->
                            <input type="hidden" name="vacant_spec" value="{{$vacant_detail->vacant_spec}}" id="jobspecreq" required>
                            <hr>
                        </div>

                        <div class="col-md-12">
                            <h4>Work Location</h4>
                        </div>

                        <div class="col-md-6">
                            <label for="region" class="form-label card-title" style="font-size:15px;">
                                Region<font style="color:red;">*</font>
                            </label>
                            <select class="form-control" id="region" name="region" style="border:1px solid #333;" required>
                                <option value="{{$vacant_detail->region}}" selected>{{$vacant_detail->region}}</option>
                                <option value="ayeyarwady">Ayeyarwady</option>
                                <option value="bago">Bago</option>
                                <option value="chin">Chin</option>
                                <option value="kachin">Kachin</option>
                                <option value="kayah">Kayah</option>
                                <option value="kayin">Kayin</option>
                                <option value="magway">Magway</option>
                                <option value="mandalay">Mandalay</option>
                                <option value="mon">Mon</option>
                                <option value="rakhine">Rakhine</option>
                                <option value="sagaing">Sagaing</option>
                                <option value="shan">Shan</option>
                                <option value="tanintharyi">Tanintharyi</option>
                                <option value="naypyidaw">Naypyidaw</option>
                                <option value="yangon">Yangon</option>
                            </select>
                            <hr>
                        </div>

                        <div class="col-md-6">
                            <label for="township" class="form-label card-title" style="font-size:15px;">
                                Township<font style="color:red;">*</font>
                            </label>
                            <select class="form-control" id="township" name="township" style="border:1px solid #333;" required>
                                <option value="{{$vacant_detail->township}}">{{$vacant_detail->township}}</option>
                            </select>
                            <hr>
                        </div>

                        <div class="col-md-12">
                            <label for="femail" class="form-label card-title" style="font-size:15px;">
                               Address
                            </label>
                            <input type="text" class="form-control" id="address" name="address" style="border:1px solid #333;height:40px;font-size:13px" value="{{$vacant_detail->address}}" required>
                            <hr>
                        </div>

                        <div class="col-md-6">
                            <label for="branch" class="form-label card-title" style="font-size:15px;">
                                Branches<font style="color:red;">*</font>
                            </label>
                            <select class="form-control" id="branches" name="branch_id[]" multiple>
                                @foreach($branches as $branch)
                                    <option value="{{ $branch->id }}">{{ $branch->branch_name }}</option>
                                @endforeach
                            </select>

                            @foreach ($getbranches as $getbranch)
                            <span class="badge bg-primary" style="font-size: 16px;">
                                <i class="las la-trash" style="color: red; font-size: 20px; cursor: pointer;"
                                onclick="confirmDelete('{{ route('branches.delete', $getbranch->id) }}')"></i>
                                {{$getbranch->branch_name}}
                            </span>
                        @endforeach
                        <hr>
                        </div>

                        <div class="col-md-6">
                            <label for="salary" class="form-label card-title" style="font-size:15px;">
                                Salary <font style="color:red;">*</font>
                            </label><br>
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="salary" id="salary-negotiable" value="Negotiable" {{$vacant_detail->salary=='Negotiable' ? 'checked' : ''}} required>Negotiable
                                </label>
                            </div>
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="salary" id="salary-confidential" value="Confidential" {{$vacant_detail->salary=='Confidential' ? 'checked' : ''}} required>Confidential
                                </label>
                            </div>
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="salary" id="salary-range" value="Range" {{$vacant_detail->salary=='Range' ? 'checked' : ''}} required>Range
                                </label>
                            </div>
                            <hr>
                        </div>

                        <div class="col-md-4 currency-range-fields">
                            <label for="currency" class="form-label card-title" style="font-size:15px;">
                                Currency <font style="color:red;">*</font>
                            </label>
                            <select class="form-control" id="currency" name="currency" style="border:1px solid #333;">
                                <option value="">Select Currency</option>
                                <option value="MMK" {{$vacant_detail->currency=='MMK' ? 'selected' : ''}}>MMK</option>
                                <option value="THB" {{$vacant_detail->currency=='THB' ? 'selected' : ''}}>THB</option>
                                <option value="USD" {{$vacant_detail->currency=='USD' ? 'selected' : ''}}>USD</option>
                            </select>
                            <hr>
                        </div>

                        <div class="col-md-4 currency-range-fields">
                            <label for="min" class="form-label card-title" style="font-size:15px;">
                                Min <font style="color:red;">*</font>
                            </label>
                            <input type="number" class="form-control" id="min" name="min" value="{{$vacant_detail->min}}" style="border:1px solid #333;height:40px;font-size:13px">
                            <hr>
                        </div>

                        <div class="col-md-4 currency-range-fields">
                            <label for="max" class="form-label card-title" style="font-size:15px;">
                                Max <font style="color:red;">*</font>
                            </label>
                            <input type="number" class="form-control" id="max" name="max" value="{{$vacant_detail->max}}" style="border:1px solid #333;height:40px;font-size:13px">
                            <hr>
                        </div>



                          <div class="col-md-12">
                            <label for="fromDate" class="form-label" id="font-f">Offer <font style="color:red;">*</font></label><br>
                            <?php
                            $array = json_decode($vacant_detail->offer, true);
                            if (!is_array($array)) {
                                $array = [];
                            }
                            ?>

                            <select class="form-control" id="offer" name="offer[]" style="border:1px solid #333;" multiple required>
                                <option value="">Select Offer</option>
                                <option value="Commission/Incentive" <?php echo in_array('Commission/Incentive', $array) ? 'selected' : ''; ?>>Commission/Incentive</option>
                                <option value="Duty Meal," <?php echo in_array('Duty Meal,', $array) ? 'selected' : ''; ?>>Duty Meal</option>
                                <option value="Ferry," <?php echo in_array('Ferry,', $array) ? 'selected' : ''; ?>>Ferry</option>
                                <option value="Meal Allowance," <?php echo in_array('Meal Allowance,', $array) ? 'selected' : ''; ?>>Meal Allowance</option>
                                <option value="Medical Allowance," <?php echo in_array('Medical Allowance,', $array) ? 'selected' : ''; ?>>Medical Allowance</option>
                                <option value="Other Benefits," <?php echo in_array('Other Benefits,', $array) ? 'selected' : ''; ?>>Other Benefits</option>
                                <option value="Ph Bill Allowance," <?php echo in_array('Ph Bill Allowance,', $array) ? 'selected' : ''; ?>>Ph Bill Allowance</option>
                                <option value="Quarterly/Yearly Bonus," <?php echo in_array('Quarterly/Yearly Bonus,', $array) ? 'selected' : ''; ?>>Quarterly/Yearly Bonus</option>
                                <option value="Training," <?php echo in_array('Training,', $array) ? 'selected' : ''; ?>>Training</option>
                                <option value="Transportation Allowance," <?php echo in_array('Transportation Allowance,', $array) ? 'selected' : ''; ?>>Transportation Allowance</option>
                                <option value="Uniform," <?php echo in_array('Uniform,', $array) ? 'selected' : ''; ?>>Uniform</option>
                                <option value="Yearly Increment," <?php echo in_array('Yearly Increment,', $array) ? 'selected' : ''; ?>>Yearly Increment</option>
                            </select>
                              <hr>
                        </div>

                        <div class="col-md-12">
                            <label for="fromDate" class="form-label" id="font-f">Add Additional Questions ( Optional )</label><br>
                            <p style="color: #333;">A Total of 3 additional questions can be added.<br>
                                Answers will be only in Yes or No options.</p>
                                {{-- <div  id="showquestion"></div> --}}
                                <label for="min" class="form-label card-title" style="font-size:15px;">
                                    Question 1 <font style="color:red;">*</font>
                                </label>
                                <input type="text" class="form-control" id="address" name="q1" style="border:1px solid #333;height:40px;font-size:13px" value="{{$vacant_detail->q1}}">
                                <br>
                                <label for="min" class="form-label card-title" style="font-size:15px;">
                                    Question 2 <font style="color:red;">*</font>
                                </label>
                                <input type="text" class="form-control" id="address" name="q2" style="border:1px solid #333;height:40px;font-size:13px" value="{{$vacant_detail->q2}}">
                                <label for="min" class="form-label card-title" style="font-size:15px;">
                                    Question 3 <font style="color:red;">*</font>
                                </label>
                                <input type="text" class="form-control" id="address" name="q3" style="border:1px solid #333;height:40px;font-size:13px" value="{{$vacant_detail->q3}}">
                                 {{-- <i class="btn btn-success" id="addbtn"> Add Questions</i> --}}
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
            <div class="modal-footer">
                @if (Auth()->user()->role=='1')
                <button type="submit" class="btn btn-primary" id   ="btn-create">Save changes</button>
                @endif

             </div>
        </div>
    </form>
    </div>
    <div class="col-lg-2"></div>
    </div>
</div>

@endsection
@section('script')
<script>
    function toggleCurrencyRangeFields() {
        const rangeRadio = document.getElementById('salary-range');
        const currencyFields = document.querySelectorAll('.currency-range-fields');
        const currencyInput = document.getElementById('currency');
        const minInput = document.getElementById('min');
        const maxInput = document.getElementById('max');

        if (rangeRadio.checked) {
            currencyFields.forEach(field => field.style.display = 'block');
            currencyInput.setAttribute('required', 'required');
            minInput.setAttribute('required', 'required');
            maxInput.setAttribute('required', 'required');
        } else {
            currencyFields.forEach(field => field.style.display = 'none');
            currencyInput.removeAttribute('required');
            minInput.removeAttribute('required');
            maxInput.removeAttribute('required');
        }
    }

    document.getElementById('salary-negotiable').addEventListener('change', toggleCurrencyRangeFields);
    document.getElementById('salary-confidential').addEventListener('change', toggleCurrencyRangeFields);
    document.getElementById('salary-range').addEventListener('change', toggleCurrencyRangeFields);

    window.onload = toggleCurrencyRangeFields;
</script>
<script>
    $('#region').select2({
        theme: 'bootstrap4',
        placeholder: 'Choose Your Region/State',
        width: '100%',
    });

    $('#township').select2({
        theme: 'bootstrap4',
        placeholder: 'Choose Your Township',
        width: '100%',
    });

    $('#region').on('change', function() {
        var region = $(this).val();
        var $township = $('#township');

        $township.empty().append('<option value="">Select Township</option>');

        var townships = {
            'ayeyarwady': [
                { value: 'bogale', text: 'Bogale' },
                { value: 'danubyu', text: 'Danubyu' },
                { value: 'einme', text: 'Einme' },
                { value: 'hinthada', text: 'Hinthada' },
                { value: 'ingapu', text: 'Ingapu' },
                { value: 'kyaiklat', text: 'Kyaiklat' },
                { value: 'kyangin', text: 'Kyangin' },
                { value: 'kyonpyaw', text: 'Kyonpyaw' },
                { value: 'labutta', text: 'Labutta' },
                { value: 'lemyethna', text: 'Lemyethna' },
                { value: 'maubin', text: 'Maubin' },
                { value: 'mawlamyinegyun', text: 'Mawlamyinegyun' },
                { value: 'myaungmya', text: 'Myaungmya' },
                { value: 'myanaung', text: 'Myanaung' },
                { value: 'nyaungdon', text: 'Nyaungdon' },
                { value: 'pantanaw', text: 'Pantanaw' },
                { value: 'pathein', text: 'Pathein' },
                { value: 'pyapon', text: 'Pyapon' },
                { value: 'thabaung', text: 'Thabaung' },
                { value: 'wakema', text: 'Wakema' },
                { value: 'yegyi', text: 'Yegyi' },
                { value: 'zalun', text: 'Zalun' }
            ],
            'bago': [
                { value: 'bago', text: 'Bago' },
                { value: 'daik-u', text: 'Daik-U' },
                { value: 'kawa', text: 'Kawa' },
                { value: 'kyaukkyi', text: 'Kyaukkyi' },
                { value: 'nyaunglebin', text: 'Nyaunglebin' },
                { value: 'oktwin', text: 'Oktwin' },
                { value: 'phyu', text: 'Phyu' },
                { value: 'shwegyin', text: 'Shwegyin' },
                { value: 'taungoo', text: 'Taungoo' },
                { value: 'waw', text: 'Waw' },
                { value: 'yedashe', text: 'Yedashe' },
                { value: 'gyobingauk', text: 'Gyobingauk' },
                { value: 'letpadan', text: 'Letpadan' },
                { value: 'minhla', text: 'Minhla' },
                { value: 'monyo', text: 'Monyo' },
                { value: 'nattalin', text: 'Nattalin' },
                { value: 'okpho', text: 'Okpho' },
                { value: 'paukkaung', text: 'Paukkaung' },
                { value: 'padaung', text: 'Padaung' },
                { value: 'pyay', text: 'Pyay' },
                { value: 'shwedaung', text: 'Shwedaung' },
                { value: 'thayarwady', text: 'Thayarwady' },
                { value: 'thegon', text: 'Thegon' },
                { value: 'zigon', text: 'Zigon' }
            ],
            'chin': [
                { value: 'falam', text: 'Falam' },
                { value: 'hakha', text: 'Hakha' },
                { value: 'htantlang', text: 'Htantlang' },
                { value: 'kanpetlet', text: 'Kanpetlet' },
                { value: 'madupi', text: 'Madupi' },
                { value: 'mindat', text: 'Mindat' },
                { value: 'paletwa', text: 'Paletwa' },
                { value: 'tiddim', text: 'Tiddim' },
                { value: 'tonzang', text: 'Tonzang' }
            ],
            'kachin': [
                { value: 'bhamo', text: 'Bhamo' },
                { value: 'chipwi', text: 'Chipwi' },
                { value: 'hpakant', text: 'Hpakant' },
                { value: 'injangyang', text: 'Injangyang' },
                { value: 'kamaing', text: 'Kamaing' },
                { value: 'khaunglanphu', text: 'Khaunglanphu' },
                { value: 'machanbaw', text: 'Machanbaw' },
                { value: 'mansi', text: 'Mansi' },
                { value: 'mogaung', text: 'Mogaung' },
                { value: 'mohnyin', text: 'Mohnyin' },
                { value: 'myitkyina', text: 'Myitkyina' },
                { value: 'putao', text: 'Putao' },
                { value: 'shwegu', text: 'Shwegu' },
                { value: 'sumprabum', text: 'Sumprabum' },
                { value: 'tanai', text: 'Tanai' },
                { value: 'tsawlaw', text: 'Tsawlaw' },
                { value: 'waingmaw', text: 'Waingmaw' }
            ],
            'kayah': [
                { value: 'bawlakhe', text: 'Bawlakhe' },
                { value: 'demoso', text: 'Demoso' },
                { value: 'hpasawng', text: 'Hpasawng' },
                { value: 'hpruso', text: 'Hpruso' },
                { value: 'loikaw', text: 'Loikaw' },
                { value: 'mese', text: 'Mese' },
                { value: 'shadaw', text: 'Shadaw' }
            ],
            'kayin': [
                { value: 'hlaingbwe', text: 'Hlaingbwe' },
                { value: 'hpa-an', text: 'Hpa-An' },
                { value: 'kawkareik', text: 'Kawkareik' },
                { value: 'kyondoe', text: 'Kyondoe' },
                { value: 'kyainseikgyi', text: 'Kyainseikgyi' },
                { value: 'myawaddy', text: 'Myawaddy' },
                { value: 'papun', text: 'Papun' },
                { value: 'thandaunggyi', text: 'Thandaunggyi' }
            ],
            'magway': [
                { value: 'aunglan', text: 'Aunglan' },
                { value: 'chauk', text: 'Chauk' },
                { value: 'gangaw', text: 'Gangaw' },
                { value: 'kamma', text: 'Kamma' },
                { value: 'magway', text: 'Magway' },
                { value: 'minbu', text: 'Minbu' },
                { value: 'mindon', text: 'Mindon' },
                { value: 'myaing', text: 'Myaing' },
                { value: 'myothit', text: 'Myothit' },
                { value: 'natmauk', text: 'Natmauk' },
                { value: 'ngape', text: 'Ngape' },
                { value: 'pakokku', text: 'Pakokku' },
                { value: 'pauk', text: 'Pauk' },
                { value: 'pwintbyu', text: 'Pwintbyu' },
                { value: 'salin', text: 'Salin' },
                { value: 'saw', text: 'Saw' },
                { value: 'sidoktaya', text: 'Sidoktaya' },
                { value: 'sinbaungwe', text: 'Sinbaungwe' },
                { value: 'taungdwingyi', text: 'Taungdwingyi' },
                { value: 'thayet', text: 'Thayet' },
                { value: 'tilin', text: 'Tilin' },
                { value: 'yenangyaung', text: 'Yenangyaung' }
            ],
            'mandalay': [
                { value: 'amarapura', text: 'Amarapura' },
                { value: 'aungmyaythazan', text: 'Aungmyaythazan' },
                { value: 'chanayethazan', text: 'Chanayethazan' },
                { value: 'chanmyathazi', text: 'Chanmyathazi' },
                { value: 'kyaukpadaung', text: 'Kyaukpadaung' },
                { value: 'kyaukse', text: 'Kyaukse' },
                { value: 'madaya', text: 'Madaya' },
                { value: 'mahaaungmyay', text: 'Mahaaungmyay' },
                { value: 'meiktila', text: 'Meiktila' },
                { value: 'myingyan', text: 'Myingyan' },
                { value: 'nyaung-u', text: 'Nyaung-U' },
                { value: 'patheingyi', text: 'Patheingyi' },
                { value: 'pyawbwe', text: 'Pyawbwe' },
                { value: 'pyigyitagon', text: 'Pyigyitagon' },
                { value: 'singu', text: 'Singu' },
                { value: 'sintgaing', text: 'Sintgaing' },
                { value: 'tada-u', text: 'Tada-U' },
                { value: 'thabeikkyin', text: 'Thabeikkyin' },
                { value: 'wundwin', text: 'Wundwin' },
                { value: 'yamethin', text: 'Yamethin' }
            ],
            'mon': [
                { value: 'bilin', text: 'Bilin' },
                { value: 'chaungzon', text: 'Chaungzon' },
                { value: 'kyaikmaraw', text: 'Kyaikmaraw' },
                { value: 'kyaikto', text: 'Kyaikto' },
                { value: 'mawlamyine', text: 'Mawlamyine' },
                { value: 'mudon', text: 'Mudon' },
                { value: 'paung', text: 'Paung' },
                { value: 'thanbyuzayat', text: 'Thanbyuzayat' },
                { value: 'thaton', text: 'Thaton' },
                { value: 'ye', text: 'Ye' }
            ],
            'rakhine': [
                { value: 'ann', text: 'Ann' },
                { value: 'buthidaung', text: 'Buthidaung' },
                { value: 'gwa', text: 'Gwa' },
                { value: 'kyaukpyu', text: 'Kyaukpyu' },
                { value: 'kyauktaw', text: 'Kyauktaw' },
                { value: 'maungdaw', text: 'Maungdaw' },
                { value: 'mrauk-u', text: 'Mrauk-U' },
                { value: 'minbya', text: 'Minbya' },
                { value: 'myebon', text: 'Myebon' },
                { value: 'pauktaw', text: 'Pauktaw' },
                { value: 'ponnagyun', text: 'Ponnagyun' },
                { value: 'ramree', text: 'Ramree' },
                { value: 'rathedaung', text: 'Rathedaung' },
                { value: 'sittwe', text: 'Sittwe' },
                { value: 'thandwe', text: 'Thandwe' },
                { value: 'toungup', text: 'Toungup' }
            ],
            'sagaing': [
                { value: 'bamauk', text: 'Bamauk' },
                { value: 'budalin', text: 'Budalin' },
                { value: 'chaung-u', text: 'Chaung-U' },
                { value: 'hkamti', text: 'Hkamti' },
                { value: 'homalin', text: 'Homalin' },
                { value: 'indaw', text: 'Indaw' },
                { value: 'kalay', text: 'Kalay' },
                { value: 'kani', text: 'Kani' },
                { value: 'kanbalu', text: 'Kanbalu' },
                { value: 'katha', text: 'Katha' },
                { value: 'kawlin', text: 'Kawlin' },
                { value: 'kyunhla', text: 'Kyunhla' },
                { value: 'lahe', text: 'Lahe' },
                { value: 'mawlaik', text: 'Mawlaik' },
                { value: 'monywa', text: 'Monywa' },
                { value: 'myaung', text: 'Myaung' },
                { value: 'myinmu', text: 'Myinmu' },
                { value: 'nanyun', text: 'Nanyun' },
                { value: 'pale', text: 'Pale' },
                { value: 'phaungbyin', text: 'Phaungbyin' },
                { value: 'pinlebu', text: 'Pinlebu' },
                { value: 'sagaing', text: 'Sagaing' },
                { value: 'salingyi', text: 'Salingyi' },
                { value: 'shwebo', text: 'Shwebo' },
                { value: 'tamu', text: 'Tamu' },
                { value: 'taze', text: 'Taze' },
                { value: 'wetlet', text: 'Wetlet' },
                { value: 'ye-u', text: 'Ye-U' },
                { value: 'yinmabin', text: 'Yinmabin' }
            ],
            'shan': [
                { value: 'hsipaw', text: 'Hsipaw' },
                { value: 'lashio', text: 'Lashio' },
                { value: 'laukkaing', text: 'Laukkaing' },
                { value: 'mongmit', text: 'Mongmit' },
                { value: 'mongyai', text: 'Mongyai' },
                { value: 'muse', text: 'Muse' },
                { value: 'namhsan', text: 'Namhsan' },
                { value: 'namtu', text: 'Namtu' },
                { value: 'nyaungshwe', text: 'Nyaungshwe' },
                { value: 'tangyan', text: 'Tangyan' },
                { value: 'thibaw', text: 'Thibaw' },

                { value: 'hopong', text: 'Hopong' },
                { value: 'kalaw', text: 'Kalaw' },
                { value: 'lawksawk', text: 'Lawksawk' },
                { value: 'loilen', text: 'Loilen' },
                { value: 'nyaungshwe', text: 'Nyaungshwe' },
                { value: 'pekon', text: 'Pekon' },
                { value: 'pinlaung', text: 'Pinlaung' },
                { value: 'taunggyi', text: 'Taunggyi' },
                { value: 'ywangan', text: 'Ywangan' }
            ],
            'tanintharyi': [
                { value: 'bokpyin', text: 'Bokpyin' },
                { value: 'dawei', text: 'Dawei' },
                { value: 'kawthoung', text: 'Kawthoung' },
                { value: 'kyunsu', text: 'Kyunsu' },
                { value: 'launglon', text: 'Launglon' },
                { value: 'myeik', text: 'Myeik' },
                { value: 'palaw', text: 'Palaw' },
                { value: 'tanintharyi', text: 'Tanintharyi' },
                { value: 'thayetchaung', text: 'Thayetchaung' },
                { value: 'yebyu', text: 'Yebyu' }
            ],
            'naypyidaw':[
                { value: 'pyinmana', text: 'Pyinmana'},
                { value: 'tatkon', text: 'Tatkon'},
                { value: 'lewe', text: 'Lewe'},
                { value: 'ottarathiri', text: 'Ottarathiri'},
                { value: 'dekkhinathiri', text: 'Dekkhinathiri'},
                { value: 'pobbathiri', text: 'Pobbathiri'},
                { value: 'zabuthiri', text: 'Zabuthiri'},
                { value: 'zeyathiri', text: 'Zeyathiri'},
            ],
            'yangon': [
                { value: 'ahlone', text: 'Ahlone' },
                { value: 'bahan', text: 'Bahan' },
                { value: 'botahtaung', text: 'Botahtaung' },
                { value: 'dagon', text: 'Dagon' },
                { value: 'dala', text: 'Dala' },
                { value: 'dagon-myothit-east', text: 'Dagon Myothit (East)' },
                { value: 'dagon-myothit-north', text: 'Dagon Myothit (North)' },
                { value: 'dagon-myothit-south', text: 'Dagon Myothit (South)' },
                { value: 'dagon-myothit-seikkan', text: 'Dagon Myothit (Seikkan)' },
                { value: 'hlaing', text: 'Hlaing' },
                { value: 'hlaingtharya', text: 'Hlaingtharya' },
                { value: 'insein', text: 'Insein' },
                { value: 'kamayut', text: 'Kamayut' },
                { value: 'kyauktada', text: 'Kyauktada' },
                { value: 'kyauktan', text: 'Kyauktan' },
                { value: 'lanmadaw', text: 'Lanmadaw' },
                { value: 'latha', text: 'Latha' },
                { value: 'mayangone', text: 'Mayangone' },
                { value: 'mingaladon', text: 'Mingaladon' },
                { value: 'mingala-taungnyunt', text: 'Mingala Taungnyunt' },
                { value: 'north-okkalapa', text: 'North Okkalapa' },
                { value: 'pabedan', text: 'Pabedan' },
                { value: 'pazundaung', text: 'Pazundaung' },
                { value: 'sanchaung', text: 'Sanchaung' },
                { value: 'seikgyikanaungto', text: 'Seikgyikanaungto' },
                { value: 'shwepyithar', text: 'Shwepyithar' },
                { value: 'south-okkalapa', text: 'South Okkalapa' },
                { value: 'tarmwe', text: 'Tarmwe' },
                { value: 'thaketa', text: 'Thaketa' },
                { value: 'thingangyun', text: 'Thingangyun' },
                { value: 'yankin', text: 'Yankin' }
            ]
        };

        if (townships[region]) {
            townships[region].forEach(function(township) {
                var newOption = new Option(township.text, township.value, false, false);
                $township.append(newOption);
            });
        }

        $township.trigger('change');
    });
</script>

<script>
$(document).ready(function() {
    $('#jobcategorynameadd').select2({
        theme: 'bootstrap4',
        placeholder: 'Choose Your Category',
        width: '100%',
    });

    $('#jobrole').select2({
        theme: 'bootstrap4',
        placeholder: 'Choose Your Job Role',
        width: '100%',
    });

    $('#jobcategorynameadd').on('change', function() {
        var categoryId = $(this).val();
        if (categoryId) {
            $.ajax({
                url: '/admins/get-job-roles/' + categoryId,
                type: "GET",
                dataType: "json",
                success: function(data) {
                    $('#jobrole').empty(); // Clear previous options
                    $('#jobrole').append('<option value="">Select Job Role</option>');
                    $.each(data, function(key, value) {
                        $('#jobrole').append('<option value="' + key + '">' + value + '</option>');
                    });
                }
            });
        } else {
            $('#jobrole').empty();
            $('#jobrole').append('<option value="">Select Job Role</option>');
        }
    });
});
</script>



<script>
    $(document).ready(function (){
        var max_fields = 3;
        var x = 0;

        $('#addbtn').on('click',function(){
            if(x<max_fields){
                x++;
                console.log(x);
                var wrapperquestion =`
                        <div class="row">
                                <div class="col-md-10">
                                <h5 class="card-title">Question ${x}</h5>
                            <input type="text" class="form-control" id="address" name="q${x}" style="border:1px solid #333;height:40px;font-size:13px" required></div>
                            <div class="col-md-2">
                                <br>
                            <i class="las la-minus-circle removebtn" style="color:red;font-size:27px;"></i>
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

        $('#branch').select2({
            theme: 'bootstrap4',
            placeholder: 'Choose Your Branch',
            width: '100%'
        });
    });

    $('#branches').select2({
        theme: 'bootstrap4',
        placeholder: 'Choose Your branch',
        width: '100%',
    });

    $('#qual').select2({
        theme: 'bootstrap4',
        placeholder: 'Choose Your Qualification',
        width: '100%',
    });

    $('#offer').select2({
        theme: 'bootstrap4',
        placeholder: 'Choose Your Offer',
        width: '100%',
    });

    </script>

</script>
<script>

$(document).ready(function() {
    const quill = new Quill('#deseditor', {
        theme: 'snow'
    });

    quill.on('text-change', function() {
        $('#jobrequired').val(quill.root.innerHTML);
    });

    const quillspec = new Quill('#jobspec', {
        theme: 'snow'
    });

    quillspec.on('text-change', function() {
        $('#jobspecreq').val(quillspec.root.innerHTML);
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
