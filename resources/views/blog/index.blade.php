@extends('layouts.app')

@section('title', 'Blog | Xencar - Artículos y Noticias')
@section('description', 'Lee nuestros últimos artículos sobre tecnología, diseño web y marketing digital.')

@section('content')
    <main id="page-content">

        {{-- Hero Section --}}
        <section class="top-title tc-white c-black">
            <div class="block-box-bg hero"
                style="background-image: url('{{ asset('assets/images/random/' . rand(1, 11) . '.jpg') }}'); background-size: cover; background-position: center;">
                <div class="bg-overlay top-title-grad"></div>
                <div class="wrapper ai-center jc-center h-40vh">
                    <div class="w-80 p-20-30 small-w-100 t-center">
                        <h1 class="h1 rel top-title-h">Nuestro Blog</h1>
                        <p class="h4 m-t-20">Explora las últimas novedades y consejos digitales</p>
                    </div>
                </div>
            </div>
        </section>

        {{-- Blog Grid --}}
        <section class="section-padding">
            <div class="block-content">
                <div class="content center">
                    @if ($posts->count() > 0)
                        <div class="blog-grid"
                            style="display: grid; grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); gap: 30px;">
                            @foreach ($posts as $post)
                                <article class="blog-card"
                                    style="border: 1px solid #eee; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 6px rgba(0,0,0,0.05); transition: transform 0.3s ease;">
                                    <a href="{{ route('blog.show', $post->slug) }}" class="d-block"
                                        style="text-decoration: none; color: inherit;">
                                        <div class="blog-image" style="height: 200px; overflow: hidden;">
                                            @if ($post->image)
                                                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}"
                                                    style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease;">
                                            @else
                                                <div
                                                    style="width: 100%; height: 100%; background: #f0f0f0; display: flex; align-items: center; justify-content: center; color: #999;">
                                                    <span>Sin imagen</span>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="blog-content p-20" style="padding: 20px;">
                                            <div class="meta m-b-10"
                                                style="font-size: 0.85rem; color: #888; margin-bottom: 10px;">
                                                <span>{{ $post->category->name ?? 'General' }}</span> |
                                                <span>{{ $post->published_at ? $post->published_at->format('d M, Y') : 'Reciente' }}</span>
                                            </div>
                                            <h2 class="h4 m-b-10"
                                                style="font-weight: 600; line-height: 1.4; margin-bottom: 10px;">
                                                {{ $post->title }}</h2>
                                            <p class="small c-gray"
                                                style="display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden; color: #666;">
                                                {{ $post->excerpt }}</p>
                                            <span class="btn-link m-t-20 d-inline-block c-red"
                                                style="margin-top: 20px; color: #e53935;">Leer más →</span>
                                        </div>
                                    </a>
                                </article>
                            @endforeach
                        </div>

                        <div class="pagination m-t-40 t-center" style="margin-top: 40px; text-align: center;">
                            {{ $posts->links() }}
                        </div>
                    @else
                        <div class="t-center p-40">
                            <p class="h4 c-gray">No hay publicaciones disponibles por el momento.</p>
                        </div>
                    @endif
                </div>
            </div>
        </section>

    </main>

    <style>
        .blog-card:hover {
            transform: translateY(-5px);
        }

        .blog-card:hover .blog-image img {
            transform: scale(1.05);
        }

        .section-padding {
            padding: 60px 0;
        }
    </style>
@endsection
