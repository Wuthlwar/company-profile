@extends('layouts.main')
@section('content')
<style>
    @import url('https://fonts.googleapis.com/css?family=Open+Sans&display=swap');

:root{
    --succes-color: #2ecc71;;
    --error-color: #e74c3c;
}
    .form-control{
    margin-bottom: 10px;
    padding-bottom: 20px;
    position: relative;
}

.form-control label{
    color:#777;
    display: block;
    margin-bottom: 5px;
}

.form-control input
{
    border: 2px solid #f0f0f0;
    border-radius: 4px;
    display: block;
    width: 100%;
    padding: 10px;
    font-size: 14px;
}

.form-control input:focus{
    outline: 0;
    border-color: #777;

}

.form-control.success input {
    border-color: var(--succes-color);
}

.form-control.error input {
    border-color: var(--error-color);
}

.form-control small{
    color: var(--error-color);
    position: absolute;
    bottom: 0;
    left: 0;
    visibility: hidden;
}

.form-control.error small{
    visibility: visible;
}

#agreeCheckbox {
        accent-color: green;
    }

    #agreeCheckbox {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        border: 1px solid green;
        outline: none;
        cursor: pointer;
    }

    #agreeCheckbox:checked {
        background-color: rgb(17, 194, 17);
    }
</style>
        <!--News Details Start-->
        <section class="news-details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <div class="news-details__left">
                            <div class="news-details__img">
                                @if ($vacant_detail->vacant_banner==null)
                                <img src="{{asset('job_banner/banner2.png')}}" alt="">
                                @else
                                <img src="{{asset('storage/uploads/jobvacants/' . $vacant_detail->vacant_banner)}}" alt="">
                                @endif
                                <br><br>
                            </div>

                            <h3 style="font-size: 20px;">
                                <span class="badge rounded-pill bg-primary"> {{count($vacant_count)}}</span>
                                {{$get_cateID->category_name}}, Job founds</h3><hr>
                            <div class="news-details__content">
                                <ul class="list-unstyled news-details__meta">
                                    <li><i class="far fa-calendar"></i> {{$vacant_detail->created_at->format('d F Y')}}
                                    </li>
                                    <li> {{ $vacant_detail->created_at->diffForHumans() }}</a>
                                    </li>
                                </ul>
                                <h3 class="news-details__title" style="font-size: 22px;">{{$vacant_detail->vacant_name}}</h3>
                                <p class="news-details__text-1">
                                    <hr>

                                    @if($vacant_detail->male!=null && $vacant_detail->female!=null)
                                        Male / Female<br>
                                        {{$vacant_detail->male}} / {{$vacant_detail->male}} Posts

                                    @elseif($vacant_detail->male!=null)
                                    Male - {{$vacant_detail->male}} Posts
                                    @elseif($vacant_detail->female!=null)
                                    Female - {{$vacant_detail->female}} Posts
                                    @endif
                                    <hr>

                                    {!! $vacant_detail->vacant_description !!}

                                    Salary<br>
                                    <i id="toggleEye" class="far fa-eye" style="cursor: pointer;" onclick="toggleSalary()"></i>
                                    <span id="salary" style="display: none;">
                                        {{ number_format($vacant_detail->salary) }}   MMK
                                    </span>

                                    <hr>

                                    <h5>Opportunities</h5><br>
                                    {{$vacant_detail->vacant_shortxt}}<hr>

                                    Locations<br>
                                    @foreach ($getbranches as $getbranch)

                                        <span class="badge bg-primary" style="font-size: 16px;">
                                            <i class="las la-trash" style="color: red; font-size: 20px; cursor: pointer;"
                                            onclick="confirmDelete('{{ route('branches.delete', $getbranch->id) }}')"></i>
                                            {{$getbranch->branch_name}}
                                        </span>

                                    @endforeach

                                    <table class="table">
                                        <thead>
                                          <tr>
                                            <th scope="col">Branch Name</th>
                                            <th scope="col">Branch Address</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($getbranches as $getbranch)
                                          <tr>
                                            <td>{{$getbranch->branch_name}}</td>
                                            <td> {{$getbranch->branch_address}}</td>
                                          </tr>
                                          @endforeach
                                        </tbody>
                                      </table>
                                </p>

                                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#apply">Apply Now</button>

                                <!-- Modal -->
                                <div class="modal fade" id="apply" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="applyLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color:#015fc9;">
                                        <h5 class="modal-title" id="applyLabel"style="color:#fff;" >Job Application Form</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{route('Job_Application_form.store')}}" method="POST" enctype="multipart/form-data" id="form" class="form">
                                                @csrf

                                                @foreach ($getbranches as $getbranch)
                                                <input type="hidden" value="{{$getbranch->id}}" name="branch_id[]">
                                                @endforeach

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <font style="color:#000">Position</font>
                                                        <div class="comment-form__input-box">

                                                            <input type="hidden" placeholder="Your name" name="cat_id" value=" {{$get_cateID->id}}">
                                                            <input type="hidden" placeholder="Your name" name="jobvacant_id" value="{{$vacant_detail->id}}">
                                                            <input type="text" placeholder="Your name" name="position" value="{{$vacant_detail->vacant_name}}" readonly>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <h5> PERSONAL INFORMATION</h5>
                                                        <hr>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <font style="color:#000">Title</font><br>
                                                        <div class="comment-form__input-box">
                                                            <div class="form-check form-check-inline" style="padding:0px 30px;">
                                                                <input class="form-check-input" type="radio" name="title" id="titleMr" value="Mr." {{ old('title') == 'Mr.' ? 'checked' : '' }}>
                                                                <label class="form-check-label" for="titleMr" style="font-size: 15px;">Mr.</label>
                                                            </div>

                                                            <div class="form-check form-check-inline" style="padding:0px 30px;">
                                                                <input class="form-check-input" type="radio" name="title" id="titleMs" value="Ms." {{ old('title') == 'Ms.' ? 'checked' : '' }}>
                                                                <label class="form-check-label" for="titleMs" style="font-size: 15px;">Ms./Mrs.</label>
                                                            </div><br>
                                                            <small class="text-danger" id="titleError">Please select a title.</small>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <font style="color:#000">Name</font>
                                                        <div class="comment-form__input-box">
                                                            <input type="text" placeholder="Real Name" name="surname"><br>
                                                            <small class="text-danger">Name - name is required.</small>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12"><hr></div>
                                                    <div class="col-md-6">
                                                        <font style="color:#000">Phone Number</font>
                                                        <div class="comment-form__input-box">
                                                            {{-- <input type="text" placeholder="09" minlength="11" name="phone"> --}}
                                                            <input type="text" placeholder="09" name="phone" pattern="\d{11}" maxlength="11" title="Please enter exactly 11 digits">
                                                            <br>
                                                            <small class="text-danger">Phone Number is required.</small>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <font style="color:#000">Email</font>
                                                        <div class="comment-form__input-box">
                                                            <input type="email" placeholder="Your Email" name="email"><br>
                                                            <small class="text-danger">Email is required and must be a valid email address.</small>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12"><hr></div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <font style="color:#000">Current Address</font>
                                                        <div class="comment-form__input-box text-message-box">
                                                            <textarea name="current_address" placeholder="Your Current Address">{{ old('current_address') }}</textarea><br>
                                                            <small class="text-danger">Current Address is required.</small>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <font style="color:#000">Permanent/Emergency Address</font>
                                                        <div class="comment-form__input-box text-message-box">
                                                            <textarea name="emergency_address" placeholder="Your Emergency Address">{{ old('emergency_address') }}</textarea><br>
                                                            <small class="text-danger">Permanent/Emergency Address is required.</small>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12"><hr></div>
                                                    <div class="col-md-12">
                                                        <font style="color:#000">Career Summary</font>
                                                        <div class="comment-form__input-box text-message-box">
                                                            <textarea name="career_summary" placeholder="Your Career Summary">{{ old('career_summary') }}</textarea><br>
                                                            {{-- <small class="text-danger">Career Summary is required.</small> --}}
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12"><hr></div>
                                                    <div class="col-md-6">
                                                        <font style="color:#000">Please upload your resume</font>
                                                        <br><br>
                                                        <div class="comment-form__input-box text-message-box">
                                                            <input type="file" name="resume" accept=".pdf">
                                                            <br><br>
                                                            <p style="color: rgb(3, 3, 3);">
                                                                Accepted file types: docx, pdf, Max. file size: 10 MB.
                                                            </p><br>
                                                            <small class="text-danger">Please upload your resume.</small>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <font style="color:#000">Agree</font>
                                                        <br><br>
                                                        <div class="comment-form__input-box">
                                                            <div class="form-check form-check-inline">
                                                                <input type="checkbox" name="agree" value="agree" id="agreeCheckbox" {{ old('agree') ? 'checked' : '' }}>
                                                                <br><br>
                                                                <p style="color: rgb(3, 3, 3);">
                                                                    I certify that all statements and information in this application are true in all respects*
                                                                </p><br>
                                                                <small class="text-danger">You must agree to continue.</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12"><hr></div>
                                                    <div class="comment-form__btn-box">
                                                        <button type="submit" class="thm-btn comment-form__btn btn btn-danger">Apply Now</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" style="border-radius: 30px;"  data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="news-details__bottom">
                                <p class="news-details__tags">
                                    {{-- <span>Tags</span> --}}
                                    @foreach ( $vacants_tags as  $vacants_tag)
                                    <a href="{{route('our_opportunities_detail',$vacants_tag->id)}}" style="color: #000;">{{$vacants_tag->vacant_name}}</a>
                                    @endforeach
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="sidebar">
                            <div class="sidebar__single sidebar__comments">
                                <h3 class="sidebar__title">Job By Categories</h3>
                                <ul class="sidebar__comments-list list-unstyled">
                                    @foreach($categories_for_vacant as $category)
                                        @if($category->status=='online')
                                        <li>
                                            <div class="sidebar__comments-icon" style="width:30px;height:30px;">
                                                <i class="fas fa-list" style="font-size: 17px;"></i>
                                            </div>
                                            <div class="sidebar__comments-text-box">
                                                <p style="color:#000;"><a href="{{route('our_opportunities_categories_jobs',$category->id)}}">{{$category->category_name}}</a></p>
                                            </div>
                                        </li>
                                        @endif
                                    @endforeach
                                </ul>
                                <br><br>
                                <a href="{{route('our_all_categories_job')}}" style="color:#2b49f3">See More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection
