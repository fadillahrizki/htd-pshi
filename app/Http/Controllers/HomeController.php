<?php

namespace App\Http\Controllers;

use App\Models\DataUmum;
use App\Models\KasusPerselisihan;
use App\Models\PerangkatHubunganIndustri;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $userCount = User::where('role', 'Perusahaan')->count();
        $perusahaanCount = DataUmum::count();
        $perusahaanVerifiedCount = DataUmum::where('status', 'Verified')->count();
        $perusahaanRejectedCount = DataUmum::where('status', 'Rejected')->count();

        $perjanjianKerja = PerangkatHubunganIndustri::where('perjanjian_kerja', 'Ada')->whereHas('dataUmum', function($query){
            return $query->where('status', 'Verified');
        })->count();

        $pemutusanHubunganKerja = KasusPerselisihan::whereHas('dataUmum', function($query){
            return $query->where('status', 'Verified');
        })->sum('pemutusan_hubungan_kerja');

        $mogokKerja = KasusPerselisihan::whereHas('dataUmum', function($query){
            return $query->where('status', 'Verified');
        })->sum('mogok_kerja');

        $totalPemutusanHubunganKerja = KasusPerselisihan::sum('pemutusan_hubungan_kerja');

        $data = [
            'userCount'=>$userCount, 
            'perusahaanCount' => $perusahaanCount, 
            'perusahaanVerifiedCount' => $perusahaanVerifiedCount, 
            'perusahaanRejectedCount'=>$perusahaanRejectedCount,
            'perjanjianKerja'=>$perjanjianKerja,
            'pemutusanHubunganKerja'=>$pemutusanHubunganKerja,
            'mogokKerja'=>$mogokKerja,
            'totalPemutusanHubunganKerja'=>$totalPemutusanHubunganKerja,
        ];

        return view('home', $data);
    }

    public function logout()
    {
        Auth::logout();
        return view('auth.logout');
    }
}
