<div class="row mb-3">
    <hr>

    <label class="col-md-3 col-form-label">Pelaksanaan Cuti</label>
    <div class="col-md-9 m-auto">
        @foreach(\App\Models\RefCuti::get() as $cuti)
        <div class="form-check form-check-inline">
            <input type="checkbox" id="pelaksanaan_cuti_{{$cuti->id}}" name="pelaksanaan_cuti[{{$cuti->id}}]" class="form-check-input">
            <label class="form-check-label" for="pelaksanaan_cuti_{{$cuti->id}}">{{$cuti->nama}}</label>
        </div>
        @endforeach
    </div>
</div>