<?php

namespace App\Http\Controllers;

use App\Models\OrderItems;
use Illuminate\Http\Request;

class OrderItemsController extends Controller
{
    public function orderitems()
    {
        $orderitems = OrderItems::with('user')->get();

        return view('OrderItems.index', ['orderitems' => $orderitems]);
    }
}

