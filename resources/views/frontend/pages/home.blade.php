@extends('frontend.master')
@section('Content')

<style type="text/css">
.slick-list{
    overflow: visible !important;
}
</style>
<!-- slider Area Start-->
<div class="slider-area ">
    <!-- Mobile Menu -->
    <div class="slider-active">
        <div class="single-slider slider-height d-flex align-items-center" data-background={{url('/img/h1_hero.jpg')}}>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-9 col-md-10">
                        <div class="hero__caption">
                            <h1>Find the most exciting Loans </h1>
                        </div>
                    </div>
                </div>
                <!-- Search Box -->             
                <div class="row">            
                    <div class="col-xl-8">
                        <!-- form -->
                        <form action="{{route('user.searchloan')}}" class="search-box">
                            <div class="input-form">
                                <input type="text"  name="amount"   placeholder="Loan Amount">
                            </div>              
                            <div class="select-form">
                                <div class="select-itms">
                                    <select name="type_id" id="">
                                        @foreach ($data as $type )
                                        <option value="{{$type->id}}"> {{$type->name}}</option> 
                                        @endforeach

                                        
                                    </select>
                                </div>
                            </div>
                            <div class="search-form">
                                
                                <button type="submit" class="btn btn-primary"> Search Loans  </button>
                            </div>	
                        </form>	
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- slider Area End-->
<!-- Our Services Start -->
<div class="our-services section-pad-t30">
    <div class="container">
        <!-- Section Tittle -->
        <div class="row">
            <div class="col-lg-12">
                <div class="section-tittle text-center">
                    
                    <h2>Browse Top Loan Type </h2>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-contnet-center">
            @foreach ($data as $type )

            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6" >
                <div class="single-services text-center mb-30" style="border: 1px solid #fb246a">
                    <div class="services-ion">
                        <span class="flaticon-tour"></span>
                    </div>
                    <div class="services-cap">
                       
                       <h5><a href="{{route('user.type.wise.loan',$type->id)}}"> {{$type->name}}</a></h5>
                      
                        
                    </div>
                </div>
            </div>
            @endforeach
        
        </div>
        <!-- More Btn -->
        <!-- Section Button -->
        {{-- <div class="row">
            <div class="col-lg-12">
                <div class="browse-btn2 text-center mt-50">
                    <a href="job_listing.html" class="border-btn2">Browse All Sectors</a>
                </div>
            </div>
        </div> --}}
    </div>
</div>
<!-- Our Services End -->
<!-- Online CV Area Start -->
 <div class="online-cv cv-bg section-overly pt-90 pb-120"  data-background={{url('/img/cv_bg.jpg')}}>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10">
                <div class="cv-caption text-center">
                    
                    <p class="pera2"> ???It???s easy to get a loan unless you need it.???</p>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Online CV Area End-->
<!-- Featured_job_start -->
<section class="featured-job-area feature-padding">
    <div class="container">
        <!-- Section Tittle -->
        <div class="row">
            <div class="col-lg-12">
                <div class="section-tittle text-center">
                    
                    <h2>Featured Loans </h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
           
            <div class="col-xl-10">
                <!-- single-job-content -->
                 @foreach ($loans as $loan)
                <div class="single-job-items mb-30">
                    <div class="job-items">
                        <div class="company-img">
                            <a href="job_details.html"><img src="assets/img/icon/job-list1.png" alt=""></a>
                        </div>
                        <div class="job-tittle">
                            <a href="job_details.html"><h4> {{$loan->title}} </h4></a>
                            <ul>
                                <li>Creative Agency</li>
                                <li><i class="fas fa-map-marker-alt"></i>Athens, Greece</li>
                                <li>{{$loan->number_of_months}} months </li>
                            </ul>
                        </div>
                    </div>
                    <div class="items-link f-right">
                        <a href="{{route('user.viewnow', $loan->id)}}"> View Now </a>
                        <span>{{$loan->loan_amount}} BDT </span>
                    </div>
                 
            
                </div>
                
                @endforeach 
                
            </div>
        </div>
    </div>
</section>
<!-- Featured_job_end -->
<!-- How  Apply Process Start-->
<div class="apply-process-area apply-bg pt-150 pb-150" data-background={{url('/img/how-applybg.png')}}>
    <div class="container">
        <!-- Section Tittle -->
        <div class="row">
            <div class="col-lg-12">
                <div class="section-tittle white-text text-center">
                    <span>Apply process</span>
                    <h2> How it works</h2>
                </div>
            </div>
        </div>
        <!-- Apply Process Caption -->
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-process text-center mb-30">
                    <div class="process-ion">
                        <span class="flaticon-search"></span>
                    </div>
                    <div class="process-cap">
                       <h5>1. Search a Loan  </h5>
                       <p>We can help you find loans matched to your credit information.Searching takes less than 2 minutes and won't harm your score.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-process text-center mb-30">
                    <div class="process-ion">
                        <span class="flaticon-curriculum-vitae"></span>
                    </div>
                    <div class="process-cap">
                       <h5>2. Apply for Loan </h5>
                       <p>Check the Eligibility Criteria.Check Interest Rates.Calculate your EMI.Check Required Documents.Fill Application Form Online.
                          Wait for Loan Approval</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-process text-center mb-30">
                    <div class="process-ion">
                        <span class="flaticon-tour"></span>
                    </div>
                    <div class="process-cap">
                       <h5>3. Get your Loan </h5>
                       <p>Gather your documents. Your lender will require documentation.Complete a preapproval application.Wait for you lender to process the preapproval.</p>
                    </div>
                </div>
            </div>
        </div>
     </div>
</div>


<!-- Support Company End-->
<!-- Blog Area Start -->
{{-- <div class="home-blog-area blog-h-padding">
    <div class="container">
        <!-- Section Tittle -->
        <div class="row">
            <div class="col-lg-12">
                <div class="section-tittle text-center">
                    <span>Our latest blog</span>
                    <h2>Our recent news</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="home-blog-single mb-30">
                    <div class="blog-img-cap">
                        <div class="blog-img">
                            <img src="assets/img/blog/home-blog1.jpg" alt="">
                            <!-- Blog date -->
                            <div class="blog-date text-center">
                                <span>24</span>
                                <p>Now</p>
                            </div>
                        </div>
                        <div class="blog-cap">
                            <p>|   Properties</p>
                            <h3><a href="single-blog.html">Footprints in Time is perfect House in Kurashiki</a></h3>
                            <a href="#" class="more-btn">Read more ??</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="home-blog-single mb-30">
                    <div class="blog-img-cap">
                        <div class="blog-img">
                            <img src="assets/img/blog/home-blog2.jpg" alt="">
                            <!-- Blog date -->
                            <div class="blog-date text-center">
                                <span>24</span>
                                <p>Now</p>
                            </div>
                        </div>
                        <div class="blog-cap">
                            <p>|   Properties</p>
                            <h3><a href="single-blog.html">Footprints in Time is perfect House in Kurashiki</a></h3>
                            <a href="#" class="more-btn">Read more ??</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>                                   --}}
<!-- Blog Area End -->



 

@endsection

