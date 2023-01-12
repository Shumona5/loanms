@extends('backend.master')


@section('Content')

<h1  style="font-size: revert !important;"> Wish List </h1>

<table class="table">
    <thead>
      <tr>
        <th scope="col">ID </th>
        <th scope="col">Loan Seeker's Name </th>
        <th scope="col">Loan Title </th>
    </tr>
    </thead>
    <tbody>
      {{-- @dd($fav); --}}

        @foreach ($fav as $favlist )
        <tr>
            <th scope="row">1</th>
            <td>{{$favlist->seekerRelation->name}}</td>  
            <td>{{$favlist->loanRelation->title}}</td>

        </tr>
        @endforeach
    </tbody>                           
  </table>

{{$fav->links()}}


  @endsection
