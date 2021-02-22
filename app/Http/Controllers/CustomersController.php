<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Customer;

class CustomersController extends Controller
{

    public function index()
    {
        $activecustomers = Customer::where('status','1')->get();
        $inactivecustomers = Customer::where('status','0')->get();
        return view('internals.customers',compact('activecustomers','inactivecustomers'));
    }
    public function store()
    {
        /*
            Stand Out Parts.
            .....................
            request()->validate(['name'=>'required|min:3']);
            redirect()->back()->with('success', 'New user is added succexfully.');
        */
        request()->validate(['name'=>'required|min:3','email'=>'required|email']);
        $customer = new Customer();
        $customer->name = request('name');
        $customer->email = request('email');
        $customer->status = request('status');
        $customer->save();
        //back()
        //redirect()->back();
        //redirect()->back()->with('success', 'New user is added succexfully.');
        return redirect()->back()->with('success', 'New user is added succexfully.');
    }

}
