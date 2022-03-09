@extends('layout.app',['name'=>$user['user_name']])
@section('main_section')
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-6 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Mark List</h4>
                        <p class="card-description">Fisrt Series<code>12/12/2021</code>
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
                                <td>1</td>
                                <td>FLAT</td>
                                <td>25</td>
                                <td>4</td>
                              </tr>
                              <tr>
                                <td>2</td>
                                <td>CN</td>
                                <td>25</td>
                                <td>4</td>
                              </tr>
                              <tr>
                                <td>3</td>
                                <td>SS</td>
                                <td>25</td>
                                <td>4</td>
                              </tr>
                              <tr>
                                <td>4</td>
                                <td>MSS</td>
                                <td>25</td>
                                <td>4</td>
                              </tr>
                              <tr>
                                <td>5</td>
                                <td>MCMP</td>
                                <td>25</td>
                                <td>4</td>
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