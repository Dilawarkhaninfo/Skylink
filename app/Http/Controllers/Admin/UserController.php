<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // Logic to display all users (admins and staff)
        return view('admin.users.index');
    }

    public function create()
    {
        // Logic to show form for creating a new user
        return view('admin.users.create');
    }

    public function store(Request $request)
    {
        // Logic to store a new user
    }

    public function edit($id)
    {
        // Logic to show form for editing a user
        return view('admin.users.edit', compact('id'));
    }

    public function update(Request $request, $id)
    {
        // Logic to update a user
    }

    public function destroy($id)
    {
        // Logic to delete a user
    }
}