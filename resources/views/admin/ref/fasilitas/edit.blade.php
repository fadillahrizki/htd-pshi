@extends('layouts.app')

@section('title', 'Edit Data Fasilitas')

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
                        <li class="breadcrumb-item"><a href="{{route('admin.kategori-fasilitas.index')}}">Data Fasilitas</a></li>
                        <li class="breadcrumb-item active">Edit</li>
                    </ol>
                </div>
                <h4 class="page-title">Edit Data Fasilitas</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{route('admin.fasilitas.index')}}" class="btn btn-warning">
                        <i class="mdi mdi-arrow-left"></i>
                        <span class="ml-2">Kembali</span>
                    </a>
                </div>

                <div class="card-body">
                    @if(session()->get('message'))
                        <div class="alert alert-info">
                            {{session()->get('message')}}    
                        </div>
                    @endif

                    <form action="{{route('admin.fasilitas.update', $model->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row mb-3">
                            <label class="col-md-3 col-form-label">Kategori</label>
                            <div class="col-md-9 m-auto">
                                <select name="kategori" id="kategori" class="form-control">
                                    <option value="">Pilih</option>
                                    @foreach(\App\Models\RefKategoriFasilitas::get() as $kategori)
                                    <option value="{{$kategori->id}}" {{$model->kategori_id == $kategori->id ? 'selected=""' : ''}}>{{$kategori->nama}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-3 col-form-label">Nama</label>
                            <div class="col-md-9 m-auto">
                                <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama" value="{{$model->nama}}">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <button class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                    
                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div> <!-- end row-->

</div>
<!-- container -->

@stop