<?php

namespace App\Http\Controllers;
use App\Models\Order;
use App\Models\Cart;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::latest()->get();
        return view('backend.orders.list', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */

    
     public function store(Request $request)
     {
         // Validate and create a new order
         $order = new Order();
         $order->user_id = auth()->id();
         $order->total_price = $request->input('total_price');
         $order->delivery_address = $request->input('delivery_address');
         $order->contact_number = $request->input('contact_number');
         $order->status = 'pending';
         $order->save();
     
         // Retrieve the user's cart items
         $userId = auth()->id();
         $cartItems = Cart::where('user_id', $userId)->get();
     
         // Attach menu items from the user's cart to the order with quantities
         foreach ($cartItems as $cartItem) {
             $order->menus()->attach($cartItem->menu_id, ['quantity' => $cartItem->quantity]);
         }
     
         // Remove cart items from the user's cart after creating the order
         $cartItems->each->delete();
        return redirect()->route('user.order_history');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
