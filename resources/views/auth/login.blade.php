@extends('layouts.master')
@section('content')
<div class="login gradient">
	<div class="login-content">
		<div class="top-login gradient">
			<h1>Connexion</h1>
		</div>
		<div class="form-login">
			<form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
				@csrf
				<div class="form-group row">
					<label for="email">{{ __('Adresse email') }}</label>
					<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus autocomplete="off" >
					@if ($errors->has('email'))
						<span class="invalid-feedback" role="alert">
							<strong>
								Veuillez saisir une adresse email valide.
							</strong>
						</span>
					@endif
				</div>
				<div class="form-group row">
					<label for="password">{{ __('Mot de passe') }}</label>
					<input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required autocomplete="off" >
					@if ($errors->has('password'))
						<span class="invalid-feedback" role="alert">
							<strong>
								<!-- {{ $errors->first('password') }} -->
								Veuillez saisir un mot de passe valide.

							</strong>
						</span>
					@endif
				</div>
				<div class="form-group row">
					<div class="form-check">
						<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
						<label class="form-check-label" for="remember">{{ __('Se rappeler de moi') }}</label>
					</div>
				</div>
				<div class="form-group row mb-0">
					<button type="submit" class="btn btn-blue btn-normal btn-connect">
						<span><i class="fas fa-sign-in-alt"></i></span>
						{{ __('Connexion') }}
					</button>
					<a class="btn btn-grey btn-normal" href="{{ route('password.request') }}">
						<span><i class="fas fa-question"></i></span>
						{{ __('J\'ai oublié mon mot de passe') }}</a>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection
