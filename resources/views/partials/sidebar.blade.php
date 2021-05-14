<div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
    <div class="c-sidebar-brand d-lg-down-none">
        <svg class="c-sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
            <use xlink:href="{{asset('assets/brand/coreui.svg#full') }}"></use>
        </svg>
        <svg class="c-sidebar-brand-minimized" width="46" height="46" alt="CoreUI Logo">
            <use xlink:href="{{asset('assets/brand/coreui.svg#signet') }}"></use>
        </svg>
    </div>
    <ul class="c-sidebar-nav">
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{route('home')}}">
                <svg class="c-sidebar-nav-icon">
                    <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-speedometer') }}"></use>
                </svg> Dashboard</a></li>
        <li class="c-sidebar-nav-title">Components</li>
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="charts.html">
                <svg class="c-sidebar-nav-icon">
                    <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-chart-pie') }}"></use>
                </svg> Other</a></li>
        <li class="c-sidebar-nav-item c-sidebar-nav-dropdown"><a
                class="c-sidebar-nav-link c-sidebar-nav-dropdown-toggle" href="#">
                <svg class="c-sidebar-nav-icon">
                    <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-cog') }}"></use>
                </svg>Settings</a>
            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="buttons/buttons.html"><span
                            class="c-sidebar-nav-icon"></span>Users</a></li>
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="buttons/button-group.html"><span
                            class="c-sidebar-nav-icon"></span>Roles</a></li>
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="buttons/dropdowns.html"><span
                            class="c-sidebar-nav-icon"></span>Permissions</a></li>
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="buttons/brand-buttons.html"><span
                            class="c-sidebar-nav-icon"></span>Menu</a></li>
            </ul>
        </li>
        
    </ul>
    <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent"
        data-class="c-sidebar-minimized"></button>
</div>