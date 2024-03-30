<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    {{-- ajax meta token start here --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- ajax meta token start here --}}

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <title>@yield('title')</title>


    @include('dashboard.includes.style')
</head>

<body>

    <!-- ########## START: LEFT PANEL ########## -->
    <!-- sl-sideleft -->
    @include('dashboard.includes.leftsidebar')
    <!-- ########## END: LEFT PANEL ########## -->

    <!-- ########## START: HEAD PANEL ########## -->
    <div class="sl-header">
        <div class="sl-header-left">
            <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i
                        class="icon ion-navicon-round"></i></a></div>
            <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i
                        class="icon ion-navicon-round"></i></a></div>
        </div><!-- sl-header-left -->
        <div class="sl-header-right">
            <nav class="nav">
                <div class="dropdown">
                    <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">

                        <a href=""><i class="icon ion-power"></i> Sign Out</a>

                    </a>
                </div><!-- dropdown -->
            </nav>
            <!-- navicon-right -->
        </div><!-- sl-header-right -->
    </div>
    <!-- ########## END: HEAD PANEL ########## -->

    <!-- ########## START: RIGHT PANEL ########## -->
    <!-- sl-sideright -->
    <!-- ########## END: RIGHT PANEL ########## --->

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="index.html">Dashboard</a>
            <span class="breadcrumb-item active">Vat Calculator</span>
        </nav>

        <div class="sl-pagebody">

            <div>
                @yield('body')
            </div>

        </div>
    </div>
    {{-- jQuery cdn start here --}}
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
        crossorigin="anonymous"></script>
    {{-- jQuery cdn end here --}}
    @include('dashboard.includes.scripts')
    @stack('js')
</body>

</html>
