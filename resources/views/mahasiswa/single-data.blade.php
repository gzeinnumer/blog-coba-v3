@extends('layouts.main')
@section('name')
  <article>
    <h5>Detail Mahasiswa</h5>
    <h4>
       No BP: {{ $single_data['no_bp'] }}
    </h4>
    <h2>
       Nama: {{ $single_data['nama'] }}
    </h2>
    <p>
      Jurusan:  {{ $single_data['jurusan'] }}
    </p>
    <p>
       Prodi: {{ $single_data['prodi'] }}
    </p>
    <p>
       Email: {{ $single_data['email'] }}
    </p>
    <p>
      Telepon  {{ $single_data['no_telp'] }}
    </p>
    <p>
      Nilai  {{ $single_data['nilai'] }}
    </p>
  </article>
  <a href="/mahasiswa">back to data mahasiswa</a>
@endsection
