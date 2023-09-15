@extends('ke.header')

@section('content')

<div class="about-slide">
	<h2>Feedback</h2>
	<a href="{{ url('/') }}">Home</a> <span>/</span> <a href="{{ url('kefeedback') }}">Feedback</a>
</div>
<div class="inner-content">
	<div class="container-fluid">
		<div class="container">
			<div class="row">
				
					<div class="col-md-12 col-sm-12">
							<form>
                        <div class="form-row">
								<div class="form-group col-md-6">
								  <label for="inputEmail4">Name</label>
								   <input type="text" class="form-control" maxlength="30" name="name" id="name" value="" placeholder="Enter Name">
								</div>
								<div class="form-group col-md-6">
								  <label for="inputPassword4">Mobile No </label>
								 <input type="text" class="form-control" maxlength="10" id="mobile" name="mobile" value="" placeholder="Mobile Number" onkeyup="removeAlphaAndZero(this)">
								</div>
							  </div>
							  <div class="form-row">
								<div class="form-group col-md-6">
								  <label for="inputEmail4">Email </label> 
								  <input id="email" type="email" class="form-control " name="email" value="" autocomplete="email" maxlength="150">
								   								</div>
							 
								 
							  </div>	
							  
							  <div class="form-group">
								<label for="inputAddress2">Message</label>
								<textarea class="form-control" name="message" id="message" maxlength="2000" rows="4"></textarea>
							  </div>
							  
							 
							  <button type="submit" id="submit" class="btn btn-primary appoint-send" disabled>Send Message</button>
							</form>
						
						
						</div>
					

				</div>
			</div>
		</div>
	</div>	
</div>

@endsection