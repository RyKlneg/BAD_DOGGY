<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    //
    public function store(Request $request)
    {
        // Validación mínima para testing
        $validator = Validator::make($request->all(), [
            'customer_name' => 'required',
            'customer_phone' => 'required',
            'total_amount' => 'required|numeric',
            'products' => 'required|array'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Error de validación',
                'errors' => $validator->errors(),
                'received_data' => $request->all() // Para ver qué llega
            ], 422);
        }

        // Crear pedido sin validación estricta
        $order = Order::create([
            'order_number' => 'BD' . time() . rand(1000, 9999),
            'customer_name' => $request->customer_name,
            'customer_phone' => $request->customer_phone,
            'customer_notes' => $request->customer_notes,
            'total_amount' => $request->total_amount,
            'products' => $request->products,
            'status' => 'pending'
        ]);

        return response()->json([
            'success' => true,
            'order_number' => $order->order_number,
            'message' => 'Pedido creado exitosamente'
        ]);
    }

    public function show($id){
        $order = Order::findOrFail($id);

        return response()->json([
            'success' => true,
            'order' => $order
        ]);
    }

    public function updateStatus(Request $request, $id){
        $validator = Validator::make($request->all(), [
            'status' => 'required|in:pending,confirmed,preparing,ready,completed,cancelled',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Error de validación',
                'errors' => $validator->errors()
            ], 422);
        }

        $order = Order::findOrFail($id);
        $order->update(['status' => $request->status]);

        return response()->json([
            'success' => true,
            'message' => 'Estado actualizado correctamente',
            'order' => $order
        ]);
    }
}
