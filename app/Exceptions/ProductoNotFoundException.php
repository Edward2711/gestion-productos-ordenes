<?php

namespace App\Exceptions;

use Exception;

class ProductoNotFoundException extends Exception
{
    public function render($request)
    {
        return response()->json([
            'error' => 'Producto no encontrado',
            'message' => $this->getMessage() ?: 'El producto solicitado no existe.',
        ], 404);
    }
}
