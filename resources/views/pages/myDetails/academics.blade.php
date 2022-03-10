@extends('layout.app',['name'=>$user['user_name']])
@section('main_section')
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-6 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Mark List</h4>
                      @if ($academics->first() == null)
                        <script type="text/javascript">
                          Swal.fire({
                              icon: 'error',
                              text: 'Not Updated',
                          }).then(function() {
                              window.location = "/myinfo";
                          });
                        </script>
                      @else
                        <p class="card-description">{{$academics->first()->exam_name}}<code>12/12/2021</code>
                        </p>
                        <div class="table-responsive">
                          <table class="table">
                            <thead>
                              <tr>
                                <th>No.</th>
                                <th>Subject</th>
                                <th>Mark</th>
                                <th>Credit</th>
                              </tr>
                            </thead>
                            <tbody>
                                <tr>
                                  <td>{{$academics->first()->no}}</td>
                                  <td>{{$academics->first()->subject}}</td>
                                  <td>{{$academics->first()->mark}}</td>
                                  <td>{{$academics->first()->credit}}</td>
                                </tr>
                            </tbody>
                          </table>
                        </div>
                      @endif
                      </div>
                    </div>
                  </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
@endsection