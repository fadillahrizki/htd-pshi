@php

    $perangkat_hubungan_industri = [
        'perangkat_hubungan_kerja' => old('perangkat_hubungan_industri')['perangkat_hubungan_kerja'] ?? ($perangkatHubunganIndustri['perangkat_hubungan_kerja'] ?? (session('data_input')['perangkat_hubungan_industri']['perangkat_hubungan_kerja'] ?? '' )),
        'perjanjian_kerja' => old('perangkat_hubungan_industri')['perjanjian_kerja'] ?? ($perangkatHubunganIndustri['perjanjian_kerja'] ?? (session('data_input')['perangkat_hubungan_industri']['perjanjian_kerja'] ?? '' )),
        'lks_bipartite' => old('perangkat_hubungan_industri')['lks_bipartite'] ?? ($perangkatHubunganIndustri['lks_bipartite'] ?? (session('data_input')['perangkat_hubungan_industri']['lks_bipartite'] ?? '' )),
        'serikat_pekerja_buruh' => old('perangkat_hubungan_industri')['serikat_pekerja_buruh'] ?? ($perangkatHubunganIndustri['serikat_pekerja_buruh'] ?? (session('data_input')['perangkat_hubungan_industri']['serikat_pekerja_buruh'] ?? '' )),
        'nama_serikat_pekerja_buruh' => old('perangkat_hubungan_industri')['nama_serikat_pekerja_buruh'] ?? ($perangkatHubunganIndustri['nama_serikat_pekerja_buruh'] ?? (session('data_input')['perangkat_hubungan_industri']['nama_serikat_pekerja_buruh'] ?? '' )),

        'kondisi_tenaga_kerja' => [
            'sd' => $perangkatHubunganIndustri['kondisi_tenaga_kerja']['sd'] ?? [
                'lk' => old('perangkat_hubungan_industri')['kondisi_tenaga_kerja']['sd']['lk'] ?? (session('data_input')['perangkat_hubungan_industri']['kondisi_tenaga_kerja']['sd']['lk'] ?? '' ),
                'pr' => old('perangkat_hubungan_industri')['kondisi_tenaga_kerja']['sd']['pr'] ?? (session('data_input')['perangkat_hubungan_industri']['kondisi_tenaga_kerja']['sd']['pr'] ?? '' ),
            ],
            'sltp' => $perangkatHubunganIndustri['kondisi_tenaga_kerja']['sltp'] ?? [
                'lk' => old('perangkat_hubungan_industri')['kondisi_tenaga_kerja']['sltp']['lk'] ?? (session('data_input')['perangkat_hubungan_industri']['kondisi_tenaga_kerja']['sltp']['lk'] ?? '' ),
                'pr' => old('perangkat_hubungan_industri')['kondisi_tenaga_kerja']['sltp']['pr'] ?? (session('data_input')['perangkat_hubungan_industri']['kondisi_tenaga_kerja']['sltp']['pr'] ?? '' ),
            ],
            'sma' => $perangkatHubunganIndustri['kondisi_tenaga_kerja']['sma'] ?? [
                'lk' => old('perangkat_hubungan_industri')['kondisi_tenaga_kerja']['sma']['lk'] ?? (session('data_input')['perangkat_hubungan_industri']['kondisi_tenaga_kerja']['sma']['lk'] ?? '' ),
                'pr' => old('perangkat_hubungan_industri')['kondisi_tenaga_kerja']['sma']['pr'] ?? (session('data_input')['perangkat_hubungan_industri']['kondisi_tenaga_kerja']['sma']['pr'] ?? '' ),
            ],
            'd1' => $perangkatHubunganIndustri['kondisi_tenaga_kerja']['d1'] ?? [
                'lk' => old('perangkat_hubungan_industri')['kondisi_tenaga_kerja']['d1']['lk'] ?? (session('data_input')['perangkat_hubungan_industri']['kondisi_tenaga_kerja']['d1']['lk'] ?? '' ),
                'pr' => old('perangkat_hubungan_industri')['kondisi_tenaga_kerja']['d1']['pr'] ?? (session('data_input')['perangkat_hubungan_industri']['kondisi_tenaga_kerja']['d1']['pr'] ?? '' ),
            ],
            'd2' => $perangkatHubunganIndustri['kondisi_tenaga_kerja']['d2'] ?? [
                'lk' => old('perangkat_hubungan_industri')['kondisi_tenaga_kerja']['d2']['lk'] ?? (session('data_input')['perangkat_hubungan_industri']['kondisi_tenaga_kerja']['d2']['lk'] ?? '' ),
                'pr' => old('perangkat_hubungan_industri')['kondisi_tenaga_kerja']['d2']['pr'] ?? (session('data_input')['perangkat_hubungan_industri']['kondisi_tenaga_kerja']['d2']['pr'] ?? '' ),
            ],
            'd3' => $perangkatHubunganIndustri['kondisi_tenaga_kerja']['d3'] ?? [
                'lk' => old('perangkat_hubungan_industri')['kondisi_tenaga_kerja']['d3']['lk'] ?? (session('data_input')['perangkat_hubungan_industri']['kondisi_tenaga_kerja']['d3']['lk'] ?? '' ),
                'pr' => old('perangkat_hubungan_industri')['kondisi_tenaga_kerja']['d3']['pr'] ?? (session('data_input')['perangkat_hubungan_industri']['kondisi_tenaga_kerja']['d3']['pr'] ?? '' ),
            ],
            'd4' => $perangkatHubunganIndustri['kondisi_tenaga_kerja']['d4'] ?? [
                'lk' => old('perangkat_hubungan_industri')['kondisi_tenaga_kerja']['d4']['lk'] ?? (session('data_input')['perangkat_hubungan_industri']['kondisi_tenaga_kerja']['d4']['lk'] ?? '' ),
                'pr' => old('perangkat_hubungan_industri')['kondisi_tenaga_kerja']['d4']['pr'] ?? (session('data_input')['perangkat_hubungan_industri']['kondisi_tenaga_kerja']['d4']['pr'] ?? '' ),
            ],
            's1' => $perangkatHubunganIndustri['kondisi_tenaga_kerja']['s1'] ?? [
                'lk' => old('perangkat_hubungan_industri')['kondisi_tenaga_kerja']['s1']['lk'] ?? (session('data_input')['perangkat_hubungan_industri']['kondisi_tenaga_kerja']['s1']['lk'] ?? '' ),
                'pr' => old('perangkat_hubungan_industri')['kondisi_tenaga_kerja']['s1']['pr'] ?? (session('data_input')['perangkat_hubungan_industri']['kondisi_tenaga_kerja']['s1']['pr'] ?? '' ),
            ],
            's2' => $perangkatHubunganIndustri['kondisi_tenaga_kerja']['s2'] ?? [
                'lk' => old('perangkat_hubungan_industri')['kondisi_tenaga_kerja']['s2']['lk'] ?? (session('data_input')['perangkat_hubungan_industri']['kondisi_tenaga_kerja']['s2']['lk'] ?? '' ),
                'pr' => old('perangkat_hubungan_industri')['kondisi_tenaga_kerja']['s2']['pr'] ?? (session('data_input')['perangkat_hubungan_industri']['kondisi_tenaga_kerja']['s2']['pr'] ?? '' ),
            ],
            's3' => $perangkatHubunganIndustri['kondisi_tenaga_kerja']['s3'] ?? [
                'lk' => old('perangkat_hubungan_industri')['kondisi_tenaga_kerja']['s3']['lk'] ?? (session('data_input')['perangkat_hubungan_industri']['kondisi_tenaga_kerja']['s3']['lk'] ?? '' ),
                'pr' => old('perangkat_hubungan_industri')['kondisi_tenaga_kerja']['s3']['pr'] ?? (session('data_input')['perangkat_hubungan_industri']['kondisi_tenaga_kerja']['s3']['pr'] ?? '' ),
            ],
            'pkwt' => $perangkatHubunganIndustri['kondisi_tenaga_kerja']['pkwt'] ?? [
                'lk' => old('perangkat_hubungan_industri')['kondisi_tenaga_kerja']['pkwt']['lk'] ?? (session('data_input')['perangkat_hubungan_industri']['kondisi_tenaga_kerja']['pkwt']['lk'] ?? '' ),
                'pr' => old('perangkat_hubungan_industri')['kondisi_tenaga_kerja']['pkwt']['pr'] ?? (session('data_input')['perangkat_hubungan_industri']['kondisi_tenaga_kerja']['pkwt']['pr'] ?? '' ),
            ],
            'pkwtt' => $perangkatHubunganIndustri['kondisi_tenaga_kerja']['pkwtt'] ?? [
                'lk' => old('perangkat_hubungan_industri')['kondisi_tenaga_kerja']['pkwtt']['lk'] ?? (session('data_input')['perangkat_hubungan_industri']['kondisi_tenaga_kerja']['pkwtt']['lk'] ?? '' ),
                'pr' => old('perangkat_hubungan_industri')['kondisi_tenaga_kerja']['pkwtt']['pr'] ?? (session('data_input')['perangkat_hubungan_industri']['kondisi_tenaga_kerja']['pkwtt']['pr'] ?? '' ),
            ],
            'penyandang_disabilitas' => $perangkatHubunganIndustri['kondisi_tenaga_kerja']['penyandang_disabilitas'] ?? [
                'lk' => old('perangkat_hubungan_industri')['kondisi_tenaga_kerja']['penyandang_disabilitas']['lk'] ?? (session('data_input')['perangkat_hubungan_industri']['kondisi_tenaga_kerja']['penyandang_disabilitas']['lk'] ?? '' ),
                'pr' => old('perangkat_hubungan_industri')['kondisi_tenaga_kerja']['penyandang_disabilitas']['pr'] ?? (session('data_input')['perangkat_hubungan_industri']['kondisi_tenaga_kerja']['penyandang_disabilitas']['pr'] ?? '' ),
            ],
        ]
    ];

