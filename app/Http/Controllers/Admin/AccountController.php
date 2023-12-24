<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function __construct(private User $model)
    {
        
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // if($request->isMethod('post')) {
        //     $user = User::find($request->input('id'));

        //     if($request->input('type') == 'verify') {
        //         $user->status = 'Verified';
        //     } else if($request->input('type') == 'reject') {
        //         $user->status = 'Rejected';
        //     }

        //     $user->save();

        //     return back()->with(['message'=> 'Account Updated!']);
        // }

        $accounts = $this->model->where('role', 'Perusahaan')->get();

        return view('admin.accounts.index', compact('accounts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $account = null;
        return view('admin.accounts.form', compact('account'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->model->create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'status' => 'Verified'
        ]);

        return redirect()->route('admin.accounts.index')->with('message', 'Data berhasil di tambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $account = $this->model->where('id', $id)->first();
        return view('admin.accounts.form', compact('account'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $account = $this->model->where('id', $id)->first();
        $account->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password ? bcrypt($request->password) : $account->password,
        ]);

        return redirect()->route('admin.accounts.index')->with('message', 'Data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $this->model->where('id', $id)->delete();
        return redirect()->route('admin.accounts.index')->with('message', 'Data berhasil di hapus');
    }
}
