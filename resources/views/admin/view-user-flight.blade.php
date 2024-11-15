<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="http://localhost:8000/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="http://localhost:8000/assets/img/favicon.png">
  <title>
    Great Travels
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Noto+Sans:300,400,500,600,700,800|PT+Mono:300,400,500,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="http://localhost:8000/assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="http://localhost:8000/assets/css/nucleo-svg.css" rel="stylesheet" />

  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/349ee9c857.js" crossorigin="anonymous"></script>
  <link href="http://localhost:8000/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="http://localhost:8000/assets/css/corporate-ui-dashboard.css?v=1.0.0" rel="stylesheet" />
</head>
<body class="g-sidenav-show  bg-gray-100">
    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 bg-slate-900 fixed-start " id="sidenav-main">
      <div class="container">
          @include('admin.sidebar')  <!-- Sidebar included here -->


      </div>
    </aside>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg mx-5 px-0 shadow-none rounded" id="navbarBlur" navbar-scroll="true">
          <div class="container-fluid py-1 px-2">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb bg-transparent mb-1 pb-0 pt-1 px-0 me-sm-6 me-5">
                <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;"></a></li>
                <li class="breadcrumb-item text-sm text-dark active" aria-current="page"></li>
              </ol>
              <h6 class="font-weight-bold mb-0"></h6>
            </nav>
            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
              <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                <div class="input-group">
                  <span class="input-group-text text-body bg-white  border-end-0 ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                    </svg>
                  </span>
                  <input type="text" class="form-control ps-0" placeholder="Search">
                </div>
              </div>
              <ul class="navbar-nav  justify-content-end">
                <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                  <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                    <div class="sidenav-toggler-inner">
                      <i class="sidenav-toggler-line"></i>
                      <i class="sidenav-toggler-line"></i>
                      <i class="sidenav-toggler-line"></i>
                    </div>
                  </a>
                </li>
                <li class="nav-item px-3 d-flex align-items-center">
                  <a href="javascript:;" class="nav-link text-body p-0">
                    <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg" class="fixed-plugin-button-nav cursor-pointer" viewBox="0 0 24 24" fill="currentColor">
                      <path fill-rule="evenodd" d="M11.078 2.25c-.917 0-1.699.663-1.85 1.567L9.05 4.889c-.02.12-.115.26-.297.348a7.493 7.493 0 00-.986.57c-.166.115-.334.126-.45.083L6.3 5.508a1.875 1.875 0 00-2.282.819l-.922 1.597a1.875 1.875 0 00.432 2.385l.84.692c.095.078.17.229.154.43a7.598 7.598 0 000 1.139c.015.2-.059.352-.153.43l-.841.692a1.875 1.875 0 00-.432 2.385l.922 1.597a1.875 1.875 0 002.282.818l1.019-.382c.115-.043.283-.031.45.082.312.214.641.405.985.57.182.088.277.228.297.35l.178 1.071c.151.904.933 1.567 1.85 1.567h1.844c.916 0 1.699-.663 1.85-1.567l.178-1.072c.02-.12.114-.26.297-.349.344-.165.673-.356.985-.57.167-.114.335-.125.45-.082l1.02.382a1.875 1.875 0 002.28-.819l.923-1.597a1.875 1.875 0 00-.432-2.385l-.84-.692c-.095-.078-.17-.229-.154-.43a7.614 7.614 0 000-1.139c-.016-.2.059-.352.153-.43l.84-.692c.708-.582.891-1.59.433-2.385l-.922-1.597a1.875 1.875 0 00-2.282-.818l-1.02.382c-.114.043-.282.031-.449-.083a7.49 7.49 0 00-.985-.57c-.183-.087-.277-.227-.297-.348l-.179-1.072a1.875 1.875 0 00-1.85-1.567h-1.843zM12 15.75a3.75 3.75 0 100-7.5 3.75 3.75 0 000 7.5z" clip-rule="evenodd" />
                    </svg>
                  </a>
                </li>
                <li class="nav-item dropdown pe-2 d-flex align-items-center">
                  <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    <svg height="16" width="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="cursor-pointers">
                      <path fill-rule="evenodd" d="M5.25 9a6.75 6.75 0 0113.5 0v.75c0 2.123.8 4.057 2.118 5.52a.75.75 0 01-.297 1.206c-1.544.57-3.16.99-4.831 1.243a3.75 3.75 0 11-7.48 0 24.585 24.585 0 01-4.831-1.244.75.75 0 01-.298-1.205A8.217 8.217 0 005.25 9.75V9zm4.502 8.9a2.25 2.25 0 104.496 0 25.057 25.057 0 01-4.496 0z" clip-rule="evenodd" />
                    </svg>
                  </a>
                  <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                    <li class="mb-2">
                      <a class="dropdown-item border-radius-md" href="javascript:;">
                        <div class="d-flex py-1">
                          <div class="my-auto">
                            <img src="http://localhost:8000/assets/img/team-2.jpg" class="avatar avatar-sm border-radius-sm  me-3 ">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="text-sm font-weight-normal mb-1">
                              <span class="font-weight-bold">New message</span> from Laur
                            </h6>
                            <p class="text-xs text-secondary mb-0 d-flex align-items-center ">
                              <i class="fa fa-clock opacity-6 me-1"></i>
                              13 minutes ago
                            </p>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li class="mb-2">
                      <a class="dropdown-item border-radius-md" href="javascript:;">
                        <div class="d-flex py-1">
                          <div class="my-auto">
                            <img src="http://localhost:8000/assets/img/small-logos/logo-google.svg" class="avatar avatar-sm border-radius-sm bg-gradient-dark p-2  me-3 ">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="text-sm font-weight-normal mb-1">
                              <span class="font-weight-bold">New report</span> by Google
                            </h6>
                            <p class="text-xs text-secondary mb-0 d-flex align-items-center ">
                              <i class="fa fa-clock opacity-6 me-1"></i>
                              1 day
                            </p>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item border-radius-md" href="javascript:;">
                        <div class="d-flex py-1">
                          <div class="avatar avatar-sm border-radius-sm bg-slate-800  me-3  my-auto">
                            <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                              <title>credit-card</title>
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                  <g transform="translate(1716.000000, 291.000000)">
                                    <g transform="translate(453.000000, 454.000000)">
                                      <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
                                      <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                                    </g>
                                  </g>
                                </g>
                              </g>
                            </svg>
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="text-sm font-weight-normal mb-1">
                              Payment successfully completed
                            </h6>
                            <p class="text-xs text-secondary d-flex align-items-center mb-0 ">
                              <i class="fa fa-clock opacity-6 me-1"></i>
                              2 days
                            </p>
                          </div>
                        </div>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item ps-2 d-flex align-items-center">
                  <a href="javascript:;" class="nav-link text-body p-0">
                    <img src="http://localhost:8000/assets/img/team-2.jpg" class="avatar avatar-sm" alt="avatar" />
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <!-- End Navbar -->
@extends('layouts.app')

