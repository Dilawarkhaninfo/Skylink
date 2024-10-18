<!-- resources/views/mybooking.blade.php -->

@extends('layouts.app')

@section('title', 'My Booking')

@section('content')

<!-- Airport Parking Start -->
<div class="container-fluid steps py-5">
    <div class="container py-5">

        <!-- Main Title -->
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s">
            <h1 class="display-5 text-white text-capitalize mb-3">Manage Your Booking</h1>
            <p class="mb-0 text-white">Easily find and manage your parking reservations at Manchester Airport. Enter
                your details below to locate your booking.</p>
        </div>

        <!-- Booking Search Section -->
        <div class="row g-5">
            <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                <div class="p-5 rounded bg-light">
                    <h5 class="mb-4 text-center">Search for Your Booking</h5>
                    <form>
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="Email address"
                                        required>
                                    <label for="email">Email Address</label>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="bookingReference"
                                        placeholder="Booking Reference" required>
                                    <label for="bookingReference">Booking Reference</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Search</button>
                            </div>
                        </div>
                    </form>
                    <p class="mt-3 text-center text-muted">If you have any issues finding your booking, please contact
                        our support team.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Airport Parking End -->

@endsection