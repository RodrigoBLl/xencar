@extends('layouts.app')

@section('title', 'Diseño de Marca - Xencar')
@section('description', 'Construimos marcas sólidas y memorables.')

@section('content')
    @include('partials.cookies')
    @include('partials.calendly')

    <main id="page-content">

        <section class="top-title tc-white c-black">
            <div class="block-box-bg hero">
                <div class="bg-overlay top-title-grad"></div>
                <img class="block-box-full--img" src="{{ asset('assets/images/random/11.jpg') }}">
                <div class="wrapper ai-center jc-center h-40vh">
                    <div class="w-80 p-20-30 small-w-100 t-center">
                        <h1 class="h1 rel top-title-h">Diseño de marca</h1>
                        <p class="h4 m-t-20">Diseño</p>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="block-content">
                <div class="service-info content center t-center small-t-left">
                    <p class="h4">Uno de los retos más difíciles y trascendentales que debe superar cualquier empresa es
                        cómo comunicarse con sus consumidores.</p>
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
                                <li class='menu-list--item'><a href='#03' class='menu-list--link br-5 rel'>Grid</a></li>
                                <li class='menu-list--item'><a href='#04' class='menu-list--link br-5 rel'>Color</a>
                                </li>
                                <li class='menu-list--item'><a href='#05' class='menu-list--link br-5 rel'>Uso correcto
                                        de color</a></li>
                                <li class='menu-list--item'><a href='#06' class='menu-list--link br-5 rel'>Tintas y
                                        sombras</a></li>
                                <li class='menu-list--item'><a href='#07' class='menu-list--link br-5 rel'>Margen y
                                        espacio</a></li>
                                <li class='menu-list--item'><a href='#08' class='menu-list--link br-5 rel'>Versiones</a>
                                </li>
                                <li class='menu-list--item'><a href='#09' class='menu-list--link br-5 rel'>Uso correcto
                                        de marca</a></li>
                                <li class='menu-list--item'><a href='#10'
                                        class='menu-list--link br-5 rel'>Tipografía</a></li>
                                <li class='menu-list--item'><a href='#11' class='menu-list--link br-5 rel'>Entrega</a>
                                </li>
                            </ul>
                        </div>
                    </aside>
                    <div class="w-70 small-w-100 temp">
                        <article id='01' class='process-step'>
                            <img class='br-5 lozad w-100 process-img'
                                data-src='{{ asset('assets/images/design/brand/objetive.jpg') }}' alt=''
                                data-width='1558' data-aspect='41/27' loading='lazy'>
                            <div class='step-text'>
                                <h3 class='h2 tc-black-soft step-number'>Objetivo</h3>
                                <p>De esta comunicación depende gran parte de la experiencia que tendrán los usuarios al
                                    consumir el producto o servicio que ofrecen. Las marcas representan, ante todo, un valor
                                    simbólico que ayuda a resolver este problema comunicativo. Cuando una marca ha sido
                                    construida correctamente, esta incorpora una serie de atributos relacionados al concepto
                                    que se busca transmitir.</p>
                            </div>
                        </article>
                        <article id='02' class='process-step'>
                            <img class='br-5 lozad w-100 process-img'
                                data-src='{{ asset('assets/images/design/brand/sketch.jpg') }}' alt=''
                                data-width='1558' data-aspect='41/27' loading='lazy'>
                            <div class='step-text'>
                                <h3 class='h2 tc-black-soft step-number'>Boceto</h3>
                                <p>Es muy importante conocer al cliente para poder desarrollar el perfil deacuado para el,
                                    establecer normas y reglamentos que cuiden la imagen corporativa, por lo que se hace uso
                                    de un manual de imagen como guía.</p>
                            </div>
                        </article>
                        <article id='03' class='process-step'>
                            <img class='br-5 lozad w-100 process-img'
                                data-src='{{ asset('assets/images/design/brand/grid.jpg') }}' alt=''
                                data-width='1558' data-aspect='41/27' loading='lazy'>
                            <div class='step-text'>
                                <h3 class='h2 tc-black-soft step-number'>Grid</h3>
                                <p>En este caso, se toman elementos o conceptos que identifiquen a la empresa, para después
                                    digitalizar y plasmarlo de manera icónica.</p>
                            </div>
                        </article>
                        <article id='04' class='process-step'>
                            <img class='br-5 lozad w-100 process-img'
                                data-src='{{ asset('assets/images/design/brand/color.jpg') }}' alt=''
                                data-width='1558' data-aspect='41/27' loading='lazy'>
                            <div class='step-text'>
                                <h3 class='h2 tc-black-soft step-number'>Color</h3>
                                <p>Estos parámetros de construcción de la marca permiten reproducir de manera proporcional y
                                    correcta el tamaño que debe tener. La mayor parte de las aplicaciones de la marca se
                                    resuelven mediante el uso del material de reproducción contenido en el manual.</p>
                            </div>
                        </article>
                        <article id='05' class='process-step'>
                            <img class='br-5 lozad w-100 process-img'
                                data-src='{{ asset('assets/images/design/brand/right_color.jpg') }}' alt=''
                                data-width='1558' data-aspect='41/27' loading='lazy'>
                            <div class='step-text'>
                                <h3 class='h2 tc-black-soft step-number'>Uso correcto de color</h3>
                                <p>Uno de los aspectos más importantes en el diseño de la identidad de tu empresa es la
                                    elección de los colores corporativos para el branding. Y es que el color representa un
                                    80% el reconocimiento de tu marca.</p>
                            </div>
                        </article>
                        <article id='06' class='process-step'>
                            <img class='br-5 lozad w-100 process-img'
                                data-src='{{ asset('assets/images/design/brand/shades.jpg') }}' alt=''
                                data-width='1558' data-aspect='41/27' loading='lazy'>
                            <div class='step-text'>
                                <h3 class='h2 tc-black-soft step-number'>Tintas y sombras</h3>
                                <p>Es importante no confundir la firma, el isotipo o la tipografía y perder visibilidad. Es
                                    muy importante para mantener una apariencia coherente sobre los canales en línea y fuera
                                    de línea. dependiendo de la superficie o material a utilizar.</p>
                            </div>
                        </article>
                        <article id='07' class='process-step'>
                            <img class='br-5 lozad w-100 process-img'
                                data-src='{{ asset('assets/images/design/brand/margin.jpg') }}' alt=''
                                data-width='1558' data-aspect='41/27' loading='lazy'>
                            <div class='step-text'>
                                <h3 class='h2 tc-black-soft step-number'>Margen y espacio</h3>
                                <p>Los tintes son la mezcla de los colores de la marca con el blanco, lo que aumenta la
                                    luminosidad. Las tonalidades son la mezcla de los colores de la marca con el negro, lo
                                    que reduce la luminosidad. Un tono se produce por la mezcla de un color con gris, o por
                                    tintes y sombras, tomando en cuenta que los tintes y matices son diferentes a la
                                    opacidad del color.</p>
                            </div>
                        </article>
                        <article id='08' class='process-step'>
                            <img class='br-5 lozad w-100 process-img'
                                data-src='{{ asset('assets/images/design/brand/versions.jpg') }}' alt=''
                                data-width='1558' data-aspect='41/27' loading='lazy'>
                            <div class='step-text'>
                                <h3 class='h2 tc-black-soft step-number'>Versiones</h3>
                                <p>Para asegurar la óptima aplicación y percepción de la marca en todos los soportes y
                                    formatos, se ha determinado un área de seguridad que establece una distancia mínima
                                    respecto a los textos y elementos gráficos equivalente al símbolo de la propia marca. El
                                    tamaño mínimo se refiere a la mínima unidad establecida para no perder elementos
                                    gráficos de visibilidad.</p>
                            </div>
                        </article>
                        <article id='09' class='process-step'>
                            <img class='br-5 lozad w-100 process-img'
                                data-src='{{ asset('assets/images/design/brand/right.jpg') }}' alt=''
                                data-width='1558' data-aspect='41/27' loading='lazy'>
                            <div class='step-text'>
                                <h3 class='h2 tc-black-soft step-number'>Uso correcto de marca</h3>
                                <p>En algunos casos se requiere de presentar versiones horizontales y verticales para su uso
                                    correcto dependiendo de la superficie o material a utilizar.</p>
                            </div>
                        </article>
                        <article id='10' class='process-step'>
                            <img class='br-5 lozad w-100 process-img'
                                data-src='{{ asset('assets/images/design/brand/typo.jpg') }}' alt=''
                                data-width='1558' data-aspect='41/27' loading='lazy'>
                            <div class='step-text'>
                                <h3 class='h2 tc-black-soft step-number'>Tipografía</h3>
                                <p>La solidez y constancia del entorno visual y la fortaleza de la identidad de la empresa
                                    dependen de que todas las personas involucradas en su implementación hagan un uso
                                    correcto de identidad.</p>
                            </div>
                        </article>
                        <article id='11' class='process-step'>
                            <img class='br-5 lozad w-100 process-img'
                                data-src='{{ asset('assets/images/design/brand/delivery.jpg') }}' alt=''
                                data-width='1558' data-aspect='41/27' loading='lazy'>
                            <div class='step-text'>
                                <h3 class='h2 tc-black-soft step-number'>Entrega</h3>
                                <p>La tipografía lo que busca es que las letras, el mensaje se adapte hacia el público al
                                    que va dirigido. La tipografía lo que busca principalmente es ser funcional, comunicar,
                                    transmitir, aunque sea experimental no deja de comunicar.</p>
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
