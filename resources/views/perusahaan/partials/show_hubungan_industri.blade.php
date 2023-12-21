<div class="row mb-3">
    <label class="col-md-3 col-form-label">Perangkat Hubungan Kerja</label>
    <div class="col-md-9 m-auto">
        {{$dataUmum->perangkat_hubungan_industri->perangkat_hubungan_kerja}}
    </div>
</div>
<div class="row mb-3">
    <label class="col-md-3 col-form-label">Perjanjian Kerja</label>
    <div class="col-md-9 m-auto">
        {{$dataUmum->perangkat_hubungan_industri->perjanjian_kerja}}
    </div>
</div>
<div class="row mb-3">
    <label class="col-md-3 col-form-label">LKS Bipartite</label>
    <div class="col-md-9 m-auto">
        {{$dataUmum->perangkat_hubungan_industri->lks_bipartite}}
    </div>
</div>
<div class="row mb-3">
    <label class="col-md-3 col-form-label">Serikat Pekerja / Buruh</label>
    <div class="col-md-9 m-auto">
        {{$dataUmum->perangkat_hubungan_industri->serikat_pekerja_buruh}}
    </div>
</div>
<div class="row mb-3">
    <label class="col-md-3 col-form-label" for="perangkat_hubungan_industri[nama_serikat_pekerja_buruh]">Nama Serikat Pekerja/Buruh</label>
    <div class="col-md-9">
        {{$dataUmum->perangkat_hubungan_industri->nama_serikat_pekerja_buruh}}
    </div>
</div>
<div class="row mb-3">

    <hr>

    <h5>Kondisi Tenaga Kerja</h5>

    @foreach ($dataUmum->kondisiTk as $lulusan)
    <div class="col-12">
        <div class="row mb-3">
            <label class="col-md-3 col-form-label">{{$lulusan->lulusan->nama}}</label>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-6">
                        <label class="mb-2" for="perangkat_hubungan_industri[kondisi_tenaga_kerja][{{$lulusan->id}}][lk]">Laki-laki</label><br>
                        {{$lulusan->jumlah_lk}}
                    </div>
                    <div class="col-6">
                        <label class="mb-2" for="perangkat_hubungan_industri[kondisi_tenaga_kerja][{{$lulusan->id}}][pr]">Perempuan</label><br>
                        {{$lulusan->jumlah_pr}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>