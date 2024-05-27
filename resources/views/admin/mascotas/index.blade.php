@extends('adminlte::page')

@section('title', 'Mascotas')

@section('content_header')
    <h1>Lista de Mascotas</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <a href="{{ route('mascotas.create') }}">Nueva mascota</a>

            <div class="table-mascotas mt-5">
                <table class="table">
                    <thead>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Especie</th>
                        <th>Raza</th>
                        <th>Edad</th>
                        <th>Descripcion</th>
                        <th>Estado</th>
                        <th>Opciones</th>
                    </thead>

                    <tbody>
                        @foreach ($mascotas as $mascota)
                            <tr>
                                <td>{{ $mascota->id }}</td>
                                <td>{{ $mascota->nombre }}</td>
                                <td>{{ $mascota->especie }}</td>
                                <td>{{ $mascota->raza }}</td>
                                <td>{{ $mascota->edad }}</td>
                                <td>{{ $mascota->descripcion }}</td>
                                <td>
                                    @if ($mascota->estado)
                                        <span class="badge badge-success">Activo</span>
                                    @else
                                    <span class="badge badge-danger">Inactivo</span>
                                    @endif
                                </td>
                                <td>
                                    <form action="{{ route('mascotas.destroy', $mascota) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('mascotas.show',$mascota) }}" class="btn btn-warning btn-xs">Ver</a>
                                        <a href="{{ route('mascotas.edit',$mascota) }}" class="btn btn-primary btn-xs">Editar</a>
                                        <button type="submit" onclick="return confirm('Esta seguridad de eliminar el registro')" class="btn btn-danger btn-xs">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop

@section('css')

@stop

@section('js')

@stop
