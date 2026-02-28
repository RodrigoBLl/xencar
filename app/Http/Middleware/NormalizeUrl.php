<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class NormalizeUrl
{
    /**
     * Normaliza la URL reemplazando caracteres especiales (ñ, acentos)
     * con sus equivalentes ASCII y redirige con 301 si hubo cambios.
     */
    public function handle(Request $request, Closure $next): Response
    {
        $originalPath = $request->getPathInfo();

        // Decodificar URL encoded chars (e.g. %C3%B1 → ñ)
        $decodedPath = urldecode($originalPath);

        // Mapa de caracteres especiales → ASCII
        $replacements = [
            'ñ' => 'n', 'Ñ' => 'N',
            'á' => 'a', 'Á' => 'A',
            'é' => 'e', 'É' => 'E',
            'í' => 'i', 'Í' => 'I',
            'ó' => 'o', 'Ó' => 'O',
            'ú' => 'u', 'Ú' => 'U',
            'ü' => 'u', 'Ü' => 'U',
        ];

        $normalizedPath = str_replace(
            array_keys($replacements),
            array_values($replacements),
            $decodedPath
        );

        // Si la URL cambió, redirigir con 301 (SEO-friendly)
        if ($normalizedPath !== $decodedPath) {
            $query = $request->getQueryString();
            $redirectUrl = $normalizedPath . ($query ? '?' . $query : '');

            return redirect($redirectUrl, 301);
        }

        return $next($request);
    }
}
