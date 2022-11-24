@extends('backend.master')

@section('Content')

<form action="{{route('loantype.store')}}" method="POST" enctype="multipart/form-data">

@csrf

@if($errors->any())
@foreach ($errors->all() as $error)
<p class="alert alert-danger">{{ $error }}</p>
@endforeach
@endif
    

    <div>
        <label for="loan_name"> Loan Type Name: </label>
        <input type="text" class="form-control" id="loan_name"  name="loan_name" placeholder="Enter Loan Title"> 
        
     </div>
        <div>
            <label for="description"> Description: </label>
            <input type="text" class="form-control" id="description"  name="description" > 
            
            </div>
        
       <div>
            <label for="image"> Image: </label>
            <input type="file"  class="form-control" id="image" name="picture" >
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