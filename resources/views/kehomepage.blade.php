@extends('ke.header')



@section('content')

@include('ke.slider')

<style>
video {
  max-width: 50%;
}
.card:hover {
  transform: scale(1.1);
}
.card {
  box-shadow: 0 2px 4px 0 rgba(22, 22, 26, 0.18);
  border-radius: 0;
  border: 0;
}
.middle {text-align:center; color: #a64dff;   font-style: oblique;font-variant: small-caps; }
.middle:hover {
color: #FF00FF;}
</style>


<div class="c-section">
	<div class="container-fluid">
		<div class="container">
<h3 class="middle" > Our Other Channels </h3>

		   
			<div class="row" style="margin-left: 0px;margin-right: 0px;">
			

			
<div class ="row">
	<div class ="col">
		<div class="card" style="width: 18rem;">		
			<a href="https://youtube.com/@yedavalu?si=8fX53-xkWF50m77l" target="_blank"><img src="{{URL::asset('public/tsfdc/images/e1.jpeg') }}"></a>
		
		</div>
	</div>	

	<div class ="col">
		<div class="card" style="width: 18rem;">		
			<a href="https://www.youtube.com/@KnowledgeRootsss" target="_blank"><img src="{{URL::asset('public/tsfdc/images/k1.jpeg') }}"></a>
		
		</div>
	</div>			

	<div class ="col">
		<div class="card" style="width: 18rem;">		
			<a href="https://www.youtube.com/@whistlesongranga4400" target="_blank"><img src="{{URL::asset('public/tsfdc/images/w1.jpeg') }}"></a>
		
		</div>
	</div>				
				
				
	<div class ="col">
		<div class="card" style="width: 18rem;">		
				<a href="https://youtube.com/@Vaareva?si=XYiDMso85zfGAAo5" target="_blank"><img src="{{URL::asset('public/tsfdc/images/v1.jpeg') }}"></a>
		
		</div>
	</div>				
				
	</div>			
						
			</div>
		</div>
	</div>
	
	<br><br>
</div> 


@endsection