@extends('backend.master')

@section('Content')


<h1> Loan Seeker's List </h1>
<a href="{{url('/users/create')}}"class="btn btn-primary"> Create New user </a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name </th>
        <th scope="col">Email</th>
        <th scope="col">Address</th>
        <th scope="col">Contact</th>
        <th scope="col"> Image </th>
        <th scope="col"> Status </th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>m@gmail.com</td>
        <td>Dhaka</td>
        <td>01234567890</td>
        <td> </td>
        <td>Active </td>
        <td>
          <a href=""class="btn btn-success"> View </a>
          <a href="" class="btn btn-danger"> Delete </a>
          <a href="" class="btn btn-primary"> Upadte </a>
        </td>
      </tr>
      
    </tbody>
  </table>


    
@endsection