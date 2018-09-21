@extends('layouts.master')
@section('content')
<div class="admin gradient">
	<div class="notification"></div>
	<div class="admin-content">
		<div class="tableau">
			<div class="top-table gradient">
				<div class="top-table-title">
					<h1>Administration</h1>
				</div>
				{{ $posts->links() }}
				<div class="top-table-action">
					<form action="{{route('searchAdmin')}}" method="POST" role="search" enctype="multipart/form-data">
						{{ csrf_field() }}
						<div class="input-search input-group">
							<input name="search" class="form-control" type="search" id="site-search" placeholder="Saisissez le titre d'un stage ou formation">
							<div class="input-group-append">
        							<button type="submit"><i class='fas fa-search'></i></button>
  							</div>
						</div>
					</form>
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
					@foreach ($posts as $posts)
						<tr>
							<td>{{ $posts->titre }}</td>
							<td>{{ $posts->post_type }}</td>
							<td>{{ $posts->categories->name }}</td>
							<td>{{ date('d/m/y', strtotime($posts->created_at)) }}</td>
							@if($posts->statut == "publié")
							<td>
								<a href="javascript:;" class="btn btn-green btn-icon btn-publish" id="statut_post-{{$posts->id}}" data-toggle="tooltip" title="Publié" target="blank">
									<span><i class="far fa-check-circle"></i></span>
								</a>
							</td>
							@elseif($posts->statut == "non-publié")
							<td>
								<a href="javascript:;" class="btn btn-yellow btn-icon btn-unpublished" id="statut_post-{{$posts->id}}" data-toggle="tooltip" title="Non-publié" target="blank">
									<span><i class="far fa-times-circle"></i></span>
								</a>
							</td>
							@endif
							<td>
								<a href="admin/edit/{{$posts->id}}" class="btn btn-grey btn-icon btn-edit" id="edit_post-{{$posts->id}}" data-toggle="tooltip" title="Modifier">
									<span><i class="far fa-edit"></i></span>
								</a>
								<a href="admin/preview/{{$posts->id}}" class="btn btn-blue btn-icon btn-preview" id="view_post-{{$posts->id}}" data-toggle="tooltip" title="Prévisualiser" target="blank">
									<span><i class="far fa-eye"></i></span>
								</a>
								<a href="{{route('admin.destroy',$posts->id)}}" class="btn btn-red btn-icon" id="remove_post-{{$posts->id}}" data-toggle="tooltip" title="Supprimer">
									<span><i class="far fa-trash-alt"></i></span>
								</a>
								
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		<div class="admin-action menu menu--floating ">
			<a href="{{ url('/admin/create') }}" class="menu--floating__action btn btn-blue btn-icon btn-create" title="Ajouter un post">
				<span class="hide-accessible">
					<i class="fas fa-plus"></i>
				</span>
			</a> 
     			<a class="menu--floating__action has-background background-blue" href="javascript:;">
     				<span class="hide-accessible">
					<i class="fas fa-cog"></i>
     				</span>
     			</a>
		</div>
	</div>		
</div>
@endsection

