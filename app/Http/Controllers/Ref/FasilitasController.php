<?php

namespace App\Http\Controllers\Ref;

use App\Http\Controllers\Controller;
use App\Models\RefFasilitas;
use Illuminate\Http\Request;

class FasilitasController extends Controller
{
    public function __construct(private RefFasilitas $model)
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
        $model = $this->model->get();

        return view('admin.ref.fasilitas.index', compact('model'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.ref.fasilitas.create');
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
        $request->validate([
            'nama' => 'required',
            'kategori' => 'required'
        ]);

        $this->model->create([
            'nama' => $request->nama,
            'kategori_id' => $request->kategori
        ]);

        return redirect()->route('admin.fasilitas.index')->with('message', 'Data berhasil di simpan');
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
        $model = $this->model->where('id', $id)->firstOrFail();
        return view('admin.ref.fasilitas.edit', compact('model'));
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
        $request->validate([
            'nama' => 'required',
            'kategori' => 'required'
        ]);

        $this->model->where('id', $id)->firstOrFail()->update([
            'nama' => $request->nama,
            'kategori_id' => $request->kategori
        ]);

        return redirect()->route('admin.fasilitas.index')->with('message', 'Data berhasil di update');
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

        return redirect()->route('admin.fasilitas.index')->with('message', 'Data berhasil di hapus');
    }
}
