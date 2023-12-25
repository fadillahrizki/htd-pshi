@extends('layouts.app')

@section('title', 'Data Pengaduan')

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
                        <li class="breadcrumb-item active">Data Pengaduan</li>
                    </ol>
                </div>
                <h4 class="page-title">Data Pengaduan</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                @if(auth()->user()->role == 'Perusahaan')
                <div class="card-header">
                    <a href="{{route('tickets.create')}}" class="btn btn-primary">
                        <i class="mdi mdi-plus"></i>
                        <span class="ml-2">Tambah Data</span>
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
                                @if(auth()->user()->role != 'Perusahaan')
                                <th>Pengguna / Perusahaan</th>
                                @endif
                                <th>Subjek</th>
                                <th>Deskripsi</th>
                                <th>Prioritas</th>
                                <th>Status</th>
                                <th data-orderable="false">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($datas as $data)
                            <tr>
                                @if(auth()->user()->role != 'Perusahaan')
                                <td>{{$data->user->dataUmum?->nama_perusahaan ?? $data->user->name}}</td>
                                @endif
                                <td>{{$data->subject}}</td>
                                <td>{{$data->description}}</td>
                                <td>{{$data->priority}}</td>
                                <td>{{$data->status}}</td>
                                <td>
                                    <a href="{{route('tickets.show', $data->id)}}" class="btn btn-warning"> 
                                        <i class="mdi mdi-eye"></i>
                                    </a>
                                    @if(auth()->user()->role == 'Perusahaan')
                                    <a href="javascript:void(0)" onclick="action(event, {{$data->id}}, 'delete')" class="btn btn-danger">
                                        <i class="mdi mdi-trash-can"></i>
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

<form action="{{route('tickets.destroy', ':id')}}" method="POST" style="display: none;" id="form">
    @csrf
    @method('DELETE')
</form>

@stop

@section('js')

<script>
    function action(event, id, type) {
        event.preventDefault()

        const confirmation = confirm('apakah anda yakin akan menghapus data ini ?')

        if(confirmation)
        {
            var form = document.getElementById('form')
            const action = form.action.replace(':id', id)
            form.setAttribute('action', action)
            form.submit()
        }
    }

</script>

@stop