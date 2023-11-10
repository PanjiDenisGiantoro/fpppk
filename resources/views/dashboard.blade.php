<!DOCTYPE html>
<html lang="en">

@include('layouts_backend.head')
<style>
        .modal {
            z-index: 9999999999999999999 !important;
        }
    </style>
<body class="sidebar-expand">
<!-- SIDEBAR -->
@include('layouts_backend.sidebar')
<!-- END SIDEBAR -->
<!-- Main Header -->
@include('layouts_backend.nav')
<!-- End Main Header -->
<!-- MAIN CONTENT -->
@include('sweetalert::alert')
@yield('content')
<!-- END MAIN CONTENT -->
<div class="overlay"></div>
@include('layouts_backend.footer')
@stack('scripts')
</body>

</html>
