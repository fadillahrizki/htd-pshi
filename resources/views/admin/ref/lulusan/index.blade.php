@extends('layouts.app')

@section('title', 'Data Lulusan')

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
                        <li class="breadcrumb-item active">Data Lulusan</li>
                    </ol>
                </div>
                <h4 class="page-title">Data Lulusan</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{route('admin.lulusan.create')}}" class="btn btn-primary">
                        <i class="mdi mdi-plus"></i>
                        <span class="ml-2">Tambah Data</span>
                    </a>
                </div>

                <div class="card-body">
                    @if(session()->get('message'))
                        <div class="alert alert-info">
                            {{session()->get('message')}}    
                        </div>
                    @endif

                    <table id="basic-datatable" class="table table-striped dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Lulusan</th>
                                <th data-orderable="false">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($model as $index => $data)
                            <tr>
                                <td>{{$index+1}}</td>
                                <td>{{$data->nama}}</td>
                                <td>
                                    <a href="{{route('admin.lulusan.edit', $data->id)}}" class="btn btn-info" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit">
                                        <i class="mdi mdi-pencil"></i>
                                    </a>
                                    <a href="#" onclick="action(event, {{$data->id}}, 'delete')" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Hapus">
                                        <i class="mdi mdi-delete"></i>
                                    </a>
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

<form action="{{route('admin.lulusan.destroy', ':id')}}" method="POST" style="display: none;" id="form">
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