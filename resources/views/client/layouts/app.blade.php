<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Client | {{ $title }}</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="icon" href="{{ asset('assets/img/logo/favicon.ico') }}" type="image/x-icon" />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700,900" />
    <!-- Nucleo Icons -->
    <link href="{{ asset('/assets/assets_info/cssnucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('/assets/assets_info/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('/assets/assets_info/css/material-dashboard.css?v=3.2.0') }}"
        rel="stylesheet" />

        <!-- Include DataTables CSS -->
<link href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" rel="stylesheet" />
{{-- <link rel="stylesheet" href="sweetalert2.min.css"> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<!-- Font Awesome CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Scripts -->
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
    <style>
      .custom-toast {
          background-color: #228B22 !important; /* Forest Green color */
          color: #ffffff; /* White text for better readability */
          border-radius: 8px; /* Optional: Rounded corners */
          font-size: 16px; /* Optional: Adjust text size */
      }
      .custom-toast-error {
          background-color: #b22222  !important; /* Forest Green color */
          color: #ffffff; /* White text for better readability */
          border-radius: 8px; /* Optional: Rounded corners */
          font-size: 16px; /* Optional: Adjust text size */
      }
      .custom-toast-warning {
          background-color: #ff6700  !important; /* Forest Green color */
          color: #ffffff; /* White text for better readability */
          border-radius: 8px; /* Optional: Rounded corners */
          font-size: 16px; /* Optional: Adjust text size */
      }
      .custom-toast-info {
          background-color: #0000FF  !important; /* Forest Green color */
          color: #ffffff; /* White text for better readability */
          border-radius: 8px; /* Optional: Rounded corners */
          font-size: 16px; /* Optional: Adjust text size */
      }
      .swal2-close {
          color: white; /* Adjust color */
          font-size: 1.2em; /* Adjust size */
          top: 5px; /* Adjust position */
          right: 10px; /* Adjust position */
      }
     

      </style>
    @stack('style')
</head>

<body class="g-sidenav-show  bg-gray-100">
    @include('client/partials/aside')
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        @include('client/partials/nav')
        <div id="app">
            <div class="container-fluid py-2">
                <div class="row">
                  <div class="col-12">
                    {{-- @include('client/partials/messages') --}}
                  </div>
                </div>
            </div>
            @yield('content')
            @include('client/partials/footer')
        </div>
    </main>
    <div class="fixed-plugin">
        <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
          <i class="material-symbols-rounded py-2">settings</i>
        </a>
        <div class="card shadow-lg">
          <div class="card-header pb-0 pt-3">
            <div class="float-start">
              <h5 class="mt-3 mb-0">Material UI Configurator</h5>
              <p>See our dashboard options.</p>
            </div>
            <div class="float-end mt-4">
              <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
                <i class="material-symbols-rounded">clear</i>
              </button>
            </div>
            <!-- End Toggle Button -->
          </div>
          <hr class="horizontal dark my-1">
          <div class="card-body pt-sm-3 pt-0">
            <!-- Sidebar Backgrounds -->
            <div>
              <h6 class="mb-0">Sidebar Colors</h6>
            </div>
            <a href="javascript:void(0)" class="switch-trigger background-color">
              <div class="badge-colors my-2 text-start">
                <span class="badge filter bg-gradient-primary" data-color="primary" onclick="sidebarColor(this)"></span>
                <span class="badge filter bg-gradient-dark active" data-color="dark" onclick="sidebarColor(this)"></span>
                <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
                <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
                <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
                <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
              </div>
            </a>
            <!-- Sidenav Type -->
            <div class="mt-3">
              <h6 class="mb-0">Sidenav Type</h6>
              <p class="text-sm">Choose between different sidenav types.</p>
            </div>
            <div class="d-flex">
              <button class="btn bg-gradient-dark px-3 mb-2" data-class="bg-gradient-dark" onclick="sidebarType(this)">Dark</button>
              <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-transparent" onclick="sidebarType(this)">Transparent</button>
              <button class="btn bg-gradient-dark px-3 mb-2  active ms-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
            </div>
            <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
            <!-- Navbar Fixed -->
            <div class="mt-3 d-flex">
              <h6 class="mb-0">Navbar Fixed</h6>
              <div class="form-check form-switch ps-0 ms-auto my-auto">
                <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
              </div>
            </div>
            <hr class="horizontal dark my-3">
            <div class="mt-2 d-flex">
              <h6 class="mb-0">Light / Dark</h6>
              <div class="form-check form-switch ps-0 ms-auto my-auto">
                <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
              </div>
            </div>
            <hr class="horizontal dark my-sm-4">
            <a class="btn bg-gradient-info w-100" href="https://www.creative-tim.com/product/material-dashboard-pro">Free Download</a>
            <a class="btn btn-outline-dark w-100" href="https://www.creative-tim.com/learning-lab/bootstrap/overview/material-dashboard">View documentation</a>
            <div class="w-100 text-center">
              <a class="github-button" href="https://github.com/creativetimofficial/material-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/material-dashboard on GitHub">Star</a>
              <h6 class="mt-3">Thank you for sharing!</h6>
              <a href="https://twitter.com/intent/tweet?text=Check%20Material%20UI%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fsoft-ui-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
                <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
              </a>
              <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/material-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
                <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
              </a>
            </div>
          </div>
        </div>
      </div>
      <!--   Core JS Files   -->
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

      <script src="{{ asset('/assets/assets_info/js/core/popper.min.js') }}"></script>
      <script src="{{ asset('/assets/assets_info/js/core/bootstrap.min.js') }}"></script>
      <script src="{{ asset('/assets/assets_info/js/plugins/perfect-scrollbar.min.js') }}"></script>
      <script src="{{ asset('/assets/assets_info/js/plugins/smooth-scrollbar.min.js') }}"></script>
      <!-- SweetAlert2 JS -->
   
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script> --}}
      <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
          var options = {
            damping: '0.5'
          }
          Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
      </script>
      <!-- Github buttons -->
      <script async defer src="https://buttons.github.io/buttons.js"></script>
      <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
      <script src="../assets/js/material-dashboard.min.js?v=3.2.0"></script>
<!-- Include DataTables JS -->
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
@include('client/partials/tostmessage')
      @stack('script')

    </body>
    
    </html>