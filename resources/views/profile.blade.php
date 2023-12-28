@extends('layouts.app')

@section('title', 'Profile')

@section('content')
<!-- Start Content-->
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Dinas Ketenagakerjaan Kota Tanjung Balai</a></li>
                        <li class="breadcrumb-item active">Profile</li>
                    </ol>
                </div>
                <h4 class="page-title">Profile</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">

                <div class="card-body">

                    @if(session()->get('message'))
                        <div class="alert alert-info">
                            {{session()->get('message')}}    
                        </div>
                    @endif

                    <!-- form -->
                    <form action="{{route('profile')}}" method="post">

                        @csrf

                        <div class="mb-3">
                            <label for="fullname" class="form-label">Nama</label>
                            <input name="name" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" id="fullname"
                                placeholder="Enter your name" required="" value="{{ old('name', $user->name) }}">

                            @if($errors->has('name'))
                                <div class="invalid-feedback">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="emailaddress" class="form-label">Email</label>
                            <input name="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" id="emailaddress" required="" placeholder="Masukan email" value="{{ old('email', $user->email) }}">

                            @if($errors->has('email'))
                                <div class="invalid-feedback">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Kata Sandi</label>
                            <input name="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" type="password" id="password"
                                placeholder="Masukan kata sandi">

                            @if($errors->has('password'))
                                <div class="invalid-feedback">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </div>
                            @endif
                        </div>
                        <div class="mb-0 d-grid text-center">
                            <button class="btn btn-primary fw-semibold" type="submit">Submit</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop