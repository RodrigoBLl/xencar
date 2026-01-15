<?php

namespace App\Http\Controllers;
use App\Models\Page;
use Illuminate\Http\Request;

class PaginasWebController extends Controller
{
   public function index()
    {
        // Traemos servicios destacados
        $services = Page::orderBy('order')->get();

        // Traemos la página de Home editable desde CMS
        $Page = Page::where('slug', 'paginas-web')->first();

        return view('pages.paginas-web', [
            'services' => $services,
            'Page' => $Page,
        ]);
    }
}
