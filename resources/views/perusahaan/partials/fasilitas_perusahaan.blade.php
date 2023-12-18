@php

    $fasilitas_keselamatan_kesehatan_kerja = [
        'peralatanan_perlindungan' => old('fasilitas_keselamatan_kesehatan_kerja')['peralatanan_perlindungan'] ?? ($fasilitasKeselamatanKesehatanKerja['peralatanan_perlindungan'] ?? (session('data_input')['fasilitas_keselamatan_kesehatan_kerja']['peralatanan_perlindungan'] ?? '' )),
        'penyelenggaraan_makanan' => old('fasilitas_keselamatan_kesehatan_kerja')['penyelenggaraan_makanan'] ?? ($fasilitasKeselamatanKesehatanKerja['penyelenggaraan_makanan'] ?? (session('data_input')['fasilitas_keselamatan_kesehatan_kerja']['penyelenggaraan_makanan'] ?? '' )),
        'pelayanan_kesehatan' => old('fasilitas_keselamatan_kesehatan_kerja')['pelayanan_kesehatan'] ?? ($fasilitasKeselamatanKesehatanKerja['pelayanan_kesehatan'] ?? (session('data_input')['fasilitas_keselamatan_kesehatan_kerja']['pelayanan_kesehatan'] ?? '' )),
        'ruang_pk3' => old('fasilitas_keselamatan_kesehatan_kerja')['ruang_pk3'] ?? ($fasilitasKeselamatanKesehatanKerja['ruang_pk3'] ?? (session('data_input')['fasilitas_keselamatan_kesehatan_kerja']['ruang_pk3'] ?? '' )),
        'kotak_p3k' => old('fasilitas_keselamatan_kesehatan_kerja')['kotak_p3k'] ?? ($fasilitasKeselamatanKesehatanKerja['kotak_p3k'] ?? (session('data_input')['fasilitas_keselamatan_kesehatan_kerja']['kotak_p3k'] ?? '' )),
        'alat_pelindung_diri' => old('fasilitas_keselamatan_kesehatan_kerja')['alat_pelindung_diri'] ?? ($fasilitasKeselamatanKesehatanKerja['alat_pelindung_diri'] ?? (session('data_input')['fasilitas_keselamatan_kesehatan_kerja']['alat_pelindung_diri'] ?? '' )),
        'penanganan_limbah' => old('fasilitas_keselamatan_kesehatan_kerja')['penanganan_limbah'] ?? ($fasilitasKeselamatanKesehatanKerja['penanganan_limbah'] ?? (session('data_input')['fasilitas_keselamatan_kesehatan_kerja']['penanganan_limbah'] ?? '' )),
    ];
    
    $fasilitas_kesejahteraan = [
        'perumahan_pekerja' => old('fasilitas_kesejahteraan')['perumahan_pekerja'] ?? ($fasilitasKesejahteraan['perumahan_pekerja'] ?? (session('data_input')['fasilitas_kesejahteraan']['perumahan_pekerja'] ?? '' )),    
        'fasilitas_ibadah' => old('fasilitas_kesejahteraan')['fasilitas_ibadah'] ?? ($fasilitasKesejahteraan['fasilitas_ibadah'] ?? (session('data_input')['fasilitas_kesejahteraan']['fasilitas_ibadah'] ?? '' )),    
        'fasilitas_untuk_disabilitas' => old('fasilitas_kesejahteraan')['fasilitas_untuk_disabilitas'] ?? ($fasilitasKesejahteraan['fasilitas_untuk_disabilitas'] ?? (session('data_input')['fasilitas_kesejahteraan']['fasilitas_untuk_disabilitas'] ?? '' )),    
        'koperasi' => old('fasilitas_kesejahteraan')['koperasi'] ?? ($fasilitasKesejahteraan['koperasi'] ?? (session('data_input')['fasilitas_kesejahteraan']['koperasi'] ?? '' )),    
        'fasilitas_laktasi' => old('fasilitas_kesejahteraan')['fasilitas_laktasi'] ?? ($fasilitasKesejahteraan['fasilitas_laktasi'] ?? (session('data_input')['fasilitas_kesejahteraan']['fasilitas_laktasi'] ?? '' )),    
        'ruang_merokok' => old('fasilitas_kesejahteraan')['ruang_merokok'] ?? ($fasilitasKesejahteraan['ruang_merokok'] ?? (session('data_input')['fasilitas_kesejahteraan']['ruang_merokok'] ?? '' )),    
        'armada_antar_jemput' => old('fasilitas_kesejahteraan')['armada_antar_jemput'] ?? ($fasilitasKesejahteraan['armada_antar_jemput'] ?? (session('data_input')['fasilitas_kesejahteraan']['armada_antar_jemput'] ?? '' )),    
    ];

