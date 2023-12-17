@php

    $bpjs_kesehatan = [
        'jumlah_tenaga_kerja_laki_laki' => old('bpjs_kesehatan')['jumlah_tenaga_kerja_laki_laki'] ?? (session('data_input')['bpjs_kesehatan']['jumlah_tenaga_kerja_laki_laki'] ?? '' ),
        'jumlah_tenaga_kerja_perempuan' => old('bpjs_kesehatan')['jumlah_tenaga_kerja_perempuan'] ?? (session('data_input')['bpjs_kesehatan']['jumlah_tenaga_kerja_perempuan'] ?? '' ),
    ];

    $bpjs_ketenagakerjaan = [
        'no_bpjs_ketenagakerjaan_perusahaan' => old('bpjs_ketenagakerjaan')['no_bpjs_ketenagakerjaan_perusahaan'] ?? (session('data_input')['bpjs_ketenagakerjaan']['no_bpjs_ketenagakerjaan_perusahaan'] ?? '' ),

        'program_jaminan_sosial' => [
            'program_jkk' => [
                'lk' => old('bpjs_ketenagakerjaan')['program_jaminan_sosial']['program_jkk']['lk'] ?? (session('data_input')['bpjs_ketenagakerjaan']['program_jaminan_sosial']['program_jkk']['lk'] ?? '' ),
                'pr' => old('bpjs_ketenagakerjaan')['program_jaminan_sosial']['program_jkk']['pr'] ?? (session('data_input')['bpjs_ketenagakerjaan']['program_jaminan_sosial']['program_jkk']['pr'] ?? '' ),
            ],
            'program_jht' => [
                'lk' => old('bpjs_ketenagakerjaan')['program_jaminan_sosial']['program_jht']['lk'] ?? (session('data_input')['bpjs_ketenagakerjaan']['program_jaminan_sosial']['program_jht']['lk'] ?? '' ),
                'pr' => old('bpjs_ketenagakerjaan')['program_jaminan_sosial']['program_jht']['pr'] ?? (session('data_input')['bpjs_ketenagakerjaan']['program_jaminan_sosial']['program_jht']['pr'] ?? '' ),
            ],
            'program_jkm' => [
                'lk' => old('bpjs_ketenagakerjaan')['program_jaminan_sosial']['program_jkm']['lk'] ?? (session('data_input')['bpjs_ketenagakerjaan']['program_jaminan_sosial']['program_jkm']['lk'] ?? '' ),
                'pr' => old('bpjs_ketenagakerjaan')['program_jaminan_sosial']['program_jkm']['pr'] ?? (session('data_input')['bpjs_ketenagakerjaan']['program_jaminan_sosial']['program_jkm']['pr'] ?? '' ),
            ],
            'program_jp' => [
                'lk' => old('bpjs_ketenagakerjaan')['program_jaminan_sosial']['program_jp']['lk'] ?? (session('data_input')['bpjs_ketenagakerjaan']['program_jaminan_sosial']['program_jp']['lk'] ?? '' ),
                'pr' => old('bpjs_ketenagakerjaan')['program_jaminan_sosial']['program_jp']['pr'] ?? (session('data_input')['bpjs_ketenagakerjaan']['program_jaminan_sosial']['program_jp']['pr'] ?? '' ),
            ],
            'program_jkp' => [
                'lk' => old('bpjs_ketenagakerjaan')['program_jaminan_sosial']['program_jkp']['lk'] ?? (session('data_input')['bpjs_ketenagakerjaan']['program_jaminan_sosial']['program_jkp']['lk'] ?? '' ),
                'pr' => old('bpjs_ketenagakerjaan')['program_jaminan_sosial']['program_jkp']['pr'] ?? (session('data_input')['bpjs_ketenagakerjaan']['program_jaminan_sosial']['program_jkp']['pr'] ?? '' ),
            ],
        ]
    ];

@endphp

