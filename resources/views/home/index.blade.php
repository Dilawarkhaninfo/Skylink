<!-- resources/views/home/index.blade.php -->

@extends('layouts.app')

@section('title', 'Home')

@section('content')

<!-- Carousel Start -->
<div class="header-carousel p-0 m-0">
    <div id="carouselId" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
        <ol class="carousel-indicators">
            <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="First slide"></li>
            <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img src="img/carousel-2.jpg" class="img-fluid w-100" alt="First slide" />
                <div class="carousel-caption">
                    <div class="container py-4">
                        <div class="row g-5">
                            <div class="col-lg-7 fadeInLeft animated" data-animation="fadeInLeft" data-delay="1s"
                                style="animation-delay: 1s;">
                                <div class="bg-secondary rounded p-5">
                                    <h4 class="text-white mb-4">BOOK YOUR CAR PARKING NOW</h4>

                                    <!-- Tabs Navigation -->
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="parking-tab" data-bs-toggle="tab"
                                                data-bs-target="#parking" type="button" role="tab"
                                                aria-controls="parking" aria-selected="true"><span
                                                    class="text-black">Airport Parking </span></button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="hotel-parking-tab" data-bs-toggle="tab"
                                                data-bs-target="#hotel-parking" type="button" role="tab"
                                                aria-controls="hotel-parking" aria-selected="false"><span
                                                    class="text-black">Airport Hotel with
                                                    Parking </span></button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="lounge-tab" data-bs-toggle="tab"
                                                data-bs-target="#lounge" type="button" role="tab" aria-controls="lounge"
                                                aria-selected="false"><span class="text-black">Airport
                                                    Lounge</span></button>
                                        </li>
                                    </ul>

                                    <!-- Tab Content -->
                                    <div class="tab-content" id="myTabContent">
                                        <!-- Airport Parking -->
                                        <div class="tab-pane fade show active" id="parking" role="tabpanel"
                                            aria-labelledby="parking-tab">
                                            <form>
                                                <div class="row text-start g-3 mt-3">
                                                    <!-- Airport Name -->
                                                    <div class="col-12">
                                                        <label for="airport-name"
                                                            class="form-label text-white text-start">Airport
                                                            Name</label>
                                                        <input id="airport-name" class="form-control" type="text"
                                                            placeholder="Enter Airport Name"
                                                            aria-label="Enter Airport Name">
                                                    </div>
                                                    <!-- Drop-off Date and Time -->
                                                    <div class="col-6">
                                                        <label for="dropoff-date"
                                                            class="form-label text-white text-start">Drop-off
                                                            Date</label>
                                                        <input id="dropoff-date" class="form-control" type="date"
                                                            placeholder="Drop-off Date" aria-label="Drop-off Date">
                                                    </div>
                                                    <div class="col-6">
                                                        <label for="dropoff-time"
                                                            class="form-label text-white text-start">Drop-off
                                                            Time</label>
                                                        <input id="dropoff-time" class="form-control" type="time"
                                                            placeholder="Drop-off Time" aria-label="Drop-off Time">
                                                    </div>
                                                    <!-- Pickup Date and Time -->
                                                    <div class="col-6">
                                                        <label for="pickup-date"
                                                            class="form-label text-white text-start">Pickup
                                                            Date</label>
                                                        <input id="pickup-date" class="form-control" type="date"
                                                            placeholder="Pickup Date" aria-label="Pickup Date">
                                                    </div>
                                                    <div class="col-6">
                                                        <label for="pickup-time"
                                                            class="form-label text-white text-start">Pickup
                                                            Time</label>
                                                        <input id="pickup-time" class="form-control" type="time"
                                                            placeholder="Pickup Time" aria-label="Pickup Time">
                                                    </div>
                                                    <!-- Promo Code -->
                                                    <div class="col-12">
                                                        <label for="promo-code"
                                                            class="form-label text-white text-start">Promo Code
                                                            (Optional)</label>
                                                        <input id="promo-code" class="form-control" type="text"
                                                            placeholder="Promo Code (Optional)" aria-label="Promo Code">
                                                    </div>
                                                    <!-- Extras -->
                                                    <div class="col-12">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="freeSMS">
                                                            <label class="form-check-label text-white"
                                                                for="freeSMS">Free SMS Updates</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="cancelFree">
                                                            <label class="form-check-label text-white"
                                                                for="cancelFree">Cancel for Free</label>
                                                        </div>
                                                    </div>
                                                    <!-- Submit Button -->
                                                    <div class="col-12">
                                                        <button class="btn btn-light w-100 py-2">Search for
                                                            Parking</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                        <!-- Airport Hotel with Parking -->
                                        <div class="tab-pane fade" id="hotel-parking" role="tabpanel"
                                            aria-labelledby="hotel-parking-tab">
                                            <form>
                                                <div class="row text-start g-3 mt-3">
                                                    <!-- Airport Name -->
                                                    <div class="col-12">
                                                        <label for="hotel-airport-name"
                                                            class="form-label text-white text-start">Airport
                                                            Name</label>
                                                        <input id="hotel-airport-name" class="form-control" type="text"
                                                            placeholder="Enter Airport Name"
                                                            aria-label="Enter Airport Name">
                                                    </div>
                                                    <!-- Night Of Stay -->
                                                    <div class="col-6">
                                                        <label for="night-of-stay"
                                                            class="form-label text-white text-start">Night
                                                            Of Stay</label>
                                                        <input id="night-of-stay" class="form-control" type="date"
                                                            placeholder="Night Of Stay" aria-label="Night Of Stay">
                                                    </div>
                                                    <!-- Parking Until Date -->
                                                    <div class="col-6">
                                                        <label for="parking-until"
                                                            class="form-label text-white text-start">Parking
                                                            Until</label>
                                                        <input id="parking-until" class="form-control" type="date"
                                                            placeholder="Parking Until" aria-label="Parking Until">
                                                    </div>
                                                    <!-- Room Type -->
                                                    <div class="col-12">
                                                        <label for="room-type"
                                                            class="form-label text-white text-start">Room
                                                            Type</label>
                                                        <select id="room-type" class="form-select"
                                                            aria-label="Select Room Type">
                                                            <option selected>Select Room Type</option>
                                                            <option value="1">Single Room</option>
                                                            <option value="2">Double Room</option>
                                                            <option value="3">Family Room</option>
                                                        </select>
                                                    </div>
                                                    <!-- Promo Code -->
                                                    <div class="col-12">
                                                        <label for="hotel-promo-code"
                                                            class="form-label text-white text-start">Promo Code
                                                            (Optional)</label>
                                                        <input id="hotel-promo-code" class="form-control" type="text"
                                                            placeholder="Promo Code (Optional)" aria-label="Promo Code">
                                                    </div>
                                                    <!-- Extras -->
                                                    <div class="col-12">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="freeSMS-hotel">
                                                            <label class="form-check-label text-white"
                                                                for="freeSMS-hotel">Free SMS Updates</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="cancelFree-hotel">
                                                            <label class="form-check-label text-white"
                                                                for="cancelFree-hotel">Cancel for Free</label>
                                                        </div>
                                                    </div>
                                                    <!-- Submit Button -->
                                                    <div class="col-12">
                                                        <button class="btn btn-light w-100 py-2">Search for Hotel &
                                                            Parking</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                        <!-- Airport Lounge -->
                                        <div class="tab-pane fade" id="lounge" role="tabpanel"
                                            aria-labelledby="lounge-tab">
                                            <form>
                                                <div class="row text-start g-3 mt-3">
                                                    <!-- Room Type -->
                                                    <div class="col-12">
                                                        <label for="lounge-room-type"
                                                            class="form-label text-white text-start">Room
                                                            Type</label>
                                                        <select id="lounge-room-type" class="form-select"
                                                            aria-label="Select Room Type">
                                                            <option selected>Select Room Type</option>
                                                            <option value="1">Business Lounge</option>
                                                            <option value="2">VIP Lounge</option>
                                                        </select>
                                                    </div>
                                                    <!-- Infants (0-1) -->
                                                    <div class="col-4">
                                                        <label for="infants"
                                                            class="form-label text-white text-start">Infants
                                                            (0-1)</label>
                                                        <input id="infants" class="form-control" type="number"
                                                            placeholder="Infants (0-1)" min="0"
                                                            aria-label="Infants (0-1)">
                                                    </div>
                                                    <!-- Children (1-12) -->
                                                    <div class="col-4">
                                                        <label for="children"
                                                            class="form-label text-white text-start">Children
                                                            (1-12)</label>
                                                        <input id="children" class="form-control" type="number"
                                                            placeholder="Children (1-12)" min="0"
                                                            aria-label="Children (1-12)">
                                                    </div>
                                                    <!-- Adults (12+) -->
                                                    <div class="col-4">
                                                        <label for="adults"
                                                            class="form-label text-white text-start">Adults
                                                            (12+)</label>
                                                        <input id="adults" class="form-control" type="number"
                                                            placeholder="Adults (12+)" min="0"
                                                            aria-label="Adults (12+)">
                                                    </div>
                                                    <!-- Departure Date -->
                                                    <div class="col-6">
                                                        <label for="departure-date"
                                                            class="form-label text-white text-start">Departure
                                                            Date</label>
                                                        <input id="departure-date" class="form-control" type="date"
                                                            placeholder="Departure Date" aria-label="Departure Date">
                                                    </div>
                                                    <!-- Lounge Entry Time -->
                                                    <div class="col-6">
                                                        <label for="lounge-entry-time"
                                                            class="form-label text-white text-start">Lounge Entry
                                                            Time</label>
                                                        <input id="lounge-entry-time" class="form-control" type="time"
                                                            placeholder="Lounge Entry Time"
                                                            aria-label="Lounge Entry Time">
                                                    </div>
                                                    <!-- Promo Code -->
                                                    <div class="col-12">
                                                        <label for="lounge-promo-code"
                                                            class="form-label text-white text-start">Promo Code
                                                            (Optional)</label>
                                                        <input id="lounge-promo-code" class="form-control" type="text"
                                                            placeholder="Promo Code (Optional)" aria-label="Promo Code">
                                                    </div>
                                                    <!-- Submit Button -->
                                                    <div class="col-12">
                                                        <button class="btn btn-light w-100 py-2">Search for
                                                            Lounge</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-5 d-none d-lg-flex fadeInRight animated" data-animation="fadeInRight"
                                data-delay="1s" style="animation-delay: 1s;">
                                <div class="text-start">
                                    <h1 class="display-5 text-white">Get 15% Off Your Rental</h1>
                                    <p>Plan your trip now and enjoy great savings!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/carousel-1.jpg" class="img-fluid w-100" alt="Second slide" />
                <div class="carousel-caption">
                    <div class="container py-4">
                        <div class="row g-5">
                            <div class="col-lg-6 fadeInLeft animated" data-animation="fadeInLeft" data-delay="1s"
                                style="animation-delay: 1s;">
                                <div class="bg-secondary rounded p-5">
                                    <h4 class="text-white mb-4">BOOK YOUR CAR PARKING NOW</h4>
                                    <form>
                                        <div class="row g-3">
                                            <div class="col-12">
                                                <select class="form-select" aria-label="Select car type">
                                                    <option selected>Select Your Car Type</option>
                                                    <option value="1">VW Golf VII</option>
                                                    <option value="2">Audi A1 S-Line</option>
                                                    <option value="3">Toyota Camry</option>
                                                    <option value="4">BMW 320 ModernLine</option>
                                                </select>
                                            </div>
                                            <div class="col-12">
                                                <div class="input-group">
                                                    <div
                                                        class="d-flex align-items-center bg-light text-body rounded-start p-2">
                                                        <span class="fas fa-map-marker-alt"></span><span
                                                            class="ms-1">Pick Up</span>
                                                    </div>
                                                    <input class="form-control" type="text"
                                                        placeholder="Enter a City or Airport"
                                                        aria-label="Enter a City or Airport">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <a href="#" class="text-start text-white d-block mb-2">Need a different
                                                    drop-off location?</a>
                                                <div class="input-group">
                                                    <div
                                                        class="d-flex align-items-center bg-light text-body rounded-start p-2">
                                                        <span class="fas fa-map-marker-alt"></span><span
                                                            class="ms-1">Drop Off</span>
                                                    </div>
                                                    <input class="form-control" type="text"
                                                        placeholder="Enter a City or Airport"
                                                        aria-label="Enter a City or Airport">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="input-group">
                                                    <div
                                                        class="d-flex align-items-center bg-light text-body rounded-start p-2">
                                                        <span class="fas fa-calendar-alt"></span><span class="ms-1">Pick
                                                            Up</span>
                                                    </div>
                                                    <input class="form-control" type="date">
                                                    <select class="form-select ms-3" aria-label="Select pickup time">
                                                        <option selected>12:00 AM</option>
                                                        <option value="1">1:00 AM</option>
                                                        <option value="2">2:00 AM</option>
                                                        <option value="3">3:00 AM</option>
                                                        <option value="4">4:00 AM</option>
                                                        <option value="5">5:00 AM</option>
                                                        <option value="6">6:00 AM</option>
                                                        <option value="7">7:00 AM</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="input-group">
                                                    <div
                                                        class="d-flex align-items-center bg-light text-body rounded-start p-2">
                                                        <span class="fas fa-calendar-alt"></span><span class="ms-1">Drop
                                                            Off</span>
                                                    </div>
                                                    <input class="form-control" type="date">
                                                    <select class="form-select ms-3" aria-label="Select drop-off time">
                                                        <option selected>12:00 AM</option>
                                                        <option value="1">1:00 AM</option>
                                                        <option value="2">2:00 AM</option>
                                                        <option value="3">3:00 AM</option>
                                                        <option value="4">4:00 AM</option>
                                                        <option value="5">5:00 AM</option>
                                                        <option value="6">6:00 AM</option>
                                                        <option value="7">7:00 AM</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="input-group">
                                                    <label for="copenhagenCode" class="input-group-text">Copenhagen
                                                        Code</label>
                                                    <input type="text" class="form-control" id="copenhagenCode"
                                                        placeholder="Enter your code" aria-label="Copenhagen code">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <button class="btn btn-light w-100 py-2">Book Now</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-6 d-none d-lg-flex fadeInRight animated" data-animation="fadeInRight"
                                data-delay="1s" style="animation-delay: 1s;">
                                <div class="text-start">
                                    <h1 class="display-5 text-white">Get 15% Off Your Rental</h1>
                                    <p>Plan your trip now and enjoy great savings!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Carousel End -->




