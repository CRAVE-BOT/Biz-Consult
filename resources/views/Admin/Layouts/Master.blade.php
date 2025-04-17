<!doctype html>
<html lang="en">
@include('Admin.Layouts.head')
<body class="vertical light {{ LaravelLocalization::getCurrentLocale() == 'ar' ? 'rtl' : '' }}">
<div class="wrapper">
@include('Admin.Layouts.nav-header')
@include('Admin.Layouts.Nav-side-bar')
    <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="row align-items-center mb-2">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </main> <!-- main -->
</div> <!-- .wrapper -->
@include('Admin.Layouts.js')
@yield('js')
</body>
</html>
