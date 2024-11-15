<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use Illuminate\Http\Request;
use App\Http\Controllers\OrderController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('productos', 
ProductoController::class);

// Rutas para el CRUD de productos
Route::get('/productos', [ProductoController::class, 'index']);
Route::get('/productos/{id}', [ProductoController::class, 'show']);
Route::post('/productos', [ProductoController::class, 'store']);
Route::put('/productos/{id}', [ProductoController::class, 'update']);
Route::delete('/productos/{id}', [ProductoController::class, 'destroy']);

// Rutas para el CRUD de órdenes
Route::get('ordens', [OrderController::class, 'index']);         // Obtener todas las órdenes
Route::post('ordens', [OrderController::class, 'store']);        // Crear una nueva orden
Route::get('ordens/{id}', [OrderController::class, 'show']);     // Obtener una orden específica
Route::put('ordens/{id}', [OrderController::class, 'update']);   // Actualizar una orden específica
Route::delete('ordens/{id}', [OrderController::class, 'destroy']); // Eliminar una orden específica