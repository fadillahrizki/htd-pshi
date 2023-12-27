@php

    $kasus_perselisihan = [
        'pemutusan_hubungan_kerja' => old('kasus_perselisihan')['pemutusan_hubungan_kerja'] ?? ($kasusPerselisihan['pemutusan_hubungan_kerja'] ?? (session('data_input')['kasus_perselisihan']['pemutusan_hubungan_kerja'] ?? '' )),
        'serikat_pekerja_buruh' => old('kasus_perselisihan')['serikat_pekerja_buruh'] ?? ($kasusPerselisihan['serikat_pekerja_buruh'] ?? (session('data_input')['kasus_perselisihan']['serikat_pekerja_buruh'] ?? '' )),
        'mogok_kerja' => old('kasus_perselisihan')['mogok_kerja'] ?? ($kasusPerselisihan['mogok_kerja'] ?? (session('data_input')['kasus_perselisihan']['mogok_kerja'] ?? '' )),
        'lock_out' => old('kasus_perselisihan')['lock_out'] ?? ($kasusPerselisihan['lock_out'] ?? (session('data_input')['kasus_perselisihan']['lock_out'] ?? '' )),
    ];

@endphp

<div class="row mb-3">
    <hr>
    <h5>Kasus / Perselisihan</h5>

    <div class="row mb-3">
        <label class="col-md-3 col-form-label" for="kasus_perselisihan[pemutusan_hubungan_kerja]">Pemutusan Hubungan Kerja</label>
        <div class="col-md-9">
            <input type="number" id="kasus_perselisihan[pemutusan_hubungan_kerja]" value="{{$kasus_perselisihan['pemutusan_hubungan_kerja']}}" name="kasus_perselisihan[pemutusan_hubungan_kerja]" class="form-control @error('kasus_perselisihan.pemutusan_hubungan_kerja') is-invalid @enderror">
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-md-3 col-form-label" for="kasus_perselisihan[serikat_pekerja_buruh]">Serikat Pekerja / Buruh</label>
        <div class="col-md-9">
            <input type="number" id="kasus_perselisihan[serikat_pekerja_buruh]" value="{{$kasus_perselisihan['serikat_pekerja_buruh']}}" name="kasus_perselisihan[serikat_pekerja_buruh]" class="form-control @error('kasus_perselisihan.serikat_pekerja_buruh') is-invalid @enderror">
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-md-3 col-form-label" for="kasus_perselisihan[mogok_kerja]">Mogok Kerja</label>
        <div class="col-md-9">
            <input type="number" id="kasus_perselisihan[mogok_kerja]" value="{{$kasus_perselisihan['mogok_kerja']}}" name="kasus_perselisihan[mogok_kerja]" class="form-control @error('kasus_perselisihan.mogok_kerja') is-invalid @enderror">
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-md-3 col-form-label" for="kasus_perselisihan[lock_out]">Lock Out (Penutupan Perusahaan)</label>
        <div class="col-md-9">
            <input type="number" id="kasus_perselisihan[lock_out]" value="{{$kasus_perselisihan['lock_out']}}" name="kasus_perselisihan[lock_out]" class="form-control @error('kasus_perselisihan.lock_out') is-invalid @enderror">
        </div>
    </div>
</div>