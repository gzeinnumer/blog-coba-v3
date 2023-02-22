<?php
namespace App\Models;
class Nilai
{
    public static $nilai = 
    [
        [
            'nobp' => '221109',
            'nama' => 'Rahmi',
            'nilai' => '90',
        ],
        [
            'nobp' => '221109',
            'nama' => 'Rahmi',
            'nilai' => '80',
        ],
        [
            'nobp' => '221110',
            'nama' => 'Ema',
            'nilai' => '75',
        ],
        [
            'nobp' => '221110',
            'nama' => 'Ema',
            'nilai' => '85',
        ],
    ];

    public static function all()
    {
        return collect(self::$nilai);
    }
    public static function find($slug)
    {
        $nilai = static::all();
        return $nilai->firstWhere('slug',$slug);
    }
    public static function detail_nilai($nobp)
    {
        $nilai = static::all();
        $daftar_bp = $nilai->where('nobp',$nobp);
        return $daftar_bp;
    }

    public static function detail($nobp)
    {
        $nilai = static::all();
        $filtered = $nilai->where('nobp',$nobp);
        $rata = $filtered->avg('nilai');
        return ['filter'=>$filtered,'rata'=>$rata];
    }
}
?>