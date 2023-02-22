<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index()
    {
        return view('mahasiswa.index',['title' => 'Mahasiswa', 'active' => 'mahasiswa','mahasiswa' =>Mahasiswa::all()]);

    }

    public function single($slug)
    {
       
    return view('mahasiswa.single-data',['title'=> 'Detail Data Mahasiswa',
    'active' => 'mahasiswa', 'single_data' => Mahasiswa::find($slug)]);
    }
}
