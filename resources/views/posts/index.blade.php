@extends('layouts.main')
@section('name')
   @foreach ($posts as $item)
       <article class="mb-5 border-bottom pb-3">
        <h2><a class="text-decoration-none" href="/posts/single-post/{{ $item->slug }}">
            {{ $item->title }}</a>
        </h2>
        <h3>oleh : <a href="/posts/author/{{ $item->author->username }}" class="text-decoration-none"> {{ $item->author->name }}</a> in  <a href="/posts/category/{{ $item->category->slug }}"></a>
            {{ $item->category->name }}</h3>
       
        <p>
            {{ $item->excerpt }}
        </p>
        <a href="/posts/single-post/{{ $item->slug }}" class="text-decoration-none">Read more..</a>
       </article>
   @endforeach 
@endsection