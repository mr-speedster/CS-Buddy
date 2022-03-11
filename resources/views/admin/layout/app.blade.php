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
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
                  <img class="img-xs rounded-circle " src="data:image/jpeg;base64,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" alt="">
                  <span class="count bg-success"></span>
                </div>
                <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal">ADMIN</h5>
                  <span>CSE</span>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{route('AdminEvent')}}">
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
            <a class="nav-link" href="{{route('AdminAnnouncement')}}">
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
            <a class="nav-link" href="{{route('AdminTimeTable')}}">
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
            <a class="nav-link" href="{{route('AdminAttandance')}}">
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
            <a class="nav-link" href="{{route('AdminPhotos')}}">
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
            <a class="nav-link" href="{{route('AdminAcademics')}}">
              <span class="menu-icon">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                  width="20" height="20"
                  viewBox="0 0 172 172"
                  style=" fill:#000000;"><g fill="none" fill-rule="none" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none" fill-rule="nonzero"></path><g id="Layer_1" fill-rule="evenodd"><path d="M154.31317,88.36798c-2.85586,-1.03851 -5.71173,-1.00603 -8.56759,0.03248c-0.68138,0.22719 -1.33048,-0.4219 -1.10329,-1.10348l3.14783,-10.87162h0.48687v-26.61136h3.66719v26.61136h0.22719l3.24528,10.83913c0.22719,0.68158 -0.45439,1.33068 -1.10348,1.10348z" fill="#cccccc"></path><path d="M154.80577,76.42855c0,-2.60943 -2.08969,-4.82455 -4.69632,-4.82455c-2.60927,0 -4.82313,2.21513 -4.82313,4.82455c0,2.60663 2.21386,4.69632 4.82313,4.69632c2.60662,0 4.69632,-2.08969 4.69632,-4.69632z" fill="#e74c3c"></path><path d="M10.3706,43.97652l71.94438,-27.46366c2.41975,-0.9237 5.09511,-0.92285 7.51427,0.0024l71.80225,27.46206c3.00721,1.15016 3.00702,5.40462 -0.00028,6.55452l-71.80282,27.45507c-2.41864,0.92481 -5.09331,0.92567 -7.51255,0.0024l-71.94495,-27.45667c-3.0101,-1.14876 -3.01029,-5.4071 -0.00029,-6.55612z" fill="#e74c3c"></path><path d="M76.59178,86.72747c9.80067,-0.65339 31.38654,-0.45839 43.883,2.22594c3.58375,0.76982 6.94677,-1.95591 6.94677,-5.6214v-25.71872c0,-9.48644 -21.39766,-13.67279 -41.34161,-13.67279c-19.94568,0 -41.5015,4.18635 -41.5015,13.67279v27.30497c0,3.86985 3.72001,6.57239 7.43824,5.49975c7.2741,-2.09845 16.4676,-3.22768 24.57509,-3.69055z" fill="#e74c3c"></path><path d="M161.38786,114.27386c0,1.29819 -1.0708,2.36899 -2.36899,2.36899h-146.07022c-1.26571,0 -2.33651,-1.0708 -2.33651,-2.36899c0,-2.92064 0.29196,-5.97121 0.90858,-9.05427c0.38942,-2.142 0.94126,-4.31628 1.65513,-6.4258c0.22719,-1.0708 1.29819,-1.7199 2.36899,-1.4927c46.66719,3.01809 94.21066,3.01809 140.91033,0c1.0708,-0.22719 1.91461,0.4219 2.36899,1.4927c0.90858,2.23925 1.4929,4.38125 1.88232,6.4258c0.61661,3.27777 0.68138,6.29586 0.68138,9.05427z" fill="#cccccc"></path><path d="M163.81271,114.07459c0,-1.29037 -1.07562,-2.36828 -2.36506,-2.36828h-63.24678c-1.28945,0 -2.36506,1.07791 -2.36506,2.58211h-19.58128c0,-1.5042 -1.07354,-2.58211 -2.36068,-2.58211h-63.25115c-1.28714,0 -2.36064,1.07791 -2.36064,2.36828c-0.21594,0.42882 -1.08233,13.55091 4.94367,25.59738c0.42766,0.86086 1.28944,1.29382 2.15583,1.29382c0.20692,0 0.20692,0 0.20692,0c18.93795,-1.29382 38.0782,-1.93738 56.80002,-2.1533l11.18147,-0.21497l16.13625,0.21497c18.71283,0.21592 37.86207,0.85948 56.79103,2.1533c1.07331,0.21499 2.14892,-0.6491 2.36483,-1.72356c6.02392,-12.04762 4.95062,-24.73882 4.95062,-25.16764z" fill="#cccccc"></path><path d="M103.70713,151.89017l-4.94968,-0.58752l-1.93302,4.11546c-0.45617,0.97119 -1.81754,1.02492 -2.34883,0.0927l-9.18616,-16.11849l-6.99042,15.92595c-0.43733,0.99634 -1.82306,1.06915 -2.36239,0.12413l-2.36261,-4.13975l-5.12565,1.24038c-1.07681,0.26058 -1.97839,-0.83768 -1.51302,-1.8431l11.18215,-24.1588l5.3546,2.36899l2.69364,1.20074l0.55164,-0.32445l4.93289,-2.79109l13.35683,22.91319c0.55023,0.94391 -0.21502,2.11044 -1.29997,1.98167z" fill="#f1c40f"></path><path d="M106.11343,120.41752v0c1.0756,-1.28945 1.0756,-3.44274 -0.2136,-4.51743v0c-0.86202,-0.86063 -1.28714,-2.15008 -0.86202,-3.44274v0c0.64818,-1.5042 -0.2136,-3.22684 -1.71918,-3.87271v0c-1.29613,-0.43089 -2.1556,-1.50419 -2.1556,-2.7948v0c-0.21383,-1.7224 -1.71918,-3.01184 -3.43832,-3.01184v0c-1.28948,0 -2.36509,-0.64357 -3.01535,-1.72241v0c-0.64587,-1.71918 -2.58096,-2.3662 -4.08627,-1.50558v0c-1.07358,0.43112 -2.57893,0.21614 -3.4384,-0.42974v0c-1.29382,-1.28829 -3.22914,-1.07446 -4.30245,0.21614v0c-0.86178,0.85833 -2.15349,1.28921 -3.44067,0.64472v0c-1.72586,-0.43112 -3.44504,0.42859 -3.87708,1.93739v0c-0.42974,1.28922 -1.71918,2.14892 -2.79479,2.14892v0c-1.71919,0 -3.22891,1.5088 -3.01531,3.22682v0c0,1.50536 -0.64353,2.58443 -1.93508,3.01301v0c-1.50328,0.86062 -2.14684,2.57864 -1.50328,4.08745v0c0.64587,1.29059 0.42997,2.58004 -0.42974,3.44298v0c-1.07561,1.29036 -1.07561,3.44274 0.21614,4.51719v0c0.85947,0.85971 1.28717,2.14892 0.85947,3.44298v0c-0.64587,1.50419 0.21384,3.22452 1.93301,3.87248v0c1.07331,0.42881 1.93278,1.50326 2.1556,2.79248v0c0,1.72263 1.50535,3.01415 3.22453,3.01415v0c1.28944,0 2.36505,0.64357 3.00862,1.72265v0c0.64588,1.71918 2.58792,2.36389 4.09322,1.50419v0c1.28714,-0.42974 2.57866,-0.21475 3.43606,0.43089v0c1.29156,1.28829 3.23121,1.07354 4.30682,-0.2159v0c0.8597,-0.85971 2.14892,-1.28829 3.43836,-0.64473v0c1.71918,0.42974 3.44735,-0.43089 4.09092,-1.93854v0c0.21618,-1.28945 1.50765,-2.15008 2.58096,-2.15008v0c1.93301,0 3.22245,-1.50649 3.22245,-3.22682v0c-0.21379,-1.5042 0.64569,-2.58211 1.72817,-3.013v0c1.71918,-0.85971 2.14892,-2.58096 1.50534,-4.08654v0c-0.64818,-1.07331 -0.43204,-2.57866 0.42744,-3.44159z" fill="#e74c3c"></path><circle cx="26.5" cy="36.708" transform="scale(3.24528,3.24528)" r="4.286" fill="#f1c40f"></circle><g></g></svg>
              </span>
              <span class="menu-title">Academics</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{route('UserView')}}">
              <span class="menu-icon">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                  width="20" height="20"
                  viewBox="0 0 172 172"
                  style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ff0000"><path d="M86.00672,0c-43.21328,0 -72.24672,16.00648 -72.24672,30.95328c0,14.95368 29.03344,30.96672 72.24672,30.96672c43.20984,0 72.23328,-16.01304 72.23328,-30.96672c0,-14.9468 -29.02344,-30.95328 -72.23328,-30.95328zM13.76,46.81625v19.0611c0,14.70256 29.03344,30.44265 72.24672,30.44265c43.20984,0 72.23328,-15.74009 72.23328,-30.44265v-19.0611c-12.63168,12.91376 -39.85944,21.98375 -72.23328,21.98375c-32.38072,0 -59.6116,-9.07343 -72.24672,-21.98375zM13.76,82.25094v18.18094c0,14.69912 29.03344,30.28813 72.24672,30.28813c9.89548,0 18.98791,-0.85311 27.21765,-2.2911l-5.61687,7.86766c-6.85857,0.82333 -14.06025,1.30344 -21.60078,1.30344c-32.38072,0 -59.6116,-7.88421 -72.24672,-20.79453v17.87188c0,14.69912 29.03344,30.44265 72.24672,30.44265c15.97869,0 29.9342,-2.19014 41.27328,-5.65047v5.65047v6.88h6.88h10.32h6.88v-6.88v-27.52h7.24281h13.36359l-7.76687,-10.87765l-11.09938,-15.54047c3.29313,-3.47934 5.13985,-7.13545 5.13985,-10.75v-18.18094c-12.63168,12.90688 -39.85944,20.94906 -72.23328,20.94906c-32.38072,0 -59.6116,-8.04218 -72.24672,-20.94906zM139.32,103.71735l19.28281,27.00265h-14.12281v34.4h-10.32v-34.4h-14.12281z"></path></g></g></svg>
              </span>
              <span class="menu-title">View Database</span>
            </a>
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
                    <img class="img-xs rounded-circle" src="data:image/jpeg;base64,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" alt="">
                    <p class="mb-0 d-none d-sm-block navbar-profile-name">ADMIN</p>
                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                  <h6 class="p-3 mb-0">Profile</h6>
                  <div class="dropdown-divider"></div>
                  <a href="{{route('LogIn')}}" class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-logout text-danger"></i>
                      </div>
                    </div>
                  </a>
                </div>
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