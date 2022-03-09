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
                                <td>Ajai</td>
                              </tr>
                              <tr>
                                <td>Roll.No</td>
                                <td>08</td>
                              </tr>
                              <tr>
                                <td>email</td>
                                <td>ajai@ajai.com</td>
                              </tr>
                              <tr>
                                <td>Semester</td>
                                <td>5</td>
                              </tr>
                              <tr>
                                <td>Touter</td>
                                <td>AGGIE VARGHESE</td>
                              </tr>
                              <tr>
                                <td>Addmission No</td>
                                <td>19148CSPRP</td>
                              </tr>
                              <tr>
                                <td>Address</td>
                                <td>Red House <br> kayamkulam P.O <br> Alappuzha <br> Kerala <br> 690502</td>
                              </tr>
                              <tr>
                                <td>Blood Group</td>
                                <td>O+</td>
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