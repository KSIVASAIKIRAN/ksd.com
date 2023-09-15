@extends('ke.header')

@section('content')

<div class="about-slide">
	<h2>Login</h2>
	<a href="{{ url('/') }}">Home</a> <span>/</span> <a href="url('kelogin')">Login</a>
</div>
<div class="inner-content">
	<div class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="login">
						<div class="container-fluid">
							<div class="container">
							<form class="form-horizontal"  method="POST" name="loginform" id="loginform" action="{{ route('login') }}">
                        {{ csrf_field() }}
								<div class="row login-box">
									<div class="col-md-12 col-sm-12">
										<label>Email id</label>
										<input type="text" name="email" id="email"  value="{{ old('email') }}" maxlength="150" placeholder="Enter Email id" autocomplete="off">
										 @if ($errors->has('email'))
                                    <span class="help-block">
                                        <span style="color:red;font-size: 13px;">{{ $errors->first('email') }}</span>
                                    </span>
                                @endif
									</div>
									<div class="col-md-12 col-sm-12">
										<label>Password</label>
										<input type="password" name="password" id="password" maxlength="60" placeholder="Enter Password" autocomplete="off">
										{{-- <input type="hidden" name="password" id="password1" /> --}}
										 @if ($errors->has('password'))
                                    <span class="help-block">
                                        <span style="color:red;font-size: 13px;">{{ $errors->first('password') }}</span>
                                    </span>
                                @endif
									</div>
									<div class="col-md-12 col-sm-12">
										<a href="{{ url('forgotpassword') }}">Forgot Password?</a>
									</div>
									<div class="col-md-12 col-sm-12">
										<input type="submit" id="submit"  value="Login">
									</div>
								</div>
								</form>
							</div>
						</div>

					</div>
					
					

				</div>
			</div>
		</div>
	</div>	
</div>





@endsection