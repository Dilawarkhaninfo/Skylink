@extends('layouts.admin')

@section('title', 'Create Booking')

@section('content')
<div class="container">

    <div class="content">
        <h2>Create New Booking</h2>
        <form>
            <div class="mb-3">
                <label for="customerName" class="form-label">Customer Name</label>
                <input type="text" class="form-control" id="customerName" required>
            </div>
            <div class="mb-3">
                <label for="checkIn" class="form-label">Check-In Date</label>
                <input type="date" class="form-control" id="checkIn" required>
            </div>
            <div class="mb-3">
                <label for="checkOut" class="form-label">Check-Out Date</label>
                <input type="date" class="form-control" id="checkOut" required>
            </div>
            <button type="submit" class="btn btn-success">Create Booking</button>
        </form>
    </div>
</div>
@endsection