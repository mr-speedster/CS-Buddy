@extends('admin.layout.app')
@section('main_section')
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Photos</h4>
                     
                    <form class="forms-sample">
                      <div class="form-group">
                        <label for="exampleInputUsername1">Photo</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" placeholder="CDN link">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Celibration Name</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Celibration Name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Club Name</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Club Name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputConfirmPassword1">Date</label>
                        <input type="password" class="form-control" id="exampleInputConfirmPassword1" placeholder="Date">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputConfirmPassword1">Description</label>
                        <input type="password" class="form-control" id="exampleInputConfirmPassword1" placeholder="Description">
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