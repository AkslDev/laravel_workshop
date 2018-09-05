@extends('layouts.master')

@section('content')
<section class="home">
	<div class="left-content">
		@foreach ($posts as $posts)
		<div class="item">
			<div class="left-item">
				<img class="image" src="{{url('images', $posts->pictures->link)}}" alt="Image du post {{$posts->titre}}">
			</div>
			<div class="right-item">
				<a class="title" href="{{ url('post/' . $posts->id) }}">{{ $posts->titre }}</a>
				<span  class="type">{{ $posts->post_type }}</span >
				<p class="description">{{ $posts->description }}</p>	
				<p class="date-start">
					<i class="far fa-calendar-alt"></i>
					Débute le : {{$posts->start}}
				</p> 	
			</div>
		</div>
		@endforeach
	</div>
	<div class="right-content">
		<div class="search">
			<h1>Recherchez un(e) stage / formation </h1>
			<div class="input-search input-group">
				<input class="form-control" type="search" id="site-search" placeholder="Saisissez le titre d'un stage ou formation">
				<div class="input-group-append">
        				<button><i class='fas fa-search'></i></button>
  				</div>
			</div>
		</div>
	</div>
</section>

@endsection