@section('script')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function toggleSalary() {
        var salaryElement = document.getElementById('salary');
        var toggleIcon = document.getElementById('toggleEye');

        if (salaryElement.style.display === 'none') {
            salaryElement.style.display = 'inline';
            toggleIcon.classList.remove('la-eye');
            toggleIcon.classList.add('la-eye-slash');
        } else {
            salaryElement.style.display = 'none';
            toggleIcon.classList.remove('la-eye-slash');
            toggleIcon.classList.add('la-eye');
        }
    }
</script>

{{--
<script>
    document.getElementById('form').addEventListener('submit', function(event) {
        event.preventDefault();
        var position = document.querySelector('input[name="position"]').value;
        var title = document.querySelector('input[name="title"]').value;
        var surname = document.querySelector('input[name="surname"]').value;
        var phone = document.querySelector('input[name="phone"]').value;
        var email = document.querySelector('input[name="email"]').value;
        var current_address = document.querySelector('input[name="current_address"]').value;
        var career_summary = document.querySelector('textarea[name="career_summary"]').value;
        var emergency_address = document.querySelector('input[name="emergency_address"]').value;
        var resume = document.querySelector('input[name="resume"]').value;
        var agree = document.querySelector('input[name="agree"]').checked ? 'Yes' : 'No';
        var date = new Date().toLocaleDateString();

        Swal.fire({
            title: 'Are you sure?',
            html: `
                <p><strong>Position:</strong> ${position}</p>
                <p><strong>Surname:</strong>${title} ${surname}</p>
                <p><strong>Phone:</strong> ${phone}</p>
                <p><strong>Email:</strong> ${email}</p>
                <p><strong>Current Address:</strong> ${current_address}</p>
                <p><strong>Career Summary:</strong> ${career_summary}</p>
                <p><strong>Emergency Address:</strong> ${emergency_address}</p>
                <p><strong>Resume:</strong> ${resume}</p>
                <p><strong>Agree:</strong> ${agree}</p>
                <p><strong>Date:</strong> ${date}</p>
                <p>Do you want to submit the form?</p>`,
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, submit it!'
        }).then((result) => {
            if (result.isConfirmed) {
                this.submit(); // Submit the form if the user confirms
            }
        });
    });
</script> --}}
@if ($errors->any())
    <script>
        Swal.fire({
            title: 'Fail',
            html: '<ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>',
            icon: 'error'
        });
    </script>