<!-- Features Start -->
<div class="container-fluid feature py-5">
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

<!-- Car Categories Start -->
<div class="container-fluid categories py-5">
    <div class="container pb-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
            <h1 class="display-5 text-capitalize mb-3">Vehicle <span class="text-primary">Categories</span></h1>
            <p class="mb-0">Explore our diverse range of vehicles tailored to meet your needs. Whether you seek luxury,
                efficiency, or adventure, we have the perfect ride for you!</p>
        </div>
        <div class="categories-carousel owl-carousel wow fadeInUp" data-wow-delay="0.1s">
            <!-- Category 1 -->
            <div class="categories-item p-4">
                <div class="categories-item-inner">
                    <div class="categories-img rounded-top">
                        <img src="img/car-1.png" class="img-fluid w-100 rounded-top" alt="Mercedes Benz R3">
                    </div>
                    <div class="categories-content rounded-bottom p-4">
                        <h4>Mercedes Benz R3</h4>
                        <div class="categories-review mb-4">
                            <div class="me-3">4.5 Review</div>
                            <div class="d-flex justify-content-center text-secondary">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star text-body"></i>
                            </div>
                        </div>
                        <div class="mb-4">
                            <h4 class="bg-white text-primary rounded-pill py-2 px-4 mb-0">$99.00/Day</h4>
                        </div>
                        <div class="row gy-2 gx-0 text-center mb-4">
                            <div class="col-4 border-end border-white">
                                <i class="fas fa-users text-dark"></i> <span class="text-body ms-1">4 Seats</span>
                            </div>
                            <div class="col-4 border-end border-white">
                                <i class="fas fa-car text-dark"></i> <span class="text-body ms-1">Automatic</span>
                            </div>
                            <div class="col-4">
                                <i class="fas fa-gas-pump text-dark"></i> <span class="text-body ms-1">Petrol</span>
                            </div>
                            <div class="col-4 border-end border-white">
                                <i class="fas fa-calendar-alt text-dark"></i> <span class="text-body ms-1">2015</span>
                            </div>
                            <div class="col-4 border-end border-white">
                                <i class="fas fa-cogs text-dark"></i> <span class="text-body ms-1">Automatic</span>
                            </div>
                            <div class="col-4">
                                <i class="fas fa-road text-dark"></i> <span class="text-body ms-1">27K Miles</span>
                            </div>
                        </div>
                        <a href="#" class="btn btn-primary rounded-pill d-flex justify-content-center py-3">Book Now</a>
                    </div>
                </div>
            </div>

            <!-- Category 2 -->
            <div class="categories-item p-4">
                <div class="categories-item-inner">
                    <div class="categories-img rounded-top">
                        <img src="img/car-2.png" class="img-fluid w-100 rounded-top" alt="Toyota Corolla Cross">
                    </div>
                    <div class="categories-content rounded-bottom p-4">
                        <h4>Toyota Corolla Cross</h4>
                        <div class="categories-review mb-4">
                            <div class="me-3">3.5 Review</div>
                            <div class="d-flex justify-content-center text-secondary">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star text-body"></i>
                            </div>
                        </div>
                        <div class="mb-4">
                            <h4 class="bg-white text-primary rounded-pill py-2 px-4 mb-0">$128.00/Day</h4>
                        </div>
                        <div class="row gy-2 gx-0 text-center mb-4">
                            <div class="col-4 border-end border-white">
                                <i class="fas fa-users text-dark"></i> <span class="text-body ms-1">4 Seats</span>
                            </div>
                            <div class="col-4 border-end border-white">
                                <i class="fas fa-car text-dark"></i> <span class="text-body ms-1">Automatic</span>
                            </div>
                            <div class="col-4">
                                <i class="fas fa-gas-pump text-dark"></i> <span class="text-body ms-1">Petrol</span>
                            </div>
                            <div class="col-4 border-end border-white">
                                <i class="fas fa-calendar-alt text-dark"></i> <span class="text-body ms-1">2015</span>
                            </div>
                            <div class="col-4 border-end border-white">
                                <i class="fas fa-cogs text-dark"></i> <span class="text-body ms-1">Automatic</span>
                            </div>
                            <div class="col-4">
                                <i class="fas fa-road text-dark"></i> <span class="text-body ms-1">27K Miles</span>
                            </div>
                        </div>
                        <a href="#" class="btn btn-primary rounded-pill d-flex justify-content-center py-3">Book Now</a>
                    </div>
                </div>
            </div>

            <!-- Category 3 -->
            <div class="categories-item p-4">
                <div class="categories-item-inner">
                    <div class="categories-img rounded-top">
                        <img src="img/car-3.png" class="img-fluid w-100 rounded-top" alt="Tesla Model S Plaid">
                    </div>
                    <div class="categories-content rounded-bottom p-4">
                        <h4>Tesla Model S Plaid</h4>
                        <div class="categories-review mb-4">
                            <div class="me-3">3.8 Review</div>
                            <div class="d-flex justify-content-center text-secondary">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star text-body"></i>
                            </div>
                        </div>
                        <div class="mb-4">
                            <h4 class="bg-white text-primary rounded-pill py-2 px-4 mb-0">$170.00/Day</h4>
                        </div>
                        <div class="row gy-2 gx-0 text-center mb-4">
                            <div class="col-4 border-end border-white">
                                <i class="fas fa-users text-dark"></i> <span class="text-body ms-1">4 Seats</span>
                            </div>
                            <div class="col-4 border-end border-white">
                                <i class="fas fa-car text-dark"></i> <span class="text-body ms-1">Automatic</span>
                            </div>
                            <div class="col-4">
                                <i class="fas fa-gas-pump text-dark"></i> <span class="text-body ms-1">Electric</span>
                            </div>
                            <div class="col-4 border-end border-white">
                                <i class="fas fa-calendar-alt text-dark"></i> <span class="text-body ms-1">2021</span>
                            </div>
                            <div class="col-4 border-end border-white">
                                <i class="fas fa-cogs text-dark"></i> <span class="text-body ms-1">Automatic</span>
                            </div>
                            <div class="col-4">
                                <i class="fas fa-road text-dark"></i> <span class="text-body ms-1">5K Miles</span>
                            </div>
                        </div>
                        <a href="#" class="btn btn-primary rounded-pill d-flex justify-content-center py-3">Book Now</a>
                    </div>
                </div>
            </div>

            <!-- Category 4 -->
            <div class="categories-item p-4">
                <div class="categories-item-inner">
                    <div class="categories-img rounded-top">
                        <img src="img/car-4.png" class="img-fluid w-100 rounded-top" alt="Hyundai Kona Electric">
                    </div>
                    <div class="categories-content rounded-bottom p-4">
                        <h4>Hyundai Kona Electric</h4>
                        <div class="categories-review mb-4">
                            <div class="me-3">4.8 Review</div>
                            <div class="d-flex justify-content-center text-secondary">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                        <div class="mb-4">
                            <h4 class="bg-white text-primary rounded-pill py-2 px-4 mb-0">$187.00/Day</h4>
                        </div>
                        <div class="row gy-2 gx-0 text-center mb-4">
                            <div class="col-4 border-end border-white">
                                <i class="fas fa-users text-dark"></i> <span class="text-body ms-1">4 Seats</span>
                            </div>
                            <div class="col-4 border-end border-white">
                                <i class="fas fa-car text-dark"></i> <span class="text-body ms-1">Automatic</span>
                            </div>
                            <div class="col-4">
                                <i class="fas fa-gas-pump text-dark"></i> <span class="text-body ms-1">Electric</span>
                            </div>
                            <div class="col-4 border-end border-white">
                                <i class="fas fa-calendar-alt text-dark"></i> <span class="text-body ms-1">2021</span>
                            </div>
                            <div class="col-4 border-end border-white">
                                <i class="fas fa-cogs text-dark"></i> <span class="text-body ms-1">Automatic</span>
                            </div>
                            <div class="col-4">
                                <i class="fas fa-road text-dark"></i> <span class="text-body ms-1">3K Miles</span>
                            </div>
                        </div>
                        <a href="#" class="btn btn-primary rounded-pill d-flex justify-content-center py-3">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Car Categories End -->

    <!-- Banner Start -->
    <div class="container-fluid banner pb-5 wow zoomInDown">
        <div class="container-fluid pb-5">
            <div class="banner-item rounded">
                <img src="img/banner-1.jpg" class="img-fluid rounded w-100" alt="Rent Your Car">
                <div class="banner-content">
                    <h2 class="text-primary">Rent Your Car Today</h2>
                    <h1 class="text-white">Interested in Renting?</h1>
                    <p class="text-white">Don’t hesitate to reach out! Our team is here to assist you with all your
                        rental
                        needs.</p>
                    <div class="banner-btn">
                        <a href="#" class="btn btn-secondary rounded-pill py-3 px-4 px-md-5 me-2">WhatsApp</a>
                        <a href="#" class="btn btn-primary rounded-pill py-3 px-4 px-md-5 ms-2">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->



    <!-- Testimonial Start -->
    <div class="container-fluid testimonial pb-5">
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