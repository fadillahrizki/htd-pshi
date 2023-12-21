<div class="row">
    <div class="col-12">
        <div class="row mb-3">
            <label class="col-md-3 col-form-label" for="bpjs_kesehatan[jumlah_tenaga_kerja_laki_laki]">Jumlah Tenaga Kerja Laki-laki</label>
            <div class="col-md-9">
                {{$dataUmum->bpjs_kesehatan->jumlah_tenaga_kerja_laki_laki}}
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-md-3 col-form-label" for="bpjs_kesehatan[jumlah_tenaga_kerja_perempuan]">Jumlah Tenaga Kerja Perempuan</label>
            <div class="col-md-9">
                {{$dataUmum->bpjs_kesehatan->jumlah_tenaga_kerja_perempuan}}
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-md-3 col-form-label" for="bpjs_ketenagakerjaan[no_bpjs_ketenagakerjaan_perusahaan]">No BPJS Ketenagakerjaan Perusahaan</label>
            <div class="col-md-9">
                {{$dataUmum->bpjs_ketenagakerjaan->no_bpjs_ketenagakerjaan_perusahaan}}
            </div>
        </div>
        <div class="row mb-3">

            <hr>

            <h5>Program Jaminan Sosial</h5>

            @foreach($dataUmum->jaminanSosial as $jamsos)
            <div class="col-12">
                <div class="row mb-3">
                    <label class="col-md-3 col-form-label">{{$jamsos->jamsos->nama}}</label>
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-6">
                                <label class="mb-2" for="bpjs_ketenagakerjaan[program_jaminan_sosial][{{$jamsos->id}}][lk]">Jumlah Tenaga Kerja Laki-laki</label><br>
                                {{$jamsos->jumlah_lk}}
                            </div>
                            <div class="col-6">
                                <label class="mb-2" for="bpjs_ketenagakerjaan[program_jaminan_sosial][{{$jamsos->id}}][pr]">Jumlah Tenaga Kerja Perempuan</label><br>
                                {{$jamsos->jumlah_pr}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->