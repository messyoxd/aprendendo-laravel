@extends('layouts.layout')

@section('title')
  <title>{{$post->title}}</title>
@endsection

@section('content')
  <div class="blog-post">

    <h2 class="blog-post-title">{{$post->title}}</h2>

    <p class="blog-post-meta">

        {{ $escritor->name }} em

        {{ $post->created_at->toFormattedDateString() }}

    </p>

    <hr>

    <p>

      {{$post->body}}

    </p>

  </div>
@endsection
