@extends('frontend.master')

@section('Content')
<div class="row">
    <div class="col-md-3"> </div>
    <div class="col-md-6">                                

        <h1> Loan Application Form </h1>  
        <form action="{{route('application.update',$application->id)}}" method="POST">
            
          @method('put')
          @csrf
          
          <div class="form-group">
                <label for=""> Name: </label>
                <input type="text" class="form-control" id=""  name="name"  value="{{$application->name}}" placeholder="Enter name">
            </div>
        
             <div class="form-group">
                <label for=""> Date Of Birth : </label>
                <input type="date" class="form-control" id="" name="birth_date" value="{{$application->birth_date}}" placeholder="Enter name">
            </div>

            <div class="form-group">
                <p> Marital Status :</p>
                <input  @if ($application->marital_status=='unmarried')
                    checked
                @endif  type="radio" id="" value="unmarried" name="marital_status" >
                <label for=""> Unmarried </label><br>
                <input @if ($application->marital_status=='married')
                checked
            @endif type="radio" id="" value="married" name="marital_status">
                <label for=""> Married </label><br>  
              
            </div>
        
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input  required type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="{{$application->email}}" placeholder="Enter name">
            </div> 
            
            
            <div class="form-group">
              <label for=""> Phone Number </label>
              <input type="number" class="form-control" id="" name="phone_number" value="{{$application->phone_number}}">
            </div>

            <div class="form-group">
              <label for=""> Address: </label>
              <input type="text" class="form-control" id="" name="address" value="{{$application->address}}">
            </div>
      
            <div class="form-group">                      
            <p> How long have you lived in your given address? </p>
            <input 
                
             type="radio" id="" value="0-1" name="living_duration" >
            <label for=""> 0-1 Year </label><br>
            <input type="radio" id="" value="1-2"  name="living_duration">
            <label for=""> 1-2 Years </label><br>  
           <input type="radio" id="" value="3-4"  name="living_duration">
           <label for=""> 3-4 Years </label><br>
           <input type="radio" id="" value="5+"  name="living_duration">
           <label for=""> 5+ Years </label><br><br>
          </div>
          <h1> Employment Information</h1><br>

          <div class="form-group">
            <label for=""> Company Name: </label>
            <input type="text" class="form-control" id="" name="company" value="{{$application->company_name}}">
          </div>

         <div class="form-group">
          <label for=""> Designation </label>
          <input type="text" class="form-control" id="" name="designation" value="{{$application->designation}}">
         </div>

           <div class="form-group">
               <p> Years of experience* </p>
                <input type="radio" id="" value="0-1" name="experience" >
                <label for=""> 0-1 Year </label><br>
                <input type="radio" id="" value="1-2"  name="experience">
                <label for=""> 1-2 Years </label><br>  
                <input type="radio" id="" value="3-4"  name="experience">
                <label for=""> 3-4 Years </label><br>
                <input type="radio" id="" value="5+"  name="experience">
                <label for=""> 5+ Years </label><br>
            </div>

        <div class="form-group">
          <label for=""> Gross monthly income </label>
          <input type="number" class="form-control" id=""  name="monthly_income" value="{{$application->monthly_income}}">
         </div>

         <div class="form-group">
             <label for=""> Remarks </label>
            <input type="text" class="form-control" id="" value="{{$application->remarks}}" >
         </div>

      <button type="submit" class="btn btn-primary"> Update </button>
     </form>

    </div>
    <div class="col-md-3"> </div>

  </div>

@endsection