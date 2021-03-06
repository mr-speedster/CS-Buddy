@extends('admin.update.layout.app')
@section('form-content')                  
                    <form class="forms-sample" method="POST" action="{{route('PhotosUpdateAction',['id'=>$photo->id])}}">
                      @csrf
                      <div class="form-group">
                        <label for="exampleInputUsername1">Photo</label>
                        <input type="text" class="form-control" value="{{$photo->cdn_link}}" name="cdn_link" id="exampleInputUsername1" placeholder="CDN link">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Celibration Name</label>
                        <input type="text" class="form-control" value="{{$photo->celibration_name}}"  name="celibration_name" id="exampleInputEmail1" placeholder="Celibration Name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Club Name</label>
                        <input type="text" class="form-control" name="club_name" value="{{$photo->club_name}}"  id="exampleInputPassword1" placeholder="Club Name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputConfirmPassword1">Date</label>
                        <input type="text" class="form-control" name="date" value="{{$photo->date}}"  id="exampleInputConfirmPassword1" placeholder="Date">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputConfirmPassword1">Description</label>
                        <input type="text" class="form-control" name="msg"  value="{{$photo->msg}}"  id="exampleInputConfirmPassword1" placeholder="Description">
                      </div>
                      <button type="submit" class="btn btn-primary me-2">Submit</button>
                    </form>
@endsection