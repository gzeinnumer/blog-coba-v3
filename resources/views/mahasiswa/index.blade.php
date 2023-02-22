@extends('layouts.main')

@section('name')


   <table class="table">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">No Bp</th>
          <th scope="col">Nama</th>
          <th scope="col">Jurusan</th>
          <th scope="col">Nilai</th>
          <th scope="col">Detail</th>
        </tr>
      </thead>
      <tbody>
         <?php $i = 0 ?>
         @foreach ($mahasiswa as $item)
         <?php $i++ ?>
        <tr>
          <th scope="row">{{ $i}}</th>
          <td> {{ $item['no_bp'] }}</a></td>
          <td> {{ $item['nama'] }}</td>
          <td>{{ $item['jurusan'] }}</td>
          <td>{{ $item['nilai'] }}</td>
          <td><a href="/mahasiswa/single-data/{{ $item['no_bp'] }}">Detail</a></td>
        </tr>
      @endforeach
      </tbody>
    </table>
@endsection