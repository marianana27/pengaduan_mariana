<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengaduan;

class PengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengaduan = Pengaduan::all();
        return view('pengaduan.index', compact('pengaduan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Pengaduan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'tgl_pengaduan' => 'required',
            'nik' => 'required',
            'isi_laporan' => 'required',
            'foto' => 'required',
            'status' => 'required'
        ]);
 
        // Pengaduan::create($request->all());
        Pengaduan::create([
            'tgl_pengaduan' => $request->tgl_pengaduan,
            'nik' => $request->nik,
            'isi_laporan' => $request->isi_laporan,
            'foto' => $request->foto,
            'status' => $request->status  
        ]);

        // return redirect()->route('Pengaduan.index');
        return redirect('/pengaduan');
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
    public function edit($id_pengaduan)
    {
        $pengaduan = Pengaduan::find($id_pengaduan);
        return view('pengaduan.edit', compact('pengaduan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id_pengaduan,Request $request)
    {
        $this->validate($request,[
            'tgl_pengaduan' => 'required',
            'nik' => 'required',
            'isi_laporan' => 'required',
            'foto' => 'required',
            'status' => 'required',
        ]);

        $pengaduan = Pengaduan::find($id_pengaduan);
        $pengaduan->tgl_pengaduan = $request->tgl_pengaduan;
        $pengaduan->nik = $request->nik;
        $pengaduan->isi_laporan = $request->isi_laporan;
        $pengaduan->foto = $request->foto;
        $pengaduan->status = $request->status;
        $pengaduan->save();
        return redirect('/pengaduan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        pengaduan::where('id_pengaduan',$id)->delete();
        return redirect('/pengaduan');
    }
}
