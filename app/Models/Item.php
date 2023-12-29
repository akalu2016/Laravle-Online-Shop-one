<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    public static function validate($request)
    {
        $request->validate([
            "price" => "required|numeric|gt:0",
            "quantity" => "required|numeric|gt:0",
            "product_id" => "required|numeric|products,id",
            "order_id" => "required|numeric|orders,id",
           
        ]);
        
}
public function order()
{
        return $this->belongsTo(Order::class);
}
public function product()
{
        return $this->belongsTo(Product::class);
}
}
