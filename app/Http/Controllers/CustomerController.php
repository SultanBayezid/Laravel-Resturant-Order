<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){

        $customers = User::where('user_type', 'customer')->latest()->get();
        return view('backend.customers.list', compact('customers'));
  
      }
}
