@extends('layouts.app')

@section('content')
    @include('partials.cookies')
    @include('partials.calendly')

    <main id="page-content">

        <section class="top-title tc-white c-black">
            <div class="block-box-bg hero">
                <div class="bg-overlay top-title-grad"></div>
                <img class="block-box-full--img" src="{{ asset('assets/images/random/12.jpg') }}">
                <div class="wrapper ai-center jc-center h-40vh">
                    <div class="w-80 p-20-30 small-w-100 t-center">
                        <h1 class="h1 rel top-title-h">Multimedia</h1>
                        <p class="h4 m-t-20">Xencar Marketing Digital</p>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="block-content">
                <div class="service-info content center t-center small-t-left">
                    <p class="h4">En el mercado actual, las nuevas empresas tienen momentos muy desafiantes a la hora de
                        competir, la diferenciación de ser exitoso y promedio se da al mostrar la mejor cara de su empresa
                        al
                        mundo a través de un gran marketing multimedia.</p>
                </div>
                <div class="process rel d-flex fw-wrap ai-start jc-between">
                    <aside class="process-aside w-30 small-w-100 sticky small-t-center">
                        <h2 class="h2 m-0 tc-black-soft">Proceso Creativo</h2>
                        <p class="uppercase tc-black-soft m-t-0 m-b-30 lts-2">Multimedia</p>
                        <div class="process-menu menu-list link m-b-0">
                            <ul class="menu-list--ul grid g-10 col-1">
                                <li class='menu-list--item'><a href='#01' class='menu-list--link br-5 rel'>Objetivo</a>
                                </li>
                                <li class='menu-list--item'><a href='#02' class='menu-list--link br-5 rel'>Puntos de
                                        Referencia</a></li>
                                <li class='menu-list--item'><a href='#03' class='menu-list--link br-5 rel'>Guión</a>
                                </li>
                                <li class='menu-list--item'><a href='#04' class='menu-list--link br-5 rel'>Voz</a></li>
                                <li class='menu-list--item'><a href='#05'
                                        class='menu-list--link br-5 rel'>Colaterales</a>
                                </li>
                                <li class='menu-list--item'><a href='#06'
                                        class='menu-list--link br-5 rel'>Animaciones</a>
                                </li>
                                <li class='menu-list--item'><a href='#07' class='menu-list--link br-5 rel'>Edición
                                        Final</a>
                                </li>
                                <li class='menu-list--item'><a href='#08' class='menu-list--link br-5 rel'>Feedback</a>
                                </li>
                                <li class='menu-list--item'><a href='#09' class='menu-list--link br-5 rel'>Entrega</a>
                                </li>
                            </ul>
                        </div>
                    </aside>
                    <div class="w-70 small-w-100 temp">
                        <article id='01' class='process-step'>
                            <img class='br-5 lozad w-100 process-img'
                                data-src='{{ asset('assets/images/multimedia/objetive.jpg') }}' alt=''
                                data-width='1558' data-aspect='41/27' loading='lazy'>
                            <div class='step-text'>
                                <h3 class='h2 tc-black-soft step-number'>Objetivo</h3>
                                <p>Es muy importante entender el mercado en el que nuestros clientes quieren entrar. Qué les
                                    diferencia de sus competidores y qué quieren conseguir.</p>
                            </div>
                        </article>
                        <article id='02' class='process-step'>
                            <img class='br-5 lozad w-100 process-img'
                                data-src='{{ asset('assets/images/multimedia/bullets.jpg') }}' alt=''
                                data-width='1558' data-aspect='41/27' loading='lazy'>
                            <div class='step-text'>
                                <h3 class='h2 tc-black-soft step-number'>Puntos de Referencia</h3>
                                <p>En este paso, solicitamos a nuestros clientes las principales cosas que les gustaría
                                    comunicar a su público y las escribimos en viñetas sencillas de entender.</p>
                            </div>
                        </article>
                        <article id='03' class='process-step'>
                            <img class='br-5 lozad w-100 process-img'
                                data-src='{{ asset('assets/images/multimedia/guide.jpg') }}' alt=''
                                data-width='1558' data-aspect='41/27' loading='lazy'>
                            <div class='step-text'>
                                <h3 class='h2 tc-black-soft step-number'>Guión</h3>
                                <p>Basándose en los comentarios iniciales del cliente, nuestro equipo de profesionales
                                    comienza
                                    a crear el guión perfecto que comunicará lo que nuestros clientes intentan comunicar en
                                    un formato muy breve y directo.</p>
                            </div>
                        </article>
                        <article id='04' class='process-step'>
                            <img class='br-5 lozad w-100 process-img'
                                data-src='{{ asset('assets/images/multimedia/voice.jpg') }}' alt=''
                                data-width='1558' data-aspect='41/27' loading='lazy'>
                            <div class='step-text'>
                                <h3 class='h2 tc-black-soft step-number'>Voice</h3>
                                <p>Una vez aprobado el guión, empezamos a grabar la voz de forma que pueda utilizarse para
                                    futuras ediciones.</p>
                            </div>
                        </article>
                        <article id='05' class='process-step'>
                            <img class='br-5 lozad w-100 process-img'
                                data-src='{{ asset('assets/images/multimedia/collaterals.jpg') }}' alt=''
                                data-width='1558' data-aspect='41/27' loading='lazy'>
                            <div class='step-text'>
                                <h3 class='h2 tc-black-soft step-number'>Colaterales</h3>
                                <p>Nuestro equipo de profesionales buscará en una biblioteca de pago de material de archivo
                                    y
                                    de vídeo libre de derechos para conseguir los vídeos que mejor se adapten a las
                                    necesidades del cliente.</p>
                            </div>
                        </article>
                        <article id='06' class='process-step'>
                            <img class='br-5 lozad w-100 process-img'
                                data-src='{{ asset('assets/images/multimedia/animation.jpg') }}' alt=''
                                data-width='1558' data-aspect='41/27' loading='lazy'>
                            <div class='step-text'>
                                <h3 class='h2 tc-black-soft step-number'>Animaciones</h3>
                                <p>Entendemos que algunas partes de los vídeos no pueden tener material de archivo; por lo
                                    tanto, empezamos a crear animaciones personalizadas para poner énfasis en ciertas partes
                                    de dicho vídeo.</p>
                            </div>
                        </article>
                        <article id='07' class='process-step'>
                            <img class='br-5 lozad w-100 process-img'
                                data-src='{{ asset('assets/images/multimedia/final.jpg') }}' alt=''
                                data-width='1558' data-aspect='41/27' loading='lazy'>
                            <div class='step-text'>
                                <h3 class='h2 tc-black-soft step-number'>Final</h3>
                                <p>Una vez que tenemos todas las partes en su lugar, lo ponemos todo junto para mostrar al
                                    cliente lo que somos capaces de crear.</p>
                            </div>
                        </article>
                        <article id='08' class='process-step'>
                            <img class='br-5 lozad w-100 process-img'
                                data-src='{{ asset('assets/images/multimedia/feedback.jpg') }}' alt=''
                                data-width='1558' data-aspect='41/27' loading='lazy'>
                            <div class='step-text'>
                                <h3 class='h2 tc-black-soft step-number'>Feedback</h3>
                                <p>Una vez que el cliente haya visto la versión final, tendrá la oportunidad de enviar las
                                    revisiones finales.</p>
                            </div>
                        </article>
                        <article id='09' class='process-step'>
                            <img class='br-5 lozad w-100 process-img'
                                data-src='{{ asset('assets/images/multimedia/delivery.jpg') }}' alt=''
                                data-width='1558' data-aspect='41/27' loading='lazy'>
                            <div class='step-text'>
                                <h3 class='h2 tc-black-soft step-number'>Entrega</h3>
                                <p>La entrega final se envía al cliente en formato Ultra HD con derechos libres de por vida
                                    sobre su trabajo.</p>
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
                        en
                        contacto con nosotros hoy.</p>
                    <a href="{{ route('contact') }}" class="btn cta c-red tc-white m-center">¡Comenzar Ahora!</a>
                </div>
            </div>
        </section>

    </main>
@endsection
