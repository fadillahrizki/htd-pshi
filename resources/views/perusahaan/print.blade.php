<center>
    <h2>DAFTAR BADAN USAHA/PERUSAHAAN TAHUN 2023</h2>
</center>
<table id="basic-datatable" border="1" width="100%" cellspacing="0" cellpadding="5">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Badan Usaha</th>
            <th>Alamat Badan Usaha</th>
            <th>Nama Pemilik</th>
            <th>No. Telepon</th>
            <th>Jumlah Pekerja</th>
            <th>PP</th>
            <th>PKB</th>
            <th>BPJS Kesehatan</th>
            <th>BPJS Ketenagakerjaan</th>
        </tr>
    </thead>

    <tbody>
        @foreach($data as $key => $dt)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$dt->nama_perusahaan}}</td>
            <td>{{$dt->alamat_perusahaan}})</td>
            <td>{{$dt->nama_pemilik_perusahaan}})</td>
            <td>{{$dt->no_telepon}}</td>
            <td>{{number_format($dt->bpjs_kesehatan->jumlah_tenaga_kerja_laki_laki+$dt->bpjs_kesehatan->jumlah_tenaga_kerja_perempuan+$dt->kondisiTk()->sum('jumlah_lk')+$dt->kondisiTk()->sum('jumlah_pr'), 0, ',', '.')}}</td>
            <td>{{$dt->perangkat_hubungan_industri->perangkat_hubungan_kerja == 'Peraturan Perusahaan' ? 'PP' : ''}}</td>
            <td>{{$dt->perangkat_hubungan_industri->perangkat_hubungan_kerja != 'Peraturan Perusahaan' ? 'PKB' : ''}}</td>
            <td>{{number_format($dt->bpjs_kesehatan->jumlah_tenaga_kerja_laki_laki+$dt->bpjs_kesehatan->jumlah_tenaga_kerja_perempuan, 0, ',', '.')}}</td>
            <td>{{number_format($dt->kondisiTk()->sum('jumlah_lk')+$dt->kondisiTk()->sum('jumlah_pr'), 0, ',', '.')}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
<script>
window.print()
</script>