@endphp

<div class="row mb-3">
    <label class="col-md-3 col-form-label">Perangkat Hubungan Kerja</label>
    <div class="col-md-9 m-auto">
        <div class="form-check form-check-inline">
            <input @if(isset($perangkatHubunganIndustri)) disabled @endif type="radio" id="perangkat_hubungan_kerja_opt1" name="perangkat_hubungan_industri[perangkat_hubungan_kerja]" class="form-check-input" value="Peraturan Perusahaan" @if($perangkat_hubungan_industri['perangkat_hubungan_kerja'] == 'Peraturan Perusahaan') checked @endif>
            <label class="form-check-label" for="perangkat_hubungan_kerja_opt1">Peraturan Perusahaan</label>
        </div>
        <div class="form-check form-check-inline">
            <input @if(isset($perangkatHubunganIndustri)) disabled @endif type="radio" id="perangkat_hubungan_kerja_opt2" name="perangkat_hubungan_industri[perangkat_hubungan_kerja]" class="form-check-input" value="Perjanjian Kerja Bersama" @if($perangkat_hubungan_industri['perangkat_hubungan_kerja'] == 'Perjanjian Kerja Bersama') checked @endif>
            <label class="form-check-label" for="perangkat_hubungan_kerja_opt2">Perjanjian Kerja Bersama</label>
        </div>
    </div>
