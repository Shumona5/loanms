@extends('backend.master')

@section('Content')

<h1  style="font-size: revert !important;"> <b> All loan applications </b> </h1>
<br>
<table class="table">
    <thead>
      <tr>
        <th scope="col"> ID </th>
        <th scope="col">Loan Title</th>
        <th scope="col" >Name </th>
        <th scope="col" >Email </th>
        <th scope="col" > Status </th>
        <th scope="col" > Action </th>
      </tr>
    </thead>
    <tbody>
        @foreach ($apply_list as $key=>$apply)
        <tr>
            <th scope="row"> {{$key+1}} </th>
            <td>{{$apply->loanRelation->title}}</td>
            <td>{{$apply->name}}</td>
            <td>{{$apply->email}}</td>
            <td>{{$apply->status}}</td>
            <td>
                <a href="{{route('loanappliers.view',$apply->id)}}" class="btn btn-success"> View </a>
{{--                <a href="{{route('loanappliers.edit',$apply->id)}}" class="btn btn-primary"> Edit </a>--}}
{{--                <a href="{{route('loanappliers.delete',$apply->id)}}" class="btn btn-danger"> Delete </a>--}}
            </td>
          </tr>
        @endforeach

   </tbody>
  </table>


@endsection
