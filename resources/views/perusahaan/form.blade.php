@extends('layouts.app')

@section('title', 'Data Perusahaan')

@section('content')

<!-- Info Alert Modal -->
<div id="info-alert-modal" class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-body p-4">
                <div class="text-center">
                    <i class="ri-information-line h1 text-info"></i>
                    <h4 class="mt-2">Info!</h4>
                    <p class="mt-3">Apakah anda yakin mengirimkan data ini?</p>
                    <div class="my-2">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tidak</button>
                        <button type="button" class="btn btn-info" onclick="submitForm('submit')">Ya</button>
                    </div>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

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
                        <li class="breadcrumb-item active">{{request()->routeIs('office.create') ? 'Tambah Data' : 'Detail'}}</li>
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
                @if(request()->routeIs('office.view') && auth()->user()->role == 'Admin')

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

                @endif

                @if ($errors->any())
                    <div class="card-header">
                        <div class="alert alert-danger">
                           Gagal mengirimkan data!
                        </div>
                    </div>
                @endif
                
                <div class="card-body">

                    @if(session()->get('status') == 'success')
                        <div class="alert alert-success" role="alert">
                            {{session()->get('message')}}
                        </div>
                    @elseif(session()->get('status') == 'failed')

                        <div class="alert alert-danger" role="alert">
                            {{session()->get('message')}}
                        </div>
                    @endif

                    <form action="{{route('office.store')}}" method="post" id="form-main">
                        @csrf

                        <input type="hidden" name="type">

                        <div id="basicwizard">

                            <ul class="nav nav-pills nav-justified form-wizard-header mb-4">
                                <li class="nav-item">
                                    <a href="#tab1" data-bs-toggle="tab" data-toggle="tab"  class="d-flex h-100 nav-link rounded-0 py-2 @error('data_umum.*') border border-danger @enderror"> 
                                        <span class="d-none d-sm-inline m-auto">Data Umum</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#tab2" data-bs-toggle="tab" data-toggle="tab" class="d-flex h-100 nav-link rounded-0 py-2 @error('data_ketenagakerjaan.*') border border-danger @enderror">
                                        <span class="d-none d-sm-inline m-auto">Data Ketenagakerjaan</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#tab3" data-bs-toggle="tab" data-toggle="tab" class="d-flex h-100 nav-link rounded-0 py-2">
                                        <span class="d-none d-sm-inline m-auto">Fasilitas Perusahaan</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#tab4" data-bs-toggle="tab" data-toggle="tab" class="d-flex h-100 nav-link rounded-0 py-2 @if($errors->has('bpjs_kesehatan.*') || $errors->has('bpjs_ketenagakerjaan.*')) border border-danger @endif">
                                        <span class="d-none d-sm-inline m-auto">BPJS Kesehatan dan Ketenagakerjaan</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#tab5" data-bs-toggle="tab" data-toggle="tab" class="d-flex h-100 nav-link rounded-0 py-2 @if($errors->has('perangkat_hubungan_industri.*') || $errors->has('kasus_perselisihan.*')) border border-danger @endif">
                                        <span class="d-none d-sm-inline m-auto">Perangkat Hubungan Industri, Pelaksanaan Cuti, dan Kasus/Perselisihan</span>
                                    </a>
                                </li>
                            </ul>

                            
                            <div class="tab-content b-0 mb-0">
                                
                                <!-- Data Umum -->

                                <div class="tab-pane" id="tab1">
                                    @include('perusahaan.partials.data_umum')

                                    <ul class="list-inline wizard mb-0">
                                        @if(request()->routeIs('office.create'))
                                        <li class="list-inline-item">
                                            <button type="button" class="btn btn-success" onclick="submitForm('save')">Simpan <i class="mdi mdi-content-save ms-1"></i></button>
                                        </li>
                                        @endif

                                        <li class="next list-inline-item">
                                            <a href="javascript:void(0);" class="btn btn-info">Selanjutnya <i class="ri-arrow-right-line ms-1"></i></a>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Data Ketenagakerjaan -->

                                <div class="tab-pane" id="tab2">
                                    @include('perusahaan.partials.data_ketenagakerjaan')

                                    <ul class="pager wizard mb-0 list-inline">
                                        <li class="previous list-inline-item">
                                            <button type="button" class="btn btn-light"><i class="ri-arrow-left-line me-1"></i> Sebelumnya</button>
                                        </li>
                                        @if(request()->routeIs('office.create'))
                                        <li class="list-inline-item">
                                            <button type="button" class="btn btn-success" onclick="submitForm('save')">Simpan <i class="mdi mdi-content-save ms-1"></i></button>
                                        </li>
                                        @endif
                                        <li class="next list-inline-item">
                                            <button type="button" class="btn btn-info">Selanjutnya <i class="ri-arrow-right-line ms-1"></i></button>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Fasilitas Perusahaan -->

                                <div class="tab-pane" id="tab3">
                                    @include('perusahaan.partials.fasilitas_perusahaan')

                                    <ul class="pager wizard mb-0 list-inline">
                                        <li class="previous list-inline-item">
                                            <button type="button" class="btn btn-light"><i class="ri-arrow-left-line me-1"></i> Sebelumnya</button>
                                        </li>
                                        @if(request()->routeIs('office.create'))
                                        <li class="list-inline-item">
                                            <button type="button" class="btn btn-success" onclick="submitForm('save')">Simpan <i class="mdi mdi-content-save ms-1"></i></button>
                                        </li>
                                        @endif
                                        <li class="next list-inline-item">
                                            <button type="button" class="btn btn-info">Selanjutnya <i class="ri-arrow-right-line ms-1"></i></button>
                                        </li>
                                    </ul>
                                </div>

                                <!-- BPJS Kesehatan dan Ketenagakerjaan -->

                                <div class="tab-pane" id="tab4">
                                    @include('perusahaan.partials.bpjs_kesehatan_ketenagakerjaan')

                                    <ul class="pager wizard mb-0 list-inline">
                                        <li class="previous list-inline-item">
                                            <button type="button" class="btn btn-light"><i class="ri-arrow-left-line me-1"></i> Sebelumnya</button>
                                        </li>
                                        @if(request()->routeIs('office.create'))
                                        <li class="list-inline-item">
                                            <button type="button" class="btn btn-success" onclick="submitForm('save')">Simpan <i class="mdi mdi-content-save ms-1"></i></button>
                                        </li>
                                        @endif
                                        <li class="next list-inline-item">
                                            <button type="button" class="btn btn-info">Selanjutnya <i class="ri-arrow-right-line ms-1"></i></button>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Perangkat Hubungan Industri, Pelaksanaan Cuti, dan Kasus/Perselisihan -->

                                <div class="tab-pane" id="tab5">
                                    <div class="row">
                                        <div class="col-12">
                                            <!-- Perangkat Hubungan Industri -->
                                            @include('perusahaan.partials.perangkat_hubungan_industri')

                                            <!-- Pelaksanaan Cuti -->
                                            @include('perusahaan.partials.pelaksanaan_cuti')
                                            
                                            <!-- Kasus / Perselisihan -->
                                            @include('perusahaan.partials.kasus_perselisihan')
                                        </div> <!-- end col -->
                                    </div> <!-- end row -->

                                    <ul class="pager wizard mb-0 list-inline">
                                        <li class="previous list-inline-item">
                                            <button type="button" class="btn btn-light"><i class="ri-arrow-left-line me-1"></i> Sebelumnya</button>
                                        </li>
                                        @if(request()->routeIs('office.create'))
                                        <li class="list-inline-item">
                                            <button type="button" class="btn btn-success" onclick="submitForm('save')">Simpan <i class="mdi mdi-content-save ms-1"></i></button>
                                        </li>
                                        <li class="list-inline-item">
                                            <button type="button" data-bs-toggle="modal" data-bs-target="#info-alert-modal" class="btn btn-info">Submit <i class="mdi mdi-content-save-check ms-1"></i></button>
                                        </li>
                                        @endif
                                    </ul>
                                </div>

                            </div> <!-- tab-content -->
                        </div> <!-- end #basicwizard-->
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