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

                    @if (session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                    @endif


                    <form action="{{ route('mascotas.update', $mascota) }}" enctype="multipart/form-data" method="POST">

                        <div class="form-group mb-3">
                            <label for="">Nombre</label>
                            <input type="text" name="nombre" class="form-control" required
                                value="{{ old('nombre', $mascota->nombre) }}">
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Especie</label>
                            <input type="text" name="especie" class="form-control" required
                                value="{{ old('especie', $mascota->especie) }}">
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Raza</label>
                            <input type="text" name="raza" class="form-control" required
                                value="{{ old('raza', $mascota->raza) }}">
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Edad</label>
                            <input type="text" name="edad" class="form-control" required
                                value="{{ old('edad', $mascota->edad) }}">
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Descripcion</label>
                            <textarea name="descripcion" id="" cols="30" rows="5" class="form-control">
                                {{ $mascota->descripcion }}
                            </textarea>
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Imagen de mascota</label>
                            <input type="file" name="imagen" class="form-control">
                        </div>



                        <div class="form-group">
                            @csrf
                            @method('PUT')
                            <button type="submit" class="btn btn-xs btn-success">Editar Mascota</button>
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
