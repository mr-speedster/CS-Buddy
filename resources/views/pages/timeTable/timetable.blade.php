@extends('layout.app',['name'=>$user['user_name']])
@section('main_section')
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Time Table </h3>
            </div>
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Monday</h4>
                    <p class="card-description"> <code>09:00AM to 04:00PM</code>
                    </p>
                   
                      <div class="table-responsive">
                      <table class="table table-dark">
                        <thead>
                          <tr>
                            <th> Hour </th>
                            <th> Subject </th>
                            <th> Teacher </th>
                            <th> Time </th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($tables as $table)
                            @if ($table->day_name == 'Monday')
                              <tr>
                                <td>{{$table->hour}}</td>
                                <td>{{$table->subject}}</td>
                                <td>{{$table->teacher}}</td>
                                <td> <code>{{$table->time}}</code> </td>
                              </tr>
                            @endif
                          @endforeach
                        </tbody>
                      </table>
                      </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Tuesday</h4>
                    <p class="card-description"> <code>09:00AM to 04:00PM</code>
                    </p>
                   
                      <div class="table-responsive">
                      <table class="table table-dark">
                        <thead>
                          <tr>
                            <th> Hour </th>
                            <th> Subject </th>
                            <th> Teacher </th>
                            <th> Time </th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($tables as $table)
                            @if ($table->day_name == 'Tuesday')
                              <tr>
                                <td>{{$table->hour}}</td>
                                <td>{{$table->subject}}</td>
                                <td>{{$table->teacher}}</td>
                                <td> <code>{{$table->time}}</code> </td>
                              </tr>
                            @endif
                          @endforeach
                        </tbody>
                      </table>
                      </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Wednesday</h4>
                    <p class="card-description"> <code>09:00AM to 04:00PM</code>
                    </p>
                   
                      <div class="table-responsive">
                      <table class="table table-dark">
                        <thead>
                          <tr>
                            <th> Hour </th>
                            <th> Subject </th>
                            <th> Teacher </th>
                            <th> Time </th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($tables as $table)
                            @if ($table->day_name == 'Wednesday')
                              <tr>
                                <td>{{$table->hour}}</td>
                                <td>{{$table->subject}}</td>
                                <td>{{$table->teacher}}</td>
                                <td> <code>{{$table->time}}</code> </td>
                              </tr>
                            @endif
                          @endforeach
                        </tbody>
                      </table>
                      </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Thursday</h4>
                    <p class="card-description"> <code>09:00AM to 04:00PM</code>
                    </p>
                   
                      <div class="table-responsive">
                      <table class="table table-dark">
                        <thead>
                          <tr>
                            <th> Hour </th>
                            <th> Subject </th>
                            <th> Teacher </th>
                            <th> Time </th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($tables as $table)
                            @if ($table->day_name == 'Thursday')
                              <tr>
                                <td>{{$table->hour}}</td>
                                <td>{{$table->subject}}</td>
                                <td>{{$table->teacher}}</td>
                                <td> <code>{{$table->time}}</code> </td>
                              </tr>
                            @endif
                          @endforeach
                        </tbody>
                      </table>
                      </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Friday</h4>
                    <p class="card-description"> <code>09:00AM to 04:00PM</code>
                    </p>
                   
                      <div class="table-responsive">
                      <table class="table table-dark">
                        <thead>
                          <tr>
                            <th> Hour </th>
                            <th> Subject </th>
                            <th> Teacher </th>
                            <th> Time </th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($tables as $table)
                            @if ($table->day_name == 'Friday')
                              <tr>
                                <td>{{$table->hour}}</td>
                                <td>{{$table->subject}}</td>
                                <td>{{$table->teacher}}</td>
                                <td> <code>{{$table->time}}</code> </td>
                              </tr>
                            @endif
                          @endforeach
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