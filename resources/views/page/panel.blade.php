@extends('layouts.page')
@section('titulo','Mi Panel')
@section('contenido')
<div class="container">
    <h2>Bienvenido</h2> <br>
    <p>Nombres: {{ Auth::user()->name }} </p>
    <p>Email: {{ Auth::user()->email }} </p>
    <a href="{{ route('logout') }}">Cerrar session</a>
</div>
@endsection
