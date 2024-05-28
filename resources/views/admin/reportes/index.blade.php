@extends('adminlte::page')
@section('plugins.Datatables', true)
@section('title', 'Dashboard')

@section('content_header')
    <h1>Reportes de casos</h1>
@stop

@section('content')
    <p>Lista de registro, reporte de mascotas perdidas o ayuda. </p>
    <div class="card">
        <div class="card-body">
            <table class="table" id="table-reporte-casos">
                <thead>
                    <th>Nombre reportante</th>
                    <th>Tipo Animal</th>
                    <th>Descripcion</th>
                    <th>Contacto</th>
                    <th>Estado</th>
                    <th>Opciones</th>
                </thead>
                <tbody>

                    @foreach ($reportes as $reporte)
                        <tr>
                            <td>{{ $reporte->nombres }}</td>
                            <td>{{ $reporte->tipo_animal }}</td>
                            <td>{{ Str::limit($reporte->descripcion_del_caso, 100, '[...]') }}</td>
                            <td>{{ $reporte->contacto }}</td>
                            <td>{{ $reporte->estado }}</td>
                            <td>
                                <a href="{{ route('reportes.show', $reporte) }}" class="btn btn-warning btn-xs">Ver Caso</a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        $(document).ready(function() {

            $('#table-reporte-casos').DataTable();

        });
    </script>
@stop
