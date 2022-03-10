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
              <th>Image</th>
              <th>Celibration Name</th>
              <th>Club Name</th>
              <th>Date</th>
              <th>Message</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($photos as $photo)
            <tr>
              <td>{{$photo->id}}</td>
              <td>
                <img
                class="table-img"
                  src="{{$photo->cdn_link}}"
                />
              </td>
              <td>{{$photo->celibration_name}}</td>
              <td>{{$photo->club_name}}</td>
              <td>{{$photo->date}}</td>
              <td>{{$photo->msg}}</td>
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