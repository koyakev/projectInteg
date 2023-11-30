@extends('layouts.auth-master')

@section('content')
	<form method="post" action="{{ route('login.perform') }}">
		<input type="hidden" name="_token" value="{{ csrf_token() }}" />
		<img src="{!! url('images/bootstrap-logo.svg') !!}" width="72" height="57">
		
		<h1>Login</h1>
		
		@include('layouts.partials.messages')
		
		<div>
			<input type="text" name="username" value="{{ old('username') }}" required="required" autofocus>
			<label>Email or Username</label>
			@if ($errors->has('username'))
				<span>{{ $errors->first('username') }}</span>
			@endif
		</div>
		
		<div>
			<input type="password" name="password" value="{{ old('password') }}" required="required" autofocus>
			<label>Password</label>
			@if ($errors->has('password'))
				<span>{{ $errors->first('password') }}</span>
			@endif
		</div>
		
		<button type="submit">Login</button>
		
		@include('auth.partials.copy')
		
	</form>
	
	<a href="{{ route('register.perform') }}">Sign-up</a>
@endsection