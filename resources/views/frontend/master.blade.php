<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
         <title>Loan Management System </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

		<!-- CSS here -->
            <link rel="stylesheet" href="{{url('/frontend/css/bootstrap.min.css')}}">
            <link rel="stylesheet" href="{{url('/frontend/css/bootstrap.min2.css')}}">
            <link rel="stylesheet" href="{{url('/frontend/css/flaticon.css')}}">
            <link rel="stylesheet" href="{{url('/frontend/css/ranges.css')}}">
            <link rel="stylesheet" href="{{url('/frontend/css/slicknav.css')}}">
            <link rel="stylesheet" href="{{url('/frontend/css/animate.css')}}">
            <link rel="stylesheet" href="{{url('/frontend/css/poopup.css')}}">
            <link rel="stylesheet" href="{{url('/frontend/css/fontawesome_min.css')}}">
            <link rel="stylesheet" href="{{url('/frontend/css/icons.css')}}">
            <link rel="stylesheet" href="{{url('/frontend/css/slick.css')}}">
            <link rel="stylesheet" href="{{url('/frontend/css/select.css')}}">
            <link rel="stylesheet" href="{{url('/frontend/css/style.css')}}">

            @notifyCss
            <style type="text/css"> .notify{ z-index: 1000000; margin-top: 5%; } </style>
   </head>

   <body>
    <!-- Preloader Start -->
    {{-- <div id="preloader-active">-
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/logo.png" alt="">
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Preloader Start -->
    

@include('frontend.fixed.header')

@include('notify::components.notify')   

    <main>

        @yield('Content')
        



    </main>
    



@include('frontend.fixed.footer')
 <!-- Modal -->
 <div class="modal fade " id="register" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"> Registration </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{route('user.registration')}}" method="POST" enctype="multipart/form-data">
                @csrf
                
                <div class="form-group">
                    <label for="user_name"> User Name </label>
                    <input type="text" class="form-control" id="user_name" name="user_name"    placeholder="Enter Your Name">
                  </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="user_email"  placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1"   name="password" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="contact"> Contact </label>
                    <input type="text" class="form-control" id="contact"  name="contact"   placeholder="Enter Your Phone Number">
                </div>

                <div class="form-group">
                    <label for="contact"> Image </label>
                    <input type="file" class="form-control" id="contact"  name="image"   placeholder="Enter Your Phone Number">
                </div>


            <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
         <div class="modal-footer">
          
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>


  <!-- JS here -->
	
		<!-- All JS Custom Plugins Link Here here -->
        <script src="https://technext.github.io/jobfinderportal/assets/js/vendor/modernizr-3.5.0.min.js"></script>
		<!-- Jquery, Popper, Bootstrap -->
		<script src="https://technext.github.io/jobfinderportal/assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="https://technext.github.io/jobfinderportal/assets/js/popper.min.js"></script>
        <script src="https://technext.github.io/jobfinderportal/assets/js/bootstrap.min.js"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="https://technext.github.io/jobfinderportal/assets/js/jquery.slicknav.min.js"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="https://technext.github.io/jobfinderportal/assets/js/owl.carousel.min.js"></script>
        <script src="https://technext.github.io/jobfinderportal/assets/js/slick.min.js"></script>
        <script src="https://technext.github.io/jobfinderportal/assets/js/price_rangs.js"></script>
        
		<!-- One Page, Animated-HeadLin -->
        <script src="https://technext.github.io/jobfinderportal/assets/js/wow.min.js"></script>
		<script src="https://technext.github.io/jobfinderportal/assets/js/animated.headline.js"></script>
        <script src="https://technext.github.io/jobfinderportal/assets/js/jquery.magnific-popup.js"></script>

		<!-- Scrollup, nice-select, sticky -->
        <script src="https://technext.github.io/jobfinderportal/assets/js/jquery.scrollUp.min.js"></script>
        <script src="https://technext.github.io/jobfinderportal/assets/js/jquery.nice-select.min.js"></script>
		<script src="https://technext.github.io/jobfinderportal/assets/js/jquery.sticky.js"></script>
        
        <!-- contact js -->
        <script src="https://technext.github.io/jobfinderportal/assets/js/contact.js"></script>
        <script src="https://technext.github.io/jobfinderportal/assets/js/jquery.form.js"></script>
        <script src="https://technext.github.io/jobfinderportal/assets/js/jquery.validate.min.js"></script>
        <script src="https://technext.github.io/jobfinderportal/assets/js/mail-script.js"></script>
        <script src="https://technext.github.io/jobfinderportal/assets/js/jquery.ajaxchimp.min.js"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="https://technext.github.io/jobfinderportal/assets/js/plugins.js"></script>
        <script src="https://technext.github.io/jobfinderportal/assets/js/main.js"></script>
        
        @notifyJs
        
        



    </body>
</html>