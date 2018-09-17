@extends('layouts.master')
	@section('content')
	<div class="create gradient">
		<div class="create-content">
			<div class="top-create gradient">
				<h1>Ajout d'un(e) stage ou d'une formation</h1>	
			</div>
			<form action="{{ url('/dashboard') }}" method="post" enctype="multipart/form-data">
				<div class="form-group form-row">
					<label for="titre">Titre</label>
					<input id="titre" type="text" class="form-control" name="titre" placeholder="Titre de votre stage ou formation" required autofocus>
				</div>
				<div class="form-group row">
					<label for="description">Description</label>
					<textarea id="description" name="description" class="form-control" placeholder="Description de votre stage ou formation" required></textarea>
				</div>
				<div class="form-group">
    					<label for="picture">Example file input</label>
    					<input type="file" name="picture" class="form-control-file" id="picture">
					<!-- <div class="picture">
						<label for="picture">Image</label>
						<input id="picture" type="file" name="picture" class="input-file">
						<div class="input-group">
							<input type="text" class="form-control" disabled placeholder="Image de votre stage ou formation">
							<div class="input-group-prepend">
								<button class="btn btn-blue btn-normal upload-field" type="button">
									<span><i class="fas fa-upload"></i></span>
									Importer
								</button>
							</div>
						</div>
					</div> -->
				</div>
				<div class="form-group row">
					<div class="date_start">
						<label for="start">Démarre le</label>
						<input id="start" name="start" class="form-control" type="date" placeholder="01/01/2018" required>
					</div>
					<div class="date_end">
						<label for="end">Termine le</label>
						<input id="end" name="end" class="form-control" type="date" placeholder="01/01/2018"  required>
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
						</div>
					</div>
					<div class="maxuser">
						<label for="max_users">Nombre d'utilisateurs</label>
						<input id="max_users" type="number" class="form-control" name="max_users" placeholder="5" required>
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
