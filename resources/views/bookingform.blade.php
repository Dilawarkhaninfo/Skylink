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
            <form action="" method="POST" id="bookingForm">
                @csrf

                <!-- Step 1: Personal Information -->
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

                <!-- Step 2: Vehicle Information -->
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

                <!-- Step 3: Parking Selection -->
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
                            <input type="date" class="form-control" id="checkout_date" name="checkout_date" required>
                        </div>
                    </div>
                </div>

                <!-- Step 4: Payment Information -->
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

                <button type="button" class="btn btn-primary rounded-pill mb-3" onclick="showModal()">Confirm
                    Booking</button>
            </form>
        </div>
    </div>
</div>

<!-- Modal for Car Details and Payment -->
<div class="modal fade" id="carDetailsModal" tabindex="-1" aria-labelledby="carDetailsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="carDetailsModalLabel">Car Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <h4>Payment Checkout</h4>
                        <p><strong>Credit/Debit Card Number:</strong> <span id="modal_card_number"></span></p>
                        <p><strong>Expiry Date:</strong> <span id="modal_expiry_date"></span></p>
                        <p><strong>CVV:</strong> <span id="modal_cvv"></span></p>
                    </div>
                    <div class="col-md-6">
                        <h4>Car Details</h4>
                        <p><strong>Make:</strong> <span id="modal_car_make"></span></p>
                        <p><strong>Model:</strong> <span id="modal_car_model"></span></p>
                        <p><strong>Number Plate:</strong> <span id="modal_car_number"></span></p>
                        <p><strong>Parking Option:</strong> <span id="modal_parking_option"></span></p>
                        <p><strong>Check-in:</strong> <span id="modal_checkin_date"></span></p>
                        <p><strong>Check-out:</strong> <span id="modal_checkout_date"></span></p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Complete Booking</button>
            </div>
        </div>
    </div>
</div>
<!-- Booking Form End -->

<script>
function showModal() {
    // Populate modal with form data
    document.getElementById('modal_card_number').innerText = document.getElementById('card_number').value;
    document.getElementById('modal_expiry_date').innerText = document.getElementById('expiry_date').value;
    document.getElementById('modal_cvv').innerText = document.getElementById('cvv').value;
    document.getElementById('modal_car_make').innerText = document.getElementById('vehicle_make').value;
    document.getElementById('modal_car_model').innerText = document.getElementById('vehicle_model').value;
    document.getElementById('modal_car_number').innerText = document.getElementById('vehicle_number').value;
    document.getElementById('modal_parking_option').innerText = document.getElementById('parking_option').value;
    document.getElementById('modal_checkin_date').innerText = document.getElementById('checkin_date').value;
    document.getElementById('modal_checkout_date').innerText = document.getElementById('checkout_date').value;

    // Show modal
    var modal = new bootstrap.Modal(document.getElementById('carDetailsModal'));
    modal.show();
}
</script>

@endsection