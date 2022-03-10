<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CS BUDDY</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="/assets/images/favicon.png" />
  </head>
  <body>
    <!--loader-->
    <div id="preloader"></div>
    <!--loader-->
    <div class="container-scroller" id="main" style="display: none">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="{{route('EventBoard')}}"><img src="/assets/images/logo.svg" alt="logo" /></a>
          <a class="sidebar-brand brand-logo-mini" href="{{route('EventBoard')}}"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
                  <img class="img-xs rounded-circle " src="/assets/images/faces/face15.jpg" alt="">
                  <span class="count bg-success"></span>
                </div>
                <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal">{{$name}}</h5>
                  <span>CSE</span>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{route('EventBoard')}}">
              <span class="menu-icon">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                width="20" height="20"
                viewBox="0 0 172 172"
                style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#9b59b6"><path d="M157.52669,14.26335c-1.86189,0.05548 -3.62905,0.83363 -4.92708,2.1696l-7.16667,7.16667c-1.33888,1.34612 -2.08896,3.16847 -2.08561,5.06706v10.75h-10.75c-3.95788,0.0004 -7.16627,3.20879 -7.16667,7.16667v10.75h-10.75c-1.90544,-0.00335 -3.73379,0.75217 -5.08105,2.09961l-14.33333,14.33333c-1.81117,1.81261 -2.5175,4.4539 -1.85283,6.9286c0.66466,2.47469 2.5993,4.40666 5.07491,5.06791c2.47561,0.66125 5.11592,-0.04873 6.92603,-1.8624l12.23373,-12.23372h14.94922c3.95788,-0.0004 7.16627,-3.20879 7.16667,-7.16667v-10.75h10.75c3.95788,-0.0004 7.16627,-3.20879 7.16667,-7.16667v-14.94922l5.06706,-5.06706c2.12177,-2.06209 2.75839,-5.21602 1.60262,-7.93968c-1.15577,-2.72366 -3.86637,-4.45721 -6.82365,-4.36403zM57.34733,14.33333c-2.58456,-0.03655 -4.98858,1.32136 -6.29153,3.55376c-1.30295,2.2324 -1.30295,4.99342 0,7.22582c1.30295,2.2324 3.70697,3.59031 6.29153,3.55376h0.08398c3.77127,0 7.38399,1.50088 10.06413,4.17122c2.67102,2.67102 4.18522,6.29282 4.18522,10.07813v14.41732c-0.03655,2.58456 1.32136,4.98858 3.55376,6.29153c2.2324,1.30295 4.99342,1.30295 7.22582,0c2.2324,-1.30295 3.59031,-3.70697 3.55376,-6.29153v-14.41732c0,-7.58102 -3.0148,-14.8566 -8.37044,-20.21224c-0.00467,0 -0.00933,0 -0.014,0c-5.35958,-5.35036 -12.62199,-8.37044 -20.19824,-8.37044zM107.514,14.33333c-3.95804,0 -7.16667,3.20863 -7.16667,7.16667c0,3.95804 3.20863,7.16667 7.16667,7.16667c3.95804,0 7.16667,-3.20863 7.16667,-7.16667c0,-3.95804 -3.20863,-7.16667 -7.16667,-7.16667zM35.84733,35.83333c-3.95804,0 -7.16667,3.20863 -7.16667,7.16667c0,3.95804 3.20863,7.16667 7.16667,7.16667c3.95804,0 7.16667,-3.20863 7.16667,-7.16667c0,-3.95804 -3.20863,-7.16667 -7.16667,-7.16667zM57.26335,64.43001c-2.91628,0.00077 -5.54133,1.76841 -6.6387,4.47035c-1.09737,2.70194 -0.44825,5.79937 1.64163,7.83336l2.09961,2.09961l-32.85189,78.83333l78.83333,-32.85189l2.08561,2.08561c1.81011,1.81367 4.45043,2.52364 6.92603,1.8624c2.47561,-0.66125 4.41025,-2.59322 5.07491,-5.06791c0.66466,-2.47469 -0.04167,-5.11599 -1.85283,-6.9286l-50.16666,-50.16667c-1.35266,-1.39047 -3.21117,-2.17327 -5.15104,-2.1696zM21.514,64.5c-3.95804,0 -7.16667,3.20863 -7.16667,7.16667c0,3.95804 3.20863,7.16667 7.16667,7.16667c3.95804,0 7.16667,-3.20863 7.16667,-7.16667c0,-3.95804 -3.20863,-7.16667 -7.16667,-7.16667zM157.68066,64.5c-3.95804,0 -7.16667,3.20863 -7.16667,7.16667c0,3.95804 3.20863,7.16667 7.16667,7.16667c3.95804,0 7.16667,-3.20863 7.16667,-7.16667c0,-3.95804 -3.20863,-7.16667 -7.16667,-7.16667zM114.68066,93.16667c-2.58456,-0.03655 -4.98858,1.32136 -6.29153,3.55376c-1.30295,2.2324 -1.30295,4.99342 0,7.22582c1.30295,2.2324 3.70697,3.59031 6.29153,3.55376h14.15136c3.84728,0 7.54021,1.53532 10.26009,4.25521c2.71989,2.71989 4.25521,6.41281 4.25521,10.26009v6.9847c-0.03655,2.58456 1.32136,4.98858 3.55376,6.29153c2.2324,1.30295 4.99342,1.30295 7.22582,0c2.2324,-1.30295 3.59031,-3.70697 3.55376,-6.29153v-6.9847c0,-7.64806 -3.04731,-14.9871 -8.45442,-20.3942c-5.40711,-5.40711 -12.74615,-8.45443 -20.39421,-8.45443zM129.014,143.33333c-3.95804,0 -7.16667,3.20863 -7.16667,7.16667c0,3.95804 3.20863,7.16667 7.16667,7.16667c3.95804,0 7.16667,-3.20863 7.16667,-7.16667c0,-3.95804 -3.20863,-7.16667 -7.16667,-7.16667z"></path></g></g></svg>
              </span>
              <span class="menu-title">Event Board</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{route('Announcement')}}">
              <span class="menu-icon">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                width="20" height="20"
                viewBox="0 0 172 172"
                style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ff8308"><path d="M114.66667,21.5c-18.86983,0 -34.16989,14.62034 -35.56739,33.13184l38.26888,38.26888c18.5115,-1.3975 33.13184,-16.69755 33.13184,-35.56739c0,-19.78717 -16.04617,-35.83333 -35.83333,-35.83333zM70.79883,66.59961l-54.8418,67.03353c-2.32917,2.85233 -2.12559,7.00072 0.47591,9.60222l12.33171,12.3317c2.6015,2.6015 6.75705,2.80508 9.60221,0.47592l67.03353,-54.8418zM71.66667,93.16667c1.83377,0 3.66956,0.69853 5.06706,2.09961c2.80217,2.80217 2.80217,7.33911 0,10.13411l-7.16667,7.16667c-2.80217,2.80217 -7.33911,2.80217 -10.13411,0c-2.80217,-2.80217 -2.80217,-7.33911 0,-10.13411l7.16667,-7.16667c1.40108,-1.40108 3.23329,-2.09961 5.06706,-2.09961z"></path></g></g></svg>
              </span>
              <span class="menu-title">Announcement</span>
              </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{route('liveChat')}}">
              <span class="menu-icon">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                  width="20" height="20"
                  viewBox="0 0 172 172"
                  style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#db0000"><path d="M28.66667,21.5c-7.88333,0 -14.33333,6.45 -14.33333,14.33333v86l21.5,-21.5h64.5c7.88333,0 14.33333,-6.45 14.33333,-14.33333v-50.16667c0,-7.88333 -6.45,-14.33333 -14.33333,-14.33333zM129,57.33333v28.66667c0,15.80967 -12.857,28.66667 -28.66667,28.66667h-43v7.16667c0,7.88333 6.45,14.33333 14.33333,14.33333h64.5l21.5,21.5v-86c0,-7.88333 -6.45,-14.33333 -14.33333,-14.33333z"></path></g></g></svg>
              </span>
              <span class="menu-title">Live Chat</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{route('TimeTable')}}">
              <span class="menu-icon">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                  width="20" height="20"
                  viewBox="0 0 172 172"
                  style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#3498db"><path d="M35.83333,21.5c-7.91917,0 -14.33333,6.41417 -14.33333,14.33333v100.33333c0,7.91917 6.41417,14.33333 14.33333,14.33333h40.04655c-1.83467,-4.52217 -3.09981,-9.32383 -3.72331,-14.33333h-36.32324v-78.83333h100.33333v14.82324c5.0095,0.6235 9.81117,1.88865 14.33333,3.72331v-40.04655c0,-7.91917 -6.41417,-14.33333 -14.33333,-14.33333zM50.16667,78.83333v14.33333h14.33333v-14.33333zM78.83333,78.83333v14.33333h5.44499c4.6655,-5.81217 10.42817,-10.69983 16.99283,-14.33333zM129,86c-23.65,0 -43,19.35 -43,43c0,23.65 19.35,43 43,43c23.65,0 43,-19.35 43,-43c0,-23.65 -19.35,-43 -43,-43zM129,100.33333c15.76667,0 28.66667,12.9 28.66667,28.66667c0,15.76667 -12.9,28.66667 -28.66667,28.66667c-15.76667,0 -28.66667,-12.9 -28.66667,-28.66667c0,-15.76667 12.9,-28.66667 28.66667,-28.66667zM50.16667,107.5v14.33333h14.33333v-14.33333zM132.06543,108.33985l-11.46386,21.65397l15.0332,15.0332l7.60059,-7.60059l-9.42025,-9.42025l7.75456,-14.64128z"></path></g></g></svg>
              </span>
             <span class="menu-title">Time Tables</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{route('Attandance')}}">
              <span class="menu-icon">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                  width="20" height="20"
                  viewBox="0 0 172 172"
                  style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#2ecc71"><path d="M50.16667,21.5l12.84961,12.84961l-41.51628,41.51628l10.13411,10.13411l41.51627,-41.51628l12.84961,12.84961v-35.83333zM129,21.5v129h21.5v-129zM93.16667,78.83333v71.66667h21.5v-71.66667zM57.33333,107.5v43h21.5v-43zM21.5,121.83333v28.66667h21.5v-28.66667z"></path></g></g></svg>
              </span>
              <span class="menu-title">Attendance</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{route('Photos')}}">
              <span class="menu-icon">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                  width="20" height="20"
                  viewBox="0 0 172 172"
                  style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#fa05dd"><path d="M21.5,21.5c-7.90483,0 -14.33333,6.4285 -14.33333,14.33333v71.66667c0,7.90483 6.4285,14.33333 14.33333,14.33333h93.16667c7.90483,0 14.33333,-6.4285 14.33333,-14.33333v-71.66667c0,-7.90483 -6.4285,-14.33333 -14.33333,-14.33333zM143.33333,50.16667v86h-107.5v14.33333h107.5c7.83362,0 14.33333,-6.49972 14.33333,-14.33333v-86zM87.03581,64.41602l31.7041,43.08398h-101.31315l25.11133,-32.01205l18.74251,22.56381z"></path></g></g></svg>
              </span>
              <span class="menu-title">Photos</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <span class="menu-icon">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                  width="20" height="20"
                  viewBox="0 0 172 172"
                  style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffbb00"><path d="M150.5,35.83333h-52.90433l-3.2035,-6.407c-2.43667,-4.88767 -7.34583,-7.92633 -12.82117,-7.92633h-60.071c-7.90483,0 -14.33333,6.4285 -14.33333,14.33333v100.33333c0,7.90483 6.4285,14.33333 14.33333,14.33333h14.33333v-14.33333h14.33333v14.33333h71.66667v-14.33333h14.33333v14.33333h14.33333c7.90483,0 14.33333,-6.4285 14.33333,-14.33333v-86c0,-7.90483 -6.4285,-14.33333 -14.33333,-14.33333zM86,57.33333c8.11983,0 14.33333,6.2135 14.33333,14.33333c0,8.11983 -6.2135,14.33333 -14.33333,14.33333c-8.11983,0 -14.33333,-6.2135 -14.33333,-14.33333c0,-8.11983 6.2135,-14.33333 14.33333,-14.33333zM114.66667,114.66667h-57.33333c0,-1.12517 0,-4.472 0,-5.6115c0,-9.374 13.0075,-15.8885 28.66667,-15.8885c15.65917,0 28.66667,6.5145 28.66667,15.8885c0,1.1395 0,4.48633 0,5.6115z"></path></g></g></svg>
              </span>
              <span class="menu-title">My Details</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('MyInfo')}}">  MyInfo</a></li>
                 
                <li class="nav-item"> <a class="nav-link" href="{{ route('Academics')}}"> Academics </a></li>
              </ul>
            </div>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="index.html"><img src="/assets/images/logo-mini.svg" alt="logo" /></a>
          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
            <ul class="navbar-nav w-100">
            </ul>
            <ul class="navbar-nav navbar-nav-right">
              <li class="nav-item dropdown">
                <a class="nav-link" id="profileDropdown" href="#" data-bs-toggle="dropdown">
                  <div class="navbar-profile">
                    <img class="img-xs rounded-circle" src="/assets/images/faces/face15.jpg" alt="">
                    <p class="mb-0 d-none d-sm-block navbar-profile-name">{{$name}}</p>
                  </div>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a href="{{route('LogIn')}}" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon">
                      <i class="mdi mdi-logout text-danger"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject mb-1">Log out</p>
                  </div>
                </a>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-format-line-spacing"></span>
            </button>
          </div>
        </nav>
        <!-- partial -->
        
            @yield('main_section')

        <!-- partial:partials/_footer.html -->
        <footer class="footer">
            
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <script type="text/javascript">
    var loader = document.getElementById("preloader")
    var body = document.getElementById("main")
    window.addEventListener("load",function(){
      loader.style.display = "none";
      body.style.display = ""
    })
  </script>
  <!-- plugins:js -->
  <script src="/assets/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="/assets/vendors/chart.js/Chart.min.js"></script>
  <script src="/assets/vendors/progressbar.js/progressbar.min.js"></script>
  <script src="/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
  <script src="/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
  <script src="/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
  <script src="/assets/js/jquery.cookie.js" type="text/javascript"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="/assets/js/off-canvas.js"></script>
  <script src="/assets/js/hoverable-collapse.js"></script>
  <script src="/assets/js/misc.js"></script>
  <script src="/assets/js/settings.js"></script>
  <script src="/assets/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page -->
  <!-- End custom js for this page -->
</body>
</html>