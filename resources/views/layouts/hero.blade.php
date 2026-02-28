<div id="cajacookies" class="c-black w-100 p-10 d-flex fw-wrap jc-center ai-center">
    <p>Este sitio web utiliza cookies para mejorar su experiencia. Asumiremos que está de acuerdo con esto, pero puede
        optar por no participar si lo desea. .</p>
    <button class="btn c-purple cookies-btn" onclick="acceptCookies()">Si acepto</button>
</div>



<div id="calendly-popup" class="d-flex jc-center ai-center popup">
    <div class="close-popup close-btn abs d-flex fd-column" data-id="calendly-popup">
        <span></span>
        <span></span>
    </div>
    <div class="calendly-inline-widget"></div>
</div>


<section>


    <div class='menu-home w-100 abs' id='design'>
        <div class='menu-hamburguer close-btn abs d-flex fd-column jc-center ai-center' data-id='design'>
            <span></span>
            <span></span>
        </div>
        <ul class='d-flex med-fd-column fw-nowrap h-100vh tc-white'>
            <li class='menu-home--item'>
                <a href='{{ route('service.show', ['category' => 'diseno', 'service' => 'diseno-logo']) }}'
                    class='rel d-block menu-home--link'>
                    <picture>
                        <source media='(min-width:1081px)'
                            srcset='{{ url('assets/images/design/home/img_vertical_logo.jpg') }}'>
                        <img data-src='{{ url('assets/images/design/home/img_horizontal_logo.jpg') }}'
                            class='obj-cover menu-home--img lozad' loading='lazy' />
                    </picture>
                    <h2 class='h2 w-100 abs t-center tc-white menu-home--title'>Diseño de logo</h2>
                </a>
            </li>
            <li class='menu-home--item'>
                <a href='{{ route('service.show', ['category' => 'diseno', 'service' => 'paginas-web']) }}'
                    class='rel d-block menu-home--link'>
                    <picture>
                        <source media='(min-width:1081px)'
                            srcset='{{ url('assets/images/design/home/img_vertical_web.jpg') }}'>
                        <img data-src='{{ url('assets/images/design/home/img_horizontal_web.jpg') }}'
                            class='obj-cover menu-home--img lozad' loading='lazy' />
                    </picture>
                    <h2 class='h2 w-100 abs t-center tc-white menu-home--title'>Diseño web</h2>
                </a>
            </li>
            <li class='menu-home--item'>
                <a href='{{ route('service.show', ['category' => 'diseno', 'service' => 'diseno-marca']) }}'
                    class='rel d-block menu-home--link'>
                    <picture>
                        <source media='(min-width:1081px)'
                            srcset='{{ url('assets/images/design/home/img_vertical_brand.jpg') }}'>
                        <img data-src='{{ url('assets/images/design/home/img_horizontal_brand.jpg') }}'
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
                <a href='{{ route('service.show', ['category' => 'software', 'service' => 'software']) }}'
                    class='rel d-block menu-home--link'>
                    <picture>
                        <source media='(min-width:1081px)'
                            srcset='{{ url('assets/images/software/home/img_vertical_process.jpg') }}'>
                        <img data-src='{{ url('assets/images/software/home/img_horizontal_process.jpg') }}'
                            class='obj-cover menu-home--img lozad' loading='lazy' />
                    </picture>
                    <h2 class='h2 w-100 abs t-center tc-white menu-home--title'>Software</h2>
                </a>
            </li>
            <li class='menu-home--item'>
                <a href='{{ route('service.show', ['category' => 'software', 'service' => 'comercio-electronico']) }}'
                    class='rel d-block menu-home--link'>
                    <picture>
                        <source media='(min-width:1081px)'
                            srcset='{{ url('assets/images/software/home/img_vertical_mlm.jpg') }}'>
                        <img data-src='{{ url('assets/images/software/home/img_horizontal_mlm.jpg') }}'
                            class='obj-cover menu-home--img lozad' loading='lazy' />
                    </picture>
                    <h2 class='h2 w-100 abs t-center tc-white menu-home--title'>Comercio Electrónico</h2>
                </a>
            </li>
            <li class='menu-home--item'>
                <a href='{{ route('service.show', ['category' => 'software', 'service' => 'aplicaciones-moviles']) }}'
                    class='rel d-block menu-home--link'>
                    <picture>
                        <source media='(min-width:1081px)'
                            srcset='{{ url('assets/images/software/home/img_vertical_apps.jpg') }}'>
                        <img data-src='{{ url('assets/images/software/home/img_horizontal_apps.jpg') }}'
                            class='obj-cover menu-home--img lozad' loading='lazy' />
                    </picture>
                    <h2 class='h2 w-100 abs t-center tc-white menu-home--title'>Aplicaciones</h2>
                </a>
            </li>
            <li class='menu-home--item'>
                <a href='{{ route('service.show', ['category' => 'software', 'service' => 'software-personalizado']) }}'
                    class='rel d-block menu-home--link'>
                    <picture>
                        <source media='(min-width:1081px)'
                            srcset='{{ url('assets/images/software/home/img_vertical_custom.jpg') }}'>
                        <img data-src='{{ url('assets/images/software/home/img_horizontal_custom.jpg') }}'
                            class='obj-cover menu-home--img lozad' loading='lazy' />
                    </picture>
                    <h2 class='h2 w-100 abs t-center tc-white menu-home--title'>Software personalizado</h2>
                </a>
            </li>
        </ul>
    </div>

    <div class="banner">
        <ul>
            <!-- <li class='d-block f-left h-100vh w-100'>
    <div class='banner-content d-flex ai-center w-100 h-100vh abs m-center'>
    <div class='text tc-white t-center w-100'>
    <h2 class='h1'>Blockchain</h2>
    <a href='javascript:void(0)' class='btn outline b-white banner-btn' data-id='blockchain'>Ver más</a>
    </div>
    </div>
    <img class='banner-img obj-cover' src='{{ url('assets/images/hero/banner_03.jpg') }}' loading='lazy' />
    </li>
