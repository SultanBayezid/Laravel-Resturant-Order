<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Cart;
use App\Models\Category;

class FrontendController extends Controller
{
    public function index()
    {
        // Load the homepage view.
        return view('frontend.home');
    }

    public function menu()
    {
        // Retrieve menu items from the backend and pass them to the menu view.
        $Menus = Menu::all();
        $categories = Category::all();
        return view('frontend.menu', compact('Menus', 'categories'));
    }

    public function contact()
    {
        // Retrieve menu items from the backend and pass them to the menu view.
        $Menus = Menu::all();
        return view('frontend.contact', compact('Menus'));
    }

    public function review()
    {
        // Retrieve menu items from the backend and pass them to the menu view.
        $Menus = Menu::all();
        return view('frontend.review', compact('Menus'));
    }
    public function showMenu($id)
    {
        // Retrieve a specific menu item by its ID and display it.
        $Menu = Menu::findOrFail($id);
        return view('frontend.menu_item', compact('Menu'));
    }

    public function Cart()
    {
        // Get the authenticated user's ID
        $userId = auth()->id();
    
        // Retrieve the user's cart items
        $cartItems = Cart::where('user_id', $userId)->get();
        
        // Retrieve the product IDs in the cart
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
    
        // Pass the cart information to the 'cart' view
        return view('frontend.cart', compact('cartItems', 'totalPrice'));
    }
    

    public function addToCart(Request $request)
    {
        // Add a menu item to the shopping cart.
        // Handle cart logic here, such as updating session data.
        // Redirect back to the menu or cart page.
    }

    public function updateCart(Request $request)
    {
        // Update cart item quantities or remove items.
        // Handle cart updates here, such as updating session data.
        // Redirect back to the cart page.
    }

    public function placeOrder(Request $request)
    {
        // Process the order and save it in the backend.
        // You may also need to update inventory.
        // Redirect to a confirmation page or handle AJAX responses.
    }


}
