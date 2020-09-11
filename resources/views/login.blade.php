@extends('layouts.app')
@section('content')
<div class="container">
    <form method="POST" action="/welcome">
        @csrf()
        <div class="form-group">
            <label for="email">Correo electronico</label>
            <input type="email" class="form-control" id="email" aria-describedby="email" name="email">
        </div>
        <div class="form-group">
            <label for="password">Contraseña</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>
@endsection
