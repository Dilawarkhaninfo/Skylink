<!-- resources/views/home/index.blade.php -->

@extends('layouts.app')

@section('title', 'Home')

@section('content')

<!-- Carousel Start -->
<!-- Simplified Header Section without Carousel -->
<div class="container-fluid steps p-0 m-0 bg-dark text-white">
    <div class="container py-5">
        <div class="row g-5 align-items-center justify-content-center">
            <div class="col-lg-11 py-5">
                <!-- New Form Section -->
                <div class="rounded p-5"
                    style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)); background-size: cover; background-position: center;">
                    <h4 class="text-white text-center mb-4">Get 15% Off Your Rental <br> Plan your trip now and enjoy
                        great savings!</h4>
                    <form>
                        <div class="row g-3 mt-3">
                            <!-- Airport Name -->
                            <div class="col-md-4 col-lg-2">
                                <label for="airport-name" class="form-label text-white">Airport Name</label>
                                <input id="airport-name" class="form-control" type="text"
                                    placeholder="Enter Airport Name" required>
                            </div>
                            <!-- Drop-off Date and Time -->
                            <div class="col-md-4 col-lg-2">
                                <label for="dropoff-date" class="form-label text-white">Drop-off Date</label>
                                <input id="dropoff-date" class="form-control" type="date" required>
                            </div>
                            <div class="col-md-4 col-lg-2">
                                <label for="dropoff-time" class="form-label text-white">Drop-off Time</label>
                                <input id="dropoff-time" class="form-control" type="time" required>
                            </div>
                            <!-- Pickup Date and Time -->
                            <div class="col-md-4 col-lg-2">
                                <label for="pickup-date" class="form-label text-white">Pickup Date</label>
                                <input id="pickup-date" class="form-control" type="date" required>
                            </div>
                            <div class="col-md-4 col-lg-2">
                                <label for="pickup-time" class="form-label text-white">Pickup Time</label>
                                <input id="pickup-time" class="form-control" type="time" required>
                            </div>
                            <!-- Promo Code -->
                            <div class="col-md-4 col-lg-2">
                                <label for="promo-code" class="form-label text-white">Voucher</label>
                                <input id="promo-code" class="form-control" type="text" placeholder="Enter Voucher">
                            </div>
                            <!-- Submit Button -->
                            <div class="col-12 mt-4">
                                <button class="btn btn-primary w-100 py-3">Search for Parking</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- Carousel End -->




<!-- Features Start -->
<div class="container py-5">
    <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
        <h1 class="display-5 text-capitalize mb-3">SkyLink <span class="text-primary">Features</span></h1>
        <p class="mb-0">Experience unparalleled convenience and service with our premium airport car parking
            solutions.
            Your satisfaction is our priority!
        </p>
    </div>
    <div class="row g-4 align-items-center">
        <div class="col-xl-4">
            <div class="row gy-4 gx-0">
                <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <span class="fas fa-trophy fa-2x text-white"></span>
                        </div>
                        <div class="ms-4">
                            <h5 class="mb-3">Premium Parking Services</h5>
                            <p class="mb-0">Enjoy first-class parking solutions tailored to your needs at the
                                airport.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <span class="fas fa-road fa-2x text-white"></span>
                        </div>
                        <div class="ms-4">
                            <h5 class="mb-3">24/7 Customer Support</h5>
                            <p class="mb-0">We're here for you around the clock to assist with any inquiries or
                                issues.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-xl-4 wow fadeInUp" data-wow-delay="0.2s">
            <img src="img/features-img.png" class="img-fluid w-100" style="object-fit: cover;" alt="Img">
        </div>
        <div class="col-xl-4">
            <div class="row gy-4 gx-0">
                <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="feature-item justify-content-end">
                        <div class="text-end me-4">
                            <h5 class="mb-3">Affordable Rates</h5>
                            <p class="mb-0">Get quality parking solutions without breaking the bank. Best prices
                                guaranteed!</p>
                        </div>
                        <div class="feature-icon">
                            <span class="fas fa-tag fa-2x text-white"></span>
                        </div>
                    </div>
                </div>
                <div class="col-12 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="feature-item justify-content-end">
                        <div class="text-end me-4">
                            <h5 class="mb-3">Free Shuttle Service</h5>
                            <p class="mb-0">Enjoy complimentary pick-up and drop-off to and from the airport.</p>
                        </div>
                        <div class="feature-icon">
                            <span class="fas fa-map-pin fa-2x text-white"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- Features End -->




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

