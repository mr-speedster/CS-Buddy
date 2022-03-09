<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CS BUDDY</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/loader.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  </head>
  <body>
    <!--loader-->
    <div id="preloader"></div>
    <!--loader-->
    <!-- partial -->
        <div class="main-panel" style="display: none" id="main">
          <a href="{{route('AdminLogin')}}" style="margin-left: auto;font-weight: 700" class="text-danger me-2">Are you a Admin ?</a>
          <div class="content-wrapper">
            <div class="row">
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <div class="card m-4">
                            <img src="assets/images/cslogo.png" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <h3 class="card-title text-danger">WELCOME CS BUDDY</h3>
                        <form class="forms-sample" method="POST" action="{{route('LogInAction')}}">
                          @csrf
                          <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="email" placeholder="Email" name="email" required/>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input  type="password" class="form-control" id="Password" placeholder="Password" name="password" required/>
                          </div>
                          <button type="submit" class="btn btn-primary me-2" onclick="FieldCheck()">login</button>
                          <a class="text-danger" href="{{route('Register')}}">Create New Account</a>
                          @if ($errors->any())
                            <script type="text/javascript">
                              Swal.fire({
                                  icon: 'error',
                                  text: 'Check your email or pasword',
                                })
                            </script>
                          @endif
                        </form>
                      </div>
                    </div>
                  </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
    <script type="text/javascript">
      var loader = document.getElementById("preloader")
      var body = document.getElementById("main")
      window.addEventListener("load",function(){
        loader.style.display = "none";
        body.style.display = ""
      })
    </script>
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>