</div>
<div class="row mb-3">
    <label class="col-md-3 col-form-label">Perjanjian Kerja</label>
    <div class="col-md-9 m-auto">
        <div class="form-check form-check-inline">
            <input @if(isset($perangkatHubunganIndustri)) disabled @endif type="radio" id="perjanjian_kerja_opt1" name="perangkat_hubungan_industri[perjanjian_kerja]" class="form-check-input" value="Ada" @if($perangkat_hubungan_industri['perjanjian_kerja'] == 'Ada') checked @endif>
            <label class="form-check-label" for="perjanjian_kerja_opt1">Ada</label>
        </div>
        <div class="form-check form-check-inline">
            <input @if(isset($perangkatHubunganIndustri)) disabled @endif type="radio" id="perjanjian_kerja_opt2" name="perangkat_hubungan_industri[perjanjian_kerja]" class="form-check-input" value="Tidak Ada" @if($perangkat_hubungan_industri['perjanjian_kerja'] == 'Tidak Ada') checked @endif>
            <label class="form-check-label" for="perjanjian_kerja_opt2">Tidak Ada</label>
        </div>
    </div>
</div>
<div class="row mb-3">
    <label class="col-md-3 col-form-label">LKS Bipartite</label>
    <div class="col-md-9 m-auto">
        <div class="form-check form-check-inline">
            <input @if(isset($perangkatHubunganIndustri)) disabled @endif type="radio" id="lks_bipartite_opt1" name="perangkat_hubungan_industri[lks_bipartite]" class="form-check-input" value="Ada" @if($perangkat_hubungan_industri['lks_bipartite'] == 'Ada') checked @endif>
            <label class="form-check-label" for="lks_bipartite_opt1">Ada</label>
        </div>
        <div class="form-check form-check-inline">
            <input @if(isset($perangkatHubunganIndustri)) disabled @endif type="radio" id="lks_bipartite_opt2" name="perangkat_hubungan_industri[lks_bipartite]" class="form-check-input" value="Tidak Ada" @if($perangkat_hubungan_industri['lks_bipartite'] == 'Tidak Ada') checked @endif>
            <label class="form-check-label" for="lks_bipartite_opt2">Tidak Ada</label>
        </div>
    </div>
