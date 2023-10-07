<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Menu;
use Auth;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateQuantity(Request $request)
    {
        // Validate the request
        $request->validate([
            'cart_item_id' => 'required|exists:carts,id',
            'new_quantity' => 'required|integer|min:0',
        ]);
    
        // Update the cart item quantity
        $cartItem = Cart::find($request->input('cart_item_id'));
    
        if (!$cartItem) {
            return response()->json(['message' => 'Cart item not found'], 404);
        }
    
        // Get the item name from the cart item
        $itemName = $cartItem->menu->name;
    
        $cartItem->quantity = $request->input('new_quantity');
        $cartItem->save();
    
        // Recalculate the total price for the updated cart
        $totalPrice = $this->calculateTotalPrice(auth()->id());
    
        // Include the item name in the success message
        $successMessage = '"' . $itemName . '" has been updated in the cart';
    
        return response()->json(['totalPrice' => $totalPrice, 'success' => $successMessage]);
    }
    
    
    private function calculateTotalPrice($userId)
    {
        $cartItems = Cart::where('user_id', $userId)->get();
        $productIds = $cartItems->pluck('menu_id')->toArray();
        $products = Menu::whereIn('id', $productIds)->get();
        $totalPrice = 0;
    
        foreach ($cartItems as $cartItem) {
            $product = $products->firstWhere('id', $cartItem->menu_id);
            if ($product) {
                $totalPrice += $product->price * $cartItem->quantity;
            }
        }
    
        return $totalPrice;
    }
    
    /**
     * Remove the specified resource from storage.
     */


  public function addToCart(Request $request)
{
    // Check if the user is authenticated
    if (!Auth::check()) {
        return response()->json([
            'message' => 'Please login to add items to your cart',
            'cartCount' => 0,
            'totalPrice' => 0,
        ]);
    }

    // Validate the request, e.g., check if the item ID is provided and valid.
    $request->validate([
        'id' => 'required|exists:menus,id',
    ]);

    // Get the menu item to be added to the cart
    $menuItem = Menu::find($request->input('id'));

    // Check if the item is already in the user's cart
    $userId = auth()->id();
    $existingCartItem = Cart::where('user_id', $userId)
        ->where('menu_id', $menuItem->id)
        ->first();

    if ($existingCartItem) {
        // Item already exists in the cart, update the quantity
        $existingCartItem->increment('quantity'); // Increment the quantity by 1
    } else {
        // Item does not exist in the cart, add a new item
        Cart::create([
            'user_id' => $userId,
            'menu_id' => $menuItem->id,
            'quantity' => 1,
            'is_takeaway' => false,
            'special_requests' => null,
        ]);
    }

    // Retrieve updated cart information
    $cartItems = Cart::where('user_id', $userId)->get();
    $productIds = $cartItems->pluck('menu_id')->toArray();

    // Find the corresponding products in the Menu table
    $products = Menu::whereIn('id', $productIds)->get();

    // Calculate the total price
    $totalPrice = 0;

    foreach ($cartItems as $cartItem) {
        $product = $products->firstWhere('id', $cartItem->menu_id);
        if ($product) {
            $totalPrice += $product->price * $cartItem->quantity;
        }
    }

    // Determine the response message based on whether the item was added or updated
    $message = $existingCartItem ? $menuItem->name . ' updated in cart' : $menuItem->name . ' added to cart';

    return response()->json([
        'message' => $message,
        'cartCount' => count($cartItems),
        'totalPrice' => $totalPrice,
    ]);
}

    

public function cartInfo(Request $request)
{
    $userId = auth()->id(); // Get the authenticated user's ID

    // Fetch cart items for the user
    $cartItems = Cart::where('user_id', $userId)->get();

    // Calculate the total quantity and total price
    $cartCount = $cartItems->sum('quantity'); // Calculate total quantity
    $cartTotal = 0;

    // Retrieve the product IDs in the cart
    $productIds = $cartItems->pluck('menu_id')->toArray();

    // Find the corresponding products in the Menu table
    $products = Menu::whereIn('id', $productIds)->get();

    foreach ($cartItems as $cartItem) {
        $product = $products->firstWhere('id', $cartItem->menu_id);
        if ($product) {
            $cartTotal += $product->price * $cartItem->quantity; // Calculate total price
        }
    }

    // Return the cart information as a JSON response, including total quantity and total price
    return response()->json([
        'cartCount' => $cartCount,
        'cartTotal' => $cartTotal,
    ]);
}




public function delete($id)
{
    // Find the record by ID and delete it
    $cartItem = Cart::find($id);

    if (!$cartItem) {
        // Handle the case where the record doesn't exist
        return redirect()->back()->with('error', 'Item not found.');
    }

    // Store the name of the item before deletion
    $itemName = $cartItem->menu->name;

    // Perform the deletion
    $cartItem->delete();

    // Redirect with a success message and the deleted item's name
    return redirect()->back()->with('success', 'Item "'.$itemName.'" has been removed from Cart.');
}



public function checkout()
{
    $userId = auth()->id(); // Get the authenticated user's ID

    // Fetch cart items for the user
    $cartItems = Cart::where('user_id', $userId)->get();

    // Calculate the total quantity and total price
    $cartCount = $cartItems->sum('quantity'); // Calculate total quantity
    $cartTotal = 0;

    // Retrieve the product IDs in the cart
    $productIds = $cartItems->pluck('menu_id')->toArray();

    // Find the corresponding products in the Menu table
    $products = Menu::whereIn('id', $productIds)->get();

    foreach ($cartItems as $cartItem) {
        $product = $products->firstWhere('id', $cartItem->menu_id);
        if ($product) {
            $cartTotal += $product->price * $cartItem->quantity; // Calculate total price
        }
    }

    // Return the checkout view with the cart items, total quantity, and total price
    return view('frontend.checkout', compact('cartItems', 'cartCount', 'cartTotal'));
}
  



}
