@extends('layouts.master')

@section('content')
<section class="formation gradient">
	<div class="left-content">
		{{ $posts->links() }}
		@forelse ($posts as $post)
			<div class="item">
				<a class="item-link" href="{{ url('post/' . $post->id) }}"></a>
				<div class="left-item">
					<img class="image" src="{{url('images', $post->pictures->link)}}" alt="Image du post {{$post->titre}}">
				</div>
				<div class="right-item">
					<a class="title" href="{{ url('post/' . $post->id) }}">{{ $post->titre }}</a>
					<span  class="type">
						<strong>{{ $post->post_type }}</strong> - 
						<span class="categorie">{{$post->categories->name}}</span>	
					 </span >
					<p class="description">{{ $post->description }}</p>	
					<p class="date-start">
						<i class="far fa-calendar-alt"></i>
						Débute le : <strong>{{date('d/m/Y', strtotime($post->start))}}</strong>
					</p> 	
				</div>
			</div>
			@empty
			<div class="no-item item">
				<h1>Oop's</h1>
				<p>Il semblerait qu'il y ait un soucis, il n'y a aucune formation à afficher !</p>
			</div>
		@endforelse
	</div>
	<div class="right-content">
		<div class="search">
			<h1>Recherchez une formation </h1>
			<form action="{{route('searchFormation')}}" method="GET" role="search" enctype="multipart/form-data">
				{{ csrf_field() }}
				<div class="input-search input-group">
					<input name="search" class="form-control" type="search" id="site-search" placeholder="Saisissez le titre d'une formation">
					<div class="input-group-append">
        					<button type="submit"><i class='fas fa-search'></i></button>
  					</div>
				</div>
			</form>
		</div>
		<button class="go-top">
			<i class="fas fa-angle-up"></i>
		</button>
	</div>
</section>

@endsection