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
                        <label for="exampleInputUsername1">Exam Name</label>
                        <input type="text" class="form-control" name="exam_name" id="exampleInputUsername1" placeholder="eg: Series 1">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Date</label>
                        <input type="text" class="form-control" name="date" id="exampleInputEmail1" placeholder="Teacher">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputConfirmPassword1">Order Number</label>
                        <input type="number" class="form-control" name="no" id="exampleInputConfirmPassword1" placeholder="Current Time">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Subject</label>
                        <input type="text" class="form-control" name="subject" id="exampleInputPassword1" placeholder="Date">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputConfirmPassword1">Mark</label>
                        <input type="number" class="form-control" name="mark" id="exampleInputConfirmPassword1" placeholder="Current Time">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputConfirmPassword1">credit</label>
                        <input type="number" class="form-control" name="credit" id="exampleInputConfirmPassword1" placeholder="Current Time">
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