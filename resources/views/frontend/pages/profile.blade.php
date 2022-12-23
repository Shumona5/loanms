@extends('frontend.master')

@section('Content')
    <div class="row py-5 px-4">
        <div class="col-md-5 mx-auto">
            <!-- Profile widget -->
            <div class="bg-white shadow rounded overflow-hidden">
                <div class="px-4 pt-0 pb-4 cover">
                    <div class="media align-items-end profile-head">
                        <div class="profile mr-3"><img
                                src="{{url('/uploads/'.auth()->user()->image)}}"
                                alt="..." width="130" class="rounded mb-2 img-thumbnail"><a href="{{route('user.profile.edit')}}"
                                class="btn btn-outline-dark btn-sm btn-block">Edit profile</a></div>
                        <div class="media-body mb-5 text-white">
                          <br>
                            <h4 class="mt-0 mb-0">{{auth()->user()->name}}</h4>
                            <p class="small mb-4"> <i class="fas fa-map-marker-alt mr-2"></i>{{auth()->user()->address}}</p>
                        </div>
                    </div>
                </div>
                
                <div class="bg-light p-4 d-flex justify-content-end text-center">            
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                            <h5 class="font-weight-bold mb-0 d-block">{{$userApplications->where('status','pending')->count()}} </h5><small class="text-muted"> <i
                                    class="fas fa-image mr-1"></i> Pending  </small>
                        </li>
                        <li class="list-inline-item">
                            <h5 class="font-weight-bold mb-0 d-block">{{$userApplications->where('status','Accepted')->count()}} </h5><small class="text-muted"> <i
                                    class="fas fa-user mr-1"></i> Accepted </small>
                        </li>                                 
                        <li class="list-inline-item">
                            <h5 class="font-weight-bold mb-0 d-block">{{$userApplications->where('status','Reject')->count()}} </h5><small class="text-muted"> <i
                                    class="fas fa-user mr-1"></i> Rejected </small>
                        </li>

                        <li class="list-inline-item">
                            <h5 class="font-weight-bold mb-0 d-block">{{$userApplications->count()}} </h5><small class="text-muted"> <i
                                    class="fas fa-user mr-1"></i> Total </small>
                        </li> 
                    </ul>
                </div>
                <div class="px-4 py-3">
                    <h5 class="mb-0"> Basic Info </h5>
                    <div class="p-4 rounded shadow-sm bg-light">
                        <p class="font-italic mb-0"> Email Address: {{auth()->user()->email}}</p>
                        <p class="font-italic mb-0"> Contact: {{auth()->user()->contact}}</p>
                        <p class="font-italic mb-0"> About: {{auth()->user()->about}}</p>
                    </div>
                </div>
                
                <table class="table">
                    <thead> 
                      <tr>
                        <th scope="col">Serial</th>
                        <th scope="col">Loan Title</th>
                        
                        <th scope="col">Name</th> 
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($userApplications as $key=>$application)
                      
                         <tr>
                          <th scope="row">{{$key+1}}</th> 
                          <td>{{$application->loanRelation->title}}</td>
                          
                          <td>{{$application->name}}</</td>
                          <td>{{$application->status}}</</td>
                          <td>
                            {{-- cancel button show only for pending application  --}}
                        @if($application->status == 'Pending')
                          <a href="{{route('user.cancel',$application->id)}}"class="btn btn-primary"> Cancel </a>
                        @endif
                          <a href="{{route('profile.edit',$application->id)}}"class="btn btn-success"> Edit </a>
                          </td>
                        </tr>
                      @endforeach                
                                                   
                     
                    </tbody>
                  </table>  
                  <br>
                     
                  <b> <h1 style="color:purple"> Wish List </h1> </b>
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">ID </th>
                        <th scope="col">Loan Seeker's Name</th>
                        <th scope="col">Loan Title </th>
                        <th scope="col">Action </th>
                    </tr>
                    </thead>
                    <tbody>
                      @foreach ($favouritelist as $key=>$data )
                                                                      
                    <tr>
                            <th scope="row">{{$key+1}}</th>                 
                            <td>{{$data->seekerRelation->name}}</td>
                            <td>{{$data->loanRelation->title}}</td>
                            <td>
                              <a href="" class="btn btn-danger">Delete</a>
                              <a href="{{route('user.applynow',$data->loan_id)}}" class="btn btn-danger"> Apply Now </a>
                            </td>
                
                    </tr>
                        @endforeach
                    </tbody>
                  </table>

            </div>
        </div>
    </div>
@endsection
