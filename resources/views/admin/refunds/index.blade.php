@extends('layouts.admin')

@section('title', 'Refunds Management')

@section('content')
<div class="container">
    <h1 class="mt-4">Refunds Management</h1>
    <div class="card">
        <div class="card-header">
            <h5>Process Refund Requests</h5>
        </div>
        <div class="card-body">
            <p>Manage and process refund requests from customers.</p>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Request ID</th>
                        <th>Customer Name</th>
                        <th>Amount</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>#12345</td>
                        <td>John Doe</td>
                        <td>$50</td>
                        <td>Pending</td>
                    </tr>
                    <tr>
                        <td>#12346</td>
                        <td>Jane Smith</td>
                        <td>$75</td>
                        <td>Approved</td>
                    </tr>
                </tbody>
            </table>
            <button class="btn btn-danger mt-3">View All Refund Requests</button>
        </div>
    </div>
</div>
@endsection