<div class="row">
    <div class="col-12">
        @foreach(\App\Models\RefKategoriFasilitas::get() as $kategori)
        <div class="row mb-3">
            <label class="col-md-3 col-form-label">{{$kategori->nama}}</label>
            <div class="col-md-9">
                @foreach($kategori->fasilitas as $index => $fasilitas)
                <div class="form-check">
                    <input type="checkbox" 
                            id="kategori_{{$kategori->id}}_{{$index}}" 
                            name="kategori[{{$kategori->id}}][{{$fasilitas->id}}]" class="form-check-input"
                            @if(request()->routeIs('office.edit'))
                            @if(in_array($fasilitas->id, $selectedFasilitas))
                            checked=""
                            @endif
                            @else
                            @if(session('data_input') && isset(session('data_input')['kategori']) && isset(session('data_input')['kategori'][$kategori->id]) && in_array($fasilitas->id, array_keys(session('data_input')['kategori'][$kategori->id])))
                            checked=""
                            @endif
                            @endif
                            >
                    <label class="form-check-label" for="kategori_{{$kategori->id}}_{{$index}}">{{$fasilitas->nama}}</label>
                </div>
                @endforeach
            </div>
        </div>
        @endforeach
    </div> <!-- end col -->
</div> <!-- end row -->