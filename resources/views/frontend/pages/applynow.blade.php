@extends('frontend.master')

@section('Content')

     <div class="row">
        <div class="col-md-3"> </div>
        <div class="col-md-6"> 

            <h1> Loan Application Form </h1>  
            <form action="{{route('user.applyform')}}" method="POST">
                @csrf
              
              <div class="form-group">
                    <label for=""> Name: </label>
                    <input type="text" class="form-control" id="" placeholder="Enter name">
                </div>
            
                 <div class="form-group">
                    <label for=""> Birth Date : </label>
                    <input type="date" class="form-control" id="" placeholder="Enter name">
                </div>

                <div class="form-group">
                    <p> Marital Status :</p>
                    <input type="radio" id="" value="single" name="marital_status" >
                    <label for=""> Single </label><br>
                    <input type="radio" id="" value="married"  name="marital_status">
                    <label for=""> Married </label><br>  
                   <input type="radio" id="" value="others"  name="marital_status">
                   <label for=""> Others </label><br><br>
                </div>
            
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                
                <div class="form-group">
                  <label for=""> Phone Number </label>
                  <input type="number" class="form-control" id="" >
                </div>

                <div class="form-group">
                  <label for=""> Address: </label>
                  <input type="text" class="form-control" id="" >
              </div>
          
              <div class="form-group">
                <p> How long have you lived in your given address? </p>
                <input type="radio" id="" value="0-1" name="address" >
                <label for=""> 0-1 Year </label><br>
                <input type="radio" id="" value="1-2"  name="address">
                <label for=""> 1-2 Years </label><br>  
               <input type="radio" id="" value="3-4"  name="address">
               <label for=""> 3-4 Years </label><br>
               <input type="radio" id="" value="5+"  name="address">
               <label for=""> 5+ Years </label><br><br>
            </div>
            <h1> Employment Information</h1><br>

            <div class="form-group">
              <label for=""> Company Name: </label>
              <input type="text" class="form-control" id="">
          </div>

          <div class="form-group">
            <label for=""> Designation </label>
            <input type="text" class="form-control" id="">
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
        <label for=""> Gross monthly income* </label>
        <input type="number" class="form-control" id="">
     </div>

     <div class="form-group">
      <label for=""> Loan Id </label>
      <input type="number" class="form-control" id="">
   </div>

     <div class="form-group">
      <label for=""> Remarks </label>
      <input type="text" class="form-control" id="">
   </div>


     
      <button type="submit" class="btn btn-primary">Submit</button>
       </form>

        </div>
        <div class="col-md-3"> </div>

     </div>

        
        
@endsection