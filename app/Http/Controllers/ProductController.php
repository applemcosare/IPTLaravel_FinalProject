<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product(){

        $product = Product::orderBy('id')->get();

        return view('products.index',['products' => $product]);
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request){
        $request->validate([
            'Name'          => 'required',
            'Description'   => 'required',
            'Price'         => 'required',
            'StockQuantity' => 'required',
        ]);

        Product::create([
            'Name'          => $request->Name,
            'Description'   => $request->Description,
            'Price'         => $request->Price,
            'StockQuantity' => $request->StockQuantity,
        ]);

        return redirect('/products')->with('message','A new product has been added');
    }

}
