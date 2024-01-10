<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>

.navbar {
            background: rgba(0, 0, 0, 0); /* Change the last value (0.5) for transparency level */
        }
        /* Add hover effect and blinking border to navbar links */
        .navbar-nav .nav-link:hover {
            color: #ffc107 !important; /* Change the color on hover */
        }

        .navbar-nav .nav-link.blink {
            border: 2px solid transparent;
            transition: border-color 0.5s ease-in-out;
        }

        .navbar-nav .nav-link.blink:hover {
            border-color: #ffc107; /* Change the border color on hover */
            animation: blinkBorder 0.5s infinite; /* Add blinking animation */
        }

        @keyframes blinkBorder {
            50% {
                border-color: transparent; /* Blinking effect */
            }
        }
    </style>
    <title>FleetRentals</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}" style="font-size: 36px;">FleetRentals</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link blink" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link blink" href="{{ route('product.page') }}">Package</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link blink" href="{{ route('about') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link blink" href="#" data-toggle="modal" data-target="#loginModal">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link blink" href="#" data-toggle="modal" data-target="#registerModal">Register</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<!-- Login and Register Modals -->

<!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">Choose Your  Type</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <a href="/login">
                    <button type="button" class="btn btn-primary">Customer Login</button>
                </a>
                <a href="/driver-login">
                    <button type="button" class="btn btn-primary">Driver Login</button>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Register Modal -->
<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="registerModalLabel">Choose Registration Type</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <a href="/registration">
                    <button type="button" class="btn btn-success">Customer</button>
                </a>
                <a href="/driver-register">
                    <button type="button" class="btn btn-success">Driver</button>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Customer Login Modal -->
<div class="modal fade" id="customerLoginModal" tabindex="-1" role="dialog" aria-labelledby="customerLoginModalLabel"
    aria-hidden="true">
    <!-- Add your customer login form here -->
</div>

<!-- Driver Login Modal -->
<div class="modal fade" id="driverLoginModal" tabindex="-1" role="dialog" aria-labelledby="driverLoginModalLabel"
    aria-hidden="true">
    <!-- Add your driver login form here -->
</div>

<!-- Customer Register Modal -->
<div class="modal fade" id="customerRegisterModal" tabindex="-1" role="dialog" aria-labelledby="customerRegisterModalLabel"
    aria-hidden="true">
    <!-- Add your customer registration form here -->
</div>

<!-- Driver Register Modal -->
<div class="modal fade" id="driverRegisterModal" tabindex="-1" role="dialog" aria-labelledby="driverRegisterModalLabel"
    aria-hidden="true">
    <!-- Add your driver registration form here -->
</div>

<!-- Your page content goes here -->

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
