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
              <th>Show</th>
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
              <td>
                <a
                  class="btn"
                  data-bs-toggle="modal"
                  data-bs-target="#exampleModal"
                  href=""
                  type="button"
                  >View</a
                >
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        <!-- Modal -->
        <div
          class="modal fade"
          id="exampleModal"
          tabindex="-1"
          aria-labelledby="exampleModalLabel"
          aria-hidden="true"
            >
            <div class="modal-dialog">
              <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Details</h5>
                <button
                  type="button"
                  class="btn-close"
                  data-bs-dismiss="modal"
                  aria-label="Close"
                ></button>
              </div>
              <div class="modal-body">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">
                    image
                  </li>
                  <li class="list-group-item">Citizen</li>
                  <li class="list-group-item">location</li>
                  <li class="list-group-item">City</li>
                  <li class="list-group-item">
                    <p>
                      Lorem Ipsum is simply dummy text of the printing and
                      typesetting industry. Lorem Ipsum has been the industry's
                    </p>
                  </li>
                </ul>
              </div>
              <div class="modal-footer">
                <button
                  type="button"
                  class="btn btn-danger"
                  data-bs-dismiss="modal"
                >
                  Close
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <!-- /Main Site -->
@endsection