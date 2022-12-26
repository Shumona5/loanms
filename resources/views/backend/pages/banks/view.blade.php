@extends('backend.master')
@section('Content')
<p>
    <label for="bank name"> Bank Name:  {{$bank->name}} </label>

</p>
<p>
    <label for="bank email"> Bank Email:  {{$bank->email}} </label>

</p>
<div class="flex">
    <p>Logo:</p>
</div>
<div>
    <img width="100px" src="{{url('/uploads/'. $bank->image)}}" alt="image">
</div>




@endsection