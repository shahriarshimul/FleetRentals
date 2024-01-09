<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>RentVehicle</title>
    <!-- bootstrap  css -->

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">




    <style>
        @import url(//fonts.googleapis.com/css?family=Montserrat:300,400,500,700);
    </style>

    {{-- style --}}

    @include('frontend.components.fixed.style')

    <style>
        .navbar,
        footer {
            background: #198754 !important;
        }
    </style>
</head>

<body>

    {{-- header --}}

    @include('frontend.components.fixed.header')

    {{-- hero --}}




    @yield('content')



    {{-- footer --}}

    @include('frontend.components.fixed.footer')

    {{-- js --}}
    @include('frontend.components.fixed.script')


</body>

</html>
