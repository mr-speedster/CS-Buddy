<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CD BUDDY</title>
    <link rel="icon" href="/images/icon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
      integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
      crossorigin="anonymous"
    />
    <link rel="shortcut icon" href="/assets/images/favicon.png" />
    <link rel="stylesheet" href="/css/view.css" />
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  </head>
  <body>
    <!-- Header -->
    <header id="header">
        <nav class="navbar navbar-expand-lg navbar-dark bg-black static-top">
            <div class="container">
              <a class="navbar-brand" href="#">
                CS BUDDY
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{url(route('UserView'))}}">Users</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{url(route('EventView'))}}">Event</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{url(route('AnnouncementView'))}}">Announcement</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{url(route('TimeTableView'))}}">Time Table</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{url(route('AttendanceView'))}}">Attendance</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{url(route('PhotosView'))}}">Photos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{url(route('AcademicsView'))}}">Academics</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{url(route('AdminView'))}}">Admin</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </header>
    <!-- /Header -->
    <!-- Main Site -->
    <main id="site-main">
      <div class="container">
        <div class="box-nav d-flex justify-between m-2">
          <a href="@yield('route-link')" class="border-shadow bg-black">
            <span class="text-light">
              @yield('link-name') | Panel 
              <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                width="25" height="25"
                viewBox="0 0 172 172"
                style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ff0000"><path d="M73.61063,3.44c-3.44,0 -6.192,2.75738 -6.88,5.50937l-1.37063,11.00531c-4.128,0.688 -8.94669,2.74394 -13.07469,5.49594l-8.25063,-6.18125c-2.752,-2.064 -6.19737,-2.06669 -8.94937,0.68531l-15.81594,15.81594c-2.064,2.064 -2.76275,6.19737 -0.69875,8.94937l6.19469,8.25063c-2.752,4.128 -4.11994,8.944 -5.49594,13.76l-10.32,1.38406c-3.44,0.688 -5.50937,3.44 -5.50937,6.88v22.69594c0,3.44 2.75738,6.192 5.50937,6.88l10.32,1.38406c1.376,4.816 3.43194,8.944 5.49594,13.76l-5.49594,8.25062c-2.064,2.752 -2.06669,6.19738 0.68531,8.94938l15.81594,15.81594c2.064,2.064 6.19737,2.76275 8.94937,0.69875l8.25063,-6.19468c4.128,2.064 8.26137,4.11994 12.38937,5.49594l1.37063,10.32c0.688,3.44 3.44,5.50937 6.88,5.50937h22.70937c3.44,0 6.192,-2.75737 6.88,-5.50937l1.37063,-10.32c4.816,-1.376 8.94668,-3.43194 13.07468,-5.49594l8.94938,6.19468c2.752,2.064 6.87194,1.36525 8.93594,-0.69875l15.82937,-15.81594c2.064,-2.064 2.74931,-6.19738 0.68531,-8.94938l-6.19468,-8.93594c2.064,-4.128 4.13337,-8.26137 5.50937,-12.38937l11.00531,-2.06937c3.44,-0.688 5.50938,-3.44 5.50938,-6.88v-22.69594c0.688,-3.44 -2.07206,-6.192 -4.82406,-6.88l-11.00532,-2.06937c-1.376,-4.128 -2.74394,-8.24794 -5.49594,-12.37594l6.88,-8.94937c2.064,-2.752 1.36525,-6.19738 -0.69875,-8.94937l-15.81594,-15.81594c-2.064,-2.064 -6.19738,-2.74931 -8.94938,-0.68531l-8.93594,6.18125c-4.128,-2.064 -8.944,-4.11994 -13.76,-5.49594l-2.06937,-11.00531c-0.688,-3.44 -3.44,-5.50937 -6.88,-5.50937zM88.06937,35.08531c28.208,0 50.90125,22.704 50.90125,51.6c-2.064,11.696 -6.18125,22.70132 -13.06125,31.64532c-6.192,-7.568 -13.76268,-13.06125 -23.39468,-16.50125c-1.376,-0.688 -2.752,0 -3.44,0c-4.128,1.376 -8.26138,2.74125 -12.38938,2.74125c-4.128,0 -8.93594,-0.67725 -12.37594,-2.74125c-1.376,-0.688 -2.752,-0.688 -3.44,0c-9.632,3.44 -17.89069,8.93325 -23.39469,16.50125c-6.88,-8.944 -11.00531,-19.94932 -11.00531,-31.64532c0,-28.208 22.704,-51.6 51.6,-51.6zM86,52.28531c-11.696,0 -20.64,9.632 -20.64,20.64c0,11.696 8.944,20.64 20.64,20.64c11.008,0 20.64,-8.944 20.64,-20.64c0,-11.696 -8.944,-20.64 -20.64,-20.64z"></path></g></g></svg>
            </span>
          </a>
          @yield('admin')
        </div>
        @yield('main-content')
      </div>
    </main>

    <script>
        var myModal = document.getElementById("myModal");
        var myInput = document.getElementById("myInput");
  
        myModal.addEventListener("shown.bs.modal", function () {
          myInput.focus();
        });
      </script>
  <script
        src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
        integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
        crossorigin="anonymous"
      ></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    </body>
  </html>
  