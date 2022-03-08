@extends('layouts.template')

@section('container')
<article class="mb-5">
    <h3>{{ $article->title }}                   
    </h3>
    <h6>By: {{ $article->author }}</h6>
   {!! $article->body !!}
</article>
@endsection
