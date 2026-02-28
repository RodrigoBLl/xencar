<?php

namespace App\Http\Controllers;

use App\Models\Service;

class ServiceController extends Controller
{
    public function show($category_slug, $service_slug)
    {
        // 1. Validar Categoría
        $category = \App\Models\Category::where('slug', $category_slug)
            ->where('is_active', true)
            ->firstOrFail();

        // 2. Buscar el servicio/post dentro de esa categoría
        $service = Service::where('slug', $service_slug)
            ->where('category_id', $category->id)
            ->where('is_active', true)
            ->firstOrFail();

        // 3. Determinar vista
        // Si es categoría "Blog", usar vista de post
        if ($category->slug === 'blog') {
             return view('blog.show', ['post' => $service]);
        }

        // Para servicios/páginas, siempre usar template dinámico (contenido editable desde Filament)
        return view('pages.template', compact('service'));
    }
}
