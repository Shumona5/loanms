@extends('backend.master')

@section('Content')
<form action="{{route('criteria.update',$criterias->id)}}" method="POST">
@method('put') 
    
    @csrf
    <div class="form-control">
        <label for=""> Select Loan Type: </label>
    
       <select name="loan_type_id" id="" class="form-control" > 
       @foreach ($loantypes as $data)
           <option value="{{$data->id}}"> {{$data->name}} </option>
       @endforeach

       </select>
    </div>
    
    <div>
        <label for=""> Enter Criteria Name: </label>
    <input type="text" class="form-control"  name="criteria_name" value="{{$criterias->title}}">
    </div>

    <div>
        <label for=""> Description </label>
    <input type="text" class="form-control" name="description"  value="{{$criterias->description}}">
    </div>
    
    <div class="form-group">
        <label for=""> Select Status </label>
           <select name="status" id="" class="form-control"> 
           <option value="active"> Active </option>
           <option value="inactive"> Inactive </option>   
           </select>
    </div>
    <button type="submit" class="btn btn-primary"> Update </button>
    
</form>

@endsection