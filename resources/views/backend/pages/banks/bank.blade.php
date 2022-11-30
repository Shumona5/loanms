@extends('backend.master')


@section('Content')

<h1>  Bank's List </h1>

@if(session()->has('message'))
<p class="alert alert-success">{{session()->get('message')}}</p>
 @endif

 @if (session()->has('error'))
<p class="alert alert-danger">{{session()->get('error')}}</p>
    @endif


<a href="{{route('bank.create')}}" class="btn btn-primary"> Create New Bank Account </a>

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

@foreach ($bank_list as $key=>$data)
    
<tr>
  <th scope="row"> {{$key+1}} </th>
  <td>{{$data->name}}</td>
  <td>{{$data->email}}</td>
  <td><img width="100px" src="{{url('/uploads/'. $data->logo)}}" alt="image"></td>
  <td>{{$data->status}}</td>
  <td>{{$data->address}}</td>
  <td>{{$data->contact}}</td>
<td>
  <a href="{{route('admin.bank.view',$data->id)}}"class="btn btn-success"> View </a>
  <a href="{{route('admin.bank.delete',$data->id)}}" class="btn btn-danger"> Delete </a>
  <a href="{{route('admin.bank.edit',$data->id)}}" class="btn btn-primary"> Edit </a>
</td>

</tr>

@endforeach


</tbody>
  </table>

 {{ $bank_list->links() }}

@endsection