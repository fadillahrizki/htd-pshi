@extends('layouts.app')

@section('title', 'Data Akun')

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
                        <li class="breadcrumb-item active">Data Akun</li>
                    </ol>
                </div>
                <h4 class="page-title">Data Akun</h4>
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

                    <table id="basic-datatable" class="table table-striped dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th data-orderable="false">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($accounts as $account)
                            <tr>
                                <td>{{$account->name}}</td>
                                <td>{{$account->email}}</td>
                                <td>
                                    <a href="{{route('admin.accounts.edit', $account->id)}}" class="btn btn-warning"> 
                                        <i class="mdi mdi-pencil"></i>
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

<form action="{{route('admin.accounts.destroy', ':id')}}" method="POST" style="display: none;" id="form">
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