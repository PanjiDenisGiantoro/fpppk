<div class="main-header">
    <div class="d-flex">
        <div class="mobile-toggle" id="mobile-toggle">
            <i class='bx bx-menu'></i>
        </div>
        <div class="main-title">
            Dashboard
        </div>
    </div>

    <div class="d-flex align-items-center">

        <!-- App Search-->
        <form class="app-search d-none d-lg-block">
            <div class="position-relative">
                <input type="text" class="form-control" placeholder="Search">
                <span class="bx bx-search-alt"></span>
            </div>
        </form>
        <div class="dropdown d-inline-block d-lg-none ms-2">
            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class='bx bx-search-alt' ></i>
            </button>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-search-dropdown">

                <form class="p-3">
                    <div class="form-group m-0">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                            <div class="input-group-append">
                                <button class="btn btn-primary h-100" type="submit"><i class='bx bx-search-alt' ></i></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="dropdown d-inline-block">


        </div>
        <!-- <div class="dropdown d-none d-lg-inline-block ms-1">
            <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                    <i class="bx bx-fullscreen"></i>
                </button>
        </div> -->
        <div class="dropdown d-inline-block mt-12">
            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img class="rounded-circle header-profile-user" src="assets_backend/images/profile/profile.png"
                     alt="Header Avatar">
                <span class="pulse-css"></span>
                <span class="info d-xl-inline-block  color-span">
                            <span class="d-block fs-20 font-w600">
                                {{ Auth::user()->name }}
                            </span>
                            <span class="d-block mt-7" >{{ Auth::user()->email }}</span>
                        </span>
                <i class='bx bx-chevron-down'></i>
            </button>
            <div class="dropdown-menu dropdown-menu-end">
                <!-- item-->
                <div class="dropdown-divider"></div>
                <form action="/logout" method="POST">
                    @csrf
                    <button class=" dropdown-item text-danger">Logout</button>
                </form>
                {{--                <a class="dropdown-item text-danger" href="{{ route('logout') }}"><i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span>Logout</span></a>--}}
            </div>
        </div>
    </div>
</div>
