@extends('frontend.layout.app')
@section('content')
    <style>
        .header_style {
            margin-top: -50px;
            padding: 4rem 0px;
            color: #fff;
            font-weight: 600;
        }

        .ripple {
            height: 100%;
            display: grid;
            justify-content: center;
            align-items: end;
            box-shadow: 0px 0px 15px 0px #b9b9b9;
        }

        .w-100.p-3.bg-dark.badge.text-light {
            border-radius: 0px;
            margin-bottom: -10px !important;
        }
    </style>


<!-- Banner section start -->
<nav class="navbar navbar-expand-lg navbar-light bg-light py-3">

    <!-- <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span class="navbar-toggler-icon"></span></button> -->
  </div>
</nav>

<div class="bg-light">
  <div class="container py-5">
    <div class="row h-100 align-items-center py-5">
      <div class="col-lg-6">
        <h1 class="display-4">About FleetFlowRental</h1><br><br>
        <p class="lead text-muted mb-0">
Welcome to FleetFlowRental System, where efficiency meets innovation in the world of fleet management. At FleetFlow, we are dedicated to revolutionizing the way businesses navigate their vehicle rentals. Our passion lies in providing seamless solutions that empower companies to optimize their fleets with ease. Whether you're a small business or a large enterprise, our user-friendly platform is designed to streamline the rental process, enhance resource utilization, and elevate overall operational productivity. With a commitment to cutting-edge technology and customer satisfaction, FleetFlow is your trusted partner in unlocking the full potential of your fleet. Join us on the journey to a more efficient and sustainable future in the world of rental management.</p>

        </p>
      </div>
      <div class="col-lg-6 d-none d-lg-block"><img src="https://bootstrapious.com/i/snippets/sn-about/illus.png" alt="" class="img-fluid"></div>
    </div>
  </div>
</div>

<div class="bg-white py-5">
  <div class="container py-5">
    <div class="row align-items-center mb-5">
      <div class="col-lg-6 order-2 order-lg-1"><i class="fa fa-bar-chart fa-2x mb-3 text-primary"></i>
        <h1 class="font-weight-light">Why FleetFlowRental?</h1><br><br>
        <p class="font-italic text-muted mb-4">
1. User-Friendly Interface: FleetFlowRental boasts an intuitive platform that ensures a smooth and straightforward rental process. From browsing available vehicles to making reservations, we prioritize simplicity for our users. <br><br>

2. Transparent Pricing: We believe in transparency, providing customers with clear and competitive pricing. No hidden fees or surprises—just straightforward, honest costs for our rental services.<br><br>

3. Diverse Fleet: Our extensive fleet caters to a wide range of needs, from compact cars to spacious vans. Whether for business trips, family vacations, or corporate events, FleetFlow has the right vehicle to suit any requirement.<br><br>

4. Cutting-Edge Technology: Leveraging the latest in technology, FleetFlowRental offers features such as real-time tracking, instant booking, and efficient communication channels. Stay connected and in control throughout your rental experience.<br><br>

5. Customer Support: Our dedicated customer support team is always ready to assist you. Whether you have inquiries, need assistance with your reservation, or encounter any issues during your rental, we are here to provide prompt and effective support.<br><br>

6. Time-Efficient Processes: We understand the value of time. FleetFlowRental optimizes processes to minimize wait times and ensure that your rental experience is not only enjoyable but also time-efficient.<br><br></p>
      </div>
      <div class="col-lg-5 px-5 mx-auto order-1 order-lg-2"><img src="https://bootstrapious.com/i/snippets/sn-about/img-1.jpg" alt="" class="img-fluid mb-4 mb-lg-0"></div>
    </div>

  </div>
</div>

<!-- Our Team -->
<div class="bg-light py-5">
  <div class="container py-5">
    <div class="row mb-4">
      <div class="col-lg-5">
        <h2 class="display-4 font-weight-light">FleetFlowRental's team</h2>
        <p class="font-italic text-muted">Discover the heartbeat of FleetFlowRental in our 'Our Team' section, where our dedicated experts blend passion and expertise to redefine your vehicle rental experience.</p>
      </div>
    </div>

    <div class="row text-center">
      <!-- Team item-->
      <div class="col-xl-3 col-sm-6 mb-5">
        <div class="bg-white rounded shadow-sm py-5 px-4"><img src="https://bootstrapious.com/i/snippets/sn-about/avatar-4.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
          <h5 class="mb-0">Mahira Jabin</h5><span class="small text-uppercase text-muted">CEO - Founder</span>
          <ul class="social mb-0 list-inline mt-3">
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>
      <!-- End-->

      <!-- Team item-->
      <div class="col-xl-3 col-sm-6 mb-5">
        <div class="bg-white rounded shadow-sm py-5 px-4"><img src="https://bootstrapious.com/i/snippets/sn-about/avatar-3.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
          <h5 class="mb-0">Shahriar Shimul</h5><span class="small text-uppercase text-muted">CEO - Founder</span>
          <ul class="social mb-0 list-inline mt-3">
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>
      <!-- End-->

      <!-- Team item-->
      <div class="col-xl-3 col-sm-6 mb-5">
        <div class="bg-white rounded shadow-sm py-5 px-4"><img src="https://bootstrapious.com/i/snippets/sn-about/avatar-2.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
          <h5 class="mb-0">Monir Khan</h5><span class="small text-uppercase text-muted">CMO</span>
          <ul class="social mb-0 list-inline mt-3">
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>
      <!-- End-->

      <!-- Team item-->
      <div class="col-xl-3 col-sm-6 mb-5">
        <div class="bg-white rounded shadow-sm py-5 px-4"><img src="https://bootstrapious.com/i/snippets/sn-about/avatar-4.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
          <h5 class="mb-0">Lima Khan</h5><span class="small text-uppercase text-muted">CFO</span>
          <ul class="social mb-0 list-inline mt-3">
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>
      <!-- End-->

    </div>
  </div>
</div>

<!-- Banner  section end  -->


<!-- CSS Files -->

    <!-- Larger Header Section -->
    <header class="bg-dark py-12 header_style"

    </header>
    <!-- About1 section -->


    @include('frontend.components.about.about')
@endsection
