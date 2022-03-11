@extends('admin.update.layout.app')
@section('form-content')
<form class="forms-sample" action="{{route('AcademicsUpdateAction',['id'=>$academic->id])}}" method="POST">
  @csrf
  <div class="form-group">
    <label for="exampleInputUsername1">Exam Name</label>
    <input type="text" value="{{$academic->exam_name}}" class="form-control" name="exam_name" id="exampleInputUsername1" placeholder="eg: Series 1">
  </div>
  <div class="form-group">
    <label for="exampleInputConfirmPassword1">Roll No</label>
    <input type="text" value="{{$academic->roll_no}}" class="form-control" name="roll_no" id="exampleInputConfirmPassword1" placeholder="Roll No">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Date</label>
    <input type="text" value="{{$academic->date}}" class="form-control" name="date" id="exampleInputEmail1" placeholder="Datee">
  </div>
  <div class="form-group">
    <label for="exampleInputConfirmPassword1">Order Number</label>
    <input type="text" value="{{$academic->no}}" class="form-control" name="no" id="exampleInputConfirmPassword1" placeholder="Order no">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Subject</label>
    <input type="text" class="form-control" value="{{$academic->subject}}" name="subject" id="exampleInputPassword1" placeholder="Subject">
  </div>
  <div class="form-group">
    <label for="exampleInputConfirmPassword1">Mark</label>
    <input type="text" class="form-control" value="{{$academic->mark}}" name="mark" id="exampleInputConfirmPassword1" placeholder="Mark">
  </div>
  <div class="form-group">
    <label for="exampleInputConfirmPassword1">Credit</label>
    <input type="text" class="form-control" value="{{$academic->credit}}" name="credit" id="exampleInputConfirmPassword1" placeholder="Credit">
  </div>
  <button type="submit" class="btn btn-primary me-2">Submit</button>
</form>
@endsection