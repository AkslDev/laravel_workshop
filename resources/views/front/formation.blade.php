@extends('layouts.master')

@section('content')
<section class="formation gradient">
	<div class="left-content">
		{{ $posts->links() }}
		@foreach ($posts as $post)
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
						Débute le : <strong>{{$post->start}}</strong>
					</p> 	
				</div>
			</div>
		@endforeach
	</div>
	<div class="right-content">
		<div class="search">
			<h1>Recherchez une formation </h1>
			<form action="{{route('searchFormation')}}" method="GET" role="search" enctype="multipart/form-data">
				{{ csrf_field() }}
				<div class="input-search input-group">
					<input name="search" class="form-control" type="search" id="site-search" placeholder="Saisissez le titre d'un stage ou formation">
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