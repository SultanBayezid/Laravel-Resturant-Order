<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; // Import the Storage facade

class MenuController extends Controller
{
    private function handleImageUpload($request, $menu)
    {
        if ($request->hasFile('image')) {
            // Delete the previous image file, if it exists
            if ($menu->image_url) {
                Storage::delete('public/uploads/Menu/' . $menu->image_url);
            }
    
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/uploads/Menu', $imageName);
            return $imageName;
        } else {
            return null;
        }
    }

    public function index()
    {
        $menus = Menu::latest()->get(); // Retrieve all menus
        return view('backend.menus.list', compact('menus'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('backend.menus.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust the file types and size as needed
        ]);

        // Handle image upload using the helper function
        $imageName = $this->handleImageUpload($request, new Menu);

        // Create a new menu item with the validated data
        $menu = new Menu;
        $menu->name = $request->name;
        $menu->description = $request->description;
        $menu->price = $request->price;
        $menu->is_vegetarian = $request->has('is_vegetarian') ? true : false;
        $menu->calories = $request->calories;
        $menu->category_id = $request->category_id;
        $menu->is_available = $request->has('is_available') ? true : false;
        $menu->image_url = $imageName; // Save the image file name
        $menu->save();
        $itemName = $menu->name;
        session()->flash('success', "Menu '{$itemName}' created successfully");
        return redirect()->route('menus.index');
    }

    public function show(Menu $menu)
    {
        //
    }

    public function edit(Menu $menu)
    {
        $categories = Category::all();
        return view('backend.menus.edit', compact('menu', 'categories'));
    }

    public function update(Request $request, Menu $menu)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust the file types and size as needed
        ]);

        // Handle image upload using the helper function
        $imageName = $this->handleImageUpload($request, $menu);

        // Update the menu item with the validated data
        $menu->name = $request->name;
        $menu->description = $request->description;
        $menu->price = $request->price;
        $menu->is_vegetarian = $request->has('is_vegetarian') ? true : false;
        $menu->calories = $request->calories;
        $menu->category_id = $request->category_id;
        $menu->is_available = $request->has('is_available') ? true : false;

        // Update the image URL only if a new image is uploaded
        if ($imageName) {
            $menu->image_url = $imageName;
        }

        $menu->save();

        session()->flash('success', 'Menu updated successfully');
        return redirect()->route('menus.index');
    }

    public function destroy(Menu $menu)
    {
        // Delete the menu item and its associated image file
        if ($menu->image_url) {
            Storage::delete('public/uploads/Menu/' . $menu->image_url);
        }
        
        $menu->delete();

        session()->flash('success', 'Menu deleted successfully');
        return redirect()->route('menus.index');
    }
}
