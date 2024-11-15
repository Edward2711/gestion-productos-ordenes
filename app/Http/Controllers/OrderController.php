<?php

namespace App\Http\Controllers;

use App\Models\Orden;
use Illuminate\Http\Request;
use App\Exceptions\OrdenNotFoundException;
use Exception;

class OrderController extends Controller
{
    // Crear una orden
    public function store(Request $request)
    {
        $order = Orden::create([
            'user_id' => $request->user_id,
            'status' => $request->status,
            'total_price' => $request->total_price,
        ]);

        return response()->json($order, 201);
    }

    // Obtener todas las órdenes
    public function index()
    {
        $orders = Orden::all();
        return response()->json($orders);
    }

    // Obtener una orden por ID
    public function show($id)
    {
        try {
            $orden = Orden::findOrFail($id);
            return response()->json($orden);
        } catch (Exception $e) {
            throw new OrdenNotFoundException();
        }
    }

    // Actualizar una orden
    public function update(Request $request, $id)
    {
        try {
            $orden = Orden::findOrFail($id);
            $orden->update($request->all());
            return response()->json($orden);
        } catch (Exception $e) {
            throw new OrdenNotFoundException();
        }
    }

    // Eliminar una orden
    public function destroy($id)
    {
        try {
            $orden = Orden::findOrFail($id);
            $orden->delete();
            return response()->json(['message' => 'Orden eliminada correctamente.']);
        } catch (Exception $e) {
            throw new OrdenNotFoundException();
        }
    }
}