@section('content')
    <div class="form-container">
        <h2>View Flight Reservation</h2>
        <form  >
            @csrf
            @method('PUT')

            <div class="input-row">
                <div class="input-group">
                    <label for="title">Title</label>
                    <select id="title" name="title" required>
                        <option value="Mr" {{ $reservation->title === 'Mr' ? 'selected' : '' }}>Mr</option>
                        <option value="Mrs" {{ $reservation->title === 'Mrs' ? 'selected' : '' }}>Mrs</option>
                        <option value="Ms" {{ $reservation->title === 'Ms' ? 'selected' : '' }}>Ms</option>
                        <option value="Dr" {{ $reservation->title === 'Dr' ? 'selected' : '' }}>Dr</option>
                    </select>
                </div>
                <div class="input-group">
                    <label for="first_name">First Name</label>
                    <input type="text" id="first_name" name="first_name" value="{{ $reservation->first_name }}" required>
                </div>
                <div class="input-group">
                    <label for="last_name">Last Name</label>
                    <input type="text" id="last_name" name="last_name" value="{{ $reservation->last_name }}" required>
                </div>
            </div>

            <label for="dob">Date of Birth</label>
            <input type="date" id="dob" name="dob" value="{{ $reservation->dob }}" required>

            <div class="input-row">
                <div class="input-group">
                    <label for="contact_title">Contact Person Title</label>
                    <select id="contact_title" name="contact_title" required>
                        <option value="Mr" {{ $reservation->contact_title === 'Mr' ? 'selected' : '' }}>Mr</option>
                        <option value="Mrs" {{ $reservation->contact_title === 'Mrs' ? 'selected' : '' }}>Mrs</option>
                        <option value="Ms" {{ $reservation->contact_title === 'Ms' ? 'selected' : '' }}>Ms</option>
                        <option value="Dr" {{ $reservation->contact_title === 'Dr' ? 'selected' : '' }}>Dr</option>
                    </select>
                </div>
                <div class="input-group">
                    <label for="contact_first">Contact First Name</label>
                    <input type="text" id="contact_first" name="contact_first" value="{{ $reservation->contact_first }}" required>
                </div>
                <div class="input-group">
                    <label for="contact_last">Contact Last Name</label>
                    <input type="text" id="contact_last" name="contact_last" value="{{ $reservation->contact_last }}" required>
                </div>
            </div>

            <div class="input-row">
                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" value="{{ $reservation->email }}" required>
                </div>
                <div class="input-group">
                    <label for="phone">Phone</label>
                    <input type="text" id="phone" name="phone" value="{{ $reservation->phone }}" required>
                </div>
            </div>

            <label for="address">Address</label>
            <input type="text" id="address" name="address" value="{{ $reservation->address }}" required>
            <input type="text" id="address2" name="address2" value="{{ $reservation->address2 }}" placeholder="Street Address Line 2">

            <div class="input-row">
                <div class="input-group">
                    <label for="city">City</label>
                    <input type="text" id="city" name="city" value="{{ $reservation->city }}" required>
                </div>
                <div class="input-group">
                    <label for="region">Region</label>
                    <input type="text" id="region" name="region" value="{{ $reservation->region }}">
                </div>
            </div>

            <label for="postal_code">Postal/Zip Code</label>
            <input type="text" id="postal_code" name="postal_code" value="{{ $reservation->postal_code }}" required>

            <label for="country">Country</label>
            <input type="text" id="country" name="country" value="{{ $reservation->country }}" required>

            <div class="input-row">
                <div class="input-group">
                    <label for="departure_date">Departure Date</label>
                    <input type="date" id="departure_date" name="departure_date" value="{{ $reservation->departure_date }}" required>
                    <input type="time" id="departure_time" name="departure_time" value="{{ $reservation->departure_time }}" required>
                </div>
                <div class="input-group">
                    <label for="return_date">Return Date</label>
                    <input type="date" id="return_date" name="return_date" value="{{ $reservation->return_date }}" required>
                    <input type="time" id="return_time" name="return_time" value="{{ $reservation->return_time }}" required>
                </div>
            </div>

            <div class="input-row">
                <div class="input-group">
                    <label for="departing_city">Departing From (City)</label>
                    <input type="text" id="departing_city" name="departing_city" value="{{ $reservation->departing_city }}" required>
                </div>
                <div class="input-group">
                    <label for="departing_country">Departing From (Country)</label>
                    <input type="text" id="departing_country" name="departing_country" value="{{ $reservation->departing_country }}" required>
                </div>
            </div>

            <div class="input-row">
                <div class="input-group">
                    <label for="destination_city">Destination City</label>
                    <input type="text" id="destination_city" name="destination_city" value="{{ $reservation->destination_city }}" required>
                </div>
                <div class="input-group">
                    <label for="destination_country">Destination Country</label>
                    <input type="text" id="destination_country" name="destination_country" value="{{ $reservation->destination_country }}" required>
                </div>
            </div>

            <label for="airline">Airline</label>
            <input type="text" id="airline" name="airline" value="{{ $reservation->airline }}" required>

            <label for="fare">Fare Type</label>
            <select id="fare" name="fare" required>
                <option value="One Way" {{ $reservation->fare === 'One Way' ? 'selected' : '' }}>One Way</option>
                <option value="Round Trip" {{ $reservation->fare === 'Round Trip' ? 'selected' : '' }}>Round Trip</option>
            </select>

        </form>
        <footer>
            <p>&copy; {{ date('Y') }} My Application. All rights reserved.</p>
        </footer>
    </div>
