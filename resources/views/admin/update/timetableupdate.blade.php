@extends('admin.update.layout.app')
@section('form-content')   
                    <form class="forms-sample" method="POST" action="{{route('TimeTableUpdateAction',['id'=>$table->id])}}">
                    @csrf
                      <div class="form-group">
                        <label for="exampleInputUsername1">Day Name</label>
                        <input type="text" value="{{$table->day_name}}" class="form-control" name="day_name" id="exampleInputUsername1" placeholder="Day Name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Hour</label>
                        <input type="text" class="form-control"  value="{{$table->hour}}" name="hour" id="exampleInputEmail1" placeholder="Hour">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Subject</label>
                        <input type="text" class="form-control" value="{{$table->subject}}"  name="subject" id="exampleInputPassword1" placeholder="Subject">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputConfirmPassword1">Teacher</label>
                        <input type="text" class="form-control"  value="{{$table->teacher}}" name="teacher" id="exampleInputConfirmPassword1" placeholder="Teacher">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputConfirmPassword1">Time Duration</label>
                        <input type="text" class="form-control"  value="{{$table->time}}" name="time" id="exampleInputConfirmPassword1" placeholder="eg.9AM-10AM">
                      </div>
                      <button type="submit" class="btn btn-primary me-2">Submit</button>
                    </form>
@endsection