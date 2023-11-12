<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<!-- SIDEBAR -->
<div class="sidebar">
    <div class="sidebar-logo">
        <a href="{{ URL::to('dashboard') }}">
                        <img src="assets_backend/images/logo.png" alt="Protend logo">
        </a>
        <div class="sidebar-close" id="sidebar-close">
            <i class='bx bx-left-arrow-alt'></i>
        </div>
    </div>
    <!-- SIDEBAR MENU -->
    <div class="simlebar-sc" data-simplebar>
        <ul class="sidebar-menu tf">

            @if(auth()->user()->hasRole('admin'))


            <li>
                <a href="{{ URL::to('dashboard') }}">
                    <i class='bx bxs-dashboard'></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{ route('user.index') }}">
                    <i class="fa fa-user"></i>
                    <span>Data Anggota </span>
                </a>
            </li>
            <li>
                <a href="{{ route('user.index') }}">
                    <i class="fa fa-whatsapp"></i>
                    <span>Kirim Pesan WA Massal </span>
                </a>
            </li>
            <li>
                <a href="{{ route('user.index') }}">
                    <i class='fa fa-bullhorn'></i>
                    <span>Pengumuman </span>
                </a>
            </li>
            <li>
                <a href="{{ route('user.index') }}">
                    <i class='fa fa-android'></i>
                    <span>KPI Anggota </span>
                </a>
            </li>
            <li>
                <a href="{{ route('user.index') }}">
                    <i class='fa fa-won'></i>
                    <span>Struktur Organisasi </span>
                </a>
            </li>
            <li>
                <a href="{{ route('user.index') }}">
                    <i class='fa fa-book'></i>
                    <span>Posting Artikel </span>
                </a>
            </li>
            <li>
                <a href="{{ route('user.index') }}">
                    <i class='fa fa-bookmark'></i>
                    <span>Agenda </span>
                </a>
            </li>
            <li>
                <a href="{{ route('user.index') }}">
                    <i class='fa fa-ban'></i>
                    <span>Share Ilmu </span>
                </a>
            </li>

            @else

                @php
                $profile = \App\Models\Profile::where('user_id', auth()->user()->id)->where('wa','!=',null)->first();
                @endphp
                @if(!empty($profile))
                <li>
                    <a href="{{ route('profile') }}">
                        <i class='bx bxs-dashboard'></i>
                        <span>Profil</span>
                    </a>
                </li>
                @endif
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
                    <li>
                        <a href="#">
                            <i class="fa fa-whatsapp"></i>
                            <span>Kirim Pesan WA Massal </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class='fa fa-bullhorn'></i>
                            <span>Pengumuman </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class='fa fa-android'></i>
                            <span>KPI Anggota </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class='fa fa-won'></i>
                            <span>Struktur Organisasi </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class='fa fa-book'></i>
                            <span>Posting Artikel </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class='fa fa-bookmark'></i>
                            <span>Agenda </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class='fa fa-ban'></i>
                            <span>Share Ilmu </span>
                        </a>
                    </li>
                @endif



                @endif

            <li>
                <!-- <a class="darkmode-toggle" id="darkmode-toggle" onclick="switchTheme()">
                    <div>
                        <i class='bx bx-cog mr-10'></i>
                        <span>Mode Gelap</span>
                    </div>
                    <span class="darkmode-switch"></span>
                </a> -->
            </li>
        </ul>
    </div>

    <!-- END SIDEBAR MENU -->
</div>
<!-- END SIDEBAR -->
<!-- Main Header -->
<!-- End Main Header -->
<!-- MAIN CONTENT -->
