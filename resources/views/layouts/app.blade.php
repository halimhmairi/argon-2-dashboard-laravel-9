<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title> 

    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />

    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="g-sidenav-show   bg-gray-100">
    <div id="app">
        @guest
        <div class="container position-sticky z-index-sticky top-0">
            <div class="row">
              <div class="col-12">
                <!-- Navbar -->
                <nav class="navbar navbar-expand-lg blur border-radius-lg top-0 z-index-3 shadow position-absolute mt-4 py-2 start-0 end-0 mx-4">
                  <div class="container-fluid"> 
                    <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                    <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon mt-2">
                        <span class="navbar-toggler-bar bar1"></span>
                        <span class="navbar-toggler-bar bar2"></span>
                        <span class="navbar-toggler-bar bar3"></span>
                      </span>
                    </button>
                    <div class="collapse navbar-collapse" id="navigation">
                      <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                          <a class="nav-link d-flex align-items-center me-2 active" aria-current="page" href="../pages/dashboard.html">
                            <i class="fa fa-chart-pie opacity-6 text-dark me-1"></i>
                            Dashboard
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link me-2" href="../pages/profile.html">
                            <i class="fa fa-user opacity-6 text-dark me-1"></i>
                            Profile
                          </a>
                        </li>
                        <!-- Authentication Links -->
                        @if (Route::has('register'))
                        <li class="nav-item">
                          <a class="nav-link me-2" href="{{ Route('register') }}">
                            <i class="fas fa-user-circle opacity-6 text-dark me-1"></i>
                            Sign Up
                          </a>
                        </li>
                        @endif
                        @if (Route::has('login'))
                        <li class="nav-item">
                          <a class="nav-link me-2" href="{{ Route('login') }}">
                            <i class="fas fa-key opacity-6 text-dark me-1"></i>
                            Sign In
                          </a>
                        </li>
                        @endif
                      </ul>
                      <ul class="navbar-nav d-lg-block d-none">
                        <li class="nav-item">
                          <a href="https://www.creative-tim.com/product/argon-dashboard" class="btn btn-sm mb-0 me-1 btn-primary">Free Download</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </nav>
                <!-- End Navbar -->
              </div>
            </div>
          </div> 
                        @else

                        <div class="min-height-300 bg-primary position-absolute w-100"></div>
                        <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 ps" id="sidenav-main">
                          <div class="sidenav-header">
                            <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
                            <a class="navbar-brand m-0"  href="{{ url('/home') }}" target="_blank">
                              <img src="{{ asset('img/logo-ct-dark.png') }}" class="navbar-brand-img h-100" alt="main_logo">
                              <span class="ms-1 font-weight-bold">  {{ config('app.name', 'Laravel') }}</span>
                            </a>
                          </div>
                          <hr class="horizontal dark mt-0">
                          <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
                            <ul class="navbar-nav">
                            @can('is_user')
                              <li class="nav-item">
                                <a class="nav-link active" href="{{ route('category') }}">
                                  <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                    <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
                                  </div>
                                  <span class="nav-link-text ms-1">{{ __('Category Management') }}</span>
                                </a>
                              </li> 
                          @endif
                          @can('is_admin')
                               <li class="nav-item">
                                 <a class="nav-link" href="{{ route('role') }}">
                                   <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                     <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
                                   </div>
                                   <span class="nav-link-text ms-1">{{ __('Role Management') }}</span>
                                 </a>
                               </li> 
                               <li class="nav-item">
                                 <a class="nav-link" href="{{ route('user') }}">
                                   <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                     <i class="ni ni-credit-card text-success text-sm opacity-10"></i>
                                   </div>
                                   <span class="nav-link-text ms-1">{{ __('User Management') }}</span>
                                 </a>
                               </li> 
                            @endcan    
                            </ul>
                          </div>
                          <div class="sidenav-footer mx-3 "> 
                            <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();"  class="btn btn-dark btn-sm w-100 mb-3">
                                          {{ __('Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                          @csrf
                                      </form>
                          </div>
                        </aside>

                          <!-- Navbar-->
                <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
                    <div class="container-fluid py-1 px-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
                        <li class="breadcrumb-item text-sm text-white active" aria-current="page">Dashboard</li>
                        </ol>
                        <h6 class="font-weight-bolder text-white mb-0">Dashboard</h6>
                    </nav>
                    <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                        <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                        <div class="input-group">
                            <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" placeholder="Type here...">
                        </div>
                        </div>
                        <ul class="navbar-nav  justify-content-end"> 
                        <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                            <div class="sidenav-toggler-inner">
                                <i class="sidenav-toggler-line bg-white"></i>
                                <i class="sidenav-toggler-line bg-white"></i>
                                <i class="sidenav-toggler-line bg-white"></i>
                            </div>
                            </a>
                        </li>
                        <li class="nav-item dropdown pe-2 d-flex align-items-center">
                          <a href="javascript:;" class="nav-link text-white p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-bell cursor-pointer" aria-hidden="true"></i>
                            ddddqqq
                          </a>
                          <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                            <li class="mb-2">
                              <a class="dropdown-item border-radius-md" href="javascript:;">
                                <div class="d-flex py-1">
                                  <div class="my-auto">
                                    <img src="../assets/img/team-2.jpg" class="avatar avatar-sm  me-3 ">
                                  </div>
                                  <div class="d-flex flex-column justify-content-center">
                                    <h6 class="text-sm font-weight-normal mb-1">
                                      <span class="font-weight-bold">New message</span> from Laur
                                    </h6>
                                    <p class="text-xs text-secondary mb-0">
                                      <i class="fa fa-clock me-1" aria-hidden="true"></i>
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
                                    <img src="../assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark  me-3 ">
                                  </div>
                                  <div class="d-flex flex-column justify-content-center">
                                    <h6 class="text-sm font-weight-normal mb-1">
                                      <span class="font-weight-bold">New album</span> by Travis Scott
                                    </h6>
                                    <p class="text-xs text-secondary mb-0">
                                      <i class="fa fa-clock me-1" aria-hidden="true"></i>
                                      1 day
                                    </p>
                                  </div>
                                </div>
                              </a>
                            </li>
                            <li>
                              <a class="dropdown-item border-radius-md" href="javascript:;">
                                <div class="d-flex py-1">
                                  <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
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
                                    <p class="text-xs text-secondary mb-0">
                                      <i class="fa fa-clock me-1" aria-hidden="true"></i>
                                      2 days
                                    </p>
                                  </div>
                                </div>
                              </a>
                            </li>
                          </ul>
                        </li> 
                        <li class="nav-item dropdown pe-2 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-white p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-bell cursor-pointer"></i>
                            </a>
                            <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                            <li class="mb-2">
                                <a class="dropdown-item border-radius-md" href="javascript:;">
                                <div class="d-flex py-1">
                                    <div class="my-auto">
                                    <img src="../assets/img/team-2.jpg" class="avatar avatar-sm  me-3 ">
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                    <h6 class="text-sm font-weight-normal mb-1">
                                        <span class="font-weight-bold">New message</span> from Laur
                                    </h6>
                                    <p class="text-xs text-secondary mb-0">
                                        <i class="fa fa-clock me-1"></i>
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
                                    <img src="../assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark  me-3 ">
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                    <h6 class="text-sm font-weight-normal mb-1">
                                        <span class="font-weight-bold">New album</span> by Travis Scott
                                    </h6>
                                    <p class="text-xs text-secondary mb-0">
                                        <i class="fa fa-clock me-1"></i>
                                        1 day
                                    </p>
                                    </div>
                                </div>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item border-radius-md" href="javascript:;">
                                <div class="d-flex py-1">
                                    <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
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
                                    <p class="text-xs text-secondary mb-0">
                                        <i class="fa fa-clock me-1"></i>
                                        2 days
                                    </p>
                                    </div>
                                </div>
                                </a>
                            </li>
                            </ul>
                        </li>
                        </ul>
                    </div>
                    </div>
                </nav> 
                <!-- End Navbar --> 
                   @include('sweetalert::alert')
                                   
                                    @endguest 
                    <main class="main-content position-relative max-height-vh-100 h-100 ps ps--active-y">
                        @yield('content')
                    </main>
                </div> 

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
</body>
</html>
