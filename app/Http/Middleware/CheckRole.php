<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Controleer of de ingelogde gebruiker
     * de juiste rol heeft.
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Controleer of de gebruiker ingelogd is
        // en de rol Magazijnmedewerker heeft.
        if (!auth()->check() || auth()->user()->role !== 'Magazijnmedewerker') {
            abort(403);
        }

        // Gebruiker heeft de juiste rol.
        return $next($request);
    }
}