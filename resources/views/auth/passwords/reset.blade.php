@extends('frontendpages.header')

@section('content')
 
  <style>
  .form-heading h4  {color:#00a923; text-align:center; padding-bottom:20px; font-size:24px;}
  .form-forget a    { color:#00a923;}
.field-icon {
  float: right;
  margin-right: 10px;
  margin-top: -26px;
  position: relative;
  z-index: 2;
}
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

  <form class="form-horizontal" method="POST" action="{{ route('resetPassword') }}">
                        {{ csrf_field() }}

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}" autocomplete="off" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-12">
                                <input id="password-field" type="password" class="form-control" name="password" autocomplete="off" required>
                                 <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
                            <div class="col-md-12">
                                <input id="password-field1" type="password" class="form-control" name="password_confirmation" autocomplete="off" required>
                                <span toggle="#password-field1" class="fa fa-fw fa-eye field-icon toggle-password-confirm"></span>
                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Reset Password
                                </button>
                            </div>
                        </div>
                    </form>


               </div>
        </div>
         
      </div>
      </div>
      </div>
</div>    
      
 
 


    <script>
// $(document).ready(function() {
//   $("#login").validate({
//     rules: {
//       // personname : {
//       //   required: true,
//       //   minlength: 3,
//       //   maxlength:30,

//       // },
//       email : {
//         required: true,
//         email:true,
        
//       },
//     },errorElement: "span",
//     messages : {
//        email: {
//     required: "Please enter your email",
//     email: "The email should be in the format: abc@domain.com"
//   },
// }
   
//   });
// });

 



 $(".toggle-password").click(function() {
 
  $(this).toggleClass("fa-eye fa-eye-slash");
  var input = $($(this).attr("toggle"));
  if (input.attr("type") == "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
});
 $(".toggle-password-confirm").click(function() {
 
  $(this).toggleClass("fa-eye fa-eye-slash");
  var input = $($(this).attr("toggle"));
  if (input.attr("type") == "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
});
  

 </script>
 
 
 
 
 
@endsection

