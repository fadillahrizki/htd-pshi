@php

    $data_ketenagakerjaan = [
        'waktu_kerja' => old('data_ketenagakerjaan')['waktu_kerja'] ?? (session('data_input')['data_ketenagakerjaan']['waktu_kerja'] ?? '' ),
        'tingkat_upah_terendah' => old('data_ketenagakerjaan')['tingkat_upah_terendah'] ?? (session('data_input')['data_ketenagakerjaan']['tingkat_upah_terendah'] ?? '' ),
        'tingkat_upah_tertinggi' => old('data_ketenagakerjaan')['tingkat_upah_tertinggi'] ?? (session('data_input')['data_ketenagakerjaan']['tingkat_upah_tertinggi'] ?? '' ),
        'sistem_pembayaran_upah' => [
            'harian' => old('data_ketenagakerjaan')['sistem_pembayaran_upah']['harian'] ?? (session('data_input')['data_ketenagakerjaan']['sistem_pembayaran_upah']['harian'] ?? '' ),
            'borongan' => old('data_ketenagakerjaan')['sistem_pembayaran_upah']['borongan'] ?? (session('data_input')['data_ketenagakerjaan']['sistem_pembayaran_upah']['borongan'] ?? '' ),
            'bulanan' => old('data_ketenagakerjaan')['sistem_pembayaran_upah']['bulanan'] ?? (session('data_input')['data_ketenagakerjaan']['sistem_pembayaran_upah']['bulanan'] ?? '' ),
        ],
        'struktur_skala_upah' => old('data_ketenagakerjaan')['struktur_skala_upah'] ?? (session('data_input')['data_ketenagakerjaan']['struktur_skala_upah'] ?? '' ),
    ];

@endphp


<div class="row">
    <div class="col-12">
        <div class="row mb-3">
            <label class="col-md-3 col-form-label" for="data_ketenagakerjaan[waktu_kerja]">Waktu Kerja</label>
            <div class="col-md-9">
                <input type="time" id="data_ketenagakerjaan[waktu_kerja]" value="{{ $data_ketenagakerjaan['waktu_kerja'] }}" name="data_ketenagakerjaan[waktu_kerja]" class="form-control">
            </div>
        </div>
        <div class="row mb-3">
            <hr>
            <h5>Pengupahan</h5>
        
            <div class="row mb-3">
                <label class="col-md-3 col-form-label" for="data_ketenagakerjaan[tingkat_upah_terendah]">Tingkat Upah Terendah</label>
                <div class="col-md-9">
                    <input type="number" id="data_ketenagakerjaan[tingkat_upah_terendah]" value="{{ $data_ketenagakerjaan['tingkat_upah_terendah'] }}" name="data_ketenagakerjaan[tingkat_upah_terendah]" class="form-control">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-md-3 col-form-label" for="data_ketenagakerjaan[tingkat_upah_tertinggi]">Tingkat Upah Tertinggi</label>
                <div class="col-md-9">
                    <input type="number" id="data_ketenagakerjaan[tingkat_upah_tertinggi]" value="{{ $data_ketenagakerjaan['tingkat_upah_tertinggi'] }}" name="data_ketenagakerjaan[tingkat_upah_tertinggi]" class="form-control">
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <hr>
            <h5>Sistem Pembayaran Upah</h5>
        
            <div class="row mb-3">
                <label class="col-md-3 col-form-label" for="data_ketenagakerjaan[sistem_pembayaran_upah][harian]">Harian</label>
                <div class="col-md-9">
                    <input type="number" id="data_ketenagakerjaan[sistem_pembayaran_upah][harian]" value="{{ $data_ketenagakerjaan['sistem_pembayaran_upah']['harian'] }}" name="data_ketenagakerjaan[sistem_pembayaran_upah][harian]" class="form-control">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-md-3 col-form-label" for="data_ketenagakerjaan[sistem_pembayaran_upah][borongan]">Borongan</label>
                <div class="col-md-9">
                    <input type="number" id="data_ketenagakerjaan[sistem_pembayaran_upah][borongan]" value="{{ $data_ketenagakerjaan['sistem_pembayaran_upah']['borongan'] }}" name="data_ketenagakerjaan[sistem_pembayaran_upah][borongan]" class="form-control">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-md-3 col-form-label" for="data_ketenagakerjaan[sistem_pembayaran_upah][bulanan]">Bulanan</label>
                <div class="col-md-9">
                    <input type="number" id="data_ketenagakerjaan[sistem_pembayaran_upah][bulanan]" value="{{ $data_ketenagakerjaan['sistem_pembayaran_upah']['bulanan'] }}" name="data_ketenagakerjaan[sistem_pembayaran_upah][bulanan]" class="form-control">
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-md-3 col-form-label">Struktuk dan Skala Upah</label>
            <div class="col-md-9 m-auto">
                <div class="form-check form-check-inline">
                    <input type="radio" id="struktur_skala_upah_opt1" name="data_ketenagakerjaan[struktur_skala_upah]" class="form-check-input" value="Ada" @if($data_ketenagakerjaan['struktur_skala_upah'] == 'Ada') checked @endif>
                    <label class="form-check-label" for="struktur_skala_upah_opt1">Ada</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" id="struktur_skala_upah_opt2" name="data_ketenagakerjaan[struktur_skala_upah]" class="form-check-input" value="Tidak Ada" @if($data_ketenagakerjaan['struktur_skala_upah'] == 'Tidak Ada') checked @endif>
                    <label class="form-check-label" for="struktur_skala_upah_opt2">Tidak Ada</label>
                </div>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->