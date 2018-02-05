@extends('layouts.layout')

@section('title')
  <title>Login</title>
@endsection

@section('content')
  <h1>Faça o Login</h1>

  <div class="col-md-4">

    <form method="POST" action='/login'>

      {{csrf_field()}}

      <div class="form-group">Email:<br>
        <input class="form-control" type="email" name="email" id="email" required>
        <br>
      </div>

      <div class="form-group">Senha:<br>
        <input class="form-control" type="password" name="password" id="password" required>
        <br>
      </div>

      <div class="form-group">
        <input class="btn-primary" type="submit" value="Entrar">
      </div>

    </form>

  </div>

  <div class="col-md-8">
      @include('partials.errors')
  </div>

@endsection
