@extends('layouts.app')

@section('title', 'Data Perusahaan')

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
                        <li class="breadcrumb-item"><a href="{{route('admin.accounts.index')}}">Data Akun Perusahaan</a></li>
                        <li class="breadcrumb-item active">{{request()->routeIs('admin.accounts.create') ? 'Tambah' : 'Edit'}}</li>
                    </ol>
                </div>
                <h4 class="page-title">Akun Perusahaan</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            Gagal mengirimkan data!
                        </div>
                    @endif

                    @if(session()->get('status') == 'success')
                        <div class="alert alert-success" role="alert">
                            {{session()->get('message')}}
                        </div>
                    @elseif(session()->get('status') == 'failed')

                        <div class="alert alert-danger" role="alert">
                            {{session()->get('message')}}
                        </div>
                    @endif

                    <form action="{{request()->routeIs('admin.accounts.create') ? route('admin.accounts.store') : route('admin.accounts.update', $account->id)}}" method="post" id="form-main">
                        @csrf

                        @if(request()->routeIs('admin.accounts.edit'))
                        @method('PUT')
                        @endif

                        <div class="form-group mb-2">
                            <label for="" class="mb-1">Nama</label>
                            <input type="text" name="name" id="" class="form-control" value="{{old('name', $account?->name)}}" placeholder="Nama Akun">
                        </div>
                        
                        <div class="form-group mb-2">
                            <label for="" class="mb-1">Email</label>
                            <input type="email" name="email" id="" class="form-control" value="{{old('email', $account?->email)}}" placeholder="Email">
                        </div>
                        
                        <div class="form-group mb-2">
                            <label for="" class="mb-1">Password</label>
                            <input type="password" name="password" id="" class="form-control" value="" placeholder="Kata sandi">
                        </div>

                        <button class="btn btn-primary">Submit</button>
                        <a href="{{route('admin.accounts.index')}}" class="btn btn-warning">Kembali</a>
                    </form>

                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div>

</div>
<!-- container -->

<form id="form" method="POST" style="display: none;">
    {{ csrf_field() }}
    <input type="hidden" name="id">
    <input type="hidden" name="type">
</form>

@stop

@section('js')

<script>
    function action(event, id, type) {
        event.preventDefault()

        var form = document.getElementById('form')
        form['id'].value = id
        form['type'].value = type
        form.submit()
        
    }

    function submitForm(type) {
        var form = document.getElementById('form-main')
        form['type'].value = type
        form.submit()
    }
</script>

@stop