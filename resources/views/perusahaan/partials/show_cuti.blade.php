<div class="row mb-3">
    <hr>

    <label class="col-md-3 col-form-label">Pelaksanaan Cuti</label>
    <div class="col-md-9 m-auto">
        @foreach($dataUmum->cuti as $cuti)
        <div class="form-check form-check-inline">
            <label class="form-check-label" for="pelaksanaan_cuti_{{$cuti->id}}">{{$cuti->cuti->nama}}</label>
        </div>
        @endforeach
    </div>
</div>