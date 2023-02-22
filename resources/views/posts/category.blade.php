@extends('layouts.main')
@section('name')
@foreach ($posts as $item)
<article class="mb-5 border-bottom pb-3">
 <h2><a href="/posts/single-post/{{ $item->slug }}" class="text-decoration-none">
     {{ $item->title }}</a>
 </h2>
 <h3>oleh :{{ $item->author->name }} in {{ $item->category->name }}</h3>

 <p>
     {{ $item->excerpt }}
 </p>
 <a href="/posts/single-post/{{ $item->slug }}" class="text-decoration-none">Read more..</a>

</article>
@endforeach 
@endsection