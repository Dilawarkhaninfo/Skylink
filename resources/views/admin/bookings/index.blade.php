@extends('layouts.admin')

@section('title', 'Bookings')

@section('content')
<div class="">
    <div class="content">
        <!-- Create New Booking Button -->

        <!-- Search and Filter Section -->
        <div class="row mb-3">
            <div class="col-12">
                <div class="card mb-3">
                    <div class="card-body shadow">
                        <div class="d-flex justify-content-between">
                            <div class="">
                                <h5>Bookings</h5>
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

            <div class="col-md-4">
                <a href="{{ url('admin/bookings/create') }}" class="btn btn-primary mb-3">Create New Booking</a>

                <input type="text" id="search" class="form-control" placeholder="Search by Customer Name or Booking ID">
            </div>
            <div class="col-md-3">
                <select id="statusFilter" class="form-control">
                    <option value="">All Statuses</option>
                    <option value="Confirmed">Confirmed</option>
                    <option value="In Progress">In Progress</option>
                    <option value="Completed">Completed</option>
                    <option value="Canceled">Canceled</option>
                </select>
            </div>
            <div class="col-md-3">
                <select id="paymentStatusFilter" class="form-control">
                    <option value="">All Payment Status</option>
                    <option value="Paid">Paid</option>
                    <option value="Pending">Pending</option>
                    <option value="Failed">Failed</option>
                </select>
            </div>
            <div class="col-md-2">
                <button id="filterBtn" class="btn btn-secondary w-100">Filter</button>
            </div>
        </div>

        <!-- Bookings Table -->
        <table class="table table-striped" id="bookingsTable">
            <thead>
                <tr>
                    <th>Booking ID</th>
                    <th>Customer Name</th>
                    <th>Contact Info</th>
                    <th>Booking Date</th>
                    <th>Check-In</th>
                    <th>Check-Out</th>
                    <th>Status</th>
                    <th>Payment Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Dummy Data Rows -->
                <tr>
                    <td>#1001</td>
                    <td>John Doe</td>
                    <td>john.doe@example.com | (123) 456-7890</td>
                    <td>2024-10-01</td>
                    <td>2024-10-14</td>
                    <td>2024-10-15</td>
                    <td>Confirmed</td>
                    <td>Paid</td>
                    <td>
                        <a href="{{ url('admin/bookings/show/1001') }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ url('admin/bookings/edit/1001') }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ url('admin/bookings/delete/1001') }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('Are you sure you want to delete this booking?')">Delete</button>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td>#1002</td>
                    <td>Jane Smith</td>
                    <td>jane.smith@example.com | (987) 654-3210</td>
                    <td>2024-10-03</td>
                    <td>2024-10-16</td>
                    <td>2024-10-18</td>
                    <td>In Progress</td>
                    <td>Pending</td>
                    <td>
                        <a href="{{ url('admin/bookings/show/1002') }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ url('admin/bookings/edit/1002') }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ url('admin/bookings/delete/1002') }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('Are you sure you want to delete this booking?')">Delete</button>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td>#1003</td>
                    <td>Michael Brown</td>
                    <td>michael.brown@example.com | (555) 123-4567</td>
                    <td>2024-10-05</td>
                    <td>2024-10-20</td>
                    <td>2024-10-22</td>
                    <td>Completed</td>
                    <td>Paid</td>
                    <td>
                        <a href="{{ url('admin/bookings/show/1003') }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ url('admin/bookings/edit/1003') }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ url('admin/bookings/delete/1003') }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('Are you sure you want to delete this booking?')">Delete</button>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td>#1004</td>
                    <td>Emily Davis</td>
                    <td>emily.davis@example.com | (444) 987-6543</td>
                    <td>2024-10-07</td>
                    <td>2024-10-25</td>
                    <td>2024-10-28</td>
                    <td>Canceled</td>
                    <td>Refunded</td>
                    <td>
                        <a href="{{ url('admin/bookings/show/1004') }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ url('admin/bookings/edit/1004') }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ url('admin/bookings/delete/1004') }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('Are you sure you want to delete this booking?')">Delete</button>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td>#1005</td>
                    <td>William Johnson</td>
                    <td>william.johnson@example.com | (333) 555-7890</td>
                    <td>2024-10-09</td>
                    <td>2024-10-30</td>
                    <td>2024-11-02</td>
                    <td>Confirmed</td>
                    <td>Pending</td>
                    <td>
                        <a href="{{ url('admin/bookings/show/1005') }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ url('admin/bookings/edit/1005') }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ url('admin/bookings/delete/1005') }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('Are you sure you want to delete this booking?')">Delete</button>
                        </form>
                    </td>
                </tr>
                <!-- Add more dummy rows as needed -->
                <tr>
                    <td>#1006</td>
                    <td>Sarah Wilson</td>
                    <td>sarah.wilson@example.com | (222) 333-4444</td>
                    <td>2024-10-11</td>
                    <td>2024-11-05</td>
                    <td>2024-11-07</td>
                    <td>Confirmed</td>
                    <td>Paid</td>
                    <td>
                        <a href="{{ url('admin/bookings/show/1006') }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ url('admin/bookings/edit/1006') }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ url('admin/bookings/delete/1006') }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('Are you sure you want to delete this booking?')">Delete</button>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td>#1007</td>
                    <td>David Lee</td>
                    <td>david.lee@example.com | (111) 222-3333</td>
                    <td>2024-10-12</td>
                    <td>2024-11-10</td>
                    <td>2024-11-12</td>
                    <td>In Progress</td>
                    <td>Pending</td>
                    <td>
                        <a href="{{ url('admin/bookings/show/1007') }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ url('admin/bookings/edit/1007') }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ url('admin/bookings/delete/1007') }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('Are you sure you want to delete this booking?')">Delete</button>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td>#1008</td>
                    <td>Linda Martinez</td>
                    <td>linda.martinez@example.com | (444) 555-6666</td>
                    <td>2024-10-13</td>
                    <td>2024-11-15</td>
                    <td>2024-11-18</td>
                    <td>Completed</td>
                    <td>Paid</td>
                    <td>
                        <a href="{{ url('admin/bookings/show/1008') }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ url('admin/bookings/edit/1008') }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ url('admin/bookings/delete/1008') }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('Are you sure you want to delete this booking?')">Delete</button>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td>#1009</td>
                    <td>Robert King</td>
                    <td>robert.king@example.com | (777) 888-9999</td>
                    <td>2024-10-14</td>
                    <td>2024-11-20</td>
                    <td>2024-11-22</td>
                    <td>Canceled</td>
                    <td>Refunded</td>
                    <td>
                        <a href="{{ url('admin/bookings/show/1009') }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ url('admin/bookings/edit/1009') }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ url('admin/bookings/delete/1009') }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('Are you sure you want to delete this booking?')">Delete</button>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td>#1010</td>
                    <td>Patricia Green</td>
                    <td>patricia.green@example.com | (666) 777-8888</td>
                    <td>2024-10-15</td>
                    <td>2024-11-25</td>
                    <td>2024-11-27</td>
                    <td>Confirmed</td>
                    <td>Pending</td>
                    <td>
                        <a href="{{ url('admin/bookings/show/1010') }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ url('admin/bookings/edit/1010') }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ url('admin/bookings/delete/1010') }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('Are you sure you want to delete this booking?')">Delete</button>
                        </form>
                    </td>
                </tr>

            </tbody>
        </table>

        <!-- Pagination (Dummy) -->
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
    </div>
