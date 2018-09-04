<!doctype html>
<html lang="{{ app()->getLocale() }}">
    	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Laravel</title>

		<!-- Appel des Styles -->
		<link rel="stylesheet" href="{{asset('css/app.css')}}">

		<!-- Importation de SimpleLineIcons -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">
   	</head>
    	<body>
    		<div id="app">
			<nav>
    				<div class="nav-content">
    					<ul>
    						<li>
    							<a href="{{ url('/') }}">Accueil</a>
    						</li>
    						<li>
    							<a href="/stage">Stage</a>
    						</li>
    						<li>
    							<a href="/formation">Formation</a>
    						</li>
    						<li>
    							<a href="/contact">Contact</a>
    						</li>
    					</ul>
    					<ul>
						@guest
						<li class="btn-connect">
							<a href="{{ route('login') }}">
								<span><i class="fas fa-sign-in-alt"></i></span>
								{{ __('Connexion') }}
							</a>
						</li>
						<!-- <li class="btn-register">
							<a href="{{ route('register') }}">
								<span><i class="fas fa-user-plus"></i></span>
								{{ __('Inscription') }}
							</a>
						</li> -->
						@else
						<li class="user-connected">
							<a class="user" href="javascript:;">
								<span><i class="far fa-user"></i></span>
								{{ Auth::user()->name }}
							</a>
							<div class="dropdown">
								<a 	class="link-dashboard" 
									href="{{ url('dashboard') }}">
									<span><i class="fas fa-table"></i></span>
									{{ __('Dashboard') }}
								</a>	
								<hr>
								<a 	class="link-logout" 
									href="{{ route('logout') }}"
									onclick="event.preventDefault();document.getElementById('logout-form').submit();">
									<span><i class="fas fa-sign-out-alt"></i></span>
									{{ __('Déconnexion') }}
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
    			<section class="content">
				@yield('content')
    			</section>
			<footer>
				<div class="footer-content">
    					<ul>
    						<li>
    							<a href="{{ url('/') }}">Accueil</a>
    						</li>
    						<li>
    							<a href="javascript:;">Stage</a>
    						</li>
    						<li>
    							<a href="javascript:;">Formation</a>
    						</li>
    						<li>
    							<a href="javascript:;">Contact</a>
    						</li>
    					</ul>
    				</div>
			</footer>
		</div>

		<!-- Appels des Scripts -->
		<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
		<script src="{{ asset('js/main.js') }}" defer></script>
    		<script src="{{asset('js/app.js')}}"></script>
    	</body>
</html>
