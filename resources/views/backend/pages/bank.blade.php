@extends('backend.master')


@section('Content')

<h1>  Bank's List </h1>



<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Address </th>
        <th scope="col">Email</th>
        <th scope="col">Contact</th>
        <th scope="col">Status</th>
      </tr>
    </thead>
    <tbody>


      @foreach ( $bank_list as $bank )
          
      
      <tr>
        <th scope="row">1</th>
        <td>{{$bank->name}}</td>
        <td>{{$bank->address}}</td>
        <td>{{$bank->email}}</td>
        <td>{{$bank->contact}}</td>
        <td> Active </td>
      </tr>
      
      @endforeach


    </tbody>
  </table>


@endsection