<!-- Steps Start -->
<div class="container-fluid steps bg-light py-5">
    <div class="container-fluid py-5">
        <div class="text-center text-white mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
            <h1 class="display-5 text-capitalize mb-3">How It <span class="text-primary">Works</span></h1>
            <p class="mb-0">Renting your next vehicle has never been easier! Follow these simple steps to get started:
            </p>
        </div>
        <div class="row g-4 text-white">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="step-item rounded text-center p-4">
                    <div class="step-icon mb-3">
                        <i class="fa-solid fa-calendar-alt fa-2x text-primary"></i>
                    </div>
                    <h5 class="mb-3">Choose Your Date</h5>
                    <p class="mb-0">Select the rental dates that suit your schedule and let us know your preferences!
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                <div class="step-item rounded text-center p-4">
                    <div class="step-icon mb-3">
                        <i class="fa-solid fa-car fa-2x text-primary"></i>
                    </div>
                    <h5 class="mb-3">Pick Your Vehicle</h5>
                    <p class="mb-0">Browse our extensive fleet and choose the perfect vehicle for your needs.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="step-item rounded text-center p-4">
                    <div class="step-icon mb-3">
                        <i class="fa-solid fa-money-bill-wave fa-2x text-primary"></i>
                    </div>
                    <h5 class="mb-3">Make Payment</h5>
                    <p class="mb-0">Secure your booking by completing the payment process with our safe and easy
                        methods.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                <div class="step-item rounded text-center p-4">
                    <div class="step-icon mb-3">
                        <i class="fa-solid fa-user-check fa-2x text-primary"></i>
                    </div>
                    <h5 class="mb-3">Confirm Your Booking</h5>
                    <p class="mb-0">Receive instant confirmation of your booking and prepare for an amazing driving
                        experience.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="step-item rounded text-center p-4">
                    <div class="step-icon mb-3">
                        <i class="fa-solid fa-key fa-2x text-primary"></i>
                    </div>
                    <h5 class="mb-3">Collect Your Vehicle</h5>
                    <p class="mb-0">Head to our location, where our friendly staff will hand over your keys and get you
                        on your way.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                <div class="step-item rounded text-center p-4">
                    <div class="step-icon mb-3">
                        <i class="fa-solid fa-road fa-2x text-primary"></i>
                    </div>
                    <h5 class="mb-3">Enjoy Your Ride</h5>
                    <p class="mb-0">Hit the road and enjoy your adventure! We wish you safe travels and an unforgettable
                        experience.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Steps End -->


