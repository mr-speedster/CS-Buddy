@extends('admin.Adminview.layout.app')
@section('main-content')
    <!-- Main Site -->
 

        <!-- User handling -->

        <table class="table col-sm-6 col-lg-3">
          <thead class="thead-dark">
            <tr>
              <th>ID</th>
              <th>Roll No</th>
              <th>CST 301</th>
              <th>CST 301</th>
              <th>CST 305</th>
              <th>CST 307</th>
              <th>CST 309</th>
              <th>MNC 301</th>
              <th>CST 331</th>
              <th>CST 333</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($attends as $attend)
            <tr>
              <td>{{$attend->id}}</td>
              <td>{{$attend->roll_no}}</td>
              <td>{{$attend->cst_301}} %</td>
              <td>{{$attend->cst_303}} %</td>
              <td>{{$attend->cst_305}} %</td>
              <td>{{$attend->cst_307}} %</td>
              <td>{{$attend->cst_309}} %</td>
              <td>{{$attend->mnc_301}} %</td>
              <td>{{$attend->cst_331}} %</td>
              <td>{{$attend->cst_333}} %</td>
              <td>
                <a href="#"><i class="fas fa-pen text-info"></i></a><br />
                <a onclick="alert('Are You sure?')" href="{{url(route('AttendanceDelete',['id'=>$attend->id]))}}"><i class="far fa-trash-alt text-danger"></i></a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
 
    <!-- /Main Site -->
@endsection