@extends('admin.update.layout.app')
@section('form-content')                
                    <form class="forms-sample" method="POST" action="{{route('AnnouncementUpdateAction',['id'=>$announce->id])}}">
                      @csrf
                      <div class="form-group">
                        <label for="exampleInputUsername1">Announcement Message</label>
                        <input type="text" value="{{$announce->msg}}" class="form-control" id="exampleInputUsername1" name="message" placeholder="Message">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Name of Updator</label>
                        <input type="text" class="form-control" value="{{$announce->updator_name}}" id="exampleInputEmail1" name="updator_name" placeholder="updator name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Date</label>
                        <input type="text" class="form-control" value="{{$announce->date}}" id="exampleInputPassword1" name="date" placeholder="Date">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputConfirmPassword1">Time</label>
                        <input type="text" class="form-control" value="{{$announce->time}}" id="exampleInputConfirmPassword1" name="time" placeholder="Time">
                      </div>
                      <button type="submit" class="btn btn-primary me-2">Submit</button>
                    </form>
@endsection