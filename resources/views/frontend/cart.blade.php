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
                    <h1 class="mb-0">Carts</h1>
                </div>
            </div>
        </div>
    </div>
    <form action="" method="POST" id="checkout-form">
    @csrf
    <section class="section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="cart-details shadow bg-white mb-4">
                        @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif
                        <div id="success-alert" class="alert alert-success" style="display: none;">
                            <!-- The success message will be displayed here -->
                        </div>

                        @if(count($cartItems) > 0)
                        <div class="table-responsive">
                            <table class="table cart-table">
                                <tr>
                                    <th>ITEMS</th>
                                    <th>PRICE</th>
                                    <th>QUANTITY</th>
                                    <th>SUBTOTAL</th>
                                    <th>REMOVE</th>
                                </tr>
                                @foreach($cartItems as $cartItem)
                                <tr>
                                    <td class="title">
                                        <span class="name">
                                            <a href="#product-modal" data-toggle="modal">
                                                {{ $cartItem->menu->name }}
                                            </a>
                                        </span>
                                        <span class="caption text-muted"> {{ $cartItem->menu->category->name ?? '' }}</span>
                                    </td>
                                    <td class="price sixteen">£{{ $cartItem->menu->price }}</td>
                                    <td class="quantity" style="width: 40px;">
                                        <input type="number" class="form-control quantity-input sixteen" step="1" min="0" max=""
                                            name="cart[{{ $cartItem->id }}]" value="{{ $cartItem->quantity }}"
                                            data-menu-price="{{ $cartItem->menu->price }}" data-cart-item-id="{{ $cartItem->id }}">
                                    </td>
                                    <td class="subtotal sixteen">
                                        £{{ $cartItem->menu->price * $cartItem->quantity }}
                                    </td>
                                    <td class="actions">
                                        <a href="{{ route('cart.delete', $cartItem->id) }}" class="action-icon delete-product">
                                            <i style="font-size: 20px;" class="ti ti-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                        </div>

                        <div class="cart-summary">
                            <!-- Other summary rows -->
                        </div>
                        <div class="row p-3">
                            <div class="col-12 text-center">
                                <h4 style="font-weight: bold">Order Total: <span>£</span><span id="cart-products-total">{{ $totalPrice }}</span></h4>
                                <a class="btn btn-primary" id="checkout-btn" href="{{ route('checkout') }}">PROCEED TO CHECKOUT</a>
                            </div>
                        </div>
                        @else
                        <div class="cart-empty text-center">
                            <i class="ti ti-shopping-cart" style="font-size: 36px;"></i>
                            <p>Your cart is empty...</p>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
</form>

</div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    $(document).ready(function() {
        // Listen for changes in the quantity input fields
        $('.quantity-input').on('input', function() {
            var quantity = $(this).val();
            var price = $(this).data('menu-price');
            var subtotal = quantity * price;
            
            // Update the corresponding subtotal
            $(this).closest('tr').find('.subtotal').text('$' + subtotal.toFixed(2));
        });
    });
    </script>
<script>
$(document).ready(function() {
    // Calculate and update the cart total initially
    updateCartTotal();

    // Listen for changes in the quantity input fields
    $('.quantity-input').on('input', function() {
        updateCartTotal();
    });

    // Function to update the cart total
    function updateCartTotal() {
        var total = 0;

        // Loop through all quantity input fields and calculate the total
        $('.quantity-input').each(function() {
            var quantity = $(this).val();
            var price = $(this).data('menu-price');
            total += quantity * price;
        });

        // Update the cart total in the HTML
        $('#cart-products-total').text(total.toFixed(2));
        $('#cart-total').text(total.toFixed(2));
    }
});
</script>


<script>
    $(document).ready(function () {
        $('.quantity-input').on('change', function () {
            var cartItemId = $(this).data('cart-item-id');
            var newQuantity = $(this).val();
            var menuPrice = $(this).data('menu-price');
            var totalPrice = menuPrice * newQuantity;

            $.ajax({
                type: 'POST',
                url: '{{ route('cart.update') }}',
                data: {
                    _token: '{{ csrf_token() }}',
                    cart_item_id: cartItemId,
                    new_quantity: newQuantity,
                },
                success: function (data) {
                    // Update the subtotal and total price in the table
                    $('.subtotal[data-cart-item-id="' + cartItemId + '"]').text('£' + totalPrice);
                    $('.total-price').text('£' + data.totalPrice);
                    
                    // Check if there is a success message in the response
                    if (data.success) {
                        // Display the success message
                        $('#success-alert').text(data.success).show();
                    }
                },
                error: function () {
                    alert('An error occurred while updating the cart.');
                }
            });
        });
    });
</script>


@endsection
