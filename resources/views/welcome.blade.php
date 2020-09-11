@extends('layouts.app')
@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Hola
            @if($usuario['email'] === 'frank@frank.com')
                Frank Leal
            @else
                {{ $usuario['email'] }}
            @endif
        </div>
    </div>
</div>
@endsection