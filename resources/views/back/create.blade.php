@extends('layouts.master')
	@section('content')
	<div class="create gradient">
		<div class="create-content">
			<div class="top-create gradient">
				<h1>Ajout d'un(e) stage ou d'une formation</h1>	
			</div>
			
			<form action="{{ url('/admin') }}" method="post" enctype="multipart/form-data" novalidate class="needs-validation">
				@if ($errors->any())
    					<div class="alert alert-danger">
						<ul>
						    	@foreach ($errors->all() as $error)
						        	<li>{{$error}}</li>
						    	@endforeach
						</ul>
    					</div>
				@endif

				<div class="form-group form-row">
					<label for="titre">Titre</label>
					<input id="titre" type="text" class="form-control" name="titre" placeholder="Titre de votre stage ou formation" required autofocus>
					<div class="valid-feedback">
        					Titre valide
      					</div>
      					<div class="invalid-feedback">
        					Titre non-valide
      					</div>
				</div>
				<div class="form-group row">
					<label for="description">Description</label>
					<textarea id="description" name="description" class="form-control" placeholder="Description de votre stage ou formation" required></textarea>
					<div class="valid-feedback">
        					Description valide
      					</div>
      					<div class="invalid-feedback">
        					Description non-valide
      					</div>
				</div>
				<div class="form-group">
					<div class="picture">
						<label for="picture">Image</label>
						<input id="picture" type="file" name="picture" class="input-file" required>
						<div class="input-group">
							<input type="text" class="form-control" disabled placeholder="Image de votre stage ou formation">
							<div class="input-group-prepend">
								<button class="btn btn-blue btn-normal upload-field" type="button">
									<span><i class="fas fa-upload"></i></span>
									Importer
								</button>
							</div>	
						</div>
					</div>
				</div>
				<div class="form-group row">
					<div class="type">
						<label for="post_type">Type</label>
						<select name="post_type" class="custom-select" id="post_type" required>
							<option selected>Type du post</option>
							<option value="stage">Stage</option>
							<option value="formation">Formation</option>
						</select>
						<div class="valid-feedback">
        						Type valide
      						</div>
      						<div class="invalid-feedback">
        						Type non-valide
      						</div>
					</div>
					<div class="categorie">
						<label for="categorie">Catégorie</label>
						<select name="categorie" class="custom-select" id="categorie" required>
							<option selected>Catégorie du post</option>
							<option value="front-end">Front-End</option>
							<option value="back-end">Back-End</option>
							<option value="fullstack ">Full Stack</option>
						</select>
						<div class="valid-feedback">
        						Catégorie valide
      						</div>
      						<div class="invalid-feedback">
        						Catégorie non-valide
      						</div>
					</div>
				</div>
				<div class="form-group row">
					<div class="date_start">
						<label for="start">Démarre le</label>
						<input id="start" name="start" class="form-control" type="date" placeholder="01/01/2018" required>
						<div class="valid-feedback">
        						Date de démarrage valide
      						</div>
      						<div class="invalid-feedback">
        						Date de démarrage non-valide
      						</div>
					</div>
					<div class="date_end">
						<label for="end">Termine le</label>
						<input id="end" name="end" class="form-control" type="date" placeholder="01/01/2018"  required>
						<div class="valid-feedback">
        						Date de fin valide
      						</div>
      						<div class="invalid-feedback">
        						Date de fin non-valide
      						</div>
					</div>
				</div>
				<div class="form-group row">
					<div class="price">
						<label for="price">Prix</label>
						<div class="input-group">
							<input id="price" type="number" class="form-control" name="price" placeholder="500" required>
							<div class="input-group-append">
								<span class="input-group-text">€</span>
							</div>
							<div class="valid-feedback">
        							Prix valide
      							</div>
      							<div class="invalid-feedback">
        							Prix non-valide
      							</div>
						</div>
					</div>
					<div class="maxuser">
						<label for="max_users">Nombre d'utilisateurs</label>
						<input id="max_users" type="number" class="form-control" name="max_users" placeholder="5" required>
						<div class="valid-feedback">
        						Nombre d'utilisateurs maximum valide
      						</div>
      						<div class="invalid-feedback">
        						Nombre d'utilisateurs maximum non-valide
      						</div>
					</div>
				</div>
				<div class="form-group row mb-0">
					<button type="submit" class="btn btn-blue btn-normal">
						<span><i class="fas fa-plus"></i></span>
						Ajouter
					</button>
				</div>
				{{csrf_field()}}
			</form>
		</div>
	</div>

@endsection
