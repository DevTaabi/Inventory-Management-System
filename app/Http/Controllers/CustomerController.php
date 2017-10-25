<?php

namespace App\Http\Controllers;

use App\customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function show_cus()
    {
        $customers = customer::all();
        $cus = null;
        return view('Frontend.customers.customers',compact('customers','cus'));
    }

    public function add_customer(Request $request)
    {
        $this->validate($request,[
            'customer_name' => 'required',
            'phone_number' => 'required',
            'address' => 'required',
            'Total_Amount' => 'required',
            'current_pay' => 'required'
        ]);
        $customer = new customer();
        $customer->customer_name = $request['customer_name'];
        $customer->phone_number = $request['phone_number'];
        $customer->address = $request['address'];
        $customer->Total_Amount = $request['Total_Amount'];
        $customer->current_pay = $request['current_pay'];
        $customer->remaining_amount= $request['Total_Amount']-$request['current_pay'];
        $customer->save();
        $message = 'Customer added successfully.';
        return redirect()->back()->with('message',$message);
    }

    public function updatecus(Request $request,$id)
    {
        $this->validate($request,[
            'customer_name' => 'required',
            'phone_number' => 'required',
            'address' => 'required',
            'Total_Amount' => 'required',
            'current_pay' => 'required'
        ]);

        $update_cus = customer::where('id',$id)->first();
        $update_cus->customer_name = $request['customer_name'];
        $update_cus->phone_number = $request['phone_number'];
        $update_cus->address = $request['address'];
        $update_cus->Total_Amount = $request['Total_Amount'];
        $update_cus->current_pay = $request['current_pay'];
        $update_cus->remaining_amount= $request['Total_Amount']-$request['current_pay'];
        $update_cus->save();
        $message = 'customer updated  successfully.';
        return redirect()->back()->with('message',$message);

    }

    public function editcus($id)
    {
        $customers = customer::all();
        $cus = customer::where('id',$id)->first();
        return view('Frontend.customers.customers',compact('customers','cus'));
    }

    public function deletecus($id)
    {
        $cus = customer::where('id',$id)->first();
        $cus->delete();
        $message = "Customer deleted successfully";
        return redirect()->back()->with('message',$message);

    }
}
