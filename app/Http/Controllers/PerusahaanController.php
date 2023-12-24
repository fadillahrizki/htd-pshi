<?php

namespace App\Http\Controllers;

use App\Models\Cuti;
use App\Models\DataUmum;
use App\Models\Fasilitas;
use App\Models\JaminanSosial;
use App\Models\KondisiTk;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class PerusahaanController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request) {
        if($request->isMethod('post')) {
            $dataUmum = DataUmum::find($request->input('id'));

            if($request->input('type') == 'delete') {
                $dataUmum->delete();
            } else {
                if($request->input('type') == 'verify') {
                    $dataUmum->status = 'Verified';
                } else if($request->input('type') == 'reject') {
                    $dataUmum->status = 'Rejected';
                }
                
                $dataUmum->save();
            }

            return back()->with(['message'=> 'Data Updated!']);
        }

        $user = auth()->user();

        $data = $user->role == 'Perusahaan' ? $user->dataUmums : DataUmum::get();

        return view('perusahaan.index', ['data' => $data]);
    }

    public function view($id) {
        $dataUmum = DataUmum::find($id);

        $dataUmum->data_ketenagakerjaan;
        $dataUmum->fasilitas;
        $dataUmum->bpjs_kesehatan;
        $dataUmum->bpjs_ketenagakerjaan;
        $dataUmum->perangkat_hubungan_industri;
        $dataUmum->kasus_perselisihan;
        $dataUmum->jaminanSosial;
        $dataUmum->cuti;

        return view('perusahaan.show', compact('dataUmum'));
    }

    public function oldview($id) {
        $dataUmum = DataUmum::find($id);
        
        $data = [
            'dataUmum' => $dataUmum,
            'dataKetenagakerjaan' => $dataUmum->data_ketenagakerjaan,
            'fasilitasKeselamatanKesehatanKerja' => $dataUmum->fasilitas_keselamatan_kesehatan_kerja,
            'fasilitasKesejahteraan' => $dataUmum->fasilitas_kesejahteraan,
            'bpjsKesehatan' => $dataUmum->bpjs_kesehatan,
            'bpjsKetenagakerjaan' => $dataUmum->bpjs_ketenagakerjaan,
            'perangkatHubunganIndustri' => $dataUmum->perangkat_hubungan_industri,
            'pelaksanaanCuti' => $dataUmum->pelaksanaan_cuti,
            'kasusPerselisihan' => $dataUmum->kasus_perselisihan,
        ];
        
        return view('perusahaan.form', $data);
    }

    public function create() {
        return view('perusahaan.create');
    }

    public function store(Request $request)
    {
        session(['data_input' => $request->except(['_token', 'type'])]);

        if($request->input('type') == 'save') {
            return back()->with(['status'=>'success', 'message' => 'Sukes menyimpan data!']);
        } else if($request->input('type') == 'submit') {

            $request->validate([
                'data_umum.nama_perusahaan' => 'required',
                'data_umum.alamat_perusahaan' => 'required',
                'data_umum.no_telepon' => 'required',
                'data_umum.email' => 'required',
                'data_umum.jenis_usaha' => 'required',
                'data_umum.nama_pemilik_perusahaan' => 'required',
                'data_umum.alamat_pemilik_perusahaan' => 'required',
                'data_umum.pendirian_perusahaan' => 'required',
                'data_umum.no_akte_pendirian' => 'required',
                'data_umum.status_perusahaan' => 'required',
                'data_umum.status_kepemilikan' => 'required',

                'data_ketenagakerjaan.waktu_kerja' => 'required',
                'data_ketenagakerjaan.tingkat_upah_terendah' => 'required',
                'data_ketenagakerjaan.tingkat_upah_tertinggi' => 'required',
                'data_ketenagakerjaan.struktur_skala_upah' => 'required',

                'data_ketenagakerjaan.sistem_pembayaran_upah.harian' => 'required',
                'data_ketenagakerjaan.sistem_pembayaran_upah.borongan' => 'required',
                'data_ketenagakerjaan.sistem_pembayaran_upah.bulanan' => 'required',

                'bpjs_kesehatan.jumlah_tenaga_kerja_laki_laki' => 'required',
                'bpjs_kesehatan.jumlah_tenaga_kerja_perempuan' => 'required',

                'bpjs_ketenagakerjaan.no_bpjs_ketenagakerjaan_perusahaan' => 'required',

                'bpjs_ketenagakerjaan.program_jaminan_sosial.*' => 'required|array',
                // 'bpjs_ketenagakerjaan.program_jaminan_sosial.program_jht.*' => 'required',
                // 'bpjs_ketenagakerjaan.program_jaminan_sosial.program_jkm.*' => 'required',
                // 'bpjs_ketenagakerjaan.program_jaminan_sosial.program_jp.*' => 'required',
                // 'bpjs_ketenagakerjaan.program_jaminan_sosial.program_jkp.*' => 'required',

                'perangkat_hubungan_industri.perangkat_hubungan_kerja' => 'required',
                'perangkat_hubungan_industri.perjanjian_kerja' => 'required',
                'perangkat_hubungan_industri.lks_bipartite' => 'required',
                'perangkat_hubungan_industri.serikat_pekerja_buruh' => 'required',
                'perangkat_hubungan_industri.nama_serikat_pekerja_buruh' => 'required',

                'perangkat_hubungan_industri.kondisi_tenaga_kerja.*' => 'required|array',
                // 'perangkat_hubungan_industri.kondisi_tenaga_kerja.sltp.*' => 'required',
                // 'perangkat_hubungan_industri.kondisi_tenaga_kerja.sma.*' => 'required',
                // 'perangkat_hubungan_industri.kondisi_tenaga_kerja.d1.*' => 'required',
                // 'perangkat_hubungan_industri.kondisi_tenaga_kerja.d2.*' => 'required',
                // 'perangkat_hubungan_industri.kondisi_tenaga_kerja.d3.*' => 'required',
                // 'perangkat_hubungan_industri.kondisi_tenaga_kerja.d4.*' => 'required',
                // 'perangkat_hubungan_industri.kondisi_tenaga_kerja.s1.*' => 'required',
                // 'perangkat_hubungan_industri.kondisi_tenaga_kerja.s2.*' => 'required',
                // 'perangkat_hubungan_industri.kondisi_tenaga_kerja.s3.*' => 'required',
                // 'perangkat_hubungan_industri.kondisi_tenaga_kerja.pkwt.*' => 'required',
                // 'perangkat_hubungan_industri.kondisi_tenaga_kerja.pkwtt.*' => 'required',
                // 'perangkat_hubungan_industri.kondisi_tenaga_kerja.penyandang_disabilitas.*' => 'required',

                'kasus_perselisihan.pemutusan_hubungan_kerja' => 'required',
                'kasus_perselisihan.serikat_pekerja_buruh' => 'required',
                'kasus_perselisihan.mogok_kerja' => 'required',
                'kasus_perselisihan.lock_out' => 'required',
            ]);


            DB::beginTransaction();

            try {
                
                if(auth()->user()->role == 'Admin')
                {
                    $user = User::create([
                        'name' => $request->data_umum['nama_perusahaan'],
                        'email' => $request->data_umum['email'],
                        'password' => bcrypt('secret'),
                    ]);
                }
                else
                {
                    $user = auth()->user();
                }

                $dataUmum = $user->dataUmums()->create($request->input('data_umum'));

                $dataKetenagaKerjaan  = $dataUmum->data_ketenagakerjaan()->create(Arr::except($request->input('data_ketenagakerjaan'), 'sistem_pembayaran_upah'));
                $sistemPembayaranUpah = $dataKetenagaKerjaan->sistem_pembayaran_upah()->create($request->input('data_ketenagakerjaan')['sistem_pembayaran_upah']);
                $bpjsKesehatan = $dataUmum->bpjs_kesehatan()->create($request->input('bpjs_kesehatan'));

                if($request->kategori)
                {
                    foreach($request->kategori as $kategori_id => $fasilitas)
                    {
                        foreach($fasilitas as $fasilitas_id => $value)
                        {
                            if($value == 'on')
                            {
                                Fasilitas::create([
                                    'data_umum_id' => $dataUmum->id,
                                    'fasilitas_id' => $fasilitas_id
                                ]);
                            }
                        }
                    }
                }

                foreach($request->bpjs_ketenagakerjaan['program_jaminan_sosial'] as $jamsos_id => $value)
                {
                    JaminanSosial::create([
                        'data_umum_id' => $dataUmum->id,
                        'jamsos_id' => $jamsos_id,
                        'jumlah_lk' => $value['lk'],
                        'jumlah_pr' => $value['pr'],
                    ]);
                }

                foreach($request->input('perangkat_hubungan_industri')['kondisi_tenaga_kerja'] as $lulusan_id => $value)
                {
                    KondisiTk::create([
                        'data_umum_id' => $dataUmum->id,
                        'lulusan_id'   => $lulusan_id,
                        'jumlah_lk'    => $value['lk'],
                        'jumlah_pr'    => $value['pr'],
                    ]);
                }

                foreach($request->pelaksanaan_cuti as $cuti_id => $value)
                {
                    Cuti::create([
                        'data_umum_id' => $dataUmum->id,
                        'cuti_id'   => $cuti_id,
                    ]);
                }

                $bpjsKetenagakerjaan = $dataUmum->bpjs_ketenagakerjaan()->create(Arr::except($request->input('bpjs_ketenagakerjaan'), 'program_jaminan_sosial'));
                
                $perangkatHubunganIndustri = $dataUmum->perangkat_hubungan_industri()->create(Arr::except($request->input('perangkat_hubungan_industri'), 'kondisi_tenaga_kerja'));
                
                $kasusPerselisihan = $dataUmum->kasus_perselisihan()->create($request->input('kasus_perselisihan'));
                
                // $fasilitasKeselamatanKesehatanKerja = $dataUmum->fasilitas_keselamatan_kesehatan_kerja()->create($request->input('fasilitas_keselamatan_kesehatan_kerja'));

                // $fasilitasKesejahteraan = $dataUmum->fasilitas_kesejahteraan()->create($request->input('fasilitas_kesejahteraan'));
                
                // $programJaminanSosial = $bpjsKetenagakerjaan->program_jaminan_sosial()->create($request->input('bpjs_ketenagakerjaan')['program_jaminan_sosial']);

                // $kondisiTenagaKerja = $perangkatHubunganIndustri->kondisi_tenaga_kerja()->create($request->input('perangkat_hubungan_industri')['kondisi_tenaga_kerja']);

                // $pelaksanaanCuti = $dataUmum->pelaksanaan_cuti()->create($request->input('pelaksanaan_cuti'));

                
                DB::commit();
                
                session()->forget('data_input');
                
                return back()->with(['status'=>'success', 'message' => 'Sukes mengirimkan data!']);
            } catch(\Exception $e) {
                DB::rollback();

                throw $e;

                return back()->with(['status'=>'failed', 'message' => 'Gagal mengirimkan data!'])->withInput();
            }

        }
    }

    function save(Request $request) {
        session(['data_input' => $request->except(['_token', 'type'])]);

        if($request->input('type') == 'save') {
            return back()->with(['status'=>'success', 'message' => 'Sukes menyimpan data!']);
        } else if($request->input('type') == 'submit') {

            $request->validate([
                'data_umum.nama_perusahaan' => 'required',
                'data_umum.alamat_perusahaan' => 'required',
                'data_umum.no_telepon' => 'required',
                'data_umum.email' => 'required',
                'data_umum.jenis_usaha' => 'required',
                'data_umum.nama_pemilik_perusahaan' => 'required',
                'data_umum.alamat_pemilik_perusahaan' => 'required',
                'data_umum.pendirian_perusahaan' => 'required',
                'data_umum.no_akte_pendirian' => 'required',
                'data_umum.status_perusahaan' => 'required',
                'data_umum.status_kepemilikan' => 'required',

                'data_ketenagakerjaan.waktu_kerja' => 'required',
                'data_ketenagakerjaan.tingkat_upah_terendah' => 'required',
                'data_ketenagakerjaan.tingkat_upah_tertinggi' => 'required',
                'data_ketenagakerjaan.struktur_skala_upah' => 'required',

                'data_ketenagakerjaan.sistem_pembayaran_upah.harian' => 'required',
                'data_ketenagakerjaan.sistem_pembayaran_upah.borongan' => 'required',
                'data_ketenagakerjaan.sistem_pembayaran_upah.bulanan' => 'required',

                'bpjs_kesehatan.jumlah_tenaga_kerja_laki_laki' => 'required',
                'bpjs_kesehatan.jumlah_tenaga_kerja_perempuan' => 'required',

                'bpjs_ketenagakerjaan.no_bpjs_ketenagakerjaan_perusahaan' => 'required',

                'bpjs_ketenagakerjaan.program_jaminan_sosial.program_jkk.*' => 'required',
                'bpjs_ketenagakerjaan.program_jaminan_sosial.program_jht.*' => 'required',
                'bpjs_ketenagakerjaan.program_jaminan_sosial.program_jkm.*' => 'required',
                'bpjs_ketenagakerjaan.program_jaminan_sosial.program_jp.*' => 'required',
                'bpjs_ketenagakerjaan.program_jaminan_sosial.program_jkp.*' => 'required',

                'perangkat_hubungan_industri.perangkat_hubungan_kerja' => 'required',
                'perangkat_hubungan_industri.perjanjian_kerja' => 'required',
                'perangkat_hubungan_industri.lks_bipartite' => 'required',
                'perangkat_hubungan_industri.serikat_pekerja_buruh' => 'required',
                'perangkat_hubungan_industri.nama_serikat_pekerja_buruh' => 'required',

                'perangkat_hubungan_industri.kondisi_tenaga_kerja.sd.*' => 'required',
                'perangkat_hubungan_industri.kondisi_tenaga_kerja.sltp.*' => 'required',
                'perangkat_hubungan_industri.kondisi_tenaga_kerja.sma.*' => 'required',
                'perangkat_hubungan_industri.kondisi_tenaga_kerja.d1.*' => 'required',
                'perangkat_hubungan_industri.kondisi_tenaga_kerja.d2.*' => 'required',
                'perangkat_hubungan_industri.kondisi_tenaga_kerja.d3.*' => 'required',
                'perangkat_hubungan_industri.kondisi_tenaga_kerja.d4.*' => 'required',
                'perangkat_hubungan_industri.kondisi_tenaga_kerja.s1.*' => 'required',
                'perangkat_hubungan_industri.kondisi_tenaga_kerja.s2.*' => 'required',
                'perangkat_hubungan_industri.kondisi_tenaga_kerja.s3.*' => 'required',
                'perangkat_hubungan_industri.kondisi_tenaga_kerja.pkwt.*' => 'required',
                'perangkat_hubungan_industri.kondisi_tenaga_kerja.pkwtt.*' => 'required',
                'perangkat_hubungan_industri.kondisi_tenaga_kerja.penyandang_disabilitas.*' => 'required',

                'kasus_perselisihan.pemutusan_hubungan_kerja' => 'required',
                'kasus_perselisihan.serikat_pekerja_buruh' => 'required',
                'kasus_perselisihan.mogok_kerja' => 'required',
                'kasus_perselisihan.lock_out' => 'required',
            ]);


            DB::beginTransaction();

            try {
                
                $user = auth()->user();

                $dataUmum = $user->dataUmums()->create($request->input('data_umum'));

                $dataKetenagaKerjaan = $dataUmum->data_ketenagakerjaan()->create(Arr::except($request->input('data_ketenagakerjaan'), 'sistem_pembayaran_upah'));
                $sistemPembayaranUpah = $dataKetenagaKerjaan->sistem_pembayaran_upah()->create($request->input('data_ketenagakerjaan')['sistem_pembayaran_upah']);

                $fasilitasKeselamatanKesehatanKerja = $dataUmum->fasilitas_keselamatan_kesehatan_kerja()->create($request->input('fasilitas_keselamatan_kesehatan_kerja'));

                $fasilitasKesejahteraan = $dataUmum->fasilitas_kesejahteraan()->create($request->input('fasilitas_kesejahteraan'));
                
                $bpjsKesehatan = $dataUmum->bpjs_kesehatan()->create($request->input('bpjs_kesehatan'));

                $bpjsKetenagakerjaan = $dataUmum->bpjs_ketenagakerjaan()->create(Arr::except($request->input('bpjs_ketenagakerjaan'), 'program_jaminan_sosial'));
                
                $programJaminanSosial = $bpjsKetenagakerjaan->program_jaminan_sosial()->create($request->input('bpjs_ketenagakerjaan')['program_jaminan_sosial']);

                $perangkatHubunganIndustri = $dataUmum->perangkat_hubungan_industri()->create(Arr::except($request->input('perangkat_hubungan_industri'), 'kondisi_tenaga_kerja'));

                $kondisiTenagaKerja = $perangkatHubunganIndustri->kondisi_tenaga_kerja()->create($request->input('perangkat_hubungan_industri')['kondisi_tenaga_kerja']);

                $pelaksanaanCuti = $dataUmum->pelaksanaan_cuti()->create($request->input('pelaksanaan_cuti'));

                $kasusPerselisihan = $dataUmum->kasus_perselisihan()->create($request->input('kasus_perselisihan'));
                
                DB::commit();
                
                session()->forget('data_input');
                
                return back()->with(['status'=>'success', 'message' => 'Sukes mengirimkan data!']);
            } catch(\Exception $e) {
                DB::rollback();

                throw $e;

                return back()->with(['status'=>'failed', 'message' => 'Gagal mengirimkan data!'])->withInput();
            }

        }
    }
}
