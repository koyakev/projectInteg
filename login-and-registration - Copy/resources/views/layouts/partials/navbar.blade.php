<header>
<div>
	<div>
		<a href="/">Logo</a>
		
		<ul>
			<li><a href="#">Home</a></li>
			<li><a href="#">Features</a></li>
			<li><a href="#">Pricing</a></li>
			<li><a href="#">FAQs</a></li>
			<li><a href="#">About</a></li>
		</ul>
		
		<form>
			<input type="search">
		</form>
		
		@auth
			{{auth()->user()->name}}
			<div>
				<a href="{{ route('logout.perform') }}">Logout</a>
			</div>
		@endauth
		
		@guest
			<div>
				<a href="{{ route('login.perform') }}">Login</a>
				<a href="{{ route('register.perform') }}">Sign-up</a>
			</div>
		@endguest
		
	</div>
</div>
</header>