<div class="row">
    <div class="col-12">
        <div class="row mb-3">
            <label class="col-md-3 col-form-label" for="bpjs_kesehatan[jumlah_tenaga_kerja_laki_laki]">Jumlah Tenaga Kerja Laki-laki</label>
            <div class="col-md-9">
                <input @if(isset($bpjsKesehatan)) disabled @endif type="number" id="bpjs_kesehatan[jumlah_tenaga_kerja_laki_laki]" value="" name="bpjs_kesehatan[jumlah_tenaga_kerja_laki_laki]" class="form-control @error('bpjs_kesehatan.jumlah_tenaga_kerja_laki_laki') is-invalid @enderror">
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-md-3 col-form-label" for="bpjs_kesehatan[jumlah_tenaga_kerja_perempuan]">Jumlah Tenaga Kerja Perempuan</label>
            <div class="col-md-9">
                <input @if(isset($bpjsKesehatan)) disabled @endif type="number" id="bpjs_kesehatan[jumlah_tenaga_kerja_perempuan]" value="" name="bpjs_kesehatan[jumlah_tenaga_kerja_perempuan]" class="form-control @error('bpjs_kesehatan.jumlah_tenaga_kerja_perempuan') is-invalid @enderror">
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-md-3 col-form-label" for="bpjs_ketenagakerjaan[no_bpjs_ketenagakerjaan_perusahaan]">No BPJS Ketenagakerjaan Perusahaan</label>
            <div class="col-md-9">
                <input @if(isset($bpjsKetenagakerjaan)) disabled @endif type="text" id="bpjs_ketenagakerjaan[no_bpjs_ketenagakerjaan_perusahaan]" value="" name="bpjs_ketenagakerjaan[no_bpjs_ketenagakerjaan_perusahaan]" class="form-control @error('bpjs_ketenagakerjaan.no_bpjs_ketenagakerjaan_perusahaan') is-invalid @enderror">
            </div>
        </div>
        <div class="row mb-3">

            <hr>

            <h5>Program Jaminan Sosial</h5>

            @foreach(\App\Models\RefJaminanSosial::get() as $jamsos)
            <div class="col-12">
                <div class="row mb-3">
                    <label class="col-md-3 col-form-label">{{$jamsos->nama}}</label>
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-6">
                                <label class="mb-2" for="bpjs_ketenagakerjaan[program_jaminan_sosial][{{$jamsos->id}}][lk]">Jumlah Tenaga Kerja Laki-laki</label>
                                <input type="number" id="bpjs_ketenagakerjaan[program_jaminan_sosial][{{$jamsos->id}}][lk]" value="" name="bpjs_ketenagakerjaan[program_jaminan_sosial][{{$jamsos->id}}][lk]" class="form-control @error('bpjs_ketenagakerjaan.program_jaminan_sosial.'.$jamsos->id.'.lk') is-invalid @enderror">
                            </div>
                            <div class="col-6">
                                <label class="mb-2" for="bpjs_ketenagakerjaan[program_jaminan_sosial][{{$jamsos->id}}][pr]">Jumlah Tenaga Kerja Perempuan</label>
                                <input type="number" id="bpjs_ketenagakerjaan[program_jaminan_sosial][{{$jamsos->id}}][pr]" value="" name="bpjs_ketenagakerjaan[program_jaminan_sosial][{{$jamsos->id}}][pr]" class="form-control @error('bpjs_ketenagakerjaan.program_jaminan_sosial.'.$jamsos->id.'.pr') is-invalid @enderror">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->