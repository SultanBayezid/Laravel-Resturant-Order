<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User; // Add the User model import

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = 'dashboard';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // Override the authenticated method
    protected function authenticated(Request $request, $user)
    {
        if ($user->user_type === 'admin') {
            return redirect()->route('dashboard');
        } elseif ($user->user_type === 'customer') {
            return redirect()->route('frontend.menu');
        }

        // Handle other user types or scenarios as needed
    }

    // Override the attemptLogin method to add custom validation logic
    protected function attemptLogin(Request $request)
    {
        $credentials = $this->credentials($request);

        // Check if the user with the provided email exists
        if (!User::where('email', $credentials['email'])->exists()) {
            return false; // User does not exist, return false
        }

        return $this->guard()->attempt(
            $credentials,
            $request->filled('remember')
        );
    }
}
