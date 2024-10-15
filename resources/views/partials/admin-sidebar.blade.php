<div class="sidebar bg-light border-right" style="min-height: 100vh; padding-top: 1rem;">
    <ul class="nav flex-column">
        <li class="nav-item active">
            <a class="nav-link d-flex align-items-center {{ request()->is('admin/dashboard') ? 'active' : '' }}"
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
            <a class="nav-link d-flex align-items-center {{ request()->is('admin/users*') ? 'active' : '' }}"
                href="{{ route('admin.users.index') }}">
                <i class="fas fa-users me-2"></i> Users
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link d-flex align-items-center {{ request()->is('admin/reports') ? 'active' : '' }}"
                href="{{ route('admin.reports.index') }}">
                <i class="fas fa-chart-line me-2"></i> Reports
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link d-flex align-items-center {{ request()->is('admin/settings*') ? 'active' : '' }}"
                href="{{ route('admin.settings.index') }}">
                <i class="fas fa-cog me-2"></i> Settings
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