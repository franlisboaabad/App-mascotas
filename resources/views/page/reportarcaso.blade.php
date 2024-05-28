@extends('layouts.page')
@section('titulo', 'Reportar un caso')
@section('contenido')
    <div class="container">



        @if (Auth::check())
            <div class="title pt-3 pb-3">
                <h1>Reporte de Mascotas Perdidas o Ayuda</h1>
                <p>Porfavor llena todos los campos y acepta la ubicación en tiempo real, En caso el reporte sea por alguna
                    mascota perdida, podemos localizarlo de manera inmediata.</p>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">

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


                    <form action="{{ route('registrarcaso') }}" method="POST">

                        <div class="form-group">
                            <label for="">Nombre del reportante:</label>
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                            <input type="text" name="nombres" class="form-control" required
                                value="{{ Auth::user()->name }}">
                        </div>

                        <div class="form-group">
                            <label for="">Tipo de animal:</label>
                            <select name="tipo_animal" id="" class="form-control">
                                <option value="perro">Perro</option>
                                <option value="gato">Gato</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">Descripción del Caso:</label>
                            <textarea id="descripcion_del_caso" name="descripcion_del_caso" rows="4" required class="form-control"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="">Imagen:</label>
                            <input type="file" name="imagen" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="contacto">Información de contacto:</label>
                            <input type="text" id="contacto" name="contacto" required class="form-control">
                        </div>



                        <div class="form-group">
                            <input type="hidden" name="latitude" id="latitude" class="form-control" required>
                            <input type="hidden" name="longitude" id="longitude" class="form-control" required>
                        </div>

                        <div class="form-group">
                            @csrf
                            <button class="btn btn-xs btn-primary">Reportar caso</button>
                        </div>

                    </form>
                </div>

                <div class="col-md-6 mb-3">
                    {{-- <iframe src="" frameborder="0" id="maps"></iframe> --}}
                </div>
            </div>
        @else
            <div class="accesos">
                <h2>Debes loguearte para poder reportar un caso.</h2> <br>
                <a href="{{ route('acceso') }}" class="btn btn-primary btn-xs">Acceder</a> |
                <a href="{{ route('registro') }}" class="btn btn-success btn-xs">Registrarme</a>
            </div>
        @endif

    </div>
@endsection


@section('js')
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function() {

            //variables
            //funciones

            function getUbicación() {
                //   Solicitar permiso para acceder a la ubicación del usuario
                navigator.geolocation.getCurrentPosition(function(position) {
                    const latitud = position.coords.latitude;
                    const longitud = position.coords.longitude;

                    // Ahora puedes enviar estas coordenadas al servidor o guardarlas en tu base de datos.
                    // Por ejemplo:
                    // - Enviar a una API de backend.
                    // - Guardar en una tabla de ubicaciones.

                    console.log("Ubicación actual:");
                    console.log("Latitud:", latitud);
                    console.log("Longitud:", longitud);

                    // Construye la URL de Google Maps
                    const geoUrl = `https://www.google.com/maps?q=${latitud},${longitud}`;

                    // console.log(geo);

                    $('#latitude').val(latitud);
                    $('#longitude').val(longitud);
                    // $('#geolocalizacion').val(geo);
                    $('#maps').attr('src', geoUrl);


                });

                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(showPosition, showError);
                } else {
                    alert("La geolocalización no es soportada por este navegador.");
                }
            }


            // llamar funciones

            getUbicación();

        });
    </script>

@stop
