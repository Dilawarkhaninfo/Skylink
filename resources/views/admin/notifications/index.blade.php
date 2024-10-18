@extends('layouts.admin')

@section('title', 'Notifications & Alerts')

@section('content')
<div class="container">
    <h1 class="mt-4">Notifications & Alerts</h1>
    <div class="card">
        <div class="card-header">
            <h5>Recent Notifications</h5>
        </div>
        <div class="card-body">
            <p>Check the latest notifications sent to customers and administrators.</p>
            <ul class="list-group">
                <li class="list-group-item">Reminder: Your booking is due tomorrow.</li>
                <li class="list-group-item">New car models are available for rent!</li>
                <li class="list-group-item">Customer feedback: Great service!</li>
            </ul>
            <button class="btn btn-warning mt-3">View All Notifications</button>
        </div>
    </div>
</div>
@endsection