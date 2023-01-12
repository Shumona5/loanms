@extends('backend.master')

@section('Content')


<form action="{{route('bank.store')}}" method="POST" enctype="multipart/form-data"> 


    @if($errors->any())
    @foreach($errors->all() as $message)
        <p class="alert alert-danger">{{$message}}</p>
    @endforeach
    @endif
    
  @if (session()->has ('message'))
  <p class="alert alert-success"> {{session()->get('message')}} </p>
      
   @endif 

    @csrf
                                      
    <div>
    <label for="name"> Bank's Name:  </label>
    <input type="text" class="form-control" id="name"  name="bank_name" placeholder="Enter Bank's Name"> 
    
    </div>
    
    <div>
        <label for="email"> Bank's Email:  </label>
        <input required type="email" class="form-control" id="email"  name="bank_email" placeholder="Enter Email"> 
    </div>
       
    <div>
        <label for="logo"> Bank's Logo: </label>
        <input type="file"  class="form-control" id="logo" name="bankLogo" >
     </div>
     
    <div>
        <label for="text"> Contact:  </label>
        <input type="number" class="form-control" id="text"  name="contact" placeholder="Enter Phone Number"> 
    </div>
    
    
    <div>
        <label for="text"> Address </label>
        <input type="text" class="form-control" id="text"  name="address" > 
    </div>

    <div class="form-group">
        <label for=""> Select Status </label>
           <select name="status" id="" class="form-control"> 
           <option value="active"> Active </option>
           <option value="inactive"> Inactive </option>   
           </select>
    </div>
    
<button type="submit" class="btn btn-primary"> Submit </button>
     


@endsection