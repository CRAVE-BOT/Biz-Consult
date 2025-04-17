<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>Tiny Dashboard - A Bootstrap Dashboard Template</title>
    <!-- Simple bar CSS -->
    <link rel="stylesheet" href=""{{asset('Admin')}}/css/simplebar.css">
    <!-- Fonts CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Icons CSS -->
    <link rel="stylesheet" href="{{asset('Admin')}}/css/feather.css">
    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" href="{{asset('Admin')}}/css/daterangepicker.css">
    <!-- App CSS -->
    <link rel="stylesheet" href="{{asset('Admin')}}/css/app-light.css" id="lightTheme">
    <link rel="stylesheet" href="{{asset('Admin')}}/css/app-dark.css" id="darkTheme" disabled>
</head>
<body class="light ">
<div class="wrapper vh-100">
    <div class="row align-items-center h-100">
        <form class="col-lg-6 col-md-8 col-10 mx-auto" method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-group">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control" name="email">
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
            <div class="form-group">
                <label for="inputEmail4">name</label>
                <input type="text" class="form-control" name="name">
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>
            <hr class="my-4">
            <div class="row mb-4">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="inputPassword5">New Password</label>
                        <input type="password" class="form-control" name="password">
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
                    <div class="form-group">
                        <label for="inputPassword6">Confirm Password</label>
                        <input type="password" class="form-control" name="password_confirmation">
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
                </div>
                <div class="col-md-6">
                    <p class="mb-2">Password requirements</p>
                    <p class="small text-muted mb-2"> To create a new password, you have to meet all of the following requirements: </p>
                    <ul class="small text-muted pl-4 mb-0">
                        <li> Minimum 8 character </li>
                        <li>At least one special character</li>
                        <li>At least one number</li>
                        <li>Can’t be the same as a previous password </li>
                    </ul>
                </div>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button>
            <p class="mt-5 mb-3 text-muted text-center">© 2020</p>
        </form>
    </div>
</div>
<script src="{{asset('Admin')}}/js/jquery.min.js"></script>
<script src="{{asset('Admin')}}/js/popper.min.js"></script>
<script src="{{asset('Admin')}}/js/moment.min.js"></script>
<script src="{{asset('Admin')}}/js/bootstrap.min.js"></script>
<script src="{{asset('Admin')}}/js/simplebar.min.js"></script>
<script src='{{asset('Admin')}}js/daterangepicker.js'></script>
<script src='{{asset('Admin')}}js/jquery.stickOnScroll.js'></script>
<script src="{{asset('Admin')}}/js/tinycolor-min.js"></script>
<script src="{{asset('Admin')}}/js/config.js"></script>
<script src="{{asset('Admin')}}/js/apps.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag()
    {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'UA-56159088-1');
</script>
</body>
</html>
</body>
</html>
