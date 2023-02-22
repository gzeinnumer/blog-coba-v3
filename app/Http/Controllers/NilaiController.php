<?php
namespace App\Http\Controllers;

use App\Models\Nilai;
use App\Http\Controllers\Controller;

class NilaiController extends Controller
{
    public function index()
    {
        return view('nilai.index', [
            'title' => 'Nilai',
            'active' => 'nilai',
            'nilai' => Nilai::all()
        ]);
    }

    public function single($nobp)
    {
        return view('nilai.single-nilai', [
            'title' => 'Single Nilai',
            'active' => 'nilai',
            'single_nilai' => Nilai::detail_nilai($nobp)
        ]);
    }

    public function rata_mhs($nobp)
    {
        return view('nilai.detail',[
            'title' => 'Nilai Rata-rata',
            'active' => 'rata-rata',
            'detail_nobp' => Nilai::detail($nobp)
        ]);
    }
}

?>