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
              <th>Event Name</th>
              <th>Event Logo</th>
              <th>Date</th>
              <th>Time</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($events as $event)
            <tr>
              <td>{{$event->id}}</td>
              <td>{{$event->event_name}}</td>
              <td>{{$event->event_logo}}</td>
              <td>{{$event->date}}</td>
              <td>{{$event->time}}</td>
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