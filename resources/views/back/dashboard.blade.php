@extends('layouts.master')
@section('content')
<div class="dashboard">
	<!-- {{ Auth::user()->name }} -->
	<div class="dashboard-content">
		<div class="notification">
			<div class="notification-close">
				<i class="icon-close"></i>
			</div>
			<div class="notification-text">
				<p>Bonjour <span>{{ Auth::user()->name }}</span> !</p>	
			</div>
		</div>
		<div class="tableau">
			<div class="top-table">
				<div class="top-table-title">
					<h1>Administration</h1>
				</div>
				<div class="top-table-action">
					<button class="btn-add">
						<span><i class="fas fa-plus"></i></span>
						Ajouter un(e) stage / formation
					</button>
					<button class="btn-remove">
						<span><i class="fas fa-trash-alt"></i></span>

						Supression multiple
					</button>
				</div>
				
			</div>
			<table class="table table-bordered table-hover">
				<thead>
					<th>Titre</th>
					<th>Type</th>
					<th>Date</th>
					<th>Statut</th>
					<th>Action(s)</th>
				</thead>
				<tbody>
					@foreach ($posts as $posts)
						<tr>
							<td>{{ $posts->titre }}</td>
							<td>{{ $posts->post_type }}</td>
							<td>{{ $posts->created_at }}</td>
							<td></td>
							<td>
								<button class="btn-remove">
									<span><i class="far fa-trash-alt"></i></span>
								</button>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection

