@extends('admin.update.layout.app')
@section('form-content')
                        <form class="forms-sample" method="POST" action="{{route('UserUpdateAction',['id'=>$user->id])}}">
                          @csrf
                          <div class="form-group">
                            <label for="exampleInputName1">Name</label>
                            <input type="text" value="{{$user->user_name}}" class="form-control" id="name" name="name" placeholder="Name">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputName1">Roll No</label>
                            <input type="text" class="form-control" value="{{$user->roll_no}}"  id="roll_no" name="roll_no" placeholder="Roll No">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputName1">Semester</label>
                            <input type="text" class="form-control" value="{{$user->sem}}"  id="sem" name="sem" placeholder="Semester">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputName1">Touter</label>
                            <input type="text" class="form-control" value="{{$user->touter}}"  id="touter" name="touter" placeholder="Touter">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputName1">Admission No</label>
                            <input type="text" class="form-control" value="{{$user->addmisson_no}}"  id="addmission_no" name="admission_no" placeholder="Addmission No">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail3">Email address</label>
                            <input type="email" class="form-control" value="{{$user->email}}"  id="email" name="email" placeholder="Email">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputName1">Address</label>
                            <input type="text" class="form-control"  value="{{$user->address}}" id="address" name="address" placeholder="Address">
                          </div>
                          <div class="form-group">
                            <label for="exampleSelectGender">Gender</label>
                            <select class="form-control" id="gender" value="{{$user->gender}}"  name="gender">
                              <option>Male</option>
                              <option>Female</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword4">Blood Group</label>
                            <input type="text" class="form-control" id="blood_group" value="{{$user->blood}}"  name="blood_group" placeholder="blood group">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword4">Password</label>
                            <input type="text" class="form-control" id="password" value="{{$user->password}}"  name="password" placeholder="Password">
                          </div>
                          <button type="submit" class="btn btn-primary me-2">Submit</button>
                        </form>
@endsection