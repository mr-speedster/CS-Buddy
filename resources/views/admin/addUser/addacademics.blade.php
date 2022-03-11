@extends('admin.update.layout.app')
@section('form-content')
<form class="forms-sample" action="{{route('AcademicsAction')}}" method="POST">
  @csrf
  <div class="form-group">
    <label for="exampleInputUsername1">Exam Name</label>
    <input type="text" class="form-control" name="exam_name" id="exampleInputUsername1" placeholder="eg: Series 1">
  </div>
  <div class="form-group">
    <label for="exampleInputConfirmPassword1">Roll No</label>
    <input type="text" class="form-control" name="roll_no" id="exampleInputConfirmPassword1" placeholder="Roll No">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Date</label>
    <input type="text" class="form-control" name="date" id="exampleInputEmail1" placeholder="Datee">
  </div>
  <div class="form-group">
    <label for="exampleInputConfirmPassword1">Order Number</label>
    <input type="text" class="form-control" name="no" id="exampleInputConfirmPassword1" placeholder="Order no">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Subject</label>
    <input type="text" class="form-control" name="subject" id="exampleInputPassword1" placeholder="Subject">
  </div>
  <div class="form-group">
    <label for="exampleInputConfirmPassword1">Mark</label>
    <input type="text" class="form-control" name="mark" id="exampleInputConfirmPassword1" placeholder="Mark">
  </div>
  <div class="form-group">
    <label for="exampleInputConfirmPassword1">Credit</label>
    <input type="text" class="form-control" name="credit" id="exampleInputConfirmPassword1" placeholder="Credit">
  </div>
  <button type="submit" class="btn btn-primary me-2">Submit</button>
  @if (\Session::has('success'))
  <script type="text/javascript">
    Swal.fire({
        icon: 'success',
        text: 'Successfully Added',
    }).then(function() {
        window.location = "{{route('AcademicsView')}}";
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