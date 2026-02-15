@extends('layouts.app')

@section('title', 'Blog | Xencar - Artículos y Noticias')
@section('description', 'Lee nuestros últimos artículos sobre tecnología, diseño web y marketing digital.')

@section('content')
    <main id="page-content">

        {{-- Hero Section --}}
        <section class="top-title tc-white c-black rel">
            <div class="block-box-bg hero"
                style="background-image: url('{{ asset('assets/images/random/' . rand(1, 11) . '.jpg') }}'); background-size: cover; background-position: center; height: 50vh;">
                <div class="bg-overlay top-title-grad"
                    style="background: linear-gradient(0deg, rgba(0,0,0,0.8) 0%, rgba(0,0,0,0.3) 100%);"></div>
                <div class="wrapper ai-center jc-center h-100 rel">
                    <div class="w-80 p-20-30 small-w-100 t-center animation-fade-up">
                        <span class="badge-pill m-b-20 d-inline-block">Blog & Novedades</span>
                        <h1 class="h1 top-title-h m-b-10">{{ $category->name ?? 'Nuestro Blog' }}</h1>
                        <p class="h4" style="opacity: 0.9;">Explora las últimas tendencias en tecnología y marketing</p>
                    </div>
                </div>
            </div>
        </section>

        {{-- Blog Grid --}}
        <section class="section-padding bg-light">
            <div class="block-content">
                <div class="content center w-90">
                    @if ($posts->count() > 0)
                        <div class="blog-grid">
                            @foreach ($posts as $post)
                                <article class="blog-card animation-fade-up"
                                    style="animation-delay: {{ $loop->index * 0.1 }}s;">
                                    <a href="{{ route('service.show', ['category' => $post->category->slug ?? 'blog', 'service' => $post->slug]) }}"
                                        class="d-block card-link">
                                        <div class="blog-image rel">
                                            @if ($post->hero_image)
                                                <img src="{{ asset('storage/' . $post->hero_image) }}"
                                                    alt="{{ $post->name }}" loading="lazy">
                                            @else
                                                <div class="no-image">
                                                    <span>Sin imagen</span>
                                                </div>
                                            @endif
                                            <span class="category-badge">{{ $post->category->name ?? 'Artículo' }}</span>
                                        </div>
                                        <div class="blog-content">
                                            <div class="meta">
                                                <span
                                                    class="date">{{ $post->published_at ? $post->published_at->format('d M, Y') : 'Reciente' }}</span>
                                            </div>
                                            <h2 class="h4 title">{{ $post->name }}</h2>
                                            <p class="excerpt">{{ $post->short_description }}</p>
                                            <div class="read-more">
                                                <span>Leer artículo</span>
                                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                                    class="arrow-icon">
                                                    <path d="M5 12H19M19 12L12 5M19 12L12 19" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </div>
                                        </div>
                                    </a>
                                </article>
                            @endforeach
                        </div>

                        <div class="pagination-wrapper m-t-60">
                            {{ $posts->links() }}
                        </div>
                    @else
                        <div class="empty-state t-center p-60">
                            <div class="icon m-b-20" style="font-size: 3rem; color: #ccc;">📝</div>
                            <h3 class="h3 c-gray">Aún no hay publicaciones</h3>
                            <p class="c-gray-light">Vuelve pronto para ver nuevo contenido.</p>
                        </div>
                    @endif
                </div>
            </div>
        </section>

    </main>

    <style>
        /* Modern Variables */
        :root {
            --primary-color: #e53935;
            --text-dark: #1a1a1a;
            --text-gray: #666;
            --card-shadow: 0 10px 30px -10px rgba(0, 0, 0, 0.1);
            --card-hover-shadow: 0 20px 40px -10px rgba(0, 0, 0, 0.2);
        }

        .bg-light {
            background-color: #f9f9f9;
        }

        .badge-pill {
            background: rgba(255, 255, 255, 0.2);
            padding: 5px 15px;
            border-radius: 50px;
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            backdrop-filter: blur(5px);
        }

        /* Grid Layout */
        .blog-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 40px;
        }

        /* Card Styles */
        .blog-card {
            background: white;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: var(--card-shadow);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .blog-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--card-hover-shadow);
        }

        .card-link {
            height: 100%;
            display: flex;
            flex-direction: column;
            text-decoration: none;
            color: inherit;
        }

        /* Image & Badge */
        .blog-image {
            height: 240px;
            overflow: hidden;
            background: #f0f0f0;
        }

        .blog-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .blog-card:hover .blog-image img {
            transform: scale(1.1);
        }

        .no-image {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #ccc;
        }

        .category-badge {
            position: absolute;
            top: 20px;
            left: 20px;
            background: white;
            color: var(--text-dark);
            padding: 6px 14px;
            border-radius: 8px;
            font-size: 0.75rem;
            font-weight: 700;
            text-transform: uppercase;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            z-index: 2;
        }

        /* Content */
        .blog-content {
            padding: 30px;
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .meta {
            margin-bottom: 15px;
        }

        .date {
            font-size: 0.85rem;
            color: #888;
            font-weight: 500;
        }

        .title {
            font-size: 1.5rem;
            font-weight: 700;
            line-height: 1.3;
            margin-bottom: 15px;
            color: var(--text-dark);
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .excerpt {
            font-size: 1rem;
            color: var(--text-gray);
            line-height: 1.6;
            margin-bottom: 25px;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
            flex-grow: 1;
        }

        /* Read More Button */
        .read-more {
            display: flex;
            align-items: center;
            font-weight: 700;
            color: var(--primary-color);
            transition: gap 0.3s ease;
            gap: 5px;
        }

        .blog-card:hover .read-more {
            gap: 10px;
        }

        .arrow-icon {
            transition: transform 0.3s ease;
        }

        .blog-card:hover .arrow-icon {
            transform: translateX(5px);
        }

        /* Animation */
        .animation-fade-up {
            opacity: 0;
            transform: translateY(20px);
            animation: fadeUp 0.6s ease forwards;
        }

        @keyframes fadeUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Pagination & Utils */
        .pagination-wrapper {
            display: flex;
            justify-content: center;
        }

        .section-padding {
            padding: 80px 0;
        }

        .h-100 {
            height: 100%;
        }

        @media (max-width: 768px) {
            .blog-grid {
                grid-template-columns: 1fr;
            }

            .hero {
                height: 40vh;
            }

            .blog-content {
                padding: 20px;
            }

            .title {
                font-size: 1.3rem;
            }
        }
    </style>
@endsection
