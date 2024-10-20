@extends('layouts.app')

@section('title', 'Airport Parking Services')

@section('content')
<!-- Services Start -->
<div class="container-fluid service py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
            <h1 class="display-5 text-capitalize mb-3">Booking <span class="text-primary">Results</span>
            </h1>
            <p class="mb-0">Choose from our airport parking options below and enjoy convenient and secure parking.</p>
        </div>
        <div class="row g-4">
            <!-- First Card -->
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="categories-item p-4">
                    <div class="categories-item-inner card shadow">
                        <div class="categories-img rounded-top">
                            <img src="img/park1.png" class="img-fluid w-100 rounded-top" alt="Premium Parking Spot">
                        </div>
                        <div class="categories-content rounded-bottom p-4">
                            <h5>Premium Parking</h4>
                                <div class="categories-review mb-4">
                                    <div class="me-3">4.8 Rating</div>
                                    <div class="d-flex justify-content-center text-secondary">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star text-body"></i>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <h4 class="bg-white text-primary rounded-pill py-2 px-4 mb-0">$15.00/Day</h4>
                                </div>
                                <div class="row gy-2 gx-0 text-center mb-4">
                                    <div class="col-4 border-end border-white">
                                        <i class="fa fa-map-marker-alt text-dark"></i> <span class="text-body ms-1">Zone
                                            A</span>
                                    </div>
                                    <div class="col-4 border-end border-white">
                                        <i class="fa fa-clock text-dark"></i> <span class="text-body ms-1">24/7
                                            Access</span>
                                    </div>
                                    <div class="col-4">
                                        <i class="fa fa-shield-alt text-dark"></i> <span
                                            class="text-body ms-1">Secured</span>
                                    </div>
                                </div>
                                <a href="{{ route('bookingform') }}"
                                    class="btn btn-primary rounded-pill d-flex justify-content-center py-2">Book
                                    Now</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Second Card -->
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                <div class="categories-item p-4">
                    <div class="categories-item-inner card shadow">
                        <div class="categories-img rounded-top">
                            <img src="img/park2.png" class="img-fluid w-100 rounded-top" alt="Long-Term Parking">
                        </div>
                        <div class="categories-content rounded-bottom p-4">
                            <h5>Long-Term Parking</h4>
                                <div class="categories-review mb-4">
                                    <div class="me-3">4.5 Rating</div>
                                    <div class="d-flex justify-content-center text-secondary">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star text-body"></i>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <h4 class="bg-white text-primary rounded-pill py-2 px-4 mb-0">$10.00/Day</h4>
                                </div>
                                <div class="row gy-2 gx-0 text-center mb-4">
                                    <div class="col-4 border-end border-white">
                                        <i class="fa fa-map-marker-alt text-dark"></i> <span class="text-body ms-1">Zone
                                            B</span>
                                    </div>
                                    <div class="col-4 border-end border-white">
                                        <i class="fa fa-clock text-dark"></i> <span class="text-body ms-1">24/7
                                            Access</span>
                                    </div>
                                    <div class="col-4">
                                        <i class="fa fa-shield-alt text-dark"></i> <span
                                            class="text-body ms-1">Secured</span>
                                    </div>
                                </div>
                                <a href="{{ route('bookingform') }}"
                                    class="btn btn-primary rounded-pill d-flex justify-content-center py-2">Book
                                    Now</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Third Card -->
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="categories-item p-4">
                    <div class="categories-item-inner card shadow">
                        <div class="categories-img rounded-top">
                            <img src="img/park3.png" class="img-fluid w-100 rounded-top" alt="Valet Parking">
                        </div>
                        <div class="categories-content rounded-bottom p-4">
                            <h5>Valet Parking</h4>
                                <div class="categories-review mb-4">
                                    <div class="me-3">4.9 Rating</div>
                                    <div class="d-flex justify-content-center text-secondary">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star text-body"></i>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <h4 class="bg-white text-primary rounded-pill py-2 px-4 mb-0">$20.00/Day</h4>
                                </div>
                                <div class="row gy-2 gx-0 text-center mb-4">
                                    <div class="col-4 border-end border-white">
                                        <i class="fa fa-map-marker-alt text-dark"></i> <span class="text-body ms-1">Zone
                                            C</span>
                                    </div>
                                    <div class="col-4 border-end border-white">
                                        <i class="fa fa-clock text-dark"></i> <span class="text-body ms-1">24/7
                                            Access</span>
                                    </div>
                                    <div class="col-4">
                                        <i class="fa fa-shield-alt text-dark"></i> <span
                                            class="text-body ms-1">Secured</span>
                                    </div>
                                </div>
                                <a href="{{ route('bookingform') }}"
                                    class="btn btn-primary rounded-pill d-flex justify-content-center py-2">Book
                                    Now</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Fourth Card -->
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                <div class="categories-item p-4">
                    <div class="categories-item-inner card shadow">
                        <div class="categories-img rounded-top">
                            <img src="img/park4.png" class="img-fluid w-100 rounded-top" alt="Covered Parking">
                        </div>
                        <div class="categories-content rounded-bottom p-4">
                            <h5>Covered Parking</h4>
                                <div class="categories-review mb-4">
                                    <div class="me-3">4.6 Rating</div>
                                    <div class="d-flex justify-content-center text-secondary">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star text-body"></i>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <h4 class="bg-white text-primary rounded-pill py-2 px-4 mb-0">$12.00/Day</h4>
                                </div>
                                <div class="row gy-2 gx-0 text-center mb-4">
                                    <div class="col-4 border-end border-white">
                                        <i class="fa fa-map-marker-alt text-dark"></i> <span class="text-body ms-1">Zone
                                            D</span>
                                    </div>
                                    <div class="col-4 border-end border-white">
                                        <i class="fa fa-clock text-dark"></i> <span class="text-body ms-1">24/7
                                            Access</span>
                                    </div>
                                    <div class="col-4">
                                        <i class="fa fa-shield-alt text-dark"></i> <span
                                            class="text-body ms-1">Secured</span>
                                    </div>
                                </div>
                                <a href="{{ route('bookingform') }}"
                                    class="btn btn-primary rounded-pill d-flex justify-content-center py-2">Book
                                    Now</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Fifth Card -->
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                <div class="categories-item p-4">
                    <div class="categories-item-inner card shadow">
                        <div class="categories-img rounded-top">
                            <img src="img/park5.png" class="img-fluid w-100 rounded-top" alt="Short-Term Parking">
                        </div>
                        <div class="categories-content rounded-bottom p-4">
                            <h5>Short-Term Parking</h4>
                                <div class="categories-review mb-4">
                                    <div class="me-3">4.3 Rating</div>
                                    <div class="d-flex justify-content-center text-secondary">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star text-body"></i>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <h4 class="bg-white text-primary rounded-pill py-2 px-4 mb-0">$9.00/Day</h4>
                                </div>
                                <div class="row gy-2 gx-0 text-center mb-4">
                                    <div class="col-4 border-end border-white">
                                        <i class="fa fa-map-marker-alt text-dark"></i> <span class="text-body ms-1">Zone
                                            E</span>
                                    </div>
                                    <div class="col-4 border-end border-white">
                                        <i class="fa fa-clock text-dark"></i> <span class="text-body ms-1">24/7
                                            Access</span>
                                    </div>
                                    <div class="col-4">
                                        <i class="fa fa-shield-alt text-dark"></i> <span
                                            class="text-body ms-1">Secured</span>
                                    </div>
                                </div>
                                <a href="{{ route('bookingform') }}"
                                    class="btn btn-primary rounded-pill d-flex justify-content-center py-2">Book
                                    Now</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sixth Card -->
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                <div class="categories-item p-4">
                    <div class="categories-item-inner card shadow">
                        <div class="categories-img rounded-top">
                            <img src="img/park6.png" class="img-fluid w-100 rounded-top" alt="Economy Plus Parking">
                        </div>
                        <div class="categories-content rounded-bottom p-4">
                            <h5>Economy Plus Parking</h4>
                                <div class="categories-review mb-4">
                                    <div class="me-3">4.1 Rating</div>
                                    <div class="d-flex justify-content-center text-secondary">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star text-body"></i>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <h4 class="bg-white text-primary rounded-pill py-2 px-4 mb-0">$6.00/Day</h4>
                                </div>
                                <div class="row gy-2 gx-0 text-center mb-4">
                                    <div class="col-4 border-end border-white">
                                        <i class="fa fa-map-marker-alt text-dark"></i> <span class="text-body ms-1">Zone
                                            F</span>
                                    </div>
                                    <div class="col-4 border-end border-white">
                                        <i class="fa fa-clock text-dark"></i> <span class="text-body ms-1">24/7
                                            Access</span>
                                    </div>
                                    <div class="col-4">
                                        <i class="fa fa-shield-alt text-dark"></i> <span
                                            class="text-body ms-1">Secured</span>
                                    </div>
                                </div>
                                <a href="{{ route('bookingform') }}"
                                    class="btn btn-primary rounded-pill d-flex justify-content-center py-2">Book
                                    Now</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Seventh Card -->
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.7s">
                <div class="categories-item p-4">
                    <div class="categories-item-inner card shadow">
                        <div class="categories-img rounded-top">
                            <img src="img/park7.png" class="img-fluid w-100 rounded-top" alt="Premium Plus Parking">
                        </div>
                        <div class="categories-content rounded-bottom p-4">
                            <h5>Premium Plus Parking</h4>
                                <div class="categories-review mb-4">
                                    <div class="me-3">4.7 Rating</div>
                                    <div class="d-flex justify-content-center text-secondary">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star text-body"></i>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <h4 class="bg-white text-primary rounded-pill py-2 px-4 mb-0">$18.00/Day</h4>
                                </div>
                                <div class="row gy-2 gx-0 text-center mb-4">
                                    <div class="col-4 border-end border-white">
                                        <i class="fa fa-map-marker-alt text-dark"></i> <span class="text-body ms-1">Zone
                                            G</span>
                                    </div>
                                    <div class="col-4 border-end border-white">
                                        <i class="fa fa-clock text-dark"></i> <span class="text-body ms-1">24/7
                                            Access</span>
                                    </div>
                                    <div class="col-4">
                                        <i class="fa fa-shield-alt text-dark"></i> <span
                                            class="text-body ms-1">Secured</span>
                                    </div>
                                </div>
                                <a href="{{ route('bookingform') }}"
                                    class="btn btn-primary rounded-pill d-flex justify-content-center py-2">Book
                                    Now</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Eighth Card -->
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.8s">
                <div class="categories-item p-4">
                    <div class="categories-item-inner card shadow">
                        <div class="categories-img rounded-top">
                            <img src="img/park8.png" class="img-fluid w-100 rounded-top" alt="Economy Standard Parking">
                        </div>
                        <div class="categories-content rounded-bottom p-4">
                            <h5>Economy Standard Parking</h5>
                            <div class="categories-review mb-4">
                                <div class="me-3">4.0 Rating</div>
                                <div class="d-flex justify-content-center text-secondary">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star text-body"></i>
                                </div>
                            </div>
                            <div class="mb-4">
                                <h4 class="bg-white text-primary rounded-pill py-2 px-4 mb-0">$5.00/Day</h4>
                            </div>
                            <div class="row gy-2 gx-0 text-center mb-4">
                                <div class="col-4 border-end border-white">
                                    <i class="fa fa-map-marker-alt text-dark"></i> <span class="text-body ms-1">Zone
                                        H</span>
                                </div>
                                <div class="col-4 border-end border-white">
                                    <i class="fa fa-clock text-dark"></i> <span class="text-body ms-1">24/7
                                        Access</span>
                                </div>
                                <div class="col-4">
                                    <i class="fa fa-shield-alt text-dark"></i> <span
                                        class="text-body ms-1">Secured</span>
                                </div>
                            </div>
                            <a href="{{ route('bookingform') }}"
                                class="btn btn-primary rounded-pill d-flex justify-content-center py-2">Book
                                Now</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Ninth Card -->
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.9s">
                <div class="categories-item p-4">
                    <div class="categories-item-inner card shadow">
                        <div class="categories-img rounded-top">
                            <img src="img/park9.png" class="img-fluid w-100 rounded-top" alt="Economy Parking">
                        </div>
                        <div class="categories-content rounded-bottom p-4">
                            <h5>Economy Parking</h5>
                            <div class="categories-review mb-4">
                                <div class="me-3">4.2 Rating</div>
                                <div class="d-flex justify-content-center text-secondary">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star text-body"></i>
                                </div>
                            </div>
                            <div class="mb-4">
                                <h4 class="bg-white text-primary rounded-pill py-2 px-4 mb-0">$7.00/Day</h4>
                            </div>
                            <div class="row gy-2 gx-0 text-center mb-4">
                                <div class="col-4 border-end border-white">
                                    <i class="fa fa-map-marker-alt text-dark"></i> <span class="text-body ms-1">Zone
                                        I</span>
                                </div>
                                <div class="col-4 border-end border-white">
                                    <i class="fa fa-clock text-dark"></i> <span class="text-body ms-1">24/7
                                        Access</span>
                                </div>
                                <div class="col-4">
                                    <i class="fa fa-shield-alt text-dark"></i> <span
                                        class="text-body ms-1">Secured</span>
                                </div>
                            </div>

                            <a href="{{ route('bookingform') }}"
                                class="btn btn-primary rounded-pill d-flex justify-content-center py-2">Book
                                Now</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Read More Button after 9 cards -->
            <div class="text-center wow fadeInUp" data-wow-delay="1s">
                <a href="#" class="btn btn-primary rounded-pill py-3 px-5">Read More</a>
            </div>
        </div>
    </div>
</div>
<!-- Services End -->
@endsection