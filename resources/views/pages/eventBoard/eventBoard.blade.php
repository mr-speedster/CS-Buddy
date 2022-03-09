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
                                  <div class="preview-icon bg-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                    width="64" height="64"
                                    viewBox="0 0 172 172"
                                    style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#e74c3c"><path d="M48.26531,19.30612c-0.48616,0 -0.87755,0.39139 -0.87755,0.87755v21.06122c0,0.48616 0.39139,0.87755 0.87755,0.87755h10.53061c0.48616,0 0.87755,-0.39139 0.87755,-0.87755v-21.06122c0,-0.48616 -0.39139,-0.87755 -0.87755,-0.87755zM113.20408,19.30612c-0.48616,0 -0.87755,0.39139 -0.87755,0.87755v21.06122c0,0.48616 0.39139,0.87755 0.87755,0.87755h10.53061c0.48616,0 0.87755,-0.39139 0.87755,-0.87755v-21.06122c0,-0.48616 -0.39139,-0.87755 -0.87755,-0.87755zM29.13401,35.10204c-4.4863,0.09585 -8.07306,3.76029 -8.07278,8.24761v21.58913h129.87755v-21.58913c0.00028,-4.48732 -3.58649,-8.15176 -8.07278,-8.24761h-12.98844v5.61496c0,3.33469 -2.45851,6.67076 -5.79321,6.67076h-10.35236c-3.57431,-0.25259 -6.41817,-3.09645 -6.67076,-6.67076v-5.61496h-42.12245v5.61496c-0.25259,3.57431 -3.09645,6.41817 -6.67076,6.67076h-10.35236c-3.33469,0 -5.79321,-3.33606 -5.79321,-6.67076v-5.61496zM21.06122,70.20408v74.59184c0.09546,4.3899 3.68185,7.89862 8.07278,7.89796h113.73198c4.39094,0.00066 7.97733,-3.50806 8.07278,-7.89796v-74.59184zM84.11806,80.29592c0.98662,-0.04806 1.91711,0.4602 2.40984,1.31633l8.07278,16.32382l18.07549,2.80748c0.99428,0.10182 1.82781,0.79575 2.10818,1.7551c0.31835,0.93896 0.0412,1.97725 -0.70273,2.63265l-12.98844,12.63536l3.16056,18.07892c0.12228,0.94969 -0.28071,1.8909 -1.05238,2.45783c-0.46163,0.33056 -1.01261,0.51342 -1.58028,0.52447c-0.43959,0.04243 -0.87902,-0.08242 -1.23063,-0.34965l-16.14557,-8.42586l-16.14557,8.42586c-0.88072,0.53775 -2.0036,0.46791 -2.8109,-0.17483c-0.77166,-0.56693 -1.17466,-1.50813 -1.05238,-2.45783l3.16056,-18.07892l-12.98844,-12.63536c-0.74393,-0.65541 -1.02108,-1.69369 -0.70273,-2.63265c0.28037,-0.95935 1.1139,-1.65328 2.10818,-1.7551l18.07549,-2.80748l8.07278,-16.32382c0.44751,-0.77747 1.26012,-1.27356 2.15617,-1.31633zM84.2449,88.80748l-6.31768,12.81362c-0.38253,0.7487 -1.09965,1.26966 -1.92993,1.40202l-14.21907,2.10818l10.35579,9.82789c0.54194,0.62994 0.79662,1.45735 0.70273,2.283l-2.45783,14.21564l12.63879,-6.67076l1.2272,-0.34965l1.2272,0.34965l12.63879,6.67076l-2.45783,-14.21564c-0.0939,-0.82566 0.16079,-1.65306 0.70273,-2.283l10.35579,-9.82789l-14.21907,-2.10818c-0.83028,-0.13236 -1.5474,-0.65332 -1.92993,-1.40202z"></path></g></g></svg>
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