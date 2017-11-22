<?php

namespace App\Http\Controllers;

use App\customer;
use App\Product;
use App\Sale;
use App\Supplier;
use App\User;
use Illuminate\Http\Request;

use Auth;
use Validator;

class userController extends Controller
{
    public function show()
    {
        $t_purchase = Product::all()->count();
        $t_sale = Sale::all()->count();
        $t_supplier = Supplier::all()->count();
        $t_customer = customer::all()->count();

        return view('Frontend.home', compact('t_purchase','t_sale','t_supplier','t_customer'));
    }

    public function add(Request $request)
    {
        $rules = [
            'name' => 'required',
            'password' => 'required|min:6'
        ];

        $this->validate($request, $rules);
        
        $user = new User();
        $user->name = $request['name'];
        $user->password = bcrypt($request['password']);

        $user->save();
        $message = 'user added successfully.';

        return back()->with('message',$message);
    }

    public function pagenotfound()
    {
        return view('error.404');
    }

    public function home(Request $request)
    {
        $rules = [
            'name' => 'required',
            'password' => 'required|min:6'
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        if (Auth::attempt(['name' => $request['name'], 'password' => $request['password']])) {
            return redirect()->route('show');
        } else {
            return back()->withInput();
        }
    
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route("/");
    }
}
