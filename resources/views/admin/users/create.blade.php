@extends('layouts.admin')

@section('title', 'Create User')

@section('content')
<div class="container">

    <div class="content">
        <h2>Create New User</h2>
        <form>
            <div class="mb-3">
                <label for="userName" class="form-label">User Name</label>
                <input type="text" class="form-control" id="userName" required>
            </div>
            <div class="mb-3">
                <label for="userEmail" class="form-label">User Email</label>
                <input type="email" class="form-control" id="userEmail" required>
            </div>
            <div class="mb-3">
                <label for="userRole" class="form-label">Role</label>
                <select class="form-select" id="userRole">
                    <option value="admin">Admin</option>
                    <option value="user">User</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success">Create User</button>
        </form>
    </div>
</div>
@endsection