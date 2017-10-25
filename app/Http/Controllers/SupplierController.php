<?php

namespace App\Http\Controllers;

use App\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function show_sup()
    {
        $suppliers = Supplier::all();
        $sup = null;
        return view('Frontend.supplier.suppliers',compact('suppliers','sup'));
    }

    public function add_supplier(Request $request)
    {
        $this->validate($request,[
            'supplier_name' => 'required',
            'phone_number' => 'required',
            'Total_Amount' => 'required',
            'current_pay' => 'required'
        ]);
        $supplier = new Supplier();
        $supplier->supplier_name = $request['supplier_name'];
        $supplier->phone_number = $request['phone_number'];
        $supplier->Total_Amount = $request['Total_Amount'];
        $supplier->current_pay = $request['current_pay'];
        $supplier->remaining_amount= $request['Total_Amount']-$request['current_pay'];
        $supplier->save();
        $message = 'Supplier added successfully.';
        return redirect()->back()->with('message',$message);
    }

    public function updatesup(Request $request,$id)
    {
        $update_sup = Supplier::where('id',$id)->first();
        $update_sup->supplier_name = $request['supplier_name'];
        $update_sup->phone_number = $request['phone_number'];
        $update_sup->Total_Amount = $request['Total_Amount'];
        $update_sup->current_pay = $request['current_pay'];
        $update_sup->remaining_amount= $request['Total_Amount']-$request['current_pay'];
        $update_sup->save();
        $message = 'Supplier updated  successfully.';
        return redirect()->back()->with('message',$message);

    }

    public function editsup($id)
    {
        $suppliers = Supplier::all();
        $sup = Supplier::where('id',$id)->first();
        return view('Frontend.supplier.suppliers',compact('suppliers','sup'));
    }

    public function deletesup($id)
    {
        $sup = Supplier::where('id',$id)->first();
        $sup->delete();
        $message = "Supplier deleted successfully";
        return redirect()->back()->with('message',$message);

    }
}
