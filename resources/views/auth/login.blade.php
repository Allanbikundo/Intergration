@extends('layouts.login')

@section('content')
<div class="container">
	<div id="loginbox" class="mainbox col-md-8 col-md-offset-6 col-sm-8 col-sm-offset-4 loginbox"> 
		<div class="card card-primary" style="padding: 20px"> 
		<div class="card-headerlogin">{{ __('Login') }}</div> 
			<div class="panel-body panel-pad"> 
				<div id="login-alert" class="alert alert-danger col-sm-12 login-alert"></div> 
                    <form id="loginform" class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                        @csrf
						<div class="input-group margT25"> 
							<span class="input-group-addon">
								<i class="glyphicon glyphicon-user"></i>
							</span> 
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder=" Enter your email"> 
                            
                            @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
						</div> 
						<div class="input-group margT25"> 
							<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span> 
                            <input id="login-password" type="password" class="form-control" name="password" placeholder="Enter your password" required autofocus> 
                           
                            @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
						</div> 
						<div class="input-group"> 
							<div class="checkbox"> 
						 
									<input id="login-remember" type="checkbox" name="remember" value="1 {{ old('remember') ? 'checked' : '' }}" > 
                                 
                                <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                </label>
                                    
							</div> 
							
						</div> 
						<div class="forgot-password"> <a href="{{ route('password.request') }}">Forgot password?</a> </div>
						<div class="form-group margT10"> 
						<!-- Button --> 
							<div class="col-sm-12 controls">
                             
                             <button type="submit" class="btn btn-block btn-primary" id="btn-login">
                                    {{ __('Login') }}
                                </button>
							</div> 
						</div> 
						<div class="form-group"> 
							<div class="col-md-12 control"> 
								<div class="no-acc"> 
									Don't have an account! 
									<a href="{{ __('register') }}"> Sign Up Here </a> 									 
								</div> 
							</div> 
						</div> 
					</form> 
				</div> 
			</div> 
		</div> 
	</div>
@endsection
