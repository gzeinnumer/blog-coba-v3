@extends('layouts.main')
@section('name')
<ul>
    @foreach ($categories as $item)
<li><a href="/posts/category/{{ $item->slug }}">
    <h3>{{ $item->name }}</h3></li></a>
    @endforeach 
</ul>

@endsection