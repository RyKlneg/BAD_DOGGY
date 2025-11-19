<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'order_number',
        'customer_name',
        'customer_phone',
        'customer_notes',
        'total_amount',
        'products',
        'status'
    ];

    protected $casts = [
        'products' => 'array',
        'total_amount' => 'decimal:2'
    ];

    /**
     * Generar número de pedido único
     */
    public static function generateOrderNumber()
    {
        $prefix = 'BD';
        $timestamp = now()->format('YmdHis');
        $random = rand(1000, 9999);
        
        return $prefix . $timestamp . $random;
    }
}
