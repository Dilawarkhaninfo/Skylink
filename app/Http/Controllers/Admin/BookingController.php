<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        // Logic to display all bookings
        return view('admin.bookings.index');
    }

    public function show($id)
    {
        // Logic to display a single booking
        return view('admin.bookings.show', compact('id'));
    }

    public function edit($id)
    {
        // Logic for editing a booking
        return view('admin.bookings.edit', compact('id'));
    }

    public function update(Request $request, $id)
    {
        // Logic to update a booking
    }

    public function destroy($id)
    {
        // Logic to cancel/delete a booking
    }
}