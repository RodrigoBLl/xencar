<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        Log::info('--- Contact Form Submission Attempt ---');

        // --- CAPAS DE SEGURIDAD ---

        // A. Honeypot (Trampa para bots)
        if ($request->filled('username')) {
            Log::warning('Blocked by Honeypot.');

            return redirect()->route('success');
        }

        // B. Bloqueo de Duplicados (Sesión) — usa time() para evitar problemas de serialización
        $lastSubmission = session('last_contact_submission');
        if ($lastSubmission) {
            // Convertir Carbon (sesiones viejas) a timestamp si es necesario
            $lastTimestamp = $lastSubmission instanceof \Illuminate\Support\Carbon ? $lastSubmission->timestamp : (int) $lastSubmission;
            if ((time() - $lastTimestamp) < 120) {
                Log::info('Blocked by Session Flood Check.');

                return redirect()->back()->withErrors(['msg' => 'Por favor espere unos segundos antes de enviar otro mensaje.']);
            }
        }

        // C. Validación de reCAPTCHA v3 (modo tolerante en desarrollo)
        $recaptcha_token = $request->input('recaptcha_token');
        if ($recaptcha_token && env('RECAPTCHA_SECRET_KEY')) {
            try {
                $response = \Illuminate\Support\Facades\Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
                    'secret' => env('RECAPTCHA_SECRET_KEY'),
                    'response' => $recaptcha_token,
                    'remoteip' => $request->ip(),
                ]);
                $result = $response->json();
                if (! ($result['success'] ?? false) || ($result['score'] ?? 0) < 0.5) {
                    Log::warning('Suspicious reCAPTCHA activity:', $result);
                    // En desarrollo no bloqueamos, solo logueamos
                }
            } catch (\Exception $e) {
                Log::warning('reCAPTCHA verification failed: '.$e->getMessage());
            }
        }

        // 1. Validar los datos reales
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'phone' => 'nullable|string|max:20',
            'email' => 'required|email|max:255',
            'project' => 'nullable|array',
            'price' => 'nullable|string',
            'contact' => 'nullable|string',
            'time' => 'nullable|string',
            'timezone' => 'nullable|string',
            'comments' => 'nullable|string',
        ]);

        // 2. Construcción del messageBody
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
        $lead = Lead::create([
            'first_name' => $validated['name'],
            'last_name' => $validated['lastname'],
            'email' => $validated['email'],
            'phone' => $validated['phone'] ?? null,
            'message' => $messageBody,
            'source_page' => 'contacto',
            'form_type' => 'contact_wizard',
            'status' => 'new',
            'budget' => $validated['price'] ?? null,
            'project_type' => $validated['project'] ?? null,
            'contact_preference' => $validated['contact'] ?? null,
            'time_preference' => $validated['time'] ?? null,
            'timezone' => $validated['timezone'] ?? null,
        ]);

        Log::info('Lead Created ID: '.$lead->id);

        // 4. Registrar tiempo en sesión (como Unix timestamp) y redireccionar
        session(['last_contact_submission' => time()]);

        return redirect()->route('success');
    }
}
