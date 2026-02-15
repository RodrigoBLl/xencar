@extends('layouts.app')

@section('title', $post->seo_title ?? $post->title . ' | Blog Xencar')
@section('description', $post->seo_description ?? $post->excerpt)
@if ($post->seo_image)
    @section('image', asset('storage/' . $post->seo_image))
@elseif($post->image)
    @section('image', asset('storage/' . $post->image))
@endif

@section('content')
    <main id="page-content">

        {{-- Hero Section --}}
        <section class="top-title tc-white c-black">
            <div class="block-box-bg hero"
                style="background-image: url('{{ $post->image ? asset('storage/' . $post->image) : asset('assets/images/random/' . rand(1, 11) . '.jpg') }}'); background-size: cover; background-position: center;">
                <div class="bg-overlay top-title-grad"></div>
                <div class="wrapper ai-center jc-center h-40vh">
                    <div class="w-80 p-20-30 small-w-100 t-center">
                        <div class="meta m-b-20" style="opacity: 0.9;">
                            <span class="badge"
                                style="background: rgba(255,255,255,0.2); padding: 5px 15px; border-radius: 20px;">
                                {{ $post->category->name ?? 'General' }}
                            </span>
                            <span
                                class="m-l-10">{{ $post->published_at ? $post->published_at->format('d M, Y') : '' }}</span>
                        </div>
                        <h1 class="h1 rel top-title-h">{{ $post->title }}</h1>
                    </div>
                </div>
            </div>
        </section>

        {{-- Post Content --}}
        <section class="section-padding">
            <div class="block-content">
                <div class="content center w-70 small-w-100" style="max-width: 800px; margin: 0 auto;">

                    {{-- Breadcrumbs --}}
                    <div class="breadcrumbs m-b-40 c-gray">
                        <a href="{{ route('home') }}">Inicio</a> /
                        <a href="{{ route('blog.index') }}">Blog</a> /
                        <span>{{ $post->title }}</span>
                    </div>

                    {{-- Content --}}
                    <article class="rich-content">
                        @if ($post->excerpt && !$post->image)
                            <p class="lead m-b-30" style="font-size: 1.25rem; font-weight: 300; line-height: 1.6;">
                                {{ $post->excerpt }}
                            </p>
                        @endif

                        <div class="post-body">
                            {!! $post->content !!}
                        </div>
                    </article>

                    {{-- Share & Navigation --}}
                    <div class="post-footer m-t-60 p-t-40" style="border-top: 1px solid #eee;">
                        <div class="d-flex jc-between ai-center small-d-block">
                            <a href="{{ route('blog.index') }}" class="btn-link c-red">← Volver al Blog</a>

                            {{-- Simple Share --}}
                            <div class="share-links small-m-t-20">
                                <span class="c-gray m-r-10">Compartir:</span>
                                <a href="https://www.facebook.com/sharer/sharer.php?u={{ request()->fullUrl() }}"
                                    target="_blank" class="c-black m-r-10">FB</a>
                                <a href="https://twitter.com/intent/tweet?url={{ request()->fullUrl() }}&text={{ urlencode($post->title) }}"
                                    target="_blank" class="c-black m-r-10">TW</a>
                                <a href="https://wa.me/?text={{ urlencode($post->title . ' ' . request()->fullUrl()) }}"
                                    target="_blank" class="c-black">WA</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main>

    <style>
        .rich-content img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
            margin: 20px 0;
        }

        .rich-content h2 {
            margin-top: 40px;
            margin-bottom: 20px;
            font-size: 1.8rem;
        }

        .rich-content h3 {
            margin-top: 30px;
            margin-bottom: 15px;
            font-size: 1.5rem;
        }

        .rich-content p {
            margin-bottom: 20px;
            line-height: 1.8;
            font-size: 1.1rem;
            color: #444;
        }

        .rich-content ul,
        .rich-content ol {
            margin-bottom: 20px;
            padding-left: 20px;
        }

        .rich-content li {
            margin-bottom: 10px;
        }

        .rich-content blockquote {
            border-left: 4px solid #e53935;
            padding: 15px 20px;
            background: #f9f9f9;
            font-style: italic;
            margin: 30px 0;
        }
    </style>
@endsection
