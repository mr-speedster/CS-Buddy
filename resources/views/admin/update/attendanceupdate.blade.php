@extends('admin.update.layout.app')
@section('form-content')       
                    <form class="forms-sample" action="{{route('AttendanceUpdateAction',['id'=>$attend->id])}}" method="POST">
                      @csrf
                      <div class="form-group">
                        <label for="exampleInputUsername1">Roll No</label>
                        <input type="text" value="{{$attend->roll_no}}" class="form-control" name="roll_no" id="exampleInputUsername1" placeholder="Roll No">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputUsername1">CST 301</label>
                        <input type="text" class="form-control" value="{{$attend->cst_301}}" name="code1" id="exampleInputUsername1" placeholder="enter the percent">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">CST 303</label>
                        <input type="text" class="form-control" value="{{$attend->cst_303}}" name="code2" id="exampleInputEmail1" placeholder="enter the percent">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">CST 305</label>
                        <input type="text" class="form-control" value="{{$attend->cst_305}}" name="code3" id="exampleInputEmail1" placeholder="enter the percent">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">CST 307</label>
                        <input type="text" class="form-control" value="{{$attend->cst_307}}" name="code4"  id="exampleInputPassword1" placeholder="enter the percent">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputConfirmPassword1">CST 309</label>
                        <input type="text" class="form-control" value="{{$attend->cst_309}}" name="code5" id="exampleInputConfirmPassword1" placeholder="enter the percent">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputConfirmPassword1">MNC 301</label>
                        <input type="text" class="form-control"  value="{{$attend->mnc_301}}" name="code6" id="exampleInputConfirmPassword1" placeholder="enter the percent">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputConfirmPassword1">CST 331</label>
                        <input type="text" class="form-control"  value="{{$attend->cst_331}}" name="code7" id="exampleInputConfirmPassword1" placeholder="enter the percent">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputConfirmPassword1">CST 333</label>
                        <input type="text" class="form-control" value="{{$attend->cst_333}}"  name="code8" id="exampleInputConfirmPassword1" placeholder="enter the percent">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputConfirmPassword1">Date</label>
                        <input type="text" class="form-control"  value="{{$attend->date}}" name="date" id="exampleInputConfirmPassword1" placeholder="Date">
                      </div>
                      <button type="submit" class="btn btn-primary me-2">Submit</button>
                    </form>
@endsection