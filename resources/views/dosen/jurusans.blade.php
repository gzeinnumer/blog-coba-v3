@extends('layouts.main')
@section('name')
<ul>
    @foreach ($jurusans as $item)
<li><a href="/dosen/jurusan/{{ $item->slug }}">
    <h3>{{ $item->name }}</h3></li></a>
    @endforeach 
</ul>

@endsection