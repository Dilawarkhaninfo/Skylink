<!-- resources/views/carhire.blade.php -->

@extends('layouts.app')

@section('title', 'Car Hire')

@section('content')

<!-- Car Hire Booking Start -->
<div class="container-fluid steps py-5">
    <div class="container  py-5">
        <div class="text-center mx-auto text-white  pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
            <h1 class="display-5 text-capitalize mb-3">Car Hire <span class="text-primary">Booking</span></h1>
            <p class="mb-0 text-white">Book your car hire with ease and enjoy your journey without any hassle.</p>
        </div>
        <div class="row justify-content-center g-4">
            <div class="col-lg-10 wow fadeInUp" data-wow-delay="0.1s">
                <div class="booking-form p-4 rounded shadow bg-light">
                    <form>
                        <div class="row align-items-end g-3">
                            <div class="col-md-3">
                                <label for="pickupLocation" class="form-label">Pick-up Location</label>
                                <input type="text" class="form-control" id="pickupLocation"
                                    placeholder="Enter pick-up location" required>
                            </div>
                            <div class="col-md-3">
                                <label for="dropoffLocation" class="form-label">Drop-off Location</label>
                                <input type="text" class="form-control" id="dropoffLocation"
                                    placeholder="Enter drop-off location" required>
                            </div>
                            <div class="col-md-3">
                                <label for="pickupDate" class="form-label">Pick-up Date</label>
                                <input type="date" class="form-control" id="pickupDate" required>
                            </div>
                            <div class="col-md-3">
                                <label for="pickupTime" class="form-label">Pick-up Time</label>
                                <input type="time" class="form-control" id="pickupTime" required>
                            </div>
                            <div class="col-md-3">
                                <label for="dropoffDate" class="form-label">Drop-off Date</label>
                                <input type="date" class="form-control" id="dropoffDate" required>
                            </div>
                            <div class="col-md-3">
                                <label for="dropoffTime" class="form-label">Drop-off Time</label>
                                <input type="time" class="form-control" id="dropoffTime" required>
                            </div>
                            <div class="col-md-3">
                                <label for="driverAge" class="form-label">Driver Age</label>
                                <select class="form-select" id="driverAge" required>
                                    <option value="">Select age</option>
                                    <option value="30-35">30 - 35</option>
                                    <option value="36-40">36 - 40</option>
                                    <option value="41-45">41 - 45</option>
                                    <option value="46-50">46 - 50</option>
                                    <option value="51-55">51 - 55</option>
                                    <option value="56-65">56 - 65</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary w-100">Search</button>
                                </div>
                            </div>
                        </div>

                        <div class=" row g-3 mt-3">

                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Car Hire Booking End -->



<!-- Services Start -->
<div class="container-fluid service py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
            <h1 class="display-5 text-capitalize mb-3">SkyLink <span class="text-primary">Services</span></h1>
            <p class="mb-0">At SkyLink, we offer a range of services to ensure your airport parking experience is
                seamless and stress-free.</p>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item p-4">
                    <div class="service-icon mb-4">
                        <i class="fas fa-phone-alt fa-2x text-white"></i>
                    </div>
                    <h5 class="mb-3">Phone Reservation</h5>
                    <p class="mb-0">Easily reserve your parking space over the phone for a hassle-free experience.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item p-4">
                    <div class="service-icon mb-4">
                        <i class="fas fa-money-bill-alt fa-2x text-white"></i>
                    </div>
                    <h5 class="mb-3">Special Rates</h5>
                    <p class="mb-0">Enjoy competitive pricing and special discounts for long-term parking.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item p-4">
                    <div class="service-icon mb-4">
                        <i class="fas fa-road fa-2x text-white"></i>
                    </div>
                    <h5 class="mb-3">One Way Shuttle</h5>
                    <p class="mb-0">Convenient one-way shuttle service to and from the airport terminal.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item p-4">
                    <div class="service-icon mb-4">
                        <i class="fas fa-umbrella fa-2x text-white"></i>
                    </div>
                    <h5 class="mb-3">Insurance Options</h5>
                    <p class="mb-0">Protect your vehicle with our comprehensive insurance options while parked.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item p-4">
                    <div class="service-icon mb-4">
                        <i class="fas fa-building fa-2x text-white"></i>
                    </div>
                    <h5 class="mb-3">City to City Transfers</h5>
                    <p class="mb-0">Safe and reliable city-to-city transfer services for your convenience.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item p-4">
                    <div class="service-icon mb-4">
                        <i class="fas fa-car-alt fa-2x text-white"></i>
                    </div>
                    <h5 class="mb-3">Complimentary Rides</h5>
                    <p class="mb-0">Enjoy free rides to and from the airport with your parking reservation.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services End -->

