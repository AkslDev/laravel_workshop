@extends('layouts.master')
@section('content')
<div class="login">
	<div class="card">
		<div class="card-header">
			{{ __('Connexion') }}
		</div>
		<div class="card-body">
			<form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
				@csrf
				<div class="form-group row">
					<label for="email">{{ __('Adresse email') }}</label>
					<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
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
					<input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
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
					<button type="submit" class="btn-connect">
						<span><i class="fas fa-sign-in-alt"></i></span>
						{{ __('Connexion') }}
					</button>
					<a class="btn btn-link forget-password" href="{{ route('password.request') }}">{{ __('J\'ai oublié mon mot de passe') }}</a>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection
