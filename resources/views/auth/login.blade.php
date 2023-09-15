 

@extends('frontendpages.header')

@section('content')
 
  <style>
  .form-heading h4	{color:#00a923; text-align:center; padding-bottom:20px; font-size:24px;}
  .form-forget a	{ color:#00a923;}
.field-icon {
  float: right;
  margin-right: 10px;
  margin-top: -26px;
  position: relative;
  z-index: 2;
}
.selsam { color: #6c757d !important; }
span.error{ color: #cc0000 } 
span.error-star{ color: #cc0000 } 


</style>
    @php ( $qry =  DB::table('sitesetting')->where('set_id', 1)->first() ) 

 <div class="inner-content">
 <div class="site-container">  
 	<div style="padding: 20px 30px;">     
        <div class="row">
         <div class="col-md-4">
		  </div> 
        <div class="col-md-4" style="border:1px solid #ccc; padding:10px; border-radius:6px;background: #f0f0f0;">
        	<div class="form-trans">
			
			@if(Session::has('timemsgstatus'))   
		<br/>   
	 @if(Session::get('timemsgstatus') == 'Logout due to Inactive more than 15 Mins')

                    <div class="alert  alert-danger col-md-12">   
                        <a href="#" class="close" data-dismiss="alert" arial-lable="close">&times;</a>
                        {{Session::get('timemsgstatus')}}
                    </div>
                @else
                    <div class="alert alert-danger col-md-12">
                        <a href="#" class="close" data-dismiss="alert" arial-lable="close">&times;</a>
                        {{Session::get('timemsgstatus')}}
                    </div>

                @endif
             @endif 
			
			
              @if(Session::has('msgstatus'))
                <br>
                @if(Session::get('msgstatus') == 'Failed to create')

                    <div class="alert  alert-danger">
                        <a href="#" class="close" data-dismiss="alert" arial-lable="close">&times;</a>
                        {{Session::get('msgstatus')}}
                    </div>
                @else
                    <div class="alert alert-success">
                        <a href="#" class="close" data-dismiss="alert" arial-lable="close">&times;</a>
                        {{Session::get('msgstatus')}}
                    </div>

                @endif
                <br>
            @endif
        	<form class="form-horizontal"  method="POST" name="loginform" id="loginform" action="{{ route('login') }}">
                        {{ csrf_field() }}
                  
				  
				  <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            
				  
				  
                  <div class="row form-form">
                  	<div class="col-md-12 form-heading">
                    	<h4>Login</h4>
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                        <label> Email <span class="error-star"> * </span></label>
                         <input id="email" type="email" class="form-control selsam" name="email" value="{{ old('email') }}" maxlength="150" autocomplete="off" >
						  @if ($errors->has('email'))
                                    <span class="help-block">
                                        <span style="color:red;font-size: 13px;">{{ $errors->first('email') }}</span>
                                    </span>
                                @endif
                      </div>
                    </div>
					
					 
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Password <span class="error-star"> * </span></label>
                         
						<input id="password-field" type="password" class="form-control selsam" maxlength="60" autocomplete="off" >
						 <input type="hidden" name="password" id="password1" /> 
						 <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <span style="color:red;font-size: 13px;">{{ $errors->first('password') }}</span>
                                    </span>
                                @endif
                      </div>
                    </div>
                  </div>
				  
				   <div class="form-group{{ $errors->has('captcha') ? ' has-error' : '' }}">
                      <label for="password" class="col-md-4 control-label">Captcha</label>


                      <div class="col-md-6">
                          <div class="captcha">
                          <span>{!! captcha_img() !!}</span>
                          <button type="button" class="btn btn-success btn-refresh"><i class="fas fa-sync"></i></button>
                          </div>
                          <input id="captcha" type="text" class="form-control selsam" placeholder="Enter Captcha" name="captcha" autocomplete="off">


                          @if ($errors->has('captcha'))
                              <span class="help-block error">
                                  <strong>{{ $errors->first('captcha') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>  
                  <div class="row">
                  	<div class="col-md-12 form-forget text-right">
                    	<a href="{{ url('forgotpassword') }}">Forgot Password?</a>
                    </div>
                  </div>
                
              </div>
              <div class="text-center">
                <button type="submit" id="submit" class="btn btn-fill btn-success form-log">Login</button>
              </div>
			  
			   </form>
               </div>
        </div>
		 <div class="col-md-4">
		  </div> 
      </div>
      </div>
      </div>
</div>	
 
 
@include('supervalidation')

<script>
  
 $(".toggle-password").click(function() {
 
  $(this).toggleClass("fa-eye fa-eye-slash");
  var input = $($(this).attr("toggle"));
  if (input.attr("type") == "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
}); 

</script>

<script type="text/javascript">


$(".btn-refresh").click(function(){
	
  $.ajax({
     type:'GET',
     url:'refresh_captcha',
     success:function(data){
        $(".captcha span").html(data.captcha);
     }
  });
});


</script>

<script>

$( document ).ready(function() {

	$( "#submit" ).click(function() {
		
		var pwd = $('#password-field').val();
         $('#password1').val(btoa(pwd));	

	}); 
    
});
</script>
 
 
 
 
 
@endsection
