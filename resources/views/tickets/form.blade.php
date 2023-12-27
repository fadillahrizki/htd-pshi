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
                        <li class="breadcrumb-item"><a href="{{route('tickets.index')}}">Data Pengaduan</a></li>
                        <li class="breadcrumb-item active">{{request()->routeIs('tickets.create') ? 'Tambah' : 'Edit'}}</li>
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

                    <form action="{{request()->routeIs('tickets.create') ? route('tickets.store') : route('tickets.update', $ticket->id)}}" method="post" id="form-main">
                        @csrf

                        @if(request()->routeIs('tickets.edit'))
                        @method('PUT')
                        @endif

                        <div class="form-group mb-2">
                            <label for="" class="mb-1">Subject</label>
                            <input type="text" name="subject" id="" class="form-control" value="{{old('name', $ticket?->subject)}}" placeholder="Subject">
                        </div>
                        
                        <div class="form-group mb-2">
                            <label for="" class="mb-1">Deskripsi</label>
                            <textarea name="description" id="" cols="30" rows="6" class="form-control">{{old('name', $ticket?->description)}}</textarea>
                        </div>
                        
                        <div class="form-group mb-2">
                            <label for="" class="mb-1">Prioritas</label>
                            <select name="priority" id="" class="form-control">
                                @foreach(['LOW','MEDIUM','HIGH','URGENT'] as $priority)
                                <option>{{$priority}}</option>
                                @endforeach
                            </select>
                        </div>
                        

                        <button class="btn btn-primary">Submit</button>
                        <a href="{{route('tickets.index')}}" class="btn btn-warning">Kembali</a>
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