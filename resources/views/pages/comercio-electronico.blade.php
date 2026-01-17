@extends('layouts.app')

@section('title', 'Comercio Electrónico - Xencar')
@section('description', 'Tiendas en línea y soluciones de e-commerce efectivas.')

@section('content')
    @include('partials.cookies')
    @include('partials.calendly')

    <main id="page-content">

        <section class="top-title tc-white c-black">
            <div class="block-box-bg hero">
                <div class="bg-overlay top-title-grad"></div>
                <img class="block-box-full--img" src="{{ asset('assets/images/random/10.jpg') }}">
                <div class="wrapper ai-center jc-center h-40vh">
                    <div class="w-80 p-20-30 small-w-100 t-center">
                        <h1 class="h1 rel top-title-h">Comercio Electrónico</h1>
                        <p class="h4 m-t-20">Software</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="c-silver">
            <div class="block-content">
                <div class="grid col-3 small-col-1 m-b-0">
                    <p class="span-1">Ya sea que su empresa recién esté comenzando o haya estado operando durante años,
                        nuestros sistemas de software e-commerce proporcionarán a su empresa las características y el
                        rendimiento que necesita para prosperar.</p>
                    <p class="h2 span-2 small-span-1">A medida que su empresa crece, su sistema puede modificarse y
                        expandirse para satisfacer las crecientes demandas de su negocio.</p>
                </div>
            </div>
        </section>
        <section>
            <div class="block-box-half right ai-end">
                <div class="block-box-half--img-wrap">
                    <img class="block-box-half--img" loading="lazy"
                        src="{{ asset('assets/images/software/ecommerce/ecommerce_01.jpg') }}" />
                </div>
                <div class="block-box-half--text m-b-30">
                    <h2 class="h2 tc-black-soft">Empresas operativas</h2>
                    <p>Nuestros desarrolladores se especializan en la migración de empresas operativas desde sistemas
                        heredados. Entendemos las dificultades y los requisitos especiales de la aplicación de nuevos
                        sistemas mientras opera su negocio. Su empresa necesita tecnología de alto rendimiento para hoy y
                        para el futuro.<br><br>La migración de un sistema antiguo a un sistema nuevo siempre da miedo, por
                        no mencionar que es un desafío, pero con Software para ecommerce en su equipo, se puede lograr de
                        manera eficiente, a tiempo y dentro del presupuesto. Desarrollaremos una solución de actualización
                        para la empresa que le permitirá comprender la mejor tecnología de la industria.</p>
                </div>
            </div>
        </section>
        <section class="c-silver">
            <div class="block-content">
                <div class="grid col-3 small-col-1 m-b-0">
                    <div class="span-1">
                        <h3 class="h2 tc-black-soft">Empresas previas al lanzamiento</h3>
                        <p>Para las empresas de nueva creación, ofrecemos soluciones completas que incluyen software, sitios
                            web replicados integrados y back office de Ventas.</p>
                    </div>
                    <p class="h3 span-2 small-span-1">Nos aseguramos de que comience a generar ingresos rápidamente, con un
                        completo sistema de software de ecommerce que cumple con todos sus criterios sin gastar por encima
                        del presupuesto.</p>
                </div>
            </div>
        </section>
        <section>
            <div class="block-content center">
                <h3 class="h2 t-center tc-black-soft">La plataforma Back Office de Xencar en la nube</h3>
                <ul class="teaser i-left">
                    <li class='teaser--wrap'>
                        <img class='teaser--img w-100 aspect-square lozad'
                            data-src='{{ asset('assets/images/icons/body/deployment.svg') }}' />
                        <h3 class='h4 tc-black-soft'>Implementación rápida del sistema</h3>
                        <p>Nuestra plataforma admite una implementación rápida para que las empresas comiencen a funcionar
                            rápidamente. Reunimos un equipo de proyectos experimentado junto con un software que contiene
                            reglas de negocio fáciles de configurar, informes y paneles de control pre empaquetados y una
                            biblioteca de flujos de trabajo pre construidos basados en años de experiencia en la industria.
                        </p>
                    </li>
                    <li class='teaser--wrap'>
                        <img class='teaser--img w-100 aspect-square lozad'
                            data-src='{{ asset('assets/images/icons/body/performance.svg') }}' />
                        <h3 class='h4 tc-black-soft'>Alto rendimiento</h3>
                        <p>Con soporte para usuarios y cientos de transacciones al mes, Software para ecommerce ofrece una
                            capacidad de expansión de rendimiento prácticamente ilimitada. Los vendedores directos a menudo
                            experimentan picos mensuales y estacionales y nuestros clientes se benefician constantemente de
                            la velocidad, el poder y la flexibilidad de nuestras plataformas.</p>
                    </li>
                    <li class='teaser--wrap'>
                        <img class='teaser--img w-100 aspect-square lozad'
                            data-src='{{ asset('assets/images/icons/body/security.svg') }}' />
                        <h3 class='h4 tc-black-soft'>Seguridad</h3>
                        <p>Nuestra plataforma proporciona una base de seguridad líder en la industria para garantizar el
                            cifrado de datos, la seguridad de las aplicaciones y la seguridad física.</p>
                    </li>
                    <li class='teaser--wrap'>
                        <img class='teaser--img w-100 aspect-square lozad'
                            data-src='{{ asset('assets/images/icons/body/compliance.svg') }}' />
                        <h3 class='h4 tc-black-soft'>Conformidad</h3>
                        <p>Software para la plataforma ecommerce cumple con garantía completa, satisfacción garantizada y
                            protege su inversión.</p>
                    </li>
                    <li class='teaser--wrap'>
                        <img class='teaser--img w-100 aspect-square lozad'
                            data-src='{{ asset('assets/images/icons/body/support.svg') }}' />
                        <h3 class='h4 tc-black-soft'>Redundancia</h3>
                        <p>Brindamos soporte del sistema 24 x 7, con acuerdos de nivel de servicio garantizados.</p>
                    </li>
                </ul>
            </div>
        </section>
        <section>
            <div class="block-box-half left ai-end">
                <div class="block-box-half--img-wrap">
                    <img class="block-box-half--img lozad aspect" loading="lazy"
                        data-src="{{ asset('assets/images/software/ecommerce/ecommerce_02.jpg') }}" data-aspect="943/553" />
                </div>
                <div class="block-box-half--text m-b-30">
                    <h2 class="h2 tc-black-soft">Planes de compensación</h2>
                    <p>Hay muchos enfoques diferentes para las organizaciones de línea descendente y los planes de
                        compensación. Durante los últimos años los hemos dominado todos. Algunos incluso han sido inventados
                        por nuestros clientes. Ninguna otra empresa puede implementar su plan mejor que SOFTWARE para
                        ecommerce.</p>
                </div>
            </div>
        </section>
        <section>

            <section class="c-silver">
                <div class="block-content center">
                    <h3 class="h2 tc-black-soft t-center">Integraciones de sistemas</h3>
                    <div class="grid col-3 small-col-1">
                        <p class="span-1">Somos un socio tecnológico que puede manejar sus requisitos de integración de
                            sistemas, tanto ahora como en el futuro.</p>
                        <p class="span-2 small-span-1">Nuestros clientes requieren la integración entre sistemas
                            propietarios o de terceros y la plataforma de software de ecommerce. Somos un socio tecnológico
                            que tiene la experiencia para trabajar con otros proveedores para completar proyectos de
                            integración.</p>
                    </div>
                    <div class="menu-list item check-icon">
                        <ul class="menu-list--ul grid col-2 small-col-1">
                            <li class='menu-list--item'>Multi moneda</li>
                            <li class='menu-list--item'>Multi lenguaje</li>
                            <li class='menu-list--item'>Gestión web</li>
                            <li class='menu-list--item'>Herramientas de medición</li>
                            <li class='menu-list--item'>Impuestos</li>
                            <li class='menu-list--item'>Inventario</li>
                            <li class='menu-list--item'>Envío</li>
                            <li class='menu-list--item'>Métodos de pago</li>
                            <li class='menu-list--item'>Cumplimiento</li>
                            <li class='menu-list--item'>Control administrativo</li>
                        </ul>
                    </div>
                </div>
            </section>

    </main>
@endsection
