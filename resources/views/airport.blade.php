<!-- resources/views/airport-parking.blade.php -->

@extends('layouts.app')

@section('title', 'Manchester Airport Parking')

@section('content')

<!-- Airport Parking Start -->
<div class="container-fluid steps py-5">
    <div class="container py-5">

        <!-- Main Title -->
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s">
            <h1 class="display-5 text-white text-capitalize mb-3">Manchester Airport Parking</h1>
            <p class="mb-0 text-white">Secure your parking at Manchester Airport for as low as £2.73 per day. Explore
                our various
                parking solutions tailored to your needs.</p>

            <div class="row g-5">



                <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                    <div class=" p-5 rounded">
                        <form>
                            <div class="row g-4">
                                <div class="col-lg-3">
                                    <div class="form-floating">
                                        <input type="date" class="form-control" id="dropOffDate"
                                            placeholder="Drop Off Date" required>
                                        <label for="dropOffDate">Drop Off Date</label>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-floating">
                                        <input type="time" class="form-control" id="dropOffTime"
                                            placeholder="Drop Off Time" required>
                                        <label for="dropOffTime">Drop Off Time</label>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-floating">
                                        <input type="date" class="form-control" id="pickUpDate"
                                            placeholder="Pick Up Date" required>
                                        <label for="pickUpDate">Pick Up Date</label>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-floating">
                                        <input type="time" class="form-control" id="pickUpTime"
                                            placeholder="Pick Up Time" required>
                                        <label for="pickUpTime">Pick Up Time</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-light w-100 py-3" type="submit">Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container py-5">
    <!-- Parking Booking Form -->
    <div class="row g-5">


        <!-- Parking Offers Section -->
        <div class="col-12 wow fadeInUp" data-wow-delay="0.3s">
            <div class="bg-light p-4 rounded mb-4">
                <h2 class="text-primary mt-4">Parking Offers</h2>
                <p>Please note: These parking offers are accurate at the time of writing for a 4 and 8 day stay in
                    January 2025. Parking deals are subject to change according to availability on the dates you
                    need.</p>
            </div>

            <div class="bg-white p-4 rounded mb-4 shadow-sm">
                <h4>Off-Airport Parking at Manchester Airport</h4>
                <p>Book NCP Flightpath - Park & Ride for 4 days for just £23.00*</p>
                <p>Travel to and from Manchester Airport with ease by choosing from our wide range of off-airport
                    parking. Avoid the hassle and high cost of searching for a last-minute parking spot at the
                    airport and take advantage of our Park and Ride services.</p>
                <p><strong>*Note:</strong> Parking procedures may vary between different products. Please refer to
                    individual product pages for specific details.</p>
            </div>

            <div class="bg-white p-4 rounded mb-4 shadow-sm">
                <h4>Official Manchester Airport Parking</h4>
                <p>Book a 4-day stay at JetParks 3 - Official Airport Parking for just £49.99*</p>
                <p>Discover the perfect blend of convenience and value with our range of Official Manchester Airport
                    parking options.</p>
                <p><strong>*Note:</strong> Parking processes may differ between products; please check individual
                    product pages for details.</p>
            </div>

            <div class="bg-white p-4 rounded mb-4 shadow-sm">
                <h4>Live Departure Updates for Manchester Airport</h4>
                <p>If you need to find out your Manchester departing terminal or the latest status information for
                    flights, you can check your flight on the Manchester Airport live status board.</p>
            </div>
        </div>

        <!-- Additional Information Section -->
        <div class="col-12 wow fadeInUp" data-wow-delay="0.5s">
            <div class="bg-light p-4 rounded mb-4">
                <h2 class="text-primary mt-4">Additional Information</h2>
            </div>

            <div class="bg-white p-4 rounded mb-4 shadow-sm">
                <h4>Manchester Airport Security, Baggage & Liquids</h4>
                <p>If you are unsure of what the Manchester security controls are, and what you can or can't take on
                    the aircraft, please refer to the detailed instructions provided by Manchester Airport security.
                </p>
            </div>

            <!-- Frequently Asked Questions Section -->
            <div class="col-12 wow fadeInUp" data-wow-delay="0.6s">
                <div class="bg-light p-4 rounded mb-4">
                    <h2 class="text-primary mt-4">Frequently Asked Questions</h2>
                    <p>See below for our most commonly asked questions. If you'd like to ask anything else, please
                        contact us directly.</p>
                </div>

                <div class="accordion" id="faqAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                How do I transfer between terminals?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                You can transfer between terminals using the complimentary shuttle bus service or
                                the designated walkways.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Is there a maximum height restriction for any of the multi-storey car parks?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Yes, there is a maximum height restriction of 2.1 meters for the multi-storey car
                                parks.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                How can I drop off and pick up family/friends at the airport?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                You can drop off and pick up passengers at the designated drop-off zones in front of
                                the terminal.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Where is Blue Badge parking located, and how can I use it?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Blue Badge parking is located near the terminal entrances. You must display your
                                Blue Badge to park in these spaces.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                What are the options for electric vehicle charging at the airport?
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Electric vehicle charging points are available in several car parks. Please check
                                the airport's website for specific locations.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                Can I amend or cancel my parking reservation if my travel plans change?
                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Yes, you can amend or cancel your parking reservation online up to 24 hours before
                                your arrival time.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSeven">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                What security measures are in place in the car parks?
                            </button>
                        </h2>
                        <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                The car parks are monitored by CCTV, and regular patrols are conducted to ensure the
                                safety of vehicles.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Help & Support Section -->
        <div class="col-12 wow fadeInUp" data-wow-delay="0.6s">
            <div class="bg-light p-4 rounded mb-4">
                <h2 class="text-primary mt-4">Help & Support</h2>
            </div>

            <div class="bg-white p-4 rounded mb-4 shadow-sm">
                <h4>Park Mark - The Park Mark Safer Parking Scheme</h4>
                <p>Park Mark is a national standard for UK car parks. It shows they have low crime and measures to
                    ensure the safety of customers and their vehicles.</p>
            </div>

            <div class="bg-white p-4 rounded mb-4 shadow-sm">
                <h4>Helpful Links</h4>
                <p>Helpful links and tips for Manchester Airport parking.</p>
                <ul>
                    <li><a href="#">Resend booking confirmation</a></li>
                    <li><a href="#">Amend your booking</a></li>
                    <li><a href="#">Customer FAQs</a></li>
                </ul>
            </div>

            <div class="bg-white p-4 rounded mb-4 shadow-sm">
                <h4>International Car Hire</h4>
                <p>Compare the prices for car hire. <a href="#">SEARCH NOW</a></p>
            </div>
        </div>
    </div>
</div>
<!-- Airport Parking End -->

@endsection