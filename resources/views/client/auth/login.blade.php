
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" href="{{ asset('assets/img/logo/favicon.ico') }}" type="image/x-icon" />
  <title>
    Client
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700,900" />
  <!-- Nucleo Icons -->
  {{-- <link href=" {{ asset('assets_ino/css/nucleo-icons.css') }}" rel="stylesheet" /> --}}

  <link href="{{ asset('/assets/assets_info/css/nucleo-icons.css') }}" rel="stylesheet" />
  <link href="{{ asset('/assets/sassets_info/css/nucleo-svg.css') }}" rel="stylesheet" />
  
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
  <!-- CSS Files -->
  <link id="pagestyle" href="{{ asset('/assets/assets_info/css/material-dashboard.css?v=3.2.0') }}" rel="stylesheet" />
</head>

<body class="">
  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 d-flex flex-column align-items-center me-lg-5">
              <div class="card card-plain">
                <div class="card-header">
                  <div style="text-align:center"><h3>Login Here!</h3></div>
                  <p class="mb-0">Enter your email and password to login</p>
                </div>
                <div class="card-body">
                  @if(session('error'))
                  <div class="alert alert-danger" role="alert">
                  {{ session('error') }}
                  </div>
                  @endif    
                  <form method="POST" action="{{ route('client.login') }}">
                    @csrf
                    <div class="input-group input-group-outline mb-3">
                      <input type="text" class="form-control @error('username') is-invalid @enderror" placeholder="Username" name="username" value="{{ old('username') }}">
                      @error('username')
                      <span class="invalid-feedback" role="alert" style="color: red;">
                          {{ $message }}
                          </span>
                      @enderror
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" value="{{ old('password') }}">
                      @error('password')
                      <span class="invalid-feedback" role="alert" style="color: red;">
                         {{ $message }}
                          </span>
                      @enderror
                    </div>
                    <div class="form-check form-check-info text-start ps-0">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                      <label class="form-check-label" for="flexCheckDefault">
                        I agree the <a href="javascript:;" class="text-dark font-weight-bolder">Terms and Conditions</a>
                      </label>
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Login</button>
                    </div>
                  </form>
                </div>
                {{-- <div class="card-footer text-center pt-0 px-lg-2 px-1">
                  <p class="mb-2 text-sm mx-auto">
                    Already have an account?
                    <a href="../pages/sign-in.html" class="text-primary text-gradient font-weight-bold">Sign in</a>
                  </p>
                </div> --}}
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!--   Core JS Files   -->
  <script src="/assets/assets_info/js/core/popper.min.js"></script>
  <script src="/assets/assets_info/js/core/bootstrap.min.js"></script>
  <script src="/assets/assets_info/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="/assets/assets_info/js/plugins/smooth-scrollbar.min.js"></script>
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
  <script src="/assets/assets_info/js/material-dashboard.min.js?v=3.2.0"></script>
</body>

</html>