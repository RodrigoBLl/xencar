@extends('layouts.app')

@section('title', 'Inicio - Xencar Marketing Digital')
@section('description', 'Agencia de Marketing Digital, Desarrollo de Software y Diseño Web.')

@section('content')
    @include('partials.cookies')

    @include('partials.calendly')

    <section>
        <div class='menu-home w-100 abs' id='design'>
            <div class='menu-hamburguer close-btn abs d-flex fd-column jc-center ai-center' data-id='design'>
                <span></span>
                <span></span>
            </div>
            <ul class='d-flex med-fd-column fw-nowrap h-100vh tc-white'>
                <li class='menu-home--item'>
                    <a href='{{ route('service.show', 'diseno-logo') }}' class='rel d-block menu-home--link'>
                        <picture>
                            <source media='(min-width:1081px)'
                                srcset='{{ asset('assets/images/design/home/img_vertical_logo.jpg') }}'>
                            <img data-src='{{ asset('assets/images/design/home/img_horizontal_logo.jpg') }}'
                                class='obj-cover menu-home--img lozad' loading='lazy' />
                        </picture>
                        <h2 class='h2 w-100 abs t-center tc-white menu-home--title'>Diseño de logo</h2>
                    </a>
                </li>
                <li class='menu-home--item'>
                    <a href='{{ route('service.show', 'paginas-web') }}' class='rel d-block menu-home--link'>
                        <picture>
                            <source media='(min-width:1081px)'
                                srcset='{{ asset('assets/images/design/home/img_vertical_web.jpg') }}'>
                            <img data-src='{{ asset('assets/images/design/home/img_horizontal_web.jpg') }}'
                                class='obj-cover menu-home--img lozad' loading='lazy' />
                        </picture>
                        <h2 class='h2 w-100 abs t-center tc-white menu-home--title'>Diseño web</h2>
                    </a>
                </li>
                <li class='menu-home--item'>
                    <a href='{{ route('service.show', 'diseno-marca') }}' class='rel d-block menu-home--link'>
                        <picture>
                            <source media='(min-width:1081px)'
                                srcset='{{ asset('assets/images/design/home/img_vertical_brand.jpg') }}'>
                            <img data-src='{{ asset('assets/images/design/home/img_horizontal_brand.jpg') }}'
                                class='obj-cover menu-home--img lozad' loading='lazy' />
                        </picture>
                        <h2 class='h2 w-100 abs t-center tc-white menu-home--title'>Diseño de marca</h2>
                    </a>
                </li>
            </ul>
        </div>

        <div class='menu-home w-100 abs' id='software'>
            <div class='menu-hamburguer close-btn abs d-flex fd-column jc-center ai-center' data-id='software'>
                <span></span>
                <span></span>
            </div>
            <ul class='d-flex med-fd-column fw-nowrap h-100vh tc-white'>
                <li class='menu-home--item'>
                    <a href='{{ route('service.show', 'software') }}' class='rel d-block menu-home--link'>
                        <picture>
                            <source media='(min-width:1081px)'
                                srcset='{{ asset('assets/images/software/home/img_vertical_process.jpg') }}'>
                            <img data-src='{{ asset('assets/images/software/home/img_horizontal_process.jpg') }}'
                                class='obj-cover menu-home--img lozad' loading='lazy' />
                        </picture>
                        <h2 class='h2 w-100 abs t-center tc-white menu-home--title'>Software</h2>
                    </a>
                </li>
                <li class='menu-home--item'>
                    <a href='{{ route('service.show', 'comercio-electronico') }}' class='rel d-block menu-home--link'>
                        <picture>
                            <source media='(min-width:1081px)'
                                srcset='{{ asset('assets/images/software/home/img_vertical_mlm.jpg') }}'>
                            <img data-src='{{ asset('assets/images/software/home/img_horizontal_mlm.jpg') }}'
                                class='obj-cover menu-home--img lozad' loading='lazy' />
                        </picture>
                        <h2 class='h2 w-100 abs t-center tc-white menu-home--title'>Comercio Electrónico</h2>
                    </a>
                </li>
                <li class='menu-home--item'>
                    <a href='{{ route('service.show', 'aplicaciones-moviles') }}' class='rel d-block menu-home--link'>
                        <picture>
                            <source media='(min-width:1081px)'
                                srcset='{{ asset('assets/images/software/home/img_vertical_apps.jpg') }}'>
                            <img data-src='{{ asset('assets/images/software/home/img_horizontal_apps.jpg') }}'
                                class='obj-cover menu-home--img lozad' loading='lazy' />
                        </picture>
                        <h2 class='h2 w-100 abs t-center tc-white menu-home--title'>Aplicaciones</h2>
                    </a>
                </li>
                <li class='menu-home--item'>
                    <a href='{{ route('service.show', 'software-personalizado') }}' class='rel d-block menu-home--link'>
                        <picture>
                            <source media='(min-width:1081px)'
                                srcset='{{ asset('assets/images/software/home/img_vertical_custom.jpg') }}'>
                            <img data-src='{{ asset('assets/images/software/home/img_horizontal_custom.jpg') }}'
                                class='obj-cover menu-home--img lozad' loading='lazy' />
                        </picture>
                        <h2 class='h2 w-100 abs t-center tc-white menu-home--title'>Software personalizado</h2>
                    </a>
                </li>
            </ul>
        </div>

        <div class="banner">
            <ul>
                <li class='d-block f-left h-100vh w-100'>
                    <div class='banner-content d-flex ai-center w-100 h-100vh abs m-center'>
                        <div class='text tc-white t-center w-100'>
                            <h2 class='h1' style='text-shadow:2px 2px 4px #000000;'>Software</h2>
                            <a href='javascript:void(0)' class='btn outline b-white banner-btn' data-id='software'>Ver
                                más</a>
                        </div>
                    </div>
                    <img class='banner-img obj-cover' src='{{ asset('assets/images/hero/software.jpg') }}'
                        loading='lazy' />
                </li>
                <li class='d-block f-left h-100vh w-100'>
                    <div class='banner-content d-flex ai-center w-100 h-100vh abs m-center'>
                        <div class='text tc-white t-center w-100'>
                            <h2 class='h1' style='text-shadow:2px 2px 4px #000000;'>Diseño</h2>
                            <a href='javascript:void(0)' class='btn outline b-white banner-btn' data-id='design'>Ver más</a>
                        </div>
                    </div>
                    <img class='banner-img obj-cover' src='{{ asset('assets/images/hero/diseno-web-monterrey.jpg') }}'
                        loading='lazy' />
                </li>
                <li class='d-block f-left h-100vh w-100'>
                    <div class='banner-content d-flex ai-center w-100 h-100vh abs m-center'>
                        <div class='text tc-white t-center w-100'>
                            <h2 class='h1' style='text-shadow:2px 2px 4px #000000;'>Consultoría</h2>
                            <a href='{{ route('service.show', 'consultoria') }}' class='btn outline b-white '>Ver más</a>
                        </div>
                    </div>
                    <img class='banner-img obj-cover' src='{{ asset('assets/images/hero/consultoria.jpg') }}'
                        loading='lazy' />
                </li>
                <li class='d-block f-left h-100vh w-100'>
                    <div class='banner-content d-flex ai-center w-100 h-100vh abs m-center'>
                        <div class='text tc-white t-center w-100'>
                            <h2 class='h1' style='text-shadow:2px 2px 4px #000000;'>Multimedia</h2>
                            <a href='{{ route('service.show', 'multimedia') }}' class='btn outline b-white '>Ver más</a>
                        </div>
                    </div>
                    <img class='banner-img obj-cover' src='{{ asset('assets/images/hero/banner_05.jpg') }}'
                        loading='lazy' />
                </li>
                <li class='d-block f-left h-100vh w-100'>
                    <div class='banner-content d-flex ai-center w-100 h-100vh abs m-center'>
                        <div class='text tc-white t-center w-100'>
                            <h2 class='h1' style='text-shadow:2px 2px 4px #000000;'>Publicidad</h2>
                            <a href='{{ route('service.show', 'publicidad') }}' class='btn outline b-white '>Ver más</a>
                        </div>
                    </div>
                    <img class='banner-img obj-cover' src='{{ asset('assets/images/hero/banner_06.jpg') }}'
                        loading='lazy' />
                </li>
            </ul>
        </div>
    </section>
@endsection
