@extends('backend.master')

@section('Content')

<h1> <b> Loan Appliers Information </b> </h1>
<br>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Loan Id</th>
        <th scope="col">User Id </th>
        <th scope="col" >Name </th>
        <th scope="col" >Email </th>
        <th scope="col" > Status </th>
        <th scope="col" > Action </th>
      </tr>
    </thead>
    <tbody>
        @foreach ($apply_list as $key=>$apply)
        <tr>
            <th scope="row"> {{$key+1}} </th>
            <td>{{$apply->loan_id}}</td>
            <td>{{$apply->user_id}}</td>
            <td>{{$apply->name}}</td>
            <td>{{$apply->email}}</td>
            <td>{{$apply->status}}</td>
            <td>
                <a href="{{route('loanappliers.view',$apply->id)}}" class="btn btn-success"> View </a>
                <a href="" class="btn btn-primary"> Edit </a>
                <a href="" class="btn btn-danger"> Delete </a>
            </td>
          </tr>  
        @endforeach
      
   </tbody>
  </table>


@endsection