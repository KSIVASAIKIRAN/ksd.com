<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">	
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial scale=1.0">
<link rel="shortcut icon" type="image/x-icon" href="{{URL::asset('public/images/favicon.png')}}"/>
<link href="{{URL::asset('public/tsfdc/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
 <link href="{{URL::asset('public/tsfdc/css/style.css')}}" rel="stylesheet" type="text/css"> 
<link href="{{URL::asset('public/tsfdc/css/responsive.css')}}" rel="stylesheet" type="text/css">
<link href="{{URL::asset('public/tsfdc/css/all.css')}}" rel="stylesheet" type="text/css">	
<link href="{{URL::asset('public/tsfdc/css/owl-carousel.css')}}	" rel="stylesheet">
<link href="{{URL::asset('public/tsfdc/css/owl-theme.css')}}" rel="stylesheet">	
<link href="{{ URL::asset('public/tsfdc/css/gallery-style.css') }}" type="text/css" rel="stylesheet"> 
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />	

	
<title>Kandala Entertainment</title>	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"crossorigin="anonymous"></script>

</head>
<body>
<style>
.login-bottom ul li {float: left;
    background: #7C941A;
    width: 30px;
    height: 30px;
    text-align: center;
    margin-left: 5px;
    color: #fff;
    padding-top: 3px;
    font-weight: 600; cursor:pointer} 
.logo {
	 padding-top:0px;
}
body  {
  
  background-color:  #ebe6e6;
}	

#time {
            widht:22px;	       
		   color:#7C941A;
		   padding-left:505px;
		   
}
#time:hover {
color: blue;}
.whatsapp{
	padding-right:20px;
	width:160px;
	height:0px;
	margin-left:500px;
	margin-bottom:30px;
	
}







</style>
<div class="banner">	
<div class="header-top">
	<div class="container-fluid">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-lg-6 col-md-6 col-sm-12">
				<div class="logo">
					<img src="{{URL::asset('public/tsfdc/images/lelogo8.png') }}"> <a href="https://youtube.com/@KandalaEntertainment?si=9u9jrZfwdu_FTsV8" target="_blank"> </a>
				</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 "> 
				
					<div class="login-top">
						<a href="tel:9533173468"><i class="fas fa-mobile-alt"></i> 9533173468 </a>
					<a href="mailto:kavesira@gmail"><i class="fas fa-envelope"></i> kavesira@gmail.com</a>	
					</div>
						<div id="time">
						{{--	@php(date_default_timezone_set("Asia/Kolkata"))
						<p style="color:#7C941A;">{!! date('F j, Y, g:i a') !!}</p>	--}}
						
					{{--	<h1> <span id="time"> </span></h1>
<script src="index.js">   </script>--}}
						
													
					
					</div>
				     

	
					
					<div class="login-bottom">
					
					<ul>
					<li style="background:none;"><a href="https://m.facebook.com/KandalaCreatives" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
					<li style="background:none;"><a href="" target="_blank"><i class="fab fa-instagram"></i></a></li>
					<li id="btn-increase">A+  </li>
					<li id="btn-orig">A</li>
					<li id="btn-decrease">A-</li>
					
						</ul>
	
<!--
						<span class="l-button">
						<a href="#">Login</a>
						</span>
-->
					</div>	

				</div>
				
			</div>
		</div>
	</div>	
			
</div>
<div class="menu">
	<div class="container-fluid">
		<div class="container">
<div class="bgcolor">
			<nav class="navbar navbar-expand-lg navbar-light bg-light my-color">
<!--  <a class="navbar-brand" href="#">Menu</a>-->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link inde-font {{ ((Request::segment(1) == '') ? 'active' : '' ) }}" href="{{ url('/') }}">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link inde-font {{ ((Request::segment(1) == 'keaboutus') ? 'active' : '' ) }}" href="{{ url('keaboutus ') }}">About US</a>
      </li>
		<li class="nav-item dropdown ">
        <a class="nav-link dropdown-toggle inde-font  @if(Request::segment(1) == 'keshortvideos' || Request::segment(1) == 'kelivestreaming' || Request::segment(1) == 'keoreybhamardhi' || Request::segment(1) == 'tsfdcteak' || Request::segment(1) == 'tsfdccashew' || Request::segment(1) == 'tsfdcsubabul' ) {{ 'active' }} @else {{ '' }} @endif " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
          Our Videos
        </a>
        <div class="dropdown-menu inde-font" aria-labelledby="navbarDropdown">
          <a class="dropdown-item inde-font" href="{{ url('keshortvideos') }}">Our Short Videos</a>
          <a class="dropdown-item inde-font" href="{{ url('kelivestreaming') }}">Our Live Streamings</a>
			<a class="dropdown-item inde-font" href="{{ url('keoreybhamardhi') }}">ఒరేయ్ బామర్ది వీడియోలు</a>
				
		<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle inde-font @if(Request::segment(1) == 'kephotogallery' || Request::segment(1) == 'tsfdcpressgallery' || Request::segment(1) == 'keutubevideolinks' ) {{ 'active' }} @else {{ '' }} @endif " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
         Gallery
        </a>
        <div class="dropdown-menu inde-font" aria-labelledby="navbarDropdown">
		         <a class="dropdown-item inde-font" href="{{ url('kephotogallery') }}">Photo Gallery</a>
		
			<a class="dropdown-item inde-font" href="{{ url('keutubevideolinks') }}">Youtube Video Playlsit Links</a>
			
          
        </div>
      </li>
		<li class="nav-item">
        <a class="nav-link inde-font  @if(Request::segment(1) == 'kecontactus') {{ 'active' }} @else {{ '' }} @endif" href="{{ url('kecontactus') }}">Contact Us</a>
		</li>
		<li class="nav-item dropdown">
        <a class="nav-link inde-font dropdown-toggle @if(Request::segment(1) == 'tsfdcorganisation' || Request::segment(1) == 'tsfdcbeedileaftrade' || Request::segment(1) == 'tsfdcconsultancyservices' || Request::segment(1) == 'tsfdclocation' || Request::segment(1) == 'tsfdcanualreport' || Request::segment(1) == 'tsfdcbudget' || Request::segment(1) == 'tsfdcrelatedlinks' || Request::segment(1) == 'kefeedback' ) {{ 'active' }} @else {{ '' }} @endif" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
          Feedback
        </a>
		  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
      
			<a class="dropdown-item inde-font" href="{{ url('kefeedback') }}">Feedback </a>
			
			
          
        </div>
      </li>

		
		
    </ul>
     
	 <div class="whatsapp">
       <a aria-label="Chat on WhatsApp" href="https://wa.me/919533173468" target="_blank">  <img alt="Chat on WhatsApp" src="{{URL::asset('public/tsfdc/images/WhatsAppButtonGreenSmall.png')}}" />
                     <a />
	 </div> 
 

    
  </div>
</nav>




			
		</div>
	</div>
	
</div>	

</div>
</div>
