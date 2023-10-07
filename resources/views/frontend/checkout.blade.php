@extends('layouts.frontend')

@section('content')
<style>
    #success-message {
        position: fixed;
        top: 10px;
        right: 10px;
        z-index: 9999;
        padding: 20px;
        font-size: 18px;
    }
    .cart-table .actions {

    text-align: left !important;
}

.sixteen {
    font-size:16px !important;
}
</style>

<div id="content">
    <div class="page-title bg-dark dark">
        <div class="bg-image bg-parallax">
            <img src="{{asset('frontend/img/photos/bg-croissant.jpg')}}" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-4">
                    <h1 class="mb-0">Checkout</h1>
                </div>
            </div>
        </div>
    </div>
    <section class="section bg-light">
<form action="{{route('orders.store')}}" method="POST">
    @csrf
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-5">
                <div class="cart-details shadow bg-white stick-to-content mb-4">
                    <div class="bg-green dark p-4"><h5 class="mb-0">You order</h5></div>
                    <table class="cart-table">
                    @foreach($cartItems as $cartItem)
                        <tr>
                            <td class="title">
                                <span class="name"><a href="#product-modal" data-toggle="modal"> {{ $cartItem->menu->name }}</a></span>
                                <span class="caption text-muted">{{ $cartItem->menu->category->name ?? '' }}</span>
                            </td>
                            <td class="price"> £{{ $cartItem->menu->price * $cartItem->quantity }} <br>
                            Qty {{  $cartItem->quantity }}
                        
                        </td>

                        </tr>
                        @endforeach
                    </table>
                    <div class="cart-summary">
                        <div class="row">
                            <div class="col-7 text-right text-muted">Order total:</div>
                            <div class="col-5"><strong>$<span class="cart-products-total">£{{ $cartTotal }}</span></strong></div>
                            <input type="hidden" name="total_price" value="{{ $cartTotal }}">
                        </div>
                        <div class="row">
                            <div class="col-7 text-right text-muted">Devliery:</div>
                            <div class="col-5"><strong>$<span class="cart-delivery">0.00</span></strong></div>
                        </div>
                        <hr class="hr-sm">
                        <div class="row text-lg">
                            <div class="col-7 text-right text-muted">Total:</div>
                            <div class="col-5"><strong>$<span class="cart-total">0.00</span></strong></div>
                        </div>
                    </div>
                    <div class="cart-empty">
                        <i class="ti ti-shopping-cart"></i>
                        <p>Your cart is empty...</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-lg-7 order-lg-first">
                <div class="bg-white p-4 p-md-5 mb-4">
                    <h4 class="border-bottom pb-4"><i class="ti ti-user mr-3 text-primary"></i>Basic informations</h4>
                    <div class="row mb-5">
                        <div class="form-group col-sm-6">
                            <label>First Name:</label>
                            <input type="text" name="first_name" value="{{Auth::user()->first_name ?? ''}}" class="form-control">
                        </div>
                        <div class="form-group col-sm-6">
                            <label>Last Name:</label>
                            <input type="text" name="last_name" value="{{Auth::user()->last_name ?? ''}}" class="form-control">
                        </div>
                        <div class="form-group col-sm-6">
                            <label>Phone number:</label>
                            <input type="number" name="mobile" value="{{Auth::user()->mobile ?? ''}}" class="form-control">
                        </div>
                        <div class="form-group col-sm-6">
                            <label>E-mail address:</label>
                            <input type="email" name="email"  value="{{Auth::user()->email ?? ''}}" class="form-control">
                        </div>
                        <div class="form-group col-sm-6">
                            <label>Street and number:</label>
                            <input type="text" name="delivery_address" class="form-control">
                        </div>
                        <div class="form-group col-sm-6">
                            <label>City:</label>
                            <input type="text" class="form-control">
                        </div>

                    </div>

                    <h4 class="border-bottom pb-4"><i class="ti ti-package mr-3 text-primary"></i>Delivery</h4>
                    <div class="row mb-5">
                        <div class="form-group col-sm-6">
                            <label>Delivery time:</label>
                            <div class="select-container">
                                <select class="form-control">
                                    <option>As fast as possible</option>
                                    <option>In one hour</option>
                                    <option>In two hours</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <h4 class="border-bottom pb-4"><i class="ti ti-wallet mr-3 text-primary"></i>Payment</h4>
                    <div class="row text-lg">
                        <div class="col-md-4 col-sm-6 form-group">
                            <label class="custom-control custom-radio">
                                <input type="radio" name="payment_type" class="custom-control-input">
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">PayPal</span>
                            </label>
                        </div>
                        <div class="col-md-4 col-sm-6 form-group">
                            <label class="custom-control custom-radio">
                                <input type="radio" name="payment_type" class="custom-control-input">
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Credit Card</span>
                            </label>
                        </div>
                        <div class="col-md-4 col-sm-6 form-group">
                            <label class="custom-control custom-radio">
                                <input type="radio" name="payment_type" class="custom-control-input">
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Cash</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-lg"><span>Order now!</span></button>
                </div>
            </div>
        </div>
    </div>
</form>


</section>
</div>








@endsection
