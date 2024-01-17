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
                        <li class="breadcrumb-item"><a href="{{route('office.index')}}">Data Perusahaan</a></li>
                        <li class="breadcrumb-item active">Detail</li>
                    </ol>
                </div>
                <h4 class="page-title">Data Perusahaan</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    
                    <a href="{{route('office.print-detail', request()->route('id'))}}" class="btn btn-success">
                        <i class="mdi mdi-printer"></i>
                        <span class="ml-2">Cetak</span>
                    </a>
                    
                </div>
                {{-- @if(request()->routeIs('office.view') && auth()->user()->role == 'Admin')

                    <div class="card-header">

                        @if($dataUmum->status == 'Waiting')
                        <a href="#" onclick="action(event, {{$dataUmum->id}}, 'verify')" class="btn btn-success"> 
                            <i class="mdi mdi-check"></i>
                            <span class="ml-2">Terima</span>
                        </a>
                        <a href="#" onclick="action(event, {{$dataUmum->id}}, 'reject')" class="btn btn-danger">
                            <i class="mdi mdi-cancel"></i>
                            <span class="ml-2">Tolak</span>
                        </a>
                        @endif
                        
                        <a href="#" onclick="action(event, {{$dataUmum->id}}, 'delete')" class="btn btn-danger">
                            <i class="mdi mdi-delete"></i>
                            <span class="ml-2">Hapus</span>
                        </a>
                        
                    </div>

                @endif --}}
                <div class="card-body">

                    <div id="basicwizard">

                        <ul class="nav nav-pills nav-justified form-wizard-header mb-4">
                            <li class="nav-item">
                                <a href="#tab1" data-bs-toggle="tab" data-toggle="tab"  class="d-flex h-100 nav-link rounded-0 py-2"> 
                                    <span class="d-none d-sm-inline m-auto">Data Umum</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#tab2" data-bs-toggle="tab" data-toggle="tab" class="d-flex h-100 nav-link rounded-0 py-2">
                                    <span class="d-none d-sm-inline m-auto">Data Ketenagakerjaan</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#tab3" data-bs-toggle="tab" data-toggle="tab" class="d-flex h-100 nav-link rounded-0 py-2">
                                    <span class="d-none d-sm-inline m-auto">Fasilitas Perusahaan</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#tab4" data-bs-toggle="tab" data-toggle="tab" class="d-flex h-100 nav-link rounded-0 py-2">
                                    <span class="d-none d-sm-inline m-auto">BPJS Kesehatan dan Ketenagakerjaan</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#tab5" data-bs-toggle="tab" data-toggle="tab" class="d-flex h-100 nav-link rounded-0 py-2">
                                    <span class="d-none d-sm-inline m-auto">Perangkat Hubungan Industri, Pelaksanaan Cuti, dan Kasus/Perselisihan</span>
                                </a>
                            </li>
                        </ul>

                        
                        <div class="tab-content b-0 mb-0">
                            
                            <!-- Data Umum -->

                            <div class="tab-pane" id="tab1">
                                @include('perusahaan.partials.show_data_umum')
                            </div>

                            <!-- Data Ketenagakerjaan -->

                            <div class="tab-pane" id="tab2">
                                @include('perusahaan.partials.show_data_ketenagakerjaan')
                            </div>

                            <!-- Fasilitas Perusahaan -->

                            <div class="tab-pane" id="tab3">
                                @include('perusahaan.partials.show_fasilitas')
                            </div>

                            <!-- BPJS Kesehatan dan Ketenagakerjaan -->

                            <div class="tab-pane" id="tab4">
                                @include('perusahaan.partials.show_jamsos')
                            </div>

                            <!-- Perangkat Hubungan Industri, Pelaksanaan Cuti, dan Kasus/Perselisihan -->

                            <div class="tab-pane" id="tab5">
                                <div class="row">
                                    <div class="col-12">
                                        <!-- Perangkat Hubungan Industri -->
                                        @include('perusahaan.partials.show_hubungan_industri')

                                        <!-- Pelaksanaan Cuti -->
                                        @include('perusahaan.partials.show_cuti')
                                        
                                        <!-- Kasus / Perselisihan -->
                                        @include('perusahaan.partials.show_kasus')
                                    </div> <!-- end col -->
                                </div> <!-- end row -->
                            </div>

                        </div> <!-- tab-content -->
                    </div> <!-- end #basicwizard-->
                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div>

</div>
<!-- container -->
@stop