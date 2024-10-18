@extends('layouts.admin')

@section('title', 'Car Availability per Airport')

@section('content')
<div class="container">
    <h1 class="mt-4">Car Availability per Airport</h1>
    <div class="card">
        <div class="card-header">
            <h5>Available Cars at Airports</h5>
        </div>
        <div class="card-body">
            <p>Check the availability of cars at various airports.</p>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Airport</th>
                        <th>Car Type</th>
                        <th>Available Units</th>
                        <th>Daily Rate</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>JFK International Airport</td>
                        <td>Sedan</td>
                        <td>10</td>
                        <td>$40</td>
                    </tr>
                    <tr>
                        <td>LAX Airport</td>
                        <td>SUV</td>
                        <td>5</td>
                        <td>$60</td>
                    </tr>
                    <tr>
                        <td>O'Hare International Airport</td>
                        <td>Convertible</td>
                        <td>8</td>
                        <td>$70</td>
                    </tr>
                </tbody>
            </table>
            <button class="btn btn-primary mt-3">Update Availability</button>
        </div>
    </div>
</div>
@endsection