<!-- Fact Counter -->
<div class="container-fluid counter bg-secondary py-5">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                <div class="counter-item text-center">
                    <div class="counter-item-icon mx-auto">
                        <i class="fas fa-thumbs-up fa-2x text-white"></i>
                    </div>
                    <div class="counter-counting my-3">
                        <span class="text-white fs-2 fw-bold" data-toggle="counter-up">829</span>
                        <span class="h1 fw-bold text-white">+</span>
                    </div>
                    <h4 class="text-white mb-0">Happy Clients</h4>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                <div class="counter-item text-center">
                    <div class="counter-item-icon mx-auto">
                        <i class="fas fa-car-alt fa-2x text-white"></i>
                    </div>
                    <div class="counter-counting my-3">
                        <span class="text-white fs-2 fw-bold" data-toggle="counter-up">1,200</span>
                        <span class="h1 fw-bold text-white">+</span>
                    </div>
                    <h4 class="text-white mb-0">Cars Parked</h4>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                <div class="counter-item text-center">
                    <div class="counter-item-icon mx-auto">
                        <i class="fas fa-building fa-2x text-white"></i>
                    </div>
                    <div class="counter-counting my-3">
                        <span class="text-white fs-2 fw-bold" data-toggle="counter-up">10</span>
                        <span class="h1 fw-bold text-white">+</span>
                    </div>
                    <h4 class="text-white mb-0">Parking Facilities</h4>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                <div class="counter-item text-center">
                    <div class="counter-item-icon mx-auto">
                        <i class="fas fa-clock fa-2x text-white"></i>
                    </div>
                    <div class="counter-counting my-3">
                        <span class="text-white fs-2 fw-bold" data-toggle="counter-up">1,500,000</span>
                        <span class="h1 fw-bold text-white">+</span>
                    </div>
                    <h4 class="text-white mb-0">Total Parking Hours</h4>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Fact Counter -->


<!-- Testimonial Start -->
<div class="container-fluid testimonial py-5 mb-5">
    <div class="container pb-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
            <h1 class="display-5 text-capitalize mb-3">Our Clients<span class="text-primary"> Reviews</span></h1>
            <p class="mb-0">Our customers trust us for convenient, secure, and affordable airport parking solutions.
                Here's what they have to say about our service:</p>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
            <div class="testimonial-item">
                <div class="testimonial-quote"><i class="fa fa-quote-right fa-2x"></i></div>
                <div class="testimonial-inner p-4">
                    <img src="img/testimonial-1.jpg" class="img-fluid" alt="">
                    <div class="ms-4">
                        <h4>John Doe</h4>
                        <p>Frequent Flyer</p>
                        <div class="d-flex text-primary">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star text-body"></i>
                        </div>
                    </div>
                </div>
                <div class="border-top rounded-bottom p-4">
                    <p class="mb-0">Amazing service! Parking was easy and stress-free, and the shuttle to the
                        terminal was prompt.</p>
                </div>
            </div>
            <div class="testimonial-item">
                <div class="testimonial-quote"><i class="fa fa-quote-right fa-2x"></i></div>
                <div class="testimonial-inner p-4">
                    <img src="img/testimonial-2.jpg" class="img-fluid" alt="">
                    <div class="ms-4">
                        <h4>Jane Smith</h4>
                        <p>Business Traveler</p>
                        <div class="d-flex text-primary">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star text-body"></i>
                            <i class="fas fa-star text-body"></i>
                        </div>
                    </div>
                </div>
                <div class="border-top rounded-bottom p-4">
                    <p class="mb-0">Quick and reliable service. I parked my car and felt confident it was in safe
                        hands while I was away.</p>
                </div>
            </div>
            <div class="testimonial-item">
                <div class="testimonial-quote"><i class="fa fa-quote-right fa-2x"></i></div>
                <div class="testimonial-inner p-4">
                    <img src="img/testimonial-3.jpg" class="img-fluid" alt="">
                    <div class="ms-4">
                        <h4>Mark Johnson</h4>
                        <p>Leisure Traveler</p>
                        <div class="d-flex text-primary">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star text-body"></i>
                            <i class="fas fa-star text-body"></i>
                            <i class="fas fa-star text-body"></i>
                        </div>
                    </div>
                </div>
                <div class="border-top rounded-bottom p-4">
                    <p class="mb-0">Great value for money. The lot was close to the airport, and the staff were very
                        helpful.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->



@endsection