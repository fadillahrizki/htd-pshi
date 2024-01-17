@extends('layouts.app')

@section('title', 'Data Perusahaan')

@section('content')

<div class="modal fade" id="bs-example-modal-lg" tabindex="-1" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Cetak Data Perusahaan</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('office.print')}}">
                    <div class="form-group mb-2">
                        <label for="">Perjanjian Hubungan Kerja</label>
                        <select name="filter[perjanjian_hubungan_kerja]" id="" class="form-control">
                            <option value="">Semua</option>
                            <option value="Peraturan Perusahaan">Peraturan Perusahaan (PP)</option>
                            <option value="Perjanjian Kerja Bersama">Perjanjian Kerja Bersama (PKB)</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary">Cetak</button>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<!-- Start Content-->
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Dinas Ketenagakerjaan Kota Tanjung Balai</a></li>
                        <li class="breadcrumb-item active">Data Perusahaan</li>
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
                @if(auth()->user()->role == 'Admin')
                <div class="card-header">
                    <a href="{{route('office.create')}}" class="btn btn-primary">
                        <i class="mdi mdi-plus"></i>
                        <span class="ml-2">Tambah Data</span>
                    </a>

                    <a href="javascript:void(0)" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#bs-example-modal-lg">
                        <i class="mdi mdi-printer"></i>
                        <span class="ml-2">Cetak</span>
                    </a>
                </div>
                @endif
                <div class="card-body">
                    @if(session()->get('message'))
                        <div class="alert alert-info">
                            {{session()->get('message')}}    
                        </div>
                    @endif

                    <table id="basic-datatable" class="table table-striped dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>User</th>
                                <th>Nama Perusahaan</th>
                                <th>No Telepon</th>
                                <th>Email Perusahaan</th>
                                <th>Jenis Usaha</th>
                                <th data-orderable="false">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($data as $dt)
                            <tr>
                                <td>{{$dt->user->name}} ({{$dt->user->email}})</td>
                                <td>{{$dt->nama_perusahaan}}</td>
                                <td>{{$dt->no_telepon}}</td>
                                <td>{{$dt->email}}</td>
                                <td>{{$dt->jenis_usaha}}</td>
                                <td>
                                    <a href="{{route('office.view', $dt)}}" class="btn btn-info" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Lihat Detail"> 
                                        <i class="mdi mdi-eye"></i>
                                    </a>
                                    
                                    <a href="{{route('office.edit', $dt->id)}}" class="btn btn-warning" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit"> 
                                        <i class="mdi mdi-pencil"></i>
                                    </a>

                                    @if(auth()->user()->role == 'Admin')

                                        {{-- @if($dt->status == 'Waiting')
                                            <a href="#" onclick="action(event, {{$dt->id}}, 'verify')" class="btn btn-success" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Terima"> 
                                                <i class="mdi mdi-check"></i>
                                            </a>
                                            <a href="#" onclick="action(event, {{$dt->id}}, 'reject')" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tolak">
                                                <i class="mdi mdi-cancel"></i>
                                            </a>
                                        @endif --}}

                                        <a href="#" onclick="action(event, {{$dt->id}}, 'delete')" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Hapus">
                                            <i class="mdi mdi-delete"></i>
                                        </a>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div> <!-- end row-->

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

</script>

@stop