@extends('adminlte::page')

@section('title', 'Mascotas')

@section('content_header')
    <h1>Lista de Mascotas</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif



                    <form action="{{ route('mascotas.store') }}" enctype="multipart/form-data" method="POST">

                        <div class="form-group mb-3">
                            <label for="">Nombre</label>
                            <input type="text" name="nombre" class="form-control" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Especie</label>
                            <input type="text" name="especie" class="form-control" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Raza</label>
                            <input type="text" name="raza" class="form-control" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Edad</label>
                            <input type="text" name="edad" class="form-control" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Descripcion</label>
                            <textarea name="descripcion" id="" cols="30" rows="5" class="form-control"></textarea>
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Imagen de mascota</label>
                            <input type="file" name="imagen" class="form-control">
                        </div>



                        <div class="form-group">
                            @csrf
                            <button type="submit" class="btn btn-xs btn-success">Registrar Mascota</button>
                            <a type="button" href="{{ route('mascotas.index') }}" class="btn btn-xs btn-primary">Lista de
                                mascotas</a>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')

@stop

@section('js')

@stop
