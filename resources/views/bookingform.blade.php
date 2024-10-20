<!-- resources/views/carhire.blade.php -->

@extends('layouts.app')

@section('title', 'Booking Form')

@section('content')

<!-- Booking Form Start -->
<div class="container py-5">
    <div class="text-center mx-auto pb-5">
        <h1 class="display-5 text-capitalize mb-3">Parking <span class="text-primary">Booking Form</span></h1>
        <p class="mb-0">Please fill in your details to complete your parking reservation.</p>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-9 p-3 card shadow">
            <form action="#" method="POST" id="bookingForm">
                @csrf

                <!-- Step 1: Personal Information -->
                <div class="step" id="step1">
                    <h4 class="mb-3">Personal Information</h4>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="first_name" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="first_name" name="first_name" required>
                        </div>
                        <div class="col-md-6">
                            <label for="last_name" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="last_name" name="last_name" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="text" class="form-control" id="phone" name="phone" required>
                    </div>
                    <button type="button" class="btn btn-primary rounded-pill mb-3 button-width"
                        onclick="nextStep(2)">Next</button>
                </div>

                <!-- Step 2: Vehicle Information -->
                <div class="step" id="step2" style="display:none;">
                    <h4 class="mb-3">Vehicle Information</h4>
                    <div class="mb-3">
                        <label for="vehicle_make" class="form-label">Vehicle Make</label>
                        <input type="text" class="form-control" id="vehicle_make" name="vehicle_make" required>
                    </div>
                    <div class="mb-3">
                        <label for="vehicle_model" class="form-label">Vehicle Model</label>
                        <input type="text" class="form-control" id="vehicle_model" name="vehicle_model" required>
                    </div>
                    <div class="mb-3">
                        <label for="vehicle_number" class="form-label">Vehicle Number Plate</label>
                        <input type="text" class="form-control" id="vehicle_number" name="vehicle_number" required>
                    </div>
                    <button type="button" class="btn btn-secondary rounded-pill mb-3 button-width"
                        onclick="previousStep(1)">Back</button>
                    <button type="button" class="btn btn-primary rounded-pill mb-3 button-width"
                        onclick="nextStep(3)">Next</button>
                </div>

                <!-- Step 3: Parking Selection -->
                <div class="step" id="step3" style="display:none;">
                    <h4 class="mb-3">Select Parking Option</h4>
                    <select class="form-select mb-3" id="parking_option" name="parking_option" required>
                        <option value="">Select Parking Option</option>
                        <option value="premium">Premium Parking</option>
                        <option value="long_term">Long-Term Parking</option>
                        <option value="valet">Valet Parking</option>
                    </select>
                    <div class="mb-4">
                        <h4 class="mb-3">Booking Dates</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="checkin_date" class="form-label">Check-in Date</label>
                                <input type="date" class="form-control" id="checkin_date" name="checkin_date" required>
                            </div>
                            <div class="col-md-6">
                                <label for="checkout_date" class="form-label">Check-out Date</label>
                                <input type="date" class="form-control" id="checkout_date" name="checkout_date"
                                    required>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-secondary rounded-pill mb-3 button-width"
                        onclick="previousStep(2)">Back</button>
                    <button type="button" class="btn btn-primary rounded-pill mb-3 button-width"
                        onclick="nextStep(4)">Next</button>
                </div>

                <!-- Step 4: Payment Information -->
                <div class="step" id="step4" style="display:none;">
                    <h4 class="mb-3">Payment Information</h4>
                    <div class="mb-3">
                        <label for="card_number" class="form-label">Credit/Debit Card Number</label>
                        <input type="text" class="form-control" id="card_number" name="card_number" required>
                    </div>
                    <div class="row my-3">
                        <div class="col-md-6">
                            <label for="expiry_date" class="form-label">Expiry Date</label>
                            <input type="month" class="form-control" id="expiry_date" name="expiry_date" required>
                        </div>
                        <div class="col-md-6">
                            <label for="cvv" class="form-label">CVV</label>
                            <input type="text" class="form-control" id="cvv" name="cvv" required>
                        </div>
                    </div>
                    <button type="button" class="btn btn-secondary rounded-pill mb-3 button-width"
                        onclick="previousStep(3)">Back</button>
                    <button type="submit" class="btn btn-primary rounded-pill mb-3 button-width">Confirm
                        Booking</button>
                </div>

            </form>
        </div>
    </div>
</div>
<!-- Booking Form End -->

@endsection