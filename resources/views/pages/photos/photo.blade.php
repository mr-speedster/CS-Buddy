@extends('layout.app',['name'=>$user['user_name']])
@section('main_section')
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
                <div class="col-md-6 col-xl-4 grid-margin stretch-card">
                  <div class="card" style="margin: 5px">
                    @foreach ($photos as $photo)
                      <div class="card-body">
                        <h4 class="card-title">{{$photo->celibration_name}}</h4>
                          <div class="item">
                            <img src="{{$photo->cdn_link}}" alt="">
                          </div>
                        <div class="d-flex py-4">
                          <div class="preview-list w-100">
                            <div class="preview-item p-0">
                              <div class="preview-item-content d-flex flex-grow">
                                <div class="flex-grow">
                                  <div class="d-flex d-md-block d-xl-flex justify-content-between">
                                    <h6 class="preview-subject">{{$photo->club_name}}</h6>
                                    <p class="text-muted text-small">{{$photo->date}}</p>
                                  </div>
                                  <p class="text-muted">{{$photo->msg}}</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      @endforeach
                    </div>
                </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
@endsection