@extends('layouts.admin')

@section('title', 'Calendar View for Bookings')

@section('content')
<div class="container">
    <h1 class="mt-4">Calendar View for Bookings</h1>
    <div class="card">
        <div class="card-header">
            <h5>Your Bookings</h5>
        </div>
        <div class="card-body">
            <p>Visualize your bookings on the calendar.</p>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Booking Details</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>October 20, 2024</td>
                            <td>Sedan - Airport Transfer</td>
                            <td>Confirmed</td>
                        </tr>
                        <tr>
                            <td>October 22, 2024</td>
                            <td>SUV - Car Rental</td>
                            <td>Pending</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <button class="btn btn-info mt-3">Add New Booking</button>
        </div>
    </div>
</div>
@endsection