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