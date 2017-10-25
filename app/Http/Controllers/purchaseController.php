<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Purchase;
use App\Size;
use App\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class purchaseController extends Controller
{

    public function show_pur()
    {
        $sizee = Size::all();
        $categories = Category::all();
        $suppliers = Supplier::all();
        $stock = Product::all();
        $purchases = Purchase::all();
        $edit_purchase = null;
        return view('Frontend.purchase.purchase',compact('edit_purchase','purchases','sizee','categories','suppliers','stock'));
    }

    public function purchase(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'pur_price' => 'required',
            'supplier_name' => 'required',
            'size'   => 'required',
            'profit'   => 'required',
            'category' => 'required',
            'quantity' => 'required',
        ]);

        $name = $request['name'];
        $pur_price = $request['pur_price'];
        $supplier_name = $request['supplier_name'];
        $size = $request['size'];
        $category = $request['category'];

        $match = Product::where('name', $name)->first();


        if ($match != null)
        {

            //same name item found

            $m_size = $match->size;
            if ($m_size == $size){
                //same size of that item found
                $cat =$match->category;
                if ($cat == $category)
                {
                    //same cat & size of that item found
                    $sup_name = $match->sup_id;
                    if ($sup_name == $supplier_name)
                    {
                        //same size , cat & sup of that item found
                        //update quantity and price
                        $this->update_stock($match,$request);
                        $message = 'Product added successfully.';

                        $this->insert_purchase($request);
                        return redirect()->back()->with('message',$message);

                    } else {
                        $this->add_both($request);
                    }
                }else{$this->add_both($request);}

            }else{$this->add_both($request);}


        }else{
            $message = 'Stock and purchase added successfully.';
            $this->add_both($request);
            return redirect()->back()->with('message',$message);
        }


    }

    public function add_both($request)
    {

        $this->insert_stock($request);
        $this->insert_purchase($request);

    }

    public function insert_purchase($request)
    {
        $purchase = new Purchase();
        $purchase->name = $request['name'];
        $purchase->cost = $request['pur_price'];
        $purchase->sup_id = $request['supplier_name'];
        $purchase->size = $request['size'];
        $purchase->profit = $request['profit'];
        $purchase->category = $request['category'];
        $purchase->quantity = $request['quantity'];
        $saleprice = $request['pur_price']+$request['profit'];
        $purchase->sale_price = $saleprice;
        $purchase->Total_cost = $request['quantity']*$request['pur_price'];
        $purchase->Total_saleprice = $request['quantity']*$saleprice;
        $purchase->Rack_num = $request['Rack_num'];
        $purchase->save();
    }

    public function insert_stock($request)
    {

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

     public function update_stock($match, $request)
    {
        $match->quantity = $match->quantity + $request['quantity'];
        $saleprice = $request['pur_price']+$request['profit'];
        $match->sale_price = $saleprice;
        $match->Total_cost = $request['quantity']*$request['pur_price'];
        $match->Total_saleprice = $request['quantity']*$saleprice;
        $match->cost = $request['pur_price'];

        $match->update();
        
    }

    public function editpur($id)
    {
        $sizee = Size::all();
        $categories = Category::all();
        $suppliers = Supplier::all();
        $stock = Product::all();
        $purchases = Purchase::all();
        $edit_purchase = Purchase::where('id',$id)->first();

        return view('Frontend.purchase.purchase',compact('edit_purchase','purchases','sizee','categories','suppliers','stock'));


    }

    public function update_purchase(Request $request,$id)
    {
        $update_purchase = Purchase::where('id',$id)->first();
        $update_purchase->name = $request['name'];
        $update_purchase->cost = $request['pur_price'];
        $update_purchase->sup_id = $request['supplier_name'];
        $update_purchase->size = $request['size'];
        $update_purchase->profit = $request['profit'];
        $update_purchase->category = $request['category'];
        $update_purchase->quantity = $request['quantity'];
        $saleprice = $request['pur_price']+$request['profit'];
        $update_purchase->sale_price = $saleprice;
        $update_purchase->Total_cost = $request['quantity']*$request['pur_price'];
        $update_purchase->Total_saleprice = $request['quantity']*$saleprice;
        $update_purchase->Rack_num = $request['Rack_num'];
        $update_purchase->update();
        $message = "Purchase Updated successfully";
        return redirect()->back()->with("message",$message);
    }

    public function deletepur($id)
    {
        $del = Purchase::where('id',$id)->first();
        $del->delete();
        $message = "Purchase deleted successfully!";
        return redirect()->back()->with('message',$message);
    }
}

