<nav id="nav-primary" class="nav c-black d-flex fd-column jc-between closed">
    <ul>
        <li class='nav-item nav-animation'>
            <a href='{{ route('home') }}' data-navitem='' class='h2 nav-link '>Inicio</a>
        </li>
        <li class='nav-item nav-animation'>
            <a href='' data-navitem='' class='h2 nav-link has-submenu'>Diseño</a>
            <ul class='submenu'>
                <li class='nav-subitem'>
                    <a href='{{ route('service.show', 'diseno-logo') }}' data-navitem='' class='h4 nav-link '>Diseño de
                        Logo</a>
                </li>
                <li class='nav-subitem'>
                    <a href='{{ route('service.show', 'paginas-web') }}' data-navitem='' class='h4 nav-link '>Paginas
                        Web</a>
                </li>
                <li class='nav-subitem'>
                    <a href='{{ route('service.show', 'diseno-marca') }}' data-navitem='' class='h4 nav-link'>Diseño de
                        Marca</a>
                </li>
            </ul>
        </li>
        <li class='nav-item nav-animation'>
            <a href='' data-navitem='software' class='h2 nav-link has-submenu'>Software</a>
            <ul class='submenu'>
                <li class='nav-subitem'>
                    <a href='{{ route('service.show', 'software') }}' data-navitem='software_process'
                        class='h4 nav-link '>Software</a>
                </li>
                <li class='nav-subitem'>
                    <a href='{{ route('service.show', 'comercio-electronico') }}' data-navitem='e-commerce'
                        class='h4 nav-link '>Comercio
                        Electrónico</a>
                </li>
                <li class='nav-subitem'><a href='{{ route('service.show', 'aplicaciones-moviles') }}'
                        data-navitem='software_apps' class='h4 nav-link'>Aplicaciones</a>
                </li>
                <li class='nav-subitem'>
                    <a href='{{ route('service.show', 'software-personalizado') }}' data-navitem='software_custom'
                        class='h4 nav-link'>Software
                        Personalizado</a>
                </li>
            </ul>
        </li>
        <li class='nav-item nav-animation'>
            <!-- <a href='' data-navitem='blockchain' class='h2 nav-link has-submenu'>Blockchain</a><ul class='submenu'><li class='nav-subitem'><a href='?p=blockchain_smart' data-navitem='blockchain_smart' class='h4 nav-link'>Contratos inteligentes</a></li><li class='nav-subitem'><a href='?p=blockchain_crypto' data-navitem='blockchain_crypto' class='h4 nav-link'>Activos criptográficos</a></li><li class='nav-subitem'><a href='?p=blockchain_mining' data-navitem='blockchain_mining' class='h4 nav-link'>Minería y soporte</a></li></ul></li> <li class='nav-item nav-animation'>-->
            <a href='{{ route('service.show', 'multimedia') }}' data-navitem='multimedia'
                class='h2 nav-link'>Multimedia</a>
        </li>
        <li class='nav-item nav-animation'>
            <a href='{{ route('service.show', 'consultoria') }}' data-navitem='consultoria'
                class='h2 nav-link'>Consultoría</a>
        </li>
        <li class='nav-item nav-animation'>
            <a href='{{ route('service.show', 'publicidad') }}' data-navitem='publicidad'
                class='h2 nav-link'>Publicidad</a>
        </li>
        <li class='nav-item nav-animation'>
            <a href='{{ route('blog.index') }}' class='h2 nav-link'>Blog</a>
        </li>
    </ul>
    <div class="d-flex fw-wrap">

        <div class="lang-switcher w-100 t-center p-10">
            <!-- <a href='?p=&amp;language=english' class='p-10 lang-switcher--link '>eng</a>/ --> <a
                href='?p=&amp;language=spanish' class='p-10 lang-switcher--link active'>esp</a>
        </div>
        <a href="{{ route('contact') }}" class="btn cta c-red tc-white m-center">¡Comenzar ahora!</a>
    </div>
</nav>
