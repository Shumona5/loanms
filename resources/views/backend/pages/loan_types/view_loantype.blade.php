@extends('backend.master')

@section('Content')

<p> 
    <label for="loan_name">  Loan type Name: {{$loantypes->name}}</label>
</p>

<p>
    <label for="description"> Description: {{$loantypes->description}}</label>
</p>

<p>
    <label for="image"> Image: {{$loantypes->image}}</label>
</p>

<p>
    <label for="status"> Status: {{$loantypes->status}}</label>
</p>
@endsection