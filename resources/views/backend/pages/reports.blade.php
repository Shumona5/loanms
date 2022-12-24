@extends('backend.master')

@section('Content')

<h1  style="font-size: revert !important;"> <b> All loan applications </b> </h1>
<br>
<form action="{{route('report.generate')}}" method="GET">
<div class="row">
    <div class="col-md-3">
       <label for=""> From Date </label>
       <input value="{{$from}}" type="date" class="form-control" name="from_date">
    </div>

    <div class="col-md-3">
        <label for=""> To Date </label>
        <input value="{{$to}}" type="date" class="form-control" name="to_date">
    </div>
    <div class="col-md-3">
        <br>
        <select name="type" id="" class="form-control form-select">
            <option value="">-- Select Option --</option>
            @foreach($types as $type)
            <option value="{{$type->id}}">{{$type->name}}</option>
            @endforeach
        </select>
    </div>

    <div class="col-md-3">
        <br>
        <button type="submit" class="btn btn-primary"> Report Generate </button>
    </div>
</div>
</form>
<br>

<div id="applicationReport">
<table class="table">
    <thead>
      <tr>
        <th scope="col">ID </th>
        <th scope="col">Loan Title</th>
        <th scope="col">Loan Type</th>
        <th scope="col" >Name </th>
        <th scope="col" >Email </th>
        <th scope="col" > Status </th>
        </tr>
    </thead>
    <tbody>

        @if (isset($appliers))


       @foreach ( $appliers as $key=> $data)


        <tr>
            <th scope="row">{{$key+1}}</th>
            <td>{{$data->loanRelation->title}}</td>
            <td>{{$data->loanRelation->loantype->name}}</td>
            <td>{{$data->name}}</td>
            <td>{{$data->email}}</td>
            <td>{{$data->status}}</td>
        </tr>
        @endforeach
        @endif
    </tbody>
 </table>
</div>
<br>
<button onclick="printDiv('applicationReport')"  class="btn btn-success">  Print </button>


<script>
    function printDiv(divId){
        var printContents = document.getElementById(divId).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>

@endsection
