@php

    $fasilitas_perusahaan = [
        'fasilitas_keselamatan_kesehatan_kerja' => old('fasilitas_perusahaan')['fasilitas_keselamatan_kesehatan_kerja'] ?? (session('data_input')['fasilitas_perusahaan']['fasilitas_keselamatan_kesehatan_kerja'] ?? '' ),
        'fasilitas_kesejahteraan' => old('fasilitas_perusahaan')['fasilitas_kesejahteraan'] ?? (session('data_input')['fasilitas_perusahaan']['fasilitas_kesejahteraan'] ?? '' ),
    ];

@endphp

<div class="row">
    <div class="col-12">
        <div class="row mb-3">
            <label class="col-md-3 col-form-label">Fasilitas Keselamatan dan Kesehatan Kerja</label>
            <div class="col-md-9">
                <div class="form-check">
                    <input type="radio" id="fasilitas_keselamatan_kesehatan_kerja_opt1" name="fasilitas_perusahaan[fasilitas_keselamatan_kesehatan_kerja]" class="form-check-input" value="Peralatan Perlindungan" @if($fasilitas_perusahaan['fasilitas_keselamatan_kesehatan_kerja'] == 'Peralatan Perlindungan') checked @endif>
                    <label class="form-check-label" for="fasilitas_keselamatan_kesehatan_kerja_opt1">Peralatan Perlindungan</label>
                </div>
                <div class="form-check">
                    <input type="radio" id="fasilitas_keselamatan_kesehatan_kerja_opt2" name="fasilitas_perusahaan[fasilitas_keselamatan_kesehatan_kerja]" class="form-check-input" value="Penyelenggaraan Makanan" @if($fasilitas_perusahaan['fasilitas_keselamatan_kesehatan_kerja'] == 'Penyelenggaraan Makanan') checked @endif>
                    <label class="form-check-label" for="fasilitas_keselamatan_kesehatan_kerja_opt2">Penyelenggaraan Makanan</label>
                </div>
                <div class="form-check">
                    <input type="radio" id="fasilitas_keselamatan_kesehatan_kerja_opt3" name="fasilitas_perusahaan[fasilitas_keselamatan_kesehatan_kerja]" class="form-check-input" value="Pelayanan Kesehatan" @if($fasilitas_perusahaan['fasilitas_keselamatan_kesehatan_kerja'] == 'Pelayanan Kesehatan') checked @endif>
                    <label class="form-check-label" for="fasilitas_keselamatan_kesehatan_kerja_opt3">Pelayanan Kesehatan</label>
                </div>
                <div class="form-check">
                    <input type="radio" id="fasilitas_keselamatan_kesehatan_kerja_opt4" name="fasilitas_perusahaan[fasilitas_keselamatan_kesehatan_kerja]" class="form-check-input" value="Ruang PK3" @if($fasilitas_perusahaan['fasilitas_keselamatan_kesehatan_kerja'] == 'Ruang PK3') checked @endif>
                    <label class="form-check-label" for="fasilitas_keselamatan_kesehatan_kerja_opt4">Ruang PK3</label>
                </div>
                <div class="form-check">
                    <input type="radio" id="fasilitas_keselamatan_kesehatan_kerja_opt5" name="fasilitas_perusahaan[fasilitas_keselamatan_kesehatan_kerja]" class="form-check-input" value="Kotak P3K" @if($fasilitas_perusahaan['fasilitas_keselamatan_kesehatan_kerja'] == 'Kotak P3K') checked @endif>
                    <label class="form-check-label" for="fasilitas_keselamatan_kesehatan_kerja_opt5">Kotak P3K</label>
                </div>
                <div class="form-check">
                    <input type="radio" id="fasilitas_keselamatan_kesehatan_kerja_opt6" name="fasilitas_perusahaan[fasilitas_keselamatan_kesehatan_kerja]" class="form-check-input" value="Alat Pelindung Diri" @if($fasilitas_perusahaan['fasilitas_keselamatan_kesehatan_kerja'] == 'Alat Pelindung Diri') checked @endif>
                    <label class="form-check-label" for="fasilitas_keselamatan_kesehatan_kerja_opt6">Alat Pelindung Diri</label>
                </div>
                <div class="form-check">
                    <input type="radio" id="fasilitas_keselamatan_kesehatan_kerja_opt7" name="fasilitas_perusahaan[fasilitas_keselamatan_kesehatan_kerja]" class="form-check-input" value="Penanganan Limbah" @if($fasilitas_perusahaan['fasilitas_keselamatan_kesehatan_kerja'] == 'Penanganan Limbah') checked @endif>
                    <label class="form-check-label" for="fasilitas_keselamatan_kesehatan_kerja_opt7">Penanganan Limbah</label>
                </div>
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-md-3 col-form-label">Fasilitas Kesejahteraan</label>
            <div class="col-md-9">
                <div class="form-check">
                    <input type="radio" id="fasilitas_kesejahteraan_opt1" name="fasilitas_perusahaan[fasilitas_kesejahteraan]" class="form-check-input" value="Perumahan Pekerja" @if($fasilitas_perusahaan['fasilitas_kesejahteraan'] == 'Perumahan Pekerja') checked @endif>
                    <label class="form-check-label" for="fasilitas_kesejahteraan_opt1">Perumahan Pekerja</label>
                </div>
                <div class="form-check">
                    <input type="radio" id="fasilitas_kesejahteraan_opt2" name="fasilitas_perusahaan[fasilitas_kesejahteraan]" class="form-check-input" value="Fasilitas Ibadah" @if($fasilitas_perusahaan['fasilitas_kesejahteraan'] == 'Fasilitas Ibadah') checked @endif>
                    <label class="form-check-label" for="fasilitas_kesejahteraan_opt2">Fasilitas Ibadah</label>
                </div>
                <div class="form-check">
                    <input type="radio" id="fasilitas_kesejahteraan_opt3" name="fasilitas_perusahaan[fasilitas_kesejahteraan]" class="form-check-input" value="Fasilitas untuk Disabilitas" @if($fasilitas_perusahaan['fasilitas_kesejahteraan'] == 'Fasilitas untuk Disabilitas') checked @endif>
                    <label class="form-check-label" for="fasilitas_kesejahteraan_opt3">Fasilitas untuk Disabilitas</label>
                </div>
                <div class="form-check">
                    <input type="radio" id="fasilitas_kesejahteraan_opt4" name="fasilitas_perusahaan[fasilitas_kesejahteraan]" class="form-check-input" value="Koperasi" @if($fasilitas_perusahaan['fasilitas_kesejahteraan'] == 'Koperasi') checked @endif>
                    <label class="form-check-label" for="fasilitas_kesejahteraan_opt4">Koperasi</label>
                </div>
                <div class="form-check">
                    <input type="radio" id="fasilitas_kesejahteraan_opt5" name="fasilitas_perusahaan[fasilitas_kesejahteraan]" class="form-check-input" value="Fasilitas Laktasi" @if($fasilitas_perusahaan['fasilitas_kesejahteraan'] == 'Fasilitas Laktasi') checked @endif>
                    <label class="form-check-label" for="fasilitas_kesejahteraan_opt5">Fasilitas Laktasi</label>
                </div>
                <div class="form-check">
                    <input type="radio" id="fasilitas_kesejahteraan_opt6" name="fasilitas_perusahaan[fasilitas_kesejahteraan]" class="form-check-input" value="Ruang Merokok" @if($fasilitas_perusahaan['fasilitas_kesejahteraan'] == 'Ruang Merokok') checked @endif>
                    <label class="form-check-label" for="fasilitas_kesejahteraan_opt6">Ruang Merokok</label>
                </div>
                <div class="form-check">
                    <input type="radio" id="fasilitas_kesejahteraan_opt7" name="fasilitas_perusahaan[fasilitas_kesejahteraan]" class="form-check-input" value="Armada Antar Jemput" @if($fasilitas_perusahaan['fasilitas_kesejahteraan'] == 'Armada Antar Jemput') checked @endif>
                    <label class="form-check-label" for="fasilitas_kesejahteraan_opt7">Armada Antar Jemput</label>
                </div>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->