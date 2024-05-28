@extends('layouts.page')
@section('titulo','Login')
@section('contenido')
    <div class="container">


        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="title pt-3 pb-3">
            <h1>INICIAR SESIÓN</h1>
        </div>

        <div class="row">
            <div class="col-md-6">
                <form action="{{ route('login') }}" method="POST">
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" name="email" class="form-control" required value="{{ old('email') }}">
                    </div>

                    <div class="form-group">
                        <label for="">Contrseña</label>
                        <input type="password" name="password" class="form-control" required value="{{ old('password') }}">
                    </div>

                    <div class="form-group">
                        @csrf
                        <button type="submit" class="btn btn-primary btn-xs">ACCEDER</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection


@section('css')
    <style>
        .btn{
            border-radius: 0px !important;
            font-weight: 600 !important;
        }
        .title h1{
            font-weight: 600 !important;
        }
    </style>
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
