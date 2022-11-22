@extends('backend.master')
@section('Content')
<p>
    <label for="bank name"> Bank Name:  {{$bank->name}} </label>

</p>
<p>
    <label for="bank email"> Bank Email:  {{$bank->email}} </label>

</p>




@endsection