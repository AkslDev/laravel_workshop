@extends('layouts.master')

@section('content')
<section class="contact gradient">
	<div class="contact-content">
		<div class="top-contact gradient">
			<h1>Contact</h1>
		</div>
		<div class="form-contact">
			<form action="#">
				<div class="form-group row">
					<label for="contact-email">{{ __('Adresse email') }}</label>
					<input id="contact-email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="contact-email" value="{{ old('email') }}" required autofocus placeholder="exemple@exemple.com">
					@if ($errors->has('email'))
						<span class="invalid-feedback" role="alert">
							<strong>
								Veuillez saisir une adresse email valide.
							</strong>
						</span>
					@endif
				</div>
				<div class="form-group row">
					<label for="contact-description">{{ __('Description') }}</label>
					<textarea id="contact-description" name="contact-description" class="form-control" placeholder="Saisissez l'objet de votre contact"> 
					</textarea>
				</div>
				<div class="form-group row mb-0">
					<button type="submit" class="btn btn-normal btn-blue btn-submit">
						<span><i class="fas fa-check"></i></span>
						{{ __('Envoyer') }}
					</button>
				</div>
			</form>
		</div>
	</div>


</section>

@endsection