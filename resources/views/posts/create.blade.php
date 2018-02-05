@extends('layouts.layout')

@section('title')
  <title>Criação de Post</title>
@endsection

@section('content')

    <h1> Crie um post! </h1>

    <hr>

    <form method="POST" action="/">

      {{ csrf_field() }}

      <div class="form-group">
        Título:<br>
        <input class="form-control" type="text" name="title" id="title" required>
        <br>
      </div>

      <div class="form-group">
        Texto:<br>
        <textarea class="form-control" id="body" name="body" value="" required></textarea>
        <br>
      </div>

      <div class="form-group">
        <input class="btn-primary" type="submit" value="Enviar">
      </div>

      @include('partials.errors')

    </form>


@endsection
