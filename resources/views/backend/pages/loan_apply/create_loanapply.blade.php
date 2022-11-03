@extends('backend.master')

@section('Content')

<h1> Loan Appliers List </h1>

<form action="{{route('loan.store')}}" method="POST">
@csrf

<div>
<label for="user_id"> User_Id </label>
<input type="text" class="form-control" id="user_id"  name="user_id"  placeholder="Enter Your ID" >

</div>

    <div>
        <label for="loan_id"> Loan_Id </label>
        <input type="text" class="form-control" id="loan_id"  name="loan_id" placeholder="Enter Your Loan ID" >
        
    </div>

    <div>
            <label for="bank_id"> Bank_Id </label>
            <input type="text" class="form-control" id="bank_id" name="bank_id" placeholder="Enter Your Bank ID" >
            
    </div>

    <div class="form-group">
        <label for=""> Select Status </label>
           <select name="status" id="" class="form-control"> 
           <option value="active"> Active </option>
           <option value="inactive"> Inactive </option>   
           </select>
    </div>

    <div>
    <label for=""> Duration </label>
    <input type="text" class="form-control" id=""  name="duration" >
                    
    </div>


<button type="submit" class="btn btn-primary"> Submit </button>





</form>
@endsection




