<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {
        $var_nama = "mariana";
        return view('HalamanDepan.beranda',compact('var_nama'));
    }
}
