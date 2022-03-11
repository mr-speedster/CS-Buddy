@extends('admin.Adminview.layout.app')
@section('main-content')
    <!-- Main Site -->
 

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
                <a href="{{url(route('EventUpdate',['id'=>$event->id]))}}"><i class="fas fa-pen text-info"></i></a><br />
                <a onclick="alert('Are You sure?')" href="{{url(route('EventDelete',['id'=>$event->id]))}}"><i class="far fa-trash-alt text-danger"></i></a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
 
    <!-- /Main Site -->
@endsection