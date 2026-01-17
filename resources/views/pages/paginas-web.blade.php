@extends('layouts.app')

@section('title', $service->seo_title ?? 'Diseño de Páginas Web - Xencar')
@section('description', $service->seo_description ?? 'Diseño web profesional y responsivo para tu empresa.')

@section('content')
    @include('partials.cookies')
    @include('partials.calendly')

    <main id="page-content">

        <section class="top-title tc-white c-black">
            <div class="block-box-bg hero">
                <div class="bg-overlay top-title-grad"></div>
                @if ($service->hero_image)
                    <img class="block-box-full--img" src="{{ asset('storage/' . $service->hero_image) }}">
                @else
                    <img class="block-box-full--img" src="{{ asset('assets/images/random/' . rand(1, 11) . '.jpg') }}">
                @endif
                <div class="wrapper ai-center jc-center h-40vh">
                    <div class="w-80 p-20-30 small-w-100 t-center">
                        <h1 class="h1 rel top-title-h">{{ $service->hero_title ?? 'Diseño web' }}</h1>
                        <p class="h4 m-t-20">{{ $service->name }}</p>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="block-content">
                <div class="service-info content center t-center small-t-left">
                    <p class="h4">Un sitio web no sólo le dará credibilidad, sino que también ayudará a dar la impresión
                        de que su empresa es más grande y más exitosa que puede ser en realidad. Los usuarios pueden conocer
                        tus productos, tu marca, lo cual te sirve para incrementar la reputación de tu empresa.</p>
                </div>
                <div class="process rel d-flex fw-wrap ai-start jc-between">
                    <aside class="process-aside w-30 small-w-100 sticky small-t-center">
                        <h2 class="h2 m-0 tc-black-soft">Proceso creativo</h2>
                        <p class="uppercase tc-black-soft m-t-0 m-b-30 lts-2">Diseño</p>
                        <div class="process-menu menu-list link m-b-0">
                            <ul class="menu-list--ul grid g-10 col-1">
                                <li class='menu-list--item'><a href='#01' class='menu-list--link br-5 rel'>Objetivo</a>
                                </li>
                                <li class='menu-list--item'><a href='#02' class='menu-list--link br-5 rel'>Boceto</a>
                                </li>
                                <li class='menu-list--item'><a href='#03'
                                        class='menu-list--link br-5 rel'>Wireframes</a></li>
                                <li class='menu-list--item'><a href='#04' class='menu-list--link br-5 rel'>Mockup</a>
                                </li>
                                <li class='menu-list--item'><a href='#05' class='menu-list--link br-5 rel'>Optimización
                                        de imágenes</a></li>
                            </ul>
                        </div>
                    </aside>
                    <div class="w-70 small-w-100 temp">
                        <article id='01' class='process-step'>
                            <img class='br-5 lozad w-100 process-img'
                                data-src='{{ asset('assets/images/design/web/objetive.png') }}' alt=''
                                data-width='1558' data-aspect='41/27' loading='lazy'>
                            <div class='step-text'>
                                <h3 class='h2 tc-black-soft step-number'>Objetivo</h3>
                                <p>Antes que nada se debe conocer a detalle el cliente y tomar en cuenta varias preguntas
                                    sencillas: ¿Qué se quiere lograr?, ¿Qué se quiere lograr? y ¿A quién va dirigido?, para
                                    esto se necesita una junta con el corporativo calificado para este proyecto.</p>
                            </div>
                        </article>
                        <article id='02' class='process-step'>
                            <img class='br-5 lozad w-100 process-img'
                                data-src='{{ asset('assets/images/design/web/sketch.png') }}' alt=''
                                data-width='1558' data-aspect='41/27' loading='lazy'>
                            <div class='step-text'>
                                <h3 class='h2 tc-black-soft step-number'>Boceto</h3>
                                <p>Ya que esta listo el objetivo, se plasman las mejores ideas para lograrlo, se revisa el
                                    flujo de trabajo y se hacen correcciones.</p>
                            </div>
                        </article>
                        <article id='03' class='process-step'>
                            <img class='br-5 lozad w-100 process-img'
                                data-src='{{ asset('assets/images/design/web/wireframe.png') }}' alt=''
                                data-width='1558' data-aspect='41/27' loading='lazy'>
                            <div class='step-text'>
                                <h3 class='h2 tc-black-soft step-number'>Wireframes</h3>
                                <p>Para mejorar el concepto, se pasa a digitalizar el boceto, tambien pasa por un proceso de
                                    revisión, se agrega tamaños tipográficos, estilo de menu, estructura de desarollo y
                                    estilo corporativo.</p>
                            </div>
                        </article>
                        <article id='04' class='process-step'>
                            <img class='br-5 lozad w-100 process-img'
                                data-src='{{ asset('assets/images/design/web/mockup.png') }}' alt=''
                                data-width='1558' data-aspect='41/27' loading='lazy'>
                            <div class='step-text'>
                                <h3 class='h2 tc-black-soft step-number'>Mockup</h3>
                                <p>Antes de pasarlo al departamento de programación se envía una propuesta visual final al
                                    cliente, para su ultima revisión y se discute en el equipo si se ha logrado el objetivo.
                                </p>
                            </div>
                        </article>
                        <article id='05' class='process-step'>
                            <img class='br-5 lozad w-100 process-img'
                                data-src='{{ asset('assets/images/design/web/images.png') }}' alt=''
                                data-width='1558' data-aspect='41/27' loading='lazy'>
                            <div class='step-text'>
                                <h3 class='h2 tc-black-soft step-number'>Optimización de imágenes</h3>
                                <p>Es muy importante hoy en día que un sitio web no tarde mucho en cargar, para esto se hace
                                    una optimización en el peso de las imágenes y se acomoda de acuerdo al dispositivo
                                    adecuado.</p>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>
        <section class="c-black-soft tc-white">
            <div class="block-content t-center">
                <div class="content center">
                    <h2 class="h2">Estamos aquí para ayudar</h2>
                    <p class="h4">Podríamos ahorrarle miles de pesos en cualquier proyecto que pueda comenzar. Póngase
                        en contacto con nosotros hoy.</p>
                    <a href="{{ route('contact') }}" class="btn cta c-red tc-white m-center">¡Comenzar ahora!</a>
                </div>
            </div>
        </section>

    </main>
@endsection
