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
   <label for="text"> Address:  </label>
   <input type="text" class="form-control" id="text" name="address" > 
</div>
    
 <div>
    <label for="text"> Contact:  </label>
    <input type="text" class="form-control" id="text"  name="number" placeholder="Enter Your Phone Number"> 
 </div>

 <div>
   <label for=""> Image:  </label>
   <input type="file" class="form-control" id=""  name="image" > 
</div>

<div class="form-group">
   <label for=""> Select Status </label>
      <select name="status" id="" class="form-control"> 
      <option value="active"> Active </option>
      <option value="inactive"> Inactive </option>   
      </select>
</div>


<button type="submit" class="btn btn-primary"> Submit </button>
 
</form>

@endsection