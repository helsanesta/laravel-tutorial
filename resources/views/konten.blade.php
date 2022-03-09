@extends('layouts.template')

@section('container')
    <h3 class="mb-5">{{ $article->title }}</h3>
    {{-- <h6>By: {{ $article->author }}</h6> --}}
    <p>By. {{ $article->author }} in <a href="/categories/{{ $article->category->slug }}">{{ $article->category->name }}</a></p>
   {!! $article->body !!}

   <a href="/article">Back to posts</a>
@endsection
