@extends('admin.Adminview.layout.app')
@section('main-content')
    <!-- Main Site -->
        <!-- User handling -->
        <a href="#">Add+</a>
        <table class="table col-sm-6 col-lg-3">
          <thead class="thead-dark">
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Roll No</th>
              <th>Email</th>
              <th>Semester</th>
              <th>Touter</th>
              <th>Admission</th>
              <th>Address</th>
              <th>Blood</th>
              <th>Gender</th>
              <th>Password</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($users as $user)
            <tr>
              <td>{{$user->id}}</td>
              <td>{{$user->name}}</td>
              <td>{{$user->roll_no}}</td>
              <td>{{$user->email}}</td>
              <td>{{$user->sem}}</td>
              <td>{{$user->touter}}</td>
              <td>{{$user->addmisson_no}}</td>
              <td>{{$user->address}}</td>
              <td>{{$user->blood}}</td>
              <td>{{$user->gender}}</td>
              <td>{{$user->password}}</td>
              <td>
                <a href="{{url(route('UserUpdate',['id'=>$user->id]))}}"><i class="fas fa-pen text-info"></i></a><br />
                <a onclick="alert('Are You sure?')" href="{{url(route('UserDelete',['id'=>$user->id]))}}"><i class="far fa-trash-alt text-danger"></i></a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
    <!-- /Main Site -->
@endsection