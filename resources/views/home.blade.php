@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

<!-- Start Content-->
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Velonic</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
                <h4 class="page-title">Dashboard</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-xxl-3 col-sm-6">
            <div class="card widget-flat text-bg-pink">
                <div class="card-body">
                    <div class="float-end">
                        <i class="mdi mdi-account-group widget-icon"></i>
                    </div>
                    <h6 class="text-uppercase mt-0" title="Customers">Jumlah Akun</h6>
                    <h2 class="my-2">{{$userCount}}</h2>
                </div>
            </div>
        </div> <!-- end col-->

        <div class="col-xxl-3 col-sm-6">
            <div class="card widget-flat text-bg-purple">
                <div class="card-body">
                    <div class="float-end">
                        <i class="mdi mdi-office-building widget-icon"></i>
                    </div>
                    <h6 class="text-uppercase mt-0" title="Customers">Jumlah Perusahaan</h6>
                    <h2 class="my-2">{{$perusahaanCount}}</h2>
                </div>
            </div>
        </div> <!-- end col-->

        <div class="col-xxl-3 col-sm-6">
            <div class="card widget-flat text-bg-info">
                <div class="card-body">
                    <div class="float-end">
                        <i class="mdi mdi-office-building-plus widget-icon"></i>
                    </div>
                    <h6 class="text-uppercase mt-0" title="Customers">Jumlah Perusahaan Di Terima</h6>
                    <h2 class="my-2">{{$perusahaanVerifiedCount}}</h2>
                </div>
            </div>
        </div> <!-- end col-->

        <div class="col-xxl-3 col-sm-6">
            <div class="card widget-flat text-bg-primary">
                <div class="card-body">
                    <div class="float-end">
                        <i class="mdi mdi-office-building-remove widget-icon"></i>
                    </div>
                    <h6 class="text-uppercase mt-0" title="Customers">Jumlah Perusahaan Di Tolak</h6>
                    <h2 class="my-2">{{$perusahaanRejectedCount}}</h2>
                </div>
            </div>
        </div> <!-- end col-->
    </div>

    <div class="row">
        <div class="col-sm-4">
            <div class="card widget-flat">
                <div class="card-body">
                    <div class="float-end">
                        <i class="ri-eye-line widget-icon"></i>
                    </div>
                    <h6 class="text-uppercase mt-0" title="Customers">Perjanjian Kerja</h6>
                    <h2 class="my-2">{{$perjanjianKerja}}</h2>
                </div>
            </div>
        </div> <!-- end col-->

        <div class="col-sm-4">
            <div class="card widget-flat">
                <div class="card-body">
                    <div class="float-end">
                        <i class="ri-wallet-2-line widget-icon"></i>
                    </div>
                    <h6 class="text-uppercase mt-0" title="Customers">Mogok Kerja</h6>
                    <h2 class="my-2">{{$mogokKerja}}</h2>
                </div>
            </div>
        </div> <!-- end col-->
        
        <div class="col-sm-4">
            <div class="card widget-flat">
                <div class="card-body">
                    <div class="float-end">
                        <i class="ri-wallet-2-line widget-icon"></i>
                    </div>
                    <h6 class="text-uppercase mt-0" title="Customers">PHK</h6>
                    <h2 class="my-2">{{$pemutusanHubunganKerja}}</h2>
                </div>
            </div>
        </div> <!-- end col-->

    </div>
    
    <div class="row">
        <div class="col-12 text-center">
            <h4>PERSELISIHAN HUBUNGAN INDUSTRI</h4>
        </div>
        
        <div class="col-sm-6">
            <div class="card widget-flat">
                <div class="card-body">
                    <div class="float-end">
                        <i class="ri-wallet-2-line widget-icon"></i>
                    </div>
                    <h6 class="text-uppercase mt-0" title="Customers">Total Perselisihan Pemutusan Hubungan Kerja</h6>
                    <h2 class="my-2">{{$totalPemutusanHubunganKerja}}</h2>
                </div>
            </div>
        </div> <!-- end col-->
        
        <div class="col-sm-6">
            <div class="card widget-flat">
                <div class="card-body">
                    <div class="float-end">
                        <i class="ri-wallet-2-line widget-icon"></i>
                    </div>
                    <h6 class="text-uppercase mt-0" title="Customers">Total Perselisihan Antara SP/SB dalam satu Perusahaan</h6>
                    <h2 class="my-2">{{$totalSerikatKerjaBuruh}}</h2>
                </div>
            </div>
        </div> <!-- end col-->

        <div class="col-sm-6">
            <div class="card widget-flat">
                <div class="card-body">
                    <div class="float-end">
                        <i class="ri-eye-line widget-icon"></i>
                    </div>
                    <h6 class="text-uppercase mt-0" title="Customers">Total Mogok Kerja</h6>
                    <h2 class="my-2">{{$totalMogokKerja}}</h2>
                </div>
            </div>
        </div> <!-- end col-->

        <div class="col-sm-6">
            <div class="card widget-flat">
                <div class="card-body">
                    <div class="float-end">
                        <i class="ri-wallet-2-line widget-icon"></i>
                    </div>
                    <h6 class="text-uppercase mt-0" title="Customers">Total Lock Out (Penutupan Perusahaan)</h6>
                    <h2 class="my-2">{{$totalLockOut}}</h2>
                </div>
            </div>
        </div> <!-- end col-->

    </div>

</div>
<!-- container -->

@stop