
<!doctype html>
<html lang="en">
<head>
<title>Loan Management System </title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{url('/css/login.css')}}">
<script nonce="4b64aade-3d87-41dc-8dfc-ce81993ab26b">(function(w,d){!function(e,f,g,h){e.zarazData=e.zarazData||{};e.zarazData.executed=[];e.zaraz={deferred:[],listeners:[]};e.zaraz.q=[];e.zaraz._f=function(i){return function(){var j=Array.prototype.slice.call(arguments);e.zaraz.q.push({m:i,a:j})}};for(const k of["track","set","debug"])e.zaraz[k]=e.zaraz._f(k);e.zaraz.init=()=>{var l=f.getElementsByTagName(h)[0],m=f.createElement(h),n=f.getElementsByTagName("title")[0];n&&(e.zarazData.t=f.getElementsByTagName("title")[0].text);e.zarazData.x=Math.random();e.zarazData.w=e.screen.width;e.zarazData.h=e.screen.height;e.zarazData.j=e.innerHeight;e.zarazData.e=e.innerWidth;e.zarazData.l=e.location.href;e.zarazData.r=f.referrer;e.zarazData.k=e.screen.colorDepth;e.zarazData.n=f.characterSet;e.zarazData.o=(new Date).getTimezoneOffset();if(e.dataLayer)for(const r of Object.entries(Object.entries(dataLayer).reduce(((s,t)=>({...s[1],...t[1]})))))zaraz.set(r[0],r[1],{scope:"page"});e.zarazData.q=[];for(;e.zaraz.q.length;){const u=e.zaraz.q.shift();e.zarazData.q.push(u)}m.defer=!0;for(const v of[localStorage,sessionStorage])Object.keys(v||{}).filter((x=>x.startsWith("_zaraz_"))).forEach((w=>{try{e.zarazData["z_"+w.slice(7)]=JSON.parse(v.getItem(w))}catch{e.zarazData["z_"+w.slice(7)]=v.getItem(w)}}));m.referrerPolicy="origin";m.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(e.zarazData)));l.parentNode.insertBefore(m,l)};["complete","interactive"].includes(f.readyState)?zaraz.init():e.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,0,"script");})(window,document);</script></head>
<body>
<section class="ftco-section">
<div class="container">
<div class="row justify-content-center">
<div class="col-md-6 text-center mb-5">
<h2 class="heading-section"> Loan Management System </h2>
</div>
</div>
<div class="row justify-content-center">
<div class="col-md-12 col-lg-10">
<div class="wrap d-md-flex">
<div class="img" style="background-image: url(images/bg-1.jpg);">
</div>
<div class="login-wrap p-4 p-md-5">
<div class="d-flex">
<div class="w-100">
<h3 class="mb-4">Sign In</h3>
</div>

</div>
<form action="{{route('login.store')}}" class="signin-form" method="POST">
    @csrf


@if(session()->has('message'))
    <p class="alert alert-danger">{{session()->get('message')}}</p>
@endif

<div class="form-group mb-3">
<label class="label" for="name"> Email</label>
<input type="text" class="form-control"  name="email"  placeholder=" Enter Email" required>
</div>
<div class="form-group mb-3">
<label class="label" for="password">Password</label>
<input type="password" class="form-control"  name="password"    placeholder="Password" required>
</div>
<div class="form-group">
<button type="submit" class="form-control btn btn-primary rounded submit px-3">LOG IN</button>
</div>

</form>

</div>
</div>
</div>
</div>
</div>
</section>
<script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993" integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA==" data-cf-beacon='{"rayId":"769e22662c1cba56","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2022.11.0","si":100}' crossorigin="anonymous"></script>
</body>
</html>
