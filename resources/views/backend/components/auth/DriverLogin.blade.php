<!doctype html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.0.0-beta19
* @link https://tabler.io
* Copyright 2018-2023 The Tabler Authors
* Copyright 2018-2023 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
-->
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title> Login To Driver's Acoount </title>
    <!-- CSS files -->
    <link href="./dist/css/tabler.min.css?1684106062" rel="stylesheet" />
    <link href="./dist/css/tabler-flags.min.css?1684106062" rel="stylesheet" />
    <link href="./dist/css/tabler-payments.min.css?1684106062" rel="stylesheet" />
    <link href="./dist/css/tabler-vendors.min.css?1684106062" rel="stylesheet" />
    <link href="./dist/css/demo.min.css?1684106062" rel="stylesheet" />
    <style>
        @import url('https://rsms.me/inter/inter.css');

        :root {
            --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
        }

        body {
            background: #000000;
            color: #ffffff;
            font-feature-settings: "cv03", "cv04", "cv11";
        }

        #inputEmail,
        #inputPassword {
            color: #000;
        }
    </style>
</head>

<body class=" d-flex flex-column">
    <script src="./dist/js/demo-theme.min.js?1684106062"></script>
    <div class="page page-center">
        <div class="container container-tight py-4">
            <div class="text-center mb-4">
                <a href="." class="navbar-brand navbar-brand-autodark"><img src="./static/logo.svg" height="36"
                        alt=""></a>
            </div>
            <div class="card card-md bg-dark text-light">

                <div class="card-body">
                    <h2 class="h2 text-center">Login To Driver's Acoount</h2>
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSGNwbBoR1g2b_KhD7J29qnYpUGdMrtaZosxA&usqp=CAU"
                        alt="" class="w-100 my-2 mb-4">

                    <form action="{{ route('store') }}" method="post" enctype="multipart/form-data">

                        @csrf

                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif

                        <div class="form-floating mb-3">
                            <input class="form-control" id="inputEmail" name="email" value="{{ old('email') }}"
                                type="email" placeholder="name@example.com" />
                            <label class="text-dark" for="inputEmail">Email address</label>
                            @error('email')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" name="password" id="inputPassword" value="{{ old('password') }}"
                                type="password" placeholder="Password" />
                            <label class="text-dark" for="inputPassword">Password</label>

                        </div>
                        @error('password')
                            <strong class="text-danger">{{ $message }}</strong>
                        @enderror
                        <div class="form-check mb-3">
                            <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
                            <label class="form-check-label" for="inputRememberPassword">Remember Password</label>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                            <button class="btn btn-lg w-100 btn-primary" type="submit">Login</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="text-center text-muted mt-3">
                Don't have account yet? <a href="/registration" tabindex="-1">Sign up</a>
            </div>
        </div>
    </div>
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="./dist/js/tabler.min.js?1684106062" defer></script>
    <script src="./dist/js/demo.min.js?1684106062" defer></script>
</body>

</html>