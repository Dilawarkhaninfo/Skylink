<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login || SkyLink</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
</head>

<body>



    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Javaid Bashir :: Web developer</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Font Awesome CSS (Choose one version) -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

        <!-- Bootstrap Icons (Optional, ensure compatibility) -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
            rel="stylesheet">

        <!-- Custom CSS -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
        <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">


        <style>
        .logo-circle {
            width: 100px;
            height: 100px;
            border: 1px solid blue !important;
            /* Add border with desired color */
            border-radius: 50%;
            /* Make the border circular */
            object-fit: cover;
            /* Ensure the image fits inside the circle */
        }
        </style>


    </head>

    <body>
        <section>
            <!-- Request me for a signup form or any type of help -->
            <div class="container-fluid steps d-flex justify-content-center align-items-center"
                style="min-height: 100vh;">
                <div class="login-form p-5 bg-light rounded shadow">
                    <div class="text-center">
                        <span>
                            <img src="{{ asset('img/logo.png') }}" alt="logo" class="logo-circle mb-4"
                                style="width: 100px;">
                        </span>
                        <h4 class="modal-title mb-4">Register a New Account</h4>
                    </div>
                    <form action="/examples/actions/confirmation.php" method="post">
                        <div class="form-group mb-3">
                            <input type="text" class="form-control" placeholder="Username" required="required">
                        </div>
                        <div class="form-group mb-3">
                            <input type="email" class="form-control" placeholder="Email" required="required">
                        </div>
                        <div class="form-group mb-3">
                            <input type="password" class="form-control" placeholder="Password" required="required">
                        </div>
                        <div class="form-group mb-4">
                            <input type="password" class="form-control" placeholder="Confirm Password"
                                required="required">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block btn-lg">Register</button>
                    </form>
                    <div class="text-center small mt-4">
                        Already have an account? <a href="{{ url('/auth/login') }}">Log in</a>
                    </div>
                </div>
            </div>
        </section>


        <!-- jQuery (Must be loaded before Bootstrap JS and other scripts that depend on it) -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <!-- Bootstrap JS Bundle -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

        <!-- JavaScript Libraries -->
        <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
        <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
        <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
        <script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
        <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>

        <!-- Custom JS -->
        <script src="{{ asset('js/main.js') }}"></script>

    </body>

    </html>