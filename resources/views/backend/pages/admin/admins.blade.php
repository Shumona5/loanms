@extends('backend.master')

@section('Content')
    
<h1 style="font-size: revert !important;">  Admin's List </h1>

<table class="table">
    <thead>
      <tr>
        <th scope="col">id </th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Image</th>
        <th scope="col">Address</th>
        <th scope="col">Status</th>
        <th scope="col">Contact</th>
        {{-- <th scope="col">Action</th> --}}
      </tr>
    </thead>
    <tbody>
        @foreach ($admin_list as $key=>$data )
            
        @endforeach
      <tr>
        <th scope="row">{{$key+1}}</th>
        <td>{{$data->name}}</td>
        <td>{{$data->email}}</td>
        <td>{{$data->image}}</td>
        <td>{{$data->address}}</td>
        <td>{{$data->status}}</td>
        <td>{{$data->contact}}</td>
        
      </tr>
      
    </tbody>
  </table>

@endsection