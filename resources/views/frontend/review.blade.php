@extends('layouts.frontend')

@section('content')
       <!-- Page Title -->
       <div class="page-title page-title-lg bg-light light">
            <div class="bg-image bg-parallax"><img src="{{asset('frontend/img/photos/bg-croissant.jpg')}}" alt=""></div>
            <div class="row">
                <div class="col-lg-4 offset-lg-4 text-center">
                    <h1 class="mb-2">Reviews</h1>
                    <h5 class="text-muted mb-0">Some informations about our restaurant</h5>
                </div>
            </div>
        </div>

        <!-- Page Content -->
        <div class="page-content pt-0 pull-up-30 protrude">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-xl-8 offset-xl-2">
                        <!-- Blockquote -->
                        <blockquote class="blockquote blockquote-lg lightanimated" data-animation="fadeIn">
                            <div class="blockquote-content">
                                <div class="rate rate-sm mb-3"><i class="fa fa-star active"></i><i class="fa fa-star active"></i><i class="fa fa-star active"></i><i class="fa fa-star active"></i><i class="fa fa-star"></i></div>
                                <p>It’ was amazing feeling for my belly!</p>
                            </div>
                            <footer>
                                <img src="frontend/img/avatars/avatar01.jpg" alt="">
                                <span class="name">Mark Johnson<span class="text-muted">, Google</span></span>
                            </footer>
                        </blockquote>
                        <!-- Blockquote -->
                        <blockquote class="blockquote blockquote-lg lightanimated" data-animation="fadeIn">
                            <div class="blockquote-content">
                                <div class="rate rate-sm mb-3"><i class="fa fa-star active"></i><i class="fa fa-star active"></i><i class="fa fa-star active"></i><i class="fa fa-star active"></i><i class="fa fa-star"></i></div>
                                <p>Proin tincidunt, quam ut suscipit mollis, tortor eros bibendum sapien.</p>
                            </div>
                            <footer>
                                <img src="{{asset('frontend/img/avatars/avatar02.jpg')}}" alt="">
                                <span class="name">Mark Johnson<span class="text-muted">, Google</span></span>
                            </footer>
                        </blockquote>
                        <!-- Blockquote -->
                        <blockquote class="blockquote blockquote-lganimated" data-animation="fadeIn">
                            <div class="blockquote-content light">
                                <div class="rate rate-sm mb-3"><i class="fa fa-star active"></i><i class="fa fa-star active"></i><i class="fa fa-star active"></i><i class="fa fa-star active"></i><i class="fa fa-star"></i></div>
                                <p>Great food and great atmosphere!</p>
                            </div>
                            <footer>
                                <img src="{{asset('frontend/img/avatars/avatar04.jpg')}}" alt="">
                                <span class="name">Kate Hudson<span class="text-muted">, LinkedIn</span></span>
                            </footer>
                        </blockquote>
                        <!-- Blockquote -->
                        <blockquote class="blockquote blockquote-lg lightanimated" data-animation="fadeIn">
                            <div class="blockquote-content">
                                <div class="rate rate-sm mb-3"><i class="fa fa-star active"></i><i class="fa fa-star active"></i><i class="fa fa-star active"></i><i class="fa fa-star active"></i><i class="fa fa-star"></i></div>
                                <p>It’ was amazing feeling for my belly!</p>
                            </div>
                            <footer>
                                <img src="{{asset('frontend/img/avatars/avatar02.jpg')}}" alt="">
                                <span class="name">Mark Johnson<span class="text-muted">, Google</span></span>
                            </footer>
                        </blockquote>
                        <!-- Blockquote -->
                        <blockquote class="blockquote blockquote-lganimated" data-animation="fadeIn">
                            <div class="blockquote-content light">
                                <div class="rate rate-sm mb-3"><i class="fa fa-star active"></i><i class="fa fa-star active"></i><i class="fa fa-star active"></i><i class="fa fa-star active"></i><i class="fa fa-star active"></i></div>
                                <p>The best paste I have ever ate in my entire life!</p>
                            </div>
                            <footer>
                                <img src="frontend/img/avatars/avatar03.jpg" alt="">
                                <span class="name">Kate Hudson<span class="text-muted">, LinkedIn</span></span>
                            </footer>
                        </blockquote>
                        <!-- Blockquote -->
                        <blockquote class="blockquote blockquote-lg lightanimated" data-animation="fadeIn">
                            <div class="blockquote-content">
                                <div class="rate rate-sm mb-3"><i class="fa fa-star active"></i><i class="fa fa-star active"></i><i class="fa fa-star active"></i><i class="fa fa-star active"></i><i class="fa fa-star"></i></div>
                                <p>It’ was amazing feeling for my belly!</p>
                            </div>
                            <footer>
                                <img src="{{asset('frontend/img/avatars/avatar02.jpg')}}" alt="">
                                <span class="name">Mark Johnson<span class="text-muted">, Google</span></span>
                            </footer>
                        </blockquote>
                        <!-- Blockquote -->
                        <blockquote class="blockquote blockquote-lg lightanimated" data-animation="fadeIn">
                            <div class="blockquote-content">
                                <div class="rate rate-sm mb-3"><i class="fa fa-star active"></i><i class="fa fa-star active"></i><i class="fa fa-star active"></i><i class="fa fa-star active"></i><i class="fa fa-star"></i></div>
                                <p>Proin tincidunt, quam ut suscipit mollis, tortor eros bibendum sapien.</p>
                            </div>
                            <footer>
                                <img src="{{asset('frontend/img/avatars/avatar04.jpg')}}" alt="">
                                <span class="name">Mark Johnson<span class="text-muted">, Google</span></span>
                            </footer>
                        </blockquote>
                        <!-- Blockquote -->
                        <blockquote class="blockquote blockquote-lg lightanimated" data-animation="fadeIn">
                            <div class="blockquote-content">
                                <div class="rate rate-sm mb-3"><i class="fa fa-star active"></i><i class="fa fa-star active"></i><i class="fa fa-star active"></i><i class="fa fa-star active"></i><i class="fa fa-star"></i></div>
                                <p>It’ was amazing feeling for my belly!</p>
                            </div>
                            <footer>
                                <img src="frontend/img/avatars/avatar02.jpg" alt="">
                                <span class="name">Mark Johnson<span class="text-muted">, Google</span></span>
                            </footer>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section -->
        <section class="section section-lg dark bg-dark">

            <div class="bg-image bg-parallax"><img src="{{asset('frontend/img/photos/bg-review.jpg')}}" alt=""></div>

            <div class="container text-center">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h2 class="mb-3">Would you like to give Us a review?</h2>
                        <h5 class="text-muted">Do not hesitate to do that!</h5>
                        <button class="btn btn-outline-primary btn-lg" data-toggle="modal" data-target="#reviewModal"><span>Write a review</span></button>
                    </div>
                </div>
            </div>

        </section>

        <div class="modal fade" id="reviewModal" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header modal-header-lg light bg-light">
                <div class="bg-image"><img src="{{asset('frontend/img/photos/modal-review.jpg')}}" alt=""></div>
                <h4 class="modal-title">Write a review!</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="ti ti-close"></i></button>
            </div>
            <div class="modal-body">
                <form action="#">
                    <div class="form-group">
                        <textarea cols="30" rows="6" class="form-control" placeholder="Write here your review..."></textarea>
                    </div>
                    <div class="form-group">
                        <label>Your rate:</label>
                        <div class="rate rate-lg rating mb-2"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                    </div>
                    <div class="form-group">
                        <label>Your name:</label>
                        <input type="text" class="form-control" placeholder="Your name">
                    </div>
                    <div class="text-center">
                        <button class="btn btn-primary">Add review</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection