@extends('layouts.master')

@section('title')
    Manualidades escolares pulsera
@endsection

{{--@section('subtitle')
    Bienvenidos Niños
    <p></p>
@endsection--}}
@section('content')
    <div class="card">
        <div class="card-title" style="margin-bottom: 0px">
            <p></p>
            <div class="text-center"><h2>Pulsera</h2>
                <h3>Manualidades infantiles para disfrutar</h3>
            </div>
            <div class="card-header">
                <p></p>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-7">
                            <p class="text-sm-left">¡Disfruta de esta manualidad con motivo de la Hora del Planeta! ¡Hazte con tijeras, pegamento y un globo!</p>
                            <p class="text-md-left">Sigue atentamente las instrucciones para hacer esta bola luminosa del mundo</p>
                            {{--Lista--}}
                            <div class="card text-white bg-danger mb-3" style="max-width: 40rem;">
                                <div class="card-header"><h5 class="card-title">Materiales que vamos a necesitar:</h5></div>
                                <div class="card-body">
                                    <ul>
                                        <li><i class="fa fa-angle-right" aria-hidden="true"></i> 15 cuentas de colores
                                            azul, rosa y amarillo repartidas en cantidad desigual
                                        </li>
                                        <li><i class="fa fa-angle-right" aria-hidden="true"></i> Goma elástica</li>
                                        <li><i class="fa fa-angle-right" aria-hidden="true"></i> Tijeras</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="text-center"><p></p>
                                <hr>
                                <img src="/images/Manualidades/Escolares/pulsera.jpg" class="rounded mx-auto d-block" alt="..." width="250" height="200">
                                <hr>
                            </div>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <p></p>
    <hr>
    <div class="card">
        <div class="card-header text-center">
            <h4>¡Disfruta de esta manualidad con motivo de la Hora del Planeta!</h4>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-4 text-center">
                    <div class="card" style="width: 18rem;">
                        <img src="/images/Manualidades/Escolares/pulsera/1.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text"><h4>ENSARTAR</h4>Ensarta una cuenta por uno de los extremos de la goma elástica</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 text-center">
                    <div class="card" style="width: 18rem;">
                        <img src="/images/Manualidades/Escolares/pulsera/2.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text"><h4>ENSARTAR</h4>igue ensartando cuentas de diferente color hasta que llenes la longitud que necesites para dar una o dos vueltas a tu muñeca. Cuánto más mezcladas estén las cuentas más bonita y divertida te va a quedar.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 text-center">
                    <div class="card" style="width: 18rem;">
                        <img src="/images/Manualidades/Escolares/pulsera/3.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text"><h4>ANUDAR</h4>Haz un nudo con los dos extremos de la goma que quede bien pegado a las últimas cuentas.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <p></p>
    <hr>
    <div class="card">
        <div class="card-title" style="margin-bottom: 0px">
            <div class="text-center">
                <h3>Otras manualidades</h3>
                <h4>Disfruta de otras manualidades por temática</h4>

            </div>
            <p></p>
            <div class="card-header">
                <p></p>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <a href="{{ route('manualidad.escolar') }}">
                                <div class="text-center">
                                    <img src="/images/Manualidades/manualidades-escolares.png" class="rounded-circle" alt="" width="200" height="200">
                                    <p> Manualidades escolares</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a href="{{ route('manualidad.navidad') }}">
                                <div class="text-center">
                                    <img src="/images/Manualidades/manualidades-navidad.png" class="rounded-circle" alt="" width="200" height="200">
                                    <p> Manualidades navideñas</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a href="{{ route('manualidad.cumple') }}">
                                <div class="text-center">
                                    <img src="/images/Manualidades/manualidades-cumpleanos.png" class="rounded-circle" alt="" width="200" height="200">
                                    <p> Manualidades de cumpleaños</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <p></p>
            </div>
        </div>
    </div>
    <p></p>
@endsection
