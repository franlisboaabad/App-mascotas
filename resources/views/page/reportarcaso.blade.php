@extends('layouts.page')
@section('contenido')
    <div class="container">



        @if (Auth::check())

        <div class="title pt-3 pb-3">
            <h1>Reportar Caso</h1>
            <p>Porfavor llena todos los campos y acepta la ubicación en tiempo real, En caso el reporte sea por alguna
                mascota perdida, podemos localizarlo de manera inmediata.</p>
        </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <form action="{{ route('registro') }}" method="POST">

                        <div class="form-group">
                            <label for="">Nombre del reportante:</label>
                            <input type="text" name="nombre" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="">Tipo de animal:</label>
                            <select name="tipo_aniaml" id="" class="form-control">
                                <option value="perro">Perro</option>
                                <option value="gato">Gato</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">Descripción del Caso:</label>
                            <textarea id="descripcion" name="descripcion" rows="4" required class="form-control"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="">Imagen:</label>
                            <input type="file" name="imagen" class="form-control">
                        </div>



                        <div class="form-group">
                            <input type="text" name="latitude" id="latitude" class="form-control" required>
                            <input type="text" name="longitude" id="longitude" class="form-control" required>
                        </div>

                        <div class="form-group">
                            @csrf
                            <button class="btn btn-xs btn-primary">Reportar caso</button>
                        </div>

                    </form>
                </div>

                <div class="col-md-6 mb-3">
                    <iframe src="" frameborder="0" id="maps"></iframe>
                </div>
            </div>
        @else
            <h2>Debes loguearte para poder reportar un caso.</h2>
            <a href="{{ route('acceso') }}">Acceder</a> |
            <a href="{{ route('registro') }}">Registrarme</a>
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
