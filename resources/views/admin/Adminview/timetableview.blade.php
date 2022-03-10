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
              <th>Day Name</th>
              <th>Hour</th>
              <th>Subject</th>
              <th>Teacher</th>
              <th>Time</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($tables as $table)
            <tr>
              <td>{{$table->id}}</td>
              <td>{{$table->day_name}}</td>
              <td>{{$table->hour}}</td>
              <td>{{$table->subject}}</td>
              <td>{{$table->teacher}}</td>
              <td>{{$table->time}}</td>
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