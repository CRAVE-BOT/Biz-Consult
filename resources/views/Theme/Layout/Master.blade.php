<!DOCTYPE html>
<html lang="en">
@include('Theme.Layout.head')
<body>
<div class="container-xxl bg-white p-0">
    <div class="container-xxl position-relative p-0">
      @include('Theme.Layout.nav')
        @yield('learn_more')
    </div>
    @yield('content')
@include('Theme.Layout.footer')
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>
@include('Theme.Layout.JS')
</body>

</html>
