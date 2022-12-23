@extends('backend.master')


@section('Content')

<h1  style="font-size: revert !important;"> Loan Types </h1>
<br>

<a href="{{route('loan.type.create')}}" class="btn btn-primary"> Create New Loan Types </a>
<br>
<table>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Image</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($loantypes_list as $key=>$data )
          <tr>
            <th scope="row"> {{$data->id}} </th>
            <td>{{$data->name}} </td>
            <td> <img width="100px" src="{{url('/uploads/'. $data->image)}}" alt="image"></td>
            <td>{{$data->status}}</td>
            <td>
              <a href="{{route('loantype.view',$data->id)}}"class="btn btn-success"> View </a>
              <a href="{{route('loantype.delete',$data->id)}}" class="btn btn-danger"> Delete </a>
              <a href="" class="btn btn-primary"> Edit </a>
            </td>
          </tr>
          @endforeach
        </tr>
        </tbody>
      </table>

</table>

{{$loantypes_list->links()}}
@endsection
