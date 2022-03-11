@extends('admin.update.layout.app')
@section('form-content')       
                    <form class="forms-sample" action="{{route('AttendanceAction')}}" method="POST">
                      @csrf
                      <div class="form-group">
                        <label for="exampleInputUsername1">Roll No</label>
                        <input type="text" class="form-control" name="roll_no" id="exampleInputUsername1" placeholder="Roll No">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputUsername1">CST 301</label>
                        <input type="text" class="form-control" name="code1" id="exampleInputUsername1" placeholder="enter the percent">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">CST 303</label>
                        <input type="text" class="form-control" name="code2" id="exampleInputEmail1" placeholder="enter the percent">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">CST 305</label>
                        <input type="text" class="form-control" name="code3" id="exampleInputEmail1" placeholder="enter the percent">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">CST 307</label>
                        <input type="text" class="form-control" name="code4"  id="exampleInputPassword1" placeholder="enter the percent">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputConfirmPassword1">CST 309</label>
                        <input type="text" class="form-control" name="code5" id="exampleInputConfirmPassword1" placeholder="enter the percent">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputConfirmPassword1">MNC 301</label>
                        <input type="text" class="form-control" name="code6" id="exampleInputConfirmPassword1" placeholder="enter the percent">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputConfirmPassword1">CST 331</label>
                        <input type="text" class="form-control" name="code7" id="exampleInputConfirmPassword1" placeholder="enter the percent">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputConfirmPassword1">CST 333</label>
                        <input type="text" class="form-control" name="code8" id="exampleInputConfirmPassword1" placeholder="enter the percent">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputConfirmPassword1">Date</label>
                        <input type="text" class="form-control" name="date" id="exampleInputConfirmPassword1" placeholder="Date">
                      </div>
                      <button type="submit" class="btn btn-primary me-2">Submit</button>
                    </form>
@endsection