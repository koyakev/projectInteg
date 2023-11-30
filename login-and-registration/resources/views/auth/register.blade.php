@extends('layouts.auth-master')

@section('content')
	<form method="post" action="{{ route('register.perform') }}">
		<input type="hidden" name="_token" value="{{ csrf_token() }}" />
		
		<h1>Register</h1>
		
		<div>
			<input type="email" name="email" value="{{ old('email') }}" required="required" autofocus>
			<label>Email Address</label>
			@if($errors->has('email'))
				<span>{{ $errors->first('email') }}</span>
			@endif
		</div>
		
		<div>
			<input type="text" name="username" value="{{ old('username') }}" required="required" autofocus>
			<label>Username</label>
			@if($errors->has('username'))
				<span>{{ $errors->first('username') }}</span>
			@endif
		</div>
		
		<div>
			<input type="password" name="password" value="{{ old('password') }}" required="required" autofocus>
			<label>Password</label>
			@if($errors->has('password'))
				<span>{{ $errors->first('password') }}</span>
			@endif
		</div>
		
		<div>
			<input type="password" name="password_confirmation" value="{{ old('password_confirmation') }}" required="required" autofocus>
			<label>Confirm Password</label>
			@if($errors->has('password_confirmation'))
				<span>{{ $errors->first('password_confirmation') }}</span>
			@endif
		</div>
		
		<button type="submit">Register</button>
		
		@include('auth.partials.copy')
		
	</form>
@endsection