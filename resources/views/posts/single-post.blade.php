@extends('layouts.main')
@section('name')
  <article>
    <h1>
        {{ $single_posts->title }}
    </h1>
    <h3>
       Oleh: <a href="#" class="text-decoration-none">{{ $single_posts->user->name }}</a>  in <a href="/posts/category/{{ $single_posts->category->slug }}" class="text-decoration-none">
         {{ $single_posts->category->name }}</a>
    </h3>
    <p>
        {{ $single_posts->body }}
    </p>
  </article>
  <a href="/posts">back to post</a>
@endsection