-->
            <li class='d-block f-left h-100vh w-100'>
                <div class='banner-content d-flex ai-center w-100 h-100vh abs m-center'>
                    <div class='text tc-white t-center w-100'>
                        <h2 class='h1' style='text-shadow:2px 2px 4px #000000;'>Software</h2>
                        <a href='javascript:void(0)' class='btn outline b-white banner-btn' data-id='software'>Ver
                            más</a>
                    </div>
                </div>
                <img class='banner-img obj-cover' src='{{ url('assets/images/hero/software.jpg') }}'
                    loading='lazy' />
            </li>
            <li class='d-block f-left h-100vh w-100'>
                <div class='banner-content d-flex ai-center w-100 h-100vh abs m-center'>
                    <div class='text tc-white t-center w-100'>
                        <h2 class='h1' style='text-shadow:2px 2px 4px #000000;'>Diseño</h2>
                        <a href='javascript:void(0)' class='btn outline b-white banner-btn' data-id='design'>Ver
                            más</a>
                    </div>
                </div>
                <img class='banner-img obj-cover' src='{{ url('assets/images/hero/diseno-web-monterrey.jpg') }}'
                    loading='lazy' />
            </li>
            <li class='d-block f-left h-100vh w-100'>
                <div class='banner-content d-flex ai-center w-100 h-100vh abs m-center'>
                    <div class='text tc-white t-center w-100'>
                        <h2 class='h1' style='text-shadow:2px 2px 4px #000000;'>Consultoría</h2>
                        <a href='{{ route('service.show', ['category' => 'consultoria', 'service' => 'consultoria']) }}'
                            class='btn outline b-white '>Ver más</a>
                    </div>
                </div>
                <img class='banner-img obj-cover' src='{{ url('assets/images/hero/consultoria.jpg') }}'
                    loading='lazy' />
            </li>
            <li class='d-block f-left h-100vh w-100'>
                <div class='banner-content d-flex ai-center w-100 h-100vh abs m-center'>
                    <div class='text tc-white t-center w-100'>
                        <h2 class='h1' style='text-shadow:2px 2px 4px #000000;'>Multimedia</h2>
                        <a href='{{ route('service.show', ['category' => 'multimedia', 'service' => 'multimedia']) }}'
                            class='btn outline b-white '>Ver más</a>
                    </div>
                </div>
                <img class='banner-img obj-cover' src='{{ url('assets/images/hero/banner_05.jpg') }}'
                    loading='lazy' />
            </li>
            <li class='d-block f-left h-100vh w-100'>
                <div class='banner-content d-flex ai-center w-100 h-100vh abs m-center'>
                    <div class='text tc-white t-center w-100'>
                        <h2 class='h1' style='text-shadow:2px 2px 4px #000000;'>Publicidad</h2>
                        <a href='{{ route('service.show', ['category' => 'publicidad', 'service' => 'publicidad']) }}'
                            class='btn outline b-white '>Ver más</a>
                    </div>
                </div>
                <img class='banner-img obj-cover' src='{{ url('assets/images/hero/banner_06.jpg') }}'
                    loading='lazy' />
            </li>
        </ul>
    </div>
</section>
