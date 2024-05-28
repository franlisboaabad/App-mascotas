@extends('layouts.page')
@section('contenido')
    <div class="container">

        <div class="row pt-5">
            <div class="col-md-3"></div>
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
                        <button type="submit" class="btn btn-primary btn-xs">Acceder</button>
                    </div>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
@endsection


@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
