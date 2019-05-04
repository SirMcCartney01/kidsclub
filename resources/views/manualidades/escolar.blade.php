@extends('layouts.master')

@section('title')
    Manualidades
@endsection

{{--@section('subtitle')
    Bienvenidos Niños
    <p></p>
@endsection--}}
@section('content')
    <div class="card">
        <div class="card-title" style="margin-bottom: 0px">
            <div class="text-center">
                <h3>Manualidades para niños</h3>
                <h5>Desarrollo de manualidades para el colegio faciles</h5>
            </div>
            <p></p>
            <div class="card-header">
                <p></p>
                <div class="card-body">
                    
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="text-center">
                                <img src="/images/Manualidades/Escolares/bola-mundo.jpg" class="rounded-circle" alt="" width="180" height="180">
                                <p style="margin-bottom: 0px"> Bola del mundo</p>
                                <a class="btn btn-primary" href="{{ route('manualidad.escolar.bolamundo') }}" role="button">Comenzamos</a>
                                <hr>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="text-center">
                                <img src="/images/Manualidades/Escolares/huevos-pintados.jpg" class="rounded-circle" alt="" width="180" height="180">
                                <p style="margin-bottom: 0px"> Huevos pintados</p>
                                <a class="btn btn-primary" href="{{ route('manualidad.escolar.huevospintados') }}" role="button">Comenzamos</a>
                                <hr>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="text-center">
                                <img src="/images/Manualidades/Escolares/pulsera.jpg" class="rounded-circle" alt="" width="180" height="180">
                                <p style="margin-bottom: 0px"> Pulsera </p>
                                <a class="btn btn-primary" href="{{ route('manualidad.escolar.pulsera') }}" role="button">Comenzamos</a>
                                <hr>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="text-center">
                                <img src="/images/Manualidades/Escolares/sujetalibros.jpg" class="rounded-circle" alt="" width="180" height="180">
                                <p style="margin-bottom: 0px"> Sujeta libros</p>
                                <a class="btn btn-primary" href="{{ route('manualidad.escolar.sujetalibros') }}" role="button">Comenzamos</a>
                                <hr>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3">
                            <div class="text-center">
                                <img src="/images/Manualidades/Escolares/bola-mundo.jpg" class="rounded-circle" alt="" width="180" height="180">
                                <p style="margin-bottom: 0px"> Bola del mundo</p>
                                <a class="btn btn-primary" href="#" role="button">Comenzamos</a>
                                <hr>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="text-center">
                                <img src="/images/Manualidades/Escolares/huevos-pintados.jpg" class="rounded-circle" alt="" width="180" height="180">
                                <p style="margin-bottom: 0px"> Huevos pintados</p>
                                <a class="btn btn-primary" href="#" role="button">Comenzamos</a>
                                <hr>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="text-center">
                                <img src="/images/Manualidades/Escolares/pulsera.jpg" class="rounded-circle" alt="" width="180" height="180">
                                <p style="margin-bottom: 0px"> Pulsera </p>
                                <a class="btn btn-primary" href="#" role="button">Comenzamos</a>
                                <hr>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="text-center">
                                <img src="/images/Manualidades/Escolares/sujetalibros.jpg" class="rounded-circle" alt="" width="180" height="180">
                                <p style="margin-bottom: 0px"> Sujeta libros</p>
                                <a class="btn btn-primary" href="#" role="button">Comenzamos</a>
                                <hr>
                            </div>
                        </div>
                    </div>

                </div>
                <p></p>
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
    <hr>
    <div class="card">
        <div class="card-title" style="margin-bottom: 0px">
            <h4 style="text-align: center;">Manualidades para hacer en clase</h4>
            <p></p>
            <div class="card-header">
                <p></p>
                <div class="row">
                    <div class="col-lg-8">
                        <p class="text-sm-left">¿Quieres pasar un rato divertido haciendo alguna actividad que te permita dar rienda suelta a tu creatividad? </p>
                        <p class="text-md-left">Consulta las diferentes temáticas de manualidades originales disponibles y los materiales que necesitarás para su elaboración</p>
                        <p class="text-md-left">Las manualidades fáciles para niños les ayudarán a desarrollar capacidades como la organización o el reparto de tareas, la toma de decisiones, la imaginación, la concentración, la coordinación, la expresión o el lenguaje, así como les facilitarán el aprendizaje</p>
                        <p class="text-md-left">Nuestras manualidades están orientadas para niños desde preescolar hasta primaria así que podrás encontrar diferentes grados de dificultad a asumir en función del tiempo y recursos de los que dispongas y hasta donde lleguen tus capacidades creativas. </p>
                        <p class="text-md-left">En general encontrarás manualidades infantiles, sencillas y originales y que para fabricarlas requieren de materiales muy básicos que suele haber en todos los domicilios. De esta forma, conseguimos manualidades fáciles de hacer que simplifiquen el aprendizaje de los niños</p>
                    </div>
                    <div class="col-lg-4">
                        <div class="text-center">
                            <img src="/images/Manualidades/manualidades_info.png" class="rounded" alt="..." width="300" height="200">
                        </div>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <p></p>
    <hr>

@endsection