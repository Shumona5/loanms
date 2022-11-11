@extends('backend.master')

@section('Content')

<form action="{{route('loan.store')}}" method="POST"> 
@csrf
    <div>
    <label for="loan_title"> Loan Title: </label>
    <input type="text" class="form-control" id="loan_title"  name="loan_title" placeholder="Enter Loan Title"> 
    
    </div>
    
   <div>
        <label for="bank_id"> Bank_ID: </label>
        <input type="number"  class="form-control" id="bank_id" name="bank_id" >
     </div>

     <div>
        <label for="details"> Details: </label>
        <input type="text"  class="form-control" id="details" name="details" >
     </div>
     
    <div>
        <label for="loan_amount"> Loan Amount:  </label>
        <input type="number" class="form-control" id="loan_amount"  name="loan_amount" > 
    </div>
    
    
    <div>
        <label for="num_of_months"> Number Of month(s): </label>
        <input type="number" class="form-control" id="num_of_months"  name="number_of_months" > 
    </div>

    <div class="form-group">
        <label for=""> Select Status </label>
           <select name="status" id="" class="form-control"> 
           <option value="active"> Active </option>
           <option value="inactive"> Inactive </option>   
           </select>
    </div>
    
    <div class="form-group">
        <label for=""> Select Loan Type  </label>
           <select name="loan_type_id" id="" class="form-control"> 
           @foreach ($loan_types as $data)
           <option value="{{$data->id}}"> {{$data->name}} </option>
           @endforeach
            
             
           </select>
    </div>
    
<button type="submit" class="btn btn-primary"> Submit </button>
     
@endsection