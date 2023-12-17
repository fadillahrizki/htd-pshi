<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class PerusahaanController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function dataInput(Request $request) {

        if($request->isMethod('post')) {
            
            session(['data_input' => $request->except(['_token', 'type'])]);

            if($request->input('type') == 'save') {
                return back()->with(['status'=>'success', 'message' => 'Sukes menyimpan data!']);
            } else if($request->input('type') == 'submit') {

                DB::beginTransaction();
            
                try {
                    
                    $user = auth()->user();

                    $dataUmum = $user->dataUmums()->create($request->input('data_umum'));

                    $dataKetenagaKerjaan = $dataUmum->dataKetenagaKerjaan()->create(Arr::except($request->input('data_ketenagakerjaan'), 'sistem_pembayaran_upah'));
                    $sistemPembayaranUpah = $dataKetenagaKerjaan->sistemPembayaranUpah()->create($request->input('data_ketenagakerjaan')['sistem_pembayaran_upah']);
                    
                    $bpjsKesehatan = $dataUmum->bpjsKesehatan()->create($request->input('bpjs_kesehatan'));

                    $bpjsKetenagakerjaan = $dataUmum->bpjsKetenagakerjaan()->create(Arr::except($request->input('bpjs_ketenagakerjaan'), 'program_jaminan_sosial'));

                    $dataProgramJaminanSosial = collect($request->input('bpjs_ketenagakerjaan')['program_jaminan_sosial']);

                    $dataProgramJaminanSosial->transform(function($data){
                        return json_encode($data);
                    });
                    
                    $programJaminanSosial = $bpjsKetenagakerjaan->programJaminanSosial()->create($dataProgramJaminanSosial->toArray());


                    $perangkatHubunganIndustri = $dataUmum->perangkatHubunganIndustri()->create(Arr::except($request->input('perangkat_hubungan_industri'), 'kondisi_tenaga_kerja'));

                    $dataKondisiTenagaKerja = collect($request->input('perangkat_hubungan_industri')['kondisi_tenaga_kerja']);

                    $dataKondisiTenagaKerja->transform(function($data){
                        return json_encode($data);
                    });

                    $kondisiTenagaKerja = $perangkatHubunganIndustri->kondisiTenagaKerja()->create($dataKondisiTenagaKerja->toArray());

                    
                    $pelaksanaanCuti = $dataUmum->pelaksanaanCuti()->create($request->input('pelaksanaan_cuti'));

                    $kasusPerselisihan = $dataUmum->kasusPerselisihan()->create($request->input('kasus_perselisihan'));
                    
                    DB::commit();
                    
                    session()->forget('data_input');
                    
                    return back()->with(['status'=>'success', 'message' => 'Sukes mengirimkan data!']);
                } catch(\Exception $e) {
                    DB::rollback();

                    // throw $e;

                    return back()->with(['status'=>'failed', 'message' => 'Gagal mengirimkan data!'])->withInput();
                }

            }

        }

        return view('perusahaan.data_input');
    }
}
