@extends('layouts.page')
@section('contenido')
<div class="container">

    <div class="title pt-3 pb-3">
        <h1>Registrarse</h1>
        <p>Porfavor llena todos los campos y registrate a nuestra página web, puedes ayudar reportando nuevos casos de mascotas perdidas entre otros.</p>
    </div>
    <div class="row">
        <div class="col-md-6">
            <form action="{{ route('registro') }}" method="POST">
                <div class="form-group">
                    <label for="">Nombres</label>
                    <input type="text" name="name" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="email" class="form-control" required>
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
                    <button class="btn btn-xs btn-primary">Registrarse</button>
                </div>

            </form>
        </div>
    </div>

</div>




@endsection
