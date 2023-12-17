<?php

namespace App\Http\Controllers;

use App\Models\DataUmum;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function accountVerification(Request $request) {

        if($request->isMethod('post')) {
            $user = User::find($request->input('id'));

            if($request->input('type') == 'verify') {
                $user->status = 'Verified';
            } else if($request->input('type') == 'reject') {
                $user->status = 'Rejected';
            }

            $user->save();

            return back()->with(['message'=> 'Account Updated!']);
        }

        $accounts = User::where('role', 'Perusahaan')->get();

        return view('admin.account_verification', ['accounts'=>$accounts]);
    }

    public function dataVerification(Request $request) {
        if($request->isMethod('post')) {
            $dataUmum = DataUmum::find($request->input('id'));

            if($request->input('type') == 'verify') {
                $dataUmum->status = 'Verified';
            } else if($request->input('type') == 'reject') {
                $dataUmum->status = 'Rejected';
            }

            $dataUmum->save();

            return back()->with(['message'=> 'Account Updated!']);
        }

        $data = DataUmum::get();

        return view('admin.data_verification', ['data' => $data]);
    }
}
