{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>

 --}}





<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>RegistrationForm</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- LINEARICONS -->
		<link rel="stylesheet" href="regis/fonts/linearicons/style.css">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="regis/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

		<!-- DATE-PICKER -->
		<link rel="stylesheet" href="regis/vendor/date-picker/css/datepicker.min.css">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="regis/css/style.css">
	</head>

	<body>

      <!-- Validation Errors -->
      <x-auth-validation-errors class="mb-4" :errors="$errors" />>

		<div class="wrapper">
			<div class="inner">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                     <h3>Sign Up</h3>
                     <div class="form-row">
						<div class="form-wrapper">
							<label for="name" :value="__('Name')">Name *</label>
							<input id="name"  type="text" name="name" :value="old('name')" required class="form-control" placeholder="Your Name">
						</div>
					</div>
					<div class="form-row">
						<div class="form-wrapper">
							<label for="email" :value="__('Email')">Email *</label>
							<input type="email" name="email" id="email" class="form-control" placeholder="Your Email" :value="old('email')" required>
						</div>
					</div>
					<div class="form-row">
						<div class="form-wrapper">
							<label for="passward" :value="__('Password')">Password *</label>
							<input  class="form-control" id="password" 
							type="password"
							name="password"
							required autocomplete="current-password" placeholder="Password">
						</div>
						
					</div>
                    <div class="form-row">
						<div class="form-wrapper">
							<label for="password_confirmation" :value="__('Confirm Password')">Confirm Password *</label>
							<input  class="form-control" id="password_confirmation"
                            type="password"
                            name="password_confirmation" required placeholder="Confirm Password">
						</div>
						
					</div>
				
       


            
					<button data-text="Sign Up">
						<span>{{ __('Register') }}</span>
					</button>

                    <div class="flex items-center justify-end mt-4">
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>
				</form>
			</div>
		</div>
		
		<script src="regis/js/jquery-3.3.1.min.js"></script>

		<!-- DATE-PICKER -->
		<script src="regis/vendor/date-picker/js/datepicker.js"></script>
		<script src="regis/vendor/date-picker/js/datepicker.en.js"></script>

		<script src="regis/js/main.js"></script>
	</body>
</html>