@extends('admin.update.layout.app')
@section('form-content')
<form class="forms-sample" method="POST" action="{{route('AdminUpdateAction',['id'=>$admin->id])}}">
  @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" value="{{$admin->email}}" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="text" value="{{$admin->password}}" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
  </div>
  <button type="submit" class="btn btn-primary me-2">Submit</button>
</form>
@endsection