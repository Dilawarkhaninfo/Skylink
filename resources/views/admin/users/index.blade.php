@extends('layouts.admin')

@section('title', 'Users')

@section('content')
<div class="">
    <div class="content">
        <div class="row">
            <div class="col-12">
                <div class="card mb-3">
                    <div class="card-body shadow">
                        <div class="d-flex justify-content-between">
                            <div class="">
                                <h5>Users</h5>
                            </div>
                            <div class="">
                                <!-- Right-side notification and icons -->
                                <div class="col-auto nav-right">
                                    <button class="icon-btn">
                                        <i class="fas fa-bell"></i>
                                    </button>
                                    <button class="icon-btn">
                                        <i class="fas fa-envelope"></i>
                                    </button>
                                    <button class="icon-btn">
                                        <i class="fas fa-user-circle"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="{{ url('admin/users/create') }}" class="btn btn-primary mb-3">Create New User</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>User ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Admin User</td>
                    <td>admin@example.com</td>
                    <td>Admin</td>
                    <td>
                        <a href="{{ url('admin/users/edit/1') }}" class="btn btn-warning btn-sm">Edit</a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>John Doe</td>
                    <td>john@example.com</td>
                    <td>User</td>
                    <td>
                        <a href="{{ url('admin/users/edit/2') }}" class="btn btn-warning btn-sm">Edit</a>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Jane Smith</td>
                    <td>jane@example.com</td>
                    <td>Editor</td>
                    <td>
                        <a href="{{ url('admin/users/edit/3') }}" class="btn btn-warning btn-sm">Edit</a>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Michael Johnson</td>
                    <td>michael@example.com</td>
                    <td>User</td>
                    <td>
                        <a href="{{ url('admin/users/edit/4') }}" class="btn btn-warning btn-sm">Edit</a>
                    </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Emily Davis</td>
                    <td>emily@example.com</td>
                    <td>Admin</td>
                    <td>
                        <a href="{{ url('admin/users/edit/5') }}" class="btn btn-warning btn-sm">Edit</a>
                    </td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Robert Brown</td>
                    <td>robert@example.com</td>
                    <td>User</td>
                    <td>
                        <a href="{{ url('admin/users/edit/6') }}" class="btn btn-warning btn-sm">Edit</a>
                    </td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Jessica Williams</td>
                    <td>jessica@example.com</td>
                    <td>Editor</td>
                    <td>
                        <a href="{{ url('admin/users/edit/7') }}" class="btn btn-warning btn-sm">Edit</a>
                    </td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>David Miller</td>
                    <td>david@example.com</td>
                    <td>User</td>
                    <td>
                        <a href="{{ url('admin/users/edit/8') }}" class="btn btn-warning btn-sm">Edit</a>
                    </td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Sarah Wilson</td>
                    <td>sarah@example.com</td>
                    <td>Admin</td>
                    <td>
                        <a href="{{ url('admin/users/edit/9') }}" class="btn btn-warning btn-sm">Edit</a>
                    </td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Chris Taylor</td>
                    <td>chris@example.com</td>
                    <td>User</td>
                    <td>
                        <a href="{{ url('admin/users/edit/10') }}" class="btn btn-warning btn-sm">Edit</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection