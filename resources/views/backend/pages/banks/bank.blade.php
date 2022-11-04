@extends('backend.master')


@section('Content')

<h1>  Bank's List </h1>

<a href="{{url('bank/create')}}" class="btn btn-primary"> Create New Bank Account </a>

<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Email </th>
        <th scope="col">Logo</th>
        <th scope="col">Status</th>
        <th scope="col">Address</th>
        <th scope="col">Contact</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>

@foreach ($bank_list as $data)
    
<tr>
  <th scope="row">1</th>
  <td>{{$data->name}}</td>
  <td>{{$data->email}}</td>
  <td>{{$data->logo}}</td>
  <td>{{$data->status}}</td>
  <td>{{$data->address}}</td>
  <td>{{$data->contact}}</td>
<td>
  <a href=""class="btn btn-success"> View </a>
  <a href="" class="btn btn-danger"> Delete </a>
  <a href="" class="btn btn-primary"> Upadte </a>
</td>

</tr>

@endforeach


</tbody>
  </table>


@endsection