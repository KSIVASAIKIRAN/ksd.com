@extends('ke.header')

@section('content')

<div class="about-slide">
	<h2>About Us</h2>
	<a href="{{ url('/') }}">Home</a> <span>/</span> <a href="{{ url('keaboutus') }}">About Us</a>
</div>
<div class="inner-content">
	<div class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2>INTRODUCTION:</h2>
					<p> The KANDALA ENTERTAINMENT youtube channel started in 2017.We upload lot of videos for Entertainment Purpose</p>
					<h2>OBJECTIVES</h2>
					<p>Mainly Entertainment Purpose</p>
					<ul>
						<li>Comedy Videos</li>
						<li>Short Videos</li>
						<li>Educational Videos</li>
					</ul>
					
				</div>
			</div>
		</div>
	</div>	
</div>

@endsection