</div>
<div class="row mb-3">
    <label class="col-md-3 col-form-label">Serikat Pekerja / Buruh</label>
    <div class="col-md-9 m-auto">
        <div class="form-check form-check-inline">
            <input @if(isset($perangkatHubunganIndustri)) disabled @endif type="radio" id="serikat_pekerja_buruh_opt1" name="perangkat_hubungan_industri[serikat_pekerja_buruh]" class="form-check-input" value="Ada" @if($perangkat_hubungan_industri['serikat_pekerja_buruh'] == 'Ada') checked @endif>
            <label class="form-check-label" for="serikat_pekerja_buruh_opt1">Ada</label>
        </div>
        <div class="form-check form-check-inline">
            <input @if(isset($perangkatHubunganIndustri)) disabled @endif type="radio" id="serikat_pekerja_buruh_opt2" name="perangkat_hubungan_industri[serikat_pekerja_buruh]" class="form-check-input" value="Tidak Ada" @if($perangkat_hubungan_industri['serikat_pekerja_buruh'] == 'Tidak Ada') checked @endif>
            <label class="form-check-label" for="serikat_pekerja_buruh_opt2">Tidak Ada</label>
        </div>
    </div>
</div>
<div class="row mb-3">
    <label class="col-md-3 col-form-label" for="perangkat_hubungan_industri[nama_serikat_pekerja_buruh]">Nama Serikat Pekerja/Buruh</label>
    <div class="col-md-9">
        <input @if(isset($perangkatHubunganIndustri)) disabled @endif type="text" id="perangkat_hubungan_industri[nama_serikat_pekerja_buruh]" value="{{$perangkat_hubungan_industri['nama_serikat_pekerja_buruh']}}" name="perangkat_hubungan_industri[nama_serikat_pekerja_buruh]" class="form-control">
    </div>
