@extends('layouts.app')

@section('title', 'Consultoría Digital - Xencar')
@section('description', 'Asesoría experta para la transformación digital de tu negocio.')

@section('content')
    @include('partials.cookies')
    @include('partials.calendly')

    <main id="page-content">

        <section class="top-title tc-white c-black">
            <div class="block-box-bg hero">
                <div class="bg-overlay top-title-grad"></div>
                <img class="block-box-full--img" src="{{ asset('assets/images/random/17.jpg') }}">
                <div class="wrapper ai-center jc-center h-40vh">
                    <div class="w-80 p-20-30 small-w-100 t-center">
                        <h1 class="h1 rel top-title-h">Consultoría</h1>
                        <p class="h4 m-t-20">Xencar Marketing Digital</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="c-silver">
            <div class="block-content center">
                <h2 class="h2 t-center tc-black-soft">Tenemos un historial asombroso de ayudar a las empresas a convertirse
                    en empresas en primer lugar de Google.</h2>
                <p class="t-center">Más de una docena de empresas comenzaron a vender a travez de la plataforma de Google
                    después de obtener nuestros servicios de consultoría. Siempre vale la pena contratar a uno de nuestros
                    consultores y pagar una pequeña tarifa antes de comenzar su negocio y gastar decenas de miles de pesos.
                </p>
            </div>
        </section>
        <section>
            <div class="block-content">
                <h3 class="h3 t-center tc-black-soft">Nuestras áreas de especialización:</h3>
                <div class="grid g-50 col-4 med-col-2 small-col-1 teaser">
                    <div class='teaser--wrap'>
                        <img class='teaser--img w-100 aspect-square lozad' style="margin:auto"
                            data-src='{{ asset('assets/images/icons/body/icon_tech.svg') }}' />
                        <p class='tc-black-soft'>Proyectos de programación</p>
                        <div class='menu-list item'>
                            <ul class='menu-list--ul'>
                                <li class='menu-list--item'>Análisis técnicos</li>
                                <li class='menu-list--item'>Arquitectura técnica</li>
                                <li class='menu-list--item'>Herramientas de Investigación del mercado</li>
                                <li class='menu-list--item'>Programación</li>
                            </ul>
                        </div>
                    </div>
                    <div class='teaser--wrap'>
                        <img class='teaser--img w-100 aspect-square lozad' style="margin:auto"
                            data-src='{{ asset('assets/images/icons/body/icon_franchises.svg') }}' />
                        <p class='tc-black-soft'>Consultoría en Google Ads</p>
                        <div class='menu-list item'>
                            <ul class='menu-list--ul'>
                                <li class='menu-list--item'>Creación de Campaña</li>
                                <li class='menu-list--item'>Investigación</li>
                                <li class='menu-list--item'>Presupuesto</li>
                                <li class='menu-list--item'>Desarrollo</li>
                                <li class='menu-list--item'>Retorno de Inversión</li>
                                <li class='menu-list--item'>Optimización</li>
                            </ul>
                        </div>
                    </div>
                    <div class='teaser--wrap'>
                        <img class='teaser--img w-100 aspect-square lozad' style="margin:auto"
                            data-src='{{ asset('assets/images/icons/body/icon_tech.svg') }}' />
                        <p class='tc-black-soft'>Consultoría en Venta en Linea</p>
                        <div class='menu-list item'>
                            <ul class='menu-list--ul'>
                                <li class='menu-list--item'>Modelo de negocio</li>
                                <li class='menu-list--item'>Desarrollo de la Applicacion Web</li>
                                <li class='menu-list--item'>Navegación</li>
                                <li class='menu-list--item'>Pago en Linea</li>
                                <li class='menu-list--item'>Base de datos</li>
                                <li class='menu-list--item'>Implementación</li>
                            </ul>
                        </div>
                    </div>
                    <div class='teaser--wrap'>
                        <img class='teaser--img w-100 aspect-square lozad' style="margin:auto"
                            data-src='{{ asset('assets/images/icons/body/icon_franchises.svg') }}' />
                        <p class='tc-black-soft'>Consultoría Video Marketing</p>
                        <div class='menu-list item'>
                            <ul class='menu-list--ul'>
                                <li class='menu-list--item'>Desarrollo de Idea</li>
                                <li class='menu-list--item'>Guión</li>
                                <li class='menu-list--item'>Voz</li>
                                <li class='menu-list--item'>Edición</li>
                                <li class='menu-list--item'>Animación y Efectos Especiales</li>
                                <li class='menu-list--item'>Publicación</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="c-black tc-white">
            <div class="block-content center">
                <p class="h4">Nuestros servicios de consultoria son provehidos por personal especializado con
                    experiencia
                    trabajando con compañias Fortune500.</p>
                <p class="h5">A continuación te presentamos algunos clientes quienes hemos ayudado en todo aspecto de su
                    compañia. Desde la creacion de nombre, marca, sistema, hasta la colaboración con su equipo de ventas.
                </p>
            </div>
        </section>

        <section class="c-silver">
            <div class="block-content center t-center">
                <h2 class="h2 tc-black-soft">Estamos aquí para ayudar</h2>
                <p class="h4">Podríamos ahorrarle cientos de miles de dólares en cualquier proyecto que pueda comenzar.
                    Póngase en contacto con nosotros hoy.</p>
                <a href="{{ route('contact') }}" class="btn cta c-red tc-white">¡Comenzar ahora!</a>
            </div>
        </section>

    </main>
@endsection
