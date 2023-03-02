<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    // protected $timestamp = 'false';
    public $timestamp = false;
    protected $table = 'pengaduans';
    protected $fillable = ['tgl_pengaduan','nik','isi_laporan','foto','status'];
    protected $primaryKey = 'id_pengaduan';
    
}
