@extends('layouts.master')

@section('title')
    Manualidades escolares huevos pintados
@endsection

{{--@section('subtitle')
    Bienvenidos Niños
    <p></p>
@endsection--}}
@section('content')
    <div class="card">
        <div class="card-title" style="margin-bottom: 0px">
            <p></p>
            <div class="text-center"><h2>Huevos pintados</h2>
                <h3>Manualidades infantiles para disfrutar</h3>
            </div>
            <div class="card-header">
                <p></p>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-7">
                            <p class="text-sm-left">¡Disfruta con esta divertida manualidad de Pascua! ¡Pinta en los huevos de Pascua!</p>
                            <p class="text-md-left"> Sigue atentamente las instrucciones del vídeo para descubrir cómo hacer la manualidad.</p>
                            {{--Lista--}}
                            <div class="card text-white bg-danger mb-3" style="max-width: 40rem;">
                                <div class="card-header"><h5 class="card-title">Materiales que vamos a necesitar:</h5></div>
                                <div class="card-body">
                                    <ul>
                                        <li><i class="fa fa-angle-right" aria-hidden="true"></i> Huevos</li>
                                        <li><i class="fa fa-angle-right" aria-hidden="true"></i> Huevera</li>
                                        <li><i class="fa fa-angle-right" aria-hidden="true"></i> Aguja</li>
                                        <li><i class="fa fa-angle-right" aria-hidden="true"></i> Bol para vaciar los
                                            huevos
                                        </li>
                                        <li><i class="fa fa-angle-right" aria-hidden="true"></i> 2 botes con agua</li>
                                        <li><i class="fa fa-angle-right" aria-hidden="true"></i> Pinceles de distintos
                                            grosores
                                        </li>
                                        <li><i class="fa fa-angle-right" aria-hidden="true"></i> Pinturas acrílicas de
                                            colores
                                        </li>
                                        <li><i class="fa fa-angle-right" aria-hidden="true"></i> Paleta para mezclas
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="text-center"><p></p>
                                <hr>
                                <img src="/images/Manualidades/Escolares/huevos-pintados.jpg" class="rounded mx-auto d-block" alt="..." width="250" height="200">
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
                        <img src="/images/Manualidades/Escolares/huevospintados/1.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text"><h4>HACER UN AGUJERO</h4>Haz un agujero con una aguja en cada extremo del huevo. Sopla por el agujero de arriba para que salga el contenido poniendo un bol debajo. Lava el huevo y sécalo. Repite con todos los que vayas a pintar.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 text-center">
                    <div class="card" style="width: 18rem;">
                        <img src="/images/Manualidades/Escolares/huevospintados/2.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text"><h4>DECORAR</h4>Coloca los huevos en una huevera y decóralos pintando las caras de los personajes de Pocoyó con pinceles y pinturas acrílicas. Empieza con los colores más claros y termina con los detalles oscuros. Ten a mano siempre un bote con agua limpia y otro para aclarar, y una paleta para mezclar colores. Deja secar.</p>
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
