        <!-- Topbar Start -->
        <div class="container-fluid topbar bg-secondary d-none d-xl-block w-100">
            <div class="container">
                <div class="row gx-0 align-items-center" style="height: 45px;">
                    <div class="col-lg-6 text-center text-lg-start mb-lg-0">
                        <div class="d-flex flex-wrap">
                            <a href="#" class="text-white me-4 text-decoration-none"><i
                                    class="fas fa-map-marker-alt text-primary me-2"></i>Find A Location</a>
                            <a href="tel:+01234567890" class="text-decoration-none text-white me-4"><i
                                    class="fas fa-phone-alt text-primary me-2"></i>+01234567890</a>
                            <a href="mailto:example@gmail.com" class="text-decoration-none text-white me-0"><i
                                    class="fas fa-envelope text-primary me-2"></i>Example@gmail.com</a>
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
        <div class="container-fluid nav-bar sticky-top px-0 px-lg-4 py-2 py-lg-0 shadow">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a href="" class="navbar-brand p-0">
                        <h1 class="display-6 mt-2 text-primary"><span><img src="img/logo.png" class="mb-2"
                                    alt=""></span></i><span class=" mt-2">SkyLink</span>
                        </h1>
                        <!-- <img src="img/logo.png" alt="Logo"> -->
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div class="navbar-nav mx-auto py-0">
                            <a class="nav-item nav-link {{ request()->is('/') ? 'active' : '' }}"
                                href="{{ url('/') }}">Home</a>
                            <a class="nav-item nav-link {{ request()->is('about') ? 'active' : '' }}"
                                href="{{ url('/about') }}">About Us</a>
                            <a class="nav-item nav-link {{ request()->is('services') ? 'active' : '' }}"
                                href="{{ url('/services') }}">Our Services</a>
                            <a class="nav-item nav-link {{ request()->is('contact') ? 'active' : '' }}"
                                href="{{ url('/contact') }}">Contact Us</a>

                        </div>
                        <a href=" {{ url('/auth/login') }}" class="btn btn-primary rounded-pill py-2 px-4">Get
                            Started</a>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Navbar & Hero End -->