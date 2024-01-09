@extends('frontend.layout.app')

@section('content')
    <style>
        .bg-dark.py-12.header_style {
            margin-top: -50px;
            padding: 4rem 0px;
            color: #fff;
            font-weight: 600;
        }
    </style>

    <!-- Larger Header Section -->
    <header class="bg-dark py-12 header_style"
        style="background-image: url('{{ asset('https://pikwizard.com/pw/small/fa63d8a02c733c06b8c87bfbd3bacc6b.jpg') }}'); background-size: cover; background-position: center;">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-1 fw-bolder">Explore Our Premium Packages for Unmatched Experiences</h1>
                <p class="lead fw-normal text-green-50 mb-6">Discover a world of tailored solutions designed to elevate your journey. From seamless travel experiences to comprehensive business solutions, our packages redefine excellence. <br> <br>
                </p>
                <a href="{{ route('home') }}" class="btn btn-success">Explore Now</a>
            </div>
        </div><br>
    </header>
    @include('frontend.components.product.product')
@endsection