</div>
<div class="row mb-3">

    <hr>

    <h5>Kondisi Tenaga Kerja</h5>

    <div class="col-12">
        <div class="row mb-3">
            <label class="col-md-3 col-form-label">SD</label>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-6">
                        <label class="mb-2" for="perangkat_hubungan_industri[kondisi_tenaga_kerja][sd][lk]">Laki-laki</label>
                        <input @if(isset($perangkatHubunganIndustri)) disabled @endif type="number" id="perangkat_hubungan_industri[kondisi_tenaga_kerja][sd][lk]" value="{{$perangkat_hubungan_industri['kondisi_tenaga_kerja']['sd']['lk']}}" name="perangkat_hubungan_industri[kondisi_tenaga_kerja][sd][lk]" class="form-control">
                    </div>
                    <div class="col-6">
                        <label class="mb-2" for="perangkat_hubungan_industri[kondisi_tenaga_kerja][sd][pr]">Perempuan</label>
                        <input @if(isset($perangkatHubunganIndustri)) disabled @endif type="number" id="perangkat_hubungan_industri[kondisi_tenaga_kerja][sd][pr]" value="{{$perangkat_hubungan_industri['kondisi_tenaga_kerja']['sd']['pr']}}" name="perangkat_hubungan_industri[kondisi_tenaga_kerja][sd][pr]" class="form-control">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-12">
        <div class="row mb-3">
            <label class="col-md-3 col-form-label">SLTP</label>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-6">
                        <label class="mb-2" for="perangkat_hubungan_industri[kondisi_tenaga_kerja][sltp][lk]">Laki-laki</label>
                        <input @if(isset($perangkatHubunganIndustri)) disabled @endif type="number" id="perangkat_hubungan_industri[kondisi_tenaga_kerja][sltp][lk]" value="{{$perangkat_hubungan_industri['kondisi_tenaga_kerja']['sltp']['lk']}}" name="perangkat_hubungan_industri[kondisi_tenaga_kerja][sltp][lk]" class="form-control">
                    </div>
                    <div class="col-6">
                        <label class="mb-2" for="perangkat_hubungan_industri[kondisi_tenaga_kerja][sltp][pr]">Perempuan</label>
                        <input @if(isset($perangkatHubunganIndustri)) disabled @endif type="number" id="perangkat_hubungan_industri[kondisi_tenaga_kerja][sltp][pr]" value="{{$perangkat_hubungan_industri['kondisi_tenaga_kerja']['sltp']['pr']}}" name="perangkat_hubungan_industri[kondisi_tenaga_kerja][sltp][pr]" class="form-control">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-12">
        <div class="row mb-3">
            <label class="col-md-3 col-form-label">SMA</label>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-6">
                        <label class="mb-2" for="perangkat_hubungan_industri[kondisi_tenaga_kerja][sma][lk]">Laki-laki</label>
                        <input @if(isset($perangkatHubunganIndustri)) disabled @endif type="number" id="perangkat_hubungan_industri[kondisi_tenaga_kerja][sma][lk]" value="{{$perangkat_hubungan_industri['kondisi_tenaga_kerja']['sma']['lk']}}" name="perangkat_hubungan_industri[kondisi_tenaga_kerja][sma][lk]" class="form-control">
                    </div>
                    <div class="col-6">
                        <label class="mb-2" for="perangkat_hubungan_industri[kondisi_tenaga_kerja][sma][pr]">Perempuan</label>
                        <input @if(isset($perangkatHubunganIndustri)) disabled @endif type="number" id="perangkat_hubungan_industri[kondisi_tenaga_kerja][sma][pr]" value="{{$perangkat_hubungan_industri['kondisi_tenaga_kerja']['sma']['pr']}}" name="perangkat_hubungan_industri[kondisi_tenaga_kerja][sma][pr]" class="form-control">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-12">
        <div class="row mb-3">
            <label class="col-md-3 col-form-label">D1</label>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-6">
                        <label class="mb-2" for="perangkat_hubungan_industri[kondisi_tenaga_kerja][d1][lk]">Laki-laki</label>
                        <input @if(isset($perangkatHubunganIndustri)) disabled @endif type="number" id="perangkat_hubungan_industri[kondisi_tenaga_kerja][d1][lk]" value="{{$perangkat_hubungan_industri['kondisi_tenaga_kerja']['d1']['lk']}}" name="perangkat_hubungan_industri[kondisi_tenaga_kerja][d1][lk]" class="form-control">
                    </div>
                    <div class="col-6">
                        <label class="mb-2" for="perangkat_hubungan_industri[kondisi_tenaga_kerja][d1][pr]">Perempuan</label>
                        <input @if(isset($perangkatHubunganIndustri)) disabled @endif type="number" id="perangkat_hubungan_industri[kondisi_tenaga_kerja][d1][pr]" value="{{$perangkat_hubungan_industri['kondisi_tenaga_kerja']['d1']['pr']}}" name="perangkat_hubungan_industri[kondisi_tenaga_kerja][d1][pr]" class="form-control">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-12">
        <div class="row mb-3">
            <label class="col-md-3 col-form-label">D2</label>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-6">
                        <label class="mb-2" for="perangkat_hubungan_industri[kondisi_tenaga_kerja][d2][lk]">Laki-laki</label>
                        <input @if(isset($perangkatHubunganIndustri)) disabled @endif type="number" id="perangkat_hubungan_industri[kondisi_tenaga_kerja][d2][lk]" value="{{$perangkat_hubungan_industri['kondisi_tenaga_kerja']['d2']['lk']}}" name="perangkat_hubungan_industri[kondisi_tenaga_kerja][d2][lk]" class="form-control">
                    </div>
                    <div class="col-6">
                        <label class="mb-2" for="perangkat_hubungan_industri[kondisi_tenaga_kerja][d2][pr]">Perempuan</label>
                        <input @if(isset($perangkatHubunganIndustri)) disabled @endif type="number" id="perangkat_hubungan_industri[kondisi_tenaga_kerja][d2][pr]" value="{{$perangkat_hubungan_industri['kondisi_tenaga_kerja']['d2']['pr']}}" name="perangkat_hubungan_industri[kondisi_tenaga_kerja][d2][pr]" class="form-control">
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-12">
        <div class="row mb-3">
            <label class="col-md-3 col-form-label">D3</label>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-6">
                        <label class="mb-2" for="perangkat_hubungan_industri[kondisi_tenaga_kerja][d3][lk]">Laki-laki</label>
                        <input @if(isset($perangkatHubunganIndustri)) disabled @endif type="number" id="perangkat_hubungan_industri[kondisi_tenaga_kerja][d3][lk]" value="{{$perangkat_hubungan_industri['kondisi_tenaga_kerja']['d3']['lk']}}" name="perangkat_hubungan_industri[kondisi_tenaga_kerja][d3][lk]" class="form-control">
                    </div>
                    <div class="col-6">
                        <label class="mb-2" for="perangkat_hubungan_industri[kondisi_tenaga_kerja][d3][pr]">Perempuan</label>
                        <input @if(isset($perangkatHubunganIndustri)) disabled @endif type="number" id="perangkat_hubungan_industri[kondisi_tenaga_kerja][d3][pr]" value="{{$perangkat_hubungan_industri['kondisi_tenaga_kerja']['d3']['pr']}}" name="perangkat_hubungan_industri[kondisi_tenaga_kerja][d3][pr]" class="form-control">
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <div class="col-12">
        <div class="row mb-3">
            <label class="col-md-3 col-form-label">D4</label>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-6">
                        <label class="mb-2" for="perangkat_hubungan_industri[kondisi_tenaga_kerja][d4][lk]">Laki-laki</label>
                        <input @if(isset($perangkatHubunganIndustri)) disabled @endif type="number" id="perangkat_hubungan_industri[kondisi_tenaga_kerja][d4][lk]" value="{{$perangkat_hubungan_industri['kondisi_tenaga_kerja']['d4']['lk']}}" name="perangkat_hubungan_industri[kondisi_tenaga_kerja][d4][lk]" class="form-control">
                    </div>
                    <div class="col-6">
                        <label class="mb-2" for="perangkat_hubungan_industri[kondisi_tenaga_kerja][d4][pr]">Perempuan</label>
                        <input @if(isset($perangkatHubunganIndustri)) disabled @endif type="number" id="perangkat_hubungan_industri[kondisi_tenaga_kerja][d4][pr]" value="{{$perangkat_hubungan_industri['kondisi_tenaga_kerja']['d4']['pr']}}" name="perangkat_hubungan_industri[kondisi_tenaga_kerja][d4][pr]" class="form-control">
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-12">
        <div class="row mb-3">
            <label class="col-md-3 col-form-label">S1</label>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-6">
                        <label class="mb-2" for="perangkat_hubungan_industri[kondisi_tenaga_kerja][s1][lk]">Laki-laki</label>
                        <input @if(isset($perangkatHubunganIndustri)) disabled @endif type="number" id="perangkat_hubungan_industri[kondisi_tenaga_kerja][s1][lk]" value="{{$perangkat_hubungan_industri['kondisi_tenaga_kerja']['s1']['lk']}}" name="perangkat_hubungan_industri[kondisi_tenaga_kerja][s1][lk]" class="form-control">
                    </div>
                    <div class="col-6">
                        <label class="mb-2" for="perangkat_hubungan_industri[kondisi_tenaga_kerja][s1][pr]">Perempuan</label>
                        <input @if(isset($perangkatHubunganIndustri)) disabled @endif type="number" id="perangkat_hubungan_industri[kondisi_tenaga_kerja][s1][pr]" value="{{$perangkat_hubungan_industri['kondisi_tenaga_kerja']['s1']['pr']}}" name="perangkat_hubungan_industri[kondisi_tenaga_kerja][s1][pr]" class="form-control">
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-12">
        <div class="row mb-3">
            <label class="col-md-3 col-form-label">S2</label>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-6">
                        <label class="mb-2" for="perangkat_hubungan_industri[kondisi_tenaga_kerja][s2][lk]">Laki-laki</label>
                        <input @if(isset($perangkatHubunganIndustri)) disabled @endif type="number" id="perangkat_hubungan_industri[kondisi_tenaga_kerja][s2][lk]" value="{{$perangkat_hubungan_industri['kondisi_tenaga_kerja']['s2']['lk']}}" name="perangkat_hubungan_industri[kondisi_tenaga_kerja][s2][lk]" class="form-control">
                    </div>
                    <div class="col-6">
                        <label class="mb-2" for="perangkat_hubungan_industri[kondisi_tenaga_kerja][s2][pr]">Perempuan</label>
                        <input @if(isset($perangkatHubunganIndustri)) disabled @endif type="number" id="perangkat_hubungan_industri[kondisi_tenaga_kerja][s2][pr]" value="{{$perangkat_hubungan_industri['kondisi_tenaga_kerja']['s2']['pr']}}" name="perangkat_hubungan_industri[kondisi_tenaga_kerja][s2][pr]" class="form-control">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-12">
        <div class="row mb-3">
            <label class="col-md-3 col-form-label">S3</label>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-6">
                        <label class="mb-2" for="perangkat_hubungan_industri[kondisi_tenaga_kerja][s3][lk]">Laki-laki</label>
                        <input @if(isset($perangkatHubunganIndustri)) disabled @endif type="number" id="perangkat_hubungan_industri[kondisi_tenaga_kerja][s3][lk]" value="{{$perangkat_hubungan_industri['kondisi_tenaga_kerja']['s3']['lk']}}" name="perangkat_hubungan_industri[kondisi_tenaga_kerja][s3][lk]" class="form-control">
                    </div>
                    <div class="col-6">
                        <label class="mb-2" for="perangkat_hubungan_industri[kondisi_tenaga_kerja][s3][pr]">Perempuan</label>
                        <input @if(isset($perangkatHubunganIndustri)) disabled @endif type="number" id="perangkat_hubungan_industri[kondisi_tenaga_kerja][s3][pr]" value="{{$perangkat_hubungan_industri['kondisi_tenaga_kerja']['s3']['pr']}}" name="perangkat_hubungan_industri[kondisi_tenaga_kerja][s3][pr]" class="form-control">
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-12">
        <div class="row mb-3">
            <label class="col-md-3 col-form-label">PKWT</label>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-6">
                        <label class="mb-2" for="perangkat_hubungan_industri[kondisi_tenaga_kerja][pkwt][lk]">Laki-laki</label>
                        <input @if(isset($perangkatHubunganIndustri)) disabled @endif type="number" id="perangkat_hubungan_industri[kondisi_tenaga_kerja][pkwt][lk]" value="{{$perangkat_hubungan_industri['kondisi_tenaga_kerja']['pkwt']['lk']}}" name="perangkat_hubungan_industri[kondisi_tenaga_kerja][pkwt][lk]" class="form-control">
                    </div>
                    <div class="col-6">
                        <label class="mb-2" for="perangkat_hubungan_industri[kondisi_tenaga_kerja][pkwt][pr]">Perempuan</label>
                        <input @if(isset($perangkatHubunganIndustri)) disabled @endif type="number" id="perangkat_hubungan_industri[kondisi_tenaga_kerja][pkwt][pr]" value="{{$perangkat_hubungan_industri['kondisi_tenaga_kerja']['pkwt']['pr']}}" name="perangkat_hubungan_industri[kondisi_tenaga_kerja][pkwt][pr]" class="form-control">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-12">
        <div class="row mb-3">
            <label class="col-md-3 col-form-label">PKWTT</label>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-6">
                        <label class="mb-2" for="perangkat_hubungan_industri[kondisi_tenaga_kerja][pkwtt][lk]">Laki-laki</label>
                        <input @if(isset($perangkatHubunganIndustri)) disabled @endif type="number" id="perangkat_hubungan_industri[kondisi_tenaga_kerja][pkwtt][lk]" value="{{$perangkat_hubungan_industri['kondisi_tenaga_kerja']['pkwtt']['lk']}}" name="perangkat_hubungan_industri[kondisi_tenaga_kerja][pkwtt][lk]" class="form-control">
                    </div>
                    <div class="col-6">
                        <label class="mb-2" for="perangkat_hubungan_industri[kondisi_tenaga_kerja][pkwtt][pr]">Perempuan</label>
                        <input @if(isset($perangkatHubunganIndustri)) disabled @endif type="number" id="perangkat_hubungan_industri[kondisi_tenaga_kerja][pkwtt][pr]" value="{{$perangkat_hubungan_industri['kondisi_tenaga_kerja']['pkwtt']['pr']}}" name="perangkat_hubungan_industri[kondisi_tenaga_kerja][pkwtt][pr]" class="form-control">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-12">
        <div class="row mb-3">
            <label class="col-md-3 col-form-label">Penyandang Disabilitas</label>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-6">
                        <label class="mb-2" for="perangkat_hubungan_industri[kondisi_tenaga_kerja][penyandang_disabilitas][lk]">Laki-laki</label>
                        <input @if(isset($perangkatHubunganIndustri)) disabled @endif type="number" id="perangkat_hubungan_industri[kondisi_tenaga_kerja][penyandang_disabilitas][lk]" value="{{$perangkat_hubungan_industri['kondisi_tenaga_kerja']['penyandang_disabilitas']['lk']}}" name="perangkat_hubungan_industri[kondisi_tenaga_kerja][penyandang_disabilitas][lk]" class="form-control">
                    </div>
                    <div class="col-6">
                        <label class="mb-2" for="perangkat_hubungan_industri[kondisi_tenaga_kerja][penyandang_disabilitas][pr]">Perempuan</label>
                        <input @if(isset($perangkatHubunganIndustri)) disabled @endif type="number" id="perangkat_hubungan_industri[kondisi_tenaga_kerja][penyandang_disabilitas][pr]" value="{{$perangkat_hubungan_industri['kondisi_tenaga_kerja']['penyandang_disabilitas']['pr']}}" name="perangkat_hubungan_industri[kondisi_tenaga_kerja][penyandang_disabilitas][pr]" class="form-control">
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>