@endsection

@section('styles')
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }

        .form-container {
            width: 50%;
            margin: 2rem auto;
            background: #fff;
            padding: 2rem;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h2 {
            text-align: center;
            margin-bottom: 1rem;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin: 0.5rem 0 0.3rem;
        }

        input, textarea, select {
            padding: 0.8rem;
            margin-bottom: 1rem;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 100%;
            box-sizing: border-box;
        }

        button {
            padding: 1rem;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        .input-row {
            display: flex;
            justify-content: space-between;
        }

        .input-group {
            width: 48%;
        }

        @media screen and (max-width: 768px) {
            .form-container {
                width: 90%;
            }

            .input-row {
                flex-direction: column;
            }

            .input-group {
                width: 100%;
            }
        }
    </style>
@endsection

</main>
<div class="fixed-plugin">
<a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
  <i class="fa fa-cog py-2"></i>
</a>
<div class="card shadow-lg ">
  <div class="card-header pb-0 pt-3 ">
    <div class="float-start">
      <h5 class="mt-3 mb-0">Great Travels</h5>
      <p>See our dashboard options.</p>
    </div>
    <div class="float-end mt-4">
      <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
        <i class="fa fa-close"></i>
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
        <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
        <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
        <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
        <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
        <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
      </div>
    </a>
    <!-- Sidenav Type -->
    <div class="mt-3">
      <h6 class="mb-0">Sidenav Type</h6>
      <p class="text-sm">Choose between 2 different sidenav types.</p>
    </div>
    <div class="d-flex">
      <button class="btn bg-gradient-primary w-100 px-3 mb-2 active" data-class="bg-slate-900" onclick="sidebarType(this)">Dark</button>
      <button class="btn bg-gradient-primary w-100 px-3 mb-2 ms-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
    </div>
    <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
    <!-- Navbar Fixed -->
    <div class="mt-3">
      <h6 class="mb-0">Navbar Fixed</h6>
    </div>
    <div class="form-check form-switch ps-0">
      <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
    </div>
    <hr class="horizontal dark my-sm-4">
    <a class="btn bg-gradient-dark w-100" href="https://www.creative-tim.com/product/corporate-ui-dashboard">Free Download</a>
    <a class="btn btn-outline-dark w-100" href="https://www.creative-tim.com/learning-lab/bootstrap/license/corporate-ui-dashboard">View documentation</a>
    <div class="w-100 text-center">
      <a class="github-button" href="https://github.com/creativetimofficial/corporate-ui-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/corporate-ui-dashboard on GitHub">Star</a>
      <h6 class="mt-3">Thank you for sharing!</h6>
      <a href="https://twitter.com/intent/tweet?text=Check%20Corporate%20UI%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fcorporate-ui-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
        <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
      </a>
      <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/corporate-ui-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
        <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
      </a>
    </div>
  </div>
</div>
</div>
<!--   Core JS Files   -->
<script src="http://localhost:8000/assets/js/core/popper.min.js"></script>
<script src="http://localhost:8000/assets/js/core/bootstrap.min.js"></script>
<script src="http://localhost:8000/assets/js/plugins/perfect-scrollbar.min.js"></script>
<script src="http://localhost:8000/assets/js/plugins/smooth-scrollbar.min.js"></script>
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
<script src="http://localhost:8000/assets/js/corporate-ui-dashboard.min.js?v=1.0.0"></script>
</body>

</html>