@endif

{{-- <script>
    const form = document.getElementById('form');
    const email = document.querySelector('input[name="email"]');
    const surname = document.querySelector('input[name="surname"]');
    const phone = document.querySelector('input[name="phone"]');
    const current_add = document.querySelector('textarea[name="current_address"]');
    const emer_add = document.querySelector('textarea[name="emergency_address"]');
    // const career_summary = document.querySelector('textarea[name="career_summary"]');
    const resume = document.querySelector('input[name="resume"]');
    const agree = document.querySelector('input[name="agree"]');
    const titleMr = document.getElementById('titleMr');
    const titleMs = document.getElementById('titleMs');
    const titleError = document.getElementById('titleError');

    function showError(input, message) {
        const small = input.parentElement.querySelector('small');
        small.innerText = message;
        input.parentElement.classList.add('error');
    }

    function clearError(input) {
        const small = input.parentElement.querySelector('small');
        small.innerText = '';
        input.parentElement.classList.remove('error');
    }

    function checkEmail(input) {
        const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        if (!re.test(input.value.trim())) {
            showError(input, 'Email is not valid');
        } else {
            clearError(input);
        }
    }

    function checkFile(input) {
        const file = input.files[0];
        const allowedExtensions = /(\.jpg|\.jpeg|\.png|\.docx|\.pdf)$/i;
        const maxSize = 10 * 1024 * 1024; // 10 MB

        if (!file) {
            showError(input, 'Please upload your resume.');
            return false;
        }

        if (!allowedExtensions.exec(file.name)) {
            showError(input, 'Invalid file type.');
            return false;
        }

        if (file.size > maxSize) {
            showError(input, 'File size exceeds 10 MB.');
            return false;
        }

        clearError(input);
        return true;
    }

    function checkForm() {
        const inputs = [surname, phone, current_add, emer_add, resume, agree];
        let isValid = true;

        inputs.forEach(input => {
            if (input.type === 'checkbox' && !input.checked) {
                showError(input, 'You must agree to continue.');
                isValid = false;
            } else if (input.value.trim() === '') {
                showError(input, `${input.name.replace('_', ' ')} is required.`);
                isValid = false;
            } else {
                clearError(input);
            }
        });

        if (!titleMr.checked && !titleMs.checked) {
            showError(titleError, 'Please select a title.');
            isValid = false;
        } else {
            clearError(titleError);
        }

        if (!checkFile(resume)) {
            isValid = false;
        }

        if (!isValid) {
            return false;
        }

        return true;
    }

    form.addEventListener('submit', function(e) {
        e.preventDefault();

        if (checkForm()) {
            form.submit();
        }
    });

    email.addEventListener('blur', function() {
        checkEmail(email);
    });
</script> --}}

