@extends('admin.layout.app')
@section('main_section')
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Event Details Form</h4>
                    <form class="forms-sample" method="POST" action="{{route('EventAction')}}">
                      @csrf
                      <div class="form-group">
                        <label for="exampleInputUsername1">Event Name</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" name="event_name" placeholder="Event Name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Event Logo</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="logo_cdn" placeholder="logo cdn link">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Date</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="date" placeholder="Date">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputConfirmPassword1">Time</label>
                        <input type="text" class="form-control" id="exampleInputConfirmPassword1" name="time" placeholder="Time">
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