<?php

namespace App\Http\Controllers;
use App\Models\Page;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function index()
    {
        // Traemos servicios destacados
        $services = Page::orderBy('order')->get();

        // Traemos la página de Home editable desde CMS
        $homePage = Page::where('slug', 'home')->first();

        return view('pages.home', [
            'services' => $services,
            'homePage' => $homePage,
        ]);
    }
}