@endphp

<div class="row">
    <div class="col-12">
        <div class="row mb-3">
            <label class="col-md-3 col-form-label">Fasilitas Keselamatan dan Kesehatan Kerja</label>
            <div class="col-md-9">
                <div class="form-check">
                    <input @if(isset($fasilitasKeselamatanKesehatanKerja)) disabled @endif type="checkbox" id="fasilitas_keselamatan_kesehatan_kerja_opt1" name="fasilitas_keselamatan_kesehatan_kerja[peralatanan_perlindungan]" class="form-check-input" @if($fasilitas_keselamatan_kesehatan_kerja['peralatanan_perlindungan'] == 'on') checked @endif>
                    <label class="form-check-label" for="fasilitas_keselamatan_kesehatan_kerja_opt1">Peralatan Perlindungan</label>
                </div>
                <div class="form-check">
                    <input @if(isset($fasilitasKeselamatanKesehatanKerja)) disabled @endif type="checkbox" id="fasilitas_keselamatan_kesehatan_kerja_opt2" name="fasilitas_keselamatan_kesehatan_kerja[penyelenggaraan_makanan]" class="form-check-input" @if($fasilitas_keselamatan_kesehatan_kerja['penyelenggaraan_makanan'] == 'on') checked @endif>
                    <label class="form-check-label" for="fasilitas_keselamatan_kesehatan_kerja_opt2">Penyelenggaraan Makanan</label>
                </div>
                <div class="form-check">
                    <input @if(isset($fasilitasKeselamatanKesehatanKerja)) disabled @endif type="checkbox" id="fasilitas_keselamatan_kesehatan_kerja_opt3" name="fasilitas_keselamatan_kesehatan_kerja[pelayanan_kesehatan]" class="form-check-input" @if($fasilitas_keselamatan_kesehatan_kerja['pelayanan_kesehatan'] == 'on') checked @endif>
                    <label class="form-check-label" for="fasilitas_keselamatan_kesehatan_kerja_opt3">Pelayanan Kesehatan</label>
                </div>
                <div class="form-check">
                    <input @if(isset($fasilitasKeselamatanKesehatanKerja)) disabled @endif type="checkbox" id="fasilitas_keselamatan_kesehatan_kerja_opt4" name="fasilitas_keselamatan_kesehatan_kerja[ruang_pk3]" class="form-check-input" @if($fasilitas_keselamatan_kesehatan_kerja['ruang_pk3'] == 'on') checked @endif>
                    <label class="form-check-label" for="fasilitas_keselamatan_kesehatan_kerja_opt4">Ruang PK3</label>
                </div>
                <div class="form-check">
                    <input @if(isset($fasilitasKeselamatanKesehatanKerja)) disabled @endif type="checkbox" id="fasilitas_keselamatan_kesehatan_kerja_opt5" name="fasilitas_keselamatan_kesehatan_kerja[kotak_p3k]" class="form-check-input" @if($fasilitas_keselamatan_kesehatan_kerja['kotak_p3k'] == 'on') checked @endif>
                    <label class="form-check-label" for="fasilitas_keselamatan_kesehatan_kerja_opt5">Kotak P3K</label>
                </div>
                <div class="form-check">
                    <input @if(isset($fasilitasKeselamatanKesehatanKerja)) disabled @endif type="checkbox" id="fasilitas_keselamatan_kesehatan_kerja_opt6" name="fasilitas_keselamatan_kesehatan_kerja[alat_pelindung_diri]" class="form-check-input" @if($fasilitas_keselamatan_kesehatan_kerja['alat_pelindung_diri'] == 'on') checked @endif>
                    <label class="form-check-label" for="fasilitas_keselamatan_kesehatan_kerja_opt6">Alat Pelindung Diri</label>
                </div>
                <div class="form-check">
                    <input @if(isset($fasilitasKeselamatanKesehatanKerja)) disabled @endif type="checkbox" id="fasilitas_keselamatan_kesehatan_kerja_opt7" name="fasilitas_keselamatan_kesehatan_kerja[penanganan_limbah]" class="form-check-input" @if($fasilitas_keselamatan_kesehatan_kerja['penanganan_limbah'] == 'on') checked @endif>
                    <label class="form-check-label" for="fasilitas_keselamatan_kesehatan_kerja_opt7">Penanganan Limbah</label>
                </div>
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-md-3 col-form-label">Fasilitas Kesejahteraan</label>
            <div class="col-md-9">
                <div class="form-check">
                    <input @if(isset($fasilitasKesejahteraan)) disabled @endif type="checkbox" id="fasilitas_kesejahteraan_opt1" name="fasilitas_kesejahteraan[perumahan_pekerja]" class="form-check-input" @if($fasilitas_kesejahteraan['perumahan_pekerja'] == 'on') checked @endif>
                    <label class="form-check-label" for="fasilitas_kesejahteraan_opt1">Perumahan Pekerja</label>
                </div>
                <div class="form-check">
                    <input @if(isset($fasilitasKesejahteraan)) disabled @endif type="checkbox" id="fasilitas_kesejahteraan_opt2" name="fasilitas_kesejahteraan[fasilitas_ibadah]" class="form-check-input" @if($fasilitas_kesejahteraan['fasilitas_ibadah'] == 'on') checked @endif>
                    <label class="form-check-label" for="fasilitas_kesejahteraan_opt2">Fasilitas Ibadah</label>
                </div>
                <div class="form-check">
                    <input @if(isset($fasilitasKesejahteraan)) disabled @endif type="checkbox" id="fasilitas_kesejahteraan_opt3" name="fasilitas_kesejahteraan[fasilitas_untuk_disabilitas]" class="form-check-input" @if($fasilitas_kesejahteraan['fasilitas_untuk_disabilitas'] == 'on') checked @endif>
                    <label class="form-check-label" for="fasilitas_kesejahteraan_opt3">Fasilitas untuk Disabilitas</label>
                </div>
                <div class="form-check">
                    <input @if(isset($fasilitasKesejahteraan)) disabled @endif type="checkbox" id="fasilitas_kesejahteraan_opt4" name="fasilitas_kesejahteraan[koperasi]" class="form-check-input" @if($fasilitas_kesejahteraan['koperasi'] == 'on') checked @endif>
                    <label class="form-check-label" for="fasilitas_kesejahteraan_opt4">Koperasi</label>
                </div>
                <div class="form-check">
                    <input @if(isset($fasilitasKesejahteraan)) disabled @endif type="checkbox" id="fasilitas_kesejahteraan_opt5" name="fasilitas_kesejahteraan[fasilitas_laktasi]" class="form-check-input" @if($fasilitas_kesejahteraan['fasilitas_laktasi'] == 'on') checked @endif>
                    <label class="form-check-label" for="fasilitas_kesejahteraan_opt5">Fasilitas Laktasi</label>
                </div>
                <div class="form-check">
                    <input @if(isset($fasilitasKesejahteraan)) disabled @endif type="checkbox" id="fasilitas_kesejahteraan_opt6" name="fasilitas_kesejahteraan[ruang_merokok]" class="form-check-input" @if($fasilitas_kesejahteraan['ruang_merokok'] == 'on') checked @endif>
                    <label class="form-check-label" for="fasilitas_kesejahteraan_opt6">Ruang Merokok</label>
                </div>
                <div class="form-check">
                    <input @if(isset($fasilitasKesejahteraan)) disabled @endif type="checkbox" id="fasilitas_kesejahteraan_opt7" name="fasilitas_kesejahteraan[armada_antar_jemput]" class="form-check-input" @if($fasilitas_kesejahteraan['armada_antar_jemput'] == 'on') checked @endif>
                    <label class="form-check-label" for="fasilitas_kesejahteraan_opt7">Armada Antar Jemput</label>
                </div>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->