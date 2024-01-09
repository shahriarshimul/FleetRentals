<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light bg-success">
    <div class="container px-4 px-lg-5 input-group rounded">
        <a class="navbar-brand text-light" href="{{ route('home') }}" style="font-size: 36px;">FleetFlowRentals</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
                class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4 ml-auto">
                <li class="nav-item "><a class="nav-link text-light active" aria-current="page"
                        href="{{ route('home') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link text-light" href="{{ route('product.page') }}">Package</a></li>
                <li class="nav-item"><a class="nav-link text-light" href="{{ route('about') }}">About</a></li>

                @auth
                    @if (auth()->user()->role == 'customer' or auth()->user()->role == 'admin')
                        <li class="nav-item"><a class="nav-link text-light"
                                href="{{ route('user.profile') }}">{{ auth()->user()->name }}</a></li>
                    @endauth

                    @if (auth()->user()->role == 'customer')
                        <li class="nav-item"><a class="nav-link text-light" href="/my-bookings">My Bookings</a></li>
                    @endauth


                    @if (auth()->user()->role == 'customer' or auth()->user()->role == 'admin')
                        <li class="nav-item"><a class="nav-link text-light" href="{{ route('logout') }}">logout</a></li>
                    @endauth
                @else
                    <li class="nav-item dropdown">
                        <a class="nav-link text-light dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Login
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/login">Admin/User</a>
                            <a class="dropdown-item" href="/driver-login">Driver</a>
                        </div>
                    </li>


                    <li class="nav-item dropdown">
                        <a class="nav-link text-light dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Register
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/registration">Admin/User</a>
                            <a class="dropdown-item" href="/driver-register">Driver</a>
                        </div>
                    </li>
                @endif

            </ul>
        </div>
    </div>

</nav>
