@extends('admin.Adminview.layout.app')
@section('main-content')
    <!-- Main Site -->
    <main id="site-main">
      <div class="container">
        <div class="box-nav d-flex justify-between m-2">
          <a href="#" class="border-shadow">
            <span class="text-dark">
              ADMIN | Panel <i class="fas fa-user"></i>
            </span>
          </a>
        </div>

        <!-- User handling -->

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
              <td>{{$user->admission_no}}</td>
              <td>{{$user->address}}</td>
              <td>{{$user->blood}}</td>
              <td>{{$user->gender}}</td>
              <td>{{$user->password}}</td>
              <td>
                <a href="#"><i class="fas fa-pen text-dark"></i></a><br />
                <a href="#"><i class="far fa-trash-alt text-danger"></i></a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </main>
    <!-- /Main Site -->
@endsection