@extends('backend.master')
@section('Content')

<p>
    <label for="bank title"> Bank Title: {{$loan->title}} </label>
</p>
<p>
    <label for="bank details"> Bank Details: {{$loan->details}}</label>
</p>
<p>
    <label for="bank details"> Loan Type Id: {{$loan->loan_type_id}}</label>
</p>
<p>
    <label for="bank Id"> Bank Id: {{$loan->bank_id}}</label>
</p>
<p>
    <label for="loan Amount"> Loan Amount: {{$loan->loan_amount}}</label>
</p>
<p>
    <label for="number of months">Number of Months : {{$loan->number_of_months}}</label>
</p>


@endsection