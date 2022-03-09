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
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Event Board</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{route('Announcement')}}">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
              <span class="menu-title">Announcement</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{route('liveChat')}}">
              <span class="menu-icon">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                  width="24" height="24"
                  viewBox="0 0 172 172"
                  style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#db0000"><path d="M28.66667,21.5c-7.88333,0 -14.33333,6.45 -14.33333,14.33333v86l21.5,-21.5h64.5c7.88333,0 14.33333,-6.45 14.33333,-14.33333v-50.16667c0,-7.88333 -6.45,-14.33333 -14.33333,-14.33333zM129,57.33333v28.66667c0,15.80967 -12.857,28.66667 -28.66667,28.66667h-43v7.16667c0,7.88333 6.45,14.33333 14.33333,14.33333h64.5l21.5,21.5v-86c0,-7.88333 -6.45,-14.33333 -14.33333,-14.33333z"></path></g></g></svg>
              </span>
              <span class="menu-title">Live Chat</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{route('TimeTable')}}">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
             <span class="menu-title">Time Tables</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{route('Attandance')}}">
              <span class="menu-icon">
                <i class="mdi mdi-chart-bar"></i>
              </span>
              <span class="menu-title">Attendance</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{route('Photos')}}">
              <span class="menu-icon">
                <i class="mdi mdi-contacts"></i>
              </span>
              <span class="menu-title">Photos</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <span class="menu-icon">
                <i class="mdi mdi-security"></i>
              </span>
              <span class="menu-title">My Details</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('MyInfo')}}">  MyInfo</a></li>
                 
                <li class="nav-item"> <a class="nav-link" href="{{route('Academics')}}"> Academics </a></li>
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
  <script src="/assets/js/dashboard.js"></script>
  <!-- End custom js for this page -->
</body>
</html>