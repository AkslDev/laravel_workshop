@extends('layouts.master')

@section('content')
<section class="preview gradient">
	<article class="item-open">
		@if(count($posts)>0)
			<div class="top-preview gradient">
				<div class="top-table-title">
					<h1>{{$posts->titre}}</h1>
				</div>
				<div class="top-table-action">
					<a href="/admin/edit/{{$posts->id}}" class="btn btn-grey btn-icon btn-edit" id="edit_post-{{$posts->id}}" data-toggle="tooltip" title="Modifier">
						<span><i class="far fa-edit"></i></span>
					</a>
					<a href="/admin" class="btn btn-blue btn-normal btn-add">
						<span><i class="fas fa-angle-left"></i></span>
						Retour au dashboard
					</a>
				</div>
			</div>
			<div class="preview-content">
				<div class="left-post">
					<img class="image" src="{{url('images', $posts->pictures->link)}}" alt="Image du post {{$posts->titre}}">
					<div class="post-info">
						<div class="dates">
							<p class="date-start">
								<i class="far fa-calendar-plus"></i>
								Débute le : <strong>{{date('d/m/Y', strtotime($posts->start))}}</strong>
							</p> 
							<p class="date-end">
								<i class="far fa-calendar-times"></i>
								Termine le : <strong>{{date('d/m/Y', strtotime($posts->end))}}</strong>
							</p> 
						</div>
						<div class="price-user">
							<p class="price">
								<i class="fas fa-money-bill-alt"></i>
								Prix : <strong>{{$posts->price}} €</strong>
							</p>
							<p class="user">
								<i class="fas fa-users"></i>
								Limité à <strong>{{$posts->max_users}}</strong> élève(s).
							</p>
						</div>
					</div>
				</div>
				<div class="right-post">
					<p class="post_type">
						<span class="type">{{$posts->post_type}}</span>
						-
						<span class="categorie">{{$posts->categories->name}}</span>
					</p>
					<p class="description">{{$posts->description}}</p> 
				</div>
			</div>
		@endif 
	</article>
</section>
@endsection 