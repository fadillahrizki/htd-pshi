<div class="row mb-3">
    <label class="col-md-3 col-form-label">Perangkat Hubungan Kerja</label>
    <div class="col-md-9 m-auto">
        <div class="form-check form-check-inline">
            <input type="radio" id="perangkat_hubungan_kerja_opt1" name="perangkat_hubungan_industri[perangkat_hubungan_kerja]" class="form-check-input" value="Peraturan Perusahaan">
            <label class="form-check-label" for="perangkat_hubungan_kerja_opt1">Peraturan Perusahaan</label>
        </div>
        <div class="form-check form-check-inline">
            <input type="radio" id="perangkat_hubungan_kerja_opt2" name="perangkat_hubungan_industri[perangkat_hubungan_kerja]" class="form-check-input" value="Perjanjian Kerja Bersama">
            <label class="form-check-label" for="perangkat_hubungan_kerja_opt2">Perjanjian Kerja Bersama</label>
        </div>
    </div>
</div>
<div class="row mb-3">
    <label class="col-md-3 col-form-label">Perjanjian Kerja</label>
    <div class="col-md-9 m-auto">
        <div class="form-check form-check-inline">
            <input type="radio" id="perjanjian_kerja_opt1" name="perangkat_hubungan_industri[perjanjian_kerja]" class="form-check-input" value="Ada">
            <label class="form-check-label" for="perjanjian_kerja_opt1">Ada</label>
        </div>
        <div class="form-check form-check-inline">
            <input type="radio" id="perjanjian_kerja_opt2" name="perangkat_hubungan_industri[perjanjian_kerja]" class="form-check-input" value="Tidak Ada">
            <label class="form-check-label" for="perjanjian_kerja_opt2">Tidak Ada</label>
        </div>
    </div>
</div>
<div class="row mb-3">
    <label class="col-md-3 col-form-label">LKS Bipartite</label>
    <div class="col-md-9 m-auto">
        <div class="form-check form-check-inline">
            <input type="radio" id="lks_bipartite_opt1" name="perangkat_hubungan_industri[lks_bipartite]" class="form-check-input" value="Ada">
            <label class="form-check-label" for="lks_bipartite_opt1">Ada</label>
        </div>
        <div class="form-check form-check-inline">
            <input type="radio" id="lks_bipartite_opt2" name="perangkat_hubungan_industri[lks_bipartite]" class="form-check-input" value="Tidak Ada">
            <label class="form-check-label" for="lks_bipartite_opt2">Tidak Ada</label>
        </div>
    </div>
</div>
<div class="row mb-3">
    <label class="col-md-3 col-form-label">Serikat Pekerja / Buruh</label>
    <div class="col-md-9 m-auto">
        <div class="form-check form-check-inline">
            <input type="radio" id="serikat_pekerja_buruh_opt1" name="perangkat_hubungan_industri[serikat_pekerja_buruh]" class="form-check-input" value="Ada">
            <label class="form-check-label" for="serikat_pekerja_buruh_opt1">Ada</label>
        </div>
        <div class="form-check form-check-inline">
            <input type="radio" id="serikat_pekerja_buruh_opt2" name="perangkat_hubungan_industri[serikat_pekerja_buruh]" class="form-check-input" value="Tidak Ada">
            <label class="form-check-label" for="serikat_pekerja_buruh_opt2">Tidak Ada</label>
        </div>
    </div>
</div>
<div class="row mb-3">
    <label class="col-md-3 col-form-label" for="perangkat_hubungan_industri[nama_serikat_pekerja_buruh]">Nama Serikat Pekerja/Buruh</label>
    <div class="col-md-9">
        <input type="text" id="perangkat_hubungan_industri[nama_serikat_pekerja_buruh]" value="" name="perangkat_hubungan_industri[nama_serikat_pekerja_buruh]" class="form-control @error('perangkat_hubungan_industri.nama_serikat_pekerja_buruh') is-invalid @enderror">
    </div>
</div>
<div class="row mb-3">

    <hr>

    <h5>Kondisi Tenaga Kerja</h5>

    @foreach (\App\Models\RefLulusan::get() as $lulusan)
    <div class="col-12">
        <div class="row mb-3">
            <label class="col-md-3 col-form-label">{{$lulusan->nama}}</label>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-6">
                        <label class="mb-2" for="perangkat_hubungan_industri[kondisi_tenaga_kerja][{{$lulusan->id}}][lk]">Laki-laki</label>
                        <input type="number" id="perangkat_hubungan_industri[kondisi_tenaga_kerja][{{$lulusan->id}}][lk]" value="" name="perangkat_hubungan_industri[kondisi_tenaga_kerja][{{$lulusan->id}}][lk]" class="form-control @error('perangkat_hubungan_industri.kondisi_tenaga_kerja.'.$lulusan->id.'.lk') is-invalid @enderror">
                    </div>
                    <div class="col-6">
                        <label class="mb-2" for="perangkat_hubungan_industri[kondisi_tenaga_kerja][{{$lulusan->id}}][pr]">Perempuan</label>
                        <input type="number" id="perangkat_hubungan_industri[kondisi_tenaga_kerja][{{$lulusan->id}}][pr]" value="" name="perangkat_hubungan_industri[kondisi_tenaga_kerja][{{$lulusan->id}}][pr]" class="form-control @error('perangkat_hubungan_industri.kondisi_tenaga_kerja.'.$lulusan->id.'.pr') is-invalid @enderror">
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>