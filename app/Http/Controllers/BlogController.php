<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $posts = \App\Models\Post::where('is_published', true)
            ->orderBy('published_at', 'desc')
            ->paginate(10);

        return view('blog.index', compact('posts'));
    }

    public function show($slug)
    {
        $post = \App\Models\Post::where('slug', $slug)
            ->where('is_published', true)
            ->with('category')
            ->firstOrFail();

        return view('blog.show', compact('post'));
    }
}
