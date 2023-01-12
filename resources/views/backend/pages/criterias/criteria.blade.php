@extends('backend.master')


@section('Content')

<h1  style="font-size: revert !important;"> Criteria </h1>

<a href="{{route('criteria.create')}}" class="btn btn-primary"> Create New Criteria </a>
<table class="table">
    <thead>
      <tr>
        <th scope="col" > Id </th>
        <th scope="col"> Criteria Title </th>
        <th scope="col">Description </th>
        <th scope="col"> Loan Type </th>
        <th scope="col"> Status </th>
        <th scope="col"> action </th>
      </tr>
    </thead>
    <tbody>

      @foreach ($criterialist as $key=>$data)
      <tr>
        <th scope="row">{{$key+1}}</th>
        <td>{{$data->criteria_title}}</td>
        <td>{{$data->description}}</td>
        <td>{{$data->loan_type_relation->name}}</td>
        <td>{{$data->status}}</td>
        <td>
          <a href="{{route('criteria.view',$data->id)}}"class="btn btn-success"> View </a>
          <a href="{{route('criteria.delete',$data->id)}}"class="btn btn-danger"> Delete </a>
          <a href="{{route('criteria.edit',$data->id)}}"class="btn btn-primary"> Edit </a>
        </td>
      </tr>
      @endforeach


    </tbody>
  </table>

  {{$criterialist}}
@endsection
