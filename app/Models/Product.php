<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded =[];

    protected $fillable = [
        'Name',
        'Description',
        'Price',
        'StockQuantity',
    ];

    public function orders()
    {
        return $this->hasMany(Order::class, 'products_id');
    }
    public function order_items()
    {
        return $this->hasMany(OrderItem::class, 'OrderID');
    }

}
