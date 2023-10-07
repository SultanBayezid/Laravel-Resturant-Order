  <!-- Footer -->
  <footer id="footer" class="bg-primary-dark dark">

<div class="container">
    <!-- Footer 1st Row -->
    <div class="footer-first-row row">
        <div class="col-lg-3 text-center">
            <a href="index-2.html"><img src="{{asset('assets/img/logo-light-green.svg')}}" alt="" width="88" class="mt-5 mb-5"></a>
        </div>
        <div class="col-lg-4 col-md-6">
            <address>
                <h6 class="mb-1 text-muted">Address:</h6>
                <span>Green Street 22, New York</span>
                <br><br>
                <h6 class="mb-1 text-muted">Phone:</h6>
                +48 21200 2122 221
                <br><br>
                <h6 class="mb-1 text-muted">E-mail:</h6>
                <a href="#">hello@example.com</a>
            </address>
        </div>
        <div class="col-lg-5 col-md-6">
            <h5 class="text-muted">Subscribe Us!</h5>
            <!-- MailChimp Form -->
            <form action="http://suelo.us12.list-manage.com/subscribe/post-json?u=ed47dbfe167d906f2bc46a01b&amp;id=24ac8a22ad" id="sign-up-form" class="sign-up-form validate-form mb-5" method="POST">
                <div class="input-group">
                    <input name="EMAIL" id="mce-EMAIL" type="email" class="form-control" placeholder="Tap your e-mail..." required>
                    <span class="input-group-btn">
                        <button class="btn btn-primary btn-submit" type="submit">
                            <span class="description">Subscribe</span>
                            <span class="success">
                                <svg x="0px" y="0px" viewBox="0 0 32 32"><path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"/></svg>
                            </span>
                            <span class="error">Try again...</span>
                        </button>
                    </span>
                </div>
            </form>
            <h5 class="text-muted mb-3">Social Media</h5>
            <a href="#" class="icon icon-social icon-circle icon-sm icon-facebook"><i class="fa fa-facebook"></i></a>
            <a href="#" class="icon icon-social icon-circle icon-sm icon-google"><i class="fa fa-google"></i></a>
            <a href="#" class="icon icon-social icon-circle icon-sm icon-twitter"><i class="fa fa-twitter"></i></a>
            <a href="#" class="icon icon-social icon-circle icon-sm icon-youtube"><i class="fa fa-youtube"></i></a>
            <a href="#" class="icon icon-social icon-circle icon-sm icon-instagram"><i class="fa fa-instagram"></i></a>
        </div>
    </div>
    <!-- Footer 2nd Row -->
    <div class="footer-second-row">
        <span class="text-muted">Copyright Soup 2020©. Made with love by Suelo.</span>
    </div>
</div>

<!-- Back To Top -->
<button id="back-to-top" class="back-to-top"><i class="ti ti-angle-up"></i></button>

</footer>
<!-- Footer / End -->

</div>


<!-- Content / End -->

<!-- Panel Cart -->



<!-- Panel Mobile -->
<nav id="panel-mobile">
<div class="module module-logo bg-green dark">
<a href="#">
    <img src="{{asset('frontend/assets/img/logo.jpg')}}" alt="" width="88">
</a>
<button class="close" data-toggle="panel-mobile"><i class="ti ti-close"></i></button>
</div>
<nav class="module module-navigation"></nav>
<div class="module module-social">
<h6 class="text-sm mb-3">Follow Us!</h6>
<a href="#" class="icon icon-social icon-circle icon-sm icon-facebook"><i class="fa fa-facebook"></i></a>
<a href="#" class="icon icon-social icon-circle icon-sm icon-google"><i class="fa fa-google"></i></a>
<a href="#" class="icon icon-social icon-circle icon-sm icon-twitter"><i class="fa fa-twitter"></i></a>
<a href="#" class="icon icon-social icon-circle icon-sm icon-youtube"><i class="fa fa-youtube"></i></a>
<a href="#" class="icon icon-social icon-circle icon-sm icon-instagram"><i class="fa fa-instagram"></i></a>
</div>
</nav>

<!-- Body Overlay -->
<div id="body-overlay"></div>

</div>

<!-- Modal / Product -->
<div class="modal fade product-modal" id="product-modal" role="dialog">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header modal-header-lg dark bg-dark">
    <div class="bg-image"><img src="{{asset('frontend/img/photos/modal-add.jpg')}}" alt=""></div>
    <h4 class="modal-title">Specify your dish</h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="ti ti-close"></i></button>
</div>
<div class="modal-product-details">
    <div class="row align-items-center">
        <div class="col-9">
            <h6 class="mb-1 product-modal-name">Boscaiola Pasta</h6>
            <span class="text-muted product-modal-ingredients">Pasta, Cheese, Tomatoes, Olives</span>
        </div>
        <div class="col-3 text-lg text-right">$<span class="product-modal-price"></span></div>
    </div>
