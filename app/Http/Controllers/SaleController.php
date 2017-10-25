<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    public function show()
    {
        $stock = Product::all();
        return view('Frontend.sale.sale',compact('stock'));
    }
}
