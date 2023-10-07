<?php

namespace App\Http\Controllers;
Use Auth;
use App\Models\User;
use App\Models\Order;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
class UserController extends Controller
{
    public function profile(){

      $user = User::find(Auth::user()->id);
      return view('frontend.user.profile', compact('user'));

    }

    public function orderHistory()
    {
        // Retrieve and display the user's order history.
        // Fetch order data for the currently logged-in user.
        $orders = Order::where('user_id', auth()->id())->get();
        return view('frontend.user.orders', compact('orders'));

    }
    public function orderReview()
    {
        // Retrieve and display the user's order history.
        // Fetch order data for the currently logged-in user.
        $reviews = []; // Retrieve order data here.
        return view('frontend.user.reviews', compact('reviews'));

    }

    public function updateProfile(Request $request)
{
    // Get the current user
    $user = auth()->user();

    // Validate the form data
    $request->validate([
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'mobile' => [
            'required',
            'string',
            'max:255',
            Rule::unique('users', 'mobile')->ignore($user->id), // Ignore the current user's mobile number
        ],
    ]);

    // Update the user's profile
    $user->update([
        'first_name' => $request->input('first_name'),
        'last_name' => $request->input('last_name'),
        'mobile' => $request->input('mobile'),
    ]);

    session()->flash('success', 'Profile updated successfully.');
    return redirect()->back();
}

public function updateEmail(Request $request)
{
    $user = Auth::user();

    // Validate the request data
    $request->validate([
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . $user->id],
    ]);

    // Update the user's email
    $user->update([
        'email' => $request->input('email'),
    ]);

    session()->flash('success', 'Email updated successfully.');
    return redirect()->back();
}

public function updatePassword(Request $request)
{
    $user = auth()->user();

    // Validate the form data
    $validator = Validator::make($request->all(), [
        'current_password' => ['required', 'string'],
        'new_password' => ['required', 'string', 'min:8', 'different:current_password'],
        'confirm_password' => ['required', 'string', 'same:new_password'],
    ]);

    // Check if the current password is correct
    if (!Hash::check($request->input('current_password'), $user->password)) {
        $validator->getMessageBag()->add('current_password', 'The current password is incorrect.');
    }

    // If validation fails, redirect back with errors and input data preserved
    if ($validator->fails()) {
        return redirect()->route('user.profile') // Replace with your intended route
            ->withErrors($validator)
            ->withInput(); // Preserve the user's input data
    }

    // Update the user's password
    $user->update([
        'password' => Hash::make($request->input('new_password')),
    ]);

    session()->flash('success', 'Password updated successfully.');
    return redirect()->route('user.profile'); // Replace with your intended route
}


    
}
