<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Size;
use App\Supplier;
use Illuminate\Http\Request;

class StockController extends Controller
{
    public function show_stock()
    {
        $sizee = Size::all();
        $categories = Category::all();
        $suppliers = Supplier::all();
        $stock = Product::all();
        $edit_stock = null;
        return view('Frontend.stock.stock',compact('sizee','categories','suppliers','stock','edit_stock'));
    }

    public function add_stock(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'pur_price' => 'required',
            'supplier_name' => 'required',
            'size'   => 'required',
            'profit'   => 'required',
            'category' => 'required',
            'quantity' => 'required',
            'Rack_num' => 'required',
        ]);
        $product = new Product();
        $product->name = strtolower($request['name']);
        $product->cost = $request['pur_price'];
        $product->sup_id = $request['supplier_name'];
        $product->size = $request['size'];
        $product->profit = $request['profit'];
        $product->category = $request['category'];
        $product->quantity = $request['quantity'];
        $saleprice = $request['pur_price']+$request['profit'];
        $product->sale_price = $saleprice;
        $product->Total_cost = $request['quantity']*$request['pur_price'];
        $product->Total_saleprice = $request['quantity']*$saleprice;
        $product->Rack_num = $request['Rack_num'];
        $product->save();
        $message = 'Product added successfully.';
        return redirect()->route('stock')->with('message',$message);
    }

    public function add_size(Request $request)
    {
        $this->validate($request,[
            'size' => 'required'
        ]);
        $size = new Size();
        $size->size = $request['size'];

        $size->save();
        $message = 'Size added successfully.';
        return redirect()->route('stock')->with('message',$message);


    }

    public function add_cat(Request $request)
    {
        $this->validate($request,[
            'category_name' => 'required'
        ]);
        $category = new Category();
        $category->category_name = $request['category_name'];

        $category->save();
        $message = 'Category added successfully.';
        return redirect()->route('stock')->with('message',$message);


    }

    public function search(Request $request)
    {
        $value = $request['value'];
        if ($value != null){
            $stock = Product::all()->take($value);
        }else{
            $stock = Product::all();
        }
        $sizee = Size::all();
        $categories = Category::all();
        $suppliers = Supplier::all();
        $edit_stock = null;
        return view('Frontend..stock.stock',compact('edit_stock','sizee','categories','suppliers','stock'));

    }

    public function search_by_name(Request $request)
    {
        $value = $request['by_name'];
        if ($value != null){
            $stock = Product::all()->where('name',$value);
        }else{
            $stock = Product::all();
        }
        $sizee = Size::all();
        $categories = Category::all();
        $suppliers = Supplier::all();
        $edit_stock = null;
        return view('Frontend.stock.stock',compact('edit_stock','sizee','categories','suppliers','stock'));
    }

    public function edititem($id)
    {
        $edit_stock = Product::all()->where('id',$id)->first();
        $sizee = Size::all();
        $categories = Category::all();
        $suppliers = Supplier::all();
        $stock = Product::all();
        return view('Frontend.stock.stock',compact('sizee','categories','suppliers','edit_stock','stock'));


    }

    public function edit_stock(Request $request,$id)
    {
        $this->validate($request,[
            'name' => 'required',
            'pur_price' => 'required',
            'supplier_name' => 'required',
            'size'   => 'required',
            'profit'   => 'required',
            'category' => 'required',
            'quantity' => 'required',
            'Rack_num' => 'required',
        ]);
        $product = Product::all()->where('id',$id)->first();
        $product->name = strtolower($request['name']);
        $product->pur_price = $request['pur_price'];
        $product->supplier_name = $request['supplier_name'];
        $product->size = $request['size'];
        $product->profit = $request['profit'];
        $product->category = $request['category'];
        $product->quantity = $request['quantity'];
        $saleprice = $request['pur_price']+$request['profit'];
        $product->sale_price = $saleprice;
        $product->Total_price = $request['quantity']*$saleprice;
        $product->Rack_num = $request['Rack_num'];
        $product->update();
        $message = 'Product updated successfully.';
        return redirect()->route('stock')->with('message',$message);
    }

    public function deleteitem($id)
    {
        $stock = Product::all()->where('id',$id)->first();
        $stock->delete();
        return redirect()->route('stock');
    }

    public function manage_cat_size()
    {
        $sizee = Size::all();
        $categories = Category::all();

        return view("Frontend.manage_size_cat",compact('sizee','categories'));
    }
}
