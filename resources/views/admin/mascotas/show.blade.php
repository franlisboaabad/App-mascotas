@extends('adminlte::page')

@section('title', 'Mascota')

@section('content_header')
    <h1>Ver Mascota</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-5">
                    <h1>Nombre de Mascota: {{ $mascota->nombre }}</h1>
                    <p>Especie: {{ $mascota->especie }}</p>
                    <p>Raza: {{ $mascota->raza }}</p>
                    <p>Edad: {{ $mascota->edad }}</p>
                    <p>Descripcion: {{ $mascota->descripcion }}</p>

                </div>
                <div class="col-md-7">
                    <img src="{{ $mascota->get_imagen }}" alt="" class="img-fluid" width="300">
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    {{-- <script> console.log('Hi!'); </script> --}}
@stop