<div class="container py-5">
    <!-- Header Section -->
    <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
        <h1 class="display-5 text-capitalize mb-3 text-nowrap">Compare <span class="text-primary">Airport Parking</span>
            With
            Confidence</h1>
        <p class="mb-0">Monitor rating and explore over 3 million satisfied customers.</p>
    </div>

    <!-- Satisfied Customers Section -->
    <div class="row g-3">
        <div class="col-md-3 text-center wow fadeInUp" data-wow-delay="0.2s">
            <div class="content-box bg-light p-4 rounded d-flex flex-column">
                <i class="fas fa-box text-primary mb-3" style="font-size: 3rem;"></i>
                <div class="flex-grow-1 d-flex flex-column justify-content-center">
                    <h2 class="mb-3">Over 3 Million Satisfied Customers</h2>
                    <p>We pride ourselves on our outstanding customer service and are here to help you with any advice
                        you may need.</p>
                </div>
                <div class="mt-auto">
                    <a href="#" class="btn btn-primary">View More</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 text-center wow fadeInUp" data-wow-delay="0.3s">
            <div class="content-box bg-light p-4 rounded d-flex flex-column">
                <i class="fas fa-award text-primary mb-3" style="font-size: 3rem;"></i>
                <div class="flex-grow-1 d-flex flex-column justify-content-center">
                    <h2 class="mb-3">Price Check Promise</h2>
                    <p>A hassle-free way of comparing airport parking options. We guarantee to give you the lowest
                        prices with our Price Check Promise.</p>
                </div>
                <div class="mt-auto">
                    <a href="#" class="btn btn-primary">View More</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 text-center wow fadeInUp" data-wow-delay="0.4s">
            <div class="content-box bg-light p-4 rounded d-flex flex-column">
                <i class="fas fa-comments text-primary mb-3" style="font-size: 3rem;"></i>
                <div class="flex-grow-1 d-flex flex-column justify-content-center">
                    <h2 class="mb-3">Open Review Policy Gives You Power</h2>
                    <p>Our review system collects honest feedback on every car park. We openly display the good & bad
                        reviews so that you can make the most informed decision.</p>
                </div>
                <div class="mt-auto">
                    <a href="#" class="btn btn-primary">View More</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 text-center wow fadeInUp" data-wow-delay="0.5s">
            <div class="content-box bg-light p-4 rounded d-flex flex-column">
                <i class="fas fa-lock text-primary mb-3" style="font-size: 3rem;"></i>
                <div class="flex-grow-1 d-flex flex-column justify-content-center">
                    <h2 class="mb-3">Secure & Safe Payments</h2>
                    <p>Our payment system uses encryption to fully protect your details. We also offer PayPal as an
                        additional payment option.</p>
                </div>
                <div class="mt-auto">
                    <a href="#" class="btn btn-primary">View More</a>
                </div>
            </div>
        </div>
    </div>

</div>


<!-- Reasons Start -->
<div class="container-fluid steps bg-light py-5">
    <div class="container-fluid text-white py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
            <h1 class="display-5 text-capitalize mb-3">5 Reasons to Book with <span class="text-primary">SkyLink</span>
            </h1>
            <p class="mb-0">We offer exclusive parking discounts that beat other sites.</p>
        </div>
        <div class="row justify-content-center g-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="reason-item rounded text-center p-4">
                    <div class="reason-number mb-3 text-primary" style="font-size: 2rem;">1.</div>
                    <h5 class="mb-3">We Do the Hard Work</h5>
                    <p class="mb-0">We compare car parks for you, ensuring you get the best options available.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                <div class="reason-item rounded text-center p-4">
                    <div class="reason-number mb-3 text-primary" style="font-size: 2rem;">2.</div>
                    <h5 class="mb-3">Easily Amend Your Booking</h5>
                    <p class="mb-0">You can easily amend your booking in MyAccount.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="reason-item rounded text-center p-4">
                    <div class="reason-number mb-3 text-primary" style="font-size: 2rem;">3.</div>
                    <h5 class="mb-3">Take Advantage of Add-ons</h5>
                    <p class="mb-0">Enjoy add-ons such as lounge access & car hire with your booking.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                <div class="reason-item rounded text-center p-4">
                    <div class="reason-number mb-3 text-primary" style="font-size: 2rem;">4.</div>
                    <h5 class="mb-3">Book a Hotel with Parking</h5>
                    <p class="mb-0">Start your trip a day early by booking a hotel with parking.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="reason-item rounded text-center p-4">
                    <div class="reason-number mb-3 text-primary" style="font-size: 2rem;">5.</div>
                    <h5 class="mb-3">Exclusive Discounts</h5>
                    <p class="mb-0">We offer exclusive parking discounts that beat other sites.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Reasons End -->


<!-- Join Section Start -->
<div class="container-fluid join bg-light py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
            <h1 class="display-5 text-capitalize mb-4">Join Here for Discounts and Offers</h1>
            <p class="mb-4">Sign-up for the SkyLink weekly newsletter and you’ll receive discounted airport
                parking and hotels across the UK.</p>
            <form class="d-flex justify-content-center">
                <div class="input-group mb-3" style="max-width: 500px;">
                    <input type="email" class="form-control" placeholder="Your Email" aria-label="Your Email" required>
                    <button class="btn btn-primary" type="submit">Join Now</button>
                </div>
            </form>
            <p class="mt-3">Stay updated on the latest offers and never miss out on savings!</p>
        </div>
    </div>
</div>
<!-- Join Section End -->




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