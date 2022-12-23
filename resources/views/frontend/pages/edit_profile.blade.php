@extends('frontend.master')

@section('Content')

<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">    
       
        <form action="{{route('user.profile.update',auth()->user()->id)}}" method="POST" enctype="multipart/form-data"> 
           @method('put')
          @csrf
            
            <div class="form-group">
                <label for="user_name"> User Name </label>
                <input   readonly type="text" class="form-control" id="user_name" name="user_name" value="{{auth()->user()->name}}"   placeholder="Enter Your Name">
              </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input readonly value="{{auth()->user()->email}}" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="user_email"  placeholder="Enter email">
            </div>
            {{-- <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input required  type="password" class="form-control" id="exampleInputPassword1"   name="password" placeholder="Password">
            </div> --}}
            <div class="form-group">
                <label for="contact"> Contact </label>
                <input required value="{{auth()->user()->contact}}" type="number" class="form-control" id="contact"  name="contact"   placeholder="Enter Your Phone Number">
            </div>
            <div class="form-group">
                <label for="contact"> About </label>
                <input value="{{auth()->user()->about}}" type="text" class="form-control" id="contact"  name="about"   >
            </div>
        
            <div class="form-group">
                <label for="contact"> Image </label>
                <input type="file" class="form-control" id="contact"  name="image"   >
            </div>
        
        
        <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
    <div class="col-md-3"></div>
    
</div>




@endsection