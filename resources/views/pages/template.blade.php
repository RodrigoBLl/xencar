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
                        <p class="h4 m-t-20">{{ $service->name }}</p>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="block-content">
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
