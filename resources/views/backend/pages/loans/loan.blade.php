@extends('backend.master')


@section('Content')

<h1>  Loan </h1>
<a href="{{route('loan.create')}}" class="btn btn-primary"> Create New Loan </a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Title</th>
        <th scope="col">Details </th>
        <th scope="col">Loan Type ID </th>
        <th scope="col">Bank ID</th>
        <th scope="col">Loan Amount</th>
        <th scope="col">Number Of Month(s)</th>
        <th scope="col"> Status </th>
        <th scope="col"> Image </th>
        <th scope="col"> Action </th>
      </tr>
    </thead>
    <tbody>
      @foreach ($loan_list as $key=>$data )
      <tr>
        <th scope="row">{{$key+1}}</th>
        <td>{{$data->title}}</td>
        <td>{{$data->details}}</td>
        <td>{{$data->loantype->name}}</td>
        <td>{{$data->bank_id}}</td>
        <td>{{$data->loan_amount}}</td>                     
        <td>{{$data->number_of_months}}</td>
        <td>{{$data->status}}</td>
        <td><img  width="100px" src="{{url('/uploads/'.$data->image)}}" alt=""></td>
        
        <td>
          <a href="{{route('loan.view',$data->id)}}"class="btn btn-success"> View </a>
          <a href="{{route('loan.delete',$data->id)}}" class="btn btn-danger"> Delete </a>
          <a href="" class="btn btn-primary"> Upadte </a>
        </td>
      </tr> 
      @endforeach
      
      
    </tbody>
  </table>

{{$loan_list->links()}}

@endsection