<div class="row">
    <div class="col-12">
        <div class="row mb-3">
            <label class="col-md-3 col-form-label" for="data_ketenagakerjaan[waktu_kerja]">Waktu Kerja</label>
            <div class="col-md-9">
                {{$dataUmum->data_ketenagakerjaan->waktu_kerja}}
            </div>
        </div>
        <div class="row mb-3">
            <hr>
            <h5>Pengupahan</h5>
        
            <div class="row mb-3">
                <label class="col-md-3 col-form-label" for="data_ketenagakerjaan[tingkat_upah_terendah]">Tingkat Upah Terendah</label>
                <div class="col-md-9">
                    Rp. {{number_format($dataUmum->data_ketenagakerjaan->tingkat_upah_terendah)}}
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-md-3 col-form-label" for="data_ketenagakerjaan[tingkat_upah_tertinggi]">Tingkat Upah Tertinggi</label>
                <div class="col-md-9">
                    Rp. {{number_format($dataUmum->data_ketenagakerjaan->tingkat_upah_tertinggi)}}
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <hr>
            <h5>Sistem Pembayaran Upah</h5>
        
            <div class="row mb-3">
                <label class="col-md-3 col-form-label" for="data_ketenagakerjaan[sistem_pembayaran_upah][harian]">Harian</label>
                <div class="col-md-9">
                    {{$dataUmum->data_ketenagakerjaan->sistem_pembayaran_upah->harian ? 'Ya' : 'Tidak'}}
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-md-3 col-form-label" for="data_ketenagakerjaan[sistem_pembayaran_upah][borongan]">Borongan</label>
                <div class="col-md-9">
                    {{$dataUmum->data_ketenagakerjaan->sistem_pembayaran_upah->borongan ? 'Ya' : 'Tidak'}}
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-md-3 col-form-label" for="data_ketenagakerjaan[sistem_pembayaran_upah][bulanan]">Bulanan</label>
                <div class="col-md-9">
                    {{$dataUmum->data_ketenagakerjaan->sistem_pembayaran_upah->bulanan ? 'Ya' : 'Tidak'}}
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-md-3 col-form-label">Struktur dan Skala Upah</label>
            <div class="col-md-9 m-auto">
                {{$dataUmum->data_ketenagakerjaan->struktur_skala_upah}}
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->