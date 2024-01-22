<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIMRS</title>
    @include('layouts.backend.sc_header')
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">

        <!-- Spinner Start -->
        @include('layouts.backend.spinner')
        <!-- Spinner End -->

        <!--  Sidebar Start -->
        @include('layouts.backend.sidebar')
        <!--  Sidebar End -->

        <!--  Main wrapper -->
        <div class="body-wrapper">

            <!--  Navbar Start -->
            @include('layouts.backend.navbar')
            <!--  Navbar End -->

            <div class="container-fluid">
                <!--  Row 1 -->
                <div class="row" style="min-height: 75vh">
                    <div class="container-fluid pt-4 px-4">
                        <div class="row g-4">
                            {{-- Content Start --}}
                            @yield('content')
                            {{-- Content End --}}
                        </div>
                    </div>
                </div>
                <div class="py-6 px-6 text-center">
                    <p class="mb-0 fs-4">SIMRS iRz <a href="#" target="_blank"
                            class="pe-1 text-primary text-decoration-underline">adfn.com</a></p>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.backend.sc_footer')

</body>

</html>
