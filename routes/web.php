<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ReviewController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Auth::routes();


// Frontend Routes

Route::get('/', [FrontendController::class, 'index'])->name('frontend.home');
Route::get('/contact', [FrontendController::class, 'contact'])->name('frontend.contact');
Route::get('/review', [FrontendController::class, 'review'])->name('frontend.review');
Route::get('/menu', [FrontendController::class, 'menu'])->name('frontend.menu');
Route::get('/menu-item/{id}', [FrontendController::class, 'showMenuItem'])->name('frontend.menu_item');
Route::get('/cart', [FrontendController::class, 'cart'])->name('frontend.cart');
Route::post('/add-to-cart', [FrontendController::class, 'addToCart'])->name('frontend.add_to_cart');
Route::post('/update-cart', [FrontendController::class, 'updateCart'])->name('frontend.update_cart');
Route::post('/place-order', [FrontendController::class, 'placeOrder'])->name('frontend.place_order');
Route::get('/order-history', [FrontendController::class, 'orderHistory'])->name('frontend.order_history');

// Backend Routes 

// Routes protected by authentication middleware
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('categories', CategoryController::class);
    Route::resource('menus', MenuController::class);
    Route::resource('customers', CustomerController::class);
    Route::resource('reviews', ReviewController::class);
    Route::get('/orders/list', [OrderController::class, 'index'])->name('orders.index');

    

    
});


Route::post('/cart/add', 'App\Http\Controllers\CartController@addToCart')->name('cart.add');

Route::middleware(['auth', 'customer'])->group(function () {
    Route::get('/cart/info', 'App\Http\Controllers\CartController@cartInfo')->name('cart.info');
    Route::get('/cart/{cartItem}', 'App\Http\Controllers\CartController@delete')->name('cart.delete');
    Route::post('/cart/update', 'App\Http\Controllers\CartController@updateQuantity')->name('cart.update');
    Route::get('/checkout', 'App\Http\Controllers\CartController@checkout')->name('checkout');
    Route::get('/user/order-history', [UserController::class, 'orderHistory'])->name('user.order_history');
    Route::get('/user/review', [UserController::class, 'orderReview'])->name('user.review');
    Route::get('/user/profile', [UserController::class, 'profile'])->name('user.profile');
    Route::patch('/user/update-profile', [UserController::class, 'updateProfile'])->name('user.updateProfile');
    Route::post('/user/update-email', [UserController::class, 'updateEmail'])->name('user.updateEmail');
    Route::post('/user/update-password', [UserController::class, 'updatePassword'])->name('user.updatePassword');
    Route::post('/user/update-password', [UserController::class, 'updatePassword'])->name('user.updatePassword');

        // Route to handle order creation (e.g., when the user submits a form)
    Route::post('/orders', [OrderController::class, 'store'])->name('orders.store');






});




