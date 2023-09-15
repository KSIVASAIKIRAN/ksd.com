@extends('ke.header')

@section('content')
<style>
video {
  max-width: 100%;
}
.card:hover {
  transform: scale(1.1);
}
.card {
  box-shadow: 0 4px 6px 0 rgba(22, 22, 26, 0.18);
  border-radius: 0;
  border: 0;
}

</style>
<div class="about-slide">
	<h2>Live Streaming</h2>
	<a href="{{ url('/') }}">Home</a> <span>/</span> <a href="#"></a><span>  </span> <a href="{{ url('kelivestreaming') }}">Live Streaming</a>
</div>
<div class="inner-content">
	<div class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2> Live Streaming</h2>
					
		
		
				

<div class ="row">
 <div class ="col">
    <div class="card" style="width: 18rem;">		
	 <iframe width="320" height="245" src="https://www.youtube.com/embed/qvyoPCQaN1w?si=T48_TQB78v2XGTan">
     </iframe>	
	</div>
 </div>	
<div class ="col">
		<div class="card" style="width: 18rem;">		

		<iframe width="320" height="245" src="https://www.youtube.com/embed/-Iam3AT2YQ4?si=QVkvQ2Hylebl9wMI">
		</iframe>
		</div>
</div>


<div class ="col">
	<div class="card" style="width: 18rem;">
		<iframe width="320" height="245" src="https://www.youtube.com/embed/sI9UAcY6yGU?si=gBmeE4Elh7FBPgc0">
		</iframe>
	</div>
</div>

<div class ="col">
	<div class="card" style="width: 18rem;">
		<iframe width="320" height="245" src="https://www.youtube.com/embed/3k9GxPL3oeM?si=z9Dkjf9YNBy991-5">
		</iframe>				
	</div>
</div>					
					
</div>
  
</div>				
					
					
					
					

				</div>
			</div>
		</div>
	</div>	
</div>

@endsection