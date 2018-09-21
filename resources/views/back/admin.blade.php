@extends('layouts.master')
@section('content')
<div class="admin gradient">
	<div class="notification">
	</div>
	<div class="admin-content">
		<div class="tableau">
			<div class="top-table gradient">
				<div class="top-table-title">
					<h1>Administration</h1>
				</div>
				<div class="top-table-action">
					
					<!-- <button class="btn btn-red btn-normal btn-remove-multiple">
						<span><i class="fas fa-trash-alt"></i></span>
						Supression multiple
					</button> -->
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
					<!-- <th><i class="fas fa-trash-alt"></i></th> -->
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
							<!-- <td> <input type="checkbox"> </td> -->
							<td>{{ $posts->titre }}</td>
							<td>{{ $posts->post_type }}</td>
							<td>{{ $posts->categories->name }}</td>
							<td>{{ $posts->created_at }}</td>
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
	</div>
</div>
@endsection

