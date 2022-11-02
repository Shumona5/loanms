@extends('backend.master')

@section('Content')


<form action="{{route('bank.store')}}" method="POST"> 
    @csrf
    
    <div>
    <label for="name"> Bank's Name:  </label>
    <input type="text" class="form-control" id="name"  name="bank_name" placeholder="Enter Bank's Name"> 
    
    </div>
    
    <div>
        <label for="email"> Bank's Email:  </label>
        <input type="email" class="form-control" id="email"  name="bank_email" placeholder="Enter Email"> 
    </div>
       
    <div>
        <label for="logo"> Bank's Logo: </label>
        <input type="file"  class="form-control" id="logo" name="bankLogo" >
     </div>
     
    <div>
        <label for="text"> Contact:  </label>
        <input type="text" class="form-control" id="text"  name="contact" placeholder="Enter Phone Number"> 
    </div>
    
    
    <div>
        <label for="text"> Address </label>
        <input type="text" class="form-control" id="text"  name="address" > 
    </div>

    <div>
        Status:
        <br>
		<label for="status 1"> Active </label>
		<input type="radio"  id=" status" name=" status">
		<br>
		<label for="status 2"> Inactive </label>
        <input type="radio" id=" status" name=" status">
    </div>
    
<button type="submit" class="btn btn-primary"> Submit </button>
     


@endsection