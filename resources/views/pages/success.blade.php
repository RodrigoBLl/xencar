@extends('layouts.app')

@section('content')
    <main id="page-content">

        <section class="top-title tc-white c-black">
            <div class="block-box-bg hero">
                <div class="bg-overlay top-title-grad"></div>
                <img class="block-box-full--img" src="{{ asset('assets/images/random/3.jpg') }}">
                <div class="wrapper ai-center jc-center h-40vh">
                    <div class="w-80 p-20-30 small-w-100 t-center">
                        <h1 class="h1 rel top-title-h">¡Mensaje enviado con exito!</h1>
                        <p class="h4 m-t-20">¡Hola! Gracias por su interés en nuestros servicios.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="c-silver">
            <div class="block-content center">
                <p class="h3 t-center">En breve nos comunicaremos con usted.</p>
            </div>
        </section>
    </main>
@endsection
