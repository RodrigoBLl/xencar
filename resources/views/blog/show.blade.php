@extends('layouts.app')

@section('title', $post->seo_title ?? $post->name . ' | Blog Xencar')
@section('description', $post->seo_description ?? $post->short_description)
@if ($post->seo_image)
    @section('image', asset('storage/' . $post->seo_image))
@elseif($post->hero_image)
    @section('image', asset('storage/' . $post->hero_image))
@endif

@section('content')
    <main id="page-content">

        {{-- Hero Section --}}
        <section class="top-title tc-white c-black rel">
            <div class="block-box-bg hero"
                style="background-image: url('{{ $post->hero_image ? asset('storage/' . $post->hero_image) : asset('assets/images/random/' . rand(1, 11) . '.jpg') }}'); background-size: cover; background-position: center; height: 60vh;">
                <div class="bg-overlay top-title-grad"
                    style="background: linear-gradient(0deg, rgba(0,0,0,0.8) 0%, rgba(0,0,0,0.3) 100%);"></div>
                <div class="wrapper ai-center jc-center h-100 rel">
                    <div class="w-80 p-20-30 small-w-100 t-center animation-fade-up">
                        <div class="meta m-b-20" style="opacity: 0.9;">
                            <span class="badge-pill m-r-10">
                                {{ $post->category->name ?? 'General' }}
                            </span>
                            <span
                                class="date">{{ $post->published_at ? $post->published_at->format('d M, Y') : '' }}</span>
                        </div>
                        <h1 class="h1 top-title-h" style="font-size: 3rem; line-height: 1.2;">
                            {{ $post->hero_title ?? $post->name }}</h1>
                    </div>
                </div>
            </div>
        </section>

        {{-- Post Content --}}
        <section class="section-padding bg-light">
            <div class="block-content">
                <div class="content center w-60 small-w-90"
                    style="max-width: 800px; margin: 0 auto; background: white; padding: 60px; border-radius: 16px; box-shadow: 0 10px 40px -10px rgba(0,0,0,0.05); margin-top: -100px; position: relative; z-index: 10;">

                    {{-- Breadcrumbs --}}
                    <div class="breadcrumbs m-b-40 c-gray" style="font-size: 0.9rem;">
                        <a href="{{ route('home') }}" class="c-gray hover-red">Inicio</a> /
                        <a href="{{ route('category.show', $post->category->slug ?? 'blog') }}"
                            class="c-gray hover-red">{{ $post->category->name ?? 'Blog' }}</a> /
                        <span style="color: #333; font-weight: 600;">{{ $post->name }}</span>
                    </div>

                    {{-- Content --}}
                    <article class="rich-content">
                        @if ($post->short_description && !$post->hero_image)
                            <p class="lead m-b-40 c-dark"
                                style="font-size: 1.35rem; font-weight: 300; line-height: 1.6; border-bottom: 1px solid #eee; padding-bottom: 30px;">
                                {{ $post->short_description }}
                            </p>
                        @endif

                        <div class="post-body">
                            @if (is_array($post->body_content) || is_object($post->body_content))
                                @foreach ($post->body_content as $block)
                                    <div class="content-block m-b-30">
                                        {!! $block['content'] ?? '' !!}
                                    </div>
                                @endforeach
                            @else
                                {!! $post->body_content !!}
                            @endif
                        </div>
                    </article>

                    {{-- Share & Navigation --}}
                    <div class="post-footer m-t-60 p-t-40" style="border-top: 1px solid #eee;">
                        <div class="d-flex jc-between ai-center small-fw-wrap">
                            <a href="{{ route('category.show', $post->category->slug ?? 'blog') }}"
                                class="btn-link c-red small-m-b-20 btn-back-custom"
                                style="background: transparent; box-shadow: none; padding: 0;">
                                <span class="m-r-5">←</span> Volver a {{ $post->category->name ?? 'Blog' }}
                            </a>

                            {{-- Simple Share --}}
                            <div class="share-links d-flex ai-center">
                                <span class="c-gray m-r-15" style="font-weight: 600; font-size: 0.9rem;">Compartir:</span>

                                <a href="https://www.facebook.com/sharer/sharer.php?u={{ request()->fullUrl() }}"
                                    target="_blank" class="share-icon fb">
                                    <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z" />
                                    </svg>
                                </a>

                                <a href="https://twitter.com/intent/tweet?url={{ request()->fullUrl() }}&text={{ urlencode($post->name) }}"
                                    target="_blank" class="share-icon tw">
                                    <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                                    </svg>
                                </a>

                                <a href="https://wa.me/?text={{ urlencode($post->name . ' ' . request()->fullUrl()) }}"
                                    target="_blank" class="share-icon wa">
                                    <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main>

    <style>
        .badge-pill {
            background: rgba(255, 255, 255, 0.2);
            padding: 5px 15px;
            border-radius: 50px;
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            backdrop-filter: blur(5px);
        }

        .hover-red:hover {
            color: #e53935;
        }

        /* Rich Content Styles */
        .rich-content {
            font-family: 'Inter', sans-serif;
            color: #333;
        }

        .rich-content p {
            margin-bottom: 24px;
            line-height: 1.8;
            font-size: 1.15rem;
            color: #444;
        }

        .rich-content h2 {
            margin-top: 50px;
            margin-bottom: 25px;
            font-size: 2rem;
            font-weight: 700;
            color: #111;
            letter-spacing: -0.5px;
        }

        .rich-content h3 {
            margin-top: 40px;
            margin-bottom: 20px;
            font-size: 1.6rem;
            font-weight: 600;
            color: #222;
        }

        .rich-content img {
            max-width: 100%;
            height: auto;
            border-radius: 12px;
            margin: 30px 0;
            box-shadow: 0 10px 30px -5px rgba(0, 0, 0, 0.1);
        }

        .rich-content blockquote {
            border-left: 4px solid #e53935;
            padding: 20px 30px;
            background: #fdf2f2;
            font-style: italic;
            margin: 40px 0;
            border-radius: 0 8px 8px 0;
            font-size: 1.2rem;
            color: #555;
        }

        .rich-content ul,
        .rich-content ol {
            margin-bottom: 30px;
            padding-left: 20px;
        }

        .rich-content li {
            margin-bottom: 12px;
            padding-left: 10px;
        }

        /* Share Icons */
        .share-icon {
            width: 36px;
            height: 36px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            background: #f5f5f5;
            color: #333;
            margin-right: 10px;
            font-size: 0.8rem;
            font-weight: 700;
            transition: all 0.3s ease;
        }

        .share-icon:hover {
            transform: translateY(-3px);
            color: white;
        }

        .share-icon.fb:hover {
            background: #1877f2;
        }

        .share-icon.tw:hover {
            background: #1da1f2;
        }

        .share-icon.wa:hover {
            background: #25d366;
        }

        /* Custom Back Button Hover */
        .btn-back-custom {
            transition: all 0.3s ease;
            padding: 8px 15px !important;
            border-radius: 20px;
            display: inline-flex;
            align-items: center;
        }

        .btn-back-custom:hover {
            background-color: #000 !important;
            color: #fff !important;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1) !important;
            text-decoration: none;
        }

        @media (max-width: 768px) {
            .content {
                padding: 30px !important;
                width: 90% !important;
                margin-top: -50px !important;
            }

            .h1 {
                font-size: 2rem !important;
            }
        }
    </style>
@endsection
