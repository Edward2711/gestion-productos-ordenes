<?php

namespace App\Exceptions;

use Exception;

class OrdenNotFoundException extends Exception
{
    public function render($request)
    {
        return response()->json([
            'error' => 'Orden no encontrada',
            'message' => $this->getMessage() ?: 'La orden solicitada no existe.',
        ], 404);
    }
}

