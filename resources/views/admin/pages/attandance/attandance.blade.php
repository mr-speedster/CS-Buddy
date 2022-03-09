@extends('admin.layout.app')
@section('main_section')
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Attendance</h4>
                     
                    <form class="forms-sample" action="" method="POST">
                      <div class="form-group">
                        <label for="exampleInputUsername1">Subject</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Subject">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Teacher</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Teacher">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Date</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Date">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputConfirmPassword1">Time</label>
                        <input type="password" class="form-control" id="exampleInputConfirmPassword1" placeholder="Current Time">
                      </div>
                      <button type="submit" class="btn btn-primary me-2">Submit</button>
                      @if (\Session::has('success'))
                      <script type="text/javascript">
                        Swal.fire({
                            icon: 'success',
                            text: 'Successfully Added',
                        })
                      </script>
                    @elseif ($errors->any())
                        <script type="text/javascript">
                          Swal.fire({
                              icon: 'error',
                              text: 'Something Went Wrong!',
                          })
                      </script>
                    @endif
                    </form>
                  </div>
                </div>
              </div>
            
            </div>
          </div>
        </div>
          <!-- content-wrapper ends -->
@endsection