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
{{--            has role admin--}}
            @if(auth()->user()->hasRole('admin'))
                <li>
                    <a href="{{ route('user') }}">
                        <i class='bx bxs-dashboard'></i>
                        <span>User</span>
                    </a>
                </li>
            @else
                <li>
                    <a href="{{ route('profile') }}">
                        <i class='bx bxs-dashboard'></i>
                        <span>Profile</span>
                    </a>
                </li>
            @php
            $profile = \App\Models\Profile::where('user_id', auth()->user()->id)->first();
            @endphp
            @if(!empty($profile))
                <li>
                    <a href="{{ url('/lihat') }}">
                        <i class='bx bxs-dashboard'></i>
                        <span>Cetak Kartu</span>
                    </a>
                </li>
            @endif


                <li>
                    <a class="darkmode-toggle" id="darkmode-toggle" onclick="switchTheme()">
                        <div>
                            <i class='bx bx-cog mr-10'></i>
                            <span>darkmode</span>
                        </div>

                        <span class="darkmode-switch"></span>
                    </a>
                </li>
                @endif


        </ul>
    </div>

    <!-- END SIDEBAR MENU -->
</div>
