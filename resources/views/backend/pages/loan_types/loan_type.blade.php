@extends('backend.master')


@section('Content')
    
<h1> Loan Types </h1>

<a href="{{url('/loantype/create')}}" class="btn btn-primary"> Create New Loan Types </a>

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
          <tr>
            <th scope="row">1</th>
            <td> Car </td>
            <td> # </td>
            <td>@mdo</td>
            <td>
              <a href=""class="btn btn-success"> View </a>
              <a href="" class="btn btn-danger"> Delete </a>
              <a href="" class="btn btn-primary"> Upadte </a>
            </td>
          </tr>
          <tr>
          
            
          </tr>
        </tbody>
      </table>
      
</table>










@endsection