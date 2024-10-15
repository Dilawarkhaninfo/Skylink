<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        // Logic for displaying site settings
        return view('admin.settings.index');
    }

    public function update(Request $request)
    {
        // Logic to update site settings
    }

    public function paymentGateway()
    {
        // Logic to manage payment gateway settings
        return view('admin.settings.payment_gateway');
    }
}