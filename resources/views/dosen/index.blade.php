@extends('layouts.main')

@section('name')
   <table class="table">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Jurusan</th>
          <th scope="col">Nidn</th>
          <th scope="col">Nip</th>
          <th scope="col">Nama</th>
          <th scope="col">Detail</th>
        </tr>
      </thead>
      <tbody>
         <?php $i = 0 ?>
         @foreach ($dosen as $item)
         <?php $i++ ?>
        <tr>
          <th scope="row">{{ $i}}</th>
          <td><a href="/dosen/jurusan/{{ $item->jurusan->slug }}">
            {{ $item->jurusan->name }}</a> </td>
          <td> {{ $item->nidn }}</td>
          <td> {{ $item->nip }}</td>
          <td>{{ $item->nama }}</td>
          <td><a href="/dosen/single-data/{{ $item->nip }}">Detail</a></td>
        </tr>
      @endforeach
      </tbody>
    </table>
  
@endsection