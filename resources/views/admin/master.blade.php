<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">





    <title>@yield('title')</title>

   @include('admin.includes.style')
  </head>

  <body>

    <!-- ########## START: LEFT PANEL ########## -->
   <!-- sl-sideleft -->
    @include('admin.includes.leftsidebar')
    <!-- ########## END: LEFT PANEL ########## -->

    <!-- ########## START: HEAD PANEL ########## -->
    <div class="sl-header">
      <div class="sl-header-left">
        <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
        <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
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

      </div><
    </div>

    @include('admin.includes.scripts')
  </body>
</html>
