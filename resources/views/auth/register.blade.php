@extends('layouts.master')
@section('content')
<div class="register">
	<div class="card">
		<div class="card-header">
			{{ __('Inscription') }}
		</div>
		<div class="card-body">
			<form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
				@csrf
				<div class="form-group row">
					<label for="name" class="col-form-label text-md-right">{{ __('Nom') }}</label>
					<input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
					@if ($errors->
					has('name'))
					<span class="invalid-feedback" role="alert"><strong>{{ $errors->first('name') }}</strong></span>
					@endif
				</div>
				<div class="form-group row">
					<label for="email" class="col-form-label text-md-right">{{ __('Adresse email') }}</label>
					<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
					@if ($errors->
					has('email'))
					<span class="invalid-feedback" role="alert"><strong>{{ $errors->first('email') }}</strong></span>
					@endif
				</div>
				<div class="form-group row">
					<label for="password" class="col-form-label text-md-right">{{ __('Mot de passe') }}</label>
					<input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
					@if ($errors->
					has('password'))
					<span class="invalid-feedback" role="alert"><strong>{{ $errors->first('password') }}</strong></span>
					@endif
				</div>
				<div class="form-group row">
					<label for="password-confirm" class="col-form-label text-md-right">{{ __('Confirmation du mot de passe') }}</label>
					<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
				</div>
				<div class="form-group row mb-0">
					<button type="submit" class="btn-register">
						<span><i class="fas fa-user-plus"></i></span>
						{{ __('Inscription') }}
					</button>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection