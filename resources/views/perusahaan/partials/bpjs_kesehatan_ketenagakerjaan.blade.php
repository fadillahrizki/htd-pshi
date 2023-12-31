@php

    $bpjs_kesehatan = [
        'jumlah_tenaga_kerja_laki_laki' => old('bpjs_kesehatan')['jumlah_tenaga_kerja_laki_laki'] ?? ($bpjsKesehatan['jumlah_tenaga_kerja_laki_laki'] ?? (session('data_input')['bpjs_kesehatan']['jumlah_tenaga_kerja_laki_laki'] ?? '' )),
        'jumlah_tenaga_kerja_perempuan' => old('bpjs_kesehatan')['jumlah_tenaga_kerja_perempuan'] ?? ($bpjsKesehatan['jumlah_tenaga_kerja_perempuan'] ?? (session('data_input')['bpjs_kesehatan']['jumlah_tenaga_kerja_perempuan'] ?? '' )),
    ];

    $bpjs_ketenagakerjaan = [
        'no_bpjs_ketenagakerjaan_perusahaan' => old('bpjs_ketenagakerjaan')['no_bpjs_ketenagakerjaan_perusahaan'] ?? ($bpjsKetenagakerjaan['no_bpjs_ketenagakerjaan_perusahaan'] ?? (session('data_input')['bpjs_ketenagakerjaan']['no_bpjs_ketenagakerjaan_perusahaan'] ?? '' )),

        'program_jaminan_sosial' => [
            'program_jkk' => $bpjsKetenagakerjaan['program_jaminan_sosial']['program_jkk'] ? json_decode($bpjsKetenagakerjaan['program_jaminan_sosial']['program_jkk'], true) : [
                'lk' => old('bpjs_ketenagakerjaan')['program_jaminan_sosial']['program_jkk']['lk'] ?? (session('data_input')['bpjs_ketenagakerjaan']['program_jaminan_sosial']['program_jkk']['lk'] ?? '' ),
                'pr' => old('bpjs_ketenagakerjaan')['program_jaminan_sosial']['program_jkk']['pr'] ?? (session('data_input')['bpjs_ketenagakerjaan']['program_jaminan_sosial']['program_jkk']['pr'] ?? '' ),
            ],
            'program_jht' => $bpjsKetenagakerjaan['program_jaminan_sosial']['program_jht'] ? json_decode($bpjsKetenagakerjaan['program_jaminan_sosial']['program_jht'], true) : [
                'lk' => old('bpjs_ketenagakerjaan')['program_jaminan_sosial']['program_jht']['lk'] ?? (session('data_input')['bpjs_ketenagakerjaan']['program_jaminan_sosial']['program_jht']['lk'] ?? '' ),
                'pr' => old('bpjs_ketenagakerjaan')['program_jaminan_sosial']['program_jht']['pr'] ?? (session('data_input')['bpjs_ketenagakerjaan']['program_jaminan_sosial']['program_jht']['pr'] ?? '' ),
            ],
            'program_jkm' => $bpjsKetenagakerjaan['program_jaminan_sosial']['program_jkm'] ? json_decode($bpjsKetenagakerjaan['program_jaminan_sosial']['program_jkm'], true) : [
                'lk' => old('bpjs_ketenagakerjaan')['program_jaminan_sosial']['program_jkm']['lk'] ?? (session('data_input')['bpjs_ketenagakerjaan']['program_jaminan_sosial']['program_jkm']['lk'] ?? '' ),
                'pr' => old('bpjs_ketenagakerjaan')['program_jaminan_sosial']['program_jkm']['pr'] ?? (session('data_input')['bpjs_ketenagakerjaan']['program_jaminan_sosial']['program_jkm']['pr'] ?? '' ),
            ],
            'program_jp' => $bpjsKetenagakerjaan['program_jaminan_sosial']['program_jp'] ? json_decode($bpjsKetenagakerjaan['program_jaminan_sosial']['program_jp'], true) : [
                'lk' => old('bpjs_ketenagakerjaan')['program_jaminan_sosial']['program_jp']['lk'] ?? (session('data_input')['bpjs_ketenagakerjaan']['program_jaminan_sosial']['program_jp']['lk'] ?? '' ),
                'pr' => old('bpjs_ketenagakerjaan')['program_jaminan_sosial']['program_jp']['pr'] ?? (session('data_input')['bpjs_ketenagakerjaan']['program_jaminan_sosial']['program_jp']['pr'] ?? '' ),
            ],
            'program_jkp' => $bpjsKetenagakerjaan['program_jaminan_sosial']['program_jkk'] ? json_decode($bpjsKetenagakerjaan['program_jaminan_sosial']['program_jkk'], true) : [
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
                <input @if(isset($bpjsKesehatan)) disabled @endif type="number" id="bpjs_kesehatan[jumlah_tenaga_kerja_laki_laki]" value="{{$bpjs_kesehatan['jumlah_tenaga_kerja_laki_laki']}}" name="bpjs_kesehatan[jumlah_tenaga_kerja_laki_laki]" class="form-control @error('bpjs_kesehatan.jumlah_tenaga_kerja_laki_laki') is-invalid @enderror">
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-md-3 col-form-label" for="bpjs_kesehatan[jumlah_tenaga_kerja_perempuan]">Jumlah Tenaga Kerja Perempuan</label>
            <div class="col-md-9">
                <input @if(isset($bpjsKesehatan)) disabled @endif type="number" id="bpjs_kesehatan[jumlah_tenaga_kerja_perempuan]" value="{{$bpjs_kesehatan['jumlah_tenaga_kerja_perempuan']}}" name="bpjs_kesehatan[jumlah_tenaga_kerja_perempuan]" class="form-control @error('bpjs_kesehatan.jumlah_tenaga_kerja_perempuan') is-invalid @enderror">
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-md-3 col-form-label" for="bpjs_ketenagakerjaan[no_bpjs_ketenagakerjaan_perusahaan]">No BPJS Ketenagakerjaan Perusahaan</label>
            <div class="col-md-9">
                <input @if(isset($bpjsKetenagakerjaan)) disabled @endif type="text" id="bpjs_ketenagakerjaan[no_bpjs_ketenagakerjaan_perusahaan]" value="{{$bpjs_ketenagakerjaan['no_bpjs_ketenagakerjaan_perusahaan']}}" name="bpjs_ketenagakerjaan[no_bpjs_ketenagakerjaan_perusahaan]" class="form-control @error('bpjs_ketenagakerjaan.no_bpjs_ketenagakerjaan_perusahaan') is-invalid @enderror">
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
                                <input @if(isset($bpjsKetenagakerjaan)) disabled @endif type="number" id="bpjs_ketenagakerjaan[program_jaminan_sosial][program_jkk][lk]" value="{{$bpjs_ketenagakerjaan['program_jaminan_sosial']['program_jkk']['lk']}}" name="bpjs_ketenagakerjaan[program_jaminan_sosial][program_jkk][lk]" class="form-control @error('bpjs_ketenagakerjaan.program_jaminan_sosial.program_jkk.lk') is-invalid @enderror">
                            </div>
                            <div class="col-6">
                                <label class="mb-2" for="bpjs_ketenagakerjaan[program_jaminan_sosial][program_jkk][pr]">Jumlah Tenaga Kerja Perempuan</label>
                                <input @if(isset($bpjsKetenagakerjaan)) disabled @endif type="number" id="bpjs_ketenagakerjaan[program_jaminan_sosial][program_jkk][pr]" value="{{$bpjs_ketenagakerjaan['program_jaminan_sosial']['program_jkk']['pr']}}" name="bpjs_ketenagakerjaan[program_jaminan_sosial][program_jkk][pr]" class="form-control @error('bpjs_ketenagakerjaan.program_jaminan_sosial.program_jkk.pr') is-invalid @enderror">
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
                                <input @if(isset($bpjsKetenagakerjaan)) disabled @endif type="number" id="bpjs_ketenagakerjaan[program_jaminan_sosial][program_jht][lk]" value="{{$bpjs_ketenagakerjaan['program_jaminan_sosial']['program_jht']['lk']}}" name="bpjs_ketenagakerjaan[program_jaminan_sosial][program_jht][lk]" class="form-control @error('bpjs_ketenagakerjaan.program_jaminan_sosial.program_jht.lk') is-invalid @enderror">
                            </div>
                            <div class="col-6">
                                <label class="mb-2" for="bpjs_ketenagakerjaan[program_jaminan_sosial][program_jht][pr]">Jumlah Tenaga Kerja Perempuan</label>
                                <input @if(isset($bpjsKetenagakerjaan)) disabled @endif type="number" id="bpjs_ketenagakerjaan[program_jaminan_sosial][program_jht][pr]" value="{{$bpjs_ketenagakerjaan['program_jaminan_sosial']['program_jht']['pr']}}" name="bpjs_ketenagakerjaan[program_jaminan_sosial][program_jht][pr]" class="form-control @error('bpjs_ketenagakerjaan.program_jaminan_sosial.program_jht.pr') is-invalid @enderror">
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
                                <input @if(isset($bpjsKetenagakerjaan)) disabled @endif type="number" id="bpjs_ketenagakerjaan[program_jaminan_sosial][program_jkm][lk]" value="{{$bpjs_ketenagakerjaan['program_jaminan_sosial']['program_jkm']['lk']}}" name="bpjs_ketenagakerjaan[program_jaminan_sosial][program_jkm][lk]" class="form-control @error('bpjs_ketenagakerjaan.program_jaminan_sosial.program_jkm.lk') is-invalid @enderror">
                            </div>
                            <div class="col-6">
                                <label class="mb-2" for="bpjs_ketenagakerjaan[program_jaminan_sosial][program_jkm][pr]">Jumlah Tenaga Kerja Perempuan</label>
                                <input @if(isset($bpjsKetenagakerjaan)) disabled @endif type="number" id="bpjs_ketenagakerjaan[program_jaminan_sosial][program_jkm][pr]" value="{{$bpjs_ketenagakerjaan['program_jaminan_sosial']['program_jkm']['pr']}}" name="bpjs_ketenagakerjaan[program_jaminan_sosial][program_jkm][pr]" class="form-control @error('bpjs_ketenagakerjaan.program_jaminan_sosial.program_jkm.pr') is-invalid @enderror">
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
                                <input @if(isset($bpjsKetenagakerjaan)) disabled @endif type="number" id="bpjs_ketenagakerjaan[program_jaminan_sosial][program_jp][lk]" value="{{$bpjs_ketenagakerjaan['program_jaminan_sosial']['program_jp']['lk']}}" name="bpjs_ketenagakerjaan[program_jaminan_sosial][program_jp][lk]" class="form-control @error('bpjs_ketenagakerjaan.program_jaminan_sosial.program_jp.lk') is-invalid @enderror">
                            </div>
                            <div class="col-6">
                                <label class="mb-2" for="bpjs_ketenagakerjaan[program_jaminan_sosial][program_jp][pr]">Jumlah Tenaga Kerja Perempuan</label>
                                <input @if(isset($bpjsKetenagakerjaan)) disabled @endif type="number" id="bpjs_ketenagakerjaan[program_jaminan_sosial][program_jp][pr]" value="{{$bpjs_ketenagakerjaan['program_jaminan_sosial']['program_jp']['pr']}}" name="bpjs_ketenagakerjaan[program_jaminan_sosial][program_jp][pr]" class="form-control @error('bpjs_ketenagakerjaan.program_jaminan_sosial.program_jp.pr') is-invalid @enderror">
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
                                <input @if(isset($bpjsKetenagakerjaan)) disabled @endif type="number" id="bpjs_ketenagakerjaan[program_jaminan_sosial][program_jkp][lk]" value="{{$bpjs_ketenagakerjaan['program_jaminan_sosial']['program_jkp']['lk']}}" name="bpjs_ketenagakerjaan[program_jaminan_sosial][program_jkp][lk]" class="form-control @error('bpjs_ketenagakerjaan.program_jaminan_sosial.program_jkp.lk') is-invalid @enderror">
                            </div>
                            <div class="col-6">
                                <label class="mb-2" for="bpjs_ketenagakerjaan[program_jaminan_sosial][program_jkp][pr]">Jumlah Tenaga Kerja Perempuan</label>
                                <input @if(isset($bpjsKetenagakerjaan)) disabled @endif type="number" id="bpjs_ketenagakerjaan[program_jaminan_sosial][program_jkp][pr]" value="{{$bpjs_ketenagakerjaan['program_jaminan_sosial']['program_jkp']['pr']}}" name="bpjs_ketenagakerjaan[program_jaminan_sosial][program_jkp][pr]" class="form-control @error('bpjs_ketenagakerjaan.program_jaminan_sosial.program_jkp.pr') is-invalid @enderror">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div> <!-- end col -->
</div> <!-- end row -->