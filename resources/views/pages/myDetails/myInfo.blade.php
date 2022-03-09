@extends('layout.app',['name'=>$user['user_name']])
@section('main_section')
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-6 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">My Info</h4>
                        </p>
                        <div class="table-responsive">
                          <table class="table">
                            <tbody>
                              <tr>
                                <td>Name</td>
                                <td>{{$user['user_name']}}</td>
                              </tr>
                              <tr>
                                <td>Roll.No</td>
                                <td>{{$user['roll_no']}}</td>
                              </tr>
                              <tr>
                                <td>email</td>
                                <td>{{$user['email']}}</td>
                              </tr>
                              <tr>
                                <td>Semester</td>
                                <td>{{$user['sem']}}</td>
                              </tr>
                              <tr>
                                <td>Touter</td>
                                <td>{{$user['touter']}}</td>
                              </tr>
                              <tr>
                                <td>Admission No</td>
                                <td>{{$user['addmisson_no']}}</td>
                              </tr>
                              <tr>
                                <td>Address</td>
                                <td><?=str_replace(',', '<br/>', $user['address'])?></td>
                              </tr>
                              <tr>
                                <td>Blood Group</td>
                                <td>{{$user['blood']}}</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
@endsection