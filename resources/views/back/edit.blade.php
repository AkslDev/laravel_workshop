@extends('layouts.master')
	@section('content')
	<div class="edit gradient">
		<div class="edit-content">
			@if(count($posts)>0)
			<div class="top-edit gradient">
				<h1>Modification d'un stage ou d'une formation
				</h1>	
			</div>
			<form method="POST" action="{{ route('admin.update', $posts->id) }}" class="needs-validation" enctype="multipart/form-data">
				<div class="form-group form-row">
					<label for="titre">Titre</label>
					<input id="titre" type="text" class="form-control" name="titre" placeholder="Titre de votre stage ou formation" required autofocus value="{{$posts->titre}}">
					<div class="valid-feedback">
						Titre valide.
					</div>
					<div class="invalid-feedback">
						Titre invalide.
					</div>
				</div>
				<div class="form-group row">
					<label for="description">Description</label>
					<textarea id="description" name="description" class="form-control" placeholder="Description de votre stage ou formation" required>{{$posts->description}}</textarea>
					<div class="valid-feedback">
						Description valide.
					</div>
					<div class="invalid-feedback">
						Description invalide.
					</div>
				</div>
				<div class="form-group">
					<div class="picture">
						<label for="picture">Image</label>
						<input id="picture" type="file" name="picture" class="input-file">
						<div class="input-group">
							<input type="text" class="form-control" disabled placeholder="Image de votre stage ou formation" value="{{($posts->pictures->link)}}">
							<div class="input-group-prepend">
								<button class="btn btn-blue btn-normal upload-field" type="button">
									<span><i class="fas fa-upload"></i></span>
									Importer
								</button>
							</div>
						</div>
					</div>
					<div class="valid-feedback">
						Image valide.
					</div>
					<div class="invalid-feedback">
						Image invalide.
					</div>
				</div>
				<div class="form-group row">
					<div class="type">
						<label for="post_type">Type</label>
						<select name="post_type" class="custom-select" id="post_type" required>
							<option selected>Type du post</option>
							<option value="1">Stage</option>
							<option value="2">Formation</option>
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
						<select class="custom-select" id="categorie" required>
							<option selected>Catégorie du post</option>
							<option value="1">Front-End</option>
							<option value="2">Back-End</option>
							<option value="3">Full Stack</option>
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
						<input id="start" name="start" class="form-control" type="date" placeholder="01/01/2018" required value="{{$posts->start}}">
						<div class="valid-feedback">
							Date de démarrage valide.
						</div>
						<div class="invalid-feedback">
							Date de démarrage invalide.
						</div>
					</div>
					<div class="date_end">
						<label for="end">Termine le</label>
						<input id="end" name="end" class="form-control" type="date" placeholder="01/01/2018"  required value="{{$posts->end}}">
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
						<label for="price">Prix</label>
						<div class="input-group">
							<input id="price" type="number" class="form-control" name="price" placeholder="500" required value="{{$posts->price}}">
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
						<label for="max_users">Nombre d\'utilisateurs</label>
						<input id="max_users" type="number" class="form-control" name="max_users" placeholder="5" required value="{{$posts->max_users}}">
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
						<span><i class="fas fa-check"></i></span>
						Enregistrer
					</button>
				</div>
				{{csrf_field()}}
			</form>
		@endif 

		</div>
	</div>
@endsection
