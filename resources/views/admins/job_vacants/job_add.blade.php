@extends('admins.app')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="d-flex flex-wrap align-items-center justify-content-between mb-4">
            <div>
                <h4 class="mb-3">Job Vacant Detail</h4>
            </div>
            {{-- <a href="page-add-return.html" class="btn btn-primary add-list"><i class="las la-plus mr-3"></i>Add</a> --}}
            <button type="button" class="btn btn-primary mt-2" data-toggle="modal" data-target="#jobModal"><i class="las la-plus mr-3"></i>Add</button>
        </div>
    </div>
    <div class="col-lg-3"></div>
    <div class="col-lg-6">
        <div class="col-sm-12">
                    @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif
            <form action="{{route('Job_vacant_lists.store')}}" method="post" enctype="multipart/form-data" class="row g-3" id="jobForm">
                @csrf
            <div class="card">
                <div class="card-header d-flex justify-content-between rounded-sm">
                    <div class="header-title">
                        <h6 class="card-title">Add New Job Vacant</h6>
                    </div>
                </div>
                <div class="card-body">
                        <div class="row">
                              <div class="col-md-12">
                                <label for="vacantname" class="form-label card-title" style="font-size:15px;">Job Title <font style="color:red;">*</font></label>
                                <input type="text" class="form-control" id="vacantname" name="vacant_name" style="border:1px solid #333;height:40px;font-size:13px" required>
                                <hr>
                              </div>

                              <div class="col-md-6">
                                <label for="branch" class="form-label card-title" style="font-size:15px;">
                                    Industry<font style="color:red;">*</font>
                                </label>
                                <select class="form-control" id="industry" name="industry" style="border:1px solid #333;" required>
                                        <option value="">Select Industry</option>
                                        <option value="Retail & Wholesale">Retail & Wholesale</option>
                                </select>
                                <hr>
                            </div>

                              <div class="col-md-6">
                                <label for="branch" class="form-label card-title" style="font-size:15px;">
                                    Employee Types<font style="color:red;">*</font>
                                </label>
                                <select class="form-control" id="emptypes" name="emptype" style="border:1px solid #333;" required>
                                        <option value="">Select Employee Type</option>
                                        <option value="Full-Time">Full-Time</option>
                                        <option value="Part-Time">Part-time</option>
                                        <option value="Temporary">Temporary</option>
                                        <option value="Contract">Contract</option>
                                        <option value="Internship">Internship</option>
                                        <option value="Remote">Remote</option>
                                </select>
                                <hr>
                            </div>

                            <div class="col-md-6">
                                <label for="male" class="form-label card-title" style="font-size:15px;">
                                    Number Of Vacancies<font style="color:red;">*</font>
                                </label>
                                <input type="number" class="form-control" id="vacant_num" name="no_vacant" style="border:1px solid #333;height:40px;font-size:13px" required>
                                <hr>
                            </div>

                            <div class="col-md-6">
                                <label for="branch" class="form-label card-title" style="font-size:15px;">
                                   Qualification<font style="color:red;">*</font>
                                </label>
                                <select class="form-control" id="qual" name="qualification[]" style="border:1px solid #333;" multiple required>
                                        <option value="">Select Qualification</option>
                                        <option value="Unspecified">Unspecified</option>
                                        <option value="Certificate">Certificate</option>
                                        <option value="Middle School">Moddle School</option>
                                        <option value="High School">Hight School</option>
                                        <option value="Postgraduate">Postgraduate</option>
                                        <option value="Diploma">Diploma</option>
                                        <option value="Bachelor">Bachelor</option>
                                        <option value="Master">Master</option>
                                        <option value="PHD">PHD</option>
                                        <option value="Others">Others</option>
                                </select>
                                <hr>
                            </div>

                            <div class="col-md-6">
                                <label for="branch" class="form-label card-title" style="font-size:15px;">
                                   Experience<font style="color:red;">*</font>
                                </label>
                                <select class="form-control" id="exper" name="experience" style="border:1px solid #333;" required>
                                        <option value="">Select Experience</option>
                                        <option value="No Experience, Less Than 1 year">No Experience, Less Than 1 year</option>
                                        <option value="1 Year">1 Year</option>
                                        <option value="2 Years">2 Years</option>
                                        <option value="3 Years">3 Years</option>
                                        <option value="4 Years">4 Years</option>
                                        <option value="5 Years">5 Years</option>
                                        <option value="6 Years">6 Years</option>
                                        <option value="7 Years">7 Years</option>
                                        <option value="8 Years">8 Years</option>
                                        <option value="9 Years">9 Years</option>
                                        <option value="10 Years">10 Years</option>
                                        <option value="11 Years">11 Year</option>
                                        <option value="12 Years">12 Years</option>
                                        <option value="13 Years">13 Years</option>
                                        <option value="14 Years">14 Years</option>
                                        <option value="15 Years">15 Years</option>
                                        <option value="16 Years">16 Years</option>
                                        <option value="17 Years">17 Years</option>
                                        <option value="18 Years">18 Years</option>
                                        <option value="19 Years">19 Years</option>
                                        <option value="20 Years">20 Years</option>
                                        <option value="More Than 20 Years">More Than 20 Years</option>
                                        <option value="More Than 30 Years">More Than 30 Years</option>
                                        <option value="Others">Others</option>
                                </select>
                                <hr>
                            </div>

                            <div class="col-md-6">
                                <label for="male" class="form-label card-title" style="font-size:15px;">Gender<font style="color:red;">*</font></label><br>
                                <div class="form-check-inline">
                                    <label class="form-check-label">
                                      <input type="radio" class="form-check-input" name="gender" value="Male">Male
                                    </label>
                                  </div>
                                  <div class="form-check-inline">
                                    <label class="form-check-label">
                                      <input type="radio" class="form-check-input" name="gender" value="Female">Female
                                    </label>
                                  </div>
                                  <div class="form-check-inline">
                                    <label class="form-check-label">
                                      <input type="radio" class="form-check-input" name="gender" value="Both">Both
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
                                            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                <hr>
                            </div>

                            <div class="col-md-6">
                                <label for="jobrole" class="form-label card-title" style="font-size:15px;">
                                    Job Role <font style="color:red;">*</font>
                                </label>
                                <select class="form-control" id="jobrole" name="job_role" required>
                                    <option value="">Select Job Role</option>
                                </select>
                                <hr>
                            </div>


                                <div class="col-md-12">
                                    <label for="fromDate" class="form-label" id="font-f">Job Description (Roles & Responsibilities)<font style="color:red;">*</font></label><br>
                                    <div id="deseditor" style="height: 400px;"></div>
                                    <!-- Hidden input to store Quill content -->
                                    <input type="hidden" name="jobrequired" id="jobrequired" required>
                                    <hr>
                                </div>

                                <div class="col-md-12">
                                    <label for="fromDate" class="form-label" id="font-f">Job Specification (Skills & Requirements) <font style="color:red;">*</font></label><br>
                                    <div id="jobspec" style="height: 400px;"></div>
                                    <!-- Hidden input to store Quill content -->
                                    <input type="hidden" name="vacant_spec" id="jobspecreq" required>
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
                                        <option value="">Select Region</option>
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
                                        <option value="">Select Township</option>
                                    </select>
                                    <hr>
                                </div>

                                <div class="col-md-12">
                                    <label for="femail" class="form-label card-title" style="font-size:15px;">
                                       Address
                                    </label>
                                    <input type="text" class="form-control" id="address" name="address" style="border:1px solid #333;height:40px;font-size:13px" required>
                                    <hr>
                                </div>

                                <div class="col-md-6">
                                    <label for="branch" class="form-label card-title" style="font-size:15px;">
                                        Branches<font style="color:red;">*</font>
                                    </label>
                                    <select class="form-control" id="branches" name="branch_id[]" multiple required>
                                        @foreach($branches as $branch)
                                            <option value="{{ $branch->id }}">{{ $branch->branch_name }}</option>
                                        @endforeach
                                    </select>
                                    <hr>
                                </div>

                                <div class="col-md-6">
                                    <label for="salary" class="form-label card-title" style="font-size:15px;">
                                        Salary <font style="color:red;">*</font>
                                    </label><br>
                                    <div class="form-check-inline">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="salary" value="Negotiable" required>Negotiable
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="salary" value="Confidential" required>Confidential
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="salary" value="Range" required>Range
                                        </label>
                                    </div>
                                    <hr>
                                </div>

                                <div class="col-md-4 currency-range-fields">
                                    <label for="currency" class="form-label card-title" style="font-size:15px;">
                                        Currency <font style="color:red;">*</font>
                                    </label>
                                    <select class="form-control" id="Currency" name="currency" style="border:1px solid #333;" required>
                                        <option value="">Select Currency</option>
                                        <option value="MMK">MMK</option>
                                        <option value="THB">THB</option>
                                        <option value="USD">USD</option>
                                    </select>
                                    <hr>
                                </div>

                                <div class="col-md-4 currency-range-fields">
                                    <label for="min" class="form-label card-title" style="font-size:15px;">
                                        Min <font style="color:red;">*</font>
                                    </label>
                                    <input type="number" class="form-control" id="min" name="min" style="border:1px solid #333;height:40px;font-size:13px">
                                    <hr>
                                </div>

                                <div class="col-md-4 currency-range-fields">
                                    <label for="max" class="form-label card-title" style="font-size:15px;">
                                        Max <font style="color:red;">*</font>
                                    </label>
                                    <input type="number" class="form-control" id="max" name="max" style="border:1px solid #333;height:40px;font-size:13px">
                                    <hr>
                                </div>

                                  <div class="col-md-12">
                                    <label for="fromDate" class="form-label" id="font-f">Offer <font style="color:red;">*</font></label><br>
                                    <select class="form-control" id="offer" name="offer[]" style="border:1px solid #333;" multiple required>
                                        <option value="">Select Offer</option>
                                        <option value="Commission/Incentive">Commission/Incentive</option>
                                            <option value="Duty Meal,">Duty Meal</option>
                                            <option value="Ferry,">Ferry</option>
                                            <option value="Meal Allowance,">Meal Allowance</option>
                                            <option value="Medical Allowance,">Medical Allowance</option>
                                            <option value="Other Benefits,">Other Benefits</option>
                                            <option value="Ph Bill Allowance,">Ph Bill Allowance</option>
                                            <option value="Quarterly/Yearly Bonus,">Quarterly/Yearly Bonus</option>
                                            <option value="Training,">Training</option>
                                            <option value="Transportation Allowance,">Transportation Allowance</option>
                                            <option value="Uniform,">Uniform</option>
                                            <option value="Yearly Increment,">Yearly Increment</option>
                                    </select>
                                      <hr>
                                </div>

                                <div class="col-md-12">
                                    <label for="fromDate" class="form-label" id="font-f">Add Additional Questions ( Optional )</label><br>
                                    <p style="color: #333;">A Total of 3 additional questions can be added.<br>
                                        Answers will be only in Yes or No options.</p>
                                        <div  id="showquestion">

                                        </div>
                                        <br>
                                         <i class="btn btn-success" id="addbtn"> Add Questions</i>
                                    <hr>
                                </div>

                              <div class="col-md-12">
                                  <label for="categorybanner" class="form-label card-title" style="font-size:15px;">Vacant Banner image
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
                                  <label for="inputName5" class="form-label card-title" style="font-size:15px;">Vacant tumbnail image</label>
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
                              </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary">Close</button>
                    <button type="submit" class="btn btn-primary" id   ="btn-create">Save changes</button>
                 </div>

            </div>
        </form>
        </div>
    </div>
    <div class="col-lg-3"></div>
</div>

@section('script')

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
    $('.currency-range-fields').hide();
    $('#Currency, #min, #max').prop('required', false);

    $('input[name="salary"]').on('change', function() {
        if ($(this).val() === 'Range') {
            $('.currency-range-fields').show();
            $('#Currency, #min, #max').prop('required', true);
        } else {
            $('.currency-range-fields').hide();
            $('#Currency, #min, #max').prop('required', false);
        }
    });
});

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
                    text: 'Please select at least one job vacant to delete!',
                });
                return;
            }

            // Use SweetAlert for confirmation
            Swal.fire({
                title: 'Are you sure?',
                text: 'Do you want to delete selected job vacant?',
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

});

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

<script>
$(document).ready(function() {

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
@endsection
