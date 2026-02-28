@extends('layouts.app')

@section('title', $service->seo_title ?? 'Diseño de Páginas Web - Xencar')
@section('description', $service->seo_description ?? 'Diseño web profesional y responsivo para tu empresa.')

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
                    <img class="block-box-full--img" src="{{ asset('assets/images/random/' . rand(1, 11) . '.jpg') }}">
                @endif
                <div class="wrapper ai-center jc-center h-40vh">
                    <div class="w-80 p-20-30 small-w-100 t-center">
                        <h1 class="h1 rel top-title-h">{{ $service->hero_title ?? 'Diseño web' }}</h1>
                        <p class="h4 m-t-20">{{ $service->short_description ?? $service->name }}</p>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="block-content">
                @if ($service->process_steps && count($service->process_steps))
                    {{-- Contenido con Aside de Proceso --}}
                    <div class="service-info content center t-center small-t-left">
                        @if ($service->body_content)
                            @foreach ($service->body_content as $block)
                                <p class="h4">{!! $block['content'] !!}</p>
                            @endforeach
                        @endif
                    </div>
                    <div class="process rel d-flex fw-wrap ai-start jc-between">
                        <aside class="process-aside w-30 small-w-100 sticky small-t-center">
                            <h2 class="h2 m-0 tc-black-soft">{{ $service->process_title ?? 'Proceso' }}</h2>
                            <p class="uppercase tc-black-soft m-t-0 m-b-30 lts-2">
                                {{ $service->process_subtitle ?? $service->name }}</p>
                            <div class="process-menu menu-list link m-b-0">
                                <ul class="menu-list--ul grid g-10 col-1">
                                    @foreach ($service->process_steps as $i => $step)
                                        <li class='menu-list--item'>
                                            <a href='#step-{{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }}'
                                                class='menu-list--link br-5 rel'>{{ $step['title'] }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </aside>
                        <div class="w-70 small-w-100 temp">
                            @foreach ($service->process_steps as $i => $step)
                                <article id='step-{{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }}' class='process-step'>
                                    @if (!empty($step['image']))
                                        <img class='br-5 lozad w-100 process-img'
                                            data-src='{{ asset('storage/' . $step['image']) }}' alt='{{ $step['title'] }}'
                                            loading='lazy'>
                                    @endif
                                    <div class='step-text'>
                                        <h3 class='h2 tc-black-soft step-number'>{{ $step['title'] }}</h3>
                                        <p>{{ $step['description'] }}</p>
                                    </div>
                                </article>
                            @endforeach
                        </div>
                    </div>
                @else
                    {{-- Contenido simple sin Aside --}}
                    <div class="service-info content center t-left">
                        @if ($service->body_content)
                            @foreach ($service->body_content as $block)
                                <div class="dynamic-block rich-content m-b-40">
                                    {!! $block['content'] !!}
                                </div>
                            @endforeach
                        @else
                            <p class="h4">No hay contenido disponible para este servicio.</p>
                        @endif
                    </div>
                @endif
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
