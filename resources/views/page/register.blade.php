@extends('layouts.page')
@section('titulo','Registro')
@section('contenido')
    <div class="container">

        <div class="title pt-3 pb-3">
            <h1>REGISTRATE</h1>
            <p>Porfavor llena todos los campos y registrate a nuestra página web, puedes ayudar reportando nuevos casos de
                mascotas perdidas entre otros.</p>
        </div>
        <div class="row">
            <div class="col-md-6">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif


                <form action="{{ route('registro') }}" method="POST">
                    <div class="form-group">
                        <label for="">Nombres</label>
                        <input type="text" name="name" class="form-control" required value="{{ old('name') }}">
                    </div>

                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" name="email" class="form-control" required value="{{ old('email') }}">
                    </div>

                    <div class="form-group">
                        <label for="">Contrseña</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="">Repetir Contrseña</label>
                        <input type="password" name="password_confirmation" class="form-control" required>
                    </div>

                    <div class="form-group">
                        @csrf
                        <button class="btn btn-xs btn-primary">REGISTRARSE</button>
                    </div>

                </form>
            </div>
        </div>

    </div>




@endsection

@section('css')
<style>
    .title h1{
        font-weight: 600 !important;
    }
    .btn {
        border-radius: 0px !important;
        font-weight: 600 !important;
    }
</style>
@endsection
