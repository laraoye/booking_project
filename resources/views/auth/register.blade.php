
<!--
=========================================================
* Corporate UI - v1.0.0
=========================================================

* Product Page: https://www.creative-tim.com/product/corporate-ui
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
   Booking Travels
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Noto+Sans:300,400,500,600,700,800|PT+Mono:300,400,500,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/349ee9c857.js" crossorigin="anonymous"></script>
  <link href="{{ asset('css/nucleo-svg.css') }}"  rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="{{ asset('css/corporate-ui-dashboard.css?v=1.0.0') }}" rel="stylesheet" />
</head>

<body class="">

  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="position-absolute w-40 top-0 start-0 h-100 d-md-block d-none">
                <div class="oblique-image position-absolute d-flex fixed-top ms-auto h-100 z-index-0 bg-cover me-n8" style="background-image: url('{{ asset('img/image-sign-up.jpg') }}');">
                  <div class="my-auto text-start max-width-350 ms-7">
                    <h1 class="mt-3 text-white font-weight-bolder">Booking <br> Travels</h1>
                    <p class="text-white text-lg mt-4 mb-4">Login or create new account </p>
                    <div class="d-flex align-items-center">

                    </div>
                  </div>
                  <div class="text-start position-absolute fixed-bottom ms-7">
                    <h6 class="text-white text-sm mb-5">Copyright © Booking Travels</h6>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 d-flex flex-column mx-auto">
              <div class="card card-plain mt-8">
                <div class="card-header pb-0 text-left bg-transparent">
                  <h3 class="font-weight-black text-dark display-6">Sign up</h3>
                  <p class="mb-0">Nice to meet you! Please enter your details.</p>
                </div>
                <div class="card-body">
                  <form method="POST" action="{{ route('register') }}">
        @csrf

                    <label>Name</label>
                    <div class="mb-3">
                     <input id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" class="form-control" placeholder="Enter your name" aria-label="Name" aria-describedby="name-addon">

    <!-- Display validation error if any -->
    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>
                    <label>Email Address</label>
                   <div class="mb-3">
    <!-- Single input field for Email -->
    <input id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" class="form-control" placeholder="Enter your email address" aria-label="Email" aria-describedby="email-addon">

    <!-- Display validation error if any -->
    <x-input-error :messages="$errors->get('email')" class="mt-2" />
</div>

                    <label>Create a Password</label>
                    <div class="mb-3">

    <!-- Single input field for Password -->
    <input id="password" type="password" name="password" required autocomplete="new-password" class="form-control" placeholder="Create a password" aria-label="Password" aria-describedby="password-addon">

    <!-- Display validation error if any -->
    <x-input-error :messages="$errors->get('password')" class="mt-2" />
</div>


                   <div class="mb-3">
    <!-- Input field for Confirm Password -->
    <label for="password_confirmation" class="form-label">Confirm Password</label>
    <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" class="form-control" placeholder="Confirm your password" aria-label="Password Confirmation" aria-describedby="password-confirm-addon">

    <!-- Display validation error if any -->
    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
</div>

                    <div class="form-check form-check-info text-left mb-0">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                      <label class="font-weight-normal text-dark mb-0" for="flexCheckDefault">
                        I agree the <a href="javascript:;" class="text-dark font-weight-bold">Terms and Conditions</a>.
                      </label>
                    </div>
                    <div class="text-center">
                     <!-- Registration Button -->
<button type="submit" class="btn btn-dark w-100 mt-4 mb-3">Register</button>

<!-- Link for Already Registered Users -->
<div class="flex items-center justify-end mt-4">
    <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
        {{ __('Already registered?') }}
    </a>
</div>

                    </div>
                  </form>
                </div>
                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                  <p class="mb-4 text-xs mx-auto">
                    Already have an account?
                    <a href="javascript:;" class="text-dark font-weight-bold">Sign in</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
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
  <!-- Control Center for Corporate UI Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/corporate-ui-dashboard.min.js?v=1.0.0"></script>
</body>

</html>



