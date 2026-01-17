@extends('layouts.app')

@section('title', 'Diseño de Logo - Xencar')
@section('description', 'Creamos la identidad visual perfecta para tu marca.')

@section('content')
    @include('partials.cookies')
    @include('partials.calendly')

    <main id="page-content">

        <section class="top-title tc-white c-black">
            <div class="block-box-bg hero">
                <div class="bg-overlay top-title-grad"></div>
                <img class="block-box-full--img" src="{{ asset('assets/images/random/15.jpg') }}">
                <div class="wrapper ai-center jc-center h-40vh">
                    <div class="w-80 p-20-30 small-w-100 t-center">
                        <h1 class="h1 rel top-title-h">Diseño de logo</h1>
                        <p class="h4 m-t-20">Diseño</p>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="block-content">
                <div class="service-info content center t-center small-t-left">
                    <p class="h4">La identificación de una marca depende de potentes gráficos, y solo dispones de unos
                        segundos para captar la atención de las personas y causar impacto. Se invierte tiempo y esfuerzo,
                        para establecer todo lo relacionado con la imagen de marca, ya que a partir de aquí es donde empieza
                        el perfil profesional de la empresa.</p>
                </div>
                <div class="process rel d-flex fw-wrap ai-start jc-between">
                    <aside class="process-aside w-30 small-w-100 sticky small-t-center">
                        <h2 class="h2 m-0 tc-black-soft">Proceso creativo</h2>
                        <p class="uppercase tc-black-soft m-t-0 m-b-30 lts-2">Diseño</p>
                        <div class="process-menu menu-list link m-b-0">
                            <ul class="menu-list--ul grid g-10 col-1">
                                <li class='menu-list--item'><a href='#01' class='menu-list--link br-5 rel'>Boceto</a>
                                </li>
                                <li class='menu-list--item'><a href='#02'
                                        class='menu-list--link br-5 rel'>Vectorizado</a></li>
                                <li class='menu-list--item'><a href='#03' class='menu-list--link br-5 rel'>Color</a>
                                </li>
                                <li class='menu-list--item'><a href='#04' class='menu-list--link br-5 rel'>Versiones</a>
                                </li>
                                <li class='menu-list--item'><a href='#05' class='menu-list--link br-5 rel'>Entrega</a>
                                </li>
                            </ul>
                        </div>
                    </aside>
                    <div class="w-70 small-w-100 temp">
                        <article id='01' class='process-step'>
                            <img class='br-5 lozad w-100 process-img'
                                data-src='{{ asset('assets/images/design/logo/sketch.png') }}' alt=''
                                data-width='1558' data-aspect='41/27' loading='lazy'>
                            <div class='step-text'>
                                <h3 class='h2 tc-black-soft step-number'>Boceto</h3>
                                <p>Este paso es muy importante, se debe tener en claro el objetivo principal, el boceto debe
                                    tener conceptos muy abstractos para plasmar las primeras ideas.</p>
                            </div>
                        </article>
                        <article id='02' class='process-step'>
                            <img class='br-5 lozad w-100 process-img'
                                data-src='{{ asset('assets/images/design/logo/vectorized.png') }}' alt=''
                                data-width='1558' data-aspect='41/27' loading='lazy'>
                            <div class='step-text'>
                                <h3 class='h2 tc-black-soft step-number'>Vectorizado</h3>
                                <p>Si el boceto esta listo, este debe pasarse a vectorizarse para separar los elementos
                                    gráficos y ver su funcionalidad como marca individual.</p>
                            </div>
                        </article>
                        <article id='03' class='process-step'>
                            <img class='br-5 lozad w-100 process-img'
                                data-src='{{ asset('assets/images/design/logo/color.png') }}' alt=''
                                data-width='1558' data-aspect='41/27' loading='lazy'>
                            <div class='step-text'>
                                <h3 class='h2 tc-black-soft step-number'>Color</h3>
                                <p>Al igual que el proceso de diseño de personaje, los colores son fundamentales para
                                    complementar la imagen dentro de un contexto corporativo</p>
                            </div>
                        </article>
                        <article id='04' class='process-step'>
                            <img class='br-5 lozad w-100 process-img'
                                data-src='{{ asset('assets/images/design/logo/versions.png') }}' alt=''
                                data-width='1558' data-aspect='41/27' loading='lazy'>
                            <div class='step-text'>
                                <h3 class='h2 tc-black-soft step-number'>Versiones</h3>
                                <p>En algunos casos se requiere de presentar versiones horizontales y verticales para su uso
                                    correcto dependiendo de la superficie o material a utilizar</p>
                            </div>
                        </article>
                        <article id='05' class='process-step'>
                            <img class='br-5 lozad w-100 process-img'
                                data-src='{{ asset('assets/images/design/logo/delivery.jpg') }}' alt=''
                                data-width='1558' data-aspect='41/27' loading='lazy'>
                            <div class='step-text'>
                                <h3 class='h2 tc-black-soft step-number'>Entrega</h3>
                                <p>Para la entrega final se presenta formalmente en un documento en PDF y se agrega un
                                    pequeño manual de uso de imagen como recomendación, con todos sus archivos e imagenes en
                                    alta resolucion.</p>
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
