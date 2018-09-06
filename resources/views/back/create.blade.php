@extends('layouts.master')
	@section('content')
	<div class="create gradient">
		<div class="create-content">
			<div class="top-create gradient">
				<h1>Ajout d'un(e) stage ou d'une formation</h1>	
			</div>
			<form method="POST" action="{{url('dashboard')}}" class="needs-validation" novalidate>
				<div class="form-group form-row">
					<label for="titre">{{ __('Titre') }}</label>
					<input id="titre" type="text" class="form-control" name="titre" placeholder="Titre de votre stage ou formation" required autofocus>
					<div class="valid-feedback">
						Titre valide.
					</div>
					<div class="invalid-feedback">
						Titre invalide.
					</div>
				</div>
				<div class="form-group row">
					<label for="description">{{ __('Description') }}</label>
					<textarea id="description" name="description" class="form-control" placeholder="Description de votre stage ou formation" required></textarea>
					<div class="valid-feedback">
						Description valide.
					</div>
					<div class="invalid-feedback">
						Description invalide.
					</div>
				</div>
				<div class="form-group row">
					<div class="date_start">
						<label for="start">{{ __('Démarre le') }}</label>
						<input id="start" name="start" class="form-control" type="date" placeholder="01/01/2018" required>
						<div class="valid-feedback">
							Date de démarrage valide.
						</div>
						<div class="invalid-feedback">
							Date de démarrage invalide.
						</div>
					</div>
					<div class="date_end">
						<label for="end">{{ __('Termine le') }}</label>
						<input id="end" name="end" class="form-control" type="date" placeholder="01/01/2018"  required>
						<div class="valid-feedback">
							Date de fin valide.
						</div>
						<div class="invalid-feedback">
							Date de fin invalide.
						</div>
					</div>
				</div>
				<div class="form-group row">
					<div class="price">
						<label for="price">{{ __('Prix') }}</label>
						<div class="input-group">

							<input id="price" type="number" class="form-control" name="price" placeholder="500"required>
							<div class="input-group-append">
								<span class="input-group-text">€</span>
							</div>
							<div class="valid-feedback">
								Prix valide.
							</div>
							<div class="invalid-feedback">
								Prix invalide.
							</div>

						</div>
					</div>
					<div class="maxuser">
						<label for="max_users">{{ __('Nombre d\'utilisateurs') }}</label>
						<input id="max_users" type="number" class="form-control" name="max_users" placeholder="5" required>
						<div class="valid-feedback">
							Nombre d'utilisateur(s) valide.
						</div>
						<div class="invalid-feedback">
							Nombre d'utilisateur(s) invalide.
						</div>
					</div>
				</div>
				<div class="form-group row mb-0">
					<button type="submit" class="btn btn-blue btn-normal">
						<span><i class="fas fa-plus"></i></span>
						{{ __('Ajouter') }}
					</button>
				</div>
				{{csrf_field()}}
			</form>
		</div>
	</div>
@endsection
