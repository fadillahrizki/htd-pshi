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
        
        $verifiedKasusPerselisihan = KasusPerselisihan::whereHas('dataUmum', function($query){
            return $query->where('status', 'Verified');
        });

        $perjanjianKerja = PerangkatHubunganIndustri::whereHas('dataUmum', function($query){
            return $query->where('status', 'Verified');
        })->where('perjanjian_kerja', 'Ada')->count();

        $pemutusanHubunganKerja = $verifiedKasusPerselisihan->sum('pemutusan_hubungan_kerja');

        $mogokKerja = $verifiedKasusPerselisihan->sum('mogok_kerja');

        $totalSerikatKerjaBuruh = KasusPerselisihan::sum('serikat_pekerja_buruh');

        $totalPemutusanHubunganKerja = KasusPerselisihan::sum('pemutusan_hubungan_kerja');

        $totalMogokKerja = KasusPerselisihan::sum('mogok_kerja');

        $totalLockOut = KasusPerselisihan::sum('lock_out');

        $data = [
            'userCount'=>$userCount, 
            'perusahaanCount' => $perusahaanCount, 
            'perusahaanVerifiedCount' => $perusahaanVerifiedCount, 
            'perusahaanRejectedCount'=>$perusahaanRejectedCount,
            'perjanjianKerja'=>$perjanjianKerja,
            'pemutusanHubunganKerja'=>$pemutusanHubunganKerja,
            'mogokKerja'=>$mogokKerja,
            'totalPemutusanHubunganKerja'=>$totalPemutusanHubunganKerja,
            'totalSerikatKerjaBuruh'=>$totalSerikatKerjaBuruh,
            'totalMogokKerja'=>$totalMogokKerja,
            'totalLockOut'=>$totalLockOut,
        ];

        return view('home', $data);
    }

    public function logout()
    {
        Auth::logout();
        return view('auth.logout');
    }

    public function profile(Request $request)
    {
        $user = auth()->user();
        if($request->isMethod('POST'))
        {
            $user->update([
                'name' => $request->name,
                'email' => $request->email,
            ]);

            if($request->password)
            {
                $user->update([
                    'password' => bcrypt($request->password)
                ]);
            }

            return redirect()->route('profile')->with('message','Profile berhasil di perbaharui');
        }
        return view('profile', compact('user'));
    }
}
