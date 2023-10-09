@extends('layouts.frontend')

@section('content')
<style>
#success-message {
    position: fixed;
    top: 10px; /* Adjust the top position as needed */
    right: 10px; /* Adjust the right position as needed */
    z-index: 9999; /* Set a high z-index to make sure it's on top of other elements */
    padding: 20px; /* Increase the padding to make it larger */
    font-size: 18px; /* Increase the font size to make it larger */

}

</style>
<div class="page-title bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-4">
                        <h1 class="mb-0">Menu List</h1>
                        <h4 class="text-muted mb-0">Some informations about our restaurant</h4>

                    </div>
                </div>
            </div>
        </div>
        <div id="success-message" style="display: none;" class="alert alert-success">
    <!-- Success message will be displayed here -->
        </div>
        <!-- Page Content -->
        <div class="page-content">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-md-3">
                        <!-- Menu Navigation -->
                        <nav id="menu-navigation" class="stick-to-content" data-local-scroll>
                            <ul class="nav nav-menu bg-light light">
                                @foreach($categories as $category)
                                <li><a href="#{{$category->name}}">{{$category->name}}</a></li>
                                @endforeach
                            </ul>
                        </nav>
                    </div>
                    <div class="col-md-9">
                        <!-- Menu Category / Burgers -->
                        @foreach($categories as $category)
                        <div id="{{$category->name}}" class="menu-category">
                            <div class="menu-category-title">
                            <div class="bg-image"><img src="{{ url('uploads/' . $category->image) }}" alt=""></div>

                                <h2 class="title">{{$category->name}}</h2>
                            </div>
                         
                            <div class="menu-category-content">
                            @foreach(App\Models\Menu::where('category_id', $category->id)->get() as $menu)
                                <!-- Menu Item -->
                                <div class="menu-item menu-list-item">
                                    <div class="row align-items-center">
                                        <div class="col-sm-6 mb-2 mb-sm-0">
                                            <h6 class="mb-0">{{$menu->name}}</h6>
                                            <span class="text-muted text-sm">{{$menu->description}}</span>
                                        </div>
                                        <div class="col-sm-6 text-sm-right">
                                            <span class="text-md mr-4"><span class="text-muted">from</span> £<span data-product-base-price>{{ number_format($menu->price, 2) }}</span></span>
                                            <button class="btn btn-outline-secondary btn-sm" data-action="open-cart-modal" data-id="{{$menu->id}}">
                                                <span>Add to cart</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        
                        </div>
                        @endforeach
           
                    </div>
                </div>
            </div>
        </div>





@endsection