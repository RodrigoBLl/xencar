<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // 1. Validar los datos
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'nullable|string|max:20',
            'email' => 'required|email|max:255',

            // Campos opcionales del formulario wizard
            'project' => 'nullable|array',
            'price' => 'nullable|string',
            'contact' => 'nullable|string',
            'time' => 'nullable|string',
            'timezone' => 'nullable|string',
            'comments' => 'nullable|string',
        ]);

        // 2. Formatear los datos extra en una nota legible
        $messageBody = 'Mensaje original: '.($validated['comments'] ?? 'Sin comentarios')."\n\n";
        $messageBody .= "--- Detalles del Formulario ---\n";

        if (! empty($validated['project'])) {
            $messageBody .= 'Interesado en: '.implode(', ', $validated['project'])."\n";
        }

        if (! empty($validated['price'])) {
            $messageBody .= 'Presupuesto: '.$validated['price']."\n";
        }

        if (! empty($validated['contact'])) {
            $messageBody .= 'Preferencia de contacto: '.$validated['contact']."\n";
        }

        if (! empty($validated['time'])) {
            $messageBody .= 'Mejor horario: '.$validated['time']."\n";
        }

        if (! empty($validated['timezone'])) {
            $messageBody .= 'Zona horaria: '.$validated['timezone']."\n";
        }

        // 3. Crear el Lead
        Lead::create([
            'first_name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'] ?? null,
            'message' => $messageBody,
            'source_page' => 'contacto',
            'form_type' => 'contact_wizard',
            'status' => 'new',
        ]);

        // 4. Redireccionar con éxito
        return redirect()->route('success');
    }
}
