<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Customer;

class CustomersController extends Controller
{

    public function index()
    {
        $customers = Customer::all();
        //dd($customers);
        //$customers =
        return view('internals.customers',array('customers' => $customers));
    }
    public function store()
    {
        $customer = new Customer();
        $customer->name = request('name');
        $customer->save();

//back()
        //redirect()->back();

     //redirect()->back()->with('success', 'New user is added succexfully.');
        return redirect()->back()->with('success', 'New user is added succexfully.');
    }

}