</div>

<!-- Optional: Add JavaScript for Search and Filter Functionality -->
@section('scripts')
<script>
document.getElementById('filterBtn').addEventListener('click', function() {
    const search = document.getElementById('search').value.toLowerCase();
    const status = document.getElementById('statusFilter').value;
    const paymentStatus = document.getElementById('paymentStatusFilter').value;

    const table = document.getElementById('bookingsTable');
    const tr = table.getElementsByTagName('tr');

    for (let i = 1; i < tr.length; i++) { // Start from 1 to skip header
        let tdBookingID = tr[i].getElementsByTagName('td')[0].innerText.toLowerCase();
        let tdCustomerName = tr[i].getElementsByTagName('td')[1].innerText.toLowerCase();
        let tdStatus = tr[i].getElementsByTagName('td')[6].innerText;
        let tdPaymentStatus = tr[i].getElementsByTagName('td')[7].innerText;

        let matchSearch = tdBookingID.includes(search) || tdCustomerName.includes(search);
        let matchStatus = status === "" || tdStatus === status;
        let matchPaymentStatus = paymentStatus === "" || tdPaymentStatus === paymentStatus;

        if (matchSearch && matchStatus && matchPaymentStatus) {
            tr[i].style.display = "";
        } else {
            tr[i].style.display = "none";
        }
    }
});
</script>
@endsection

@endsection