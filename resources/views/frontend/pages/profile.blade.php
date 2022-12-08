@extends('frontend.master')

@section('Content')
    <div class="row py-5 px-4">
        <div class="col-md-5 mx-auto">
            <!-- Profile widget -->
            <div class="bg-white shadow rounded overflow-hidden">
                <div class="px-4 pt-0 pb-4 cover">
                    <div class="media align-items-end profile-head">
                        <div class="profile mr-3"><img
                                src="https://images.unsplash.com/photo-1522075469751-3a6694fb2f61?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=80"
                                alt="..." width="130" class="rounded mb-2 img-thumbnail"><a href="#"
                                class="btn btn-outline-dark btn-sm btn-block">Edit profile</a></div>
                        <div class="media-body mb-5 text-white">
                            <h4 class="mt-0 mb-0">{{auth()->user()->name}}</h4>
                            <p class="small mb-4"> <i class="fas fa-map-marker-alt mr-2"></i>New York</p>
                        </div>
                    </div>
                </div>
                <div class="bg-light p-4 d-flex justify-content-end text-center">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                            <h5 class="font-weight-bold mb-0 d-block">2 </h5><small class="text-muted"> <i
                                    class="fas fa-image mr-1"></i> Pending  </small>
                        </li>
                        <li class="list-inline-item">
                            <h5 class="font-weight-bold mb-0 d-block">7 </h5><small class="text-muted"> <i
                                    class="fas fa-user mr-1"></i> Accepted </small>
                        </li>
                        <li class="list-inline-item">
                            <h5 class="font-weight-bold mb-0 d-block">3 </h5><small class="text-muted"> <i
                                    class="fas fa-user mr-1"></i> Rejected </small>
                        </li>

                        <li class="list-inline-item">
                            <h5 class="font-weight-bold mb-0 d-block"> 12 </h5><small class="text-muted"> <i
                                    class="fas fa-user mr-1"></i> Total </small>
                        </li>
                    </ul>
                </div>
                <div class="px-4 py-3">
                    <h5 class="mb-0">About</h5>
                    <div class="p-4 rounded shadow-sm bg-light">
                        <p class="font-italic mb-0">Web Developer</p>
                        <p class="font-italic mb-0">Lives in New York</p>
                        <p class="font-italic mb-0">Photographer</p>
                    </div>
                </div>
                
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Loan Id </th>
                        <th scope="col"> User Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($userApplications as $application)
                         <tr>
                          <th scope="row">1</th>
                          <td>{{$application->loan_id}}</td>
                          <td>{{$application->user_id}}</</td>
                          <td>{{$application->name}}</</td>
                          <td>{{$application->status}}</</td>
                          <td>
                          <a href="{{route('user.cancel',$application->id)}}"class="btn btn-primary"> Cancel </a>
                          <a href="{{route('profile.edit',$application->id)}}"class="btn btn-success"> Edit </a>
                          </td>
                        </tr>
                      @endforeach                
                                                    {{-- Data entry     --}}
                                               {{-- 1. Cancel '''''''' --}}
                                              {{-- 2. Application edit + update........ --}}
                                               
                     
                    </tbody>
                  </table>               

            </div>
        </div>
    </div>
@endsection
