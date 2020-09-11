@extends('layouts.app')
@section('content')
<div class="container">
    <form method="POST" action="/contact">
        @csrf()
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" aria-describedby="nombre" name="nombre">
        </div>
        <div class="form-group">
            <label for="email">Correo</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="form-group">
            <label for="topic">Asunto</label>
            <input type="topic" class="form-control" id="topic" name="topic">
        </div>
        <div class="form-group">
            <label for="description">Descripción</label>
            <input type="description" class="form-control" id="description" name="description">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>
@endsection