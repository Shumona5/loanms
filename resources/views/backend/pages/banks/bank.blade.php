@extends('backend.master')


@section('Content')

<h1>  Bank's List </h1>

<a href="{{url('bank/create')}}" class="btn btn-primary"> Create New Bank Account </a>

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

       <tr>
        <th scope="row">1</th>
        <td>tst</td>
        <td>tst</td>
        <td>tst</td>
        <td>tst</td>
        <td>tst</td>
      </tr>
      
      


    </tbody>
  </table>


@endsection