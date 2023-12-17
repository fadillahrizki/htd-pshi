@php

    $pelaksanaan_cuti = [
        'tahunan' => old('pelaksanaan_cuti')['tahunan'] ?? (session('data_input')['pelaksanaan_cuti']['tahunan'] ?? '' ),
        'haid' => old('pelaksanaan_cuti')['haid'] ?? (session('data_input')['pelaksanaan_cuti']['haid'] ?? '' ),
        'melahirkan' => old('pelaksanaan_cuti')['melahirkan'] ?? (session('data_input')['pelaksanaan_cuti']['melahirkan'] ?? '' ),
        'sakit' => old('pelaksanaan_cuti')['sakit'] ?? (session('data_input')['pelaksanaan_cuti']['sakit'] ?? '' ),
    ];

@endphp

<div class="row mb-3">
    <hr>

    <label class="col-md-3 col-form-label">Pelaksanaan Cuti</label>
    <div class="col-md-9 m-auto">
        <div class="form-check form-check-inline">
            <input type="checkbox" id="pelaksanaan_cuti_opt1" name="pelaksanaan_cuti[tahunan]" class="form-check-input" @if($pelaksanaan_cuti['tahunan'] == 'on') checked @endif>
            <label class="form-check-label" for="pelaksanaan_cuti_opt1">Cuti Tahunan</label>
        </div>
        <div class="form-check form-check-inline">
            <input type="checkbox" id="pelaksanaan_cuti_opt2" name="pelaksanaan_cuti[haid]" class="form-check-input" @if($pelaksanaan_cuti['haid'] == 'on') checked @endif>
            <label class="form-check-label" for="pelaksanaan_cuti_opt2">Cuti Haid</label>
        </div>
        <div class="form-check form-check-inline">
            <input type="checkbox" id="pelaksanaan_cuti_opt3" name="pelaksanaan_cuti[melahirkan]" class="form-check-input" @if($pelaksanaan_cuti['melahirkan'] == 'on') checked @endif>
            <label class="form-check-label" for="pelaksanaan_cuti_opt3">Cuti Melahirkan</label>
        </div>
        <div class="form-check form-check-inline">
            <input type="checkbox" id="pelaksanaan_cuti_opt4" name="pelaksanaan_cuti[sakit]" class="form-check-input" @if($pelaksanaan_cuti['sakit'] == 'on') checked @endif>
            <label class="form-check-label" for="pelaksanaan_cuti_opt4">Cuti Sakit</label>
        </div>
    </div>
</div>