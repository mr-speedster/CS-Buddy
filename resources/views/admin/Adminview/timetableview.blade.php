@extends('admin.Adminview.layout.app')
@section('main-content')
    <!-- Main Site -->
    <a href="{{url(route('AdminTimeTable'))}}">Add+</a>

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
                <a href="{{url(route('TimeTableUpdate',['id'=>$table->id]))}}"><i class="fas fa-pen text-info"></i></a><br />
                <a onclick="alert('Are You sure?')" href="{{url(route('TimeTableDelete',['id'=>$table->id]))}}"><i class="far fa-trash-alt text-danger"></i></a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
 
    <!-- /Main Site -->
@endsection