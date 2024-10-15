<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
        // Logic for displaying reports
        return view('admin.reports.index');
    }

    public function generate(Request $request)
    {
        // Logic to generate a specific report
    }
}