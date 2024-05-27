@extends('adminlte::page')

@section('title', 'Mascota')

@section('content_header')
    <h1>Ver Mascota</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <h1>Nombre de Mascota: {{ $mascota->nombre }}</h1>
            <p>Especie: {{ $mascota->especie }}</p>
            <p>Raza: {{ $mascota->raza }}</p>
            <p>Edad: {{ $mascota->edad }}</p>
            <p>Descripcion: {{ $mascota->descripcion }}</p>
        </div>
    </div>
@stop

@section('css')
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    {{-- <script> console.log('Hi!'); </script> --}}
@stop
