{{--@extends('layouts.app') --}}
@extends('frontendpages.header')

@section('content')
<br/>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
 @if(Session::has('usertatus'))
                <br>
                @if(Session::get('usertatus') == 'Failed to create user')

                    <div class="alert  alert-danger">
                        <a href="#" class="close" data-dismiss="alert" arial-lable="close">&times;</a>
                        {{Session::get('usertatus')}}
                    </div>
                @else
                    <div class="alert alert-success">
                        <a href="#" class="close" data-dismiss="alert" arial-lable="close">&times;</a>
                        {{Session::get('usertatus')}}
                    </div>

                @endif
                <br>
            @endif
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Student Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" autocomplete="off" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" autocomplete="off" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						
						<div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                            <label for="address" class="col-md-4 control-label">Address</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control" name="address" value="{{ old('address') }}" autocomplete="off" required>

                                @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						
						<div class="form-group{{ $errors->has('institutionname') ? ' has-error' : '' }}">
                            <label for="institutionname" class="col-md-4 control-label">Institution Name</label>

                            <div class="col-md-6">
                                <input id="institutionname" type="text" class="form-control" name="institutionname" value="{{ old('institutionname') }}" autocomplete="off" required>

                                @if ($errors->has('institutionname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('institutionname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						
						<div class="form-group{{ $errors->has('institutionaddress') ? ' has-error' : '' }}">
                            <label for="institutionaddress" class="col-md-4 control-label">Institution Address</label>

                            <div class="col-md-6">
                                <input id="institutionaddress" type="text" class="form-control" name="institutionaddress" value="{{ old('institutionaddress') }}" autocomplete="off" required>

                                @if ($errors->has('institutionaddress'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('institutionaddress') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						
						
						<div class="form-group{{ $errors->has('studyclass') ? ' has-error' : '' }}">
                            <label for="studyclass" class="col-md-4 control-label">Studying of class</label>

                            <div class="col-md-6">
                                <input id="studyclass" type="text" class="form-control" name="studyclass" value="{{ old('studyclass') }}" autocomplete="off" required>

                                @if ($errors->has('studyclass'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('studyclass') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						
						

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" autocomplete="off" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="off" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
