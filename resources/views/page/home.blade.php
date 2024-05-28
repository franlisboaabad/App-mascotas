@extends('layouts.page')
@section('titulo','Inicio')
@section('contenido')
    <section class="home-4">
        <div class=" petmark-slick-slider  home-slider dot-position-1" data-slick-setting="{
" autoplay":=""
            true,="" "autoplayspeed" :="" 8000,="" "slidestoshow" :=""
            1,="" "dots" :="" true="" }"="">
            <div class="single-slider home-content bg-image" data-bg="{{ asset('page/images/slider-1.webp') }}">
                <div class="container position-relative">
                    <div class="row">
                        <div class="col-lg-6">

                            <h2>Delicious bites <br> with benifits</h2>

                            <h4 class="mt--30">100% made in U.S.A chicken breast jerky</h4>

                            <div class="slider-btn mt--30">
                                <a href="shop.html" class="btn btn-outlined--primary btn-rounded">Shop Now</a>
                            </div>

                        </div>
                    </div>

                </div>
                <span class="herobanner-progress"></span>
            </div>
            <div class="single-slider home-content bg-image" data-bg="{{ asset('page/images/slider-2.webp') }}">
                <div class="container position-relative">
                    <div class="row">
                        <div class="col-lg-6">

                            <h3>Friends &amp; Family</h3>
                            <h1 class="text-primary">SAVE 25% OFF</h1>
                            <h4 class="mt--20">Flea &amp; ticks Product for Cats</h4>

                            <div class="slider-btn mt--30">
                                <a href="shop.html" class="btn btn-outlined--primary btn-rounded">Shop Now</a>
                            </div>

                        </div>
                    </div>
                </div>
                <span class="herobanner-progress"></span>
            </div>
        </div>
    </section>

    <div class="container pt--50 position-relative">
        <div class="policy-block border-four-column absoute-policy">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="policy-block-single">
                        <div class="icon">
                            <span class="ti-truck"></span>
                        </div>
                        <div class="text">
                            <h3>Free Delivery</h3>
                            <p>On orders of $200+</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="policy-block-single">
                        <div class="icon">
                            <span class="ti-credit-card"></span>
                        </div>
                        <div class="text">
                            <h3>Cod</h3>
                            <p>Cash on Delivery</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="policy-block-single">
                        <div class="icon">
                            <span class="ti-gift"></span>
                        </div>
                        <div class="text">
                            <h3>Free Gift Box</h3>
                            <p>Buy a Gift</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="policy-block-single">
                        <div class="icon">
                            <span class="ti-headphone-alt"></span>
                        </div>
                        <div class="text">
                            <h3>Free Support 24/7</h3>
                            <p>Online 24hrs a Day</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section>
        <div class="container">
            <h1>Mascotas</h1>
            <div class="row">
                @foreach ($mascotas as $mascota)
                    <div class="col-md-4 pb-3">
                        <div class="card" style="border: 1px solid black;">
                            <div class="card-body">
                                <img src="{{ $mascota->get_imagen }}" class="img-fluid">
                                <h3>Hola me llamo, {{ $mascota->nombre }} </h3>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>
@endsection
