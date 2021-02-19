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

}
