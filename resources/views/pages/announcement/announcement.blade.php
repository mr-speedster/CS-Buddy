@extends('layout.app',['name'=>$user['user_name']])
@section('main_section')
        <div class="main-panel">
          <div class="content-wrapper">
            @foreach ($announces as $announce)
              <div class="row">
                <div class="col-md-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div><h2>{{$announce->msg}}</h2></div>
                      <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
                        <div class="text-md-center text-xl-left">
                          <h6 class="mb-1">{{$announce->updator_name}}</h6>
                          <p class="text-muted mb-0">Date: 07 Jan 2019</p>
                          <p class="text-muted mb-0">Time: 10:30 AM</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
          <!-- content-wrapper ends -->
@endsection