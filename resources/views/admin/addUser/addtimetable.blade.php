@extends('admin.update.layout.app')
@section('form-content')   
<form class="forms-sample" method="POST" action="{{route('TimeTableAction')}}">
  @csrf
    <div class="form-group">
      <label for="exampleInputUsername1">Day Name</label>
      <input type="text" class="form-control" name="day_name" id="exampleInputUsername1" placeholder="Day Name">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Hour</label>
      <input type="text" class="form-control" name="hour" id="exampleInputEmail1" placeholder="Hour">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Subject</label>
      <input type="text" class="form-control" name="subject" id="exampleInputPassword1" placeholder="Subject">
    </div>
    <div class="form-group">
      <label for="exampleInputConfirmPassword1">Teacher</label>
      <input type="text" class="form-control" name="teacher" id="exampleInputConfirmPassword1" placeholder="Teacher">
    </div>
    <div class="form-group">
      <label for="exampleInputConfirmPassword1">Time Duration</label>
      <input type="text" class="form-control" name="time" id="exampleInputConfirmPassword1" placeholder="eg.9AM-10AM">
    </div>
    <button type="submit" class="btn btn-primary me-2">Submit</button>
    @if (\Session::has('success'))
    <script type="text/javascript">
      Swal.fire({
          icon: 'success',
          text: 'Successfully Added',
      }).then(function() {
          window.location = "{{route('TimeTableView')}}";
        });
    </script>
    @elseif ($errors->any())
        <script type="text/javascript">
          Swal.fire({
              icon: 'error',
              text: 'Something Went Wrong!',
          })
      </script>
    @endif
  </form>
@endsection