@extends('layouts.frontend')

@section('content')
    <!-- Section - Main -->
    <section class="section section-main section-main-4 bg-primary-light">

<!-- Content -->
<div class="section-main-content container">
    <div class="row">
        <div class="col-md-5">
            <h1 class="display-1">Fresh & Delicious</h1>
            <h4 class="mb-5">Taste it now with our online order!</h4>
            <a href="menu-grid-collapse.html" class="btn btn-outline-primary btn-lg animated" data-animation="fadeInUp" data-animation-delay="400"><span>Order now</span></a>
        </div>
    </div>
</div>

<!-- Image -->
<div class="section-main-image">
    <div class="bg-image"><img src="frontend/img/photos/hero-fresh.jpg" alt=""></div>
</div>

</section>

<!-- Section - Offers -->
<section class="section">

<div class="container">
    <h1 class="mb-6">Special offers</h1>
    <div class="carousel" data-slick='{"dots": true}'>
        <!-- Special Offer -->
        <div class="special-offer">
            <img src="frontend/img/photos/special-burger.jpg" alt="" class="special-offer-image">
            <div class="special-offer-content bg-primary-light">
                <h2 class="mb-2">Free Burger</h2>
                <h5 class="text-muted mb-5">Get free burger from orders higher that $40!</h5>
                <ul class="list-check text-lg mb-0">
                    <li>Only on Tuesdays</li>
                    <li class="false">Order higher that $40</li>
                    <li>Unless one burger ordered</li>
                </ul>
            </div>
        </div>
        <!-- Special Offer -->
        <div class="special-offer">
            <img src="frontend/img/photos/special-pizza.jpg" alt="" class="special-offer-image">
            <div class="special-offer-content bg-primary-light">
                <h2 class="mb-2">Free Small Pizza</h2>
                <h5 class="text-muted mb-5">Get free burger from orders higher that $40!</h5>
                <ul class="list-check text-lg mb-0">
                    <li>Only on Weekends</li>
                    <li class="false">Order higher that $40</li>
                </ul>
            </div>
        </div>
        <!-- Special Offer -->
        <div class="special-offer">
            <img src="frontend/img/photos/special-dish.jpg" alt="" class="special-offer-image">
            <div class="special-offer-content bg-primary-light">
                <h2 class="mb-2">Chip Friday</h2>
                <h5 class="text-muted mb-5">10% Off for all dishes!</h5>
                <ul class="list-check text-lg mb-0">
                    <li>Only on Friday</li>
                    <li>All products</li>
                    <li>Online order</li>
                </ul>
            </div>
        </div>
    </div>
</div>

</section>

<!-- Section - Menu -->
<section class="section cover protrude">

<div class="menu-sample-carousel carousel inner-controls" data-slick='{
    "dots": true,
    "slidesToShow": 3,
    "slidesToScroll": 1,
    "infinite": true,
    "responsive": [
        {
            "breakpoint": 991,
            "settings": {
                "slidesToShow": 2,
                "slidesToScroll": 1
            }
        },
        {
            "breakpoint": 690,
            "settings": {
                "slidesToShow": 1,
                "slidesToScroll": 1
            }
        }
    ]
}'>
    <!-- Menu Sample -->
    <div class="menu-sample">
        <a href="menu-list-navigation.html#Burgers">
            <img src="{{asset('frontend/img/photos/menu-sample-burgers.jpg')}}" alt="" class="image">
            <h3 class="title">Burgers</h3>
        </a>
    </div>
    <!-- Menu Sample -->
    <div class="menu-sample">
        <a href="menu-list-navigation.html#Pizza">
            <img src="{{asset('frontend/img/photos/menu-sample-pizza.jpg')}}" alt="" class="image">
            <h3 class="title">Pizza</h3>
        </a>
    </div>
    <!-- Menu Sample -->
    <div class="menu-sample">
        <a href="menu-list-navigation.html#Sushi">
            <img src="{{asset('frontend/img/photos/menu-sample-sushi.jpg')}}" alt="" class="image">
            <h3 class="title">Sushi</h3>
        </a>
    </div>
    <!-- Menu Sample -->
    <div class="menu-sample">
        <a href="menu-list-navigation.html#Pasta">
            <img src="{{asset('frontend/img/photos/menu-sample-pasta.jpg')}}" alt="" class="image">
            <h3 class="title">Pasta</h3>
        </a>
    </div>
    <!-- Menu Sample -->
    <div class="menu-sample">
        <a href="menu-list-navigation.html#Desserts">
            <img src="{{asset('frontend/img/photos/menu-sample-dessert.jpg')}}" alt="" class="image">
            <h3 class="title">Desserts</h3>
        </a>
    </div>
    <!-- Menu Sample -->
    <div class="menu-sample">
        <a href="menu-list-navigation.html#Drinks">
            <img src="{{asset('frontend/img/photos/menu-sample-drinks.jpg')}}" alt="" class="image">
            <h3 class="title">Drinks</h3>
        </a>
    </div>
