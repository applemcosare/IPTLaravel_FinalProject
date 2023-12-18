<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItems extends Model
{
    use HasFactory;

    protected $fillable = ['OrderID', 'ProductID', 'Quantity', 'Subtotal'];

    public function products()
    {
        return $this->belongsTo(Product::class, 'ProductID')->select('id', 'Name');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id')->select('id', 'FirstName');
    }
}
