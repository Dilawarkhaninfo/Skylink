<!-- resources/views/resendconformation.blade.php -->

@extends('layouts.app')

@section('title', 'Resend Conformation')

@section('content')


<!-- Resend Confirmation Start -->
<div class="container-fluid steps py-5">
    <div class="container py-5">

        <!-- Main Title -->
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s">
            <h1 class="display-5 text-white text-capitalize mb-3">Resend Booking Confirmation</h1>
            <p class="mb-0 text-white">Enter your details below to resend your booking confirmation.</p>
        </div>

        <!-- Resend Confirmation Form -->
        <div class="row g-5">
            <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                <div class="p-5 rounded bg-light">
                    <h5 class="mb-4 text-center">Booking Details</h5>

                    <form>
                        <div class="row g-4">
                            <!-- Booking Type -->
                            <div class="col-lg-12">
                                <div class="form-floating">
                                    <select class="form-select" id="bookingType" required>
                                        <option value="" disabled selected>Select Booking Type</option>
                                        <option value="airport_parking">Airport Parking</option>
                                        <option value="meet_and_greet">Meet & Greet</option>
                                        <option value="valet_parking">Valet Parking</option>
                                    </select>
                                    <label for="bookingType">Booking Type</label>
                                </div>
                            </div>

                            <!-- Email Address -->
                            <div class="col-lg-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="Your email address"
                                        required>
                                    <label for="email">Your Email Address</label>
                                </div>
                            </div>

                            <!-- Booking Reference -->
                            <div class="col-lg-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="bookingReference"
                                        placeholder="Booking ref (optional)">
                                    <label for="bookingReference">Booking Reference (Optional)</label>
                                </div>
                            </div>

                            <div class="col-12">
                                <p class="text-muted text-center">*If no booking reference is entered, the latest
                                    booking details will be sent.</p>
                                <button class="btn btn-primary w-100 py-3" type="submit">Find & Re-Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Contact Information -->
        <div class="row g-5 mt-4">
            <div class="col-12 wow fadeInUp" data-wow-delay="0.3s">
                <div class="p-5 rounded bg-light">
                    <h5 class="mb-4 text-center">Contact Us</h5>
                    <p class="text-center">Rather speak to a real live human being?</p>
                    <p class="text-center">Email: <a href="mailto:info@SkyLink.com">info@SkyLink.com</a></p>
                    <h6 class="text-center">Normal Office Hours</h6>
                    <ul class="list-unstyled text-center">
                        <li>Monday - Friday: 9am - 5pm</li>
                        <li>Wednesday: 9:30am – 5pm (staff training)</li>
                        <li>Saturday - Sunday: CLOSED (including Bank Holidays*)</li>
                    </ul>
                    <p class="text-center">
                        *Christmas Day - Closed<br>
                        *Boxing Day - 10am until 2pm<br>
                        *New Year's Day - 10am until 2pm
                    </p>
                    <h6 class="text-center">Office Address:</h6>
                    <p class="text-center">6th Floor Olympic House<br>Manchester Airport<br>Manchester, England<br>M90
                        1QX, United Kingdom</p>
                    <p class="text-center">SkyLink Ltd</p>
                    <p class="text-center">Company Reg No. 5602720</p>
                    <p class="text-center">VAT Reg No. 82 5334929</p>
                    <p class="text-center">Data Protection Registration: ZA172147</p>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- Resend Confirmation End -->

@endsection