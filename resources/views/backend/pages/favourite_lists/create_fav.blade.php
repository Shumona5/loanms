@extends('backend.master')

@section('Content')

<h1> Favourite List </h1>
<form action="{{route('fav.store')}}" method="POST">
@csrf


    <div>
        <label for="name"> Loan Seeker's Name: </label>
<input type="text" class="form-control"  id="name"   name="loan_seekers_name"   placeholder="Enter Loan Seeker's Name">
    </div>

<div>
    <label for="number"> Loan ID: </label>
    <input type="number" class="form-control"  id="number"   name="loan_id"     placeholder="Loan_ID">
</div>
    
<button type="submit" class="btn btn-primary"> Submit </button>
</form>

@endsection