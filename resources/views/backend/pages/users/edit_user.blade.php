@extends('backend.master')

@section('Content')
<form action="{{route('user.update',$user->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="form-group">
        <label for="user_name"> User Name </label>
        <input type="text" class="form-control" id="user_name" name="user_name" value="{{$user->name}}"   placeholder="Enter Your Name">
      </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="user_email"  placeholder="Enter email">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1"   name="password" placeholder="Password">
    </div>
    <div class="form-group">
        <label for="contact"> Contact </label>
        <input type="text" class="form-control" id="contact"  name="contact" value="{{$user->contact}}"  placeholder="Enter Your Phone Number">
    </div>

    <div class="form-group">
        <label for="contact"> Image </label>
        <input type="file" class="form-control" id="contact"  name="image"   placeholder="Enter Your Phone Number">
    </div>


    <button type="submit" class="btn btn-primary"> Update </button>
  </form>

@endsection