@extends('admin.Adminview.layout.app')
@section('link-name','ADMIN')
@section('admin')
<a href="{{url(route('AddAdmin'))}}" class="border-shadow bg-black">
  <span class="text-light">
    ADD+ <i class="fas fa-user" style="color: red"></i>
  </span>
</a>
@endsection()
@section('main-content')
    <!-- Main Site -->
  <!-- admin handling -->
        <table class="table col-sm-6 col-lg-3">
          <thead class="thead-dark">
            <tr>
              <th>ID</th>
              <th>Email</th>
              <th>Password</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($admins as $admin)
            <tr>
              <td>{{$admin->id}}</td>
              <td>{{$admin->email}}</td>
              <td>{{$admin->password}}</td>
              <td>
                <a href="{{url(route('AdminUpdate',['id'=>$admin->id]))}}"><i class="fas fa-pen text-info"></i></a><br />
                <a onclick="alert('Are You sure?')" href="{{url(route('AdminDelete',['id'=>$admin->id]))}}"><i class="far fa-trash-alt text-danger"></i></a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>

    <!-- /Main Site -->
@endsection