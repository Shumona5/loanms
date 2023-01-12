@extends('backend.master')

@section('Content')

<div id="loan_application">

<h1> <b> Loan Appliers Information </b> </h1>
<br>
<p>
    <label for=""> Name: {{$apply_list->name}} </label>
</p>

<p>
    <label for=""> Date Of Birth : {{$apply_list->birth_date}}</label>
</p>

<p>
    <label for=""> Email:{{$apply_list->email}} </label>
</p>
<p>
    <label for=""> Phone Number:{{$apply_list->phone_number}} </label>
</p>
<p>
    <label for=""> Address:{{$apply_list->address}} </label>
</p>
<p>
    <label for="">Marital Status:{{$apply_list->marital_status}} </label>
</p>
<p>
    <label for=""> Living Duration: {{$apply_list->living_duration}} </label>
</p>
<p>
    <label for=""> Company Name: {{$apply_list->company}} </label>
</p>
<p>
    <label for=""> Designation: {{$apply_list->designation}} </label>
</p>
<p>
    <label for="">Loan Id: {{$apply_list->loan_id}} </label>
</p>
<p>
    <label for="">User Id: {{$apply_list->user_id}} </label>
</p>
<p>
    <label for=""> Gross monthly income: {{$apply_list->gross_monthly_income}} </label>
</p>
<p>
    <label for=""> Remarks: {{$apply_list->remarks}} </label>
</p>

<p>
    <label for=""> Year Of Experience: {{$apply_list->years_of_experience}} </label>
</p>
<p>
    <label for=""> Status: {{$apply_list->status}} </label>
</p>

</div>

<p>
    <div class="row">
        @if ($apply_list->status=='pending')
        
          <div class="col-md-3">  
          <a href="{{route('loanappliers.accept',$apply_list->id)}}" class="btn btn-success"> Accept </a> 
        </div>
        <div class="col-md-6"> 
            <a href="{{route('loanappliers.reject',$apply_list->id)}}" class="btn btn-danger"> Reject </a> 
        </div>
        @endif

        <div class="col-md-3">
            <button onclick="printDiv('loan_application')"  class="btn btn-success">  Print </button> 

            
        </div>
    </div>  
</p>

<script>
    function printDiv(divId){
        var printContents = document.getElementById(divId).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>
@endsection

