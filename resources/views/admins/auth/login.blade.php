@extends('admins.auth.app')

@section('content')
<div class="wrap-login100 shadow" style="background-color: rgba(255, 255, 255,0.9); box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px; border-radius:40px; ">
    <div class="login100-pic js-tilt" data-tilt>
        <img src="{{ asset('html/pro1logo.png') }}" alt="IMG">
    </div>

    <form class="login100-form validate-form"  method="POST" action="{{ route('check') }}">
        @csrf
        <span class="login100-form-title">
            Admin Login
        </span>

        <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
            <input class="input100" type="text" name="email" placeholder="Email" value="{{ old('email') }}" required>
            <span class="focus-input100"></span>
            <span class="symbol-input100">
                <i class="fa fa-envelope" aria-hidden="true"></i>
            </span>
        </div>
        <div class="wrap-input100 validate-input" data-validate = "Password is required">
            <input class="input100" type="password" name="password" required placeholder="Password">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
                <i class="fa fa-lock" aria-hidden="true"></i>
            </span>
        </div>

        <div class="container-login100-form-btn">
            <button class="login100-form-btn">
                Login
            </button>
        </div>

        <div class="text-center p-t-12">
            {{-- <span class="txt1">
                Forgot
            </span>
            <a class="txt2" href="#">
                Username / Password?
            </a> --}}
            @if(session('fails'))
                <div class="alert alert-danger">
                    {{ session('fails') }}
                </div>
            @endif
        </div>

        <div class="text-center p-t-136">
            {{-- <a class="txt2" href="{{ route('login') }}">
                Create your Account
                <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
            </a> --}}
        </div>
    </form>
</div>
@endsection
