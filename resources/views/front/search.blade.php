@extends('layouts.master')

@section('content')
<section class="search gradient">
	<div class="left-content">
		@foreach ($posts as $posts)
			<div class="item">
				<a class="item-link" href="{{ url('post/' . $posts->id) }}"></a>
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

			<form action="/search" method="POST"></form>
			{{ csrf_field() }}
			<div class="input-search input-group">
				<input name="search" class="form-control" type="search" id="site-search" placeholder="Saisissez le titre d'un stage ou formation">
				<div class="input-group-append">
        				<button type="submit"><i class='fas fa-search'></i></button>
  				</div>
			</div>
		</div>
	</div>
</section>

@endsection