@extends('layouts.app')

@section('title', 'Software Personalizado - Xencar')
@section('description', 'Software a medida para necesidades específicas.')

@section('content')
    @include('partials.cookies')
    @include('partials.calendly')

    <main id="page-content">

        <section class="top-title tc-white c-black">
            <div class="block-box-bg hero">
                <div class="bg-overlay top-title-grad"></div>
                <img class="block-box-full--img" src="{{ asset('assets/images/random/17.jpg') }}">
                <div class="wrapper ai-center jc-center h-40vh">
                    <div class="w-80 p-20-30 small-w-100 t-center">
                        <h1 class="h1 rel top-title-h">Software personalizado</h1>
                        <p class="h4 m-t-20">Software</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="c-silver">
            <div class="block-content t-center">
                <h3 class="h2 tc-black-soft">El software personalizado es nuestra especialidad</h3>
                <p class="h4">Puede sentirse en paz sabiendo que sabemos lo que hacemos y que nuestro principal objetivo
                    es
                    la innovación</p>
            </div>
        </section>
        <section>
            <div class="block-content center">
                <div class="grid col-3 small-col-1 m-b-0">
                    <p class="span-1">Siempre sugerimos contratar a nuestra firma consultora antes de comenzar cualquier
                        proyecto, de esa manera podríamos ahorrarle decenas de miles de dólares en desarrollo.</p>
                    <p class="h3 span-2 small-span-1">Si necesita algún desarrollo personalizado, complete este formulario y
                        nos comunicaremos con usted lo antes posible.</p>
                </div>
            </div>
        </section>

    </main>
@endsection
