<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tanggapan extends Model
{
    public $timestamp = false;
    protected $table = 'tanggapans';
    protected $fillable = ['id_tanggapan','tgl_tanggapan','tanggapan','nik',];
    protected $primaryKey = 'id_tanggapan';

    public function pengaduan()
    {
        return $this->hasOne('App\Pengaduan','isi_laporan');
    }
}
