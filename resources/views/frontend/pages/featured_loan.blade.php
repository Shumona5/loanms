@extends('frontend.master')
@section('Content')

<section class="featured-job-area feature-padding">
    <div class="container">
        <!-- Section Tittle -->
        <div class="row">
            <div class="col-lg-12">
                <div class="section-tittle text-center">
                    <span>Recent Loans </span>                   
                    <h2>Featured Loans</h2>
                </div>                                      
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-10">
                <!-- single-job-content -->

                @foreach ( $loans as $loan)
                  
                <div class="single-job-items mb-30">
                    <div class="job-items">
                        <div class="company-img">
                            <a href="job_details.html"><img src="assets/img/icon/job-list1.png" alt=""></a>
                        </div>
                        <div class="job-tittle">
                            <a href="job_details.html"><h4>Loan Title: {{$loan->title}}</h4></a>
                            <ul>
                                <li> Bank Name: {{$loan->bank->name}} </li>
                                <li><i class="fas fa-map-marker-alt"></i> Loan Type: {{$loan->loantype->name}} </li>
                                <li> Loan Amount: {{$loan->loan_amount}} BDT </li>
                            </ul>
                        </div>
                    </div>
                    <div class="items-link f-right">
                        <a href="{{route('user.viewnow', $loan->id)}}"> View Now </a>
                        <span> Duration: {{$loan->number_of_months}} months </span>       
                    </div>
                </div>

                @endforeach
                                            
               
              
                
            </div>
        </div>
    </div>
</section>


@endsection