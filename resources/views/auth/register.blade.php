@extends('layouts.login')

@section('content')
<div class="container">
    <div id="loginbox" class="mainbox col-md-8 col-md-offset-6 col-sm-8 col-sm-offset-4 loginbox">
        <div class="card card-info " style="padding: 20px">

                <div class="card-headerlogin">{{ __('Register') }}</div>

               <div class="card-body" style="text-align: center">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="input-group margT25 form-group row">
						<span class="input-group-addon">
								<i class="glyphicon glyphicon-user"></i>
							</span> 
                            <!-- <label for="name" class="col-md-3 control-label">{{ __('First Name') }}</label> -->

                            <div class="col-md-12">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus placeholder="Enter your first name">

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
						</div>
						<div class="form-group row">
                            <!-- <label for="name" class="col-md-3 col-form-label text-md-right">{{ __('Last Name') }}</label> -->

                            <div class="col-md-12">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus placeholder="Enter your last name">

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <!-- <label for="email" class="col-md-3 col-form-label text-md-right">{{ __('E-Mail Address') }}</label> -->

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder="Enter your email address">

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
						</div>
					
                        <div class="form-group row">
                            <!-- <label for="password" class="col-md-3 col-form-label text-md-right">{{ __('Password') }}</label> -->

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required autofocus placeholder="Enter your password">

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <!-- <label for="password-confirm" class="col-md-3 col-form-label text-md-right">{{ __('Confirm Password') }}</label> -->

                            <div class="col-md-12">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autofocus placeholder="Re-enter your password">
                            </div>
						</div>
						
						<div class="form-group margT10"> 
						<!-- Button --> 
							<div class="col-sm-12 controls">
                             
                             <button type="submit" class="btn btn-block btn-primary">
                                    {{ __('Register') }}
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
