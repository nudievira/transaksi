<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PesertaController extends Controller
{
    public function index()
    {
        $data_peserta = \App\peserta::all();
        return view('peserta.index',['data_peserta' => $data_peserta]);
    }
}
