@extends('backend.master')


@section('Content')

<h1>  Loan </h1>

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
        <td>Dhaka</td>
        <td>House-1, Rd-13, Jashimuddin Ave, Dhaka 1230</td>
        <td>email </td>
        <td>017++++++++ </td>
        <td> Active </td>
      </tr>
      <tr>
        <td>2</td>
        <td>BRAC Bank Limited.</td>
        <td>@fat</td>
        <td>email</td>
        <td>017++++++++</td>
        <td>Active</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>City Bank Limited</td>
        <td>address</td>
        <td>email</td>
        <td>013++++++++</td>
        <td>Inactive</td>
      </tr>
    </tbody>
  </table>



@endsection