</div>
<div class="modal-body panel-details-container">
    <!-- Panel Details / Size -->
    <div class="panel-details panel-details-size">
        <h5 class="panel-details-title">
            <label class="custom-control custom-radio">
                <input name="radio_title_size" type="radio" class="custom-control-input">
                <span class="custom-control-indicator"></span>
            </label>
            <a href="#panel-details-sizes-list" data-toggle="collapse">Size</a>
        </h5>
        <div id="panel-details-sizes-list" class="collapse show">
            <div class="panel-details-content">
                <div class="product-modal-sizes">
                    <div class="form-group">
                        <label class="custom-control custom-radio">
                            <input name="radio_size" type="radio" class="custom-control-input" checked>
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-description">Small - 100g ($9.99)</span>
                        </label>
                    </div>
                    <div class="form-group">
                        <label class="custom-control custom-radio">
                            <input name="radio_size" type="radio" class="custom-control-input">
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-description">Medium - 200g ($14.99)</span>
                        </label>
                    </div>
                    <div class="form-group">
                        <label class="custom-control custom-radio">
                            <input name="radio_size" type="radio" class="custom-control-input">
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-description">Large - 350g ($21.99)</span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Panel Details / Additions -->
    <div class="panel-details panel-details-additions">
        <h5 class="panel-details-title">
            <label class="custom-control custom-radio">
                <input name="radio_title_additions" type="radio" class="custom-control-input">
                <span class="custom-control-indicator"></span>
            </label>
            <a href="#panel-details-additions-content" data-toggle="collapse">Additions</a>
        </h5>
        <div id="panel-details-additions-content" class="collapse">
            <div class="panel-details-content">
                <!-- Additions List -->
                <div class="row product-modal-additions">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Tomato ($1.29)</span>
                            </label>
                        </div>
                        <div class="form-group">
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Ham ($1.29)</span>
                            </label>
                        </div>
                        <div class="form-group">
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Chicken ($1.29)</span>
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Cheese($1.29)</span>
                            </label>
                        </div>
                        <div class="form-group">
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Bacon ($1.29)</span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Panel Details / Other -->
    <div class="panel-details panel-details-form">
        <h5 class="panel-details-title">
            <label class="custom-control custom-radio">
                <input name="radio_title_other" type="radio" class="custom-control-input">
                <span class="custom-control-indicator"></span>
            </label>
            <a href="#panel-details-other" data-toggle="collapse">Other</a>
        </h5>
        <div id="panel-details-other" class="collapse">
            <form action="#">
                <textarea cols="30" rows="4" class="form-control" placeholder="Put this any other informations..."></textarea>
            </form>
        </div>
    </div>
</div>
<button type="button" class="modal-btn btn btn-secondary btn-block btn-lg" data-action="add-to-cart"><span>Add to Cart</span></button>
<button type="button" class="modal-btn btn btn-secondary btn-block btn-lg" data-action="update-cart"><span>Update</span></button>
</div>
</div>
</div>

<!-- Video Modal / Demo -->
<div class="modal modal-video fade" id="modalVideo" role="dialog">
<button class="close" data-dismiss="modal"><i class="ti ti-close"></i></button>
<div class="modal-dialog modal-lg" role="document">
<div class="modal-content">
<iframe height="500"></iframe>
</div>
</div>
</div>

<!-- Cookies Bar -->
<div id="cookies-bar" class="body-bar cookies-bar">
<div class="body-bar-container container">
<div class="body-bar-text">
<h4 class="mb-2">Cookies & GDPR</h4>
<p>This is a sample Cookies / GDPR information. You can use it easily on your site and even add link to <a href="#">Privacy Policy</a>.</p>
</div>
<div class="body-bar-action">
<button class="btn btn-primary" data-accept="cookies"><span>Accept</span></button>
</div>
</div>
</div>

<script>
    $(document).ready(function () {
        // Function to update the cart display
        function updateCartDisplay(cartCount, cartTotal) {
            // Update the cart count
            $('#cart-count').text(cartCount);

            // Update the cart total value
            $('#cart-total').text(cartTotal.toFixed(2)); // Assuming cartTotal is a number
            $('#cart-total-mobile').text(cartCount); // Assuming cartTotal is a number
        }

        // Function to display a success message
        function displaySuccessMessage(message) {
            // Update the success message element with the message
            $('#success-message').text(message);

            // Show the success message element
            $('#success-message').show();

            // Hide the success message after a few seconds (optional)
            setTimeout(function() {
                $('#success-message').hide();
            }, 3000); // Hide after 3 seconds (adjust as needed)
        }

        // Function to periodically update cart information
        function periodicallyUpdateCartInfo() {
            $.ajax({
                url: '{{ route("cart.info") }}',
                method: 'GET',
                success: function (response) {
                    // Update the cart display with the new count and total
                    updateCartDisplay(response.cartCount, response.cartTotal);
                },
                error: function (xhr, status, error) {
                    // Handle errors (e.g., show an error message)
                    console.error(xhr.responseText);
                }
            });
        }

        // Call periodicallyUpdateCartInfo every 5 seconds (adjust the interval as needed)
        setInterval(periodicallyUpdateCartInfo, 1000);

        $('button[data-action="open-cart-modal"]').on('click', function () {
            // Get the menu item ID from the button's data attribute
            var menuItemId = $(this).data('id');

            // Get the CSRF token value from the meta tag
            var csrfToken = $('meta[name="csrf-token"]').attr('content');

            // Send an AJAX POST request to add the item to the cart
            $.ajax({
                url: '{{ route("cart.add") }}',
                method: 'POST',
                data: {
                    id: menuItemId,
                    _token: csrfToken // Include the CSRF token in the data
                },
                success: function (response) {
                    // Handle the success response (display success message)
                    displaySuccessMessage(response.message);

                    // Update the cart display with the new count and total
                    updateCartDisplay(response.cartCount, response.cartTotal);
                },
                error: function (xhr, status, error) {
                    // Handle errors (e.g., show an error message)
                    console.error(xhr.responseText);
                }
            });
        });
    });
</script>

<!-- JS Core -->
<script src="{{asset('frontend/dist/js/core.js')}}"></script>
<script src="{{asset('frontend/dist/js/custom.js')}}"></script>

</body>



</html>
