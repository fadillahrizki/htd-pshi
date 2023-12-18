<?php

namespace App\Http\Controllers;

use App\Models\DataUmum;
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
        return view('perusahaan.form');
    }

    function store(Request $request) {
        session(['data_input' => $request->except(['_token', 'type'])]);

        if($request->input('type') == 'save') {
            return back()->with(['status'=>'success', 'message' => 'Sukes menyimpan data!']);
        } else if($request->input('type') == 'submit') {

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
