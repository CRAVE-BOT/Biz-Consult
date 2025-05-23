<nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
    <a href="index.html" class="navbar-brand p-0">
        <h1 class="m-0">BizConsult</h1>
        <!-- <img src="img/logo.png" alt="Logo"> -->
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
            <a href="{{route('home')}}" class="nav-item nav-link @yield('Home-active')">Home</a>
            <a href="{{route('about')}}" class="nav-item nav-link @yield('About-active')">About</a>
            <a href="{{route('service')}}" class="nav-item nav-link @yield('services-active')">Service</a>
            <a href="{{route('contact')}}" class="nav-item nav-link @yield('contact-active')">Contact</a>
        </div>
    </div>
</nav>
