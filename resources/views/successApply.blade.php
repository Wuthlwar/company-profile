@extends('layouts.main')
@section('content')

<section class="page-header" style="background-color: #99d5d5;">
    {{-- <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg)">
    </div> --}}
    <div class="page-header-shape-1" style="background-color: #99d5d5;"><img src="assets/images/shapes/page-header-shape-1.png" alt=""></div>
    <div class="container">
        <div class="page-header__inner">
            @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <center>
            <i class="fa fa-check-circle" style="font-size:50px;color:green;"></i>
        <h1>Your form has been successfully saved.</h1><br>
        <p style="font-size: 20px;">Thanks for applying for our company. We will call back soon.</p>
<br>
        <img src="job_banner/success2.png" alt="">
        <hr>
        <a href="{{ url('/') }}" class="btn btn-primary">Go to Home</a>
    </center>
        </div>
    </div>
</section>
@endsection
@section('script')

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
            document.addEventListener('DOMContentLoaded', function () {
            @if (session('success'))
                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: '{{ session('success') }}',
                    timer: 3000, // 3 seconds
                    timerProgressBar: true,
                    willClose: () => {
                        window.location.href = "{{ route('job_application_apply_successfully') }}";
                    }
                });
            @endif

            @if ($errors->any())
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    html: '{!! implode('<br>', $errors->all()) !!}',
                    confirmButtonText: 'OK'
                });
            @endif
        });
    </script>

@endsection
