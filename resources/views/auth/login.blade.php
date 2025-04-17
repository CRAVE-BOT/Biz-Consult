<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('Admin/assets/images/logo.svg') }}">
    <title>Tiny Dashboard - A Bootstrap Dashboard Template</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('Admin/css/simplebar.css') }}">
    <link rel="stylesheet" href="{{ asset('Admin/css/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('Admin/css/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('Admin/css/app-light.css') }}" id="lightTheme">
    <link rel="stylesheet" href="{{ asset('Admin/css/app-dark.css') }}" id="darkTheme">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Overpass:wght@100;400;600;700;900&display=swap" rel="stylesheet">
</head>

<body class="light">
<div class="d-flex align-items-center justify-content-center vh-100">
    <div class="text-center w-100" style="max-width: 400px; padding: 20px;">

        <!-- Logo -->
        <svg version="1.1" id="logo" class="navbar-brand-img brand-md" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120" xml:space="preserve">
                  <g>
                      <polygon class="st0" points="78,105 15,105 24,87 87,87 	"></polygon>
                      <polygon class="st0" points="96,69 33,69 42,51 105,51 	"></polygon>
                      <polygon class="st0" points="78,33 15,33 24,15 87,15 	"></polygon>
                  </g>
                </svg>
        <!-- Login Form -->
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <h1 class="h6 mb-3">Sign in</h1>

            <div class="form-group">
                <label for="inputEmail" class="sr-only">Email address</label>
                <input type="email" name="email" class="form-control form-control-lg" placeholder="Email address" required autofocus>
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="form-group">
                <label for="inputPassword" class="sr-only">Password</label>
                <input type="password" name="password" class="form-control form-control-lg" placeholder="Password" required>
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <div class="form-group form-check text-left">
                <input type="checkbox" class="form-check-input" id="rememberMe">
                <label class="form-check-label" for="rememberMe">Stay logged in</label>
            </div>

            <button class="btn btn-lg btn-primary btn-block w-100" type="submit">Let me in</button>
        </form>
    </div>
</div>

<!-- Scripts -->
<script src="{{ asset('Admin/js/jquery.min.js') }}"></script>
<script src="{{ asset('Admin/js/popper.min.js') }}"></script>
<script src="{{ asset('Admin/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('Admin/js/simplebar.min.js') }}"></script>
<script src="{{ asset('Admin/js/daterangepicker.js') }}"></script>
<script src="{{ asset('Admin/js/jquery.stickOnScroll.js') }}"></script>
<script src="{{ asset('Admin/js/tinycolor-min.js') }}"></script>
<script src="{{ asset('Admin/js/config.js') }}"></script>
<script src="{{ asset('Admin/js/apps.js') }}"></script>
</body>
</html>
