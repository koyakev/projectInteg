@extends('layouts.app-master')

@section('content')
	<div>
		@auth
			<h1>Dashboard</h1>
			<h2>Hello</h2>
			@foreach($user as $user)
			<p>{{ $user->username }}</p>
			@endforeach
			<p>Only authenticated users can access this section.</p>
		@endauth
		
		@guest
			<h1>Homepage</h1>
			<p>Please login to view</p>
		@endguest
	</div>
@endsection