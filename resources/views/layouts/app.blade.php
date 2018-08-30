<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- CSRF Token -->
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<title>{{ config('app.name', 'Laravel') }}</title>
		<!-- Scripts -->
		<script src="{{ asset('js/app.js') }}" defer></script>
		<!-- Fonts -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css">
		<!-- Styles -->
		<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	</head>
	<body>
		<div id="app">
			<nav>
				<div class="nav-admin">
					<ul>
						<li><a href="{{ url('/') }}">Accueil</a></li>
						<li><a href="javascript:;">Stage</a></li>
						<li><a href="javascript:;">Formation</a></li>
						<li><a href="javascript:;">Contact</a></li>
					</ul>
					<ul>
						@guest
						<li class="btn-connect">
							<a href="{{ route('login') }}">
								<span><i class="icon-login"></i></span>
								{{ __('Connexion') }}
							</a>
						</li>
						<li class="btn-register">
							<a href="{{ route('register') }}">
								<span><i class="icon-user-follow"></i></span>
								{{ __('Inscription') }}
							</a>
						</li>
						@else
						<li class="user-connected">
							<a class="user" href="javascript:;">
								<span><i class="icon-user"></i></span>
								{{ Auth::user()->name }}
							</a>
							<div class="dropdown">
								<a 	class="link-logout" 
									href="{{ route('logout') }}"
									onclick="event.preventDefault();document.getElementById('logout-form').submit();">
									<span><i class="icon-logout"></i></span>
									{{ __('Logout') }}
								</a>
								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									@csrf
								</form>
							</div>
						</li>
						@endguest
					</ul>
				</div>
			</nav>
			<main class="content">
				@yield('content')
			</main>
		</div>
		<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
		<script src="{{ asset('js/main.js') }}" defer></script>
	</body>
</html>
