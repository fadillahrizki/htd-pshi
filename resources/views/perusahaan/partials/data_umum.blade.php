@php

    $data_umum = [
        'nama_perusahaan' => old('data_umum')['nama_perusahaan'] ?? ($dataUmum['nama_perusahaan'] ?? (session('data_input')['data_umum']['nama_perusahaan'] ?? '' )), 
        'alamat_perusahaan' => old('data_umum')['alamat_perusahaan'] ?? ($dataUmum['alamat_perusahaan'] ?? (session('data_input')['data_umum']['alamat_perusahaan'] ?? '' )),
        'no_telepon' => old('data_umum')['no_telepon'] ?? ($dataUmum['no_telepon'] ?? (session('data_input')['data_umum']['no_telepon'] ?? '' )),
        'email' => old('data_umum')['email'] ?? ($dataUmum['email'] ?? (session('data_input')['data_umum']['email'] ?? '' )),
        'jenis_usaha' => old('data_umum')['jenis_usaha'] ?? ($dataUmum['jenis_usaha'] ?? (session('data_input')['data_umum']['jenis_usaha'] ?? '' )),
        'nama_pemilik_perusahaan' => old('data_umum')['nama_pemilik_perusahaan'] ?? ($dataUmum['nama_pemilik_perusahaan'] ?? (session('data_input')['data_umum']['nama_pemilik_perusahaan'] ?? '' )),
        'alamat_pemilik_perusahaan' => old('data_umum')['alamat_pemilik_perusahaan'] ?? ($dataUmum['alamat_pemilik_perusahaan'] ?? (session('data_input')['data_umum']['alamat_pemilik_perusahaan'] ?? '' )),
        'pendirian_perusahaan' => old('data_umum')['pendirian_perusahaan'] ?? ($dataUmum['pendirian_perusahaan'] ?? (session('data_input')['data_umum']['pendirian_perusahaan'] ?? '' )),
        'no_akte_pendirian' => old('data_umum')['no_akte_pendirian'] ?? ($dataUmum['no_akte_pendirian'] ?? (session('data_input')['data_umum']['no_akte_pendirian'] ?? '' )),
        'status_perusahaan' => old('data_umum')['status_perusahaan'] ?? ($dataUmum['status_perusahaan'] ?? (session('data_input')['data_umum']['status_perusahaan'] ?? '' )),
        'status_kepemilikan' => old('data_umum')['status_kepemilikan'] ?? ($dataUmum['status_kepemilikan'] ?? (session('data_input')['data_umum']['status_kepemilikan'] ?? '' )),
    ];

@endphp

<div class="row">
    <div class="col-12">
        <div class="row mb-3">
            <label class="col-md-3 col-form-label" for="data_umum[nama_perusahaan]">Nama Perusahaan</label>
            <div class="col-md-9">
                <input type="text" id="data_umum[nama_perusahaan]" value="{{ $data_umum['nama_perusahaan'] }}" name="data_umum[nama_perusahaan]" class="form-control @error('data_umum.nama_perusahaan') is-invalid @enderror">
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-md-3 col-form-label" for="data_umum[alamat_perusahaan]">Alamat Perusahaan</label>
            <div class="col-md-9">
                <input type="text" id="data_umum[alamat_perusahaan]" value="{{ $data_umum['alamat_perusahaan'] }}" name="data_umum[alamat_perusahaan]" class="form-control @error('data_umum.alamat_perusahaan') is-invalid @enderror">
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-md-3 col-form-label" for="data_umum[no_telepon]">No Telepon</label>
            <div class="col-md-9">
                <input type="text" id="data_umum[no_telepon]" value="{{ $data_umum['no_telepon'] }}" name="data_umum[no_telepon]" class="form-control @error('data_umum.no_telepon') is-invalid @enderror">
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-md-3 col-form-label" for="data_umum[email]">Email</label>
            <div class="col-md-9">
                <input type="email" id="data_umum[email]" value="{{ $data_umum['email'] }}" name="data_umum[email]" class="form-control @error('data_umum.email') is-invalid @enderror">
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-md-3 col-form-label" for="data_umum[jenis_usaha]">Jenis Usaha</label>
            <div class="col-md-9">
                <input type="text" id="data_umum[jenis_usaha]" value="{{ $data_umum['jenis_usaha'] }}" name="data_umum[jenis_usaha]" class="form-control @error('data_umum.jenis_usaha') is-invalid @enderror">
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-md-3 col-form-label" for="data_umum[nama_pemilik_perusahaan]">Nama Pemilik Perusahaan</label>
            <div class="col-md-9">
                <input type="text" id="data_umum[nama_pemilik_perusahaan]" value="{{ $data_umum['nama_pemilik_perusahaan'] }}" name="data_umum[nama_pemilik_perusahaan]" class="form-control @error('data_umum.nama_pemilik_perusahaan') is-invalid @enderror">
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-md-3 col-form-label" for="data_umum[alamat_pemilik_perusahaan]">Alamat Pemilik Perusahaan</label>
            <div class="col-md-9">
                <input type="text" id="data_umum[alamat_pemilik_perusahaan]" value="{{ $data_umum['alamat_pemilik_perusahaan'] }}" name="data_umum[alamat_pemilik_perusahaan]" class="form-control @error('data_umum.alamat_pemilik_perusahaan') is-invalid @enderror">
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-md-3 col-form-label" for="data_umum[pendirian_perusahaan]">Pendirian Perusahaan</label>
            <div class="col-md-9">
                <input type="text" id="data_umum[pendirian_perusahaan]" value="{{ $data_umum['pendirian_perusahaan'] }}" name="data_umum[pendirian_perusahaan]" class="form-control @error('data_umum.pendirian_perusahaan') is-invalid @enderror">
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-md-3 col-form-label" for="data_umum[no_akte_pendirian]">No Akte Pendirian</label>
            <div class="col-md-9">
                <input type="text" id="data_umum[no_akte_pendirian]" value="{{ $data_umum['no_akte_pendirian'] }}" name="data_umum[no_akte_pendirian]" class="form-control @error('data_umum.no_akte_pendirian') is-invalid @enderror">
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-md-3 col-form-label" for="data_umum[status_perusahaan]">Status Perusahaan</label>
            <div class="col-md-9">
                <input type="text" id="data_umum[status_perusahaan]" value="{{ $data_umum['status_perusahaan'] }}" name="data_umum[status_perusahaan]" class="form-control @error('data_umum.status_perusahaan') is-invalid @enderror">
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-md-3 col-form-label" for="data_umum[status_kepemilikan]">Status Kepemilikan</label>
            <div class="col-md-9">
                <input type="text" id="data_umum[status_kepemilikan]" value="{{ $data_umum['status_kepemilikan'] }}" name="data_umum[status_kepemilikan]" class="form-control @error('data_umum.status_kepemilikan') is-invalid @enderror">
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->