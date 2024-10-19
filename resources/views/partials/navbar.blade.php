<!-- Topbar Start -->
<div class="container-fluid topbar bg-secondary d-none d-xl-block w-100">
    <div class="container">
        <div class="row gx-0 align-items-center" style="height: 45px;">
            <div class="col-lg-6 text-center text-lg-start mb-lg-0">
                <div class="d-flex flex-wrap">
                    <a href="#" class="text-white me-4 text-decoration-none">
                        <i class="fas fa-map-marker-alt text-primary me-2"></i>Find A Location</a>
                    <a href="tel:+01234567890" class="text-decoration-none text-white me-4">
                        <i class="fas fa-phone-alt text-primary me-2"></i>+01234567890</a>
                    <a href="mailto:example@gmail.com" class="text-decoration-none text-white me-0">
                        <i class="fas fa-envelope text-primary me-2"></i>Example@gmail.com</a>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-end">
                <div class="d-flex align-items-center justify-content-end">
                    <a href="#" class="btn btn-light btn-sm-square rounded-circle me-3"><i
                            class="fab fa-facebook-f"></i></a>
                    <a href="#" class="btn btn-light btn-sm-square rounded-circle me-3"><i
                            class="fab fa-twitter"></i></a>
                    <a href="#" class="btn btn-light btn-sm-square rounded-circle me-3"><i
                            class="fab fa-instagram"></i></a>
                    <a href="#" class="btn btn-light btn-sm-square rounded-circle me-0"><i
                            class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->

<!-- Navbar & Hero Start -->
<div class="container-fluid nav-bar sticky-top px-0 px-lg-4 py-1 py-lg-0 shadow">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a href="" class="navbar-brand p-0">
                <h1 class="display-6 mt-2 text-primary"><span><img src="img/logo.png" class="mb-2"
                            alt=""></span></i><span class="mt-2">SkyLink</span></h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-auto py-0">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Airport Parking</a>
                        <div class="dropdown-menu m-0">
                            <a href="{{ url('/airport') }}" class="dropdown-item">Hartsfield-Jackson Atlanta
                                International Airport (ATL)</a>
                            <a href="{{ url('/airport') }}" class="dropdown-item">Los Angeles International Airport
                                (LAX)</a>
                            <a href="{{ url('/airport') }}" class="dropdown-item">Chicago O'Hare International Airport
                                (ORD)</a>
                            <a href="{{ url('/airport') }}" class="dropdown-item">Dallas/Fort Worth International
                                Airport (DFW)</a>
                            <a href="{{ url('/airport') }}" class="dropdown-item">Denver International Airport (DEN)</a>
                            <a href="{{ url('/airport') }}" class="dropdown-item">John F. Kennedy International Airport
                                (JFK)</a>

                        </div>
                    </div>
                    <a class="nav-item nav-link {{ request()->is('carhire') ? 'active' : '' }}"
                        href="{{ url('/carhire') }}">Car Hire</a>
                    <a class="nav-item nav-link {{ request()->is('mybooking') ? 'active' : '' }}"
                        href="{{ url('/mybooking') }}">My Booking</a>

                    <!-- Dropdown for Airport Parking -->


                    <!-- Car Hire -->
                    <a class="nav-item nav-link" href="#"></a>

                    <!-- Dropdown for My Bookings and Help -->
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Help</a>
                        <div class="dropdown-menu m-0">
                            <a class="dropdown-item {{ request()->is('resendconformation') ? 'active' : '' }}"
                                href="{{ url('/resendconformation') }}">Resend Confirmation</a>
                            <a class="dropdown-item {{ request()->is('faq') ? 'active' : '' }}"
                                href="{{ url('/faq') }}">FAQ's</a>
                            <a class="dropdown-item {{ request()->is('mybooking') ? 'active' : '' }}"
                                href="{{ url('/mybooking') }}">Flight Details / Amend Vehicle</a>
                            <a class="dropdown-item {{ request()->is('contact') ? 'active' : '' }}"
                                href="{{ url('/contact') }}">Contact Us</a>
                        </div>
                    </div>
                </div>

                <!-- Join Button that triggers modal -->
                <div class="d-flex gap-3">
                    <div class="">
                        <a href="#" class="btn btn-primary rounded-pill py-2 px-5" data-bs-toggle="modal"
                            data-bs-target="#joinModal">Join</a>
                    </div>
                    <div class="">
                        <a href=" {{ url('/auth/login') }}" class="btn btn-primary rounded-pill py-2 px-4">Get
                            Started</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar & Hero End -->


<!-- Join Modal Start -->
<div class="modal fade" id="joinModal" tabindex="-1" aria-labelledby="joinModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content text-center p-3">
            <div class="modal-header border-0">
                <button type="button" class="btn btn-danger btn-close text-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body p-3">
                <!-- Logo Centered and Smaller -->
                <div class="mb-4">
                    <img src="img/logo.png" class="img-fluid" alt="SkyLink Logo" style="max-width: 100px;">
                </div>
                <h2 class="display-5 fw-bold text-primary">Get up to 30% OFF</h2>
                <p class="lead mb-4">Join SkyLink for email exclusive discounts to be sent directly to
                    your inbox.</p>

                <form id="joinForm">
                    <div class="mb-3">
                        <input type="email" class="form-control form-control-lg" id="emailInput"
                            placeholder="Email address" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg w-100">Join Now</button>
                </form>

                <div id="successMessage" class="mt-4 text-success" style="display: none;">
                    <h4>Thank you!</h4>
                    <p>You’re now able to use discount code: <strong>COMPARE</strong></p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Join Modal End -->

<!-- Add this script to handle form submission -->
<script>
document.getElementById('joinForm').addEventListener('submit', function(event) {
    event.preventDefault();
    var emailInput = document.getElementById('emailInput').value;
    if (emailInput) {
        // Show success message
        document.getElementById('successMessage').style.display = 'block';
        // Clear the input field
        document.getElementById('emailInput').value = '';
    }
});
</script>