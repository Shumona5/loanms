@extends('backend.master')


@section('Content')

<h1>  Loan </h1>
<a href="" class="btn btn-primary"> Create New Loan </a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Title</th>
        <th scope="col">Details </th>
        <th scope="col">Type_ID</th>
        <th scope="col">Bank_ID</th>
        <th scope="col">Loan_Amount</th>
        <th scope="col">Number Of Years</th>
        <th scope="col">Status</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Car loan</td>
        <td>Car loan for purchase of brand new or reconditioned car (for private use only) </td>
        <td> 123 </td>
        <td>1234</td>
        <td> 100000 </td>
        <td>1</td>
        <td> Active </td>
      </tr>
      
    </tbody>
  </table>



@endsection