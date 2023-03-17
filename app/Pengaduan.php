<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    // protected $timestamp = 'false';
    public $timestamp = false;
    protected $table = 'pengaduan';
    protected $fillable = ['tgl_pengaduan','nik','isi_laporan','foto','status'];
    protected $primaryKey = 'id_pengaduan';

    public function tanggapan()
    {
        return $this->belongsTo('App\Tanggapan','id_tanggapan','id_tanggapan');
    }
    public function cetakform(){
        return view('pengaduan.cetak');
    }
    public function cetak_pdf($id){
        $pengaduan= pengaduan::find($id);
        return view('pengaduan.cetak-pengaduan-pertanggal', compact('pengaduan'));
    }
    
}
