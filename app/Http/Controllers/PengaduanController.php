<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class PengaduanController extends Controller
{
    public function __construct(private Ticket $model)
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
        if(auth()->user()->role == 'Perusahaan')
        {
            $datas = $this->model->where('user_id', auth()->id())->orderBy('id','desc')->get();
        }
        else
        {
            $datas = $this->model->orderBy('id','desc')->get();
        }

        return view('tickets.index',compact('datas'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $ticket = null;
        return view('tickets.form', compact("ticket"));
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
            'user_id' => auth()->id(),
            'subject' => $request->subject,
            'description' => $request->description,
            'priority' => $request->priority,
            'status' => 'OPEN',
        ]);

        return redirect()->route('tickets.index')->with('message', 'Data berhasil di tambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, Request $request)
    {
        //
        $ticket = $this->model->where('id', $id)->first();

        return view('tickets.show', compact('ticket'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function reply($id, Request $request)
    {
        //
        $ticket = $this->model->where('id', $id)->first();
        $ticket->replies()->create([
            'author_id' => auth()->id(),
            'description' => $request->description
        ]);

        return redirect()->route('tickets.show')->with('message', 'Komentar berhasil di post');
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
        return redirect()->route('tickets.index')->with('message', 'Data berhasil di hapus');
    }
}
