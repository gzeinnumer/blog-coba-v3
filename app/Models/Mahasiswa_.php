<?php

namespace App\Models;

class Mahasiswa_
{
    public static $data_mahasiswa = [
        [ 'no_bp' => '22110801',
         'nama' => 'Puji Astuti',
         'jurusan' => 'S1 Psikolog',
         'prodi' => 'Psikolog',
         'email' => 'puji@astuti.com',
         'no_telp' => '082134567910',
         'nilai' => 80
      ],
      [ 'no_bp' => '22120802',
      'nama' => 'Anji Wibowo',
      'jurusan' => 'S1 Kedokteran',
      'prodi' => 'Fakultas Kedokteran',
      'email' => 'anji@email.com',
      'no_telp' => '081234567923',
      'nilai' => 80
   ],
   [ 'no_bp' => '22130803',
   'nama' => 'Rendi Kurnia',
   'jurusan' => 'S1 Teknik Informatika',
   'prodi' => 'Teknologi Informasi',
   'email' => 'rendi@gmail.com',
   'no_telp' => '081345672104',
   'nilai' => 85
   ],
   [ 'no_bp' => '22120804',
   'nama' => 'Feby Putri',
   'jurusan' => 'S1 Keperawatan',
   'prodi' => 'Fakultas Kedokteran',
   'email' => 'feby@email.com',
   'no_telp' => '08114567243',
   'nilai' => 90
   ],
   [ 'no_bp' => '22110805',
   'nama' => 'Reno',
   'jurusan' => 'S1 Teknik Mesin',
   'prodi' => 'Teknik Mesin',
   'email' => 'reno@email.com',
   'no_telp' => '082134567910',
   'nilai' => 80
   ],
   [ 'no_bp' => '22150806',
   'nama' => 'Kesuma Cahya',
   'jurusan' => 'S1 Ilmu Tanah',
   'prodi' => 'Ilmu Tanah',
   'email' => 'kesuma@email.com',
   'no_telp' => '085834567343',
   'nilai' => 80
   ],
   [ 'no_bp' => '22120807',
   'nama' => 'Hidayat',
   'jurusan' => 'S1 Arkeolog',
   'prodi' => 'Arkeolog',
   'email' => 'dayat@gmail.com',
   'no_telp' => '085834567934',
   'nilai' => 80
   ],
   [ 'no_bp' => '22110808',
   'nama' => 'Keisya',
   'jurusan' => 'S1 Sastra Inggris',
   'prodi' => 'Fakultas Bahasa',
   'email' => 'key@email.com',
   'no_telp' => '082234567956',
   'nilai' => 80
   ],
   [ 'no_bp' => '22110808',
   'nama' => 'Keisya',
   'jurusan' => 'S1 Sastra Inggris',
   'prodi' => 'Fakultas Bahasa',
   'email' => 'key@email.com',
   'no_telp' => '082234567956',
   'nilai' => 80
   ],
      ];

      public static function all()
      {
          return collect(self:: $data_mahasiswa);
      }

      public static function find($slug)
      {
          $mahasiswa = static::all();
          return $mahasiswa->firstWhere('no_bp', $slug);
      }

   
     
  
   
}