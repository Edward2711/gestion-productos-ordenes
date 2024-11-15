<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * Una lista de las excepciones que no deben ser reportadas.
     *
     * @var array
     */
    protected $dontReport = [
        \Illuminate\Auth\AuthenticationException::class,
        \Illuminate\Validation\ValidationException::class,
        \Illuminate\Database\Eloquent\ModelNotFoundException::class,
        \Illuminate\Auth\Access\AuthorizationException::class,
        \Symfony\Component\HttpKernel\Exception\HttpException::class,
        \Illuminate\Database\Eloquent\MassAssignmentException::class,
        \Illuminate\Http\Exceptions\PostTooLargeException::class,
    ];

    /**
     * Una lista de las entradas que nunca deben mostrarse en logs.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Registra las funciones para manejar excepciones.
     */
    public function register()
    {
        $this->renderable(function (Throwable $e, $request) {
            return response()->json([
                'error' => 'Error del servidor',
                'message' => $e->getMessage(), // Puedes personalizar el mensaje
            ], 500);
        });
    }
}
