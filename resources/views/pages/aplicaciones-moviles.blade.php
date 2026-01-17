@extends('layouts.app')

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
                        <h1 class="h1 rel top-title-h">Aplicaciones</h1>
                        <p class="h4 m-t-20">Software</p>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="block-content">
                <div class="service-info content center t-center small-t-left">
                    <h2 class="h2 tc-black-soft">Creemos un software único para crear o mejorar su negocio</h2>
                    <p class="h4">¡Si puede imaginarlo, podemos hacerlo digital!</p>
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
                                <li class='menu-list--item'><a href='#04' class='menu-list--link br-5 rel'>Pruebas /
                                        QA</a></li>
                                <li class='menu-list--item'><a href='#05' class='menu-list--link br-5 rel'>Envío a
                                        Google Play y Apple Store</a></li>
                                <li class='menu-list--item'><a href='#06' class='menu-list--link br-5 rel'>Soporte</a>
                                </li>
                            </ul>
                        </div>
                    </aside>
                    <div class="w-70 small-w-100 temp">
                        <article id='01' class='process-step'>
                            <img class='br-5 lozad w-100 process-img'
                                data-src='{{ asset('assets/images/software/app/objetive.jpg') }}' alt=''
                                data-width='943' data-aspect='943/553' loading='lazy'>
                            <div class='step-text'>
                                <h3 class='h2 tc-black-soft step-number'>Objetivo</h3>
                                <p>Todos los desarrolladores de software de Xencar Marketing Digital tienen el talento para
                                    desarrollar software en cualquier plataforma y con cualquier tecnología.</p>
                                <p>Cuéntenos acerca de su proyecto</p>
                            </div>
                        </article>
                        <article id='02' class='process-step'>
                            <img class='br-5 lozad w-100 process-img'
                                data-src='{{ asset('assets/images/software/app/design.jpg') }}' alt=''
                                data-width='943' data-aspect='943/553' loading='lazy'>
                            <div class='step-text'>
                                <h3 class='h2 tc-black-soft step-number'>Diseño</h3>
                                <p>Nuestros diseñadores primero deben comprender sus productos y sus objetivos. A partir de
                                    ahí, nos centramos en la experiencia del usuario, las consideraciones de marketing y las
                                    iniciativas específicas que prioriza.</p>
                                <p>Aclaración y dirección visual</p>
                            </div>
                        </article>
                        <article id='03' class='process-step'>
                            <img class='br-5 lozad w-100 process-img'
                                data-src='{{ asset('assets/images/software/app/development.jpg') }}' alt=''
                                data-width='943' data-aspect='943/553' loading='lazy'>
                            <div class='step-text'>
                                <h3 class='h2 tc-black-soft step-number'>Desarollo</h3>
                                <p>En sintonía con su negocio y sus objetivos, recurrimos a soluciones de diseño. Estos
                                    pueden ser visuales frontend o logísticos backend. El resultado de las fases de diseño
                                    proporciona instrucciones claras para nuestros desarrolladores.</p>
                                <p>Planes establecidos, tiempo para crear</p>
                            </div>
                        </article>
                        <article id='04' class='process-step'>
                            <img class='br-5 lozad w-100 process-img'
                                data-src='{{ asset('assets/images/software/app/testing.jpg') }}' alt=''
                                data-width='943' data-aspect='943/553' loading='lazy'>
                            <div class='step-text'>
                                <h3 class='h2 tc-black-soft step-number'>Pruebas / QA</h3>
                                <p>Con la claridad lograda a través de los planes de diseño, nuestros desarrolladores serán
                                    asignados y los gerentes de proyecto impulsarán el proyecto hasta su finalización.
                                    Recibirá actualizaciones de estado periódicas a lo largo del camino.</p>
                                <p>Siempre estará ahí para usted Siempre estamos listos para brindar soporte, ya sea a
                                    través de SEO, soporte de marketing digital o mejoras de desarrollo continuo para
                                    mejorar las conversiones en su software.</p>
                            </div>
                        </article>
                        <article id='05' class='process-step'>
                            <img class='br-5 lozad w-100 process-img'
                                data-src='{{ asset('assets/images/software/app/submission.jpg') }}' alt=''
                                data-width='943' data-aspect='943/553' loading='lazy'>
                            <div class='step-text'>
                                <h3 class='h2 tc-black-soft step-number'>Envío a Google Play y Apple Store</h3>
                                <p>(Únicamente en móbiles)</p>
                                <p>¡Todos los conjuntos! En Xencar nos centramos en la satisfacción del cliente al 100%; por
                                    lo tanto, el lanzamiento es la parte principal de nuestro proceso. Estamos ahí con
                                    nuestros clientes hasta que obtengan el resultado que buscaban. Nuestras prácticas
                                    técnicas garantizarán una implementación fluida sin tiempo de inactividad.</p>
                            </div>
                        </article>
                        <article id='06' class='process-step'>
                            <img class='br-5 lozad w-100 process-img'
                                data-src='{{ asset('assets/images/software/app/support.jpg') }}' alt=''
                                data-width='943' data-aspect='943/553' loading='lazy'>
                            <div class='step-text'>
                                <h3 class='h2 tc-black-soft step-number'>Soporte</h3>
                                <p>Todos los conjuntos! En Xencar nos centramos en la satisfacción del cliente al 100%; por
                                    lo tanto, el lanzamiento es la parte principal de nuestro proceso. Estamos ahí con
                                    nuestros clientes hasta que obtengan el resultado que buscaban. Nuestras prácticas
                                    técnicas garantizarán una implementación fluida sin tiempo de inactividad.</p>
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
                    <p class="h4">Podríamos ahorrarle de miles de pesos en cualquier proyecto que pueda comenzar.
                        Póngase en contacto con nosotros hoy.</p>
                    <a href="{{ route('contact') }}" class="btn cta c-red tc-white m-center">¡Comenzar ahora!</a>
                </div>
            </div>
        </section>

    </main>
@endsection
