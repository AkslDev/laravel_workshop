@extends('layouts.master')

@section('content')
<section class="contact gradient">
	<div class="contact-content">
		<div class="top-contact gradient">
			<h1>Contact</h1>
		</div>
		<div class="form-contact">
			<form action="{{route('sendmail')}}" method="POST">
				{{csrf_field()}}
				<div class="form-group row">
					<label for="email">{{ __('Adresse email') }}</label>
					<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"required autofocus placeholder="exemple@exemple.com">
					@if ($errors->has('email'))
						<span class="invalid-feedback" role="alert">
							<strong>
								Veuillez saisir une adresse email valide.
							</strong>
						</span>
					@endif
				</div>
				<div class="form-group row">
					<label for="message">Message</label>
					<textarea id="message" name="message" class="form-control" placeholder="Saisissez l'objet de votre message"> 
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