<script>
    const form = document.getElementById('form');
    const email = document.querySelector('input[name="email"]');
    const surname = document.querySelector('input[name="surname"]');
    const phone = document.querySelector('input[name="phone"]');
    const current_add = document.querySelector('textarea[name="current_address"]');
    const emer_add = document.querySelector('textarea[name="emergency_address"]');
    const resume = document.querySelector('input[name="resume"]');
    const agree = document.querySelector('input[name="agree"]');
    const titleMr = document.getElementById('titleMr');
    const titleMs = document.getElementById('titleMs');
    const titleError = document.getElementById('titleError');

    function showError(input, message) {
        const small = input.parentElement.querySelector('small');
        small.innerText = message;
        input.parentElement.classList.add('error');
    }

    function clearError(input) {
        const small = input.parentElement.querySelector('small');
        small.innerText = '';
        input.parentElement.classList.remove('error');
    }

    function checkEmail(input) {
        const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        if (!re.test(input.value.trim())) {
            showError(input, 'Email is not valid');
        } else {
            clearError(input);
        }
    }

    function checkFile(input) {
        const file = input.files[0];
        // const allowedExtensions = /(\.docx|\.pdf)$/i;
        const allowedExtensions = /(\.docx|\.pdf)$/i;
        const maxSize = 10 * 1024 * 1024; // 10 MB

        if (!file) {
            showError(input, 'Please upload your resume.');
            return false;
        }

        if (!allowedExtensions.exec(file.name)) {
            showError(input, 'Invalid file type.');
            return false;
        }

        if (file.size > maxSize) {
            showError(input, 'File size exceeds 10 MB.');
            return false;
        }

        clearError(input);
        return true;
    }

    function checkForm() {
        const inputs = [surname, phone, current_add, emer_add, resume, agree];
        let isValid = true;

        inputs.forEach(input => {
            if (input.type === 'checkbox' && !input.checked) {
                showError(input, 'You must agree to continue.');
                isValid = false;
            } else if (input.value.trim() === '') {
                showError(input, `${input.name.replace('_', ' ')} is required.`);
                isValid = false;
            } else {
                clearError(input);
            }
        });

        if (!titleMr.checked && !titleMs.checked) {
            titleError.style.visibility = 'visible';
            isValid = false;
        } else {
            titleError.style.visibility = 'hidden';
        }

        if (!checkFile(resume)) {
            isValid = false;
        }

        return isValid;
    }

    form.addEventListener('submit', function(e) {
        e.preventDefault();

        if (checkForm()) {
            var position = document.querySelector('input[name="position"]').value;
            var title = document.querySelector('input[name="title"]:checked') ? document.querySelector('input[name="title"]:checked').value : '';
            var surname = document.querySelector('input[name="surname"]').value;
            var phone = document.querySelector('input[name="phone"]').value;
            var email = document.querySelector('input[name="email"]').value;
            var current_address = document.querySelector('textarea[name="current_address"]').value;
            var career_summary = document.querySelector('textarea[name="career_summary"]').value;
            var emergency_address = document.querySelector('textarea[name="emergency_address"]').value;
            var resume = document.querySelector('input[name="resume"]').value;
            var agree = document.querySelector('input[name="agree"]').checked ? 'Yes' : 'No';
            var date = new Date().toLocaleDateString();

            Swal.fire({
                title: 'Are you sure?',
                html: `
                    <p><strong>Position:</strong> ${position}</p>
                    <hr>
                    <p><strong>Name:</strong> ${title} ${surname}</p>
                    <hr>
                    <p><strong>Phone:</strong> ${phone}</p>
                    <hr>
                    <p><strong>Email:</strong> ${email}</p>
                    <hr>
                    <p><strong>Current Address:</strong> ${current_address}</p>
                    <hr>
                    <p><strong>Career Summary:</strong> ${career_summary}</p>
                    <hr>
                    <p><strong>Emergency Address:</strong> ${emergency_address}</p>
                    <hr>
                    <p><strong>Agree:</strong> ${agree}</p>
                    <hr>
                    <p><strong>Date:</strong> ${date}</p>
                    <hr>
                    <p>Do you want to submit the form?</p>`,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, submit it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });
        }
    });

    email.addEventListener('blur', function() {
        checkEmail(email);
    });
</script>


@endsection
