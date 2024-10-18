<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Skylink - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @stack('styles')

    <style>
    body {
        padding-bottom: 30px;
        position: relative;
        min-height: 100%;
    }

    a {
        transition: background 0.2s, color 0.2s;
    }

    a:hover,
    a:focus {
        text-decoration: none;
    }

    #wrapper {
        padding-left: 0;
        transition: all 0.5s ease;
        position: relative;
    }

    #sidebar-wrapper {
        z-index: 1000;
        position: fixed;
        left: 250px;
        width: 0;
        height: 100%;
        margin-left: -250px;
        overflow-y: auto;
        overflow-x: hidden;
        background: #222;
        transition: all 0.5s ease;
    }

    #wrapper.toggled #sidebar-wrapper {
        width: 250px;
    }

    .sidebar-brand {
        position: absolute;
        top: 0;
        width: 250px;
        text-align: center;
        padding: 20px 0;
    }

    .sidebar-brand h2 {
        margin: 0;
        font-weight: 600;
        font-size: 24px;
        color: #fff;
    }

    .sidebar-nav {
        position: absolute;
        top: 75px;
        width: 250px;
        margin: 0;
        padding: 0;
        list-style: none;
    }

    .sidebar-nav>li {
        text-indent: 10px;
        http: //127.0.0.1:8000/admin/users
            line-height: 42px;
    }

    .sidebar-nav>li>a {
        display: block;
        text-decoration: none;
        color: white;
        font-weight: 600;
        font-size: 18px;
        padding: 10px;
    }

    .sidebar-nav>li.active>a {
        background: #F8BE12;
        color: #fff;
    }

    .sidebar-nav>li>a:hover {
        background: #F8BE12;
        color: #fff;
    }

    #page-content-wrapper {
        width: 100%;
    }

    @media (min-width: 992px) {
        #wrapper {
            padding-left: 250px;
        }

        #wrapper.toggled {
            padding-left: 60px;
        }

        #sidebar-wrapper {
            width: 250px;
        }

        #wrapper.toggled #sidebar-wrapper {
            width: 60px;
        }
    }

    @media (max-width: 991px) {
        #wrapper {
            padding-left: 0;
        }

        #sidebar-wrapper {
            width: 0;
        }

        #wrapper.toggled #sidebar-wrapper {
            width: 250px;
        }
    }

    .logout-link {
        background-color: transparent;
        transition: background-color 0.3s;
    }

    .logout-link:hover {
        background-color: #C70039 !important;
    }

    .nav-right {
        display: flex;
        justify-content: flex-end;
        align-items: center;
        gap: 15px;
    }

    .nav-right .icon-btn {
        background: none;
        border: none;
        color: #000;
    }

    .nav-link.active {
        background-color: #F8BE12 !important;
        /* Yellow background */
        color: white !important;
        /* White text for contrast */
    }

    .nav-link {
        transition: background 0.3s ease, color 0.3s ease;
    }

    .nav-link:hover {
        background-color: #F8BE12 !important;
        color: white !important;
    }
    </style>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <aside id="sidebar-wrapper">
            <div class="sidebar-brand">
                <h2>SKYLINK</h2>
            </div>
            <ul class="sidebar-nav">
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center {{ request()->is('admin/dashboard') || request()->is('admin') ? 'active' : '' }}"
                        href="{{ route('admin.dashboard') }}">
                        <i class="fas fa-tachometer-alt me-2"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center {{ request()->is('admin/bookings*') ? 'active' : '' }}"
                        href="{{ route('admin.bookings.index') }}">
                        <i class="fas fa-calendar-alt me-2"></i> Bookings
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center {{ request()->is('admin/cars*') ? 'active' : '' }}"
                        href="{{ route('admin.cars.index') }}">
                        <i class="fas fa-car me-2"></i> Cars
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center {{ request()->is('admin/users*') ? 'active' : '' }}"
                        href="{{ route('admin.users.index') }}">
                        <i class="fas fa-users me-2"></i> Users
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center {{ request()->is('admin/reports*') ? 'active' : '' }}"
                        href="{{ route('admin.reports.index') }}">
                        <i class="fas fa-chart-line me-2"></i> Reports
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center {{ request()->is('admin/pricing*') ? 'active' : '' }}"
                        href="{{ route('admin.pricing.index') }}">
                        <i class="fas fa-dollar-sign me-2"></i> Pricing
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center {{ request()->is('admin/notifications*') ? 'active' : '' }}"
                        href="{{ route('admin.notifications.index') }}">
                        <i class="fas fa-bell me-2"></i> Alerts
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center {{ request()->is('admin/calendar*') ? 'active' : '' }}"
                        href="{{ route('admin.calendar.index') }}">
                        <i class="fas fa-calendar me-2"></i> Calendar
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center {{ request()->is('admin/refunds*') ? 'active' : '' }}"
                        href="{{ route('admin.refunds.index') }}">
                        <i class="fas fa-undo me-2"></i> Refunds
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center {{ request()->is('admin/two-factor-auth*') ? 'active' : '' }}"
                        href="{{ route('admin.two-factor-auth.index') }}">
                        <i class="fas fa-lock me-2"></i> 2FA
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center {{ request()->is('admin/chat*') ? 'active' : '' }}"
                        href="{{ route('admin.chat.index') }}">
                        <i class="fas fa-comments me-2"></i> Chat
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center {{ request()->is('home*') ? 'active' : '' }}"
                        href="{{ route('home') }}">
                        <i class="fas fa-power-off me-2"></i> Logout
                    </a>
                </li>
            </ul>
        </aside>


        <!-- Page Content -->
        <div id="page-content-wrapper" class="mt-2">
            <div class="container-fluid">
                <div class="row align-items-center">

                    <!-- Page title and breadcrumbs -->
                    <div class="col">
                        @yield('content')
                    </div>

                </div>
            </div>
        </div>
    </div>

    <button id="menu-toggle" class="btn btn-primary">Toggle Menu</button>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    @stack('scripts')

    <script>
    $(document).ready(function() {
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#sidebar-wrapper").toggleClass("toggled");
            $("#page-content-wrapper").toggleClass("toggled");
        });
    });
    </script>
</body>

</html>