<div class="row">
    <div class="col-12">
        <div class="row mb-3">
            <label class="col-md-3 col-form-label" for="bpjs_kesehatan[jumlah_tenaga_kerja_laki_laki]">Jumlah Tenaga Kerja Laki-laki</label>
            <div class="col-md-9">
                <input type="number" id="bpjs_kesehatan[jumlah_tenaga_kerja_laki_laki]" value="{{$bpjs_kesehatan['jumlah_tenaga_kerja_laki_laki']}}" name="bpjs_kesehatan[jumlah_tenaga_kerja_laki_laki]" class="form-control">
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-md-3 col-form-label" for="bpjs_kesehatan[jumlah_tenaga_kerja_perempuan]">Jumlah Tenaga Kerja Perempuan</label>
            <div class="col-md-9">
                <input type="number" id="bpjs_kesehatan[jumlah_tenaga_kerja_perempuan]" value="{{$bpjs_kesehatan['jumlah_tenaga_kerja_perempuan']}}" name="bpjs_kesehatan[jumlah_tenaga_kerja_perempuan]" class="form-control">
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-md-3 col-form-label" for="bpjs_ketenagakerjaan[no_bpjs_ketenagakerjaan_perusahaan]">No BPJS Ketenagakerjaan Perusahaan</label>
            <div class="col-md-9">
                <input type="text" id="bpjs_ketenagakerjaan[no_bpjs_ketenagakerjaan_perusahaan]" value="{{$bpjs_ketenagakerjaan['no_bpjs_ketenagakerjaan_perusahaan']}}" name="bpjs_ketenagakerjaan[no_bpjs_ketenagakerjaan_perusahaan]" class="form-control">
            </div>
        </div>
        <div class="row mb-3">

            <hr>

            <h5>Program Jaminan Sosial</h5>

            <div class="col-12">
                <div class="row mb-3">
                    <label class="col-md-3 col-form-label">Program JKK</label>
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-6">
                                <label class="mb-2" for="bpjs_ketenagakerjaan[program_jaminan_sosial][program_jkk][lk]">Jumlah Tenaga Kerja Laki-laki</label>
                                <input type="number" id="bpjs_ketenagakerjaan[program_jaminan_sosial][program_jkk][lk]" value="{{$bpjs_ketenagakerjaan['program_jaminan_sosial']['program_jkk']['lk']}}" name="bpjs_ketenagakerjaan[program_jaminan_sosial][program_jkk][lk]" class="form-control">
                            </div>
                            <div class="col-6">
                                <label class="mb-2" for="bpjs_ketenagakerjaan[program_jaminan_sosial][program_jkk][pr]">Jumlah Tenaga Kerja Perempuan</label>
                                <input type="number" id="bpjs_ketenagakerjaan[program_jaminan_sosial][program_jkk][pr]" value="{{$bpjs_ketenagakerjaan['program_jaminan_sosial']['program_jkk']['pr']}}" name="bpjs_ketenagakerjaan[program_jaminan_sosial][program_jkk][pr]" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="row mb-3">
                    <label class="col-md-3 col-form-label">Program JHT</label>
                    <div class="col-md-9">
                        <div class="row">
                        <div class="col-6">
                                <label class="mb-2" for="bpjs_ketenagakerjaan[program_jaminan_sosial][program_jht][lk]">Jumlah Tenaga Kerja Laki-laki</label>
                                <input type="number" id="bpjs_ketenagakerjaan[program_jaminan_sosial][program_jht][lk]" value="{{$bpjs_ketenagakerjaan['program_jaminan_sosial']['program_jht']['lk']}}" name="bpjs_ketenagakerjaan[program_jaminan_sosial][program_jht][lk]" class="form-control">
                            </div>
                            <div class="col-6">
                                <label class="mb-2" for="bpjs_ketenagakerjaan[program_jaminan_sosial][program_jht][pr]">Jumlah Tenaga Kerja Perempuan</label>
                                <input type="number" id="bpjs_ketenagakerjaan[program_jaminan_sosial][program_jht][pr]" value="{{$bpjs_ketenagakerjaan['program_jaminan_sosial']['program_jht']['pr']}}" name="bpjs_ketenagakerjaan[program_jaminan_sosial][program_jht][pr]" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="row mb-3">
                    <label class="col-md-3 col-form-label">Program JKM</label>
                    <div class="col-md-9">
                        <div class="row">
                        <div class="col-6">
                                <label class="mb-2" for="bpjs_ketenagakerjaan[program_jaminan_sosial][program_jkm][lk]">Jumlah Tenaga Kerja Laki-laki</label>
                                <input type="number" id="bpjs_ketenagakerjaan[program_jaminan_sosial][program_jkm][lk]" value="{{$bpjs_ketenagakerjaan['program_jaminan_sosial']['program_jkm']['lk']}}" name="bpjs_ketenagakerjaan[program_jaminan_sosial][program_jkm][lk]" class="form-control">
                            </div>
                            <div class="col-6">
                                <label class="mb-2" for="bpjs_ketenagakerjaan[program_jaminan_sosial][program_jkm][pr]">Jumlah Tenaga Kerja Perempuan</label>
                                <input type="number" id="bpjs_ketenagakerjaan[program_jaminan_sosial][program_jkm][pr]" value="{{$bpjs_ketenagakerjaan['program_jaminan_sosial']['program_jkm']['pr']}}" name="bpjs_ketenagakerjaan[program_jaminan_sosial][program_jkm][pr]" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="row mb-3">
                    <label class="col-md-3 col-form-label">Program JP</label>
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-6">
                                <label class="mb-2" for="bpjs_ketenagakerjaan[program_jaminan_sosial][program_jp][lk]">Jumlah Tenaga Kerja Laki-laki</label>
                                <input type="number" id="bpjs_ketenagakerjaan[program_jaminan_sosial][program_jp][lk]" value="{{$bpjs_ketenagakerjaan['program_jaminan_sosial']['program_jp']['lk']}}" name="bpjs_ketenagakerjaan[program_jaminan_sosial][program_jp][lk]" class="form-control">
                            </div>
                            <div class="col-6">
                                <label class="mb-2" for="bpjs_ketenagakerjaan[program_jaminan_sosial][program_jp][pr]">Jumlah Tenaga Kerja Perempuan</label>
                                <input type="number" id="bpjs_ketenagakerjaan[program_jaminan_sosial][program_jp][pr]" value="{{$bpjs_ketenagakerjaan['program_jaminan_sosial']['program_jp']['pr']}}" name="bpjs_ketenagakerjaan[program_jaminan_sosial][program_jp][pr]" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="row mb-3">
                    <label class="col-md-3 col-form-label">Program JKP</label>
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-6">
                                <label class="mb-2" for="bpjs_ketenagakerjaan[program_jaminan_sosial][program_jkp][lk]">Jumlah Tenaga Kerja Laki-laki</label>
                                <input type="number" id="bpjs_ketenagakerjaan[program_jaminan_sosial][program_jkp][lk]" value="{{$bpjs_ketenagakerjaan['program_jaminan_sosial']['program_jkp']['lk']}}" name="bpjs_ketenagakerjaan[program_jaminan_sosial][program_jkp][lk]" class="form-control">
                            </div>
                            <div class="col-6">
                                <label class="mb-2" for="bpjs_ketenagakerjaan[program_jaminan_sosial][program_jkp][pr]">Jumlah Tenaga Kerja Perempuan</label>
                                <input type="number" id="bpjs_ketenagakerjaan[program_jaminan_sosial][program_jkp][pr]" value="{{$bpjs_ketenagakerjaan['program_jaminan_sosial']['program_jkp']['pr']}}" name="bpjs_ketenagakerjaan[program_jaminan_sosial][program_jkp][pr]" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div> <!-- end col -->
</div> <!-- end row -->