<?php

namespace App\Http\Controllers;

use App\Models\Service;

class ServiceController extends Controller
{
    public function show($slug)
    {
        // 1. Buscar el servicio por slug y que esté activo
        $service = Service::where('slug', $slug)
            ->where('is_active', true)
            ->firstOrFail();

        // 2. Determinar la vista a cargar
        // Intentamos cargar una vista específica basada en el slug (ej: pages.software)
        // Si no existe, podríamos caer en una plantilla genérica (futuro)
        $viewName = 'pages.'.$slug;

        if (! view()->exists($viewName)) {
            // Si no existe vista específica, usar la plantilla genérica
            $viewName = 'pages.template';
        }

        if (! view()->exists($viewName)) {
            // Si no existe vista específica, usar la plantilla genérica
            $viewName = 'pages.template';
        }

        if (! view()->exists($viewName)) {
            abort(404, "Vista no encontrada para el servicio: {$slug}");
        }

        // 3. Retornar la vista con los datos del servicio
        return view($viewName, compact('service'));
    }
}
