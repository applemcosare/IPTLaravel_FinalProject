<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function orders()
    {
        // Retrieve orders with the 'user' relationship
        $orders = Order::with('user')->get();

        // Pass the orders to the view
        return view('order.index', ['orders' => $orders]);
    }

}
