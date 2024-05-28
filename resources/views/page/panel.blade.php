@extends('layouts.page')
@section('titulo', 'Mi Panel')
@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h2>Bienvenido</h2> <br>
                        <p>Nombres: {{ Auth::user()->name }} </p>
                        <p>Email: {{ Auth::user()->email }} </p>
                        <a href="{{ route('logout') }}" class="btn btn-danger btn-xs">Cerrar session</a>
                    </div>
                </div>
            </div>
            <div class="col-md-12 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h2>Casos Reportados</h2>
                        <hr>


                        @if ($casos_reportados->isNotEmpty())
                            @foreach ($casos_reportados as $caso)
                                <p>
                                    {{ $caso->id }} - {{ $caso->tipo_animal }} - {{ $caso->descripcion_del_caso }} -
                                    Fecha: {{ $caso->created_at }}
                                </p>
                            @endforeach
                        @else
                            <p>No cuenta con casos reportados.</p>
                        @endif


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('css')
    <style>
        .card {
            border: 1px solid #128ced !important;
        }
    </style>
@endsection
