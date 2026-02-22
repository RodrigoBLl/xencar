@extends('layouts.app')

@section('title', 'Página no encontrada | Xencar')
@section('description', 'La página que buscas no existe o fue movida.')

@section('content')
    <main id="page-content">
        <section class="error-page"
            style="min-height: 100vh; display: flex; align-items: center; justify-content: center; position: relative; overflow: hidden; background: #0a0a0a;">

            {{-- Animated Background --}}
            <div class="error-bg-pattern"></div>

            <div class="error-container" style="text-align: center; position: relative; z-index: 2; padding: 40px;">

                {{-- Glitch 404 Number --}}
                <div class="error-code" data-text="404">404</div>

                <h1 class="error-title">Página no encontrada</h1>
                <p class="error-message">Lo sentimos, la página que buscas no existe, fue movida o está temporalmente fuera
                    de servicio.</p>

                <div class="error-actions">
                    <a href="{{ route('home') }}" class="error-btn primary">
                        <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24" style="vertical-align: middle; margin-right: 8px;">
                            <path
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-4 0a1 1 0 01-1-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 01-1 1h-2z" />
                        </svg>
                        Ir al Inicio
                    </a>
                    <a href="{{ route('contact') }}" class="error-btn secondary">
                        Contáctanos
                    </a>
                </div>

                <p class="error-hint">
                    ¿Buscabas un servicio? Explora nuestro
                    <a href="{{ route('category.show', 'blog') }}" class="error-link">Blog</a>
                    o revisa nuestros
                    <a href="{{ route('home') }}#servicios" class="error-link">Servicios</a>.
                </p>
            </div>
        </section>
    </main>

    <style>
        /* ── Background Pattern ── */
        .error-bg-pattern {
            position: absolute;
            inset: 0;
            background:
                radial-gradient(circle at 20% 50%, rgba(229, 57, 53, 0.08) 0%, transparent 50%),
                radial-gradient(circle at 80% 50%, rgba(229, 57, 53, 0.05) 0%, transparent 50%);
            z-index: 1;
        }

        .error-bg-pattern::before {
            content: '';
            position: absolute;
            inset: 0;
            background-image:
                linear-gradient(rgba(255, 255, 255, 0.02) 1px, transparent 1px),
                linear-gradient(90deg, rgba(255, 255, 255, 0.02) 1px, transparent 1px);
            background-size: 60px 60px;
            animation: gridMove 20s linear infinite;
        }

        @keyframes gridMove {
            0% {
                transform: translate(0, 0);
            }

            100% {
                transform: translate(60px, 60px);
            }
        }

        /* ── 404 Number ── */
        .error-code {
            font-size: clamp(8rem, 20vw, 14rem);
            font-weight: 900;
            letter-spacing: -5px;
            line-height: 1;
            margin-bottom: 20px;
            color: transparent;
            background: linear-gradient(135deg, #e53935, #ff6f61, #e53935);
            background-size: 200% 200%;
            -webkit-background-clip: text;
            background-clip: text;
            animation: gradientShift 4s ease infinite;
            position: relative;
            user-select: none;
        }

        .error-code::before,
        .error-code::after {
            content: attr(data-text);
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #e53935, #ff6f61);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .error-code::before {
            animation: glitch1 3s infinite;
            clip-path: polygon(0 0, 100% 0, 100% 33%, 0 33%);
        }

        .error-code::after {
            animation: glitch2 3s infinite;
            clip-path: polygon(0 67%, 100% 67%, 100% 100%, 0 100%);
        }

        @keyframes gradientShift {

            0%,
            100% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }
        }

        @keyframes glitch1 {

            0%,
            90%,
            100% {
                transform: translate(0);
            }

            92% {
                transform: translate(3px, -2px);
            }

            94% {
                transform: translate(-3px, 2px);
            }

            96% {
                transform: translate(2px, 1px);
            }
        }

        @keyframes glitch2 {

            0%,
            90%,
            100% {
                transform: translate(0);
            }

            91% {
                transform: translate(-2px, 1px);
            }

            93% {
                transform: translate(3px, -1px);
            }

            95% {
                transform: translate(-1px, 2px);
            }
        }

        /* ── Title ── */
        .error-title {
            font-size: clamp(1.5rem, 3vw, 2.2rem);
            font-weight: 700;
            color: #fff;
            margin-bottom: 16px;
            letter-spacing: -0.5px;
        }

        /* ── Message ── */
        .error-message {
            font-size: 1.1rem;
            color: rgba(255, 255, 255, 0.5);
            max-width: 500px;
            margin: 0 auto 40px;
            line-height: 1.6;
        }

        /* ── Buttons ── */
        .error-actions {
            display: flex;
            gap: 16px;
            justify-content: center;
            flex-wrap: wrap;
            margin-bottom: 40px;
        }

        .error-btn {
            display: inline-flex;
            align-items: center;
            padding: 14px 32px;
            border-radius: 50px;
            font-weight: 600;
            font-size: 1rem;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .error-btn.primary {
            background: #e53935;
            color: #fff;
            box-shadow: 0 4px 20px rgba(229, 57, 53, 0.4);
        }

        .error-btn.primary:hover {
            background: #c62828;
            transform: translateY(-3px);
            box-shadow: 0 8px 30px rgba(229, 57, 53, 0.5);
        }

        .error-btn.secondary {
            background: transparent;
            color: rgba(255, 255, 255, 0.7);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .error-btn.secondary:hover {
            color: #fff;
            border-color: rgba(255, 255, 255, 0.5);
            transform: translateY(-3px);
            background: rgba(255, 255, 255, 0.05);
        }

        /* ── Hint ── */
        .error-hint {
            font-size: 0.9rem;
            color: rgba(255, 255, 255, 0.35);
        }

        .error-link {
            color: #e53935;
            text-decoration: none;
            font-weight: 600;
            transition: color 0.2s ease;
        }

        .error-link:hover {
            color: #ff6f61;
            text-decoration: underline;
        }

        /* ── Responsive ── */
        @media (max-width: 768px) {
            .error-container {
                padding: 20px !important;
            }

            .error-actions {
                flex-direction: column;
                align-items: center;
            }

            .error-btn {
                width: 100%;
                max-width: 280px;
                justify-content: center;
            }
        }
    </style>
@endsection
