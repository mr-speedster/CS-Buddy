@extends('admin.update.layout.app')
@section('form-content')
                        <form class="forms-sample" method="POST" action="{{route('RegisterAction')}}">
                          @csrf
                          <div class="form-group">
                            <label for="exampleInputName1">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputName1">Roll No</label>
                            <input type="text" class="form-control" id="roll_no" name="roll_no" placeholder="Roll No">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputName1">Semester</label>
                            <input type="text" class="form-control" id="sem" name="sem" placeholder="Semester">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputName1">Touter</label>
                            <input type="text" class="form-control" id="touter" name="touter" placeholder="Touter">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputName1">Admission No</label>
                            <input type="text" class="form-control" id="addmission_no" name="admission_no" placeholder="Addmission No">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail3">Email address</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputName1">Address</label>
                            <input type="text" class="form-control" id="address" name="address" placeholder="Address">
                          </div>
                          <div class="form-group">
                            <label for="exampleSelectGender">Gender</label>
                            <select class="form-control" id="gender" name="gender">
                              <option>Male</option>
                              <option>Female</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword4">Blood Group</label>
                            <input type="text" class="form-control" id="blood_group" name="blood_group" placeholder="blood group">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword4">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputName1">conform Password</label>
                            <input type="password" class="form-control" id="conform_pass" name="conform_pass" placeholder="conform">
                          </div>
                          <button type="submit" class="btn btn-primary me-2">Submit</button>
                          <a class="text-danger" href="{{route('LogIn')}}">Already have an account?</a>
                        </form>
@endsection