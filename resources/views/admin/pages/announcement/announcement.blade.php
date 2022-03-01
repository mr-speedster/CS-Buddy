@extends('admin.layout.app')
@section('main_section')
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Announcements Form</h4>                
                    <form class="forms-sample">
                      <div class="form-group">
                        <label for="exampleInputUsername1">Announcement Message</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Message">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Name of Updator</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="updator name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Date</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Date">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputConfirmPassword1">Time</label>
                        <input type="password" class="form-control" id="exampleInputConfirmPassword1" placeholder="Time">
                      </div>
                      <button type="submit" class="btn btn-primary me-2">Submit</button>
                      <button class="btn btn-dark">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
            
            </div>
          </div>
        </div>
          <!-- content-wrapper ends -->
@endsection