@extends('backend.master')


@section('Content')

<h1  style="font-size: revert !important;"> Wish List </h1>




<table class="table">
    <thead>
      <tr>
        <th scope="col">ID </th>
        <th scope="col">Loan Seeker's ID </th>
        <th scope="col">Loan ID </th>
    </tr>
    </thead>
    <tbody>
      {{-- @dd($fav); --}}

        @foreach ($fav as $favlist )
        <tr>
            <th scope="row">1</th>
            <td>{{$favlist->loan_seekers_id}}</td>
            <td>{{$favlist->loan_id}}</td>

        </tr>
        @endforeach
    </tbody>
  </table>

{{$fav->links()}}


  @endsection
