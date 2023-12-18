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
                                <th>Status</th>
                                <th data-orderable="false">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($accounts as $account)
                            <tr>
                                <td>{{$account->name}}</td>
                                <td>{{$account->email}}</td>
                                <td>
                                    <span class="badge {{($account->status == 'Waiting' ? 'bg-info' : ($account->status == 'Verified' ? 'bg-success' : 'bg-danger'))}}">{{$account->status}}</span>
                                </td>
                                <td>
                                    @if($account->status == 'Waiting')
                                        <a href="#" onclick="action(event, {{$account->id}}, 'verify')" class="btn btn-success" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Terima"> 
                                            <i class="mdi mdi-check"></i>
                                        </a>
                                        <a href="#" onclick="action(event, {{$account->id}}, 'reject')" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tolak">
                                            <i class="mdi mdi-cancel"></i>
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