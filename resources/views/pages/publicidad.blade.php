@extends('layouts.app')

@section('content')
    @include('partials.cookies')
    @include('partials.calendly')

    <main id="page-content">

        <section class="top-title tc-white c-black">
            <div class="block-box-bg hero">
                <div class="bg-overlay top-title-grad"></div>
                <img class="block-box-full--img" src="{{ asset('assets/images/random/19.jpg') }}">
                <div class="wrapper ai-center jc-center h-40vh">
                    <div class="w-80 p-20-30 small-w-100 t-center">
                        <h1 class="h1 rel top-title-h">Publicidad</h1>
                        <p class="h4 m-t-20">Google Ads y Anuncios Publicitarios</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="c-silver">
            <div class="block-content center">
                <p class="h4">Cuidamos la eficiencia de nuestra planificación, producción, creación de campañas y dar
                    resultados inmediatos en cada uno de nuestros proyectos. Así nos distinguimos desde el primer instante.
                    El éxito no es una casualidad, y las ganancias de nuestros clientes así lo respalda.</p>
                <p>Aprovechamos al máximo el diferenciador de los productos y servicios de nuestros clientes para potenciar
                    su marca y convertirlos en un punto de referencia en su industria.</p>
            </div>
        </section>
        <section>
            <div class="block-content">
                <h2 class="h2 t-center tc-black-soft">Nos especializamos en cumplir con:</h2>
                <div class="grid g-50 col-3 small-col-1 teaser">
                    <div class='teaser--wrap'>
                        <img class='teaser--img w-100 aspect-square lozad'
                            data-src='{{ asset('assets/images/icons/body/compliance.svg') }}' />
                        <h3 class='h4 tc-black-soft'>Efectividad</h3>
                        <p>Luego de un estudio de las características del producto o el servicio, desarrollamos una
                            estrategia que cumpla con los objetivos de nuestro cliente.</p>
                    </div>
                    <div class='teaser--wrap'>
                        <img class='teaser--img w-100 aspect-square lozad'
                            data-src='{{ asset('assets/images/icons/body/efficiency.svg') }}' />
                        <h3 class='h4 tc-black-soft'>Eficiencia</h3>
                        <p>Utilizamos cada uno de nuestros recursos y herramientas, de la forma más adecuada para brindar la
                            mejor experiencia posible a los canales o nichos de nuestros clientes.</p>
                    </div>
                    <div class='teaser--wrap'>
                        <img class='teaser--img w-100 aspect-square lozad'
                            data-src='{{ asset('assets/images/icons/body/innovation.svg') }}' />
                        <h3 class='h4 tc-black-soft'>Innovación</h3>
                        <p>Para garantizar una mejora constante, verificamos cada uno de nuestros procesos de planeación,
                            investgación y desarrollo de forma constante.</p>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="block-box-half right ai-end">
                <div class="block-box-half--img-wrap">
                    <img class="block-box-half--img lozad aspect" loading="lazy"
                        data-src="{{ asset('assets/images/publicidad/anuncios-publicitarios-monterrey.jpg') }}"
                        alt="Cuidamos la eficiencia de nuestros procesos de planificación, producción y desarrollo en cada uno de nuestros proyectos. Así nos distinguimos desde el primer instante. El éxito no es una casualidad, y las ganancias de nuestros clientes así lo respalda."
                        data-aspect="943/553" />
                </div>
                <div class="block-box-half--text m-b-30">
                    <p>Nuestros servicios ofrecen una cobertura amplia que cuida cada detalle de los proyectos en los que
                        intervienen, y están dirigidos por profesionales con una trayectoria sólida en E-Commerce, Anuncios
                        en Google y Anuncios Publicitarios, características que garantizan la mejora continua del proceso.
                    </p>
                    <p>Un ejemplo de ello es nuestro laboratorio integral. Un proyecto creado para llevar tu proyecto o
                        idea, desde el inicio, hasta volverla una marca totalmente profesional. A la altura de cualquier
                        mercado y con el sello de calidad de la Casa.</p>
                </div>
            </div>
        </section>
        <section class="c-silver">
            <div class="block-content">
                <div class="grid col-3 small-col-1 m-b-0">
                    <h3 class="h2 tc-black-soft">Descubre nuestro Laboratorio Integral</h3>
                    <p class="h4 span-2 small-span-1">En este laboratorio te brindamos todo lo necesario, para ayudarte a
                        hacer realidad esa idea que tienes en mente. Material, cuidado, colores, lujo, textura,
                        ilumincación, neón y todo lo que puedas imaginarte.</p>
                </div>
            </div>
        </section>
        <section class="c-purple tc-white">
            <div class="block-content center">
                <h2 class="h2">¿Por qué confiar en Xencar Marketing Digital Laboratorio Integral?</h2>
                <p class="h4">En Xencar Marketing Digital Laboratorio Integral cada proceso de planeación, creación y
                    desarrollo es cuidado hasta el más mínimo detalle. Lo que garantiza la calidad del producto final, desde
                    el primer instante.</p>
            </div>
        </section>
        <section>
            <div class="block-content">
                <div class="grid g-50 col-3 small-col-1 teaser">
                    <div class='teaser--wrap'>
                        <img class='teaser--img w-100 aspect-square lozad'
                            data-src='{{ asset('assets/images/icons/body/development.svg') }}' />
                        <h3 class='h4 tc-black-soft'>Desarrollo y formulación</h3>
                        <p>Nuestros expertos te ayudarán a identificar y encontrar materiales que sean efectivos, de la más
                            alta calidad y funcionen para el propósito de tu anuncio publicitario.</p>
                    </div>
                    <div class='teaser--wrap'>
                        <img class='teaser--img w-100 aspect-square lozad'
                            data-src='{{ asset('assets/images/icons/body/time.svg') }}' />
                        <h3 class='h4 tc-black-soft'>Tiempo de fabricación</h3>
                        <p>Integrado con nuestra metodología de fabricación, nuestros procesos y equipos de trabajo ofrecen
                            uno de los tiempos de elaboración más rápidos en el área de maquila.</p>
                    </div>
                    <div class='teaser--wrap'>
                        <img class='teaser--img w-100 aspect-square lozad'
                            data-src='{{ asset('assets/images/icons/body/asic.svg') }}' />
                        <h3 class='h4 tc-black-soft'>Alto valor de elaboración e implementación.</h3>
                        <p>Desarrollamos anuncios Publicitarios con materiales de calidad Premium, una presentación
                            excelente y al hacerlo, te ayudamos a obtener mejores ganancias gracias al valor percibido de
                            nuestros anuncios publicitarios.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="c-black-soft tc-white">
            <div class="block-content">
                <p class="h2 content center">Anímate a trabajar con nosotros y convierte tu producto, en una marca de
                    calidad con la mejor publicidad. Imprime tu sello. Hazlo distinto.<span class='d-block tc-purple'>Hazlo
                        Disruptivo.</span></p>
            </div>

        </section>

    </main>
@endsection
