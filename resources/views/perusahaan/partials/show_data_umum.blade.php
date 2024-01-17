<div class="row">
    <div class="col-12">
        <div class="row mb-3">
            <label class="col-md-3 col-form-label">Nama Perusahaan</label>
            <div class="col-md-9">
                {{$dataUmum->nama_perusahaan}}
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-md-3 col-form-label">Alamat Perusahaan</label>
            <div class="col-md-9">
                {{$dataUmum->alamat_perusahaan}}
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-md-3 col-form-label">No Telepon</label>
            <div class="col-md-9">
                {{$dataUmum->no_telepon}}
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-md-3 col-form-label">Email</label>
            <div class="col-md-9">
                {{$dataUmum->email}}
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-md-3 col-form-label">Jenis Usaha</label>
            <div class="col-md-9">
                {{$dataUmum->jenis_usaha}}
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-md-3 col-form-label">Nama Pemilik Perusahaan</label>
            <div class="col-md-9">
                {{$dataUmum->nama_pemilik_perusahaan}}
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-md-3 col-form-label">Alamat Pemilik Perusahaan</label>
            <div class="col-md-9">
                {{$dataUmum->alamat_pemilik_perusahaan}}
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-md-3 col-form-label" for="data_umum[pendirian_perusahaan]">Pendirian Perusahaan</label>
            <div class="col-md-9">
                {{$dataUmum->pendirian_perusahaan}}
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-md-3 col-form-label" for="data_umum[no_akte_pendirian]">No Akte Pendirian</label>
            <div class="col-md-9">
                {{$dataUmum->no_akte_pendirian}}
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-md-3 col-form-label" for="data_umum[status_perusahaan]">Status Perusahaan</label>
            <div class="col-md-9">
                {{$dataUmum->status_perusahaan}}
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-md-3 col-form-label" for="data_umum[status_kepemilikan]">Status Kepemilikan</label>
            <div class="col-md-9">
                {{$dataUmum->status_kepemilikan}}
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-md-3 col-form-label" for="data_umum[status_kepemilikan]">Masa Berlaku</label>
            <div class="col-md-9">
                {{$dataUmum->tanggal_awal . ' s/d ' . $dataUmum->tanggal_akhir}}
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->