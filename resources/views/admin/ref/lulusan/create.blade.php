@extends('layouts.app')

@section('title', 'Tambah Data Lulusan')

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
                        <li class="breadcrumb-item"><a href="{{route('admin.lulusan.index')}}">Data Lulusan</a></li>
                        <li class="breadcrumb-item active">Tambah</li>
                    </ol>
                </div>
                <h4 class="page-title">Tambah Data Lulusan</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{route('admin.lulusan.index')}}" class="btn btn-warning">
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

                    <form action="{{route('admin.lulusan.store')}}" method="POST">
                        @csrf
                        <div class="row mb-3">
                            <label class="col-md-3 col-form-label">Nama</label>
                            <div class="col-md-9 m-auto">
                                <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama">
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