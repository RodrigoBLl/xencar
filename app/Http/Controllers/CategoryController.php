<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show($slug)
    {
        $category = \App\Models\Category::where('slug', $slug)
            ->where('is_active', true)
            ->firstOrFail();

        // Obtener servicios/posts activos de esta categoría
        $posts = $category->services()
            ->where('is_active', true)
            ->orderBy('published_at', 'desc')
            ->paginate(10);

        // Si la categoría es "Blog", usamos la vista de blog
        if ($slug === 'blog') {
            return view('blog.index', compact('category', 'posts'));
        }

        // Para otras categorías (Marketing, etc), podemos usar una vista genérica o la misma lista
        // Por ahora reusamos blog.index pero podríamos tener pages.category
        return view('blog.index', compact('category', 'posts'));
    }
}
