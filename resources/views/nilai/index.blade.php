@extends('layouts.main')

@section('name')
    <h1 class="text-center">Halaman Daftar Nilai Mahasiswa</h1>
   
        <table class="table table bordered">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Bp </th>
                    <th>Nilai</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($nilai as $n)
                <tr class="">
                        
                    <td>{{ $n['nama'] }}</td>
                    <td>{{ $n['nobp'] }}</td>
                    <td>{{ $n['nilai'] }}</td>
                    <td>
                        <a href="/nilai/detail/{{ $n['nobp'] }}">
                           Detail
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        
@endsection