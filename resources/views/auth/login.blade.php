@extends('layouts.auth')

@section('title', 'Login')

@section('content')
<div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5 position-relative">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xxl-8 col-lg-10">
                <div class="card overflow-hidden">
                    <div class="row g-0">
                        <div class="col-lg-6 d-none d-lg-block p-2">
                            <img src="{{ asset('assets/images/auth-img.jpg') }}" alt="" class="img-fluid rounded h-100">
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex flex-column h-100">
                                <div class="auth-brand p-4 text-center">
                                    <a href="" class="logo-light">
                                        <img src="{{ asset('assets/images/logo-tanjung-balai.png') }}" alt="logo" width="100px">
                                    </a>
                                    <a href="" class="logo-dark">
                                        <img src="{{ asset('assets/images/logo-tanjung-balai.png') }}" alt="dark logo" width="100px">
                                    </a>
                                </div>
                                <div class="p-4 my-auto">
                                    <h4 class="fs-20">Masuk</h4>
                                    <p class="text-muted mb-3">
                                    Dinas Ketenagakerjaan Kota Tanjung Balai
                                    </p>

                                    <!-- form -->
                                    <form action="{{route('login')}}" method="post">

                                        @csrf
                                        
                                        <div class="mb-3">
                                            <label for="emailaddress" class="form-label">Email</label>
                                            <input name="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" id="emailaddress" required="" placeholder="Masukan email" value="{{ old('email') }}">
                                            @if($errors->has('email'))
                                                <div class="invalid-feedback">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="mb-3">
                                            <label for="password" class="form-label">Kata Sandi</label>
                                            <input name="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" type="password" required="" id="password"
                                                placeholder="Masukan kata sandi">

                                            @if($errors->has('password'))
                                                <div class="invalid-feedback">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="mb-3">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input"
                                                    id="checkbox-signin" name="remember">
                                                <label class="form-check-label" for="checkbox-signin">Ingat saya</label>
                                            </div>
                                        </div>
                                        <div class="mb-0 text-start">
                                            <button class="btn btn-soft-primary w-100" type="submit">
                                                <i class="ri-login-circle-fill me-1"></i> 
                                                <span class="fw-bold">Log In</span> 
                                            </button>
                                        </div>

                                    </form>
                                    <!-- end form-->
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <p class="text-dark-emphasis">Belum memiliki akun ? <a href="{{route('register')}}"
                        class="text-dark fw-bold ms-1 link-offset-3 text-decoration-underline"><b>Mendaftar</b></a>
                </p>
            </div> <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
<!-- end page -->
@stop