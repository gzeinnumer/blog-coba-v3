@extends('layouts.main')

@section('name')
    
   
    <h3>Nama : {{ $name }}</h3>
    <h3>No telp : <?= $no_tlp ?></h3>
    <h3>Alamat : <?= $alamat ?></h3>
    @if ($jekel ==1)

    <h3>Laki laki</h3>
    @else
    <h3>Perempuan</h3>
    @endif
    <img src="images/<?= $image ?>" class="rounded" width="80" height="70" alt="">
    @endsection
