<?php
// app/Http/Controllers/Admin/OrderController.php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::orderBy('created_at', 'desc')->paginate(10);
        
        $totalOrders = Order::count();
        $pendingOrders = Order::where('status', 'pending')->count();
        $completedOrders = Order::where('status', 'completed')->count();
        $cancelledOrders = Order::where('status', 'cancelled')->count();

        return view('admin.orders', compact(
            'orders', 
            'totalOrders', 
            'pendingOrders', 
            'completedOrders', 
            'cancelledOrders'
        ));
    }

    public function show($id)
    {
        $order = Order::findOrFail($id);
        
        return response()->json([
            'success' => true,
            'order' => $order
        ]);
    }

    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:pending,confirmed,preparing,ready,completed,cancelled'
        ]);

        $order = Order::findOrFail($id);
        $order->update(['status' => $request->status]);

        return redirect()->route('admin.orders.index')
            ->with('success', 'Estado del pedido actualizado correctamente');
    }
}
