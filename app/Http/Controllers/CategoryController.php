<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     private function handleImageUpload($request, $category)
{
    if ($request->hasFile('image')) {
        // Delete the previous image file, if it exists
        if ($category->image) {
            Storage::delete('public/uploads/' . $category->image);
        }

        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->storeAs('public/uploads', $imageName);
        return $imageName;
    } else {
        return null;
    }
}

    public function index()
    {
       $categories = Category::All();
        return view('backend.categories.list', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.categories.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|string|max:255',
            'order_id' => 'required|integer',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust the file types and size as needed
        ]);
    
        // Handle image upload using the helper function
        $imageName = $this->handleImageUpload($request, new Category);
    
        // Create a new category with the validated data
        $category = new Category;
        $category->name = $request->name;
        $category->order_id = $request->order_id;
        $category->image = $imageName; // Save the image file name
        $category->save();
    
        session()->flash('success', 'Category created  successfully');
        return redirect()->route('categories.index');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('backend.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|string|max:255',
            'order_id' => 'required|integer',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust the file types and size as needed
        ]);
    
        // Handle image upload using the helper function
        $imageName = $this->handleImageUpload($request, $category);
    
        // Update category data
        $category->name = $request->name;
        $category->order_id = $request->order_id;
        $category->image = $imageName; // Save the image file name
        $category->save();
    
        session()->flash('success', 'Category updated successfully');
        return redirect()->route('categories.index');
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        // Delete the category's image file, if it exists
        if ($category->image) {
            Storage::delete('public/uploads/' . $category->image);
        }
    
        // Delete the category from the database
        $category->delete();
        session()->flash('success', 'Category deleted successfully');
        return redirect()->route('categories.index');
    }
}
