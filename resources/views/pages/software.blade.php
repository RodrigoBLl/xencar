@extends('layouts.app')

@section('title', $service->seo_title ?? 'Desarrollo de Software - Xencar')
@section('description', $service->seo_description ?? 'Soluciones de software a medida para potenciar tu negocio.')

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
                    <img class="block-box-full--img" src="{{ asset('assets/images/random/7.jpg') }}">
                @endif
                <div class="wrapper ai-center jc-center h-40vh">
                    <div class="w-80 p-20-30 small-w-100 t-center">
                        <h1 class="h1 rel top-title-h">{{ $service->hero_title ?? 'Proceso de desarrollo' }}</h1>
                        <p class="h4 m-t-20">{{ $service->name }}</p>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="block-content">
                <div class="service-info content center t-center small-t-left">
                    <h2 class="h2 tc-black-soft">¡Si puede imaginarlo, podemos hacerlo digital!</h2>
                    <p class="h4">Todos los desarrolladores de software del Xencar Team tienen el talento para
                        desarrollar software en cualquier plataforma y con cualquier tecnología.</p>
                </div>
                <div class="process rel d-flex fw-wrap ai-start jc-between">
                    <aside class="process-aside w-30 small-w-100 sticky small-t-center">
                        <h2 class="h2 m-0 tc-black-soft">Proceso creativo</h2>
                        <p class="uppercase tc-black-soft m-t-0 m-b-30 lts-2">Software</p>
                        <div class="process-menu menu-list link m-b-0">
                            <ul class="menu-list--ul grid g-10 col-1">
                                <li class='menu-list--item'><a href='#01' class='menu-list--link br-5 rel'>Objetivo</a>
                                </li>
                                <li class='menu-list--item'><a href='#02' class='menu-list--link br-5 rel'>Diseño</a>
                                </li>
                                <li class='menu-list--item'><a href='#03' class='menu-list--link br-5 rel'>Desarollo</a>
                                </li>
                                <li class='menu-list--item'><a href='#04' class='menu-list--link br-5 rel'>Lanzamiento y
                                        entrega</a></li>
                                <li class='menu-list--item'><a href='#05' class='menu-list--link br-5 rel'>Soporte</a>
                                </li>
                            </ul>
                        </div>
                    </aside>
                    <div class="w-70 small-w-100 temp">
                        <article id='01' class='process-step'>
                            <img class='br-5 lozad w-100 process-img'
                                data-src='{{ asset('assets/images/software/process/objetive.jpg') }}' alt=''
                                data-width='943' data-aspect='943/553' loading='lazy'>
                            <div class='step-text'>
                                <h3 class='h2 tc-black-soft step-number'>Objetivo</h3>
                                <h4 class='h3 tc-black-soft'>Cuéntenos acerca de su proyecto</h4>
                                <p>Nuestros diseñadores primero deben comprender sus productos y sus objetivos. A partir de
                                    ahí, nos centramos en la experiencia del usuario, las consideraciones de marketing y las
                                    iniciativas específicas que prioriza.</p>
                            </div>
                        </article>
                        <article id='02' class='process-step'>
                            <img class='br-5 lozad w-100 process-img'
                                data-src='{{ asset('assets/images/software/process/design.jpg') }}' alt=''
                                data-width='943' data-aspect='943/553' loading='lazy'>
                            <div class='step-text'>
                                <h3 class='h2 tc-black-soft step-number'>Diseño</h3>
                                <h4 class='h3 tc-black-soft'>Aclaración y dirección visual</h4>
                                <p>En sintonía con su negocio y sus objetivos, recurrimos a soluciones de diseño. Estos
                                    pueden ser visuales frontend o logísticos backend. El resultado de las fases de diseño
                                    proporciona instrucciones claras para nuestros desarrolladores.</p>
                            </div>
                        </article>
                        <article id='03' class='process-step'>
                            <img class='br-5 lozad w-100 process-img'
                                data-src='{{ asset('assets/images/software/process/development.jpg') }}' alt=''
                                data-width='943' data-aspect='943/553' loading='lazy'>
                            <div class='step-text'>
                                <h3 class='h2 tc-black-soft step-number'>Desarollo</h3>
                                <h4 class='h3 tc-black-soft'>Planes establecidos, tiempo para crear</h4>
                                <p>Con la claridad lograda a través de los planes de diseño, nuestros desarrolladores serán
                                    asignados y los gerentes de proyecto impulsarán el proyecto hasta su finalización.
                                    Recibirá actualizaciones de estado periódicas a lo largo del camino.</p>
                            </div>
                        </article>
                        <article id='04' class='process-step'>
                            <img class='br-5 lozad w-100 process-img'
                                data-src='{{ asset('assets/images/software/process/launch.jpg') }}' alt=''
                                data-width='943' data-aspect='943/553' loading='lazy'>
                            <div class='step-text'>
                                <h3 class='h2 tc-black-soft step-number'>Lanzamiento y entrega</h3>
                                <h4 class='h3 tc-black-soft'>¡Todos los conjuntos!</h4>
                                <p>En Xencar Marketing Digital nos centramos en la satisfacción del cliente al 100%; por lo
                                    tanto, el lanzamiento es la parte principal de nuestro proceso. Estamos ahí con nuestros
                                    clientes hasta que obtengan el resultado que buscaban. Nuestras prácticas técnicas
                                    garantizarán una implementación sin problemas sin tiempo de inactividad.</p>
                            </div>
                        </article>
                        <article id='05' class='process-step'>
                            <img class='br-5 lozad w-100 process-img'
                                data-src='{{ asset('assets/images/software/process/support.jpg') }}' alt=''
                                data-width='943' data-aspect='943/553' loading='lazy'>
                            <div class='step-text'>
                                <h3 class='h2 tc-black-soft step-number'>Soporte</h3>
                                <h4 class='h3 tc-black-soft'>Siempre estará ahí para usted</h4>
                                <p>Siempre estamos listos para brindar soporte, ya sea a través de SEO, soporte de marketing
                                    digital o mejoras de desarrollo continuo para mejorar las conversiones en su software.
                                </p>
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
