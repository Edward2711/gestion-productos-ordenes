<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        /*'productos', // Añade la ruta aquí
        'api/*',
        'productos/*'*/
        '*',  // Esto desactivará la protección CSRF para todas las rutas (solo en desarrollo)
    ];
}
