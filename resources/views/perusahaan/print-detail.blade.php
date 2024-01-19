<center>
    <h2>DATA PERUSAHAAN</h2>
</center>
<table id="basic-datatable" border="1" width="100%" cellspacing="0" cellpadding="5">
    <thead>
        <tr>
            <th colspan="2">Data Umum</th>
        </tr>
    </thead>
    <tbody>
        @foreach($dataUmum->toArray() as $key => $value)
            @if(!is_array($value) && !in_array($key, ['id', 'user_id', 'created_at', 'updated_at', 'updated_at','status','tanggal_awal','tanggal_akhir']))    
                <tr>
                    <th align="left" width="50%">{{ucwords(str_replace('_', ' ', $key))}}</th>
                    <td>{{$value}}</td>
                </tr>
            @endif
        @endforeach
    </tbody>
</table>

<br><br>

<table id="basic-datatable" border="1" width="100%" cellspacing="0" cellpadding="5">
    <thead>
        <tr>
            <th colspan="2">Data Ketenagakerjaan</th>
        </tr>
    </thead>
    <tbody>
        @foreach($dataUmum->data_ketenagakerjaan->toArray() as $key => $value)
            @if(!is_array($value) && !in_array($key, ['id', 'data_umum_id', 'created_at', 'updated_at']))    
                <tr>
                    <th align="left" width="50%">{{ucwords(str_replace('_', ' ', $key))}}</th>
                    <td>{{strpos($key,'tingkat_upah') > -1 ? 'Rp. '.number_format($value, 0, ',','.') : $value}}</td>
                </tr>
            @endif
        @endforeach
        @foreach($dataUmum->data_ketenagakerjaan->sistem_pembayaran_upah->toArray() as $key => $value)
            @if(!is_array($value) && !in_array($key, ['id', 'data_ketenagakerjaan_id', 'created_at', 'updated_at']))    
                <tr>
                    <th align="left" width="50%">{{$key == 'harian' ? 'Sistem Pembayaran Upah' : ''}}</th>
                    <td>{{ucwords(str_replace('_', ' ', $key))}} : Rp. {{number_format($value,0,',','.')}}</td>
                </tr>
            @endif
        @endforeach
    </tbody>
</table>

<br><br>

<table id="basic-datatable" border="1" width="100%" cellspacing="0" cellpadding="5">
    <thead>
        <tr>
            <th colspan="2">Fasilitas Perusahaan</th>
        </tr>
    </thead>
    <tbody>
        
        @foreach(\App\Models\RefKategoriFasilitas::get() as $kategori)
        <tr>
            <th align="left" width="50%">{{$kategori->nama}}</th>
            <td>
                @foreach($dataUmum->fasilitas()->whereHas('fasilitas', function($q) use ($kategori){ $q->where('kategori_id', $kategori->id); })->get() as $index => $fasilitas)
                {{$fasilitas->fasilitas->nama}}<br>
                @endforeach
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<br><br>

<table id="basic-datatable" border="1" width="100%" cellspacing="0" cellpadding="5">
    <thead>
        <tr>
            <th colspan="5">BPJS Kesehatan dan Ketenagakerjaan</th>
        </tr>
    </thead>
    <tbody>
        @foreach($dataUmum->bpjs_kesehatan->toArray() as $key => $value)
            @if(!is_array($value) && !in_array($key, ['id', 'data_umum_id', 'created_at', 'updated_at']))    
                <tr>
                    <th align="left" width="50%">{{ucwords(str_replace('_', ' ', $key))}}</th>
                    <td colspan="4">{{$value}}</td>
                </tr>
            @endif
        @endforeach
        @foreach($dataUmum->bpjs_ketenagakerjaan->toArray() as $key => $value)
            @if(!is_array($value) && !in_array($key, ['id', 'data_umum_id', 'created_at', 'updated_at']))    
                <tr>
                    <th align="left" width="50%">{{ucwords(str_replace('_', ' ', $key))}}</th>
                    <td colspan="4">{{$value}}</td>
                </tr>
            @endif
        @endforeach

        @foreach($dataUmum->jaminanSosial as $jamsos)
            <tr>
                <th align="left" width="50%">{{$jamsos->jamsos->nama}}</th>
                <th align="left">Laki-laki</th>
                <td>{{$jamsos->jumlah_lk}}</td>
                <th align="left">Perempuan</th>
                <td>{{$jamsos->jumlah_pr}}</td>
            </tr>
        @endforeach
    </tbody>
</table>

<br><br>

<table id="basic-datatable" border="1" width="100%" cellspacing="0" cellpadding="5">
    <thead>
        <tr>
            <th colspan="2">Perangkat Hubungan Industri</th>
        </tr>
    </thead>
    <tbody>
        @foreach($dataUmum->perangkat_hubungan_industri->toArray() as $key => $value)
            @if(!is_array($value) && !in_array($key, ['id', 'data_umum_id', 'created_at', 'updated_at']))    
                <tr>
                    <th align="left" width="50%">{{ucwords(str_replace('_', ' ', $key))}}</th>
                    <td>{{$value}}</td>
                </tr>
                @if($key == 'perangkat_hubungan_kerja')
                <tr>
                    <th align="left">Masa Berlaku</th>
                    <td>{{$dataUmum->tanggal_awal.' - '.$dataUmum->tanggal_akhir}}</td>
                </tr>
                @endif
            @endif
        @endforeach
    </tbody>
</table>

<br><br>

<table id="basic-datatable" border="1" width="100%" cellspacing="0" cellpadding="5">
    <thead>
        <tr>
            <th colspan="3">Kondisi Tenaga Kerja</th>
        </tr>
        <tr>
            <th>PENDIDIKAN/STATUS</th>
            <th>LAKI-LAKI</th>
            <th>PEREMPUAN</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($dataUmum->kondisiTk as $lulusan)
            <tr>
                <th align="left" width="50%">{{$lulusan->lulusan->nama}}</th>
                <td>{{number_format($lulusan->jumlah_lk, 0,',','.')}}</td>
                <td>{{number_format($lulusan->jumlah_pr, 0,',','.')}}</td>
            </tr>
        @endforeach
    </tbody>
</table>

<br><br>

<table id="basic-datatable" border="1" width="100%" cellspacing="0" cellpadding="5">
    <thead>
        <tr>
            <th colspan="2">Pelaksanaan Cuti</th>
        </tr>
    </thead>
    <tbody>
        @foreach($dataUmum->cuti as $cuti)
            <tr>
                <td align="center">{{$cuti->cuti->nama}}</td>
            </tr>
        @endforeach
    </tbody>
</table>

<br><br>

<table id="basic-datatable" border="1" width="100%" cellspacing="0" cellpadding="5">
    <thead>
        <tr>
            <th colspan="2">Kasus Perselisihan</th>
        </tr>
    </thead>
    <tbody>
        @foreach($dataUmum->kasus_perselisihan->toArray() as $key => $value)
            @if(!is_array($value) && !in_array($key, ['id', 'data_umum_id', 'created_at', 'updated_at']))    
                <tr>
                    <th align="left" width="50%">{{ucwords(str_replace('_', ' ', $key))}}</th>
                    <td>{{$value}}</td>
                </tr>
            @endif
        @endforeach
    </tbody>
</table>

<script>
window.print()
</script>