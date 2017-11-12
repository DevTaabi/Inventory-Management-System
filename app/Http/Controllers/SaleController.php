<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use DB;

class SaleController extends Controller
{
    public function show()
    {
        $stock = Product::all();
        return view('Frontend.sale.sale',compact('stock'));
    }


    public function liveSearch(Request $request)
    {
        $search = $request->id;

        if (is_null($search))
        {
            return view('Frontend.livesearch');
        }
        else
        {
            $posts = Product::where('name','LIKE',"%{$search}%")
                ->get();

            return view('Frontend.livesearchajax')->withPosts($posts);
        }
    }
}

