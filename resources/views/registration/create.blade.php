@extends ('layouts.layout')

@section('title')
  <title>Registrar</title>
@endsection

@section('content')
  <h1>Registre-se</h1>

  <form method="POST" action='/register'>
    {{csrf_field()}}

    <div class="form-group">Nome:<br>
      <input class="form-control" type="text" name="name" id="name" required>
      <br>
    </div>

    <div class="form-group">Email:<br>
      <input class="form-control" type="email" name="email" id="email" required>
      <br>
    </div>

    <div class="form-group">Senha:<br>
      <input class="form-control" type="password" name="password" id="password" required>
      <br>
    </div>

    <div class="form-group">Confirmar senha:<br>
      <input class="form-control" type="password" name="password_confirmation" id="password_confirmation" required>
      <br>
    </div>

    <div class="form-group">
      <input class="btn-primary" type="submit" value="Registrar">
    </div>

    @include('partials.errors')


  </form>

@endsection
