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
                    <a class="nav-link active" aria-current="page" href="#">Users</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Event</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Announcement</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Time Table</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Attendance</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Photos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Academics</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Admin</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </header>
    <!-- /Header -->

    @yield('main-content')
    

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
  