</div>

</section>

<!-- Section - Featured Products -->
<section class="section right">

<div class="container">
    <h1 class="mb-6">Featured Products</h1>
    <div class="row">
        <div class="col-md-4">
            <!-- Card -->
            <div class="card bg-primary-light">
                <div class="card-image">
                    <img src="frontend/img/products/product-burger.jpg" alt="">
                </div>
                <div class="card-body">
                    <h5 class="mb-1">Beef Burger</h5>
                    <span class="text-muted text-sm">Beef, cheese, potato, onion, fries</span>
                    <div class="row align-items-center mt-4">
                        <div class="col-sm-6"><span class="text-md mr-4"><span class="text-muted">from</span> $<span data-product-base-price>9.00</span></span></div>
                        <div class="col-sm-6 text-sm-right mt-2 mt-sm-0"><button class="btn btn-outline-primary btn-sm" data-action="open-cart-modal" data-id="1"><span>Add to cart</span></button></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <!-- Card -->
            <div class="card bg-primary-light">
                <div class="card-image">
                    <img src="{{asset('frontend/img/products/product-pizza.jpg')}}" alt="">
                </div>
                <div class="card-body">
                    <h5 class="mb-1">Beef Burger</h5>
                    <span class="text-muted text-sm">Beef, cheese, potato, onion, fries</span>
                    <div class="row align-items-center mt-4">
                        <div class="col-sm-6"><span class="text-md mr-4"><span class="text-muted">from</span> $<span data-product-base-price>9.00</span></span></div>
                        <div class="col-sm-6 text-sm-right mt-2 mt-sm-0"><button class="btn btn-outline-primary btn-sm" data-action="open-cart-modal" data-id="2"><span>Add to cart</span></button></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <!-- Card -->
            <div class="card bg-primary-light">
                <div class="card-image">
                    <img src="{{asset('frontend/img/products/product-chicken-burger.jpg')}}" alt="">
                </div>
                <div class="card-body">
                    <h5 class="mb-1">Beef Burger</h5>
                    <span class="text-muted text-sm">Beef, cheese, potato, onion, fries</span>
                    <div class="row align-items-center mt-4">
                        <div class="col-sm-6"><span class="text-md mr-4"><span class="text-muted">from</span> $<span data-product-base-price>9.00</span></span></div>
                        <div class="col-sm-6 text-sm-right mt-2 mt-sm-0"><button class="btn btn-outline-primary btn-sm" data-action="open-cart-modal" data-id="2"><span>Add to cart</span></button></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center mt-5">
        <a href="menu-grid-collapse.html" class="btn btn-secondary"><span>View Our Menu</span></a>
    </div>
</div>

</section>

