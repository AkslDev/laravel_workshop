@extends('layouts.master')
@section('content')
<div class="admin gradient">
	<div class="notification">
		<div class="notification-close">
			<i class="icon-close"></i>
		</div>
		<div class="notification-text">
			@if(session()->has('message'))
				<p class="notification-message">{{session()->get('message')}}</p>
			@endif
		</div>	
	</div> 
	<div class="admin-content">
		<div class="tableau">
			<div class="top-table gradient">
				<div class="top-table-title">
					<h1>Administration</h1>
				</div>
				{{ $posts->links() }}
				<div class="top-table-action">
					<form action="" method="POST" role="search" enctype="multipart/form-data">
						{{ csrf_field() }}
						<div class="input-search input-group">
							<input name="search" class="form-control" type="search" id="site-search" placeholder="Saisissez le titre d'un stage ou formation">
							<div class="input-group-append">
        							<button type="submit"><i class='fas fa-search'></i></button>
  							</div>
						</div>
					</form>
					<a href="{{ url('/admin/create') }}" class="btn btn-blue btn-normal btn-add">
						<span><i class="fas fa-plus"></i></span>
						Ajouter un(e) stage / formation
					</a>
				</div>			
			</div>
			<table class="table table-bordered table-hover">
				<thead>
					<th>Titre</th>
					<th>Type</th>
					<th>Categorie</th>
					<th>Crée le</th>
					<th class="table_statut">Statut</th>
					<th class="table_action">Action(s)</th>
				</thead>
				<tbody>
					@forelse ($posts as $posts)
						<tr>
							<td>{{ $posts->titre }}</td>
							<td>{{ $posts->post_type }}</td>
							<td>{{ $posts->categories->name }}</td>
							<td>{{date('d/m/Y', strtotime($posts->created_at))}}</td>
							@if($posts->status == "publié")
							<td>
								<a href="{{route('admin.status',$posts->id)}}" class="btn btn-green btn-icon btn-publish" id="statut_post-{{$posts->id}}" data-toggle="tooltip" title="Publié">
									<span><i class="far fa-check-circle"></i></span>
								</a>
							</td>
							@elseif($posts->status == "non-publié")
							<td>
								<a href="{{route('admin.status',$posts->id)}}" class="btn btn-yellow btn-icon btn-unpublished" id="statut_post-{{$posts->id}}" data-toggle="tooltip" title="Non-publié">
									<span><i class="far fa-times-circle"></i></span>
								</a>
							</td>
							@endif
							<td>
								<a href="admin/edit/{{$posts->id}}" class="btn btn-grey btn-icon btn-edit" id="edit_post-{{$posts->id}}" data-toggle="tooltip" title="Modifier">
									<span><i class="far fa-edit"></i></span>
								</a>
								<a href="admin/preview/{{$posts->id}}" class="btn btn-blue btn-icon btn-preview" id="view_post-{{$posts->id}}" data-toggle="tooltip" title="Prévisualiser">
									<span><i class="far fa-eye"></i></span>
								</a>
								<a 
									href="#" 
									class="btn btn-red btn-icon btn-delete" 
									id="remove_post-{{$posts->id}}" 
									data-toggle="tooltip"
									data-id="{{$posts->id}}" 
									title="Supprimer">
									<span><i class="far fa-trash-alt"></i></span>
								</a>
								
							</td>
						</tr>
						@empty
						<tr>
							<td colspan="6">
								<span>Il semblerait qu'il y ait un soucis, il n'y a aucun stage ou formation à afficher !</span> 
							</td>
						</tr>
					@endforelse
				</tbody>
			</table>
		</div>
		<div class="popup_remove">
			<a href="javascript:;" class="btn-close-remove">
				<i class="far fa-times-circle"></i>
			</a>
			<div class="popup_content">
				<div class="top_popup gradient">
					<h2>Supression d'un stage ou d'une formation</h2>		
				</div>
				<div class="body_popup">
					<p>	
						Êtes-vous sûr de vouloir supprimer ce post ? 
					</p>
					<div class="btn_action">
						<a href="" class="btn btn-cancel btn-yellow btn-normal">
							<span><i class="fas fa-ban"></i></span>
							Annuler
						</a>
						<a href="" id="deletePost" type="submit" class="btn btn-red btn-normal btn-remove">
							<span><i class="fas fa-trash-alt"></i></span>
							Supprimer
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>		
</div>
@endsection

