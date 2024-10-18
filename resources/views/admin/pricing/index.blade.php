@extends('layouts.admin')

@section('title', 'Pricing Management')

@section('content')
<div class="container">
    <h1 class="mt-4">Pricing Management</h1>
    <div class="card">
        <div class="card-header">
            <h5>Current Pricing Plans</h5>
        </div>
        <div class="card-body">
            <p>Manage the pricing plans for different car types and services.</p>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Car Type</th>
                        <th>Daily Rate</th>
                        <th>Weekly Rate</th>
                        <th>Monthly Rate</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Sedan</td>
                        <td>$40</td>
                        <td>$240</td>
                        <td>$800</td>
                    </tr>
                    <tr>
                        <td>SUV</td>
                        <td>$60</td>
                        <td>$360</td>
                        <td>$1,200</td>
                    </tr>
                </tbody>
            </table>
            <button class="btn btn-success mt-3">Add New Pricing Plan</button>
        </div>
    </div>
</div>
@endsection