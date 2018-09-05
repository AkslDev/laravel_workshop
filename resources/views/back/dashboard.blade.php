@extends('layouts.master')
@section('content')
<div class="dashboard">
	<!-- {{ Auth::user()->name }} -->
	<div class="dashboard-content">
		<div class="notification">
			<div class="notification-hello">
				<div class="notification-close">
					<i class="icon-close"></i>
				</div>
				<div class="notification-text">
					<p>Bonjour <span>{{ Auth::user()->name }}</span> !</p>	
				</div>
			</div>
			
		</div>
		<div class="tableau">
			<div class="top-table">
				<div class="top-table-title">
					<h1>Administration</h1>
				</div>
				<div class="top-table-action">
					<button class="btn btn-blue btn-normal btn-add">
						<span><i class="fas fa-plus"></i></span>
						Ajouter un(e) stage / formation
					</button>
					<button class="btn btn-red btn-normal btn-remove-multiple">
						<span><i class="fas fa-trash-alt"></i></span>
						Supression multiple
					</button>
				</div>			
			</div>
			<table class="table table-bordered table-hover">
				<thead>
					<th><i class="fas fa-trash-alt"></i></th>
					<th>Titre</th>
					<th>Type</th>
					<th>Crée le</th>
					<th>Statut</th>
					<th>Action(s)</th>
				</thead>
				<tbody>
					@foreach ($posts as $posts)
						<tr>
							<td> <input type="checkbox"> </td>
							<td>{{ $posts->titre }}</td>
							<td>{{ $posts->post_type }}</td>
							<td>{{ $posts->created_at }}</td>
							<td></td>
							<td>
								<button class="btn btn-grey btn-icon btn-edit" id="edit_post-{{$posts->id}}"
									data-toggle="tooltip" title="Editer">
									<span><i class="far fa-edit"></i></span>
								</button>
								<button class="btn btn-blue btn-icon btn-preview" id="view_post-{{$posts->id}}"
									data-toggle="tooltip" title="Prévisualiser">
									<span><i class="far fa-eye"></i></span>
								</button>
								<button class="btn btn-red btn-icon btn-remove" id="remove_post-{{$posts->id}}" data-toggle="tooltip" title="Supprimer">
									<span><i class="far fa-trash-alt"></i></span>
								</button>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		<div class="popup_add">
			<a href="javascript:;" class="btn-close-add">
				<i class="far fa-times-circle"></i>
			</a>
			<div class="popup_content">
				<div class="top_popup">
					<h2>Ajout d'un(e) stage ou d'une formation</h2>	
				</div>
				<form class="needs-validation" novalidate>
					<div class="form-group form-row">
						<label for="new_titre">{{ __('Titre') }}</label>
						<input id="new_titre" type="text" class="form-control" name="new_titre" placeholder="Titre de votre stage ou formation" required autofocus>
						<div class="valid-feedback">
        						Titre valide.
      						</div>
      						<div class="invalid-feedback">
        						Titre invalide.
      						</div>
					</div>
					<div class="form-group row">
						<label for="new_description">{{ __('Description') }}</label>
						<textarea id="new_description" name="new_description" class="form-control" placeholder="Description de votre stage ou formation" required></textarea>
						<div class="valid-feedback">
        						Description valide.
      						</div>
      						<div class="invalid-feedback">
        						Description invalide.
      						</div>
					</div>
					<div class="form-group row">
						<div class="date_start">
							<label for="new_start">{{ __('Démarre le') }}</label>
   							<input id="new_start" name="new_start" class="form-control" type="date" placeholder="01/01/2018" required>
   							<div class="valid-feedback">
        							Date de démarrage valide.
      							</div>
      							<div class="invalid-feedback">
        							Date de démarrage invalide.
      							</div>
						</div>
						<div class="date_end">
							<label for="new_end">{{ __('Termine le') }}</label>
   							<input id="new_end" name="new_end" class="form-control" type="date" placeholder="01/01/2018"  required>
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
							<label for="new_price">{{ __('Prix') }}</label>
							<div class="input-group">

								<input id="new_price" type="number" class="form-control" name="new_price" placeholder="500"required>
								<div class="input-group-append">
          								<span class="input-group-text" id="inputGroupPrepend">€</span>
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
							<label for="new_maxuser">{{ __('Nombre d\'utilisateurs') }}</label>
							<input id="new_maxuser" type="number" class="form-control" name="new_maxuser" placeholder="5" required>
							<div class="valid-feedback">
        							Nombre d'utilisateur(s) valide.
      							</div>
      							<div class="invalid-feedback">
        							Nombre d'utilisateur(s) invalide.
      							</div>
						</div>
					</div>
					<div class="form-group row mb-0">
						<button type="submit" class="btn-add">
							<span><i class="fas fa-plus"></i></span>
							{{ __('Ajouter') }}
						</button>
					</div>
				</form>
			</div>
		</div>
		<div class="popup_remove">
			<a href="javascript:;" class="btn-close-remove">
				<i class="far fa-times-circle"></i>
			</a>
			<div class="popup_content">
				<div class="top_popup">
					<h2>Supression d'un(e) stage ou d'une formation</h2>		
				</div>
				
				<div class="body_popup">
					<p>	
						Êtes-vous sûr de vouloir supprimer ce stage / cette formation ? 
					</p>
					<div class="btn_action">
						<button type="submit" class="btn-remove">
							<span><i class="fas fa-trash-alt"></i></span>
							{{ __('Supprimer') }}
						</button>
						<button type="submit" class="btn-cancel">
							<span><i class="fas fa-ban"></i></span>
							{{ __('Annuler') }}
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

