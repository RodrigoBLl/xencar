@php
    $menuCategories = \App\Models\Category::where('slug', '!=', 'blog')
        ->whereHas('services', fn($q) => $q->where('is_active', true)->where('show_in_menu', true))
        ->with(['services' => fn($q) => $q->where('is_active', true)->where('show_in_menu', true)->orderBy('name')])
        ->orderByRaw("FIELD(slug, 'diseno', 'software', 'multimedia', 'consultoria', 'publicidad')")
        ->get();
@endphp

<nav id="nav-primary" class="nav c-black d-flex fd-column jc-between closed">
    <ul>
        <li class='nav-item nav-animation'>
            <a href='{{ route('home') }}' data-navitem='' class='h2 nav-link '>Inicio</a>
        </li>

        @foreach ($menuCategories as $cat)
            @if ($cat->services->count() > 1)
                {{-- Categoría con múltiples servicios → dropdown --}}
                <li class='nav-item nav-animation'>
                    <a href='' data-navitem='{{ $cat->slug }}'
                        class='h2 nav-link has-submenu'>{{ $cat->name }}</a>
                    <ul class='submenu'>
                        @foreach ($cat->services as $svc)
                            <li class='nav-subitem'>
                                <a href='{{ route('service.show', ['category' => $cat->slug, 'service' => $svc->slug]) }}'
                                    data-navitem='{{ $svc->slug }}' class='h4 nav-link'>{{ $svc->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </li>
            @else
                {{-- Categoría con un solo servicio → link directo --}}
                @php $svc = $cat->services->first(); @endphp
                <li class='nav-item nav-animation'>
                    <a href='{{ route('service.show', ['category' => $cat->slug, 'service' => $svc->slug]) }}'
                        data-navitem='{{ $svc->slug }}' class='h2 nav-link'>{{ $cat->name }}</a>
                </li>
            @endif
        @endforeach

        <li class='nav-item nav-animation'>
            <a href='{{ route('category.show', 'blog') }}' class='h2 nav-link'>Blog</a>
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
