@extends('layout.app',['name'=>$user['user_name']])
@section('main_section')
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-md-4 grid-margin stretch-card">
                <div class="card" style="height: 400px">
                  <div class="card-body">
                    <h4 class="card-title">Latest Event</h4>
                    <div><h1>{{$first->event_logo}}</h1></div>
                    <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
                      <div class="text-md-center text-xl-left">
                        <h6 class="mb-1">{{$first->event_name}}</h6>
                        <p class="text-muted mb-0">{{$first->date}}</p>
                        <p class="text-muted mb-0">{{$first->time}}</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex flex-row justify-content-between">
                      <h4 class="card-title mb-1">Events</h4>
                      <p class="text-muted mb-1">Lets Participate</p>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <div class="preview-list">
                            @foreach ($events as $event)
                              @if ($event == $first)
                                @continue
                              @else
                              <div class="preview-item border-bottom">
                                <div class="preview-thumbnail">
                                  <div class="preview-icon bg-success">
                                    <i class="mdi mdi-cloud-download"></i>
                                  </div>
                                </div>
                                <div class="preview-item-content d-sm-flex flex-grow">
                                  <div class="flex-grow">
                                    <h6 class="preview-subject">{{$event->event_name}}</h6>
                                  </div>
                                  <div class="me-auto text-sm-right pt-2 pt-sm-0">
                                    <p class="text-muted">updated:{{$event->date}}</p>
                                  </div>
                                </div>
                              </div>
                              @endif
                            @endforeach    
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
@endsection