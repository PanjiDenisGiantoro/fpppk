<div class="sidebar">
    <div class="sidebar-logo">
        <a href="index.html">
            <img src="assets_backend/images/logo.png" alt="Protend logo">
        </a>
        <div class="sidebar-close" id="sidebar-close">
            <i class='bx bx-left-arrow-alt'></i>
        </div>
    </div>
    <!-- SIDEBAR MENU -->
    <div class="simlebar-sc" data-simplebar>
        <ul class="sidebar-menu tf">
            <li class="sidebar-submenu">

            <li>
                <a href="{{ route('dashboard') }}">
                    <i class='bx bxs-dashboard'></i>
                    <span>Dashboard</span>
                </a>
            </li>
            </li>
{{--            <li class="sidebar-submenu">--}}
{{--                <a href="project.html" class="sidebar-menu-dropdown">--}}
{{--                    <i class='bx bxs-bolt'></i>--}}
{{--                    <span>Project</span>--}}
{{--                    <div class="dropdown-icon"><i class='bx bx-chevron-down'></i></div>--}}
{{--                </a>--}}
{{--                <ul class="sidebar-menu sidebar-menu-dropdown-content">--}}
{{--                    <li>--}}
{{--                        <a href="project.html">--}}
{{--                            Project--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a href="project-details.html">--}}
{{--                            Project Details--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a href="new-project.html">--}}
{{--                            New Project--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </li>--}}

{{--            <li class="sidebar-submenu">--}}
{{--                <a href="clients.html" class="sidebar-menu-dropdown">--}}
{{--                    <i class='bx bxs-user'></i>--}}
{{--                    <span>Client</span>--}}
{{--                    <div class="dropdown-icon"><i class='bx bx-chevron-down'></i></div>--}}
{{--                </a>--}}
{{--                <ul class="sidebar-menu sidebar-menu-dropdown-content">--}}
{{--                    <li>--}}
{{--                        <a href="clients.html">--}}
{{--                            Manager Client--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a href="client-details.html">--}}
{{--                            Client Details--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </li>--}}
            <li>
                <a href="{{ route('profile') }}">
                    <i class='bx bxs-dashboard'></i>
                    <span>Profile</span>
                </a>
            </li>
            <li>
                <a href="{{ url('/lihat') }}">
                    <i class='bx bxs-dashboard'></i>
                    <span>Cetak Kartu</span>
                </a>
            </li>

            <li>
                <a class="darkmode-toggle" id="darkmode-toggle" onclick="switchTheme()">
                    <div>
                        <i class='bx bx-cog mr-10'></i>
                        <span>darkmode</span>
                    </div>

                    <span class="darkmode-switch"></span>
                </a>
            </li>
        </ul>
    </div>

    <!-- END SIDEBAR MENU -->
</div>
