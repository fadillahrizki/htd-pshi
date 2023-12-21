<div class="row mb-3">
    <hr>
    <h5>Kasus / Perselisihan</h5>

    <div class="row mb-3">
        <label class="col-md-3 col-form-label" for="kasus_perselisihan[pemutusan_hubungan_kerja]">Pemutusan Hubungan Kerja</label>
        <div class="col-md-9">
            {{$dataUmum->kasus_perselisihan->pemutusan_hubungan_kerja}}
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-md-3 col-form-label" for="kasus_perselisihan[serikat_pekerja_buruh]">Serikat Pekerja / Buruh</label>
        <div class="col-md-9">
            {{$dataUmum->kasus_perselisihan->serikat_pekerja_buruh}}
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-md-3 col-form-label" for="kasus_perselisihan[mogok_kerja]">Mogok Kerja</label>
        <div class="col-md-9">
            {{$dataUmum->kasus_perselisihan->mogok_kerja}}
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-md-3 col-form-label" for="kasus_perselisihan[lock_out]">Lock Out (Penutupan Perusahaan)</label>
        <div class="col-md-9">
            {{$dataUmum->kasus_perselisihan->lock_out}}
        </div>
    </div>
</div>