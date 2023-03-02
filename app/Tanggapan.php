<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tanggapan extends Model
{
    protected $timestamp = 'false';
    protected $table = 'tanggapan';
    protected $fillable = ['id_tanggapan','id_pengaduan','tgl_tanggapan','tanggapan','nik'];
}
