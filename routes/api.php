<?php

use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

Route::get('/productos', [ProductoController::class, 'index']); // Obtener todos los productos
Route::post('/productos', [ProductoController::class, 'store']); // Crear un nuevo producto
Route::get('/productos/{id}', [ProductoController::class, 'show']); // Obtener un producto específico
Route::put('/productos/{id}', [ProductoController::class, 'update']); // Actualizar un producto
Route::delete('/productos/{id}', [ProductoController::class, 'destroy']); // Eliminar un producto


