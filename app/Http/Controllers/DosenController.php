<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index()
    {
        return view('dosen.index',[
            'title'=> 'Dosen',
            'active' => 'dosen', 
            'dosen' =>Dosen::all()]);

    }

    public function single(Dosen $dosen)
    {
        return view('dosen.detail',[
            'title'=> 'Detail Dosen',
            'active' => 'dosen', 
            'single_data' => $dosen
         ]);
    }
}
