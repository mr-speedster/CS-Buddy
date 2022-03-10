@extends('admin.view.layout.app')
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