<!-- Section - Steps -->
<section class="section right dark bg-primary-dark">

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <!-- Step -->
            <div class="feature feature-1 mb-md-0">
                <div class="feature-icon icon icon-primary"><i class="ti ti-shopping-cart"></i></div>
                <div class="feature-content">
                    <h4 class="mb-2"><a href="menu-list-collapse.html">Pick a dish</a></h4>
                    <p class="text-muted mb-0">Vivamus volutpat leo dictum risus ullamcorper condimentum.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <!-- Step -->
            <div class="feature feature-1 mb-md-0">
                <div class="feature-icon icon icon-primary"><i class="ti ti-wallet"></i></div>
                <div class="feature-content">
                    <h4 class="mb-2">Make a payment</h4>
                    <p class="text-muted mb-0">Vivamus volutpat leo dictum risus ullamcorper condimentum.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <!-- Step -->
            <div class="feature feature-1 mb-md-0">
                <div class="feature-icon icon icon-primary"><i class="ti ti-package"></i></div>
                <div class="feature-content">
                    <h4 class="mb-2">Recieve your food!</h4>
                    <p class="text-muted mb-3">Vivamus volutpat leo dictum risus ullamcorper condimentum.</p>
                </div>
            </div>
        </div>
    </div>
</div>

</section>

<!-- Section - About -->
<section class="section section-bg-edge">

<div class="image right col-md-6 offset-md-6">
    <div class="bg-image"><img src="{{asset('frontend/img/photos/bg-food-fresh.jpg')}}" alt=""></div>
</div>

<div class="container">
    <div class="col-lg-5 col-md-9">
        <div class="rate mb-5 rate-lg"><i class="fa fa-star active"></i><i class="fa fa-star active"></i><i class="fa fa-star active"></i><i class="fa fa-star active"></i><i class="fa fa-star"></i></div>
        <h1>The best food in London!</h1>
        <p class="lead text-muted mb-5">Donec a eros metus. Vivamus volutpat leo dictum risus ullamcorper condimentum. Cras sollicitudin varius condimentum. Praesent a dolor sem....</p>
        <div class="blockquotes">
            <!-- Blockquote -->
            <blockquote class="blockquote light animated" data-animation="fadeInLeft">
                <div class="blockquote-content">
                    <div class="rate rate-sm mb-3"><i class="fa fa-star active"></i><i class="fa fa-star active"></i><i class="fa fa-star active"></i><i class="fa fa-star active"></i><i class="fa fa-star"></i></div>
                    <p>It’ was amazing feeling for my belly!</p>
                </div>
                <footer>
                    <img src="frontend/img/avatars/avatar02.jpg" alt="">
                    <span class="name">Mark Johnson<span class="text-muted">, Google</span></span>
                </footer>
            </blockquote>
            <!-- Blockquote -->
            <blockquote class="blockquote animated" data-animation="fadeInRight" data-animation-delay="300">
                <div class="blockquote-content dark">
                    <div class="rate rate-sm mb-3"><i class="fa fa-star active"></i><i class="fa fa-star active"></i><i class="fa fa-star active"></i><i class="fa fa-star active"></i><i class="fa fa-star"></i></div>
                    <p>Great food and great atmosphere!</p>
                </div>
                <footer>
                    <img src="frontend/img/avatars/avatar01.jpg" alt="">
                    <span class="name">Kate Hudson<span class="text-muted">, LinkedIn</span></span>
                </footer>
            </blockquote>
        </div>
    </div>
</div>

</section>

<!-- Section -->
<section class="section section-lg dark bg-dark">

<!-- BG Video -->
<div class="bg-video dark-overlay" data-src="http://assets.suelo.pl/soup/video/video_2.mp4" data-type="video/mp4"></div>

<div class="container">
    <div class="row align-items-center">
        <div class="col-md-6 text-md-center order-md-2 mb-5 mb-md-0">
            <button class="btn-play" data-toggle="video-modal" data-target="#modalVideo" data-video="https://www.youtube.com/embed/uVju5--RqtY"></button>
        </div>
        <div class="col-md-6">
            <h1 class="display-2">Check our <strong>promo</strong> video!</h1>
            <h4 class="text-muted mb-5">Taste it now with our online order!</h4>
            <a href="page-offers.html" class="btn btn-outline-primary btn-lg"><span>Order now</span></a>
        </div>
    </div>
</div>

</section>
@endsection