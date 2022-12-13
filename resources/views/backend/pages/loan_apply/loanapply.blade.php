@extends('backend.master')


@section('Content')
<h1  style="font-size: revert !important;"> Loan Apply List </h1>

<a href="{{url('/loanapply/create')}}" class="btn btn-primary"> Create New Loan Account </a>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
      </tr>
    </thead>
    <tbody>

      @foreach ($loan_apply as $info)

      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
      </tr>

      @endforeach


    </tbody>
  </table>







@endsection
