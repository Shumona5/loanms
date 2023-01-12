<header>
    <!-- Header Start -->
   <div class="header-area header-transparrent">
       <div class="headder-top header-sticky">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-2">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                        </div>  
                    </div>
                    <div class="col-lg-9 col-md-9">
                        <div class="menu-wrapper">
                            <!-- Main-menu -->
                            <div class="main-menu">
                                <nav class="d-none d-lg-block">
                                    <ul id="navigation">
                                        <li><a href="{{route('user.home')}}">Home</a></li>
                                        <li><a href="{{route('user.findloan')}}"> All Loans </a></li>
                                        <li><a href="{{route('web.about')}}">About</a></li>
                                        
                                        
                                    </ul>
                                </nav>
                            </div>          
                            <!-- Header-btn -->
                            @guest
                            <div class="header-btn d-none f-right d-lg-block">
                                <a href="#" class="btn head-btn1"data-toggle="modal" data-target="#register">Register</a>
                                <a href="#" class="btn head-btn2" data-toggle="modal" data-target="#login">Login</a>
                            </div>
                            @endguest
                            
                            
                            @auth
                                
                           
                           <div class="header-btn d-none f-right d-lg-block">
                                <a href="{{route('user.profile')}}" class="btn head-btn1"> {{auth()->user()->name}}</a>
                                <a href="{{route('user.logout')}}" class="btn head-btn2" > Logout</a>
                            </div>
                            @endauth
                                
                            
                            
                        </div>
                    </div>
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
       </div>
   </div>
    <!-- Header End -->
</header>

<!-- Modal -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"> User Login </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{route('user.login')}}" method="POST">
                @csrf
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="email"    placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1"   name="password"   placeholder="Password">
                </div>
            <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
        
      </div>
    </div>
  </div>

 