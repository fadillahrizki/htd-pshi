@extends('adminlte::page')

@section('title', 'Medium')

@section('content_header')
    Create Medium
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Medium</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('media.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('medium.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
