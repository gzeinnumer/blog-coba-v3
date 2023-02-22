@extends('layouts.main')
@section('name')
  <article>
    <h1>Detail Dosen</h1>
    <h4>
       Nidn: {{ $single_data->nidn }}
    </h4>
    <h4>
       Nip:  {{ $single_data->nip }}
    </h4>
    <p>
       Nama: {{ $single_data->nama }}
    </p>
    <p>
      Jurusan:  <a href="/dosen/jurusan/{{ $single_data->jurusan->slug }}"> {{ $single_data->jurusan->name }}</a>
   </p>
    <p>
      No Telpon:  {{ $single_data->no_tlp }}
    </p>
    <p>
      Alamat:  {{ $single_data->alamat }}
    </p>
  </article>
  <a href="/dosen">back to data dosen</a>
@endsection
