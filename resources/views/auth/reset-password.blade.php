<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V4</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{ asset('images/icons/favicon.ico') }}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('fonts/iconic/css/material-design-iconic-font.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/animate/animate.css') }}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/css-hamburgers/hamburgers.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/animsition/css/animsition.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/select2/select2.min.css') }}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/daterangepicker/daterangepicker.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url(https://media.discordapp.net/attachments/994839943144808518/1178935837237448754/bg-01.jpg?ex=6577f48f&is=65657f8f&hm=1354bf2c73aa721ea37b209d3b5f7986265324c8d5b390b3f4c9b50a77f49b6f&=&format=webp&width=898&height=701);">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form class="login100-form validate-form" method="POST" action="{{ route('password.store') }}">
        			@csrf
                    <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">
					<span class="login100-form-title p-b-49">
						Reset Password
					</span>
                 
                  <!-- Email -->
					
                    <div class="wrap-input100 validate-input m-b-23" data-validate = "Email is reauired">
						<span class="label-input100">Email</span>
						<input class="input100" id="email" class="block mt-1 w-full" type="email" name="email" :value="{{ $request->email }}" required autocomplete="email" placeholder="Type your email">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
					</div>
				  <!-- password -->
                   
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" id="password" 
                            type="password"
                            name="password"
                            required autocomplete="current-password"
							 placeholder="Type your password">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
					</div>
                   <!-- confirm password -->
                    <div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Confirm password</span>
						<input class="input100" id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password"
							placeholder="Confirm your password ">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
					</div>
					
					<div class="text-right p-t-8 p-b-31">
						<a href="{{route('password.request')}}">
							Forgot password?
						</a>
						<br>
						<a href="{{route('login')}}" class="txt2">
							Login
						</a>
					</div>
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								{{ __('Reset Password') }}
							</button>
						</div>
					</div>


						
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="{{ asset('vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('vendor/animsition/js/animsition.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('vendor/bootstrap/js/popper.js') }}"></script>
	<script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('vendor/select2/select2.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('vendor/daterangepicker/moment.min.js') }}"></script>
	<script src="{{ asset('vendor/daterangepicker/daterangepicker.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('vendor/countdowntime/countdowntime.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('js/main.js') }}"></script>

</body>
</html>