@extends('backend.master')



@section('Content')

<form action="{{route('user.store')}}" method="POST"> 
@csrf

<div>
<label for="name"> Name:  </label>
<input type="text" class="form-control" id="name" name="user_name" placeholder="Enter Your Name"> 

</div>

<div>
    <label for="email"> Email:  </label>
    <input type="email" class="form-control" id="email" name="user_mail" placeholder="Enter Your Email"> 
 </div>
    
    
 <div>
    <label for="file"> file:  </label>
    <input type="file" class="form-control" id="file"  name="file"    placeholder="Enter Your file"> 
 </div>


 <div>
    <label for="text"> Number:  </label>
    <input type="text" class="form-control" id="text"  name="number"   placeholder="Enter Your Phone Number"> 
 </div>


<button type="submit" class="btn btn-primary"> Submit </button>
 
</form>

@endsection