<aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
    <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
        <i class="fe fe-x"><span class="sr-only"></span></i>
    </a>
    <nav class="vertnav navbar navbar-light">
        <!-- Logo -->
        <div class="w-100 mb-4 d-flex justify-content-center align-items-center">
            <a class="navbar-brand mt-2" href="{{ route('admin-home') }}">
                <svg version="1.1" id="logo" class="navbar-brand-img brand-sm" xmlns="http://www.w3.org/2000/svg"
                     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120"
                     xml:space="preserve" width="50" height="50">
                <g>
                    <polygon class="st0" points="78,105 15,105 24,87 87,87" />
                    <polygon class="st0" points="96,69 33,69 42,51 105,51" />
                    <polygon class="st0" points="78,33 15,33 24,15 87,15" />
                </g>
            </svg>
            </a>
        </div>

        <!-- Navigation links -->
        <ul class="navbar-nav flex-column w-100 px-3">
            {{-- Dashboard --}}
            <x-Sidebarcomponent href="{{ route('admin-home') }}" icon="fe-home" title="{{ __('keywords.Dashboard') }}"></x-Sidebarcomponent>

            {{-- Services --}}
            <x-Sidebarcomponent href="{{ route('admin-services') }}" icon="fe-briefcase" title="{{ __('keywords.services') }}"></x-Sidebarcomponent>

            {{-- Features --}}
            <x-Sidebarcomponent href="{{ route('admin-features') }}" icon="fe-layers" title="{{ __('keywords.features') }}"></x-Sidebarcomponent>

            {{-- Members --}}
            <x-Sidebarcomponent href="{{ route('admin-members') }}" icon="fe-users" title="{{ __('keywords.members') }}"></x-Sidebarcomponent>

            {{-- Testimonials --}}
            <x-Sidebarcomponent href="{{ route('admin-testimonials') }}" icon="fe-message-circle" title="{{ __('keywords.testimonials') }}"></x-Sidebarcomponent>

            {{-- Messages --}}
            <x-Sidebarcomponent href="{{ route('admin-messages') }}" icon="fe-mail" title="{{ __('keywords.messages') }}"></x-Sidebarcomponent>

            {{-- Subscribers --}}
            <x-Sidebarcomponent href="{{ route('admin-subscribers') }}" icon="fe-user-plus" title="{{ __('keywords.subscribers') }}"></x-Sidebarcomponent>

            {{-- Settings --}}
            <x-Sidebarcomponent href="{{ route('admin-settings') }}" icon="fe-settings" title="{{ __('keywords.settings') }}"></x-Sidebarcomponent>

        </ul>
    </nav>

</aside>
