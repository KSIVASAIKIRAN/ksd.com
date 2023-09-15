@extends('ke.header')

@section('content')

<style>

.pgallery a:hover{
    color: #000000;
}
div.gallery {
  border: 1px solid #ccc;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}

* {
  box-sizing: border-box;
}

.responsive {
  padding: 0 6px;
  float: left;
  width: 24.99999%;
}

@media only screen and (max-width: 700px) {
  .responsive {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsive {
    width: 100%;
  }
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}


</style>

<div class="about-slide">
	<h2>Gallery</h2>
	<a href="{{ url('/') }}">Home</a> <span>/</span> <a href="{{ url('kephotogallery') }}">Photo Gallery</a>
</div>
<div class="inner-content">
	<div class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2>Image Gallery</h2>
					


<div class="row">
		
		
		
	
<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img_5terre.jpg">
      <img src="{{URL::asset('public/tsfdc/images/ke6.jpg') }}" alt="" width="600" height="400">
    </a>
    <div class="desc"></div>
  </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img_forest.jpg">
      <img src="{{URL::asset('public/tsfdc/images/ke6.jpg') }}" alt="" width="600" height="400">
    </a>
    <div class="desc"></div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img_lights.jpg">
      <img src="{{URL::asset('public/tsfdc/images/ke5.jpg') }}" alt=" " width="600" height="400">
    </a>
    <div class="desc"></div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img_mountains.jpg">
      <img src="{{URL::asset('public/tsfdc/images/ke6.jpg') }}" alt="" width="600" height="400">
    </a>
    <div class="desc"></div>
  </div>
</div>

<div class="clearfix"></div>

<div style="padding:6px;">
  </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img_5terre.jpg">
      <img src="{{URL::asset('public/tsfdc/images/ke7.jpg') }}" alt=" " width="600" height="400">
    </a>
    <div class="desc"></div>
  </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img_forest.jpg">
      <img src="{{URL::asset('public/tsfdc/images/ke5.jpg') }}" alt="" width="600" height="400">
    </a>
    <div class="desc"></div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img_lights.jpg">
      <img src="{{URL::asset('public/tsfdc/images/ke6.jpg') }}" alt="" width="600" height="400">
    </a>
    <div class="desc"></div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img_mountains.jpg">
      <img src="{{URL::asset('public/tsfdc/images/ke7.jpg') }}" alt="" width="600" height="400">
    </a>
    <div class="desc"></div>
  </div>
</div>

<div class="clearfix"></div>

<div style="padding:6px;">
  <p></p>
</div>


					
				</div>
			</div>
		</div>
	</div>	
					</div>
					{{--<script src="https://cdn.commoninja.com/sdk/latest/commonninja.js" defer></script>
					<div class="commonninja_component pid-9d2979b5-3bc3-4c79-8731-4ace0b529988"></div>--}}

@endsection