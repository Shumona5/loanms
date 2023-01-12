@extends('backend.master')
@section('Content')


<div class="container-fluid px-4">
    <h1 class="mt-4"  style="font-size: revert !important;">Dashboard</h1>

    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body"> Total Loan
                      {{$loan}} 
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                     @if (auth()->user()->role=='admin')
                    <a class="small text-white stretched-link" href="{{route('loan')}}">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                     @endif
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-warning text-white mb-4">
                <div class="card-body"> Loan Types
                          {{$loanTypes}}
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                      @if (auth()->user()->role=='admin')
                    <a class="small text-white stretched-link" href="{{route('loantype')}}">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                @endif
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-success text-white mb-4">
                <div class="card-body"> Total Loan Seekers  {{$loanSeekers}}</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    @if (auth()->user()->role=='admin')
                    <a class="small text-white stretched-link" href="{{route('user')}}">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                      @endif
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-danger text-white mb-4">
                <div class="card-body"> Total Bank {{$banks}} </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                   
                    @if (auth()->user()->role=='admin')
                    <a class="small text-white stretched-link"  href="{{route ('bank')}}">View Details</a> 
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    @endif
                    
                   
                </div>
            </div>
        </div>
    </div>


</div>           

@endsection
