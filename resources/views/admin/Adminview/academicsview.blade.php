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

        <!-- Academic handling -->

        <table class="table col-sm-6 col-lg-3">
          <thead class="thead-dark">
            <tr>
              <th>Exam Name</th>
              <th>Date</th>
              <th>Order</th>
              <th>Subject</th>
              <th>Mark</th>
              <th>Credit</th>
              <th>Roll No</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($academics as $academic)
            <tr>
              <td>{{$academic->exam_name}}</td>
              <td>{{$academic->date}}</td>
              <td>{{$academic->no}}</td>
              <td>{{$academic->subject}}</td>
              <td>{{$academic->mark}}</td>
              <td>{{$academic->credit}}</td>
              <td>{{$academic->roll_no}}</td>              
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