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
					<a href="{{ url('/admin/create') }}" class="btn btn-blue btn-normal btn-add">
						<span><i class="fas fa-plus"></i></span>
						Ajouter un(e) stage / formation
					</a>
					<!-- <button class="btn btn-red btn-normal btn-remove-multiple">
						<span><i class="fas fa-trash-alt"></i></span>
						Supression multiple
					</button> -->
				</div>			
			</div>
			<table class="table table-bordered table-hover">
				<thead>
					<!-- <th><i class="fas fa-trash-alt"></i></th> -->
					<th>Titre</th>
					<th>Type</th>
					<th>Categorie</th>
					<th>Crée le</th>
					<th>Statut</th>
					<th>Action(s)</th>
				</thead>
				<tbody>
					@foreach ($posts as $posts)
						<tr>
							<!-- <td> <input type="checkbox"> </td> -->
							<td>{{ $posts->titre }}</td>
							<td>{{ $posts->post_type }}</td>
							<td>{{ $posts->categories->name }}</td>
							<td>{{ $posts->created_at }}</td>
							<td></td>
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

