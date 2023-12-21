<div class="row">
    <div class="col-12">
        @foreach(\App\Models\RefKategoriFasilitas::get() as $kategori)
        <div class="row mb-3">
            <label class="col-md-3 col-form-label">{{$kategori->nama}}</label>
            <div class="col-md-9">
                @foreach($dataUmum->fasilitas()->whereHas('fasilitas', function($q) use ($kategori){ $q->where('kategori_id', $kategori->id); })->get() as $index => $fasilitas)
                {{$fasilitas->fasilitas->nama}}<br>
                @endforeach
            </div>
        </div>
        @endforeach
    </div> <!-- end col -->
</div> <!-- end row -->