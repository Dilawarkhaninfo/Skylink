<div class="sidebar bg-light border-right" style="min-height: 100vh; padding-top: 1rem;">
    <ul class="nav flex-column">
        <li class="nav-item active">
            <a class="nav-link d-flex align-items-center {{ request()->is('admin/dashboard') ? 'active' : '' }}"
                href="{{ route('admin.dashboard') }}">
                <i class="fas fa-tachometer-alt me-2"></i> Dashboard Overview
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link d-flex align-items-center {{ request()->is('admin/bookings*') ? 'active' : '' }}"
                href="{{ route('admin.bookings.index') }}">
                <i class="fas fa-calendar-alt me-2"></i> Booking Management
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link d-flex align-items-center {{ request()->is('admin/cars*') ? 'active' : '' }}"
                href="{{ route('admin.cars.index') }}">
                <i class="fas fa-car me-2"></i> Car Availability per Airport
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link d-flex align-items-center {{ request()->is('admin/users*') ? 'active' : '' }}"
                href="{{ route('admin.users.index') }}">
                <i class="fas fa-users me-2"></i> Customer Management
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link d-flex align-items-center {{ request()->is('admin/reports') ? 'active' : '' }}"
                href="{{ route('admin.reports.index') }}">
                <i class="fas fa-chart-line me-2"></i> Reports & Analytics
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link d-flex align-items-center {{ request()->is('admin/pricing*') ? 'active' : '' }}"
                href="{{ route('admin.pricing.index') }}">
                <i class="fas fa-dollar-sign me-2"></i> Pricing and Payment Management
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link d-flex align-items-center {{ request()->is('admin/notifications*') ? 'active' : '' }}"
                href="{{ route('admin.notifications.index') }}">
                <i class="fas fa-bell me-2"></i> Notifications & Alerts
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link d-flex align-items-center {{ request()->is('admin/settings*') ? 'active' : '' }}"
                href="{{ route('admin.settings.index') }}">
                <i class="fas fa-cog me-2"></i> Settings
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link d-flex align-items-center {{ request()->is('admin/users-management*') ? 'active' : '' }}"
                href="{{ route('admin.user-management.index') }}">
                <i class="fas fa-user-shield me-2"></i> User Management
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link d-flex align-items-center {{ request()->is('admin/calendar*') ? 'active' : '' }}"
                href="{{ route('admin.calendar.index') }}">
                <i class="fas fa-calendar me-2"></i> Calendar View for Bookings
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link d-flex align-items-center {{ request()->is('admin/refunds*') ? 'active' : '' }}"
                href="{{ route('admin.refunds.index') }}">
                <i class="fas fa-undo me-2"></i> Refund and Cancellation Management
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link d-flex align-items-center {{ request()->is('admin/two-factor-auth*') ? 'active' : '' }}"
                href="{{ route('admin.two-factor-auth.index') }}">
                <i class="fas fa-lock me-2"></i> Two-Factor Authentication
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link d-flex align-items-center {{ request()->is('admin/chat*') ? 'active' : '' }}"
                href="{{ route('admin.chat.index') }}">
                <i class="fas fa-comments me-2"></i> Live Chat
            </a>
        </li>
    </ul>

    <!-- Logout Button -->
    <div class="mt-auto">
        <a href="{{ route('home') }}" class="btn btn-danger w-100 mt-3">
            <i class="fas fa-sign-out-alt me-2"></i> Logout
        </a>
    </div>
</div>