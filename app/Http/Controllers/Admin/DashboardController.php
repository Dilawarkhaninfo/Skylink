<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Logic for fetching dashboard data (total bookings, revenue summary, etc.)
        return view('admin.dashboard.index');
    }
}