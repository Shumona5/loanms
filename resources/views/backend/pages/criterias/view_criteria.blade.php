@extends('backend.master')

@section('Content')

<p>
    <label for="criteria name"> Title:  {{$criteria->title}} </label>

</p>
<p>
    <label for="description"> Description:  {{$criteria->description}} </label>

</p>
<p>
    <label for="status"> status:  {{$criteria->status}} </label>

</p>



@endsection