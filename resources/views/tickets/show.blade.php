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
                        <li class="breadcrumb-item active">Detail</li>
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
                    @if(session()->get('message'))
                        <div class="alert alert-info">
                            {{session()->get('message')}}    
                        </div>
                    @endif

                    @php
                    $badge = [
                        'open' => 'bg-success',
                        'close' => 'bg-danger',
                    ];
                    @endphp

                    <h2>Detail Pengaduan - <span class="badge {{$badge[strtolower($ticket->status)]}}">{{$ticket->status}}</span></h2>
                    <div class="form-group row mb-3">
                        <label for="" class="col-3">Perusahaan / Pengguna</label>
                        <span class="col-9">{{$ticket->user->dataUmum?->nama_perusahaan ?? $ticket->user->name}}</span>
                    </div>

                    <div class="form-group row mb-3">
                        <label for="" class="col-3">Subject</label>
                        <span class="col-9">{{$ticket->subject}}</span>
                    </div>
                    
                    <div class="form-group row mb-3">
                        <label for="" class="col-3">Deskripsi</label>
                        <span class="col-9">{!!$ticket->description!!}</span>
                    </div>

                    @if(auth()->user()->role == 'Admin' && $ticket->status == 'OPEN')

                    <a href="{{route('tickets.close', $ticket->id)}}" class="btn btn-danger">Tutup Pengaduan</a>
                    @endif
                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div> <!-- end row-->
    
    
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h2>Balasan</h2>
                    
                    <div class="timeline-2">
                        @foreach ($ticket->replies as $reply)
                        <div class="time-item">
                            <div class="item-info ms-3 mb-3">
                                <div class="text-muted">{{$reply->created_at}}</div>
                                <p><strong><a href="#" class="text-info">{{$reply->author->name}}</a></strong></p>
                                
                                {!!$reply->description!!}
                            </div>
                        </div>
                        @endforeach
                    </div>
                    @if($ticket->status == 'OPEN')
                    <form action="{{route('tickets.reply', $ticket->id)}}" class="mt-3" method="POST">
                        @csrf
                        <textarea name="description" id="" cols="30" rows="10" class="form-control mb-2" placeholder="Ketik balasan disini"></textarea>
                        <button class="btn btn-primary">Submit</button>
                    </form>
                    @endif
                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div> <!-- end row-->

    

</div>
<!-- container -->
@stop