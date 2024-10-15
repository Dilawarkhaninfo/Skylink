@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
<div class="">
    <!-- Dashboard Overview -->
    <div class="content">
        <div class="row">
            <div class="col-12">
                <div class="card mb-3">
                    <div class="card-body shadow">
                        <div class="d-flex justify-content-between">
                            <div class="">
                                <h5>Dashboard Overview</h5>
                            </div>
                            <div class="">
                                <!-- Right-side notification and icons -->
                                <div class="col-auto nav-right">
                                    <button class="icon-btn">
                                        <i class="fas fa-bell"></i>
                                    </button>
                                    <button class="icon-btn">
                                        <i class="fas fa-envelope"></i>
                                    </button>
                                    <button class="icon-btn">
                                        <i class="fas fa-user-circle"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-primary text-white mb-4">
                    <div class="card-body">
                        <h5>Total Bookings</h5>
                        <p>123</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-success text-white mb-4">
                    <div class="card-body">
                        <h5>Revenue Summary</h5>
                        <p>$1,234.56 (Weekly)</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-warning text-white mb-4">
                    <div class="card-body">
                        <h5>Recent Bookings</h5>
                        <p>5 new bookings</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-info text-white mb-4">
                    <div class="card-body">
                        <h5>Customer Feedback</h5>
                        <p>12 new reviews</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Car Availability per Airport -->
    <div class="content mt-4">
        <h4>Car Availability per Airport</h4>
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5>Select Airport</h5>
                        <select class="form-control">
                            <option>Airport 1</option>
                            <option>Airport 2</option>
                            <option>Airport 3</option>
                        </select>
                        <p>Available Cars: 10</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Booking Management -->
    <div class="content mt-4">
        <h4>Booking Management</h4>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Booking ID</th>
                    <th>Customer Name</th>
                    <th>Contact Info</th>
                    <th>Booking Date</th>
                    <th>Status</th>
                    <th>Payment Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>#12345</td>
                    <td>John Doe</td>
                    <td>john@example.com</td>
                    <td>2023-10-14</td>
                    <td>Confirmed</td>
                    <td>Paid</td>
                    <td>
                        <button class="btn btn-primary btn-sm">Edit</button>
                        <button class="btn btn-danger btn-sm">Cancel</button>
                    </td>
                </tr>
                <!-- More booking records can go here -->
            </tbody>
        </table>
    </div>

    <!-- Pricing and Payment Management -->
    <div class="content mt-4">
        <h4>Pricing and Payment Management</h4>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Payment ID</th>
                    <th>Customer Name</th>
                    <th>Booking ID</th>
                    <th>Payment Method</th>
                    <th>Amount Paid</th>
                    <th>Date</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>#98765</td>
                    <td>Jane Doe</td>
                    <td>#12345</td>
                    <td>Credit Card</td>
                    <td>$100</td>
                    <td>2023-10-13</td>
                    <td>Paid</td>
                </tr>
                <!-- More payment records can go here -->
            </tbody>
        </table>
    </div>

    <!-- Customer Management -->
    <div class="content mt-4">
        <h4>Customer Management</h4>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Customer Name</th>
                    <th>Contact Info</th>
                    <th>Booking History</th>
                    <th>Feedback/Complaints</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>John Doe</td>
                    <td>john@example.com</td>
                    <td>5 bookings</td>
                    <td>2 complaints</td>
                </tr>
                <!-- More customer records can go here -->
            </tbody>
        </table>
    </div>

    <!-- Reports & Analytics -->
    <div class="content mt-4">
        <h4>Reports & Analytics</h4>
        <button class="btn btn-info">Generate Revenue Report</button>
        <button class="btn btn-info">Generate Booking Report</button>
        <button class="btn btn-info">Generate Customer Report</button>
    </div>

    <!-- Notifications & Alerts -->
    <div class="content mt-4">
        <h4>Notifications & Alerts</h4>
        <p>Email and SMS Notifications for bookings, payments, and reminders.</p>
    </div>

    <!-- Coupon Management -->
    <div class="content mt-4">
        <h4>Coupon Management</h4>
        <button class="btn btn-success">Create New Coupon</button>
        <table class="table table-bordered mt-2">
            <thead>
                <tr>
                    <th>Coupon Code</th>
                    <th>Discount</th>
                    <th>Expiration Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>SAVE10</td>
                    <td>10%</td>
                    <td>2024-12-31</td>
                    <td>
                        <button class="btn btn-primary btn-sm">Edit</button>
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
                <!-- More coupon records can go here -->
            </tbody>
        </table>
    </div>

    <!-- Settings -->
    <div class="content mt-4">
        <h4>Settings</h4>
        <button class="btn btn-primary">Site Configuration</button>
        <button class="btn btn-primary">Payment Gateway Configuration</button>
        <button class="btn btn-primary">Email/SMS Notifications Settings</button>
    </div>
</div>
@endsection